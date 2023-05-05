<?php
// Add custom Theme Functions here
function taxonomy_phaply() {
 
        /* Biến $label chứa các tham số thiết lập tên hiển thị của Taxonomy
         */
        $labels = array(
                'name' => 'Pháp Lý',
                'singular' => 'Pháp Lý',
                'menu_name' => 'Pháp Lý'
        );
 
        /* Biến $args khai báo các tham số trong custom taxonomy cần tạo
         */
        $args = array(
                'labels'                     => $labels,
                'hierarchical'               => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
        );
 
        /* Hàm register_taxonomy để khởi tạo taxonomy
         */
        register_taxonomy('phap-ly', 'post', $args);
 
}
 
// Hook into the 'init' action
add_action( 'init', 'taxonomy_phaply', 0 ); 

function taxonomy_loaibds() {
 
        /* Biến $label chứa các tham số thiết lập tên hiển thị của Taxonomy
         */
        $labels = array(
                'name' => 'Loại bất động sản',
                'singular' => 'Loại bất động sản',
                'menu_name' => 'Loại bất động sản'
        );
 
        /* Biến $args khai báo các tham số trong custom taxonomy cần tạo
         */
        $args = array(
                'labels'                     => $labels,
                'hierarchical'               => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
        );
 
        /* Hàm register_taxonomy để khởi tạo taxonomy
         */
        register_taxonomy('loai-bat-dong-san', 'post', $args);
 
}
 
// Hook into the 'init' action
add_action( 'init', 'taxonomy_loaibds', 0 );

function taxanomy_vitri() {
 
        /* Biến $label chứa các tham số thiết lập tên hiển thị của Taxonomy
         */
        $labels = array(
                'name' => 'Vị trí',
                'singular' => 'Vị trí',
                'menu_name' => 'Vị trí'
        );
 
        /* Biến $args khai báo các tham số trong custom taxonomy cần tạo
         */
        $args = array(
                'labels'                     => $labels,
                'hierarchical'               => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
        );
 
        /* Hàm register_taxonomy để khởi tạo taxonomy
         */
        register_taxonomy('vi-tri', 'post', $args);
 
}
 
// Hook into the 'init' action
add_action( 'init', 'taxanomy_vitri', 0 );

function taxanomy_huong() {
 
        /* Biến $label chứa các tham số thiết lập tên hiển thị của Taxonomy
         */
        $labels = array(
                'name' => 'Hướng',
                'singular' => 'Hướng',
                'menu_name' => 'Hướng'
        );
 
        /* Biến $args khai báo các tham số trong custom taxonomy cần tạo
         */
        $args = array(
                'labels'                     => $labels,
                'hierarchical'               => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
        );
 
        /* Hàm register_taxonomy để khởi tạo taxonomy
         */
        register_taxonomy('huong', 'post', $args);
 
}
 
// Hook into the 'init' action
add_action( 'init', 'taxanomy_huong', 0 );


function taxanomy_dientich() {
 
        /* Biến $label chứa các tham số thiết lập tên hiển thị của Taxonomy
         */
        $labels = array(
                'name' => 'Diện tích',
                'singular' => 'Diện tích',
                'menu_name' => 'Diện tích'
        );
 
        /* Biến $args khai báo các tham số trong custom taxonomy cần tạo
         */
        $args = array(
                'labels'                     => $labels,
                'hierarchical'               => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
        );
 
        /* Hàm register_taxonomy để khởi tạo taxonomy
         */
        register_taxonomy('dien-tich', 'post', $args);
 
}
 
// Hook into the 'init' action
add_action( 'init', 'taxanomy_dientich', 0 );


function taxanomy_khoanggia() {
 
        /* Biến $label chứa các tham số thiết lập tên hiển thị của Taxonomy
         */
        $labels = array(
                'name' => 'Khoảng giá',
                'singular' => 'Khoảng giá',
                'menu_name' => 'Khoảng giá'
        );
 
        /* Biến $args khai báo các tham số trong custom taxonomy cần tạo
         */
        $args = array(
                'labels'                     => $labels,
                'hierarchical'               => true,
                'public'                     => true,
                'show_ui'                    => true,
                'show_admin_column'          => true,
                'show_in_nav_menus'          => true,
                'show_tagcloud'              => true,
        );
 
        /* Hàm register_taxonomy để khởi tạo taxonomy
         */
        register_taxonomy('khoang-gia', 'post', $args);
 
}
 
// Hook into the 'init' action
add_action( 'init', 'taxanomy_khoanggia', 0 );

add_action( 'wp_enqueue_scripts', 'ls_scripts_styles', 20 );

/**
 * LightSlider Scripts
 */
function ls_scripts_styles() {
	wp_enqueue_style( 'lightslidercss', get_stylesheet_directory_uri(). '/css/lightslider.min.css' , array(), '1.0.0', 'all' );
	wp_enqueue_script( 'lightsliderjs', get_stylesheet_directory_uri() . '/js/lightslider.min.js', array( 'jquery' ), '1.0.0', true );
	wp_enqueue_script( 'lightsliderinit', get_stylesheet_directory_uri() . '/js/lightslider-init.js', array( 'lightsliderjs' ), '1.0.0', true );
}


add_shortcode( 'lightslider_looper', 'tl_light_looper' );
function tl_light_looper()  {
// ACF Custom Fields
// tl_slide_images = Gallery Field
$images = get_field('thu_vien_hinh_anh');//add your correct field name
	ob_start();
	
	if( $images ): 
	 ?>
	
		<div class="tl_slide_photo_container">
			<ul id="light-slider" class="image-gallery">
				<?php foreach( $images as $image ): ?>
				<li data-thumb="<?php echo $image['url']; ?>">
					
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					
				</li>
				<?php endforeach; ?>
		 	</ul>
		</div>
		
	<?php endif; 
		
	return ob_get_clean();
}


//Tạo thêm menu cho footer

add_theme_support( 'menus' );
register_nav_menus(
        array(
                'footer-nav' => 'Menu cho footer'
        )
);


//Tùy biến trang đăng nhập wordpres
add_action( 'login_enqueue_scripts', 'pridio_login_enqueue_scripts' );
function pridio_login_enqueue_scripts(){
echo '<style type="text/css" media="screen">';
echo '#login h1 a
{
background-image:url(/wp-content/uploads/2019/07/123-01.png);
;';
echo '</style>';
}

add_filter( 'login_headerurl', 'pridio_login_headerurl');

function pridio_login_headerurl(){

return home_url('/');

}

function tp_custom_logo() { ?>
    <style type="text/css">
		.login #login_error {
    border-left-color: #015f95;
}
		.login #login_error{    box-shadow: 0 30px 80px rgba(37, 37, 37, 0.1) !important;    border-radius: 15px !important;}
		.login .message{border-left: 4px solid #015f95 !important;
    
    border-radius: 15px;
    
    box-shadow: 0 30px 80px rgba(37, 37, 37, 0.1) !important;}
		.login #nav a:hover, .login #backtoblog a:hover{color: #015f95 !important;}
		.login .button-primary {
    background: #015f95 !important;
    border-color: #015f95 #015f95 #015f95 !important;
    box-shadow: 0 1px 0 #015f95 !important;
    border-radius: 20px !important;
    color: #fff !important;
    text-decoration: none;
    text-shadow: none !important;
}
		input[type=checkbox]:checked:before{color: #015f95;}
		.login input[type=text]:focus, .login input[type=password]:focus, input[type=email]:focus{    box-shadow: 0 0 2px rgb(255, 255, 255) !important;}
   .login h1 a{    background-size: 115px !important;     height: 115px !important; width: 209px !important; }
#login {
	width: 450px !important;}
		.login form {
    box-shadow: 0 30px 80px rgba(37, 37, 37, 0.1) !important;
			border-radius: 15px;    padding: 40px !important;}.login form .input, .login form input[type=checkbox], .login input[type=text] {
    background: #f5f5f5;
    border-radius: 30px;
    border: none;
    box-shadow: none;
}
    </style>
<?php }
add_action('login_enqueue_scripts', 'tp_custom_logo');

// Change Login Title
function mw_login_title() {
return get_bloginfo('name');
}
add_filter( 'Chào mừng bạn đăng nhập vào hệ thống', 'Chào mừng bạn đăng nhập vào hệ thống' );
