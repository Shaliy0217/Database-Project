<!DOCTYPE html>


<html>
    <head>
        <title>更新資料</title>
        <!-- <link rel="stylesheet" type="text/css" href="insertdata.css"/> -->
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
        
    </body>
</html>