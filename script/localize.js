(function ($) {
    console.log('Post SMTP localize loaded.');
})(jQuery)

/**
 * Get Parameter value by key
 * 
 * @since 2.5.0
 * @version 1.0.0
 */
function PostSMTPGetParameterByName( name, url ) {

    if ( !url ) url = window.location.href;
    name = name.replace( /[\[\]]/g, "\\$&" );
    var regex = new RegExp( "[?&]" + name + "(=([^&#]*)|&|#|$)" ),
    results = regex.exec( url );
    if ( !results ) return null;
    if ( !results[2] ) return '';
    return decodeURIComponent( results[2].replace( /\+/g, " " ) );

}