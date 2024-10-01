<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-family: JetBrains Mono NL Thin;">
    <form method="post">
        <label for="bw">Baggage Weight (kg):</label>
        <input type="number" id="bw" name="bw" step="0.01" required>
        <br><br>
        <label for="bw">Passenger Weight (kg):</label>
        <input type="number" id="pw" name="pw" step="0.01" required>
        <br><br>
        <label for="bw">Max Baggage Weight (kg): </label>
        <input type="number" id="mbw" name="mbw" value="20.00" readonly>
        <br><br>
        <input type="submit" value="SUBMIT">
        <br><br>
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the form inputs
            $bw = $_POST['bw'];
            $pw = $_POST['pw'];
            $mbw = $_POST['mbw'];

            $sbp = $bw + $pw;

            if ($bw > $mbw) {
                echo"Overweight baggage!";
            } else {
                echo"Load = $sbp kg";
            }
                
        }
    ?>

</body>
</html>