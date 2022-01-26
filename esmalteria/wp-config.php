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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'esmalteria' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Fi6yw{,XX~@S{BSH/}EY$a9)x(*LXQ!2DY`_{=/+yp!)Tc,v@~@]#r^]h]|@ZY1>' );
define( 'SECURE_AUTH_KEY',  'C-Q:mITDt^Mj?0&uM%Pp&2DtwY]WZ0?``[8wU X)L8=/9[xq5AhP5NT5 ExmdO<7' );
define( 'LOGGED_IN_KEY',    'B=?s(vd>);|%-E%WwhL.B93NRvkd:&R2^?bTW}1ri.veas_n8~Tr+ B9n):IG# _' );
define( 'NONCE_KEY',        '>A]+(;+(.k>8beNsSXARz(Fy99P3V*;Psn<N?5kpqJu9ZbE)x|:m@rX{;GJk=]9>' );
define( 'AUTH_SALT',        'j~eT$2wJn3H`CxI6O(,5X])5ui[$kH =)m5$d(m!-}Ypg?T:,uMn[3-q{r4_kM}I' );
define( 'SECURE_AUTH_SALT', ';}JU~F8i.[N9f{{?o/&D8>:Hk2~-mIKKajrW-LW+owd8wJ3VaYBPwc &p?hQ &n}' );
define( 'LOGGED_IN_SALT',   'vXxPG)v#N, 3e{2wH:v0RO+{>,qh{IY2=BclO7Pw)kK1)>f|5SX-e<>EvFeL:Fbm' );
define( 'NONCE_SALT',       'gaSBlX61/$M,d58e}Yb#?<I-U$AeV<,SF#i;&PgtPZc_}*L_Nv4K(E/67.& >D,M' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'esmalteria_';

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
