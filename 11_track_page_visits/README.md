# Aim
Write a program to keep track of how many times a visitor has loaded the page.
## Code

```PHP
<?php
// Initialize the counter variable
$counter = 0;

// Check if the cookie is set
if (isset($_COOKIE['page_visits'])) {
    // If the cookie is set, retrieve the current count
    $counter = $_COOKIE['page_visits'];
}

// Increment the counter
$counter++;

// Set the cookie with the updated counter
setcookie('page_visits', $counter, time() + 3600); // Expires in 1 hour
?>


<html lang="en">

<body>

<h1>Welcome to the Page</h1>
<p>This page has been visited <?php echo $counter; ?> times.</p>

</body>
</html>


```
## Output

![Output](1.png)