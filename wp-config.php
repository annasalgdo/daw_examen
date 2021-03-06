<?php
/** 
 * Les configuracions bàsiques del WordPress.
 *
 * Aquest fitxer té les següents configuracions: configuració de MySQL, prefix de taules,
 * claus secretes, idioma del WordPress i ABSPATH. Trobaràs més informació 
 * al Còdex (en anglès): {@link http://codex.wordpress.org/Editing_wp-config.php Editant
 * el wp-config.php}. Les dades per a configurar MySQL les pots obtenir del
 * teu proveïdor d'hostatjament de web.
 *
 * Aquest fitxer és usat per l'script de creació de wp-config.php durant la
 * instal·lació. No cal que usis el web, pots simplement copiar aquest fitxer
 * sota el nom "wp-config.php" i omplir-lo amb els teus valors.
 *
 * @package WordPress
 */

// ** Configuració de MySQL - Pots obtenir aquestes informacions del teu proveïdor de web ** //
/** El nom de la base de dades per al WordPress */
define('DB_NAME', 'daw2017');

/** El teu nom d'usuari a MySQL */
define('DB_USER', 'root');

/** La teva contrasenya a MySQL */
define('DB_PASSWORD', '');

/** Nom del host de MySQL */
define('DB_HOST', 'localhost');

/** Joc de caràcters usat en crear taules a la base de dades. */
define('DB_CHARSET', 'utf8mb4');

/** Tipus d'ordenació en la base de dades. No ho canvïis si tens cap dubte. */
define('DB_COLLATE', '');

/**#@+
 * Claus úniques d'autentificació.
 *
 * Canvia-les per frases úniques diferents!
 * Les pots generar usant el {@link http://api.wordpress.org/secret-key/1.1/salt/ servei de claus secretes de WordPress.org}
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'un:3FQaN[&eOku__`2Yh2z3Sq(A^O=aJwgux5BWyi8F6kfN!LzC!.&wddw>- CJ,');
define('SECURE_AUTH_KEY', 'LokEOqWoj}82sHLVDnQ}8[4t4jh7.HF?.l7N%*;B3<D({W9alm][z$Er^fZi~Sod');
define('LOGGED_IN_KEY', 'h+`1bBuO[~bWI[R&/$A^U]GwNVL[X]`j./YO+9D`aY?~aL?0XC!0(I#Xln5!:[;Y');
define('NONCE_KEY', 'Ayol8kblcuVxOcs`EGe+?uZkUwF)hjy378ig4vrlN,L ^XN[&aOE?77i9-.Cj./B');
define('AUTH_SALT',        'p;=8MUVc<SrU%e1%(!41r9aNO]5`$<*L/]]@u%E#@r)AqHg <4uaw4SL=3*BNgDO');
define('SECURE_AUTH_SALT', 'zsCOY8O*tBbJL3NN=JX?OT5_VxCkHf]N}>CB}=26(&H*V!MLQ{kskM $EK~i9n;#');
define('LOGGED_IN_SALT',   '}pOoO9yMrda!<Ap yML]~KUn`RV-mNEXF-h_DL4!iz7^*P,PC*Ft;u_=0^HEbJv|');
define('NONCE_SALT',       'I>aW0U(4JN/&8Y`]f}_5_>qAY%;G70BpoT<T?(=`GyD.J[ WY-2RU0ikso-(5`yl');
/**#@-*/

/**
 * Prefix de taules per a la base de dades del WordPress.
 *
 * Pots tenir múltiples instal·lacions en una única base de dades usant prefixos
 * diferents. Només xifres, lletres i subratllats!
 */
$table_prefix  = 'daw2017_';


/**
 * Per a desenvolupadors: WordPress en mode depuració.
 *
 * Canvieu això si voleu que es mostren els avisos durant el desenvolupament.
 * És molt recomanable que les extensions i el desenvolupadors de temes facien servir WP_DEBUG
 * al seus entorns de desenvolupament.
 *
 * Per informació sobre altres constants que es poden utilitzar per depurar,
 * visiteu el còdex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

// Això és tot, prou d'editar - que bloguis de gust!

/** Ruta absoluta del directori del Wordpress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Assigna les variables del WordPress vars i fitxers inclosos. */
require_once(ABSPATH . 'wp-settings.php');
