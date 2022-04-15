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
define( 'DB_NAME', 'S&R_MYSQL_DB');

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'S&R_MYSQL_USER');

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'S&R_MYSQL_PASSWORD');

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'S&R_MYSQL_HOST');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define('AUTH_KEY',         'MdxhENP8aHgdp>aTfC+EG?1DLa}!OX=,i- ?(Bxj<Jh2t@%_:8qk:dReDCa=0=@2');
define('SECURE_AUTH_KEY',  'o&^xOETsxFV< wv2.c++XVxiA|`B={7^w}LyoQL7yE<k[RV?aB9:_iHJ-lF)M-{_');
define('LOGGED_IN_KEY',    '-ClN#OJ|E^ZL7Ve|.E2~b>68MDI4|2(c[u/wm=St&naG}^S[eI.%x<W`D)Jx1:5&');
define('NONCE_KEY',        '>3+`B_`R+w|l~y(&pY.em1vbR,h~m1o|/aSt4f=P*-X S,KH0!-k!};ph{*tiI1T');
define('AUTH_SALT',        'MDu%yQ32AdVLj`bZ^~sPEWw-w-!_PsAB:]{UqtfTe@[N/~ttzL{3HQd0VY=R+DjK');
define('SECURE_AUTH_SALT', 'W;$rK,:+VGi|v(%e=ht.oWsSsO@;{vO7o90.E`XK Oj9pwcr!>fmqt-!IRsf{Zv$');
define('LOGGED_IN_SALT',   '*R!il02q:Q&^|GWv/dx1bz S.UN2q$lfZkF6+{_lBP%+Fk^Q.L !$%5}7+Y`i!xX');
define('NONCE_SALT',       'w(&E79`es|xrC>1xQrM}4p2Yk#uxDv@UI(xG]NbpU8KQ+bjS``SXG58xv ;yH#ct');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

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
define('WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

