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

$english_array = array(
	'classes' => array(
		1 => 'Warrior',
		2 => 'Valkyrie',
		3 => 'Wizard',
		4 => 'Witch',
		5 => 'Ranger',
		6 => 'Giant',
		7 => 'Tamer',
		8 => 'Sorceress',
		9 => 'Maehwa',
		10 => 'Musa',
		11 => 'Kunoichi',
		12 => 'Ninja',
	),
	'professions' => array(
		'primary' => array(
			1 => 'Gathering',
			2 => 'Processing',
			3 => 'Cooking',
			4 => 'Alchemy',
			5 => 'Taming',
			6 => 'Fisching',
			7 => 'Hunting',
			8 => 'Trading',
			9 => 'Farming',
		),
		'secondary' => array (
			1 => 'Knowledgepoints',
			2 => 'Contributionpoints',
		),
	),
	'roles' => array(
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
		'uc_class'          => 'Class',
		'uc_level'          => 'Level',
		'uc_cat_profession' => 'Professions',
		'uc_prof1_name'     => 'Profession: Name',
		'uc_prof1_value'    => 'Profession: Level',
		'uc_prof2_name'     => 'Points',
		'uc_prof2_value'    => 'Value',
	),
);
?>
