<!--1.Create a simple HTML form and accept the user name and display the name
through PHP echo statement -->
<html>
<head>
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
        if (isset($_POST['name'])) {
            $name = $_POST['name'];

            echo '<h2>Enter Username </h2>';
            echo '<h3>'.$name.' </h3>';
        }
        ?>
    </center>
</body>

</html>