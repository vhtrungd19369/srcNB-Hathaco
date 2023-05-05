<?php 
	do_action('flatsome_before_blog');
?>

<?php if(!is_single() && flatsome_option('blog_featured') == 'top'){ get_template_part('template-parts/posts/featured-posts'); } ?>

<div class="row row-large <?php if(flatsome_option('blog_layout_divider')) echo 'row-divided ';?>">
	<div class="duong-dan">
	    	    <?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
	</div>
	<div class="large-9 col">

	<?php if(!is_single() && flatsome_option('blog_featured') == 'content'){ get_template_part('template-parts/posts/featured-posts'); } ?>
	<?php
		if(is_single()){
			get_template_part( 'template-parts/posts/single');
			comments_template();
		} elseif(flatsome_option('blog_style_archive') && (is_archive() || is_search())){
			get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style_archive') );
		} else {
			get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style') );
		}
	?>
	</div> <!-- .large-9 -->

	<div class="post-sidebar large-3 col">
	    <div class="form-tim-kiem"><h3>Tìm kiếm bất động sản</h3>
	    <?php echo do_shortcode( '[searchandfilter fields="search,nhu-cau,loai-bat-dong-san,vi-tri,huong,dien-tich,khoang-gia" hierarchical=",,,1,,," submit_label="Tìm kiếm" search_placeholder="Nhập địa điểm cần tìm..." all_items_labels="Loại BDS" hide_empty="1,0,0,1,0,0,0"]' ); ?>
	    </div>
		<?php get_sidebar(); ?>
	</div><!-- .post-sidebar -->

</div><!-- .row -->

<?php 
	do_action('flatsome_after_blog');
?>