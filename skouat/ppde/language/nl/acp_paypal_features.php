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
 * mode: PayPal features
 */
$lang = array_merge($lang, array(
	'PPDE_PAYPAL_FEATURES'                 => 'PayPal IPN functies',
	'PPDE_PAYPAL_FEATURES_EXPLAIN'         => 'Hier kunt u alle functies configureren die de PayPal Directe betaling kennisgeving gebruiken (IPN).',

	// PayPal IPN settings
	'PPDE_LEGEND_IPN_AUTOGROUP'            => 'Auto groep',
	'PPDE_LEGEND_IPN_DONORLIST'            => 'Sponsors lijst',
	'PPDE_LEGEND_IPN_NOTIFICATION'         => 'Notificatie systeem',
	'PPDE_LEGEND_IPN_SETTINGS'             => 'Algemene instellingen',
	'PPDE_IPN_AG_ENABLE'                   => 'Schakel auto groepen in',
	'PPDE_IPN_AG_ENABLE_EXPLAIN'           => 'Hiermee kunnen sponsors aan een vooraf gedefinieerde groep worden toegevoegd.',
	'PPDE_IPN_AG_DONORS_GROUP'             => 'Sponsors groep',
	'PPDE_IPN_AG_DONORS_GROUP_EXPLAIN'     => 'Selecteer de groep waaraan sponsors zullen worden toegevoegd.',
	'PPDE_IPN_AG_GROUP_AS_DEFAULT'         => 'Stel de sponsor groep als standaard in',
	'PPDE_IPN_AG_GROUP_AS_DEFAULT_EXPLAIN' => 'Schakel in om de sponsors groep in te stellen als de standaardgroep van de gebruiker.',
	'PPDE_IPN_AG_MIN_BEFORE_GROUP'         => 'Minimaal bedrag voor sponsor groep',
	'PPDE_IPN_AG_MIN_BEFORE_GROUP_EXPLAIN' => 'Totaal aantal donaties dat een gebruiker moet doen om aan de sponsor groep te worden toegevoegd.',
	'PPDE_IPN_DL_ENABLE'                   => 'Sponsorlijst inschakelen',
	'PPDE_IPN_DL_ENABLE_EXPLAIN'           => 'Hiermee kan de lijst met sponsors worden ingeschakeld.',
	'PPDE_IPN_ENABLE'                      => 'Schakel IPN in',
	'PPDE_IPN_ENABLE_EXPLAIN'              => 'Schakel deze optie in als u de directe betaling melding service van PayPal wilt gebruiken.',
	'PPDE_IPN_LOGGING'                     => 'Schakel fouten logboeken in',
	'PPDE_IPN_LOGGING_EXPLAIN'             => 'Schrijf fouten en gegevens van PayPal IPN naar een bestand in <strong>/store/ext/ppde/</strong>.',
	'PPDE_IPN_NOTIFICATION_ENABLE'         => 'Schakel notificatie in',
	'PPDE_IPN_NOTIFICATION_ENABLE_EXPLAIN' => 'Stelt in staat om de beheerder en sponsors van de site op de hoogte te stellen wanneer een donatie wordt ontvangen.',

	// PayPal sandbox settings
	'PPDE_LEGEND_SANDBOX_SETTINGS'         => 'Sandbox instellingen',
	'PPDE_SANDBOX_ENABLE'                  => 'Sandbox testen',
	'PPDE_SANDBOX_ENABLE_EXPLAIN'          => 'Gebruik PayPal Sandbox in plaats van PayPal services.<br>Handig voor ontwikkelaars en testers. Alle transacties zijn fictief.',
	'PPDE_SANDBOX_FOUNDER_ENABLE'          => 'Sandbox enkel voor oprichters',
	'PPDE_SANDBOX_FOUNDER_ENABLE_EXPLAIN'  => 'PayPal Sandbox wordt alleen weergegeven aan de oprichters van het forum.',
	'PPDE_SANDBOX_ADDRESS'                 => 'PayPal Sandbox account',
	'PPDE_SANDBOX_ADDRESS_EXPLAIN'         => 'Voer het PayPal Sandbox-e-mailadres of verkopers ID in.',
	'PPDE_SANDBOX_REMOTE'                  => 'PayPal sandbox URL',
	'PPDE_SANDBOX_REMOTE_EXPLAIN'          => 'Wijzig deze instelling niet, tenzij deze extensie fouten tegenkomt om contact te maken met de remote host van de sandbox.',
));

/**
 * Confirm box
 */
$lang = array_merge($lang, array(
	'PPDE_PAYPAL_FEATURES_SAVED' => 'PayPal IPN-functies opgeslagen.',
));

/**
 * Errors
 */
$lang = array_merge($lang, array(
	'PPDE_PAYPAL_FEATURES_MISSING'        => 'Controleer a.u.b. het “Sandbox adres”.',
	'PPDE_PAYPAL_FEATURES_NOT_ENABLEABLE' => 'IPN PayPal kan niet worden ingeschakeld. Controleer de systeemvereisten van de module “Overzicht”.',
));
