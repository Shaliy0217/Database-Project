<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $link = mysqli_connect(
            'localhost',
            'D1051462',
            '#ae3Uedie',
            'D1051462');

        $school = mysqli_real_escape_string($link, $_POST["school"]); //接收post過來
        $department = mysqli_real_escape_string($link, $_POST["department"]);
        $degree = mysqli_real_escape_string($link, $_POST["degree"]);
        
        $sql = "INSERT INTO edu_background (school, department, degree) 
                VALUES ('$school', '$department', '$degree')"; //學歷
        try {
            $result = mysqli_query($link, $sql);
            echo "插入成功awa<br>";
            echo $school . " " .  $department . " " . $degree . '<br>';
        } catch (Exception $e) { //有意外狀況
            echo "出事 \\|/<br>";
            echo $school . " " .  $department . " " . $degree . '<br>';
            echo $e->getMessage() . "<br>";
        }

        mysqli_close($link);
    }
?>
<html>
<input type ="button" onclick="javascript:location.href='insertdata.php'" 
        value="回到上一頁"></input>
</html>