<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $link = mysqli_connect(
            'localhost',
            'D1051462',
            '#ae3Uedie',
            'D1051462');
         
        $topic = mysqli_real_escape_string($link, $_POST["topic"]);//接收post
        $period1_name = mysqli_real_escape_string($link, $_POST["period1_name"]);
        $period2_name = mysqli_real_escape_string($link, $_POST["period2_name"]);
        $author = mysqli_real_escape_string($link, $_POST["author"]);
        $day = mysqli_real_escape_string($link, $_POST["day"]);
        $position = mysqli_real_escape_string($link, $_POST["position"]);
        $db = mysqli_real_escape_string($link, $_POST["db"]);
        $category = mysqli_real_escape_string($link, $_POST["category"]);
        if($category=="發表期刊論文"){
            $period_name = $period1_name;
        }
        else{
            $period_name = $period2_name;
        }
        $sql = "INSERT INTO paper (topic, period_name, author,
                day, position, db, category) 
                VALUES ('$topic', '$period_name', '$author', 
                '$day', '$position', '$db', '$category')"; 
        try {
            $result = mysqli_query($link, $sql);
            echo "插入成功OHO<br>";
            echo $topic . " " . $period_name . " " . $author . " " . 
            $day . " " . $position . " " . $db . " " . $category . '<br>';
        } catch (Exception $e) { //有意外狀況
            echo "出事 \\|/<br>";
            echo $topic . " " . $period_name . " " . $author . " " . 
            $day . " " . $position . " " . $db . " " . $category . '<br>';
            echo $e->getMessage() . "<br>";
        }

        mysqli_close($link);
    }
?>
<html>
<input type ="button" onclick="javascript:location.href='insertdata.php'" 
        value="回到上一頁"></input>
</html>