<?php 
$listProduct = array(
    array('name'=>'ACPU', 'price'=>50,'qualtity'=>'10','categoryId'=>1),
    array('name'=>'CPU', 'price'=>50,'qualtity'=>'10','categoryId'=>3),
    array('name'=>'VGA1', 'price'=>650,'qualtity'=>'10','categoryId'=>1),
    array('name'=>'Keyboard', 'price'=>950,'qualtity'=>'10','categoryId'=>2),
    array('name'=>'BCPU', 'price'=>50,'qualtity'=>'10','categoryId'=>1),
    array('name'=>'Main1', 'price'=>750,'qualtity'=>'10','categoryId'=>3),
    array('name'=>'Mouse1', 'price'=>1750,'qualtity'=>'10','categoryId'=>2),
);
$listCategory = array(
    array('name'=>'Gear','id'=>1),
    array('name'=>'Computer','id'=>2),
    array('name'=>'Memory','id'=>3),
);

function sortByCategory($listProduct,$listCategory){

$arrProduct = [];
$count = count($listProduct);

    // for ($k=0; $k < count($listCategory); $k++) { 
    //     $val= $listCategory[$k];
    //     $l = $k-1;
    //     while ($l >=0 && $listCategory[$l]['name'] > $val['name']) {
    //         $listProduct[$l+1] = $listProduct[$l];
    //         $l--;
    //     }
    //     $listProduct[$l+1] = $val;
    // }
    // return $listProduct;

    for ($i=0; $i < count($listCategory); $i++) {


        $val= $listCategory[$i];
        $j = $i-1;
        while ($j >=0 && $listCategory[$j]['name'] > $val['name']) {
            $listProduct[$j+1] = $listProduct[$j];
            $j--;
        }

// foreach($listCategory as $cate){
// $category_Id = $cate['id'];
// foreach($listProduct as $product){
//     if($product['categoryId'] == $category_Id){
//         $arrProduct[] = $product;
//     }
// }

    for ($j=0; $j < $count; $j++) { 
        if ($listCategory[$i]['id'] === $listProduct[$j]['categoryId']) {
            
            $arrProduct[] = $listProduct[$j];
            // $arrProduct[] = $listCategory[$i];
        }

    } 
    
}

 return $arrProduct; 
}
echo "<pre>";
print_r(sortByCategory($listProduct,$listCategory));
?>