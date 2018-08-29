<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo '｜'; } ?> <?php bloginfo('name'); ?></title>

		<script>
		  (function(d) {
		    var config = {
		      kitId: 'sfx0wzg',
		      scriptTimeout: 3000,
		      async: true
		    },
		    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
		  })(document);
		</script>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<script src="<?php echo get_template_directory_uri(); ?>/js/vue.js"></script>

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
		<div id="app" v-bind:class='{active:isActive}'>
			<transition name="fade">
				<div class="loading" v-show="loading">
					<img src="<?php echo get_template_directory_uri(); ?>/img/ico_loading.svg" alt="loading">
				</div>
			</transition>
			<!-- wrapper -->
			<div class="wrapper" v-show="!loading">
				<!-- header -->
				<header id="header" class="clear" role="banner">
					<div class="inner">
						<div id="toggle" v-on:click='isActive=!isActive'>
							<div>
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
						<a href="https://www.facebook.com/andonoffice/" id="facebook" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico_facebook.svg" alt="faebook">
						</a>
						<a href="<?php echo home_url(); ?>/blog" id="blog" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ico_blog.svg" alt="Blog">
						</a>
						<nav id="nav" role="navigation">
							<ul>
								<li>
									<a href="<?php echo home_url(); ?>">
										TOP
									</a>
								</li>
								<li>
									<a href="<?php echo home_url(); ?>/about">
										ABOUT
									</a>
								</li>
								<li>
									<a href="<?php echo home_url(); ?>/archives/category/design">
										DESIGN
									</a>
								</li>
								<li>
									<a href="<?php echo home_url(); ?>/archives/category/web">
										WEB
									</a>
								</li>
								<li>
									<a href="<?php echo home_url(); ?>/archives/category/movie">
										MOVIE
									</a>
								</li>
								<li>
									<a href="<?php echo home_url(); ?>/archives/category/space">
										SPACE
									</a>
								</li>
								<li>
									<a href="<?php echo home_url(); ?>/archives/category/product">
										PRODUCT
									</a>
								</li>
								<li>
									<a href="<?php echo home_url(); ?>/contact">
										CONTACT
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</header>
				<!-- /header -->
