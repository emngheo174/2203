<?php
$listProduct = array(
    1 => array (
        'name' => 'CPU',
        'price' => '1000',
        'categoryId' => 1
    ), 
    2 => array (
        'name' => 'Main',
        'price' => '2000',
        'categoryId' => 2
    ) 
);
$listCategory = array(
        1 => array (
            'name' => "Computer",
            'id' => 1,
        ), 
        2 => array (
            'name' => "Computer1",
            'id' => 2,
        ) 
);
//bai 4
$nameProduct = '2';
function findProduct($nameProduct,$listProduct,$listCategory){
    foreach($listProduct as $key => $val){
        foreach($listCategory as $key2 => $val2){
        if($val['categoryId'] == $nameProduct){
            echo ($val2['name']);
        }
    }
    }
    return null;
}
findProduct($nameProduct,$listProduct,$listCategory);
?>