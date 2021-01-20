<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wpecommerce' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mGYzO2kCetq103LZJ5ZYe!(gNs{f2#2]|`Nqa9Q+MjH1Cr,VJ#Uc#F|$YXTfRO(_' );
define( 'SECURE_AUTH_KEY',  '7l2b{BDON|Y `Zcz[e} g}<o1jTuKL<G{gO[B?8?]n6P]<*]53l [Udwo2CK8SLv' );
define( 'LOGGED_IN_KEY',    '[=uss>k=C;m#kVah/=?em{=cz%0#bQ]z:Wkr2t]SZA+w.*~4eX[7up/)e[dUHJuA' );
define( 'NONCE_KEY',        'vr==DuyFTy*OgIsM H814LN4d^r5*!eI)zy3_:+}EJg~P$]F;FT-Hz6:,~8:[]Ob' );
define( 'AUTH_SALT',        'Uq~v,3~vjD!*6902`mwI#k+)+VxUdeUEiQ1 ontLpt<UbS<1v`X!3JDmA1|1:1d*' );
define( 'SECURE_AUTH_SALT', 'xPLK7Nm#=A%1~I8bD$q:b;&KrV&2/<L[K6=n)FtLik@R23.bI(%>h+fAlqChTUB{' );
define( 'LOGGED_IN_SALT',   'CG|IykrF[)W>-P!F$D!lGY0?v+%=O7;a+d}DVfPl0 6$5bA.Jl1&g.9G@*M=>`or' );
define( 'NONCE_SALT',       '*b#$aE~MA,I::JM`X4N([]ICrrwqV]qSu#V,($LHN1zYZEsprLk=,zB]=n{Z_03n' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wpe_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
