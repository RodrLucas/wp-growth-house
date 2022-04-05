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
define( 'DB_NAME', 'wp_growth' );

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
define( 'AUTH_KEY',         '}4^~-gZy)q^!]?(2!}L&Hf/(Lv9zFbsYPNmj8CMboAM581C-VADbNpcfmsrPFR@q' );
define( 'SECURE_AUTH_KEY',  'QqC2d7d~q0JeF%Sr @1vX>BMs}DgrN_xR^$f`5Ag{~oAieTav:!~cX~`B*H?DA-V' );
define( 'LOGGED_IN_KEY',    'A]VQm}z2d&C]xLxdYJzY^iqN&RM{TpMN1?;YK=nhpYEhF?px,G,JLk.#u+;*K0>O' );
define( 'NONCE_KEY',        'Kr_bk5Dn/TE;[@}n.iQ_cI=uH> /R*gJ!OQS[TBo?vS$.lh5`:L0ud,F.nJ|XVuk' );
define( 'AUTH_SALT',        '8 @Z/YldMB!r+k2qEV>:Trog~KVW(OmMHQX?D-tSi:Q2Sd:jIzUls3~l&`cyIasN' );
define( 'SECURE_AUTH_SALT', 'VH?z&4-$5&H|3Pw/oMi/M[KrbVj$eoX|65@DejU`WL$EFp}jjFiI4;}QBK]i!hth' );
define( 'LOGGED_IN_SALT',   '?u0[&X?Pn5-MX4ffF6WaxLt7+nw$/o^N~1]j~U7*>8}#*;vctpn?_s:b??ztZ4/`' );
define( 'NONCE_SALT',       'mR`;65e]0pak-@=ZdZ)G8lVTR<c: 1Z*%1z/Zn[n man=C xT625%[{:( RH4@G6' );

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
