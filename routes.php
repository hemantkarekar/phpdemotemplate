<?php

require_once("router.php");

get('/', 'pages/index.php');
get('/about', 'pages/about.php');
get('/contact', 'pages/contact.php');
get('/enquire', 'pages/enquiry.php');

get('/portfolio', 'pages/portfolio.php');

get('/blogs', 'pages/blogs.php');
get('/blog/$id', 'templates/blog.php');

get('/projects', 'pages/projects.php');
get('/projects/covid19', 'covid19/index.php');
post('/projects/covid19', 'covid19/index.php');

get('/demos', 'test/ftvindia/index.html');

any('/404','templates/404.php');