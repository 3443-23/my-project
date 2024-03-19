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
define( 'DB_NAME', '3443-23_27291' );

/** Имя пользователя базы данных */
define( 'DB_USER', '3443-23_27291' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '/{fFACV71%@BSk80' );

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
define( 'AUTH_KEY',         'SryK*1KQ,y =3?R(i7@7s#{P!S/iEY_ySq]=Ym!sa|a!?1eiAb^_%uwk@:5pBkpZ' );
define( 'SECURE_AUTH_KEY',  'Ea]YjeO5@(1W~/ w.N:6:y@1W(9Y#.DU<h6z|N6b60rxH`_c8bfY?5d-F{2$I>gs' );
define( 'LOGGED_IN_KEY',    'd&0XJshzR~;$G5w7$f}`prw9`UN2r9H,A#6dO6gxOrzPKjq{7eywI:46@C(Gqg6^' );
define( 'NONCE_KEY',        'JLjPE$182$b(0O9a6c3WYk#6&0:OwAZm08.XAbC?lLcx-&KQ{e}^Lj8Lx*3l*Oix' );
define( 'AUTH_SALT',        'kC<(BGdj<~GeRKG|U>46IoUuAm&IB$P.mkl,oYvWL-Mt?Ia>UFUn-1&.w^bJwugF' );
define( 'SECURE_AUTH_SALT', 'E3[wRD(neKQ.6x@>3dr3Q%q9?zh)#rbN+>_&+nw>eynpQwH/B6xtT2mnt]kO30CV' );
define( 'LOGGED_IN_SALT',   '(6eqL;4QQE>eyS9a9^TSr0Ba/NjnoJl<F-Fe3u;{M~!h->8>aqz>C:i3[3-Vi1i%' );
define( 'NONCE_SALT',       '3.6gL]0FB:&C^&%L{36R%/<tQ6R/o!xNXCGyWeSo8|xHFCe5va%IGMcd_OnL&4V_' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'elKr8_';


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