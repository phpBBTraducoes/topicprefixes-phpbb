<?php
/**
 *
 * Topic Prefixes extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid [2017][ver 1.0.0] (https://github.com/phpBBTraducoes)
 * @copyright (c) 2016 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_TOPIC_PREFIXES'	=> 'Prefixos do tópico',
	'ACP_MANAGE_PREFIXES'	=> 'Gerenciar prefixos',

	// ACP Log messages
	'ACP_LOG_PREFIX_ADDED'		=> '<strong>Novo prefixo de tópico criado</strong><br />» %1$s no fórum: %2$s',
	'ACP_LOG_PREFIX_DELETED'	=> '<strong>Prefixo de tópico deletado</strong><br />» %1$s no fórum: %2$s',
));
