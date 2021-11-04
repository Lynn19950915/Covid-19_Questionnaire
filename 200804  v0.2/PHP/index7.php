<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<!doctype html>
<html>
<head>
    <title>Questionnaire E1</title>
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
            <h1>E. 生活品質</h1>
        </div>
    </div>
    
    <section>
        <form method="post" name="exp7" id="exp7" action="index8.php" onsubmit="return check()" accept-charset="utf-8" style="padding: 5% 7.5%">
            <input type=hidden name="E1"  value="0">
            <input type=hidden name="E2"  value="0">
            <input type=hidden name="E3"  value="0">
            <input type=hidden name="E4"  value="0">
            <input type=hidden name="E5"  value="0">
            <input type=hidden name="E6"  value="0">
            <input type=hidden name="E7"  value="0">
            <input type=hidden name="E8"  value="0">
            <input type=hidden name="E9"  value="0">
            <input type=hidden name="E10" value="0">
            <input type=hidden name="E11" value="0">
            <input type=hidden name="E12" value="0">
            <input type=hidden name="E13" value="0">
            <input type=hidden name="E14" value="0">
            
            <h3 align="center"><b>作答說明</b></h3>
            <p style="background-color: yellow">這份問卷詢問您對於自己的生活品質、健康、以及其他生活領域的感覺。請您回答所有的問題。如果您對某一問題的回答不確定，請選出五個答案中最適合的一個，通常會是您最早想的那個答案。<br><br>
                
            我們的問題所關心的是您最近兩星期內的生活情形，請您用自己的標準、希望、愉快、以及關注點來回答問題。<br><br>
            
            請仔細閱讀每個題目，並評估您自己的感覺，然後就每一個題目選出最適合自己的答案。謝謝您的協助！</p><br>
            
            <b>E1. 整體來說，您如何評價您的生活品質？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E1" value="1">極不好</label>
                <label><input type="radio" name="E1" value="2">不好</label>
                <label><input type="radio" name="E1" value="3">中等程度好</label>
                <label><input type="radio" name="E1" value="4">好</label>
                <label><input type="radio" name="E1" value="5">極好</label>
            </fieldset><br>

            <b>E2. 整體來說，您滿意自己的健康嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E2" value="1">極不滿意</label>
                <label><input type="radio" name="E2" value="2">不滿意</label>
                <label><input type="radio" name="E2" value="3">中等程度滿意</label>
                <label><input type="radio" name="E2" value="4">滿意</label>
                <label><input type="radio" name="E2" value="5">極滿意</label>
            </fieldset><br>

            <b>E3. 您覺得身體疼痛會妨礙您處理需要做的事情嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E3" value="1">完全沒有妨礙</label>
                <label><input type="radio" name="E3" value="2">有一點妨礙</label>
                <label><input type="radio" name="E3" value="3">中等程度妨礙</label>
                <label><input type="radio" name="E3" value="4">很妨礙</label>
                <label><input type="radio" name="E3" value="5">極妨礙</label>
            </fieldset><br>

            <b>E4. 您需要靠醫療的幫助應付日常生活嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E4" value="1">完全沒有需要</label>
                <label><input type="radio" name="E4" value="2">有一點需要</label>
                <label><input type="radio" name="E4" value="3">中等程度需要</label>
                <label><input type="radio" name="E4" value="4">很需要</label>
                <label><input type="radio" name="E4" value="5">極需要</label>
            </fieldset><br>

            <b>E5. 您享受生活嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E5" value="1">完全沒有享受</label>
                <label><input type="radio" name="E5" value="2">有一點享受</label>
                <label><input type="radio" name="E5" value="3">中等程度享受</label>
                <label><input type="radio" name="E5" value="4">很享受</label>
                <label><input type="radio" name="E5" value="5">極享受</label>
            </fieldset><br>

            <b>E6. 您覺得自己的生命有意義嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E6" value="1">完全沒有</label>
                <label><input type="radio" name="E6" value="2">有一點有</label>
                <label><input type="radio" name="E6" value="3">中等程度有</label>
                <label><input type="radio" name="E6" value="4">很有</label>
                <label><input type="radio" name="E6" value="5">極有</label>
            </fieldset><br>

            <b>E7. 您集中精神的能力有多好？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E7" value="1">完全不好</label>
                <label><input type="radio" name="E7" value="2">有一點好</label>
                <label><input type="radio" name="E7" value="3">中等程度好</label>
                <label><input type="radio" name="E7" value="4">很好</label>
                <label><input type="radio" name="E7" value="5">極好</label>
            </fieldset><br>

            <b>E8. 在日常生活中，您感到安全嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E8" value="1">完全不安全</label>
                <label><input type="radio" name="E8" value="2">有一點安全</label>
                <label><input type="radio" name="E8" value="3">中等程度安全</label>
                <label><input type="radio" name="E8" value="4">很安全</label>
                <label><input type="radio" name="E8" value="5">極安全</label>
            </fieldset><br>

            <b>E9. 您所處的環境健康（如污染、噪音、氣候、景觀）嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E9" value="1">完全不健康</label>
                <label><input type="radio" name="E9" value="2">有一點健康</label>
                <label><input type="radio" name="E9" value="3">中等程度健康</label>
                <label><input type="radio" name="E9" value="4">很健康</label>
                <label><input type="radio" name="E9" value="5">極健康</label>
            </fieldset><br>

            <b>E10. 您每天的生活有足夠的精力嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E10" value="1">完全不足夠</label>
                <label><input type="radio" name="E10" value="2">少許足夠</label>
                <label><input type="radio" name="E10" value="3">中等程度足夠</label>
                <label><input type="radio" name="E10" value="4">很足夠</label>
                <label><input type="radio" name="E10" value="5">完全足夠</label>
            </fieldset><br>

            <b>E11. 您能接受自己的外表嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E11" value="1">完全不能夠</label>
                <label><input type="radio" name="E11" value="2">少許能夠</label>
                <label><input type="radio" name="E11" value="3">中等程度能夠</label>
                <label><input type="radio" name="E11" value="4">很能夠</label>
                <label><input type="radio" name="E11" value="5">完全能夠</label>
            </fieldset><br>

            <b>E12. 您有足夠的金錢應付所需嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E12" value="1">完全不足夠</label>
                <label><input type="radio" name="E12" value="2">少許足夠</label>
                <label><input type="radio" name="E12" value="3">中等程度足夠</label>
                <label><input type="radio" name="E12" value="4">很足夠</label>
                <label><input type="radio" name="E12" value="5">完全足夠</label>
            </fieldset><br>

            <b>E13. 您能方便得到每日生活所需的資訊嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E13" value="1">完全不方便</label>
                <label><input type="radio" name="E13" value="2">少許方便</label>
                <label><input type="radio" name="E13" value="3">中等程度方便</label>
                <label><input type="radio" name="E13" value="4">很方便</label>
                <label><input type="radio" name="E13" value="5">完全方便</label>
            </fieldset><br>

            <b>E14. 您有機會從事休閒活動嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E14" value="1">完全沒有機會</label>
                <label><input type="radio" name="E14" value="2">少許機會</label>
                <label><input type="radio" name="E14" value="3">中等程度機會</label>
                <label><input type="radio" name="E14" value="4">很有機會</label>
                <label><input type="radio" name="E14" value="5">完全有機會</label>
            </fieldset><br>

            <input name="submit" value="下一頁" type="submit"><br>
            
            <script>
                //檢查各題是否完整填答，若否則依題號報錯
                function check(){
                    var cE1     =getValue("E1");
                    var cE2     =getValue("E2");
                    var cE3     =getValue("E3");
                    var cE4     =getValue("E4");
                    var cE5     =getValue("E5");
                    var cE6     =getValue("E6");
                    var cE7     =getValue("E7");
                    var cE8     =getValue("E8");
                    var cE9     =getValue("E9");
                    var cE10    =getValue("E10");
                    var cE11    =getValue("E11");
                    var cE12    =getValue("E12");
                    var cE13    =getValue("E13");
                    var cE14    =getValue("E14");
                    
                    var record=[], j=0;
                    if(cE1==0){record[j]="E1"; j++}
                    if(cE2==0){record[j]="E2"; j++}
                    if(cE3==0){record[j]="E3"; j++}
                    if(cE4==0){record[j]="E4"; j++}
                    if(cE5==0){record[j]="E5"; j++}
                    if(cE6==0){record[j]="E6"; j++}
                    if(cE7==0){record[j]="E7"; j++}
                    if(cE8==0){record[j]="E8"; j++}
                    if(cE9==0){record[j]="E9"; j++}
                    if(cE10==0){record[j]="E10"; j++}
                    if(cE11==0){record[j]="E11"; j++}
                    if(cE12==0){record[j]="E12"; j++}
                    if(cE13==0){record[j]="E13"; j++}
                    if(cE14==0){record[j]="E14"; j++}
                    
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
