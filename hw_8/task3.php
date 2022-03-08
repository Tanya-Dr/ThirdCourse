<?php
// 3. Определить сложность следующих алгоритмов. Сколько произойдет итераций?
// 1) O(N * log(N)) - сложность, при n = 100 будет 700 итераций.
$n = 100;
$array[]= [];
for ($i = 0; $i < $n; $i++) { //i = 0 .... 99
    for ($j = 1; $j < $n; $j *= 2) { //j = 1 2 4 8 16 32 64
        $array[$i][$j]= true;
    } 
}

// 2) O(N^2) - сложность, при n = 100 будет 2550 итераций. 
$n = 100;
$array[] = [];
for ($i = 0; $i < $n; $i += 2) { //i = 0 2 4 6 8 ... 98
    for ($j = $i; $j < $n; $j++) { // n(при i = 0) n-2(при i = 2) ... n-98(при i = 98)
        $array[$i][$j]= true;
    } 
}