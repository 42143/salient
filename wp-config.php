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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'salient');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

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
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{IwY%ADRCg+|lkRV5^PLkCX($tW-|i*&jz<7CN_- sNis>_;.lZvME7hCL`O;Clu');
define('SECURE_AUTH_KEY',  '/7{e(7(Dx%GX&bfb~5/&  |05Ip4?^_OIj/-KUN1]`JDGs?Nv=&=[+2ee,Lk-k`p');
define('LOGGED_IN_KEY',    '}~Sj/Ve8@MN01N^0g?a-n6ceu|0t-QzJ(^vV(3`Npa4dpYjUHT7yw5q{^^ByP?{#');
define('NONCE_KEY',        ':9#NNV#F|t;/)x@r{$v2t,g^K;RuJ[^!w[pYJ|aKwQ/Q!%u`LY_K~1oY1<Io%a@(');
define('AUTH_SALT',        'Bu*IcOOAIG=z)Gsz1[HVV0*o2B4RO3Mhdl@f?ag/T!x$m~xNR(;_BiyvzUxt5@Xu');
define('SECURE_AUTH_SALT', 'kB^UG%LMo@NlEJcBpR{)1UTYifBJQsTjYo~  BDn_myvk{#IM.$-hKxvdgDb/V`H');
define('LOGGED_IN_SALT',   ' st1:<5&j38R%@@eX@*@ HtPwb|!Zr]8Ve9=8bi,}1~0/JPMX(pNf#E3.[8bX3<4');
define('NONCE_SALT',       'EF,cDD_ISS!n0L)T#?yp-zIRwcTzh/*<f-h3q+|R3<(*M9}b.z+x^@C+@(b_*xU ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
