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
 * * Настройки базы данных
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
define( 'DB_NAME', 'infinity_base' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'vI k*nrxsa{{O)2YGa+qJLjcB@6H](?/A#_rpA%KkUltO>JnnS<K5U*]H<zYL@O;' );
define( 'SECURE_AUTH_KEY',  '!Pxt5!>{4`ujB5=Q1>uEK=s4]Ac4U:w2lUY=E6vKV`g{6sgEoc!PSeOQ4XwhD5A=' );
define( 'LOGGED_IN_KEY',    '*EbAam1H.Q!9Ms#](T$vKZ&q-?,y`Ea+7{ummhZ:km?9li?4-Jw3Y|f(!P_=eP>E' );
define( 'NONCE_KEY',        'pitLg%f%!iY]2Ij9b5D#%/|gNbCl-$g!)b%nT~ (sIDJ9}d`g2h%Mh#7{Rdbk5dy' );
define( 'AUTH_SALT',        'Y4 cy8f7[z+x~]4rb/}yb_rn9aCclu#gq*v1U&dH7W@e|aZX>li~X{Iw_284/=~j' );
define( 'SECURE_AUTH_SALT', '@rCG,B1-IU15|ebt0F%{rUwEFX.<TgD>IkF?RK%XbTaZX)|1JlyNJy$ld@tdZ6A_' );
define( 'LOGGED_IN_SALT',   '.~HA/ <3Nzhe(/Z)c?Hu4N>&*EQuB1/4Z+mp@O7H52IKCz<HaK^ uGlu&U40`M5M' );
define( 'NONCE_SALT',       'vPaftQK`,mwhp%xziYm/hw1vXYi;M.OF%`:%$KIGch?*5,}J5!oiQXx1ahmOc8`6' );

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
