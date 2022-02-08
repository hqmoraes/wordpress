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
define( 'DB_NAME', 'imobiliaria' );

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
define( 'AUTH_KEY',         'xIuL[>W =cozd9zP]gZ1Eh{(cuwJQ?3zWImNh[14xQm_9qUd]kM7<TganZZ]N 1E' );
define( 'SECURE_AUTH_KEY',  '.i6(J:,V6?05L$k=8(0QL>Zo.O<f?tSRC/[YakW>4j.wCJk],(/`@y$kXpwv3^n6' );
define( 'LOGGED_IN_KEY',    'yd~hEg81{ja,<=o[{hwnZ/jb-yD?I0&|Qt22CfXgb?cm$~)gRZrO0Shc_$$hN`Lg' );
define( 'NONCE_KEY',        '@Rb~,/TND(p]dr<G7^gEkztNEpssxhVPQ;;BF(X-+wQ=BM u7.|4fEi|%BkSz=_G' );
define( 'AUTH_SALT',        '%1Hq4W$6Mz=<Mc0 lfPc;t5JDu?#b?<A<:Pf{g8]~;HaD5@e60FM;F+$uV=lVBf@' );
define( 'SECURE_AUTH_SALT', ')S5s6i E`Zec$mu79x6+V!/rrt^m=E!VO;1F}|oHc1|P0:d:u;@Yip^q1LMeU+9Q' );
define( 'LOGGED_IN_SALT',   '4Fz8cY/=P?C&R>!I]]XQR7=6D33GAv*n}=u7g!_mZujz[rPSI5PTv]{R V?yVvIA' );
define( 'NONCE_SALT',       'TjmY0.=~:~3A*t;(dSCPeiNya7/4RAbmbdS&3>l*[e=.$m)2Ox.!s?Es86#zdW3G' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'imobiliaria_';

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
