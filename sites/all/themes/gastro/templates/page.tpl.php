<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 */
?>
<div class="hidden-search">
	<div class="wrap clearfix">	
	  <?php print render($page['search']); ?>
	</div>
</div>

<div class="page-wrap">

	<div class="wrap  menu-wrap clearfix">
	  <div class="mobile-bar">
			<div class="left-half">
			  <a id="navtoggle" class="menu-trigger" href="#openmenu">Open</a>
			</div>
			<div class="right-half">
			  <span class="search-trigger">Search</span>
			</div>
		</div>
	    <nav id="nav" class="navigation main-navigation clearfix">
	    <?php print render($page['menu']); ?>
	    </nav> 
	</div>
	
	<div class="logo-bg"></div>
	
	<div class="wrap clearfix">	
		<div id="header" role="banner" class="clearfix logo-section">
		  <?php print render($page['logosection']); ?>
		</div>
	</div>
		
	<div id="headerimage" role="banner" class="header-img clearfix <?php if(empty ($page['headerimage']) ): ?>no-header-img<?php endif; ?><?php if(!empty ($page['headerimage']) ): ?>header-img-exist<?php endif; ?>">
	   <?php print render($page['headerimage']); ?>
	</div>


	<div class="wrap clearfix">
	  
	  <?php if ($page['content']): ?>
	    <main id="main" role="main" class="<?php if(empty ($page['sidebar']) ): ?>no-sidebar<?php endif; ?> clearfix">
	      <?php print render($page['content']); ?>
	    </main>
	  <?php endif; ?>
	  
	  <?php if ($page['sidebar']): ?>
	    <aside id="sidebar" role="sidebar" class="sidebar clearfix">
	      <div class="sidebar-bg"></div>
	      <?php print render($page['sidebar']); ?>
	    </aside>
	  <?php endif; ?>
	  
	</div>
	
	
	<?php if ($page['footer']): ?>
	  <footer id="footer" role="contentinfo" class="clearfix">  
	    <div class="wrap clearfix">
	        <?php print render($page['footer']); ?>
	    </div>
	  </footer>
	  <div class="bottom-footer">
	    <div class="wrap clearfix">
	        <div class="copy footer-left"><p>&copy; Gastroenterology of the Rockies <?php echo date("Y") ?> All Rights Reserved.</p></div>
	         <div class="site-by footer-right"><p>Site By: <a href="http://www.variantstudios.com" target="_blank">Variant Studios</a></p></div>
	    </div>
	  </div>
	<?php endif; ?>
	
</div>