<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php $header_orientation_class = gridlove_get_option( 'header_orientation' ) == 'wide' ? 'gridlove-header-wide' : ''; ?>
	<?php $shadow_class = gridlove_get_option('header_shadow') ? 'gridlove-header-shadow' : ''; ?>

	<link rel='stylesheet' id='typology-fonts-css'  href='https://fonts.googleapis.com/css?family=Domine%3A400%7CJosefin+Sans%3A400%2C700&#038;subset=latin%2Clatin-ext&#038;ver=1.2' type='text/css' media='all' />

	<div class="typology" style="height:110px">
		<header id="typology-header" class="typology-header" style="position:absolute;">
		  <div class="container">
		    <div class="slot-l">
		      <div class="typology-site-branding">
		        <h1 class="site-title h4"><a href="https://www.dnfinder.com/" rel="home"><img class="typology-logo" src="https://www.dnfinder.com/blog/wp-content/themes/typology/assets/img/typology_logo.png" alt="DNFinder"></a></h1>
		      </div>
		      <ul id="menu-top-menu" class="typology-nav typology-main-navigation" style="opacity: 1;">
		        <li id="menu-item-68" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-68">
		          <a href="https://www.dnfinder.com/search">Buy Domains</a>
		          <ul class="sub-menu">
		            <li id="menu-item-75" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-75"><a href="https://www.dnfinder.com/search">All Domains</a></li>
		            <li id="menu-item-76" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-76"><a href="https://www.dnfinder.com/search?q%5Bs%5D=bids_count+desc">Most Active</a></li>
		            <li id="menu-item-77" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-77"><a href="https://www.dnfinder.com/search?q%5Bs%5D=auction_end+asc">Ending Soon</a></li>
		          </ul>
		        </li>
		        <li id="menu-item-69" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-69"><a href="https://www.dnfinder.com/sold">Just Sold</a></li>
		        <li id="menu-item-70" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-70"><a href="https://www.dnfinder.com/how-it-works">How It Works</a></li>
		        <li id="menu-item-71" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-71"><a href="https://www.dnfinder.com/blog/">Blog</a></li>
		        <li id="menu-item-73" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-73"><a href="/resources/">Resources</a></li>
		      </ul>
		    </div>
		    <div class="slot-r">
		      <ul class="typology-nav typology-mobile-visible">
		        <li class="typology-action-button">
		          <span class="typology-action-sidebar">
		          <i class="fa fa-bars"></i>
		          </span>
		        </li>
		      </ul>
		    </div>
		  </div>
		</header>
		<div id="typology-cover" class="typology-cover typology-cover-empty" style="background-color: rgb(14,162,239)">
		</div>

		<div class="typology-sidebar" style="top: 0px;">
		   <div class="typology-sidebar-header">
		      <div class="typology-sidebar-header-wrapper">
		         <div class="typology-site-branding">
		            <span class="site-title h4"><a href="https://www.dnfinder.com/" rel="home"><img class="typology-logo" src="https://www.dnfinder.com/blog/wp-content/themes/typology/assets/img/typology_logo.png" alt="DNFinder"></a></span>
		         </div>
		         <span class="typology-sidebar-close"><i class="fa fa-times" aria-hidden="true"></i></span>
		      </div>
		   </div>
		   <div class="widget typology-responsive-menu" style="display: block;">
		      <ul id="menu-top-menu-1" class="typology-nav typology-main-navigation">
		         <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-68">
		            <a href="https://www.dnfinder.com/search">Buy Domains</a><span class="typology-nav-widget-acordion"><i class="fa fa-angle-down"></i></span>
		            <ul class="sub-menu" style="display: none;">
		               <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-75"><a href="https://www.dnfinder.com/search">All Domains</a></li>
		               <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-76"><a href="https://www.dnfinder.com/search?q%5Bs%5D=bids_count+desc">Most Active</a></li>
		               <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-77"><a href="https://www.dnfinder.com/search?q%5Bs%5D=auction_end+asc">Ending Soon</a></li>
		            </ul>
		         </li>
		         <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-69"><a href="https://www.dnfinder.com/sold">Just Sold</a></li>
		         <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-70"><a href="https://www.dnfinder.com/how-it-works">How It Works</a></li>
		         <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-71"><a href="https://www.dnfinder.com/blog/">Blog</a></li>
		         <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-73"><a href="/resources/">Resources</a></li>
		      </ul>
		   </div>
		</div>

		<div class="typology-sidebar-overlay"></div>

</div>
