<?php
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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '510148' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '80BMM?,.{WhxiqWivYQRcX-]i(Uv d6huKe<iJ_c>fhhQdILgFYA$_KDR:).Y@I4' );
define( 'SECURE_AUTH_KEY',  '%LT]gQ1kXTj!H073W|mk_WC9H]!5MdKuJymYQf]K&A^eabrPn9h e|qAwN/LnW:0' );
define( 'LOGGED_IN_KEY',    'XoiPji68Ix-.0Fgthm2]bY7[{Ixw2M7.0q>dlfg&FZwI9~NkmXL0v)7RCOpKJh45' );
define( 'NONCE_KEY',        'wZh~}z#2V$!r3`xH8D>xly)zC$6=*w3.C>RtA5QOm/)$OG@J8rz5CJv.5uf^x~%R' );
define( 'AUTH_SALT',        '2RX7:g=qr)_t:ZCl};Tb|M>hpUCTYnN[u>Er3<Q0c-u bxY%]1E=3*x>AAIv,?>X' );
define( 'SECURE_AUTH_SALT', '*ag8G|=1M.7W`&E^tVtPFg<Qg/sJO|Gd]@r0U+$>izu)qOKC {^vKnI^,[!7)oSI' );
define( 'LOGGED_IN_SALT',   '-J!3Ga`]P+1[]wR=iiwF>t<@7W#=l=.TH-JwQdbi.B7:51QT`wi=3[}B@ij=sQd^' );
define( 'NONCE_SALT',       'Y34{bynsB(FyIwIWS opoAt=PjXv2hvJqESOhKS*;h[+##+Tr.JewpC(LQhA8bHj' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
