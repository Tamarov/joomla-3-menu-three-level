<?php
	defined("_JEXEC") or die();
	
	class ModMenuThreeLevel{
		public function get_items($params){
			$app = JFactory::getApplication();
			$menu = $app::getMenu();
			$items = $menu->getItems('menutype', $params->get('menutype'), FALSE);
			$arr = array();
			$lastitem = 0;
			$idMenu = 0;
			$idMenuSecond = 0;
			foreach($items as $key => $val){
				$arr[$key] = array(
								'id'=>$val->id,
								'title'=>$val->title,
								'flink'=>$val->route,
								'level'=>$val->level,
								'alias'=>$val->alias
								);
				if($val->level == 1)$idMenu = $val->id;				
				$arr[$key][idMenu] = $idMenu;				
				if($val->level == 2)$idMenuSecond = $val->id;
				if($val->level == 3) $arr[$key][idMenuSecond] = $idMenuSecond;
				if($val->level > $arr[$lastitem][level]){
					$arr[$key][chaild] = 1;
				}else{
					$arr[$key][chaild] = 0;
				};
				$lastitem = $key;
			}
			return $arr;
		}
	}
?>