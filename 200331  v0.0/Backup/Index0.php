<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8;" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <title>Introduction</title>
    <link rel="stylesheet" href="themes/exp.min.css" />
    <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" /> 
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <style>
	    header, section{
            top: 10px;
            bottom: 10px;
            border-radius: 8px;     
            box-shadow: #cccccc 0px 0px 1px 1px;
            margin: 0px auto;
            width: 90%;
            font-size: 120%;
            position: relative;
            background: white;            
        }
        
        li{
            margin: 0px auto;
            width: 90%;
        }    
    </style>    
</head>
    
<body style="font-family: Microsoft JhengHei">
    <section>
        <article dir="center" style="padding: 1%;"> 
            親愛的參與者您好：<br><br>
            &nbsp; &nbsp; &nbsp; &nbsp;謝謝您參與本研究！本研究旨在探討<b><u>個人特質</u></b>，這個作業沒有對錯之分，您只要依據題意以內心最切實的感受及第一個想法來回答即可。本研究需留下<b><u>真實姓名</u></b>，但僅供學術研究之用，絕不會洩漏您的個人資料，請您放心作答，謝謝！<br><br>
            
            ☆本研究有抽獎活動！★【活動已截止】<br>
            獎金預計在107/1/31前抽出：新台幣1000元4位，新台幣500元8位，新台幣100元20位。<br>
            屆時將以Email與中獎者聯繫並核對資料。<br><br>
            
            注意，以下狀況將失去得獎機會！<br>
            經檢查後發現亂答之情形、資料經核對後發現不一致、相同email重複填答、Email錯誤或中獎公告超過30天未回信。<br><br>
            
            <過程中請勿按下<u>上一頁</u>，否則資料遺失不負責><br>
            <按下同意後，問卷將於10秒後開始><br>
            <p align="right">指導老師：***</p>
            <p align="right">實驗者：***</p>
            <br>

            <form id="form1" runat="server">
                <center>     
                    <div id='div1'></div>
                </center>
            </form>      
            <br>       
            <input name="submit" value="同意" type="button" onclick="return check();"><br>
        </article>
        
        <form method="post" name="receive" id="receive" accept-charset="utf-8">
        </form>          
        
        <script>
            var t=10;
            function showTime(){
                t-=1;
                document.getElementById('div1').innerHTML="問卷將於"+t+"秒後開始。";
    
                if(t==0){
                    document.getElementById("receive").action="index1.php";
                    document.getElementById("receive").submit();
                }
                setTimeout("showTime()",1000);
            }
            
            //勾選後即顯示，並倒數10秒後提交換頁
            function check(){
                window.alert("以上包含參與者權益，請耐心詳讀，謝謝！10秒後將自動為您轉址！"); 
                showTime();
            }
        </script>
    </section>
</body>
</html>
