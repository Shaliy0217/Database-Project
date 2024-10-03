<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $link = mysqli_connect(
            'localhost',
            'D1051462',
            '#ae3Uedie',
            'D1051462');

        $place = mysqli_real_escape_string($link, $_POST["place"]); //接收post
        $position = mysqli_real_escape_string($link, $_POST["position"]);
        $campus = mysqli_real_escape_string($link, $_POST["campus"]);
        
        $sql = "INSERT INTO experience (place, position, campus) 
                VALUES ('$place', '$position', '$campus')"; 
        try {
            $result = mysqli_query($link, $sql);
            echo "插入成功OHO<br>";
            echo $campus . " " . $place . " " .  $position . '<br>';
        } catch (Exception $e) { //有意外狀況
            echo "出事 \\|/<br>";
            echo $campus . " " . $place . " " .  $position . '<br>';
            echo $e->getMessage() . "<br>";
        }

        mysqli_close($link);
    }
?>
<html>
<input type ="button" onclick="javascript:location.href='insertdata.php'" 
        value="回到上一頁"></input>
</html>