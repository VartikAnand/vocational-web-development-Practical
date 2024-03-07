# Aim
Write a PHP script to connect the MySQL server from your website 

## Code

```PHP


<?php

// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'vartikdb');

// Check connection
if (!$conn) {
    die("Connection failed: ");
}

echo "Connected successfully";

?>


```
## Output

![Output](1.png)