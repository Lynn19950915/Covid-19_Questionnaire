<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<!doctype html>
<html>
<head>
    <title>Questionnaire F</title>
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
            <h1>F. 價值二選一</h1>
        </div>
    </div>
    
    <section>
        <form method="post" name="exp9" id="exp9" action="index10.php" onsubmit="return check()" accept-charset="utf-8" style="padding: 5% 7.5%">
            <input type=hidden name="F1"  value="0">
            <input type=hidden name="F2"  value="0">
            <input type=hidden name="F3"  value="0">
            <input type=hidden name="F4"  value="0">
            <input type=hidden name="F5"  value="0">
            <input type=hidden name="F6"  value="0">
            <input type=hidden name="F7"  value="0">
            <input type=hidden name="F8"  value="0">
            <input type=hidden name="F9"  value="0">
            <input type=hidden name="F10" value="0">
            <input type=hidden name="F11" value="0">
            <input type=hidden name="F12" value="0">
            <input type=hidden name="F13" value="0">
            <input type=hidden name="F14" value="0">
            
            <h3 align="center"><b>作答說明</b></h3>
            <p style="background-color: yellow">在以下的問題中，您需要假設自己會在不同時間點獲得不同金額的錢，並判斷您比較喜歡哪一種給予您金錢的方式。您需要假設這是真正的錢，我們想知道您對不同情境收到金錢的喜好。</p><br>
            
            <b>F1. 請問您比較傾向：</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="F1" value="1">今天領美金 26.20 元</label>
                <label><input type="radio" name="F1" value="2">7 天後領美金 26.14 元</label>
            </fieldset><br>
            
            <b>F2. 請問您比較傾向：</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="F2" value="1">今天領美金 26.15 元</label>
                <label><input type="radio" name="F2" value="2">7 天後領美金 26.15 元</label>
            </fieldset><br>
            
            <b>F3. 請問您比較傾向：</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="F3" value="1">今天領美金 26.14 元</label>
                <label><input type="radio" name="F3" value="2">7 天後領美金 26.40 元</label>
            </fieldset><br>
            
            <b>F4. 請問您比較傾向：</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="F4" value="1">今天領美金 26.20 元</label>
                <label><input type="radio" name="F4" value="2">7 天後領美金 26.71 元</label>
            </fieldset><br>
            
            <b>F5. 請問您比較傾向：</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="F5" value="1">今天領美金 26.20 元</label>
                <label><input type="radio" name="F5" value="2">7 天後領美金 27.23 元</label>
            </fieldset><br>
            
            <b>F6. 請問您比較傾向：</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="F6" value="1">今天領美金 26.20 元</label>
                <label><input type="radio" name="F6" value="2">7 天後領美金 28.78 元</label>
            </fieldset><br>
            
            <b>F7. 請問您比較傾向：</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="F7" value="1">今天領美金 26.20 元</label>
                <label><input type="radio" name="F7" value="2">7 天後領美金 51.90 元</label>
            </fieldset><br>
            
            <b>F8. 請問您比較傾向：</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="F8" value="1">90 天後領美金 26.20 元</label>
                <label><input type="radio" name="F8" value="2">97 天後領美金 26.14 元</label>
            </fieldset><br>
            
            <b>F9. 請問您比較傾向：</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="F9" value="1">90 天後領美金 26.15 元</label>
                <label><input type="radio" name="F9" value="2">97 天後領美金 26.15 元</label>
            </fieldset><br>
            
            <b>F10. 請問您比較傾向：</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="F10" value="1">90 天後領美金 26.20 元</label>
                <label><input type="radio" name="F10" value="2">97 天後領美金 26.45 元</label>
            </fieldset><br>
            
            <b>F11. 請問您比較傾向：</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="F11" value="1">90 天後領美金 26.20 元</label>
                <label><input type="radio" name="F11" value="2">97 天後領美金 26.72 元</label>
            </fieldset><br>
            
            <b>F12. 請問您比較傾向：</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="F12" value="1">90 天後領美金 26.14 元</label>
                <label><input type="radio" name="F12" value="2">97 天後領美金 27.17 元</label>
            </fieldset><br>
            
            <b>F13. 請問您比較傾向：</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="F13" value="1">90 天後領美金 26.20 元</label>
                <label><input type="radio" name="F13" value="2">97 天後領美金 28.77 元</label>
            </fieldset><br>
            
            <b>F14. 請問您比較傾向：</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="F14" value="1">90 天後領美金 26.20 元</label>
                <label><input type="radio" name="F14" value="2">97 天後領美金 51.90 元</label>
            </fieldset><br>
            
            <input name="submit" value="下一頁" type="submit"><br>

            <script>
                //檢查各題是否完整填答，若否則依題號報錯
                function check(){
                    var cF1     =getValue("F1");
                    var cF2     =getValue("F2");
                    var cF3     =getValue("F3");
                    var cF4     =getValue("F4");
                    var cF5     =getValue("F5");
                    var cF6     =getValue("F6");
                    var cF7     =getValue("F7");
                    var cF8     =getValue("F8");
                    var cF9     =getValue("F9");
                    var cF10    =getValue("F10");
                    var cF11    =getValue("F11");
                    var cF12    =getValue("F12");
                    var cF13    =getValue("F13");
                    var cF14    =getValue("F14");
                    
                    var record=[], j=0;
                    if(cF1==0){record[j]="F1"; j++}
                    if(cF2==0){record[j]="F2"; j++}
                    if(cF3==0){record[j]="F3"; j++}
                    if(cF4==0){record[j]="F4"; j++}
                    if(cF5==0){record[j]="F5"; j++}
                    if(cF6==0){record[j]="F6"; j++}
                    if(cF7==0){record[j]="F7"; j++}
                    if(cF8==0){record[j]="F8"; j++}
                    if(cF9==0){record[j]="F9"; j++}
                    if(cF10==0){record[j]="F10"; j++}
                    if(cF11==0){record[j]="F11"; j++}
                    if(cF12==0){record[j]="F12"; j++}
                    if(cF13==0){record[j]="F13"; j++}
                    if(cF14==0){record[j]="F14"; j++}
                    
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
