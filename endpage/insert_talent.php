<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $link = mysqli_connect(
            'localhost',
            'D1051462',
            '#ae3Uedie',
            'D1051462');

        $talent_name = mysqli_real_escape_string($link, $_POST["talent_name"]); //接收post過來的content
        $talent_en = mysqli_real_escape_string($link, $_POST["talent_en"]);
        
        $sql = "INSERT INTO talent (talent_name, talent_en) VALUES ('$talent_name', '$talent_en')"; //專長
        try {
            $result = mysqli_query($link, $sql);
            echo "插入成功awa<br>";
            echo $talent_name . " " .  $talent_en . '<br>';
        } catch (Exception $e) { //有意外狀況
            echo "出事 \\|/<br>";
            echo $talent_name . " " .  $talent_en . '<br>';
            echo $e->getMessage() . "<br>";
        }

        mysqli_close($link);
    }
?>
<html>
<input type ="button" onclick="javascript:location.href='insertdata.php'" 
        value="回到上一頁"></input>

</html>