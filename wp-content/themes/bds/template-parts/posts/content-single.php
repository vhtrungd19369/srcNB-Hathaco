<div class="entry-content single-page">
    <?php
    $gia_tien=get_field('gia_tien');
    $thong_tin_mo_ta=get_field('thong_tin_mo_ta');
    $dia_chi=get_field('dia_chi');
    $dien_tich=get_field('dien_tich');
    $chieu_ngang=get_field('chieu_ngang');
    $chieu_dai=get_field('chieu_dai');
    $phap_ly=get_field('phap_ly');
    $so_tang=get_field('so_tang');
     $so_tang=get_field('so_tang');
    $phong_ngu=get_field('phong_ngu');
    $nha_ve_sinh=get_field('nha_ve_sinh');
    $san_thuong=get_field('san_thuong');
    $cho_de_xe_hoi=get_field('cho_de_xe_hoi');
    $nguoi_lien_he=get_field('nguoi_lien_he');
    $so_dien_thoai=get_field('so_dien_thoai');
     $thu_vien_hinh_anh=get_field('thu_vien_hinh_anh');
	$huong = get_the_terms( $post->ID, 'huong', '', ',' );

?>
<?php if($gia_tien){?>
<div class="thong-tin-co-ban">
    <h3>Thông tin cơ bản</h3>
    <div class="info">
        <div class="row1">
            <div class="left">Địa chỉ</div>
            <div class="right"><?php the_field('dia_chi')?></div>
        </div>
		<table class="table-on-pc">			
			<tr>
				<td>Loại BĐS</td>
				<td><?php the_terms( $post->ID, 'loai-bat-dong-san', '', ',' ); ?></td>
				<td>Hướng</td>
				<td><?php the_terms( $post->ID, 'huong', '', ',' );?></td>
				<td>WC</td>
				<td><?php the_field('nha_ve_sinh')?> phòng</td>
			</tr>
			<tr>
				<td>Chiều ngang</td>
				<td><?php the_field('chieu_ngang')?> m</td>
				<td>Pháp lý</td>
				<td><?php the_field('phap_ly')?></td>
				<td>Sân thượng</td>
				<td><?php the_field('san_thuong')?></td>
			</tr>
			<tr>
				<td>Chiều dài</td>
				<td><?php the_field('chieu_dai')?> m</td>
				<td>Số tầng</td>
				<td><?php the_field('so_tang')?></td>
				<td>Chỗ để xe hơi</td>
				<td><?php the_field('cho_de_xe_hoi')?></td>
			</tr>
			<tr>
				<td>Diện tích</td>
				<td><?php the_field('dien_tich')?> m2</td>
				<td>Phòng ngủ</td>
				<td><?php the_field('phong_ngu')?></td>
				<td>Giá</td>
				<td><?php the_field('gia_tien')?></td>
			</tr>
		</table>
		<table class="table-on-mobile">			
			<tr>
				<td>Loại BĐS</td>
				<td><?php the_terms( $post->ID, 'loai-bat-dong-san', '', ',' ); ?></td>								
			</tr>
			<tr>
				<td>Hướng</td>
				<td><?php the_terms( $post->ID, 'huong', '', ',' );?></td>
			</tr>
			<tr>
				<td>WC</td>
				<td><?php the_field('nha_ve_sinh')?> phòng</td>
			</tr>
			<tr>				
				<td>Pháp lý</td>
				<td><?php the_field('phap_ly')?></td>
				
			</tr>
			<tr>
				<td>Chiều ngang</td>
				<td><?php the_field('chieu_ngang')?> m</td>
			</tr>
			<tr>
				<td>Sân thượng</td>
				<td><?php the_field('san_thuong')?></td>
			</tr>
			<tr>				
				<td>Chỗ để xe hơi</td>
				<td><?php the_field('cho_de_xe_hoi')?></td>
			</tr>
			<tr>
				<td>Chiều dài</td>
				<td><?php the_field('chieu_dai')?> m</td>
			</tr>
			<tr>
				<td>Số tầng</td>
				<td><?php the_field('so_tang')?></td>
			</tr>
			<tr>
				<td>Diện tích</td>
				<td><?php the_field('dien_tich')?> m2</td>				
			</tr>
			<tr>
				<td>Phòng ngủ</td>
				<td><?php the_field('phong_ngu')?></td>
			</tr>
			<tr>
				<td>Giá</td>
				<td><?php the_field('gia_tien')?></td>
			</tr>
		
		</table>
    </div>
    </div>
    <?php }?>
<?php if($thu_vien_hinh_anh){ echo do_shortcode( '[lightslider_looper]' ); } ?>
<?php if($thong_tin_mo_ta){?>
<div class="thong-tin-mo-ta">
    <h3>Thông tin mô tả:</h3>
    <?php the_field('thong_tin_mo_ta');?>
</div><?php }?>
<?php if($dia_chi){?>
<div class="thong-tin-lien-he">
<div class="dia-chi">
    <span class="label">Địa chỉ tài sản:</span><span class="value text-dia-chi"> <?php the_field('dia_chi');?></span>
</div>
<div class="nguoi-ban">
    <p class="tieu-de">Thông tin liên hệ</p>
    <p class="ho-ten"><?php the_field('nguoi_lien_he');?></p>
    <p class="so-dien-thoai"><?php the_field('so_dien_thoai');?></p>
</div>
</div>
<?php }?>

	<?php the_content(); ?>
<?php if($gia_tien){?>
<div class="notice-bds">
    <h3>Lưu ý khi giao dịch bất động sản</h3>
    <ul>
        <li>Xác minh người bán hoặc cho thuê, tránh bị kẻ gian lừa đảo</li>
         <li>Hãy phản ánh thành viên này nếu nội dung không đúng sự thật</li>
        <li><span class="ban">Tránh</span> trả phí dịch vụ tìm nhà nếu không có hợp đồng</li>
        <li>Giá thuê, tiền cọc, phí internet, phí giữ xe, ...</li>
       
    </ul>
</div>
<?php }?>
	<?php
	wp_link_pages( array(
		'before' => '<div class="page-links">' . __( 'Pages:', 'flatsome' ),
		'after'  => '</div>',
	) );
	?>

	<?php if ( get_theme_mod( 'blog_share', 1 ) ) {
		// SHARE ICONS
		echo '<div class="blog-share text-center">';
		echo do_shortcode( '[share]' );
		echo '</div>';
	} ?>
	<?php if($gia_tien){?>
<div class="thong-bao">
    <h3>Lưu ý:</h3>
    <p>
Quý vị đang xem nội dung tin rao trong mục "Bán <?php the_terms( $post->ID, 'loai-bat-dong-san', '', ',' ) ?> tại <?php the_field('dia_chi');?>". Mọi thông tin liên quan tới tin rao này là do người đăng tin đăng tải và chịu trách nhiệm. Chúng tôi luôn cố gắng để có chất lượng thông tin tốt nhất, nhưng chúng tôi không đảm bảo và không chịu trách nhiệm về bất kỳ nội dung nào liên quan tới tin rao này. Nếu quý vị phát hiện có sai sót hay vấn đề gì xin hãy thông báo cho chúng tôi.</p>
</div>
<?php }?>
</div><!-- .entry-content2 -->

<?php if ( get_theme_mod( 'blog_single_footer_meta', 1 ) ) : ?>
	<footer class="entry-meta text-<?php echo get_theme_mod( 'blog_posts_title_align', 'center' ); ?>">
		<?php
		/* translators: used between list items, there is a space after the comma */
		$category_list = get_the_category_list( __( ', ', 'flatsome' ) );

		/* translators: used between list items, there is a space after the comma */
		$tag_list = get_the_tag_list( '', __( ', ', 'flatsome' ) );
		


		// But this blog has loads of categories so we should probably display them here.
		if ( '' != $tag_list ) {
			$meta_text = __( '<div class="danh-muc">%1$s</div><div class="the-tim-kiem">Thẻ tìm kiếm: %2$s</div>', 'flatsome' );
		} else {
			$meta_text = __( '', 'flatsome' );
		}

		printf( $meta_text, $category_list, $tag_list, get_permalink(), the_title_attribute( 'echo=0' ) );
		?>
	</footer><!-- .entry-meta -->
<?php endif; ?>

<?php
/*
 * Code hiển thị bài viết liên quan trong cùng 1 category
 * Code by levantoan.com
 */
$categories = get_the_category(get_the_ID());
if ($categories){
    echo '<div class="bai-viet-lien-quan">';
    $category_ids = array();
    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
    $args=array(
        'category__in' => $category_ids,
        'post__not_in' => array(get_the_ID()),
        'posts_per_page' => 5, // So bai viet dc hien thi
    );
    $my_query = new wp_query($args);
    if( $my_query->have_posts() ):
        echo '<h3> Xem các tin khác:</h3><ul>';
      
        while ($my_query->have_posts()):$my_query->the_post();
            ?>
            <li>
           
            <div class="box-image">
                 <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large'); ?></a>
            </div>
            <div class="box-text">
            <a href="<?php the_permalink() ?>"><h3 class="tieu-de-bai-viet"><?php the_title(); ?></h3>   </a>
            	<?php $thong_tin_mo_ta=get_field('thong_tin_mo_ta');?>
				<?php if($thong_tin_mo_ta){?>
				<div class="tom-tat"><?php the_field('thong_tin_mo_ta');?></div>
				<?php } else {?>
				 <?php
$my_excerpt = get_the_excerpt();
if ( '' != $my_excerpt ) {
	// Some string manipulation performed
}
echo $my_excerpt; // Outputs the processed value to the page
?>
				<?php }?>
				<a href="<?php the_permalink() ?>" class="plain"><button class="xem-chi-tiet"><< Xem chi tiết tin đăng >></button></a>
				
<?php $dien_tich=get_field('dien_tich');
$dia_chi=get_field('dia_chi');
$gia_tien=get_field('gia_tien');
$nguoi_lien_he=get_field('nguoi_lien_he');
$so_dien_thoai=get_field('so_dien_thoai');
?>
<?php if($gia_tien){?>
<div class="thong-tin-them">
    <div class="row-info gia-tien">
        <div class="left">Giá tiền:</div>
        <div class="right"><?php the_field('gia_tien');?></div>
    </div>
     <div class="row-info">
        <div class="left">Diện tích:</div>
        <div class="right"><?php the_field('dien_tich');?> m2</div>
    </div>
     <div class="row-info">
        <div class="left">Địa chỉ:</div>
        <div class="right"><?php the_field('dia_chi');?></div>
    </div>
     <div class="row-info">
        <div class="left">Liên hệ:</div>
        <div class="right nguoi-lien-he"><span class="ho-ten"><?php the_field('nguoi_lien_he');?></span><span class="sdt"> - <?php the_field('so_dien_thoai');?></span></div>
    </div>
</div>
<?php }?>
            </div>
             
            </li>
            <?php
        endwhile;
        echo '</ul>';
    endif; wp_reset_query();
    echo '</div>';
}
?>


<?php if ( get_theme_mod( 'blog_author_box', 1 ) ) : ?>
	<div class="entry-author author-box">
		<div class="flex-row align-top">
			<div class="flex-col mr circle">
				<div class="blog-author-image">
					<?php
					$user = get_the_author_meta( 'ID' );
					echo get_avatar( $user, 90 );
					?>
				</div>
			</div><!-- .flex-col -->
			<div class="flex-col flex-grow">
				<h5 class="author-name uppercase pt-half">
					<?php echo esc_html( get_the_author_meta( 'display_name' ) ); ?>
				</h5>
				<p class="author-desc small"><?php echo esc_html( get_the_author_meta( 'user_description' ) ); ?></p>
			</div><!-- .flex-col -->
		</div>
	</div>
<?php endif; ?>

<?php if ( get_theme_mod( 'blog_single_next_prev_nav', 1 ) ) :
	flatsome_content_nav( 'nav-below' );
endif; ?>

