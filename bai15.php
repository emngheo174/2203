<?php 
$listProduct = array(
    array('name'=>'CPU', 'price'=>1011110,'quality'=>'10','categoryId'=>1),
    array('name'=>'VGA', 'price'=>10,'quality'=>'10','categoryId'=>1),
    array('name'=>'Main', 'price'=>850,'quality'=>'10','categoryId'=>3),
    array('name'=>'Keyboard', 'price'=>1950,'quality'=>'10','categoryId'=>2),
    array('name'=>'Mouse', 'price'=>750,'quality'=>'10','categoryId'=>2),
);

function maxByPrice($listProduct){
    // $arrProduct = [];
    $count = count($listProduct);
    $max = [];
    for ($i=0; $i < $count; $i++) {   
            if ($max['price'] < $listProduct[$i]['price'] ) {
                $max = $listProduct[$i];
            }
        } 
    return $max;
}
echo "<pre>";
print_r(maxByPrice($listProduct));
?>
