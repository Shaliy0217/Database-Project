<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $link = mysqli_connect(
            'localhost',
            'D1051462',
            '#ae3Uedie',
            'D1051462');

        $name = mysqli_real_escape_string($link, $_POST["cla_name"]); //接收post過來
        $week = mysqli_real_escape_string($link, $_POST["week"]);
        $startime = mysqli_real_escape_string($link, $_POST["start"]);
        $hour = mysqli_real_escape_string($link, $_POST["hour"]);
        $remark = mysqli_real_escape_string($link, $_POST["remark"]);
        for($i = $startime ; $i < $startime+$hour ; $i++){
            $sql = "INSERT INTO class (class_name, week, start_time, remark) 
                VALUES ('$name', '$week', $i , '$remark')";
            try {
                $result = mysqli_query($link, $sql);
                echo "插入成功awa<br>";
                echo $school . " " .  $department . " " . $degree . '<br>';
            } catch (Exception $e) { //有意外狀況
                echo "出事 \\|/<br>";
                echo $school . " " .  $department . " " . $degree . '<br>';
                echo $e->getMessage() . "<br>";
            }
        }
        

        mysqli_close($link);
    }
?>
<html>
<input type ="button" onclick="javascript:location.href='insertdata.php'" 
        value="回到上一頁"></input>
</html>