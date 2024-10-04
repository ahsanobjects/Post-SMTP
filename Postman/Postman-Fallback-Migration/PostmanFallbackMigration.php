<?php

if( !class_exists( 'PostmanFallbackMigration' ) ):
class PostmanFallbackMigration {
    
    private $existing_logging = false;
    private $migrating = false;
    private $have_old_logs = false;
    private $logging_file = '';
    private $logging_file_url = '';

    /**
     *  Constructor PostmanFallbackMigration
     * 
     * @since 2.4.0
     * @version 1.0.0
     */
    public function __construct() {

        if( is_multisite() ) {

            $this->logging_file = WP_CONTENT_DIR . '/post-smtp-migration-' . get_current_blog_id() . '.log';
            $this->logging_file_url = WP_CONTENT_URL . '/post-smtp-migration-' . get_current_blog_id() . '.log';

        }
        else {

            $this->logging_file = WP_CONTENT_DIR . '/post-smtp-migration.log';
            $this->logging_file_url = WP_CONTENT_URL . '/post-smtp-migration.log';
            
        }

        $this->existing_db_version = get_option( 'postman_db_version' );
        $hide_notice = get_transient( 'ps_dismiss_fallback_update_notice' );
        
        //Show DB Update Notice
        if( 
            ( !$hide_notice ) 
            &&
            ( $this->has_migrated() ) 
            &&
            ( $this->existing_db_version == POST_SMTP_DB_VERSION )
        ) {
            add_action( 'admin_notices', array( $this, 'notice' ) );
        }

        //Revert Migration
        if( isset( $_GET['action'] ) && $_GET['action'] == 'ps-revert-migration' ) {

            $this->revert_migration();

        }

        add_action( 'wp_ajax_ps-db-update-notice-dismiss', array( $this, 'ps_dismiss_fallback_update_notice' ) );

    }

    /**
     *  Shows DB Update Notice | Action call-back
     * 
     * @since 2.4.0
     * @version 1.0.0
     */
    public function notice() {

        $security = wp_create_nonce( 'ps-migrate-fallback-db' );
        $migration_url = admin_url( 'admin.php?page=postman' ) . '&security=' . $security . '&action=ps-migrate-logs';
        $this->migrating = get_option( 'ps_migrate_logs' );
        $current_page = isset( $_GET['page'] ) ?  $_GET['page'] : '';
        $new_logging = get_option( 'postman_db_version' );
        $dismissible = ( !$this->has_migrated() && !$this->migrating ) ? 'is-dismissible' : '';
        $revert_url = admin_url( 'admin.php?page=postman_email_log' ) . '&security=' . $security . '&action=ps-revert-migration';
       
        ?>
        <div class="notice ps-db-update-notice <?php echo esc_attr( $dismissible ); ?>" style="border: 1px solid #2271b1; border-left-width: 4px;">
            <input type="hidden" value="<?php echo esc_attr( $security ); ?>" class="ps-security">
            <p><b><?php _e( 'Post SMTP database update required', 'post-smtp' ); ?></b></p>
            <?php if( $this->existing_db_version == POST_SMTP_DB_VERSION ): ?>
                <p><?php echo _e( 'Additional Socket support will be now available in our fallback module.', 'post-smtp' ); ?></p>
                <a href="<?php echo esc_url( $migration_url ) ?>" class="button button-primary">Update for Fallback Support</a>
            <?php endif; ?>
          
            <a href="https://postmansmtp.com/new-and-better-email-log-post-smtp-feature-update/" target="__blank" class="button button-secondary">Learn about migration</a>
            <div style="float: right">
            </div>
            <div style="clear: both;"></div>
            <div style="margin: 10px 0;"></div>
        </div>
        <?php
    }

    /**
     * Checks if logs migrated or not | Same as is_migrated() but used custom query
     * 
     * @since 2.5.2
     * @version 1.0.0
     */
    public function has_migrated() {

        global $wpdb;

        $response =  $wpdb->get_results(
            "SELECT 
            count(*) AS count
            FROM 
            {$wpdb->posts}
            WHERE 
            post_type = 'postman_sent_mail'"
        );
        
        $total_old_logs = empty( $response ) ? 0 : (int)$response[0]->count;

        return true;

    }


    /**
     * Dismiss update notice | AJAX call-back
     * 
     * @since 2.5.2
     * @version 1.0.0
     */
    public function dismiss_update_notice() {

        if( isset( $_POST['action'] ) && $_POST['action'] == 'ps-db-update-notice-dismiss' && wp_verify_nonce( $_POST['security'], 'ps-migrate-logs' ) ) {

            set_transient( 'ps_dismiss_update_notice', 1, WEEK_IN_SECONDS );

        }

    }


    /**
     * Revert migration
     * 
     * @since 2.5.2
     * @version 1.0.0
     */
    public function revert_migration() {

        if( wp_verify_nonce( $_GET['security'], 'ps-migrate-logs' ) ) {

            $this->log( 'Info: `revert_migration` Reverting Migration' );
            $email_logs = new PostmanEmailLogs;

            delete_option( 'ps_migrate_logs' );
            $this->log( 'Info: `revert_migration` Deleted option ps_migrate_logs' );

            if( $email_logs->uninstall_tables() ) {

                $this->log( 'Info: `revert_migration` Tables Uninstalled' );
            
                global $wpdb;
                $response = $wpdb->query(
                    "UPDATE {$wpdb->posts} SET pinged = '' WHERE post_type = 'postman_sent_mail';"                
                );

                if( $response ) {

                    $this->log( 'Info: `revert_migration` pinged unset' );

                }

            }

            wp_redirect( admin_url( 'admin.php?page=postman_email_log' ) );

        }

    }


}

new PostmanFallbackMigration;

endif;