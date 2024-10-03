<html>
    <head>
        <link rel="stylesheet" type="text/css" href="login.css"/>
        <title>登入後台</title>
    </head>
    <body>
        <div class="login">
            <h1 style="margin-left: 20px; color: #0077b6">登入後台管理系統</h1>
            <div class="input-form">
                <form>
                    <label>帳號：</label><input type="text" class="in" id="name" require/>
                    <label>密碼：</label><input type="password" class="in" id="password" require/>
                    <div class="warning" id="warning"></div> <!-- 輸入錯誤會在此顯示錯誤... -->
                    <input type="button" class="but" style="margin-top: 15px" value="登入" onclick="check()">
                </form>
            </div>
        </div>

        <script>
            
            function check(){
                const nameElement = document.getElementById('name');
                const name = nameElement.value;
                const pwElement = document.getElementById('password');
                const pw = pwElement.value;
                if((name == "iecs001" && pw == "123") || (name == "iecs002" && pw == "123")){ //帳密正確
                    window.location.href = "end.php";
                    alert('登入成功');
                } 
                else{
                    document.getElementById('warning').textContent = "帳號或密碼錯誤，請再次嘗試"
                }
            }
        </script>
    </body>
</html>