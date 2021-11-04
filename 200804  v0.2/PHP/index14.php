<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<!doctype html>
<html>
<head>
    <title>Questionnaire I1</title>
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
            <h1>I. 隔離事件的影響</h1>
        </div>
    </div>
    
    <section>
        <form method="post" name="exp14" id="exp14" action="index15.php" onsubmit="return check()" accept-charset="utf-8" style="padding: 5% 7.5%">
            <input type=hidden name="I1"  value="0">
            <input type=hidden name="I2"  value="0">
            <input type=hidden name="I3"  value="0">
            <input type=hidden name="I4"  value="0">
            <input type=hidden name="I5"  value="0">
            <input type=hidden name="I6"  value="0">
            <input type=hidden name="I7"  value="0">
            <input type=hidden name="I8"  value="0">
            <input type=hidden name="I9"  value="0">
            <input type=hidden name="I10" value="0">
            <input type=hidden name="I11" value="0">
            
            <h3 align="center"><b>作答說明</b></h3>
            <p align="center" style="background-color: yellow">以下是一些人經歷過壓力事件後會經驗的困難，請仔細閱讀每一題目，並依自己<u><b>過去七天</b></u>的經驗選擇最能夠形容每一項困難對您影響的程度。以下提到的【那件事】是指：<u><b>隔離期間</b></u>的有關經歷。</p><br>
            
            <b>I1. 任何有關那件事的事物都會讓我想起對那件事的感覺。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I1" value="1">從未</label>
                <label><input type="radio" name="I1" value="2">很不常</label>
                <label><input type="radio" name="I1" value="3">普通</label>
                <label><input type="radio" name="I1" value="4">很常</label>
                <label><input type="radio" name="I1" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I2. 最近這段期間，我很難睡得安穩。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I2" value="1">從未</label>
                <label><input type="radio" name="I2" value="2">很不常</label>
                <label><input type="radio" name="I2" value="3">普通</label>
                <label><input type="radio" name="I2" value="4">很常</label>
                <label><input type="radio" name="I2" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I3. 其他事情不停地令我想起那件事。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I3" value="1">從未</label>
                <label><input type="radio" name="I3" value="2">很不常</label>
                <label><input type="radio" name="I3" value="3">普通</label>
                <label><input type="radio" name="I3" value="4">很常</label>
                <label><input type="radio" name="I3" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I4. 最近這段期間，我覺得煩躁和忿怒。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I4" value="1">從未</label>
                <label><input type="radio" name="I4" value="2">很不常</label>
                <label><input type="radio" name="I4" value="3">普通</label>
                <label><input type="radio" name="I4" value="4">很常</label>
                <label><input type="radio" name="I4" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I5. 每當我想起那件事或者有其他事物令我想起那件事時，我會盡力避免讓自己心煩意亂。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I5" value="1">從未</label>
                <label><input type="radio" name="I5" value="2">很不常</label>
                <label><input type="radio" name="I5" value="3">普通</label>
                <label><input type="radio" name="I5" value="4">很常</label>
                <label><input type="radio" name="I5" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I6. 我會無意中想起那件事。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I6" value="1">從未</label>
                <label><input type="radio" name="I6" value="2">很不常</label>
                <label><input type="radio" name="I6" value="3">普通</label>
                <label><input type="radio" name="I6" value="4">很常</label>
                <label><input type="radio" name="I6" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I7. 我覺得那件事好像從未發生過或並非真實。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I7" value="1">從未</label>
                <label><input type="radio" name="I7" value="2">很不常</label>
                <label><input type="radio" name="I7" value="3">普通</label>
                <label><input type="radio" name="I7" value="4">很常</label>
                <label><input type="radio" name="I7" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I8. 我避開一些會令我回憶起那件事的事物。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I8" value="1">從未</label>
                <label><input type="radio" name="I8" value="2">很不常</label>
                <label><input type="radio" name="I8" value="3">普通</label>
                <label><input type="radio" name="I8" value="4">很常</label>
                <label><input type="radio" name="I8" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I9. 關於那件事的影像在我腦海中突然浮現出來。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I9" value="1">從未</label>
                <label><input type="radio" name="I9" value="2">很不常</label>
                <label><input type="radio" name="I9" value="3">普通</label>
                <label><input type="radio" name="I9" value="4">很常</label>
                <label><input type="radio" name="I9" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I10. 我神經過敏及容易被嚇得跳起來。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I10" value="1">從未</label>
                <label><input type="radio" name="I10" value="2">很不常</label>
                <label><input type="radio" name="I10" value="3">普通</label>
                <label><input type="radio" name="I10" value="4">很常</label>
                <label><input type="radio" name="I10" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I11. 我嘗試不想起那件事。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I11" value="1">從未</label>
                <label><input type="radio" name="I11" value="2">很不常</label>
                <label><input type="radio" name="I11" value="3">普通</label>
                <label><input type="radio" name="I11" value="4">很常</label>
                <label><input type="radio" name="I11" value="5">幾乎是如此</label>
            </fieldset><br>
            
            <input name="submit" value="下一頁" type="submit"><br>
            
            <script>
                //檢查各題是否完整填答，若否則依題號報錯
                function check(){
                    var cI1     =getValue("I1");
                    var cI2     =getValue("I2");
                    var cI3     =getValue("I3");
                    var cI4     =getValue("I4");
                    var cI5     =getValue("I5");
                    var cI6     =getValue("I6");
                    var cI7     =getValue("I7");
                    var cI8     =getValue("I8");
                    var cI9     =getValue("I9");
                    var cI10    =getValue("I10");
                    var cI11    =getValue("I11");

                    var record=[], j=0;
                    if(cI1==0){record[j]="I1"; j++}
                    if(cI2==0){record[j]="I2"; j++}
                    if(cI3==0){record[j]="I3"; j++}
                    if(cI4==0){record[j]="I4"; j++}
                    if(cI5==0){record[j]="I5"; j++}
                    if(cI6==0){record[j]="I6"; j++}
                    if(cI7==0){record[j]="I7"; j++}
                    if(cI8==0){record[j]="I8"; j++}
                    if(cI9==0){record[j]="I9"; j++}
                    if(cI10==0){record[j]="I10"; j++}
                    if(cI11==0){record[j]="I11"; j++}
                    
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
