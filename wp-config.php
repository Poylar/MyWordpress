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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'test-delete' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'Ln*5fBMy5n27#3_Buke%f#ieD]&8Sj||9Q?cBs;O(fL{H)UWeDzp *d]..:UL!sW' );
define( 'SECURE_AUTH_KEY',  '&-&&h6}mL!!#GkV%Hs@of8&9(x(XpEgS#[ukF_PwM`k3Vd?0+q=91EbR}4D0{EUE' );
define( 'LOGGED_IN_KEY',    '@A.N]T9%2_4q1.,M~zw*QznuD)#%w?[X5.s5PEoKA^(0tPip7@,E7S6j4j sPI%|' );
define( 'NONCE_KEY',        ',y1znd}atH9nml!]R%K2/<*?Z]*)t6,RRm;K8A[)ISOBY~U-pXEw4l#h4g5rr_0j' );
define( 'AUTH_SALT',        '8uB1%2d,=z7m3>o9wcr*gQ1j+8-I[0Mv%)apE{~_ra>J`,.H ZhJ-D,wyC]T?a3w' );
define( 'SECURE_AUTH_SALT', ':uwT-ZJ=}OoN =caE_FyE4wbz,?QVt$F[<yS,2+HmDKR=x&kGI)H=vbPTWFhAJ2B' );
define( 'LOGGED_IN_SALT',   '2f6):oXQ+*^dZQU<6A3(v[H9||ek&.Oit?{xW`A9Cc:2@$f(OgoDqNs~-TUS;=Hb' );
define( 'NONCE_SALT',       'P2Emixwq)X3K4{Tp;!+ISmL$*I@80xEdyV +hVI4K%ilD:({HS_3drzJx^w<,(3(' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
