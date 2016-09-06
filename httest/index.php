<?

define('INCLUDE_DIR', dirname(__FILE__) . '/inc/');

$rules = array(
    //
    //main pages
    //
    'aboutus' => "/aboutus",
    'contactus' => "/contactus",

    //
    // Additional Information Pages
    //
    'memberofstaff' => "/people/(?'username'[\w\-]+)",
    'researchproject' => "/research/(?'projectID'[\w\-]+)",
    //
    // Other
    //
    'picture' => "/picture/(?'text'[^/]+)/(?'id'\d+)",    // '/picture/some-text/51'
    'album' => "/album/(?'album'[\w\-]+)",              // '/album/album-slug'
    'category' => "/category/(?'category'[\w\-]+)",        // '/category/category-slug'
    'page' => "/page/(?'page'about|contact)",          // '/page/about', '/page/contact'
    'post' => "/(?'post'[\w\-]+)",                     // '/post-slug'
    'home' => "/"                                      // '/'
);

$uri = rtrim(dirname($_SERVER["SCRIPT_NAME"]), '/');
$uri = '/' . trim(str_replace($uri, '', $_SERVER['REQUEST_URI']), '/');
$uri = urldecode($uri);

foreach ($rules as $action => $rule) {
    if (preg_match('~^' . $rule . '$~i', $uri, $params)) {
        include(INCLUDE_DIR . $action . '.php');
        exit();
    }
}

// nothing is found so handle the 404 error
include(INCLUDE_DIR . '404.php');

?>