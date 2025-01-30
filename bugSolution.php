function foo(array $arr) {
  $arr_copy = $arr;
  foreach ($arr_copy as &$value) {
    $value++;
  }
  return $arr_copy; //return a new array
}