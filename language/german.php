<?php
/*	Project:	EQdkp-Plus
 *	Package:	Black Desert game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2016 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if(!defined('EQDKP_INC')){
	header('HTTP/1.0 404 Not Found');exit;
}

$german_array = array (
	'classes' => array (
		1 => 'Krieger',
		2 => 'Walkyre',
		3 => 'Magier',
		4 => 'Magierin',
		5 => 'Bogenschützin',
		6 => 'Berserker',
		7 => 'Bestienmeister',
		8 => 'Schwarzmagierin',
		9 => 'Maehwa',
		10 => 'Musa',
	),
	'professions' => array (
		'primary' => array(
			1 => 'Sammeln',
			2 => 'Verarbeitung',
			3 => 'Koch',
			4 => 'Alchemie',
			5 => 'Ausbildung',
			6 => 'Fischfang',
			7 => 'Jagd',
			8 => 'Handel',
			9 => 'Anbau',
		),
		'secondary' => array (
			1 => 'Wissenspunkte',
			2 => 'Beitragspunkte',
		),
	),
	'roles' => array (
		1 => 'Tank',
		2 => 'Supporter',
		3 => 'Damage Dealer',
	),
	'lang' => array(
		'bd'            => 'Black Desert',
		'tank'          => 'Tank',
		'support'       => 'Heiler',
		'damage_dealer' => 'Damage Dealer',
		
		// Profile information
		'uc_class'          => 'Klasse',
		'uc_level'          => 'Level',
		'uc_cat_profession' => 'Berufe',
		'uc_prof1_name'     => 'Hauptberuf: Name',
		'uc_prof1_value'    => 'Hauptberuf: Stufe',
		'uc_prof2_name'     => 'Punkte',
		'uc_prof2_value'    => 'Wert',
	),
);	
?>
