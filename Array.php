<!-- Caso 1 -->
<?php
function customSort($arr) {
    $freq = array_count_values($arr);
    asort($freq);
    $grouped = array();
    foreach($freq as $key => $value) {
        $grouped[] = array_keys(array_filter($arr, function($x) use($key) { return $x == $key; }));
    }
    foreach($grouped as &$subarr) {
        sort($subarr);
    }
    $result = call_user_func_array('array_merge', $grouped);
    
    return $result;
}

$arr = array(3, 1, 2, 2, 4);
$resultado = customSort($arr);
print_r($resultado); 
?>

<!-- Caso 2 -->
