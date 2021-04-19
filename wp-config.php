<?php
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
define('DB_NAME', 'wordpress');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '*jd6*43A4sM)JwV!Nh8Nt|&YjiF<v%QA34MWfi_:kbr$9|V:=.B=)Lv/Dxo_*45O');
define('SECURE_AUTH_KEY',  '.gm$tS0,8fI/B(LY_wZVY~L9GziL1REv[=&+ddiPI}He`>wpR_jF2&U-MB<Xy8-#');
define('LOGGED_IN_KEY',    '5TnDXA1dt6KZ$;YmShZ^X(,iqb@)r(xJ=~fAG[ySBCh|jH@7[J9]`GV<Zu][|FQW');
define('NONCE_KEY',        'Mq>EWq(.#Z:G}2[(q:h+LgP/1#=vomd|&P<pmj?!LGttv._5Hb]igWs_LCQ4:y$8');
define('AUTH_SALT',        '~Pj2RJP<:OSwge`5C)a!03^[Wf4KV1j7$O=V!A6dlVL-mF&qyuGF^F;d;Olt+.m=');
define('SECURE_AUTH_SALT', 'es-ym#AlO4@yO=:J>%t-7k>]^zj 1min6SZ@<!+]%n4.,LhXc{wc!GVW KbzO$Mz');
define('LOGGED_IN_SALT',   '3(8n=3v8@<<@TaB)5Mfer.LEVOZo4^%Rl^p.E/qYsw+k[RBrb`[xr#I9#Ai(K-hG');
define('NONCE_SALT',       'CJt!h3)x|=GL`^T(Jxm2m^x5P;8l/.UFlT>kL3O[D@PH9Az{^~N_>^DF=5ouh?ye');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
