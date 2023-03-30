<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'brunobrasil' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nq_w$-)xxv^lXxfcCpW]J;wR[P@${xPOX<60qb`Vy_c! (axlhl3(Er({4Y#ZypW' );
define( 'SECURE_AUTH_KEY',  '3+//E:}F78wiKXUX)+D9J|m~*I;hk!;=Z9nyy8BMQ$nlM2_-oCS+VbE,gfmi.m&h' );
define( 'LOGGED_IN_KEY',    '-kO6x13Tmp`YfLEZ-vzSgqy*pjZ-6OCoo^!5MHH3%Hos---<R>d_Vkt]qK]fIK4u' );
define( 'NONCE_KEY',        '=mXfv),;p3N+m#hzR1$sP,31}EI_I(8s%f*D/f*:HW@N1JPr}0EXkWCP&E)|il;H' );
define( 'AUTH_SALT',        'yaikHQGO|NG+eqxKtf~B,1~!xf+qIv&3j6NUkgdq#>o~$c?xmbHnfeU?>=NC*|hB' );
define( 'SECURE_AUTH_SALT', '{mUXwE=XM<x&|ZMd2(}a8eHjc.HQ~1&0jVW$.%QQi%%556J3zF3n{2;FpZrFef|0' );
define( 'LOGGED_IN_SALT',   'TTODCU|Im:=RZ;39%fml7c<t#[fNInG%P3xvynT%iD&Z|ZZvR$|J{nOfc|zr|ou ' );
define( 'NONCE_SALT',       'b2ta)N*M!{W09uo:pRXGpB$rlYAM*3He<>?&J!*1atmL^(QmgM?i:F@Ysa?IbR:!' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
