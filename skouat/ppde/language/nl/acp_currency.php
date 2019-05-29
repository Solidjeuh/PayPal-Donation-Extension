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
 * mode: currency
 */
$lang = array_merge($lang, array(
	'PPDE_DC_CONFIG'           => 'Valutabeheer',
	'PPDE_DC_CONFIG_EXPLAIN'   => 'Hier kun je valuta’s beheren.',
	'PPDE_DC_CREATE_CURRENCY'  => 'Valuta toevoegen',
	'PPDE_DC_DEFAULT_CURRENCY' => '(standaard valuta)',
	'PPDE_DC_ENABLE'           => 'Valuta inschakelen',
	'PPDE_DC_ENABLE_EXPLAIN'   => 'Indien ingeschakeld, wordt de valuta weergegeven in de vervolgkeuzelijst.',
	'PPDE_DC_ISO_CODE'         => 'ISO 4217 code',
	'PPDE_DC_ISO_CODE_EXPLAIN' => 'Alfabetische code van de valuta.<br>Voor meer informatie over ISO 4217, raadpleeg de <a href="https://www.phpbb.com/customise/db/mod/paypal_donation_mod/faq/f_746" title="PayPal Donation MOD FAQ">PayPal Donatie MOD FAQ</a> (externe link).',
	'PPDE_DC_NAME'             => 'Valuta naam',
	'PPDE_DC_NAME_EXPLAIN'     => 'Naam van de valuta.<br>(bijv. Euro).',
	'PPDE_DC_POSITION'         => 'Positie van de valuta',
	'PPDE_DC_POSITION_EXPLAIN' => 'Bepaal waar het valutasymbool wordt gepositioneerd ten opzichte van het weergegeven bedrag.<br>bijv. <strong>€20</strong> of <strong>15€</strong>.',
	'PPDE_DC_POSITION_LEFT'    => 'Links',
	'PPDE_DC_POSITION_RIGHT'   => 'Rechts',
	'PPDE_DC_SYMBOL'           => 'Valuta symbool',
	'PPDE_DC_SYMBOL_EXPLAIN'   => 'Bepaal het valutasymbool.<br>bijv. <strong>$</strong> voor U.S. Dollar, <strong>€</strong> voor Euro.',
));

/**
 * Confirm box
 */
$lang = array_merge($lang, array(
	'PPDE_DC_ADDED'          => 'Er is een valuta toegevoegd.',
	'PPDE_DC_CONFIRM_DELETE' => 'Weet je zeker dat je de geselecteerde valuta wilt verwijderen?',
	'PPDE_DC_DELETED'        => 'Een valuta is verwijderd.',
	'PPDE_DC_GO_TO_PAGE'     => '%sBewerk bestaande valuta%s',
	'PPDE_DC_UPDATED'        => 'Een valuta is bijgewerkt.',
));

/**
 * Errors
 */
$lang = array_merge($lang, array(
	'PPDE_CANNOT_DISABLE_DEFAULT_CURRENCY' => 'U kunt de standaardvaluta niet uitschakelen.',
	'PPDE_DC_EMPTY_NAME'                   => 'Voer een valutanaam in.',
	'PPDE_DC_EMPTY_ISO_CODE'               => 'Voer een ISO code in.',
	'PPDE_DC_EMPTY_SYMBOL'                 => 'Voer een symbool in.',
	'PPDE_DC_EXISTS'                       => 'Deze valuta bestaat al',
	'PPDE_DC_INVALID_HASH'                 => 'De link is beschadigd. De hash is ongeldig.',
	'PPDE_DC_NO_CURRENCY'                  => 'Geen valuta gevonden.',
	'PPDE_DISABLE_BEFORE_DELETION'         => 'U moet deze valuta uitschakelen voordat u deze verwijdert.',
));
