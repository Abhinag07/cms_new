<?php

require_once("./router.php");

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
//user panel
//get('./cms_new/', 'home.php');
get('./cms_new/home', 'home.php');
get('./cms_new/', 'home.php');
get('./cms_new/register', 'signup-user.php');
get('./cms_new/login-user', 'login-user.php');
get('./cms_new/logout', 'logout-user.php');
get('./cms_new/forgot-password', 'forgot-password.php');
get('./cms_new/create-story', 'create-story.php');
get('./cms_new/stories', 'stories.php');
get('./cms_new/user-stats', 'user-stats.php');
get('./cms_new/audience-stats', 'audience-stats.php');
get('./cms_new/reading-list', 'reading-list.php');
get('./cms_new/user-settings', 'user-settings.php');
get('./cms_new/about-us', 'about-us.php');
get('./cms_new/contact-us', 'contact-us.php');
get('./cms_new/edit-story/$edit_req', 'edit-story.php');
get('./cms_new/privacy-policy', 'privacy-policy.php');
get('./cms_new/cookies-policy', 'cookies-policy.php');
get('./cms_new/terms_of_use', 'terms_of_use.php');
//dashboard
get('./cms_new/dashboard/', 'dashboard/index.php');
get('./cms_new/dashboard/login', 'dashboard/login.php');
get('./cms_new/dashboard/logout', 'dashboard/logout.php');
get('./cms_new/dashboard/allpost', 'dashboard/allpost.php');
get('./cms_new/dashboard/trash-stories', 'dashboard/trash-stories.php');
get('./cms_new/dashboard/all-tags', 'dashboard/all-tags.php');
get('./cms_new/dashboard/add-tag', 'dashboard/add-tag.php');
get('./cms_new/dashboard/all-users', 'dashboard/all-users.php');
get('./cms_new/dashboard/add-user', 'dashboard/add-user.php');
get('./cms_new/dashboard/addpost', 'dashboard/addpost.php');
get('./cms_new/dashboard/followusers', 'dashboard/followusers.php');
get('./cms_new/dashboard/postlike', 'dashboard/postlike.php');
get('./cms_new/dashboard/savepost', 'dashboard/savepost.php');
get('./cms_new/dashboard/newsletter', 'dashboard/newsletter.php');
get('./cms_new/dashboard/comments', 'dashboard/comments.php');
get('./cms_new/dashboard/viewlogo', 'dashboard/viewlogo.php');
get('./cms_new/dashboard/nav', 'dashboard/nav.php');
get('./cms_new/dashboard/social', 'dashboard/social.php');
get('./cms_new/dashboard/editor', 'dashboard/editor.php');
get('./cms_new/dashboard/contactus', 'dashboard/contactus.php');
get('./cms_new/dashboard/aboutus', 'dashboard/aboutus.php');
get('./cms_new/dashboard/aboutus', 'dashboard/privacy-policy.php');
get('./cms_new/dashboard/aboutus', 'dashboard/cookies-policy.php');
get('./cms_new/dashboard/aboutus', 'dashboard/terms.php');
get('./cms_new/dashboard/metamask', 'dashboard/metamask.php');
get('./cms_new/dashboard/change-password', 'dashboard/change-password.php');

get('./cms_new/about/$about_req', 'about.php');
get('./cms_new/topic/$topic_req', 'topic.php');
get('./cms_new/search/$search_req', 'search.php');
get('./cms_new/$username_profile', 'profile.php');


get('./cms_new/$username_post/$post_slug', 'single-post.php');

//get('./cms_new/$username_post/$post_slug', 'extra.php');




// Dynamic GET. Example with 1 variable
// The $id will be available in user.php
//get('/user/$id', 'user.php');

// Dynamic GET. Example with 2 variables
// The $name will be available in user.php
// The $last_name will be available in user.php
//get('/user/$name/$last_name', 'user.php');

// Dynamic GET. Example with 2 variables with static
// In the URL -> http://localhost/product/shoes/color/blue
// The $type will be available in product.php
// The $color will be available in product.php
//get('/product/$type/color/:color', 'product.php');

// Dynamic GET. Example with 1 variable and 1 query string
// In the URL -> http://localhost/item/car?price=10
// The $name will be available in items.php which is inside the views folder
//get('/item/$name', 'views/items.php');


// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404','404.php');
