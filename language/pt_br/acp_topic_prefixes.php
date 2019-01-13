<?php
/**
 *
 * Topic Prefixes extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by eunaumtenhoid 2017 [ver 1.0.0] (https://github.com/phpBBTraducoes)
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
	'TOPIC_PREFIXES'			=> 'Prefixos do tópico',
	'TOPIC_PREFIXES_EXPLAIN'	=> 'A partir desta página você pode gerenciar prefixos de tópicos para fóruns.',

	'TOPIC_PREFIX_TAG'			=> 'Tag do prefixo',
	'TOPIC_PREFIX_ENABLED'		=> 'Prefixo Ativado',
	'TOPIC_PREFIXES_EMPTY'		=> 'Não existem prefixos para este fórum.',
	'TOPIC_PREFIX_PLACEHOLDER'	=> '[Meu Prefixo]'

	'CREATE_TOPIC_PREFIX'			=> 'Crie um novo prefixo de tópico',
	'DELETE_TOPIC_PREFIX_CONFIRM'	=> 'Tem certeza de que deseja deletar o prefixo do tópico?',
	'TOPIC_PREFIX_DELETED'			=> 'O prefixo do tópico foi deletado.',

	'TOPIC_PREFIX_TOGGLE_STATE'	=> array(
		0	=> 'Clique para ativar',
		1	=> 'Clique para desativar',
	),

	// Nested set exception messages
	'TOPIC_PREFIXES_LOCK_FAILED_ACQUIRE'	=> 'A extensão de prefixos do tópico não conseguiu adquirir um bloqueio na tabela.',
	'TOPIC_PREFIXES_INVALID_ITEM'			=> 'O prefixo do tópico solicitado não existe.',
	'TOPIC_PREFIXES_INVALID_PARENT'			=> 'O prefixo do tópico solicitado não tem pai.',
));
