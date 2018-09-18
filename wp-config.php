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
define('DB_NAME', 'tienda_virtual');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', '%7UZp!jJ$ElOhT$=Mzk~Eyd}0~6%9fpRc>q)hf/KC?V/yJN&K8%vT9GTojarY|[}');
define('SECURE_AUTH_KEY', '$h]]p~9H2zAA;j&CE>;2/pY5[4*yzM.:;_K/UlHdbxVfyXHWPM^EY(N}X3,)z%;<');
define('LOGGED_IN_KEY', '*Xo7=PB==9@mx]k/Dd1p? t a/}al<sM/=TX(Bj:FNqCF![=bB7:G$`zx;~Odj`4');
define('NONCE_KEY', '_vq0rv)M@)qO6d>FSIq]:_l*SEhi@*7l=JHRdm;7e3Unk4y[Ka(7^)[blH}+]GxL');
define('AUTH_SALT', 'He&JSUK*62hCe[d/QbyU!._Tpx`pS;A0uK)OqhTB&R$q!aY{hcGjNL9lSq4-7x6#');
define('SECURE_AUTH_SALT', 'Ixzm*C&3wZ6vIA&$|JS.rCq+*j}2rj^mCi|LfBe9Rd E7jc|e{-=q}{oh/Z^D+8~');
define('LOGGED_IN_SALT', 'qQPuB>s6W,-;oA%]QWtK+><eIWV6F O56Vh3_Z&HXogsJ|OHNF~b8_azNfLN#w/8');
define('NONCE_SALT', '%zri7qQR,`~Wx~_:+mLeWi2kZFm:7~>PPwCH8LR<#5=_b*([l(;4C82itEMvo,t)');

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

