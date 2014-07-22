
<header>
	<h1><a href="/"><?php bloginfo( 'name' ); ?></a></h1>
	<h2><?php bloginfo( 'description' ); ?></h2>
	<!--<?php get_search_form(); ?>-->
	
	<ul id="nav">
	<?php wp_list_pages('title_li=&sort_order=DESC'); ?>
	</ul>
	
	
</header>
