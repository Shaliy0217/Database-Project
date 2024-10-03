<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $link = mysqli_connect(
            'localhost',
            'D1051462',
            '#ae3Uedie',
            'D1051462');
         
        $plan_id = mysqli_real_escape_string($link, $_POST["plan_id"]);//接收post
        $plan_name = mysqli_real_escape_string($link, $_POST["plan_name"]);
        $position = mysqli_real_escape_string($link, $_POST["position"]);
        $plan_start_date = mysqli_real_escape_string($link, $_POST["plan_start_date"]);
        $plan_end_date = mysqli_real_escape_string($link, $_POST["plan_end_date"]);
        $category = mysqli_real_escape_string($link, $_POST["category"]);
    
        $sql = "INSERT INTO plan (plan_id, plan_name, position, start_date, end_date, category) 
                VALUES ('$plan_id', '$plan_name', '$position', '$plan_start_date', '$plan_end_date', '$category')"; 
        try {
            $result = mysqli_query($link, $sql);
            echo "插入成功uwu<br>";
            echo $plan_id . " " . $plan_name . " " . $position . " " . 
            $plan_start_date. " " . $category . '<br>';
        } catch (Exception $e) { //有意外狀況
            echo "出事 \\|/<br>";
            echo $plan_id . " " . $plan_name . " " . $position . " " . 
            $plan_start_date. " " . $category . '<br>';
            echo $e->getMessage() . "<br>";
        }

        mysqli_close($link);
    }
?>
<html>
<input type ="button" onclick="javascript:location.href='insertdata.php'" 
        value="回到上一頁"></input>
</html>