<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'actar');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'N(E >EUB2.9<nO!-N2Z#B|2B f<vPK>-k:JqI|1V(GQd4%M[5eT5iweym,Qe5GUj');
define('SECURE_AUTH_KEY',  '*4$9sT.QSmhhT,:{Vtz5SBaK|AhRBYzrfDUZG^`$MZS$zu^^TdpCBRTr{P@>d:p4');
define('LOGGED_IN_KEY',    'p e6,WVlKUtzEB+;!7LI7CVz9wY|F<Hjx-=xEpZ}bbCf,n, <bp%9z@*`{5XbFKj');
define('NONCE_KEY',        '4TE|N(z2+0Uhpx<{eZMF-;FpaECt`BhQ4Q,oa+)D5N6In~2fAUM?x0KD.;K1+Z~s');
define('AUTH_SALT',        '~HAbK&KEr+jqe9Xe-+kMkFB wZaFDt]a?PF(7QkbxiMxhgx.2`?8wWM)B8nmXqfb');
define('SECURE_AUTH_SALT', '`uveaM=52_Wj)Lc1{qTP~J`HLXJMpbo`98qa>Jk!?Qh`$Rlkxx D&0-9hmf`}M:F');
define('LOGGED_IN_SALT',   '7`uD7.``>V2k*&1<6),(J-;|,&Lw!aNeQL.<r!rTW!9fY5N]$6)!~; YKe.3XrGs');
define('NONCE_SALT',       ']b/E$*N ;!3/S6,A)NqzZTQPO_92IcX;.FiV4)Th?n/(7;J2L1RXM0b?BTJaaK; ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'act_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
