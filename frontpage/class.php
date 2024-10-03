<?php //連接資料庫
    $link = mysqli_connect(
        'localhost',
        'D1051462',
        '#ae3Uedie',
        'D1051462');
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="stylesheets/front_style.css"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/cla_fr.css"/>
    <title>逢甲大學資訊工程學系 - 系主任</title>
</head>
<body>
    <div>
        <img src='image/logo.png' style="height: 70px;margin-left:20px" onclick="window.location.href = 'index.php';">
        <button type="buttom" style="float:right; margin-top:20px; margin-right:20px" class="but" onclick="window.location.href = '../endpage/login.php';">登入後台</button>
    </div>
    <hr size=5px color=#e9ecef>
    <!-- 教授名字 -->
    <div style="display:grid ;justify-content: center;">
        <h1 >李榮三</h1>
    </div>

    
    <!-- 課表 -->
    <div class='cla'>
        <h1 style='font-size: 30px; margin-top: 50px'>
            <img id='leaf' src='image/leaf2.png' style='height:25px; margin-left:30px;'>課程時間表
        </h1>
        <table style="color:gray">
            <?php
                echo "<tr style='height:30px; background-color:#edf2fb;'><th></th><th>一</th>";
                echo "<th>二</th><th>三</th><th>四</th>";
                echo "<th>五</th><th>六</th><th>日</th></tr>";
                for($x = 1 ; $x < 15 ; $x++){ //節數
                    echo "<tr>";
                    echo "<td style='text-align: right;padding-right:15px;'>第" . $x . "節</td>";
                    
                    for($y = 1 ; $y < 8 ; $y++){ //星期
                        $sql = "SELECT * FROM class WHERE week='$y' and start_time='$x'"; //學歷
                        $result = mysqli_query($link, $sql);
                        $flag = 0; 
                        echo "<td style='padding-left:5px'>";
                        while($row = mysqli_fetch_array($result)){
                            if($flag ===1){ //有多個在同一時段要換行
                                echo "<br>";
                            }
                            $flag = 1;
                            echo $row["class_name"] . "<br>" .  $row["remark"];
                        }
                        echo "</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>