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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '0U>~cP2)g3LxG6UHl::@JRKLGRk4~&sCkRO0)s|?4ON`cRjY-M&U5==+pAnBlOU_');
define('SECURE_AUTH_KEY',  '?syryF1;r|HIyAWTO4I4!&Y)={H70-Y+pT6]x2NE q(Wo@Dvr-I^t^<;i?fbdg-x');
define('LOGGED_IN_KEY',    'Z_iT)A?OugjHfqZ5F?, S3btnJhMa~~l|~`)(rH-L#E0zl.pi. @`A]6{$BXSW1H');
define('NONCE_KEY',        '`j.>vgUMjr_13JdCi,V.9fLgem=w7}#OJHkuS2U67Vp+P9zv|$iLA_YYT)y&?~Nm');
define('AUTH_SALT',        'Jgy>s4 :NhsaQp@533HggXwwG9Y T8_]a8R{8HFK6(3&epxxzN*mSP2^I~n3cVKD');
define('SECURE_AUTH_SALT', '$:*xs*6}tU/r`H:TFpmHszW-(mY!umJrhvyDfYStVnKr$A>w}Ki}R^ArW$w>=01|');
define('LOGGED_IN_SALT',   '/MHl&4:f+9xT+E:eHv&@2h-_r;N7/1t~A3Oh%kI,t[_IRkQ-qf17fG@#HdcCP~bh');
define('NONCE_SALT',       'K8o%C&4vL?XVLB=p>v-6m#p1t[Ou(8c%fBsl6ZoF,s+|ti%?XI,Y)::+Qy^x&1PD');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'ninou_';

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

/**pour desactiver l'editeur visuel*/
define( 'DISALLOW_FILE_EDIT', true );

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');