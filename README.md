# PHP Array Index Out of Bounds Bug

This repository demonstrates a common yet easily overlooked error in PHP: accessing an array element using an index that's out of bounds.  This can lead to unexpected behavior or a fatal error, depending on your PHP configuration and error handling.

The `bug.php` file contains the erroneous code.  The `bugSolution.php` file provides a corrected version.

## Bug Description
Attempting to access an array element using an index that is greater than or equal to the array's size, or less than zero, results in undefined behavior.  In some cases, it might return NULL, while in others it might trigger a warning or even a fatal error.

## Solution
The solution involves adding checks to ensure the index is within the valid range before accessing the array element.