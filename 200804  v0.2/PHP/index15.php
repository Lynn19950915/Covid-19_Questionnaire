<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<!doctype html>
<html>
<head>
    <title>Questionnaire I2</title>
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
        <form method="post" name="exp15" id="exp15" action="index16.php" onsubmit="return check()" accept-charset="utf-8" style="padding: 5% 7.5%">
            <input type=hidden name="I12" value="0">
            <input type=hidden name="I13" value="0">
            <input type=hidden name="I14" value="0">
            <input type=hidden name="I15" value="0">
            <input type=hidden name="I16" value="0">
            <input type=hidden name="I17" value="0">
            <input type=hidden name="I18" value="0">
            <input type=hidden name="I19" value="0">
            <input type=hidden name="I20" value="0">
            <input type=hidden name="I21" value="0">
            <input type=hidden name="I22" value="0">
            
            <h3 align="center"><b>作答說明</b></h3>
            <p align="center" style="background-color: yellow">以下是一些人經歷過壓力事件後會經驗的困難，請仔細閱讀每一題目，並依自己<u><b>過去七天</b></u>的經驗選擇最能夠形容每一項困難對您影響的程度。以下提到的【那件事】是指：<u><b>隔離期間</b></u>的有關經歷。</p><br>
            
            <b>I12. 我察覺到我仍然對那件事有很多感受，但我沒有去處理它們。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I12" value="1">從未</label>
                <label><input type="radio" name="I12" value="2">很不常</label>
                <label><input type="radio" name="I12" value="3">普通</label>
                <label><input type="radio" name="I12" value="4">很常</label>
                <label><input type="radio" name="I12" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I13. 我對那件事的感覺有點麻木。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I13" value="1">從未</label>
                <label><input type="radio" name="I13" value="2">很不常</label>
                <label><input type="radio" name="I13" value="3">普通</label>
                <label><input type="radio" name="I13" value="4">很常</label>
                <label><input type="radio" name="I13" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I14. 我覺得我現在的行為或是感受與發生那件事時的行為和感受一樣。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I14" value="1">從未</label>
                <label><input type="radio" name="I14" value="2">很不常</label>
                <label><input type="radio" name="I14" value="3">普通</label>
                <label><input type="radio" name="I14" value="4">很常</label>
                <label><input type="radio" name="I14" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I15. 最近這段期間，我難以入睡。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I15" value="1">從未</label>
                <label><input type="radio" name="I15" value="2">很不常</label>
                <label><input type="radio" name="I15" value="3">普通</label>
                <label><input type="radio" name="I15" value="4">很常</label>
                <label><input type="radio" name="I15" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I16. 我對那件事的強烈感受一陣一陣地湧現出來。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I16" value="1">從未</label>
                <label><input type="radio" name="I16" value="2">很不常</label>
                <label><input type="radio" name="I16" value="3">普通</label>
                <label><input type="radio" name="I16" value="4">很常</label>
                <label><input type="radio" name="I16" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I17. 我嘗試忘記那件事。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I17" value="1">從未</label>
                <label><input type="radio" name="I17" value="2">很不常</label>
                <label><input type="radio" name="I17" value="3">普通</label>
                <label><input type="radio" name="I17" value="4">很常</label>
                <label><input type="radio" name="I17" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I18. 最近這段期間，我很難集中精神。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I18" value="1">從未</label>
                <label><input type="radio" name="I18" value="2">很不常</label>
                <label><input type="radio" name="I18" value="3">普通</label>
                <label><input type="radio" name="I18" value="4">很常</label>
                <label><input type="radio" name="I18" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I19. 當我想起那件事時，我會產生以下身體反應：流汗、呼吸困難、作嘔、或者強烈心跳。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I19" value="1">從未</label>
                <label><input type="radio" name="I19" value="2">很不常</label>
                <label><input type="radio" name="I19" value="3">普通</label>
                <label><input type="radio" name="I19" value="4">很常</label>
                <label><input type="radio" name="I19" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I20. 我夢到那件事。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I20" value="1">從未</label>
                <label><input type="radio" name="I20" value="2">很不常</label>
                <label><input type="radio" name="I20" value="3">普通</label>
                <label><input type="radio" name="I20" value="4">很常</label>
                <label><input type="radio" name="I20" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I21. 最近這段期間，我覺得自己警覺性很高，處處提防。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I21" value="1">從未</label>
                <label><input type="radio" name="I21" value="2">很不常</label>
                <label><input type="radio" name="I21" value="3">普通</label>
                <label><input type="radio" name="I21" value="4">很常</label>
                <label><input type="radio" name="I21" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I22. 我嘗試不談論有關那件事的話題。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I22" value="1">從未</label>
                <label><input type="radio" name="I22" value="2">很不常</label>
                <label><input type="radio" name="I22" value="3">普通</label>
                <label><input type="radio" name="I22" value="4">很常</label>
                <label><input type="radio" name="I22" value="5">幾乎是如此</label>
            </fieldset><br>

            <input name="submit" value="送出" type="submit"><br>
            
            <script>
                //檢查各題是否完整填答，若否則依題號報錯
                function check(){
                    var cI12    =getValue("I12");
                    var cI13    =getValue("I13");
                    var cI14    =getValue("I14");
                    var cI15    =getValue("I15");
                    var cI16    =getValue("I16");
                    var cI17    =getValue("I17");
                    var cI18    =getValue("I18");
                    var cI19    =getValue("I19");
                    var cI20    =getValue("I20");
                    var cI21    =getValue("I21");
                    var cI22    =getValue("I22");
                    
                    var record=[], j=0;
                    if(cI12==0){record[j]="I12"; j++}
                    if(cI13==0){record[j]="I13"; j++}
                    if(cI14==0){record[j]="I14"; j++}
                    if(cI15==0){record[j]="I15"; j++}
                    if(cI16==0){record[j]="I16"; j++}
                    if(cI17==0){record[j]="I17"; j++}
                    if(cI18==0){record[j]="I18"; j++}
                    if(cI19==0){record[j]="I19"; j++}
                    if(cI20==0){record[j]="I20"; j++}
                    if(cI21==0){record[j]="I21"; j++}
                    if(cI22==0){record[j]="I22"; j++}
                    
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
