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
define( 'DB_NAME', 'wordpressTemplate' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '(ub~_K5dy~HF3*U~H^p#vFBP8u:g3f@*hB8MUjqn2NxP)S>>m04dx)x&oO!pQO3Q' );
define( 'SECURE_AUTH_KEY',  's#74[dOk)J<dd+x+d`?4(VW}o#81M^(lX=0p>i2:MSKT3X/T)9hc]5L.5(H&7Tiv' );
define( 'LOGGED_IN_KEY',    ')%humEb8-#:[Y:`%g);^~`ucrS4evNWRz)fu/5+M}2lAL)IZ9$VnupN&)%q9&;L`' );
define( 'NONCE_KEY',        'k*6R)Pd<8N|1?&c3j3-|4Arln:@yn[w<kJ{4<srAjmJzxoy2~]{c^)0%N7$=o0$9' );
define( 'AUTH_SALT',        '~fkJ,Jlu{@f7+S$l(eY}- :Po5%#$L1Z21 x=}lg#o9 D7M{O^gsj}w{ xHtwPL8' );
define( 'SECURE_AUTH_SALT', '`>Ik8hSXq?~P1`IWQ,w=9.8AK5WV*/]n(&]J%I?3636bU>!TiBkCWi :okvvi QN' );
define( 'LOGGED_IN_SALT',   'SMVIDSV<7ohqWu7,IB(0~QqdUaR*8D|IA}Q)9l2`9r;8)Dm!&d4kdrit~hvEn5}K' );
define( 'NONCE_SALT',       'k7;-_e8^V;JFmd;+teO0FAts_fzbhuaAI!vgF@<w`zF4Uxw#r4kqV9I,9+&63uWw' );
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
