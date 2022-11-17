<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'WP_CACHE', true );
define( 'WPCACHEHOME', '/home/c/cw83709/stepanov/public_html/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', "cw83709_stepan" );


/** Имя пользователя MySQL */
define( 'DB_USER', "cw83709_stepan" );


/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', "7VKLiLmp" );


/** Имя сервера MySQL */
define( 'DB_HOST', "localhost" );


/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );


/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yROk}JrJ}m(fZTeil$17IA6l(+#ug m/bbx4Pq<fOoLZ/@F*yC}zXw?y.4t7x`GX' );

define( 'SECURE_AUTH_KEY',  '>cHCS[T/8V~ &R`l4W Zd:F9V9py2?&+fj)_#_%7E-gm:3PG526TDbpi6Ti?r/Mr' );

define( 'LOGGED_IN_KEY',    ' <z61TFU:k0OGdG$6- ]c84*FdI2m&+$T$`6z>6q6jx+G;O(J=x3ob4TDWJfCQ9N' );

define( 'NONCE_KEY',        'xE4&1!Y#cW^54+s{6>lN=_!;PkNOL{C{E-aw0q}E [L%-Mb 3dMX{}Hp,[Qo1TIZ' );

define( 'AUTH_SALT',        '2?)yoLueNgn4|t,}U#}50H+$-otIAY1zvs?w hfQHsfWo8EMNB_Cc8QAxVX-3$Ft' );

define( 'SECURE_AUTH_SALT', '?lwF#kG[-+0qZa6-H8~aStE$;CrwmoIOE8{GNil&(FIDWOT& v2!%7qGw:USHufg' );

define( 'LOGGED_IN_SALT',   'P~ABa?kvQbOSbZ*!E(K8{IRx&4:lG#raX4qa(YR@=u!~>.pT3Zi%k;w@~bHV7ymX' );

define( 'NONCE_SALT',       'vdKqb;)u(.r!j<trwV(9qU|.kHi/v3UQT05w&1g] 9:X+!]AT{Mi(V?)h5n]+=86' );


/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'stmc_';


/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
define( 'WP_SITEURL', 'https://cw83709.tmweb.ru/' );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
