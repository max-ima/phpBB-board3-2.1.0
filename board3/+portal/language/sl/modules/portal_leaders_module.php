<?php
/**
*
* @package Board3 Portal v2.1 - Leaders
* @copyright (c) 2013 Board3 Group ( www.board3.de )
* Slovenian Translation - Marko K.(max, max-ima,...)
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
$lang = array_merge($lang, array(
	'NO_ADMINISTRATORS_P'	=> 'Brez administratorjev',
	'NO_MODERATORS_P'		=> 'Brez moderatorjev',
	'NO_GROUPS_P'			=> 'Brez skupin',

	// ACP
	'ACP_PORTAL_LEADERS'		=> 'Nastavitve ekipe',
	'ACP_PORTAL_LEADERS_EXP'	=> 'Tukaj prilagodite blok ekipe',
	'PORTAL_LEADERS_EXT'		=> 'Razširjeni Vodje / Ekipa',
	'PORTAL_LEADERS_GROUP'		=> 'Uporabniške skupine za prikaz',
	'PORTAL_LEADERS_EXT_EXP'	=> 'Standardni blok navaja vse skrbnike/modi, medtem ko razširjeni blok vključuje vse ne skrite skupine z legendo.',
));
