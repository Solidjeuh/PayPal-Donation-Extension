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

$lang = array_merge($lang, array(
	// Header
	'PPDE_HEADER_LINK_TITLE'           => 'Donatie',
	'PPDE_HEADER_DONORLIST_LINK_TITLE' => 'Sponsors',

	// Index page
	'PPDE_INDEX_STATISTICS_TITLE'      => 'Donatie statistieken',

	// Pages
	'PPDE_DONATION_BUTTON_TITLE'       => 'Doneer',
	'PPDE_DONATION_TITLE'              => 'Doe een donatie',
	'PPDE_DONATION_TITLE_HEAD'         => 'Doe een donatie aan %s',
	'PPDE_CANCEL_TITLE'                => 'Donatie geannuleerd',
	'PPDE_SUCCESS_TITLE'               => 'Donatie succesvol',
	'PPDE_CONTACT_PAYPAL'              => 'Verbinden met PayPal. Even geduld…',
	'PPDE_SANDBOX_TITLE'               => 'Test PayPal donatie met PayPal Sandbox ',

	// Donors list
	'PPDE_DONORLIST_TITLE'             => 'Sponsors lijst',
	'PPDE_DONORLIST_LAST_DONATION'     => 'Laatste donatie',
	'PPDE_DONORLIST_LAST_DATE'         => 'Gedaan op',
	'PPDE_DONORLIST_TOTAL_DONATION'    => 'Donatie bedrag',

	'PPDE_NO_DONORS'            => 'Geen sponsors',

	// Statistics
	'PPDE_DONATE_GOAL_RAISE'    => 'Ons doel is om <strong>%s</strong> te bereiken.',
	'PPDE_DONATE_GOAL_REACHED'  => 'Ons donatie doel is bereikt.',
	'PPDE_DONATE_NO_GOAL'       => 'We hebben geen donatiedoel ingesteld.',
	'PPDE_DONATE_NOT_RECEIVED'  => 'We hebben nog geen donaties ontvangen.',
	'PPDE_DONATE_NOT_USED'      => 'We hebben nog geen donaties gebruikt.',
	'PPDE_DONATE_RECEIVED'      => 'We ontvingen <strong>%s</strong> aan donaties.',
	'PPDE_DONATE_USED'          => 'We gebruikten <strong>%1$s</strong> uit een totaal van <strong>%2$s</strong> ontvangen donaties.',
	'PPDE_DONATE_USED_EXCEEDED' => 'We gebruikten <strong>%s</strong>. Alle donaties zijn gebruikt.',

	// Viewonline
	'PPDE_VIEWONLINE'           => 'Bekijkt donatie pagina',
	'PPDE_VIEWONLINE_DONORLIST' => 'Bekijkt de lijst met sponsors',
));

/**
 * Note: This array is out of the previous because there is an issue with Transifex platform
 * Note for translators: Before pushing your translation on Transifex, please surround array indexes with ''.
 */
$lang = array_merge($lang, array(
	'PPDE_DONORS' => array(
		1 => '%d sponsor',  // 1
		2 => '%d sponsors', // 2+
	),
));

$lang = array_merge($lang, array(
	// Error
	'CURL_ERROR'                => 'cURL fout: %s',
	'INVALID_TXN'               => 'Ongeldige transactie:',
	'INVALID_TXN_ACCOUNT_ID'    => 'Verkoper ID komt niet overeen.',
	'INVALID_TXN_ASCII'         => 'Niet ASCII tekens gedetecteerd in “%s”.',
	'INVALID_TXN_CONTENT'       => 'Onverwachte inhoud voor “%s”.',
	'INVALID_TXN_EMPTY'         => 'Lege waarde voor “%s”.',
	'INVALID_TXN_INVALID_CHECK' => 'Onbekende postgegevens.',
	'INVALID_TXN_LENGTH'        => 'Het verwachte aantal tekens voor “%s” komt niet overeen.',
	'INVALID_RESPONSE_STATUS'   => 'Ongeldige antwoordstatus: ',
	'NO_CONNECTION_DETECTED'    => 'cURL is niet gedetecteerd. Neem contact op met de beheerder van uw webserver.',
	'REQUIREMENT_NOT_SATISFIED' => 'cURL, TLS 1.2 or HTTP1/1 zijn niet gedetecteerd. Neem contact op met de beheerder van uw webserver.',
	'UNEXPECTED_RESPONSE'       => 'Onverwachte reactie van PayPal.',
));

$lang = array_merge($lang, array(
	// Notification
	'NOTIFICATION_PPDE_ADMIN_DONATION_ERRORS'   => '%1$s’s donatie vereist uw aandacht.',
	'NOTIFICATION_PPDE_ADMIN_DONATION_RECEIVED' => '%1$s doneerde “%2$s”.',
	'NOTIFICATION_PPDE_DONOR_DONATION_RECEIVED' => 'Uw donatie van “%1$s” is ontvangen.',
));
