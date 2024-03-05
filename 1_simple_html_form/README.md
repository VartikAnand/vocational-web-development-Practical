# Aim
The aim of this exercise is to create a simple HTML form that accepts the user's name and displays it using a PHP echo statement.

## Code

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practical 1</title>
</head>
<body>
    <center>
        <h2>Enter your Name</h2>
        <form method="post" action="">
            <label for="name"> Name :</label>
            <input type="text" id="name" name="name" />
            <button type="submit">submit</button>
        </form>
        <?php
            if(isset($_POST['name'])) {
                $name = $_POST['name'];
                echo $name;
            }
        ?>
    </center>
</body>
</html>
```