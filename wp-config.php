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
define('AUTH_KEY',         'Er<q~oE$*|5Uv8pg+[i2W+~D.2-8=2^!G*k,in[6Z`)onkgl!IR~,7X0e>i2%Kg8');
define('SECURE_AUTH_KEY',  'm2$eGRa54c]ac7^^`,I.q%`y@2(|L:ZL5}rhcZ~H*1@P*F)9MRQKU 3hjz>v3vO%');
define('LOGGED_IN_KEY',    'a?UK{I7D)ah{uQc0NBqqGZsmaNC*Z#bKt/,{DPSNSw!3fsE_1OVhf]?NS`0lFM:u');
define('NONCE_KEY',        'R;5=0_89b^e#aied5u}Bo;|*aS _+bMD%Vqjd7Pg|^}kn:?uD|BJGazWx~d6{3-U');
define('AUTH_SALT',        '(`pZ_8oi!i$EkybFcTe[.xB|I([Xq*i/|(jO}B2LvLDKmHRaMS;RXuvy,qI!68a,');
define('SECURE_AUTH_SALT', 'e*nw5{~o[[DIuAA ,!}&9{lU8d}:>+a]p9R yA]-Vx!aB5/ZSTGL;3z%@#^:1U<g');
define('LOGGED_IN_SALT',   '_+]R@n>rMzyMld?D~uO*{u*8<*,1IEE(Ij4%r6{<j4GY48|T7w~*(XP*`tj;YU&5');
define('NONCE_SALT',       '`j4<A6Yzx(oS0d2*=5yxP1,+kkEte7OZbGY!OIW*[,@wrol/|!7[AqI&[^:7%c)X');

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
