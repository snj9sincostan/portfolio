<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'my-portfolio' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Tn7&a>UnA)>q]#}0Dyjwcp;h`T&W1>J<dJohNVM3a 6gzijf9tZYsb_^&uuACQg,' );
define( 'SECURE_AUTH_KEY',  'o[F_//2jIu0w;|TaWg{FviVMv<+NB/1:gj)^34&2T$.:K1af-Va$4~v<iO3#PVP`' );
define( 'LOGGED_IN_KEY',    '])b]y9k^,7B:Igeh>QO_[]a9eIt8?_YvusHF`xWSlFc3N>LPkKRf.g$n65!^{#Kv' );
define( 'NONCE_KEY',        'UJ0ul#33`4ASjG-SERRM=g.vY+|foHUG[~.]3O~Jw-gN|d)ivo36YRBK.^[R|_ba' );
define( 'AUTH_SALT',        '366+B3Mb2B{^=fuy-sg,[[K7>_.G-#F14o[AHP3mjn>;^W~y58z@s6.jKhQ0AAIJ' );
define( 'SECURE_AUTH_SALT', '$.*W&&1h,7ugtucOp?wqY:0uY+zV6MSPVj>q$D8qsdh[}EmFyfm}LU!dz^/]0)#@' );
define( 'LOGGED_IN_SALT',   '7Zv,.$gcf%NF*!-Qmw{=r_7$A.k.z52IJ2HfeV D=OLOJeD|~skhO+W#iy=Q{YnH' );
define( 'NONCE_SALT',       '$pK5E:i <eR?Yc=Uv,caM?f]jWEn+$[{~{XelE<%n7^n@!G:anfS[YnA$frc$Dz!' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
