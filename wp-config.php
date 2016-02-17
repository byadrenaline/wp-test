<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wp_test');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'lA+VJ:U@zryvxn:h@4?eA`b}y!)d#b{+ml|ovC4+|&3S4l$+rS#Ck,}yx9Df+YjU');
define('SECURE_AUTH_KEY', '+@TW#f}bNNE.>]<g.P-k};)3/%91%]{`Ie)[3@Mf|W:Z2z?_&}o< (r/Hv3B4G@7');
define('LOGGED_IN_KEY', '9M^n4-U($E[T<_DoP}-3dc9i|}9~jen+-v;JCQ1/TPL5b(xkGp6/E2-@r&q|nFe{');
define('NONCE_KEY', 'p!!!F_x.TJduZGLw!i /4Hyog/@-].,-6-$e+H^dAy2VzA#|F~b 3Wbgk0BJPb#|');
define('AUTH_SALT', '_FY7v317CSkO,B5zX/!?vL $@(;:0<#/U_)+K4-t!av49W{!}+B~~vf+{9|==sg_');
define('SECURE_AUTH_SALT', '2wd$P-2|ma(xY{pWHfsd:`O}xg~y9Y:6|ZHxv7x!-41BA{E$,TtBHH/;&N+|C+}.');
define('LOGGED_IN_SALT', ':HE6H4b+?FJ#2-`1Ng6/NxOR$E}RxS~!!lkKZ$T$Oea7ZlC&SulBuh&#+CG>(1p/');
define('NONCE_SALT', '[8@peRcNzajCh7`:gog~J_>3^i$x6^b5uM>DvGfsFvxzMW>K)hVJSl[U;/=Y J!Z');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

