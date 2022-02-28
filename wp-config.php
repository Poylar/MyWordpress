<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
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

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'omedia' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4<{n<r,_u0qc_y*3T6J^m;e|xgJ+Y;o#TV(VF6jaLR%$}0.^=!p/WS!](P-8EKV0' );
define( 'SECURE_AUTH_KEY',  'AJ*WCKV:D7xP}B!f5]nFA8#2<@QjxB3^MF3IyLG1Vn~DGKxx?]vj=efGI]H&[en#' );
define( 'LOGGED_IN_KEY',    'x@b2Z$~i#1}F%2?2$CN]9P8$NY5mOlBsTZaq1(G-G&l>HN7){<+5pr4[vO]In|Jb' );
define( 'NONCE_KEY',        'mX^0JSv+aI**66ur~V>_[8HpVAc]xb@]ciXzc9kEZ+E6 &@(fFNc9IKl93WPCqy|' );
define( 'AUTH_SALT',        'E2-;tMxjR&0z9+l&bbw/S0hNW~@v}%z},&mzuaKme9LPWT>}~%%edcM.p.g6A2=z' );
define( 'SECURE_AUTH_SALT', 'IDQxY2N6NE.x^[}AWxjhd&83ET;-/W+}8 Z<*+<p+(25B ?nLB&YgG8+,]cO:2.o' );
define( 'LOGGED_IN_SALT',   'MS)J(dZ{ZQ)AJ~-( |j+A{rd!=kz??a<c_R}?M|P8cB|@``Aj4]Pq@t5w,S.&e%v' );
define( 'NONCE_SALT',       '~@0h2*Pq&!)qL5R8W]&]<U;r-OH8ri67zVe OePA>+iNqdxv[]0[J6PTtBb8O.1k' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
