# Aim
5.Write a PHP script to obtain the factorial of a number using the function
```html
<html >
<head>

<title>Factorial Calculator</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
    input[type="number"] {
        width: 100%;
        padding: 8px;
        margin: 5px 0;
        box-sizing: border-box;
    }
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .result {
        margin-top: 20px;
        font-weight: bold;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Factorial Calculator</h2>
    <form method="post" action="">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Calculate">
    </form>
    <div class="result">
        <?php
        // Function to calculate factorial
        function factorial($n) {
            if ($n === 0) {
                return 1;
            } else {
                return $n * factorial($n - 1);
            }
        }

        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the input value
            $number = $_POST["number"];

            // Calculate factorial
            $result = factorial($number);
            
            // Display the result
            echo "Factorial of $number is: $result";
        }
        ?>
    </div>
</div>
</body>
</html>


```
## Output

![Output](1.png)