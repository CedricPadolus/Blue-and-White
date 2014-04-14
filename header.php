<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="keywords" value="cedric padolus, web designer, web, css3, html5, wordpress, site personnel, portfolio ">
		<title>Cedric Padolus, web designer</title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <script src="<?php echo get_template_directory_uri(); ?>/js/loading.js"></script>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
       <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
       <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-7831497-1', 'cedricpadolus.com');
  ga('send', 'pageview');

</script>
    </head>  
<body>
  <a name="top">
  <div id="container">
<div id="header">
<div id="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></div>
<div id="loading"><img src="<?php echo get_template_directory_uri(); ?>/img/symbol.png" alt="loading"/></div>
<div id="search"><?php get_search_form(); ?></div>

</div>
<nav>
  <?php wp_nav_menu(); ?>
</nav>
