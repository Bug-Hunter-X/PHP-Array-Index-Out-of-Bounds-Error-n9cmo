This improved code adds a check to ensure the index is within the bounds of the array before attempting to access an element. If the index is out of bounds it outputs a user-friendly message instead of throwing an error. 
```php
<?php
$myArray = array('a', 'b', 'c');
$index = 5;

if ($index >= 0 && $index < count($myArray)) {
  echo $myArray[$index];
} else {
  echo "Index out of bounds!";
}
?>
```