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

if(!class_exists('bd')){
	class bd extends game_generic {	
		public $version			= '0.1.1';
		protected $this_game	= 'bd';
		protected $types		= array('classes', 'professions', 'roles', 'filters');
		protected $classes		= array();
		protected $roles		= array();
		protected $professions	= array();
		protected $filters		= array();								// and the according function: load_$type
		public $langs			= array('english', 'german');	
		protected static $apiLevel = 20;
		
		protected $class_dependencies = array(
			array (
				'name'			=> 'class',
				'type'			=> 'classes',
				'primary'		=> true,
				'admin'			=> false,
				'decorate'		=> true,
				'colorize'		=> true,
				'roster'		=> true,
				'recruitment'	=> true,
				'parent'		=> false,
			),
		);
		
		public $default_roles = array (
			1 => array(1),                       // Tank
			2 => array(2),                       // Supporter
			3 => array(3, 4, 5, 6, 7, 8, 9, 10), // Damage Dealer
		);
		
		protected $class_colors = array(
			0	=> '#E1E1E1',
			1	=> '#E66969',
			2	=> '#E57B38',
			3	=> '#672fe7',
			4	=> '#914CC5',
			5	=> '#EDFF40',
			6	=> '#06C28B',
			7	=> '#CA2A52',
			8	=> '#8238A5',
			9	=> '#8BE6FF',
			10	=> '#5385B1',
		);
		
		protected $glang     = array();
		protected $lang_file = array();
		protected $path      = false;
		public $lang         = false;
		
		
		public function __construct(){
			parent::__construct();
		}
		
		
		public function install($blnEQdkpInstall=false){
			return array();
		}
		
		
		protected function load_filters($langs){
			if(!count($this->classes)){
				$this->load_type('classes', $langs);
			}
			foreach($langs as $lang){
				$names = $this->classes[$this->lang];
				$this->filters[$lang][] = array('name' => '-----------', 'value' => false);
				foreach($names as $id => $name){
					$this->filters[$lang][] = array('name' => $name, 'value' => 'class:'.$id);
				}
			}
		}
		
		
		public function profilefields(){
			$this->load_type('professions', array($this->lang));
			$xml_fields = array(
				'level' => array(
					'type'			=> 'spinner',
					'category'		=> 'character',
					'lang'			=> 'uc_level',
					'min'			=> 1,
					'max'			=> 60,
					'value'			=> 1,
					'undeletable'	=> true,
					'sort'			=> 1
				),
				'prof1_name' => array(
					'type'			=> 'dropdown',
					'category'		=> 'profession',
					'lang'			=> 'uc_prof1_name',
					'options'		=> $this->professions[$this->lang]['primary'],
					'undeletable'	=> true,
					'options_lang'	=> 'professions',
					'sort'			=> 1,
				),
				'prof1_value' => array(
					'type'			=> 'int',
					'category'		=> 'profession',
					'lang'			=> 'uc_prof1_value',
					'size'			=> 4,
					'undeletable'	=> true,
					'sort'			=> 2
				),
				'prof2_name' => array(
					'type'			=> 'dropdown',
					'category'		=> 'profession',
					'lang'			=> 'uc_prof2_name',
					'options'		=> $this->professions[$this->lang]['secondary'],
					'undeletable'	=> true,
					'options_lang'	=> 'professions',
					'sort'			=> 3,
				),
				'prof2_value' => array(
					'type'			=> 'int',
					'category'		=> 'profession',
					'lang'			=> 'uc_prof2_value',
					'size'			=> 4,
					'undeletable'	=> true,
					'sort'			=> 4
				),
			);
			return $xml_fields;
		}
		
		
	}//end class
}
?>
