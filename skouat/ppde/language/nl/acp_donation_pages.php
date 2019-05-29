<?php
/**
 *
 * PayPal Donation extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017 Skouat
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

/**
 * mode: donation pages
 */
$lang = array_merge($lang, array(
	// Donation Page Body settings
	'DONATION_BODY'            => 'Donatie hoofdpagina',
	'DONATION_BODY_EXPLAIN'    => 'Voer de tekst in die u wilt weergeven op de donatie hoofdpagina.',

	// Donation Cancel settings
	'DONATION_CANCEL'          => 'Donatie annuleren',
	'DONATION_CANCEL_EXPLAIN'  => 'Voer de tekst in die u wilt weergeven op de annulatie pagina.',

	// Donation Success settings
	'DONATION_SUCCESS'         => 'Donatie succes',
	'DONATION_SUCCESS_EXPLAIN' => 'Voer de tekst in die u op de succespagina wilt weergeven.',

	// Donation Page settings
	'PPDE_DP_CONFIG'           => 'Donatie pagina’s',
	'PPDE_DP_CONFIG_EXPLAIN'   => 'Hiermee kunt u hoofd, succes & annulatie pagina van de extensie aanpassen.',
	'PPDE_DP_LANG'             => 'Taal',
	'PPDE_DP_LANG_SELECT'      => 'Selecteer een taal',
	'PPDE_DP_PAGE'             => 'Pagina type',

	// Donation Page Template vars
	'PPDE_DP_BOARD_CONTACT'    => 'Forum contact',
	'PPDE_DP_BOARD_EMAIL'      => 'Forum e-mail',
	'PPDE_DP_BOARD_SIG'        => 'Forum onderschrift',
	'PPDE_DP_PREDEFINED_VARS'  => 'Voorgedefinieerde variabelen',
	'PPDE_DP_SITE_DESC'        => 'Site beschrijving',
	'PPDE_DP_SITE_NAME'        => 'Sitenaam',
	'PPDE_DP_USER_ID'          => 'Gebruikers ID',
	'PPDE_DP_USERNAME'         => 'Gebruikersnaam',
	'PPDE_DP_VAR_EXAMPLE'      => 'Voorbeeld',
	'PPDE_DP_VAR_NAME'         => 'Naam',
	'PPDE_DP_VAR_VAR'          => 'Variabel',
));

/**
 * Confirm box
 */
$lang = array_merge($lang, array(
	'PPDE_DP_ADDED'          => 'Een donatiepagina voor de taal “%s” is toegevoegd.',
	'PPDE_DP_CONFIRM_DELETE' => 'Weet je zeker dat je de geselecteerde donatiepagina wilt verwijderen?',
	'PPDE_DP_DELETED'        => 'Een donatiepagina voor de taal “%s” is verwijderd.',
	'PPDE_DP_GO_TO_PAGE'     => '%sBewerk bestaande donatiepagina%s',
	'PPDE_DP_UPDATED'        => 'Een donatiepagina voor de taal “%s” is bijgewerkt.',
));

/**
 * Errors
 */
$lang = array_merge($lang, array(
	'PPDE_DP_EMPTY_LANG_ID'     => 'Geen taal geselecteerd.',
	'PPDE_DP_EMPTY_NAME'        => 'De geselecteerde donatiepagina bestaat niet.',
	'PPDE_DP_EXISTS'            => 'Deze donatiepagina bestaat al.',
	'PPDE_DP_NO_DONATION_PAGES' => 'Geen donatiepagina gevonden.',
));
