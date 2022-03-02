<?php

require_once("./router.php");

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
//user panel
get('./near_cms_medium/', 'home.php');
get('./near_cms_medium/home', 'home.php');
get('./near_cms_medium/register', 'signup-user.php');
get('./near_cms_medium/login-user', 'login-user.php');
get('./near_cms_medium/logout', 'logout-user.php');
get('./near_cms_medium/forgot-password', 'forgot-password.php');
get('./near_cms_medium/create-story', 'create-story.php');
get('./near_cms_medium/stories', 'stories.php');
get('./near_cms_medium/user-stats', 'user-stats.php');
get('./near_cms_medium/audience-stats', 'audience-stats.php');
get('./near_cms_medium/reading-list', 'reading-list.php');
get('./near_cms_medium/user-settings', 'user-settings.php');
get('./near_cms_medium/about-us', 'about-us.php');
get('./near_cms_medium/contact-us', 'contact-us.php');
get('./near_cms_medium/edit-story/$edit_req', 'edit-story.php');
get('./near_cms_medium/privacy-policy', 'privacy-policy.php');
get('./near_cms_medium/cookies-policy', 'cookies-policy.php');
get('./near_cms_medium/terms_of_use', 'terms_of_use.php');
//dashboard
get('./near_cms_medium/dashboard/', 'dashboard/index.php');
get('./near_cms_medium/dashboard/login', 'dashboard/login.php');
get('./near_cms_medium/dashboard/logout', 'dashboard/logout.php');
get('./near_cms_medium/dashboard/allpost', 'dashboard/allpost.php');
get('./near_cms_medium/dashboard/trash-stories', 'dashboard/trash-stories.php');
get('./near_cms_medium/dashboard/all-tags', 'dashboard/all-tags.php');
get('./near_cms_medium/dashboard/add-tag', 'dashboard/add-tag.php');
get('./near_cms_medium/dashboard/all-users', 'dashboard/all-users.php');
get('./near_cms_medium/dashboard/add-user', 'dashboard/add-user.php');
get('./near_cms_medium/dashboard/addpost', 'dashboard/addpost.php');
get('./near_cms_medium/dashboard/followusers', 'dashboard/followusers.php');
get('./near_cms_medium/dashboard/postlike', 'dashboard/postlike.php');
get('./near_cms_medium/dashboard/savepost', 'dashboard/savepost.php');
get('./near_cms_medium/dashboard/newsletter', 'dashboard/newsletter.php');
get('./near_cms_medium/dashboard/comments', 'dashboard/comments.php');
get('./near_cms_medium/dashboard/viewlogo', 'dashboard/viewlogo.php');
get('./near_cms_medium/dashboard/nav', 'dashboard/nav.php');
get('./near_cms_medium/dashboard/social', 'dashboard/social.php');
get('./near_cms_medium/dashboard/editor', 'dashboard/editor.php');
get('./near_cms_medium/dashboard/contactus', 'dashboard/contactus.php');
get('./near_cms_medium/dashboard/aboutus', 'dashboard/aboutus.php');
get('./near_cms_medium/dashboard/aboutus', 'dashboard/privacy-policy.php');
get('./near_cms_medium/dashboard/aboutus', 'dashboard/cookies-policy.php');
get('./near_cms_medium/dashboard/aboutus', 'dashboard/terms.php');
get('./near_cms_medium/dashboard/metamask', 'dashboard/metamask.php');
get('./near_cms_medium/dashboard/change-password', 'dashboard/change-password.php');

get('./near_cms_medium/about/$about_req', 'about.php');
get('./near_cms_medium/topic/$topic_req', 'topic.php');
get('./near_cms_medium/search/$search_req', 'search.php');
get('./near_cms_medium/$username_profile', 'profile.php');


get('./near_cms_medium/$username_post/$post_slug', 'single-post.php');

//get('./near_cms_medium/$username_post/$post_slug', 'extra.php');




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
