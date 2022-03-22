<?php 
$listProduct = array(
    array('name'=>'CPU', 'price'=>50,'qualtity'=>'10','categoryId'=>1),
    array('name'=>'VGA1', 'price'=>650,'qualtity'=>'10','categoryId'=>1),
    array('name'=>'Keyboard', 'price'=>950,'qualtity'=>'10','categoryId'=>2),
    array('name'=>'Main1', 'price'=>750,'qualtity'=>'10','categoryId'=>3),
    array('name'=>'Mouse1', 'price'=>1750,'qualtity'=>'10','categoryId'=>2),
);

function sortByName($listProduct){
    $size = count($listProduct);
    for ($i=0; $i < $size; $i++) { 
        $val= $listProduct[$i];
        $j = $i-1;
        while ($j >=0 && strlen($listProduct[$j]['name']) < strlen($val['name'])) {
            $listProduct[$j+1] = $listProduct[$j];
            $j--;
        }
        $listProduct[$j+1] = $val;
    }
    return $listProduct;
}
echo "<pre>";
print_r(sortByName($listProduct));
?>