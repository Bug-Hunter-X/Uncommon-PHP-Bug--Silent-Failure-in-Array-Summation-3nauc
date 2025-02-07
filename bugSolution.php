function foo(array $arr): int {
  if (empty($arr)) {
    return 0;
  }
  $sum = 0;
  foreach ($arr as $value) {
    if (is_numeric($value)) {
      $sum += $value;
    } else {
      throw new InvalidArgumentException("Non-numeric value encountered in array: " . var_export($value, true));
    }
  }
  return $sum;
}

$arr = [1, 2, 3, 'a', 4, 5];
try {
  $result = foo($arr);
  echo "Sum: " . $result;
} catch (InvalidArgumentException $e) {
  echo "Error: " . $e->getMessage();
}
