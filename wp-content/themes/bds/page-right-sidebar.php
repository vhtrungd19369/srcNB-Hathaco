<?php
/*
Template name: Page - Right sidebar
*/
get_header(); ?>

<?php do_action( 'flatsome_before_page' ); ?>

<div class="page-wrapper page-right-sidebar">
<div class="row">
	<div class="khung-tim-kiem">
		<div class="box-search">
		<h2>
			Tìm kiếm bất động sản
		</h2>				
		 <?php echo do_shortcode( '[searchandfilter fields="search,loai-bat-dong-san,vi-tri,huong,dien-tich,khoang-gia,phap-ly" submit_label="Tìm kiếm" search_placeholder="Nhập địa điểm cần tìm..." all_items_labels="Loại BDS" hide_empty="1,0,0,0,0,0,0"]' ); ?>
			</div>
	</div>

<div id="content" class="large-9 left col col-divided" role="main">
	<div class="page-inner">
		<?php if(get_theme_mod('default_title', 0)){ ?>
			<header class="entry-header">
				<h1 class="entry-title mb uppercase"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->
		<?php } ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>
			
			<?php if ( comments_open() || '0' != get_comments_number() ){
						comments_template(); } ?>

		<?php endwhile; // end of the loop. ?>
	</div><!-- .page-inner -->
</div><!-- .#content large-9 left -->

<div class="large-3 col">
    <div class="form-tim-kiem"><h3>Tìm kiếm bất động sản</h3>
	     <?php echo do_shortcode( '[searchandfilter fields="search,loai-bat-dong-san,vi-tri,huong,dien-tich,khoang-gia" hierarchical=",,,1,,," submit_label="Tìm kiếm" search_placeholder="Nhập địa điểm cần tìm..." all_items_labels="Loại BDS" hide_empty="1,0,0,0,0,0,0"]' ); ?>
	    </div>
	<?php get_sidebar(); ?>
</div><!-- .sidebar -->

</div><!-- .row -->
</div><!-- .page-right-sidebar container -->

<?php do_action( 'flatsome_after_page' ); ?>

<?php get_footer(); ?>