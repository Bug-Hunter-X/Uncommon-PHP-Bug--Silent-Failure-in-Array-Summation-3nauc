function foo(array $arr): int {
  if (empty($arr)) {
    return 0;
  }
  $sum = 0;
  foreach ($arr as $value) {
    if (is_numeric($value)) {
      $sum += $value;
    } else {
      // Handle non-numeric values
      // This is where a common error might occur - not handling exceptions
    }
  }
  return $sum;
}

$arr = [1, 2, 3, 'a', 4, 5];
$result = foo($arr);
echo "Sum: " . $result;