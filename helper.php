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

	/*
	*
	*Создаем позиции для подключения сторонних модулей
	*
	*/
	$document = &JFactory::getDocument();
	$renderer = $document->loadRenderer('modules');
	$options = array('style' => 'xhtml');
	$position = 'topRegister';
	$positionTwo = 'langSwitchNewMenu';


	function setDivUlElementsThreeLevel ($keyOpenDiv, $idDivElement5, $idDivElement6){
		if($idDivElement5 != $keyOpenDiv){
			if($keyOpenDiv == 0){
				echo "<div id='second".$idDivElement6."' style='display:none;'><ul>";
			}else if($keyOpenDiv != $idDivElement6){
				echo "</ul></div><div id='second".$idDivElement6."' style='display:none;'><ul>";
			}
			return $idDivElement6;
		}
	}

?>