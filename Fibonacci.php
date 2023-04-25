<!-- Caso 1 -->
<?php
function fibonacci($n) {
  $fib = array(0, 1); 
  for ($i = 2; $i < $n; $i++) {
    $fib[$i] = $fib[$i-1] + $fib[$i-2]; 
  }
  sort($fib); 
  return $fib;
}

$n = 4;
$fib = fibonacci($n);
print_r($fib); 
?>

<!--Caso 2-->
<?php
function fibonaci($n) {
  $fib = array(0, 1); 
  for ($i = 2; $i < $n; $i++) {
    $fib[$i] = $fib[$i-1] + $fib[$i-2]; 
  }
  sort($fib); 
  return $fib;
}

$n = 5;
$result = fibonacci($n);
print_r($result); 
?>

<!-- Caso 3 -->
<?php
function fibonacci($n) {
  $fib = array(0, 1); 
  for ($i = 2; $i < $n; $i++) {
    $fib[$i] = $fib[$i-1] + $fib[$i-2]; 
  }
  sort($fib); 
  return $fib;
}

$n = 8;
$result = fibonacci($n);
echo implode(", ", $result); 
?>

<!-- Caso 4 -->

<?php
function fibonacci($n) {
  $fib = array(0, 1);
  for ($i = 2; $i < $n; $i++) {
    $fib[$i] = $fib[$i-1] + $fib[$i-2]; 
  }
  sort($fib); 
  return $fib;
}

$n = 1;
$result = fibonacci($n);
print_r($result); 
?>

<!-- Caso 5 -->
<?php
function fibonacci($n) {
  $fib = array(0, 1); 
  for ($i = 2; $i < $n; $i++) {
    $fib[$i] = $fib[$i-1] + $fib[$i-2]; 
  }
  sort($fib); 
  return $fib;
}

$n = 3;
$result = fibonacci($n);
print_r($result); 
?>

<!-- Caso 6 -->

<?php
function fibonacci($n) {
  $fib = array(0, 1); 
  for ($i = 2; $i < $n; $i++) {
    $fib[$i] = $fib[$i-1] + $fib[$i-2]; 
  }
  sort($fib); 
  return $fib;
}

$n = 10;
$result = fibonacci($n);
print_r($result); 
?>
