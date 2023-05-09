<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'nhhatmkm_hathaco.com' );

/** Username của database */
define( 'DB_USER', 'nhhatmkm_hathaco-com' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '^j5-+p{6TQ&#' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

define('DISABLE_WP_CRON', true);

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%RfBwow*wbt>*(<;|d_VEg+~9Z#EMEoy&+FmY6B|FXd{vb7npdI)O#4prt{OwpU&' );
define( 'SECURE_AUTH_KEY',  'A.(J=:#bT;ur%8p rT%|4ZP%E>M~/O/Haa1Csg;Yjxm_?Z.~Fv3UBa=&gRg:B,<-' );
define( 'LOGGED_IN_KEY',    'uG3s-?DdC+=o+x<HJ3]W~O7 Ccqw2Nk(>,aFpYO!){;xCGHM thuXXR^{y|t>%Hr' );
define( 'NONCE_KEY',        '.}&m5|Fb 7Vvfw;TY<JY-5.P.,!IeO4Z_T8&}rzXv9RJVhys<Xu]]]1M{Ta`Tk;`' );
define( 'AUTH_SALT',        'u5eobt2%_T l/v|@&6?Z5SLOj|MKbi9lnqN4#zQ8.3?gYfELhyV^r~][/mU@0{fa' );
define( 'SECURE_AUTH_SALT', '*dpARuTT^J,ORyHFd/ a%<-S=f4TuQjkdD>s0umLl?Pv*cFq3k8;euoD[yIIGwwP' );
define( 'LOGGED_IN_SALT',   '}|Kh>,Ea>/fF2=wb/-w+z_W S`R*7$&&DA/4[RDQrLL2:wm|o1`1GQ^g?hQ=-=AW' );
define( 'NONCE_SALT',       ']+h]F(d&TwrQgktIc*N%Web%iaeM4E)e=@n}U`g[Mby+y[6qe#|jrl]jvFQ9<.(d' );

/**#@-*/
// Enable WP_DEBUG mode
define( 'WP_DEBUG', true );

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );

// Disable display of errors and warnings
define( 'WP_DEBUG_DISPLAY', false );
@ini_set( 'display_errors', 0 );

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', true );
/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
// This enables debugging.
define( 'WP_DEBUG', true );

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */
/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
