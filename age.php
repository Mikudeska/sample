<html>  
<body>  
<form id="form1" method="post">  
<label for="t1">ชื่อภาษาอังกฤษ: </label>
<input type="text" id="t1" name="t1"><br><br> 
<label for="n1">ปี พ.ศ. เกิด: </label> 
<input type="number" id="n1" name="n1"><br><br>  
<input  type="submit" name="submit" value="Say it!">  
</form>  
<?php  
    if(isset($_POST['submit'])) {
    // Alternative: if ($_SERVER["REQUEST_METHOD"] == "POST") {  
        $name1 = $_POST['t1'];
        $year1 = $_POST['n1'];
        $year2 = $year1 - 543;
        echo "Hi, ".$name1.". You were born in ".$year2.".";   
    }  
?>  
</body>  
</html>  