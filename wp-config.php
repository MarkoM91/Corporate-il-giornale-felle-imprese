<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni database
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'affaritalianicorporate' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', 'root' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pB7y/>7Jk_lYI(cNMGeOocopd2{6%U;Y6Z{EyprcICyzZzdlkE[?<FbU@1O(wl%3' );
define( 'SECURE_AUTH_KEY',  '&xpq.(>)>qz#+DdEM&]&U_Nvn?DCv9QK)0Q1Y/|8 Y+VeOzkkSnPz*|DIN29.qe5' );
define( 'LOGGED_IN_KEY',    'W2zqVcXql~[}[-vu:0,[+#*>eb6hiQwF%OYhS=Jfa,>Zz=FJ!:xqV+r;UVDJPQ3~' );
define( 'NONCE_KEY',        'QWmn`O5cpVkhc_+?yl=YON>oO,EdX<iEU-c@yt5h%baZyb_K;`9)%=.a=-hEH[P;' );
define( 'AUTH_SALT',        '9S {iA@-r;XCSGwdRmSTIH9hnqf@Y[9f:*1)q=x@{t3:o>xap4i]R_#v} PC@,b?' );
define( 'SECURE_AUTH_SALT', ' o^g|%AoYR3Rqgof5D]m),(;T4IHBqQ6A1jhRKhywJ}.e`A,PMMcg!EEF@@UFoV?' );
define( 'LOGGED_IN_SALT',   '&<yU+82Y*cPM=<T9{e&SnZL<;ebZ)k<<j/c]`S`3]--M4I?Tz>.T4B,rpe4U1yOz' );
define( 'NONCE_SALT',       'y@0x$;JDKe+qF5$=g+Y2O8tgII$Vtf;:uJ`| 41/bE, XO[&=.H]NYOXaEd99wN8' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
