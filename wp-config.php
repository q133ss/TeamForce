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
define( 'DB_NAME', 'teamforce' );

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
define( 'AUTH_KEY',         'e|xErMelLh,{O7W>&~g*z]M&V8GiOco-ZM{[h013n[IC> xIVHn}$KP5{tS[1Peg' );
define( 'SECURE_AUTH_KEY',  'l~:r&t=r2Z#_oQZ_EpN=shu` 3/cdhIIf3gm55;}^%ED/vKe6{b4D#U[:gjc1LGH' );
define( 'LOGGED_IN_KEY',    'K oE5,{7o0o<8a^,>WR7Uy.~HIIzOJ313:Nzo=tMHbMRQ1Z3XbaUrziBrt%XwO_A' );
define( 'NONCE_KEY',        '_l2Um*pVHZM,3,?;l7LsOzy*7ctSG;M)i3rPqHnYnhT 4W}8.;$+QeV}yGlK2RUL' );
define( 'AUTH_SALT',        'J Z@G8=LD8-P9C|Wfpj{t&nriPnI_;:z}=yqO!z:hm+rtb]L8Jgs64Gn:|DZUgz9' );
define( 'SECURE_AUTH_SALT', 'T84>@+b_I>aO,`.$qrOrShm&,pb<ZY0rVs{]$DbT/uI==} 3m^!fyI}b$UIMTSk<' );
define( 'LOGGED_IN_SALT',   'rCFYeP36f15)FN.kmC#oW?s*z %?cd`{KPe32q%pELTnh~r5sL?NZy]sOk(iy1A3' );
define( 'NONCE_SALT',       'Jd)+Yk](m<Le<&;BV-|Be>wME3aA%l*$*65_uvsd]$RK,[QM40NAqMNC:]&!|q1%' );

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
