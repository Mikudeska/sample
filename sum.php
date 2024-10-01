<html>  
<body>  
<form id="sum" method="post">  
    <label for="n1">Enter first number: </label>  
    <input type="number" id="n1" name="n1"><br><br>  
    <label for="n2">Enter second number: </label>  
    <input type="number" id="n2" name="n2"><br><br>  
    <input  type="submit" name="submit" value="Add">  
</form>  
<?php  
    if(isset($_POST['submit'])) {  
        $number1 = $_POST['n1'];  
        $number2 = $_POST['n2'];  
        $sum =  $number1+$number2;     
        echo "The sum of $number1 and $number2 is ".$sum;   
    }  
?>  
</body>  
</html>  