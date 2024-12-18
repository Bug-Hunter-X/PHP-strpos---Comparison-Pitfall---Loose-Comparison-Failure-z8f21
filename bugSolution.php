The problem lies in directly comparing the result of `strpos()` with `!== false`.  The correct approach is to use the strict comparison operator (`!==`) and also check explicitly for 0:
```php
<?php
$haystack = "This is a test string";
$needle = "This";

if (strpos($haystack, $needle) === false) {
    echo "Needle not found";
} else {
    echo "Needle found";
}

$needle = "test";
if (strpos($haystack, $needle) === false) {
    echo "Needle not found";
} else {
    echo "Needle found";
}

$needle = "string";
if (strpos($haystack, $needle) === false) {
    echo "Needle not found";
} else {
    echo "Needle found";
}
?>
```
This revised version explicitly checks for `=== false`, ensuring that the code correctly identifies the absence of the substring regardless of its position.