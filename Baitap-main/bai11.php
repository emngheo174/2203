<?php 
$listProduct = array(
    array('name'=>'CPU', 'price'=>50,'quality'=>'10','categoryId'=>1),
    array('name'=>'VGA', 'price'=>650,'quality'=>'10','categoryId'=>1),
    array('name'=>'Main', 'price'=>750,'quality'=>'10','categoryId'=>3),
    array('name'=>'Keyboard', 'price'=>950,'quality'=>'10','categoryId'=>2),
    array('name'=>'Mouse', 'price'=>10,'quality'=>'10','categoryId'=>2),
);

function sortByPrice($listProduct){
    $size = count($listProduct)-1;
    for ($i=0; $i < $size; $i++) { 
        for ($j=0; $j < $size; $j++) { 
            $k = $j +1;
            if($listProduct[$k]['price'] < $listProduct[$j]['price']){
                list($listProduct[$j],$listProduct[$k]) = array ($listProduct[$k],$listProduct[$j]);
            }
        }
    }
    return $listProduct;
}
echo "<pre>";
print_r(sortByPrice($listProduct));
?>