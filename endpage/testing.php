<?php //連接資料庫
    $link = mysqli_connect(
        'localhost',
        'D1051462',
        '#ae3Uedie',
        'D1051462');
?>

<html>
    <head>
        <!-- <link rel="stylesheet" type="text/css" href="login.css"/> -->
        <script src="front.js"></script>
        <title>更新資料</title>
    </head>
    <body>

    <!-- 系徽及選單 -->
    <div>
        <img src='image/logo.png' style="height: 70px;margin-left:20px" >
        <button type="button" style="float:right; margin-top:20px; margin-right:20px" class="but" onclick="window.location.href = 'end.php';">使用其他功能</button>
    </div>

    <!-- 基本資料 -->
    <div class="edu" id='edu'>
        <div>
        <h1 style='font-size: 30px; margin-top: 70px; margin-left: 70px'>學歷</h1>
        <table style="margin-top: 10px; margin-left: 70px; width: 400px;">
          <tr>
            <th>學校名稱</th>
            <th>科系</th>
            <th>學位</th>
            <th></th>
          </tr>
            <?php
                $sql = "SELECT * FROM edu_background"; //學歷
                $result = mysqli_query($link, $sql);
                while($row = mysqli_fetch_array($result)){ //該行結果存在於result中(fetch的到)
                    echo "<tr>";
                    echo "<td>" . $row["school"] . "</td>"; 
                    echo "<td>" . $row["department"] . "</td>";
                    echo "<td>" . $row["degree"] . "</td>"; 
                    echo "<td><a href='test.php?id=" . $row["id"] . "'><img src='image/edit.png' width='20px'></a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
      </div>
    </div>

      <!-- 學歷 -->
      <div class="edu" id='edu'>
        <div>
        <h1 style='font-size: 30px; margin-top: 70px; margin-left: 70px'>學歷</h1>
        <table style="margin-top: 10px; margin-left: 70px; width: 400px;">
          <tr>
            <th>學校名稱</th>
            <th>科系</th>
            <th>學位</th>
            <th></th>
          </tr>
            <?php
                $sql = "SELECT * FROM edu_background"; //學歷
                $result = mysqli_query($link, $sql);
                while($row = mysqli_fetch_array($result)){ //該行結果存在於result中(fetch的到)
                    echo "<tr>";
                    echo "<td>" . $row["school"] . "</td>"; 
                    echo "<td>" . $row["department"] . "</td>";
                    echo "<td>" . $row["degree"] . "</td>"; 
                    echo "<td><a href='test.php?id=" . $row["id"] . "'><img src='image/edit.png' width='20px'></a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
        </div>
      </div>
    </body>
    </html>