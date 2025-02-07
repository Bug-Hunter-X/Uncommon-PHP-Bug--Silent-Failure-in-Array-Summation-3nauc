# Uncommon PHP Bug: Silent Failure in Array Summation

This repository demonstrates a subtle bug in a PHP function designed to sum the numeric values in an array. The function fails silently when it encounters non-numeric values instead of throwing an exception or providing a clear error message.  This silent failure can be difficult to debug because it doesn't produce any obvious warnings or errors.

The `bug.php` file contains the buggy code.  The `bugSolution.php` file provides a corrected version that handles non-numeric elements gracefully.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the unexpected output - the non-numeric value 'a' is ignored without warning.

## Solution

The `bugSolution.php` file addresses this issue by explicitly checking for non-numeric types and throwing a more informative exception.