<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<!doctype html>
<html>
<head>
    <title>Questionnaire D</title>
    <meta http-equiv="Content-Type" content="text/html, charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="themes/exp.min.css"/>
    <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css"/>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css"/> 
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    
    <style>
        .Title{
            top: 2.5%;
            font-size: 1.2em; position: fixed; z-index: 10;
        }
        
	    section{
            width: 60%; line-height: 1.5em; margin: 2.5% auto; border-radius: 10px;
            background-color: #FFFFFF; box-shadow: #cccccc 0px 0px 1px 1px;
            font-size: 1em; position: relative;
        }
    </style>
</head>
    
<body style="font-family: Microsoft JhengHei">
    <div class="Title">
        <div class="ui-bar ui-bar-a" style="box-shadow: #cccccc 0px 0px 1px 1px">
            <h1>D. 社會接觸</h1>
        </div>
    </div>
    
    <section>
        <form method="post" name="exp6" id="exp6" action="index7.php" onsubmit="return check()" accept-charset="utf-8" style="padding: 5% 7.5%">
            <input type=hidden name="D1"  value="0">
            <input type=hidden name="D2"  value="0">
            <input type=hidden name="D3"  value="0">
            <input type=hidden name="D4"  value="0">
            <input type=hidden name="D5"  value="0">
            <input type=hidden name="D6"  value="0">
            <input type=hidden name="D7"  value="0">
            <input type=hidden name="D8"  value="0">
            <input type=hidden name="D9"  value="0">
            <input type=hidden name="D10" value="0">
            <input type=hidden name="D11" value="0">
            <input type=hidden name="D12" value="0">
            <input type=hidden name="D13" value="0">
            <input type=hidden name="D14" value="0">
            <br>

            <b>D1. 在<u>疫情開始之前</u>，</b><br><br>
            
            <b>1. 請問您會近距離接觸其他人嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="D1" value="1">很少會</label>
                <label><input type="radio" name="D1" value="2">偶爾會</label>
                <label><input type="radio" name="D1" value="3">經常會</label>
                <label><input type="radio" name="D1" value="4">總是會</label>
            </fieldset><br>
            
            <b>2. 請問您常去人群擁擠的地方嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="D2" value="1">很少會</label>
                <label><input type="radio" name="D2" value="2">偶爾會</label>
                <label><input type="radio" name="D2" value="3">經常會</label>
                <label><input type="radio" name="D2" value="4">總是會</label>
            </fieldset><br>
            
            <b>3. 當您感到身體不舒服時，會與其他人保持距離嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="D3" value="1">很少會</label>
                <label><input type="radio" name="D3" value="2">偶爾會</label>
                <label><input type="radio" name="D3" value="3">經常會</label>
                <label><input type="radio" name="D3" value="4">總是會</label>
            </fieldset><br>
            
            <b>4. 當您感到身體不舒服時，會立刻將自己的症狀告訴醫師或醫療單位嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="D4" value="1">很少會</label>
                <label><input type="radio" name="D4" value="2">偶爾會</label>
                <label><input type="radio" name="D4" value="3">經常會</label>
                <label><input type="radio" name="D4" value="4">總是會</label>
            </fieldset><br>
            
            <b>5. 請問您常搭乘大眾運輸工具嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="D5" value="1">很少會</label>
                <label><input type="radio" name="D5" value="2">偶爾會</label>
                <label><input type="radio" name="D5" value="3">經常會</label>
                <label><input type="radio" name="D5" value="4">總是會</label>
            </fieldset><br>
            
            <b>6. 請問您常使用網路／電視或美食外送購物嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="D6" value="1">很少會</label>
                <label><input type="radio" name="D6" value="2">偶爾會</label>
                <label><input type="radio" name="D6" value="3">經常會</label>
                <label><input type="radio" name="D6" value="4">總是會</label>
            </fieldset><br>
            
            <b>7. 請問您常參與國內旅遊嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="D7" value="1">很少會</label>
                <label><input type="radio" name="D7" value="2">偶爾會</label>
                <label><input type="radio" name="D7" value="3">經常會</label>
                <label><input type="radio" name="D7" value="4">總是會</label>
            </fieldset><br>
            
            <b>D2. 在<u>疫情開始至今</u>，</b><br><br>

            <b>1. 請問您會近距離接觸其他人嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="D8" value="1">很少會</label>
                <label><input type="radio" name="D8" value="2">偶爾會</label>
                <label><input type="radio" name="D8" value="3">經常會</label>
                <label><input type="radio" name="D8" value="4">總是會</label>
            </fieldset><br>
        
            <b>2. 請問您常去人群擁擠的地方嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="D9" value="1">很少會</label>
                <label><input type="radio" name="D9" value="2">偶爾會</label>
                <label><input type="radio" name="D9" value="3">經常會</label>
                <label><input type="radio" name="D9" value="4">總是會</label>
            </fieldset><br>
            
            <b>3. 當您感到身體不舒服時，會與其他人保持距離嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="D10" value="1">很少會</label>
                <label><input type="radio" name="D10" value="2">偶爾會</label>
                <label><input type="radio" name="D10" value="3">經常會</label>
                <label><input type="radio" name="D10" value="4">總是會</label>
            </fieldset><br>
            
            <b>4. 當您感到身體不舒服時，會立刻將自己的症狀告訴醫師或醫療單位嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="D11" value="1">很少會</label>
                <label><input type="radio" name="D11" value="2">偶爾會</label>
                <label><input type="radio" name="D11" value="3">經常會</label>
                <label><input type="radio" name="D11" value="4">總是會</label>
            </fieldset><br>
            
            <b>5. 請問您常搭乘大眾運輸工具嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="D12" value="1">很少會</label>
                <label><input type="radio" name="D12" value="2">偶爾會</label>
                <label><input type="radio" name="D12" value="3">經常會</label>
                <label><input type="radio" name="D12" value="4">總是會</label>
            </fieldset><br>
            
            <b>6. 請問您常使用網路／電視或美食外送購物嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="D13" value="1">很少會</label>
                <label><input type="radio" name="D13" value="2">偶爾會</label>
                <label><input type="radio" name="D13" value="3">經常會</label>
                <label><input type="radio" name="D13" value="4">總是會</label>
            </fieldset><br>
            
            <b>7. 請問您常參與國內旅遊嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="D14" value="1">很少會</label>
                <label><input type="radio" name="D14" value="2">偶爾會</label>
                <label><input type="radio" name="D14" value="3">經常會</label>
                <label><input type="radio" name="D14" value="4">總是會</label>
            </fieldset><br>
        
            <input name="submit" value="下一頁" type="submit"><br>
            
            <script>
                //檢查各題是否完整填答，若否則依題號報錯
                function check(){
                    var cD1     =getValue("D1");
                    var cD2     =getValue("D2");
                    var cD3     =getValue("D3");
                    var cD4     =getValue("D4");
                    var cD5     =getValue("D5");
                    var cD6     =getValue("D6");
                    var cD7     =getValue("D7");
                    var cD8     =getValue("D8");
                    var cD9     =getValue("D9");
                    var cD10    =getValue("D10");
                    var cD11    =getValue("D11");
                    var cD12    =getValue("D12");
                    var cD13    =getValue("D13");
                    var cD14    =getValue("D14");

                    var record=[], j=0;
                    if(cD1==0){record[j]="D1-1"; j++}
                    if(cD2==0){record[j]="D1-2"; j++}
                    if(cD3==0){record[j]="D1-3"; j++}
                    if(cD4==0){record[j]="D1-4"; j++}
                    if(cD5==0){record[j]="D1-5"; j++}
                    if(cD6==0){record[j]="D1-6"; j++}
                    if(cD7==0){record[j]="D1-7"; j++}
                    if(cD8==0){record[j]="D2-1"; j++}
                    if(cD9==0){record[j]="D2-2"; j++}
                    if(cD10==0){record[j]="D2-3"; j++}
                    if(cD11==0){record[j]="D2-4"; j++}
                    if(cD12==0){record[j]="D2-5"; j++}
                    if(cD13==0){record[j]="D2-6"; j++}
                    if(cD14==0){record[j]="D2-7"; j++}
                    
                    if(j>0){
                        alert("您好，第"+record+"題尚未填答完畢唷！");
                        return false;
                    }else{
                        return true;
                    }
                }
                
                function getValue(name){
                    var items=document.getElementsByName(name);
                    
                    for(var i=0, iLen=items.length; i<iLen; i++){
                        if(items[i].checked){
                            //return代表結束執行(單選只有一個答案)
                            return items[i].value;
                        }
                    }
                    //所有選項都沒選，才會運行至此
                    return 0;
                }
            </script>
        </form>
    </section>
</body>
</html>
