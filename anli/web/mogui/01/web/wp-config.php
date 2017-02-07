<?php
/**
 * WordPress基础配置文件。
 *
 * 本文件包含以下配置选项：MySQL设置、数据库表名前缀、密钥、
 * WordPress语言设定以及ABSPATH。如需更多信息，请访问
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑wp-config.php}Codex页面。MySQL设置具体信息请咨询您的空间提供商。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后填入相关信息。
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'hnhwly');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', '');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'osE<6a+S7WgQ~}s815=z~!OIG.kYfb;rF4Us&n[D4Eipy=LM]cN@X$1<g=LKFZvl');
define('SECURE_AUTH_KEY',  '61Z,[Of)cAB.LD<#Jl6K/TezMzfSH$)T$(E`A+Yh?o]Pe<{Z_BRgU0q{B/K&KtT>');
define('LOGGED_IN_KEY',    '!m-Fziv[b%!6d0B+K@zK$;|4| V.8&jo]-6i-Eo`4o^sCK5H>`:YA19j))S-LRR|');
define('NONCE_KEY',        'sOB=;g/#1.,D[wzy~GY917G~95-B%t9B.Hte<7nF:y;-YLFb^27v:%bMzwYUYU@h');
define('AUTH_SALT',        'c_6O-Xky<WLwZ2<U|5/rz)S13W?n%|&6=e6wzY[DMN9ZzR/N+[7iMs_<P%28_=:X');
define('SECURE_AUTH_SALT', 'Y(Q b[k$aoAs2VI-PscLI@g9Q9;}v)s= C,m)}8O nJ-DU0ZQB8I;A<2{iBz95R;');
define('LOGGED_IN_SALT',   ')m4v5^(LeV/#mDl+sWSIU_hd9Fc}r+=]WW!L!1L=U)k1417|yNP4|LGoa+eoym2L');
define('NONCE_SALT',       '#zoTv8ytp+6K<wqepI|p{R`|i_T:-jPjcP|#X&BDm6v{$jkr!-tiZ.:f=3CC5M_*');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
