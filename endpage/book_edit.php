<?php
    include '../connect.php';

    if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $book_name = mysqli_real_escape_string($link,$_POST['book_name']);
        $publish = mysqli_real_escape_string($link,$_POST['publish']);
        $author = mysqli_real_escape_string($link,$_POST['author']);

        $sql = "UPDATE 書籍 SET 書名 = '$book_name',出版社 = '$publish', 作者 = '$author'";
        if (mysqli_query($link, $sql)) {
            header("Location: book_already.php");
        } else {
        echo "數據更新失敗: " . mysqli_error($link);
        }

    } 
    else {
        $sql = "SELECT * FROM 書籍 WHERE ID = '$id'";
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
                <label for="book_name">書名</label>
                <input type="text" id="book_name" name="book_name" value="<?php echo $row['書名']?>">

                <label for="publish">出版社</label>
                <input type="text" id="publish" name="publish" value="<?php echo $row['出版社']?>">

                <label for="author">作者</label>
                <input type="text" id="author" name="author" value="<?php echo $row['作者']?>">
                <input type="submit" value="Save">
            </form>
        </body>
        </html>
        <?php
    }
    } 
    else {
        header("Location: contest_already.php");
    }
    ?>
    

    
    