<?php
function calSalary($salary,$n){
    for ($i=0; $i < $n; $i++) { 
        $salary = $salary + $salary*0.1;
    }
    return $salary;
}

//đệ quy
function calSalary1($salary,$n){
    if($n == 0 )
    return $salary;
    $salary = $salary + $salary*0.1;
    return calSalary1($salary,$n - 1);
}
echo calSalary1(100,3);
echo "<br>";
print_r(calSalary(100,1));
?>
