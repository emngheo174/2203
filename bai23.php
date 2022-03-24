<?php
$menus = array(
	1 => array(
		'id' => 1,
		'title' => "Thể thao",
		'parent_id' => 0
	),
	2 => array(
		'id' => 2,
		'title' => "Xã hội",
		'parent_id' => 0
	),
	3 => array(
		'id' => 3,
		'title' => "Thể thao trong nước",
		'parent_id' => 1
	),
	4 => array(
		'id' => 4,
		'title' => "Giao thông",
		'parent_id' => 2
	),
	5 => array(
		'id' => 5,
		'title' => "Môi trường",
		'parent_id' => 2
	),
	6 => array(
		'id' => 6,
		'title' => "Thể thao quốc tế",
		'parent_id' => 1
	),
	7 => array(
		'id' => 7,
		'title' => "Môi trường đô thị",
		'parent_id' => 5
	),
	8 => array(
		'id' => 8,
		'title' => "Giao thông ùn tắc",
		'parent_id' => 4
	),
);

function printMenu($menus){
    $parent_id = 0; 
    $level = 0;
	$result = [];
	foreach($menus as $item){
		if($item['parent_id'] == $parent_id){
			$item['level'] = $level;
			$result[] = $item;
			unset($menus[$item['id']]);
			$child = printMenu($menus, $item['id'], $level + 1 );
			$result = array_merge($result, $child);
		}
	}
	return $result;
}
$listMenu = printMenu($menus);
echo "<pre>";
 print_r($listMenu);
echo "</pre>";

?>
?>