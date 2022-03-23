<?php
function calMonthA($money, $rate){
    $n = 0;
    do {
        $n = $n + 1;
        $salary = calSalary($money, $rate, $n);
    }while($salary < 2*$money);
    return $n;
};

function calSalary($money, $rate, $n) {
    if($n <= 1){
        return $money;
    }
    return  calSalary($money, $rate, $n-1) *1.1;
}

echo calMonthA(1000, 5);
?>
