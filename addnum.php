<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Year conversion</title>
</head>
<body>
    <h1>Year conversion</h1>
    <form method="post">
        <label for="name">ชื่อภาษาอังกฤษ:</label>
        <input type="text" id="text" name="text" required>
        <br><br>
        <label for="number2">ปี พ.ศ. เกิด:</label>
        <input type="number" id="number" name="number" required>
        <br><br>
        <input type="submit" value="Say it!">
        <br><br>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the form inputs
            $text = $_POST['text'];
            $number = $_POST['number'];

            $Onumber = $number - 543;

            // Display the result
            echo "Hi, $text. You were born in $Onumber";
        }
    ?>
</body>
</html>