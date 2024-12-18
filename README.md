# PHP strpos() Comparison Pitfall

This repository demonstrates a common yet subtle error in PHP when using the `strpos()` function to check for the presence of substrings.  The issue arises from PHP's loose comparison behavior and the fact that `strpos()` returns `0` for a match at the beginning of the string and `false` for no match. This can lead to incorrect results if not handled carefully.

The `bug.php` file showcases the erroneous code, and `bugSolution.php` provides the correct implementation.