
## Version 1.9.8 released - The SMTP Fallback
A fallback is a unique solution only exist on Post SMTP.
You can configure a backup SMTP, so if your emails are failing your site will keep sending emails !!! [Read the detailes here](https://postmansmtp.com/post-smtp-1-9-7-the-smtp-fallback/)

## The Only SMTP plugin with chrome Notifications
Get notified if your emails are failing inside your Chrome browser. [Download here](https://chrome.google.com/webstore/detail/post-smtp-notifications/npklmbkpbknkmbohdbpikeidiaekjoch?hl=en-US)

## WordPress Mail SMTP Plugin

Post SMTP is a next-generation WP Mail SMTP plugin, that assists in the delivery of email generated by your WordPress site. Post SMTP is the first and only plugin to support the [latest security standards](http://googleonlinesecurity.blogspot.ca/2014/04/new-security-measures-will-affect-older.html). With OAuth 2.0, there is **no need** to [store your email passsword](http://blog.codinghorror.com/youre-probably-storing-passwords-incorrectly/) in the WordPress database where it might be found.

The **Connectivity Test** and intelligent **Setup Wizard** scan your SMTP server to detect firewall blocks and eliminate configuration mistakes. The built-in **Email Log** is an invaluable resource for [diagnosing problems](https://wordpress.org/support/topic/ugly-e-mails-no-html-and-no-special-characters?replies=15) with emails. Even hosts that block the standard SMTP ports, like GoDaddy or Bluehost, can't stop your email as **Post SMTP can deliver via HTTPS** if it can't use SMTP.

Post SMTP is *not* another WP Mail SMTP clone like WP Bank or Easy SMTP. It replaces the default WordPress SMTP library, PHPMailer, with the heavy-duty Zend_Mail. Never [lose an email to PHP mail()](http://www.jvfconsulting.com/blog/php-mail-function-vs-smtp-guaranteed-delivery/) again.

### The Most Fast And Easy
See how fast and easy to setup Post SMTP with Google/Gsuite or any SMTP service.

https://www.youtube.com/watch?v=z-x1DhcAN0o

### Standard Features
* Easy-to-use, powerful Setup Wizard for perfect configuration
* Commercial-grade Connectivity Tester to diagnose server issues
* Log and resend all emails; see the exact cause of failed emails
* Supports [International alphabets](https://tools.ietf.org/html/rfc6530), [HTML Mail](https://en.wikipedia.org/wiki/HTML_email) and [MultiPart/Alternative](https://en.wikipedia.org/wiki/MIME#Alternative)
* Supports forced recipients (cc, bcc, to) and custom email headers
* [SASL](https://en.wikipedia.org/wiki/Simple_Authentication_and_Security_Layer) Support: Plain/Login/CRAM-MD5/[XOAUTH2](https://en.wikipedia.org/wiki/OAuth#OAuth_2.0) authentication
* Security Support: [SMTPS](https://en.wikipedia.org/wiki/SMTPS) and [STARTTLS](https://en.wikipedia.org/wiki/STARTTLS) ([SSL/TLS](https://en.wikipedia.org/wiki/Transport_Layer_Security))
* Copy configuration to other instances of Post

## OAuth 2.0 Features
* Supports the proprietary OAuth 2.0 implementations of Gmail, Hotmail and Yahoo
* Fire-and-forget delivery continues even if your password changes
* Gmail: By combining OAuth2 and the Gmail API, Post can deliver where other plugins can not

## API (HTTPS) Email Support
* Gmail API for sending Gmail and Google Apps email (requires a [Google](https://accounts.google.com/signup) account)
Often bloggers and small business owners don't want to use third-party SMTP services. Well you can use your Gmail or G Suite account for SMTP emails.
<a href="https://www.cloudways.com/blog/post-smtp-mailer-fork-of-wordpress-postman-smtp-plugin/" rel="friend">Check the guide I wrote</a>

* Mandrill API for sending any email (requires a [Mandrill](http://www.mandrillapp.com) account)
Mandrill is an email infrastructure service offered as an add-on for MailChimp that you can use to send personalized, one-to-one e-commerce emails, or automated transactional emails.

* Mailgun API for sending any email (requires a [Mailgun](http://www.mailgun.com) account)
Mailgun SMTP is a popular SMTP service provider that allows you to send large quantities of emails. They allow you to send your first 10,000 emails for free every month.

* SendGrid API for sending any email (requires a [SendGrid](https://sendgrid.com) account and PHP 5.3)
SendGrid has a free SMTP plan that you can use to send up to 100 emails per day. With our native SendGrid SMTP integration, you can easily and securely set up SendGrid SMTP on your WordPress site.

> Post SMTP needs [translators](https://translate.wordpress.org/projects/wp-plugins/post-smtp/stable)! If you are a non-English speaker, please get involved!

## Compatibile With..
* [Woocommerce](https://wordpress.org/plugins/woocommerce/)
* [WPForms](https://wordpress.org/plugins/wpforms-lite/)
* [Elementor Forms](https://elementor.com/features/form-widget/)
* [Contact Form 7](https://wordpress.org/plugins/contact-form-7/)
* [Gravity Forms](http://www.gravityforms.com)
* [Fast Secure Contact Form](https://wordpress.org/plugins/si-contact-form/)
* [Visual Forms Builder](https://wordpress.org/plugins/visual-form-builder/)
* [Contact Form Builder](https://wordpress.org/plugins/contact-form-builder/)
* [PlanSo Forms](https://wordpress.org/plugins/planso-forms/)
* [Quform](https://www.quform.com/)
* [MyMail Newsletter](http://revaxarts-themes.com/?t=mymail) by revaxarts
* [SendPress Newsletters](https://wordpress.org/plugins/sendpress/)
* [WP HTML Mail](https://wordpress.org/plugins/wp-html-mail/)
* [Email Templates](https://wordpress.org/plugins/email-templates/)
* [WordPress Leads](https://wordpress.org/plugins/leads/)
* .. and every other plugin that uses the WordPress API [wp_mail](https://codex.wordpress.org/Function_Reference/wp_mail) to send mail!

## Requirements
* WordPress 3.9 and PHP 5.6 with SPL and iconv
* Memory: 750KiB per process at idle
* Reliable mail delivery with custom email domains requires an SPF record
* Reliable SMTP delivery requires credentials with an email service provider
* OAuth 2.0 features require a Gmail, Hotmail or Yahoo mail OAuth 2.0 credentials

## CREDITS

Post SMTP (aka Postman SMTP) plugin was originally created by Jason Hendriks.

## Installation

> To send email reliably, you must use the SMTP server assigned to that email. If Post is unable to connect to the right SMTP server, you may have to ask your host to open the ports, or create a new email account managed by your host, or switch hosts!
> 
> The Connectivity Test utility will tell you which ports are open and the actions available to you.

= Easy install and setup! (Recommended for all users) =
1. Install and activate the plugin through the 'Plugins' menu in WordPress.
1. In the WordPress 'Settings' menu select 'Post SMTP'.
1. Choose 'Start the Wizard' and follow the instructions.

## To manually configure Password Authentication (Intermediate users only)

1. Choose configure manually
1. In 'Transport', choose 'SMTP'
1. In 'Outgoing Mail Server Hostname', enter the SMTP Server's hostname
1. In 'Outgoing Mail Server Port', enter the SMTP Server's port
1. In 'Security' choose the appropriate type (a good guess is SMTPS for port 465, STARTTLS otherwise)
1. In 'Authentication', choose the authentication type (a good guess is 'Plain')
1. If your Authentication method is not 'None', enter your username (probably your email address) and password.
1. Choose the 'Message' tab.
1. In 'Envelope From Address' enter your email address. This MUST be the same address you login to webmail with.
1. In 'Message From Address' enter your email address. Or this can be an alias, mailing list, or group email if you wish.
1. Choose the Save Changes button.
1. Send yourself a test email. 

## To manually configure OAuth 2.0 Authentication (Advanced users only)

1. Choose configure manually
1. In 'Transport', choose 'SMTP'
1. In 'Outgoing Mail Server Hostname', enter the SMTP Server's hostname
1. In 'Outgoing Mail Server Port', enter the SMTP Server's port
1. In 'Security' choose the appropriate type (a good guess is SMTPS for port 465, StartTLS otherwise)
1. In 'Authentication' choose 'OAuth 2.0'
1. Post will give you a link to the Client ID maintenance page of your email service provider. Create a Client ID for your WordPress site.. [instructions for this are detailed in the FAQ](https://wordpress.org/plugins/post-smtp/faq/)
1. Copy your generated Client ID and Client secret into the plugin's Settings page.
1. Choose the 'Message' tab.
1. In 'Envelope From Address' enter your email address. This MUST be the same address you login to webmail with.
1. In 'Message From Address' enter your email address. Or this can be an alias, mailing list, or group email if you wish.
1. Choose the Save Changes button.
1. Choose the 'Request OAuth2 Permission' link and follow the instructions.
1. Send yourself a test email. 

> Post is developed on OS X with PHP 5.5.14 and Apache 2.4.9. Post is tested in a [Red Hat OpenShift](http://www.openshift.com/) environment with PHP 5.3.3 and Apache 2.2.15 with Gmail, Hotmail and Yahoo Mail (US). Post is tested with [mailtrap.io](http://mailtrap.io).



## Frequently Asked Questions

###  What is OAuth 2.0?

A modern replacement for traditional password-based authentication. Post supports the OAuth 2.0 implementations of all three major e-mail providers: Gmail, Hotmail and Yahoo Mail.

### How does OAuth 2.0 work?

Post requests a limited access OAuth 2.0 token (valet key) to access the APIs (enter the house) and perform a specific service (handle Gmail, stay out of Google Docs) with no need for you to surrender your username and password credentials (master house key).

Once access is granted, Post commandeers the WordPress wp_mail() function to provide an incredibly stable mail sub-system.

### Can't I just tell Google to allow less secure apps and keep using my old password?

Google does have a setting to [allow less secure apps](https://support.google.com/accounts/answer/6010255) but this option is [not available](http://plugins.svn.wordpress.org/Post-smtp/assets/Screen%20Shot%202015-02-21%20at%208.52.13%20PM.png) if you're using *Google Apps* to manage a domain.

There are many reasons why OAuth 2.0 is better than any password-based mechanism:

* Post will never ask for your password, so your password can't be stolen
* If you change your password regularly, you will never have to update Post's configuration
* You have tighter control over the data Post has access to. For Google users it can never access your Calendar or Docs or YouTube; for Yahoo users it can never access your Flickr
* If your WordPress site gets hacked, you can revoke Post's email access without impacting any other application or website that has access to your account

> **[NEVER give out your Gmail, Microsoft or Yahoo password](http://blog.varonis.com/giving-away-your-passwords/)** to a 3rd-party or 3rd-party program that you don't fully trust.

### What is a Client ID?
To use OAuth, your website needs it's own Client ID. The Client ID is used to control authentication and authorization and is tied to the specific URL of your website. If you manage several websites, you will need a different Client ID for each one.

### How do I get a Google Client ID? (For Gmail users only!)
Go to [Configure Post SMTP with Gmail\Gsuite OAuth](https://postmansmtp.com/how-to-configure-post-smtp-with-gmailgsuite-using-oauth/)

### How do I get a Microsoft Client ID? (For Hotmail/Live/Outlook.com users only!)
1. Go to [Microsoft account Developer Center](https://account.live.com/developers/applications/index) and select 'Create application'.
1. In the 'Application name' field enter 'Post SMTP'. Select 'I accept.'
1. Select 'API Settings' from under 'Settings'.
1. In 'Redirect URL', enter the redirect URI given by Post (either from the wizard, or from the manual configuration page). Select Save.
1. Select 'App Settings' from under 'Settings'.
1. Enter the Client ID and Client Secret displayed here into Post's settings page.

### How do I get a Yahoo Client ID? (For Yahoo Mail users only!) =
1. Go to [Yahoo Developer Network](https://developer.yahoo.com/apps/) and select 'Create an App'.
1. In the 'Application Name' field enter 'Post SMTP'. For 'Application Type' choose 'Web Application'.
1. In 'Home Page URL', enter the 'Home Page URL' given by Post.
1. In 'Callback Domain', enter the 'Callback Domain' given by Post.
1. Under 'API Permissions' choose 'Mail'. Under 'Mail' choose 'Read/Write'
1. Click 'Create App'
1. Enter the Client ID and Client Secret displayed here into Post's settings page.

### How can I revoke Post's OAuth 2.0 access? 
* If you have a Google Account, from the [Google Developer's Console](https://www.google.com/accounts/Logout?continue=https://console.developers.google.com) use the Delete button under the Client ID.
* If you have a Microsoft Live account, from the [Microsoft account Developer Center](https://account.live.com/developers/applications/index), select the Application and choose Delete Application.
* If you have a Yahoo Account, from the [Yahoo Developer Network My Apps](https://developer.yahoo.com/apps/), select the Application and choose Delete App. 



## Grant OAuth permission error messages

Please note that the Client ID and Client Secret fields are NOT for your username and password. They are for OAuth Credentials only.

### Error authenticating with this Client ID. [Error executing wp_remote_post: The user has blocked requests via HTTP.]

Your WordPress site is configured with WP_HTTP_BLOCK_EXTERNAL to prevent outbound connections. Add a whitelist rule to wp-config.php:
> define('WP_ACCESSIBLE_HOSTS', 'www.googleapis.com, login.live.com, api.login.yahoo.com');

### Error authenticating with this Client ID. [Error executing wp_remote_post: Failed to connect to xxxx] =

There is a firewall on port 443 between you and the OAuth2 server. Open up the port for outbound connections.

### Error: redirect_uri_mismatch

* You did not enter the Redirect URI correctly, watch the [instructional video](https://vimeo.com/128589255)
* You used an IP address instead of a domain name (not allowed)

### Error: invalid_client ... no support email

You've [forgotten to choose an email address in the consent screen](https://wordpress.org/support/topic/status-Post-is-not-sending-mail-1?replies=7).


## SMTP Error Messages

### Communication Error [334] – make sure the Envelope From Email is the same account used to create the Client ID. 

* This is almost always caused by being logged in to Google/Microsoft/Yahoo with a different user than the one Post is configured to send mail with. Logout and try again with the correct user
* Login to [Webmail](http://www.gmail.com) and see if there is an "Unusual Activity" warning waiting for your attention

### Could not open socket

* Your host may have installed a firewall between you and the server. Ask them to open the ports.
* Your may have tried to (incorrectly) use SSL over port 587. Check your encryption and port settings.

### Operation Timed out

* Your host may have poor connectivity to the mail server. Try doubling the Read Timeout.
* Your host may have installed a firewall (DROP packets) between you and the server. Ask them to open the ports.
* Your may have tried to (incorrectly) use TLS over port 465. Check your encryption and port settings.

### Connection refused

Your host has likely installed a firewall (REJECT packets) between you and the server. Ask them to open the ports.

### 503 Bad sequence of commands

You configured TLS security when you should have selected no security.

### XOAUTH2 authentication mechanism not supported

You may be on a Virtual Private Server that is [playing havoc with your communications](https://wordpress.org/support/topic/oh-bother-xoauth2-authentication-mechanism-not-supported?replies=9). Jump ship.


### Mail ends up in the Spam folder =

To avoid being flagged as spam, you need to prove your email isn't forged. On a custom domain, its up to YOU to set that up:

* Ensure you are using the correct SMTP server with authentication - the correct SMTP server is the one defined by your email service's SPF record
* If you use a custom domain name for email, add an [SPF record](http://www.openspf.org/Introduction) to your DNS zone file. The SPF is specific to your email provider, for example [Google](https://support.google.com/a/answer/33786)
* If you use a custom domain name for email, add a DKIM record to your DNS zone file and upload your Domain Key (a digital signature) to, for example [Google]((https://support.google.com/a/answer/174124?hl=en))
