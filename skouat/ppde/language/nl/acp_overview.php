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
 * mode: overview
 */
$lang = array_merge($lang, array(
	'PPDE_OVERVIEW' => 'Overzicht',

	'PPDE_ESI'                  => 'Extensie en systeeminformatie',
	'PPDE_ESI_DETECTED'         => 'Gedetecteerd',
	'PPDE_ESI_INSTALL_DATE'     => 'Installatiedatum <strong>%s</strong>',
	'PPDE_ESI_MORE_INFORMATION' => 'Meer informatie…',
	'PPDE_ESI_NOT_DETECTED'     => 'Niet gedetecteerd',
	'PPDE_ESI_RESYNC_OPTIONS'   => 'Reset de extensie en systeeminformatie of pas deze opnieuw aan',
	'PPDE_ESI_TLS'              => 'TLS 1.2 en HTTP/1.1',
	'PPDE_ESI_VERSION'          => '<strong>%s</strong> versie',
	'PPDE_ESI_VERSION_CURL'     => 'cURL versie',
	'PPDE_ESI_VERSION_SSL'      => 'SSL versie',

	'PPDE_STATS'         => 'Donatie Statistieken',
	'PPDE_STATS_SANDBOX' => 'Sandbox statistieken',

	'STAT_RESET_DATE'                   => 'Reset de installatiedatum van de extensie',
	'STAT_RESET_DATE_CONFIRM'           => 'Weet je zeker dat je de installatiedatum van deze extensie wilt resetten?',
	'STAT_RESET_DATE_EXPLAIN'           => 'Het opnieuw instellen van de installatiedatum is van invloed op de berekening van het totale aantal donaties en enkele andere statistieken.',
	'STAT_RESYNC_OPTIONS'               => 'Resynchroniseer statistieken',
	'STAT_RESYNC_SANDBOX_STATS'         => 'Resynchroniseer PayPal Sandbox tellingen',
	'STAT_RESYNC_SANDBOX_STATS_CONFIRM' => 'Weet je zeker dat je PayPal Sandbox tellingen opnieuw wilt synchroniseren?',
	'STAT_RESYNC_SANDBOX_STATS_EXPLAIN' => 'Resynchroniseer alle sponsors en transacties die PayPal Sandbox telt.',
	'STAT_RESYNC_STATS'                 => 'Resynchroniseer sponsors en transacties tellingen',
	'STAT_RESYNC_STATS_CONFIRM'         => 'Weet u zeker dat u sponsors en transacties wilt hersynchroniseren?',
	'STAT_RESYNC_STATS_EXPLAIN'         => 'Synchroniseer alle sponsors en transacties tellingen. Alleen anonieme sponsors en actieve leden worden in aanmerking genomen.',
	'STAT_RETEST_ESI'                   => 'Vereiste voor extensie controleren',
	'STAT_RETEST_ESI_CONFIRM'           => 'Weet u zeker dat u de extensie  wilt controleren?',
	'STAT_RETEST_ESI_EXPLAIN'           => 'Hiermee kunt u de vereisten van de extensie controleren, in het geval dat de configuratie van de webserver is gewijzigd.',

	'STATS_ANONYMOUS_DONORS_COUNT'   => 'Aantal anonieme sponsors',
	'STATS_ANONYMOUS_DONORS_PER_DAY' => 'Anonieme sponsors per dag',
	'STATS_KNOWN_DONORS_COUNT'       => 'Aantal gekende sponsors',
	'STATS_KNOWN_DONORS_PER_DAY'     => 'Gekende sponsors per dag',
	'STATS_TRANSACTIONS_COUNT'       => 'Aantal transacties',
	'STATS_TRANSACTIONS_PER_DAY'     => 'Transacties per dag',
));
