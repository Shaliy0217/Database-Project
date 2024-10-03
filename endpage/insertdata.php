<!DOCTYPE html>


<html>
    <head>
        <title>新增資料</title>
        <link rel="icon" type="image/x-icon" href='images/tool.png' />
        <link rel="stylesheet" type="text/css" href="insertdata.css"/>
        <script> 
            function showInputFieldTwo() {
                var selectElement = document.getElementById("paperSelect");
                
                var fieldA = document.getElementById("fieldA");
                var fieldB = document.getElementById("fieldB");

                if (selectElement.value === "發表期刊論文") {
                    fieldA.style.display = "block";
                    fieldB.style.display = "none";

                } else if (selectElement.value === "會議論文"){
                    fieldA.style.display = "none";
                    fieldB.style.display = "block";
                } else {
                    fieldA.style.display = "none";
                    fieldB.style.display = "none";                   
                }
            }
            function showInputFieldThree() {
                var selectElement = document.getElementById("planSelect");
                
                var fieldC = document.getElementById("fieldC");

                if (selectElement.value === "國科會計畫") {
                    fieldC.style.display = "inline";

                } else {
                    fieldC.style.display = "none";                  
                }
            }
        </script>
    </head>
    <body>
        <!-- 系徽及選單 -->
        <div>
            <img src='image/logo.png' style="height: 70px;margin-left:20px" >
            <button type="button" style="float:right; margin-top:20px; margin-right:20px" class="but" onclick="window.location.href = 'end.php';">使用其他功能</button>
        </div>
        <!-- 學歷 -->
        <h2 style="padding:5px 20px; background-color:#caf0f8; color:#0077b6; width:97%;">學歷</h2>
        <form action="insert_degree.php" method="post">
            學校： <input type="text" name="school" required>
            科系： <input type="text" name="department" required>
            學位： <input type="text" name="degree" require>
            <p style="margin-top:10px"></p>
            <input type="submit" class="b2" value="送出" /> 
            <p style="margin-bottom:10px; margin-left:-10px"></p>
        </form>
        <!-- 專長 -->
        <h2 style="padding:5px 20px; background-color:#caf0f8; color:#0077b6; width:97%;">專長</h2>
        <form action="insert_talent.php" method="post">
            專長中文：<input type="text" name="talent_name" required>
            專長英文：<input type="text" name="talent_en" required>
            <p style="margin-top:10px"></p>
            <input type="submit" class="b2" value="送出" /> 
            <p style="margin-bottom:10px; margin-left:-10px"></p>
        </form>
        <!-- 校內外經歷 -->
        <h2 style="padding:5px 20px; background-color:#caf0f8; color:#0077b6; width:97%;">校內外經歷</h2>
        <form action="insert_experience.php" method="post">
            <label for="campus"> 校內/校外：</label>
            <select name="campus" id="校內/校外" required>
                <option value="">選擇一個選項</option>
                <option value="校內">校內</option>
                <option value="校外">校外</option>                    
            </select>
            服務單位：<input type="text" name="place" required>
            職位：<input type="text" name="position" required>
            <p style="margin-top:10px"></p>
            <input type="submit" class="b2" value="送出" /> 
            <p style="margin-bottom:10px; margin-left:-10px"></p>
        </form>
        <!-- 期刊/會議論文 -->
        <h2 style="padding:5px 20px; background-color:#caf0f8; color:#0077b6; width:97%;">期刊/會議論文</h2>
        <form action="insert_paper.php" method="post">
            <label for="category"> 文章分類：</label>
            <select name="category" id="paperSelect" onchange="showInputFieldTwo()">
                <option value="">選擇一個選項</option>
                <option value="發表期刊論文">發表期刊論文</option>
                <option value="會議論文">會議論文</option>                    
            </select>            
            <p></p>
            論文名稱：<input type="text" name="topic" required>
            作者群：<input type="text" name="author" required>
            發表日期：<input type="month" id="day" name="day" min="2003-01" style="margin-right:38px; width:120px ;text-align:center;" required>            
            <div id="fieldA" style="display: none">
                <p style="margin-top:10px"></p>
                期刊名稱：<input type="text" name="period1_name">
                儲存資料庫：<input type="text" name="db">
            </div>
            <div id="fieldB" style="display: none">
                <p style="margin-top:10px"></p>
                會議名稱：<input type="text" name="period2_name">
                會議地點：<input type="text" name="position">               
            </div>
            <p style="margin-top:10px"></p>
            <input type="submit" class="b2" value="送出" /> 
            <p style="margin-bottom:10px; margin-left:-10px"></p>
        </form>
        <!-- 國科會/產學合作計畫 -->
        <h2 style="padding:5px 20px; background-color:#caf0f8; color:#0077b6; width:97%;">國科會/產學合作計畫</h2>
        <form action="insert_plan.php" method="post">
            <label for="category"> 計畫類別：</label>
            <select name="category" id="planSelect" onchange="showInputFieldThree()">
                <option value="">選擇一個選項</option>
                <option value="國科會計畫">國科會計畫</option>
                <option value="產學合作計畫">產學合作計畫</option>                    
            </select>
            <p></p>
            計畫名稱：<input type="text" name="plan_name" required>
            <span id="fieldC" style="display: none">
                計畫編號：<input type="text" name="plan_id">
            </span>
            負責職位：<input type="text" name="position" required>
            <p></p>
            開始日期：<input type="month" id="plan_start_date" name="plan_start_date" min="2008-01" style="margin-right:38px; width:120px ;text-align:center;" required>
            結束日期：<input type="month" id="plan_end_date" name="plan_end_date" min="2008-01" style="margin-right:38px; width:120px ;text-align:center;" required>
            <p style="margin-top:10px"></p>
            <input type="submit" class="b2" value="送出" /> 
            <p style="margin-bottom:10px; margin-left:-10px"></p>
        </form>

        <!-- 課表資料 -->
        <h2 style="padding:5px 20px; background-color:#caf0f8; color:#0077b6; width:97%;">課表與請益時間</h2>
        <form action="insert_class.php" method="post">
            課程名稱： <input type="text" name="cla_name" required>
            星期： <select name="week" id="claSelect">
                <option value="">選擇一個選項</option>
                <option value=1>一</option>
                <option value=2>二</option>
                <option value=3>三</option> 
                <option value=4>四</option> 
                <option value=5>五</option> 
                <option value=6>六</option> 
                <option value=7>日</option>                     
            </select>
            開始節數：<select name="start" id="claSelect">
                <option value="">選擇一個選項</option>
                <option value="1">第一節 08:10~09:00</option>
                <option value="2">第二節 09:10~10:00</option>
                <option value="3">第三節 10:10~11:00</option> 
                <option value="4">第四節 11:10~12:00</option> 
                <option value="5">第五節 12:10~13:00</option> 
                <option value="6">第六節 13:10~14:00</option> 
                <option value="7">第七節 14:10~15:00</option>
                <option value="8">第八節 15:10~16:00</option> 
                <option value="9">第九節 16:10~17:00</option> 
                <option value="10">第十節 17:10~18:00</option> 
                <option value="11">第十一節 18:10~19:00</option> 
                <option value="12">第十二節 19:10~20:00</option> 
                <option value="13">第十三節 20:10~21:00</option>
                <option value="14">第十四節 21:10~22:00</option>                      
            </select>
            <p></p>
            上課時數： <input type="number" name="hour" min="1" max="5" style="padding: 3px 4px; margin-right: 5px; width:200px;" require>
            上課教室/班級： <input type="text" name="remark" require>
            <p style="margin-top:10px"></p>
            <input type="submit" class="b2" value="送出" /> 
            <p style="margin-bottom:10px; margin-left:-10px"></p>
        </form>
    </body>
</html>