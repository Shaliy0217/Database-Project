<?php
    $link = mysqli_connect(
      'localhost',
      'D1051462',
      '#ae3Uedie',
      'D1051462');

    if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $school = mysqli_real_escape_string($link,$_POST['school']);
        $department = mysqli_real_escape_string($link,$_POST['department']);
        $degree = mysqli_real_escape_string($link,$_POST['degree']);

        $sql = "UPDATE edu_background SET school = '$school',department = '$department', degree = '$degree' WHERE id = '$id'";
        if (mysqli_query($link, $sql)) {
            header("Location: testing.php");
        } else {
        echo "數據更新失敗: " . mysqli_error($link);
        }

    } 
    else {
        $sql = "SELECT * FROM edu_background WHERE id = '$id'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_assoc($result);
        
        mysqli_close($link);
    ?>

        <!DOCTYPE html>
        <html>
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>編輯資料</title>
        <script src="main.js"></script>
        </head>
        <body>
            <h2>編輯資料</h2>
            <form method="POST" action="">
                <label for="school">學校名稱</label>
                <input type="text" id="school" name="school" value="<?php echo $row['school']?>">

                <label for="department">科系</label>
                <input type="text" id="department" name="department" value="<?php echo $row['department']?>">

                <label for="author">學位</label>
                <input type="text" id="degree" name="degree" value="<?php echo $row['degree']?>">
                <input type="submit" value="Save">
            </form>
        </body>
        </html>
        <?php
    }
    } 
    else {
        header("Location: test.php");
    }
    ?>