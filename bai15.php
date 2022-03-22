<?php 
$listProduct = array(
    array('name'=>'CPU', 'price'=>1011110,'quality'=>'10','categoryId'=>1),
    array('name'=>'VGA', 'price'=>10,'quality'=>'10','categoryId'=>1),
    array('name'=>'Main', 'price'=>850,'quality'=>'10','categoryId'=>3),
    array('name'=>'Keyboard', 'price'=>1950,'quality'=>'10','categoryId'=>2),
    array('name'=>'Mouse', 'price'=>750,'quality'=>'10','categoryId'=>2),
);
function findMaxPrice($listProduct){
    // $arrProduct = [];
    $count = count($listProduct);
    $min = [];
    for ($i=0; $i < $count; $i++) {   
            if ($min['price'] < $listProduct[$i]['price'] ) {
                $min = $listProduct[$i];
            }
        } 
    return $min;
}
echo "<pre>";
print_r(findMaxPrice($listProduct));
?>