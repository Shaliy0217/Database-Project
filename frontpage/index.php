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
        <script src="front.js"></script>
        <title>逢甲大學資訊工程學系 - 系主任</title>
    </head>
    <body>
        <div>
            <img id='top' src='image/logo.png' style="height: 70px;margin-left:20px" >
            <button type="buttom" style="float:right; margin-top:20px; margin-right:20px" class="but" onclick="window.location.href = '../endpage/login.php';">登入後台</button>
        </div>
        <hr size=5px color=#e9ecef>
        <!-- 教授名字 -->
        <div style="display:grid ;justify-content: center;">
            <h1>
            <?php
                $sql = "SELECT * FROM basic_data"; //篩選條件，sql語法
                $result = mysqli_query($link, $sql);
                $row = mysqli_fetch_array($result);
                echo $row['name'];
            ?>
            </h1>
        </div>
        <!-- 選擇滑動到的位置 -->
        <div id="fiexd-header">
            <p style="margin-buttom:-5px; margin-left:20px ;line-height: 0.5em">內容索引</p>
            <ul>
                <li id='btn1'><a href="#top">基本資料</a></li>
                <li id='btn2'><a href="#edu">學歷與專長</a></li>
                <li id='btn3'><a href="#exp">校內外經歷</a></li>
                <li id='btn4'><a href="#plan">論文與參與計劃</a>
                    <ul style="color:">
                        <li><a href="#p1">發表期刊論文</a></li>
                        <li><a href="#p2">會議論文</a></li>
                        <li><a href="#p3">國科會計畫</a></li>
                        <li><a href="#p4">產學合作計畫</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div>
        <!-- 個人頁面 -->
        <div>
            <!-- 個人基本資料 -->
            <div class='grid-container'>
                <div>
                    <img id='photo' src='image/photo.jpg' style="margin:60px 0px 20px 100px; width:300px">
                </div>
                <div style='weight:150px; margin:50px 10px 10px 10px'>
                    
                    <h1 style='font-size: 30px; margin-top: 70px'>
                        <img id='leaf' src='image/leaf2.png' style='height:25px; margin-left:10px;'>基本資料
                    </h1>
                    <table>
                        <?php
                            $sql = "SELECT * FROM basic_data"; //篩選條件，sql語法
                            $result = mysqli_query($link, $sql);
                            $row = mysqli_fetch_array($result);
                            echo "<tr><th>職位：</th>";
                            echo "<td>" . $row["position"] . "</td>"; 
                            echo "</tr>";
                            echo "<tr><th>分機：</th>";
                            echo "<td>" . $row["phone"] . "</td>"; 
                            echo "</tr>";
                            echo "<tr><th>信箱：</th>";
                            echo "<td>" . $row["mail"] . "</td>"; 
                            echo "</tr>";
                        ?>
                    </table>
                    <button type="button" style="margin-top:10px; margin-left:40px" class="b2" onclick="window.location.href = 'class.php';">
                        查看課表 <img src="https://cdn1.iconfinder.com/data/icons/unicons-line-vol-1/24/calendar-alt-64.png" style="margin:-3px 1px; height: 18px;">
                    </button>
                </div>
                
            </div>

            <!-- 學歷, 專長 -->
            <div class="edu" id='edu'>
                <div>
                <h1 style='font-size: 30px; margin-top: 70px; margin-left: 70px'><img id='leaf' src='image/leaf2.png' style='height:25px; margin-left:10px;'>學歷</h1>
                <table style="width: 250px;">
                    <?php
                        $sql = "SELECT * FROM edu_background"; //學歷
                        $result = mysqli_query($link, $sql);
                        while($row = mysqli_fetch_array($result)){ //該行結果存在於result中(fetch的到)
                            echo "<tr>";
                            echo "<td>" . $row["school"] . "</td>"; 
                            echo "<td>" . $row["department"] . "</td>";
                            echo "<td>" . $row["degree"] . "</td>"; 
                            echo "</tr>";
                        }
                    ?>
                </table>
                </div>
                <div>
                <h1 style='font-size: 30px; margin-top: 70px; margin-left: 10px'><img id='leaf' src='image/leaf2.png' style='height:25px; margin-left:10px;'>專長</h1>
                <table style="margin-left: 45px; width: 400px;">
                    <?php
                        $sql = "SELECT * FROM talent"; //專長
                        $result = mysqli_query($link, $sql);
                        while($row = mysqli_fetch_array($result)){ //該行結果存在於result中(fetch的到)
                            echo "<tr>";
                            echo "<td>" . $row["talent_name"] . "</td>"; 
                            echo "<td>" . $row["talent_en"] . "</td>";
                            echo "</tr>";
                        }
                    ?>
                </table>
            </div>
            </div>

            <!-- 經歷 -->
            <div class="exp" id='exp'>
                <!-- 校內 -->
                <div>
                    <h1 style='font-size: 30px; margin-top: 70px; margin-left: 70px'><img id='leaf' src='image/leaf2.png' style='height:25px; margin-left:10px;'>校內經歷</h1>
                    <table style="margin-left: 110px; ">
                        <?php
                            $sql = "SELECT * FROM experience WHERE campus='校內'";
                            $result = mysqli_query($link, $sql);
                            while($row = mysqli_fetch_array($result)){ //該行結果存在於result中(fetch的到)
                                echo "<tr>";
                                echo "<td style='padding-right:15px;'>" . $row["place"] . "</td>"; 
                                echo "<td>" . $row["position"] . "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </table>
                </div>
                <!-- 校外 -->
                <div>
                    <h1 style='font-size: 30px; margin-top: 70px; margin-left: 25px'><img id='leaf' src='image/leaf2.png' style='height:25px; margin-left:10px;'>校外經歷</h1>
                    <table style="margin-left: 65px;">
                        <?php
                            $sql = "SELECT * FROM experience WHERE campus='校外'";
                            $result = mysqli_query($link, $sql);
                            while($row = mysqli_fetch_array($result)){ //該行結果存在於result中(fetch的到)
                                echo "<tr>";
                                echo "<td style='padding-right:15px;'>" . $row["place"] . "</td>"; 
                                echo "<td>" . $row["position"] . "</td>";
                                echo "</tr>";
                            }
                        ?>
                    </table>
                </div>
            </div>

            <!-- 論文與參與計畫 -->
            <div class="plan" id='plan'>
                    
                <h1 style='font-size: 30px; margin-top: 70px; margin-left: 70px'><img id='leaf' src='image/leaf2.png' style='height:25px; margin-left:10px;'>論文與參與計畫</h1>
                <div>
                    <ol>
                        <h3 id="p1">發表期刊論文</h3>
                        <table>
                            <tr>
                                <th>論文題目</th>
                                <th>作者群</th>
                                <th>收錄期刊</th>
                                <th style='word-spacing:2em'>發表日期 收錄資料庫</th>
                            </tr>
                            <?php 
                                //發表期刊論文：作者群、主題、所屬期刊、日期、(收錄資料庫)
                                $sql = "SELECT * FROM paper WHERE category='發表期刊論文' ORDER BY day DESC";
                                $result = mysqli_query($link, $sql);
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                    echo "<td>".$row['topic']."</td>";
                                    echo "<td>".$row['author']."</td>";
                                    echo "<td>".$row['period_name']."</td>";
                                    echo "<td style='word-spacing:5em'>". $row['day'] ." ".$row['db']."</td>";
                                    echo "<tr>";
                                }
                            ?>
                        <table>
                    </ol>

                    <ol>
                        <h3 id="p2" style="margin-left:-40px">會議論文</h3>
                        <table>
                            <tr>
                                <th>論文題目</th>
                                <th>作者群</th>
                                <th>會議名稱</th>
                                <th>發表地點與日期</th>
                            </tr>
                            <?php 
                                //會議論文：作者群、主題、會議名稱、日期、會議地點
                                $sql = "SELECT * FROM paper WHERE category='會議論文' ORDER BY day DESC";
                                $result = mysqli_query($link, $sql);
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                    echo "<td>".$row['topic']."</td>";
                                    echo "<td>".$row['author']."</td>";
                                    echo "<td>".$row['period_name']."</td>";
                                    echo "<td>". $row['position'] ."<br>". $row['day'] . "</td>";
                                    echo "</tr>";
                                }
                            ?>
                        </table>
                    </ol>

                    <ol>
                        <h3 id="p3">國科會計畫</h3>
                        <table>
                            <tr>
                                <th>計畫名稱</th>
                                <th>計畫編號</th>
                                <th style='word-spacing:4em'>職位 計畫期間</th>
                            </tr>
                            <?php 
                                $sql = "SELECT * FROM plan WHERE category='國科會計畫' ORDER BY start_date DESC";
                                $result = mysqli_query($link, $sql);
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                    echo "<td>".$row['plan_name']."</td>";
                                    echo "<td>".$row['plan_id']."</td>";
                                    echo "<td style='word-spacing:5em'>".$row['position'] ." ". $row['start_date'] ."~".$row['end_date']."</td>";
                                    echo "<tr>";
                                }
                            ?>
                        <table>
                    </ol>

                    <ol>
                        <h3 id="p4" style="margin-left:-40px">產學合作計畫</h3>
                        <table>
                            <tr>
                                <th>計畫名稱</th>
                                <th style='word-spacing:6em'>職位 計畫期間</th>
                            </tr>
                            <?php 
                                $sql = "SELECT * FROM plan WHERE category='產學合作計畫' ORDER BY start_date DESC";
                                $result = mysqli_query($link, $sql);
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                    echo "<td>".$row['plan_name']."</td>";
                                    echo "<td style='word-spacing:8em'>".$row['position'] ." ". $row['start_date'] ."~".$row['end_date']."</td>";
                                    echo "<tr>";
                                }
                            ?>
                        <table>
                    </ol>
                </div>
            </div>
    </body>
</html>