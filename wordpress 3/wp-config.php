<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'bddalex');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost:8889');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{9Hlsb>5#oK9U9^}11.zc ml6.5O}Hh}Z.xrV)(kKZ{Vt ,+|u/YLXjunS%C 861');
define('SECURE_AUTH_KEY',  'wrLl8&hnyM~B(n%G3eq#18-wf(x)&4elt5Hts$4d!CeW1}wX*iB{IBAgHx)E#Lcm');
define('LOGGED_IN_KEY',    '{{Av55-7Z4hu2^SQL8!Y#S?r`G;s8oQ8UO<XHI6]P<i&+mAS/.6J4]<TRuc{?6$Q');
define('NONCE_KEY',        'I0[Z}84Cd.5#tZe07YFW5DqF;`tn)+T^|{:mB#]7|O Ra|KAItm`]w}iV=ht(+7q');
define('AUTH_SALT',        '3i(z%g9~I@n!Lt:#W8!]laTi[e#X(TFnCx+0tj(C/DvnD7rcZ@$^iS/6-4sKZ]]s');
define('SECURE_AUTH_SALT', '{{+1G{UiMr!}xV7bU2Mw7-E6.a1Ui)&k=][<t67sUD+baW?w0[~INw6.VQgdDDI>');
define('LOGGED_IN_SALT',   '*6yn)tALEI6EWoY5&59EC$o~X&-sT#jBz Onjj}SQ>S=4x;kKaD9Pmk%Ic2FDl@G');
define('NONCE_SALT',       'Rs3B+#TNTq5koR%LbX&^3#h5@kSi^7it&M3NL-zLeh(ifjXgCWMK:y.?i [e(_V,');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');