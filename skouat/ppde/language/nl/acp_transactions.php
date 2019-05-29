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
 * mode: transactions
 */
$lang = array_merge($lang, array(
	// Transactions log
	'PPDE_DT_CONFIG'                => 'Transacties Log',
	'PPDE_DT_CONFIG_EXPLAIN'        => 'Hier kunt u transactiegegevens bekijken.',
	'PPDE_DT_IPN_STATUS'            => 'IPN Status',
	'PPDE_DT_IPN_TEST'              => 'IPN test',
	'PPDE_DT_PAYMENT_STATUS'        => 'Betalingsstatus',
	'PPDE_DT_TXN_ID'                => 'Transactie ID',
	'PPDE_DT_USERNAME'              => 'Sponsor naam',

	// Display transactions
	'PPDE_DT_APPROVE'                       => 'Goedkeuren',
	'PPDE_DT_BOARD_USERNAME'                => 'Sponsor',
	'PPDE_DT_CHANGE_BOARD_USERNAME'         => 'Wijzig sponsor',
	'PPDE_DT_CHANGE_BOARD_USERNAME_EXPLAIN' => 'Dit wijzigt het gebruikersaccount waaraan deze donatie is gekoppeld.',
	'PPDE_DT_DETAILS'                       => 'Transactie details',
	'PPDE_DT_DISAPPROVE'                    => 'Afkeuren',
	'PPDE_DT_EXCHANGE_RATE'                 => 'Wisselkoers',
	'PPDE_DT_EXCHANGE_RATE_EXPLAIN'         => 'Gebaseerd op de wisselkoers van kracht op %s.',
	'PPDE_DT_FEE_AMOUNT'                    => 'Vergoeding bedrag',
	'PPDE_DT_ITEM_NAME'                     => 'Itemnaam',
	'PPDE_DT_ITEM_NUMBER'                   => 'Item nummer',
	'PPDE_DT_MEMO'                          => 'Memo',
	'PPDE_DT_MEMO_EXPLAIN'                  => 'Memo ingevoerd door de sponsor via PayPal Website.',
	'PPDE_DT_NAME'                          => 'Naam',
	'PPDE_DT_NET_AMOUNT'                    => 'Netto bedrag',
	'PPDE_DT_PAYER_ID'                      => 'Sponsor ID',
	'PPDE_DT_PAYER_EMAIL'                   => 'Sponsor e-mail',
	'PPDE_DT_PAYER_STATUS'                  => 'Sponsor status',
	'PPDE_DT_PAYMENT_DATE'                  => 'Sponsor Datum',
	'PPDE_DT_RECEIVER_EMAIL'                => 'Betaling verzonden naar',
	'PPDE_DT_RECEIVER_ID'                   => 'Ontvanger ID',
	'PPDE_DT_SETTLE_AMOUNT'                 => 'Conversie naar “%s”',
	'PPDE_DT_SORT_TXN_ID'                   => 'Transactie ID',
	'PPDE_DT_SORT_DONORS'                   => 'Sponsors',
	'PPDE_DT_SORT_IPN_STATUS'               => 'IPN Status',
	'PPDE_DT_SORT_IPN_TYPE'                 => 'Transactie type',
	'PPDE_DT_SORT_PAYMENT_STATUS'           => 'Betalingsstatus',
	'PPDE_DT_TOTAL_AMOUNT'                  => 'Totale bedrag',
	'PPDE_DT_UNVERIFIED'                    => 'Niet geverifieerd',
	'PPDE_DT_VERIFIED'                      => 'Geverifieerd',
	'PPDE_DT_UPDATED'                       => 'De transactie is bijgewerkt.',

	'PPDE_MT_TITLE'                     => 'Handmatige transactie',
	'PPDE_MT_TITLE_EXPLAIN'             => 'Hier kunt u een transactie handmatig toevoegen, bijvoorbeeld als u een andere donatie dan PayPal heeft ontvangen.',
	'PPDE_MT_REQUIRED_CHARACTER'        => '*',
	'PPDE_MT_REQUIRED_EXPLAIN'          => 'verplicht veld',
	'PPDE_MT_DETAILS'                   => 'Transactie details',
	'PPDE_MT_USERNAME'                  => 'Sponsor',
	'PPDE_MT_USERNAME_EXPLAIN'          => 'Selecteer de anonieme gebruiker als de donatie is gedaan door een gast.',
	'PPDE_MT_FIRST_NAME'                => 'Voornaam',
	'PPDE_MT_LAST_NAME'                 => 'Achternaam',
	'PPDE_MT_PAYER_EMAIL'               => 'Email',
	'PPDE_MT_RESIDENCE_COUNTRY'         => 'Land',
	'PPDE_MT_RESIDENCE_COUNTRY_EXPLAIN' => 'ISO 3166 alpha-2 code, 2 karakters, zie <a href="https://www.phpbb.com/customise/db/extension/paypal_donation_extension/faq/2796" target="_blank" rel="noreferrer">FAQ</a>.',
	'PPDE_MT_TOTAL_AMOUNT'              => 'Totale bedrag',
	'PPDE_DECIMAL_EXPLAIN'              => 'Gebruik “.” Als decimaal symbool.', // Note for translator: do not translate the decimal symbol
	'PPDE_MT_FEE_AMOUNT'                => 'Vergoeding bedrag',
	'PPDE_MT_NET_AMOUNT'                => 'Netto bedrag',
	'PPDE_MT_PAYMENT_DATE'              => 'Donatie datum',
	'PPDE_MT_PAYMENT_DATE_PICK'         => 'Kies een datum',
	'PPDE_MT_PAYMENT_TIME'              => 'Donatie tijd',
	'PPDE_MT_PAYMENT_TIME_EXPLAIN'      => 'Voorbeelden van toegestane tijdnotaties',
	'PPDE_MT_MEMO'                      => 'Memo',
	'PPDE_MT_ADDED'                     => 'De transactie is succesvol toegevoegd.',

	// List of available translations: https://github.com/fengyuanchen/datepicker/tree/master/i18n
	'PPDE_MT_DATEPICKER_LANG'           => 'nl-NL',
));

/**
 * mode: transactions
 * Info: This array is out of the previous because there is an issue with Transifex platform
 */
$lang = array_merge($lang, array(
	/**
	 * TRANSLATORS PLEASE NOTE
	 * The line below has a special note.
	 * "## For translate:" followed by one "Don't" and one "Yes"
	 * "Don't" means do not change this column, and "Yes" means you can translate this column.
	 */

	## For translate:					Don't					Yes
	'PPDE_DT_PAYMENT_STATUS_VALUES' => array(
										'canceled_reversal' => 'Geannuleerde terugboeking',
										'completed'         => 'Voltooid',
										'created'           => 'Aangemaakt',
										'denied'            => 'Geweigerd',
										'expired'           => 'Verlopen',
										'failed'            => 'Mislukt',
										'pending'           => 'In afwachting',
										'refunded'          => 'Teruggestort',
										'reversed'          => 'Omgekeerd',
										'processed'         => 'Verwerkt',
										'voided'            => 'Ongeldig',
	),
));

/**
 * Errors
 */
$lang = array_merge($lang, array(
	'PPDE_DT_IPN_APPROVED'         => 'Transactie handmatig goedgekeurd',
	'PPDE_DT_IPN_APPROVED_EXPLAIN' => 'Deze donatie is handmatig goedgekeurd met de volgende fouten',
	'PPDE_DT_IPN_ERRORS'           => 'U moet deze donatie heroverwegen omdat de volgende fouten worden gedetecteerd',
	'PPDE_DT_NO_TRANSACTION'       => 'Geen transactie gevonden.',

	'PPDE_MT_DONOR_NOT_FOUND'      => 'De sponsor, gebruiker “%1$s” is niet gevonden.',
	'PPDE_MT_MC_GROSS_TOO_LOW'     => 'De totale hoeveelheid moet groter zijn dan nul.',
	'PPDE_MT_MC_FEE_NEGATIVE'      => 'De vergoeding kan niet negatief zijn.',
	'PPDE_MT_MC_FEE_TOO_HIGH'      => 'De vergoeding moet lager zijn dan het totale bedrag.',
	'PPDE_MT_PAYMENT_DATE_ERROR'   => 'De donatiedatum “%1$s” kon niet worden verwerkt.',
	'PPDE_MT_PAYMENT_TIME_ERROR'   => 'De donatietijd “%1$s” kon niet worden verwerkt.',
	'PPDE_MT_PAYMENT_DATE_FUTURE'  => 'De datum van de donatie moet in het verleden liggen, maar het was “%1$s”.',
));
