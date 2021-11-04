<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<!doctype html>
<html>
<head>
    <title>Questionnaire E2</title>
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
        <form method="post" name="exp8" id="exp8" action="index9.php" onsubmit="return check()" accept-charset="utf-8" style="padding: 5% 7.5%">  
            <input type=hidden name="E15" value="0">
            <input type=hidden name="E16" value="0">
            <input type=hidden name="E17" value="0">
            <input type=hidden name="E18" value="0">
            <input type=hidden name="E19" value="0">
            <input type=hidden name="E20" value="0">
            <input type=hidden name="E21" value="0">
            <input type=hidden name="E22" value="0">
            <input type=hidden name="E23" value="0">
            <input type=hidden name="E24" value="0">
            <input type=hidden name="E25" value="0">
            <input type=hidden name="E26" value="0">
            <input type=hidden name="E27" value="0">
            <input type=hidden name="E28" value="0">
            
            <h3 align="center"><b>作答說明</b></h3>
            <p style="background-color: yellow">這份問卷詢問您對於自己的生活品質、健康、以及其他生活領域的感覺。請您回答所有的問題。如果您對某一問題的回答不確定，請選出五個答案中最適合的一個，通常會是您最早想的那個答案。<br><br>
                
            我們的問題所關心的是您最近兩星期內的生活情形，請您用自己的標準、希望、愉快、以及關注點來回答問題。<br><br>
            
            請仔細閱讀每個題目，並評估您自己的感覺，然後就每一個題目選出最適合自己的答案。謝謝您的協助！</p><br>
            
            <b>E15. 您四處行動的能力好嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E15" value="1">完全不好</label>
                <label><input type="radio" name="E15" value="2">有一點好</label>
                <label><input type="radio" name="E15" value="3">中等程度好</label>
                <label><input type="radio" name="E15" value="4">很好</label>
                <label><input type="radio" name="E15" value="5">極好</label>
            </fieldset><br>

            <b>E16. 您滿意自己的睡眠狀況嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E16" value="1">極不滿意</label>
                <label><input type="radio" name="E16" value="2">不滿意</label>
                <label><input type="radio" name="E16" value="3">中等程度滿意</label>
                <label><input type="radio" name="E16" value="4">滿意</label>
                <label><input type="radio" name="E16" value="5">極滿意</label>
            </fieldset><br>

            <b>E17. 您對自己從事日常活動的能力滿意嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E17" value="1">極不滿意</label>
                <label><input type="radio" name="E17" value="2">不滿意</label>
                <label><input type="radio" name="E17" value="3">中等程度滿意</label>
                <label><input type="radio" name="E17" value="4">滿意</label>
                <label><input type="radio" name="E17" value="5">極滿意</label>
            </fieldset><br>

            <b>E18. 您滿意自己的工作能力嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E18" value="1">極不滿意</label>
                <label><input type="radio" name="E18" value="2">不滿意</label>
                <label><input type="radio" name="E18" value="3">中等程度滿意</label>
                <label><input type="radio" name="E18" value="4">滿意</label>
                <label><input type="radio" name="E18" value="5">極滿意</label>
            </fieldset><br>

            <b>E19. 您對自己滿意嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E19" value="1">極不滿意</label>
                <label><input type="radio" name="E19" value="2">不滿意</label>
                <label><input type="radio" name="E19" value="3">中等程度滿意</label>
                <label><input type="radio" name="E19" value="4">滿意</label>
                <label><input type="radio" name="E19" value="5">極滿意</label>
            </fieldset><br>

            <b>E20. 您滿意自己的人際關係嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E20" value="1">極不滿意</label>
                <label><input type="radio" name="E20" value="2">不滿意</label>
                <label><input type="radio" name="E20" value="3">中等程度滿意</label>
                <label><input type="radio" name="E20" value="4">滿意</label>
                <label><input type="radio" name="E20" value="5">極滿意</label>
            </fieldset><br>

            <b>E21. 您滿意自己的性生活嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E21" value="1">極不滿意</label>
                <label><input type="radio" name="E21" value="2">不滿意</label>
                <label><input type="radio" name="E21" value="3">中等程度滿意</label>
                <label><input type="radio" name="E21" value="4">滿意</label>
                <label><input type="radio" name="E21" value="5">極滿意</label>
            </fieldset><br>

            <b>E22. 您滿意朋友給您的支持嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E22" value="1">極不滿意</label>
                <label><input type="radio" name="E22" value="2">不滿意</label>
                <label><input type="radio" name="E22" value="3">中等程度滿意</label>
                <label><input type="radio" name="E22" value="4">滿意</label>
                <label><input type="radio" name="E22" value="5">極滿意</label>
            </fieldset><br>

            <b>E23. 您滿意自己住所的狀況嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E23" value="1">極不滿意</label>
                <label><input type="radio" name="E23" value="2">不滿意</label>
                <label><input type="radio" name="E23" value="3">中等程度滿意</label>
                <label><input type="radio" name="E23" value="4">滿意</label>
                <label><input type="radio" name="E23" value="5">極滿意</label>
            </fieldset><br>

            <b>E24. 您對醫療保健服務的方便程度滿意嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E24" value="1">極不滿意</label>
                <label><input type="radio" name="E24" value="2">不滿意</label>
                <label><input type="radio" name="E24" value="3">中等程度滿意</label>
                <label><input type="radio" name="E24" value="4">滿意</label>
                <label><input type="radio" name="E24" value="5">極滿意</label>
            </fieldset><br>

            <b>E25. 您滿意所使用的交通運輸方式嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E25" value="1">極不滿意</label>
                <label><input type="radio" name="E25" value="2">不滿意</label>
                <label><input type="radio" name="E25" value="3">中等程度滿意</label>
                <label><input type="radio" name="E25" value="4">滿意</label>
                <label><input type="radio" name="E25" value="5">極滿意</label>
            </fieldset><br>

            <b>E26. 您常有負面的感受（如傷心、緊張、焦慮、憂鬱等）嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E26" value="1">從來沒有</label>
                <label><input type="radio" name="E26" value="2">不常有</label>
                <label><input type="radio" name="E26" value="3">一半有一半沒有</label>
                <label><input type="radio" name="E26" value="4">很常有</label>
                <label><input type="radio" name="E26" value="5">一直都有</label>
            </fieldset><br>

            <b>E27. 您覺得自己有面子或被尊重嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E27" value="1">完全沒有</label>
                <label><input type="radio" name="E27" value="2">有一點有</label>
                <label><input type="radio" name="E27" value="3">中等程度有</label>
                <label><input type="radio" name="E27" value="4">很有</label>
                <label><input type="radio" name="E27" value="5">極有</label>
            </fieldset><br>

            <b>E28. 您想吃的食物通常都能吃到嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E28" value="1">從來沒有</label>
                <label><input type="radio" name="E28" value="2">不常有</label>
                <label><input type="radio" name="E28" value="3">一半有一半沒有</label>
                <label><input type="radio" name="E28" value="4">很常有</label>
                <label><input type="radio" name="E28" value="5">一直都有</label>
            </fieldset><br>
       
            <input name="submit" value="下一頁" type="submit"><br>
      
            <script>
                //檢查各題是否完整填答，若否則依題號報錯
                function check(){
                    var cE15    =getValue("E15");
                    var cE16    =getValue("E16");
                    var cE17    =getValue("E17");
                    var cE18    =getValue("E18");
                    var cE19    =getValue("E19");
                    var cE20    =getValue("E20");
                    var cE21    =getValue("E21");
                    var cE22    =getValue("E22");
                    var cE23    =getValue("E23");
                    var cE24    =getValue("E24");
                    var cE25    =getValue("E25");
                    var cE26    =getValue("E26");
                    var cE27    =getValue("E27");
                    var cE28    =getValue("E28");
                    
                    var record=[], j=0;
                    if(cE15==0){record[j]="E15"; j++}
                    if(cE16==0){record[j]="E16"; j++}
                    if(cE17==0){record[j]="E17"; j++}
                    if(cE18==0){record[j]="E18"; j++}
                    if(cE19==0){record[j]="E19"; j++}
                    if(cE20==0){record[j]="E20"; j++}
                    if(cE21==0){record[j]="E21"; j++}
                    if(cE22==0){record[j]="E22"; j++}
                    if(cE23==0){record[j]="E23"; j++}
                    if(cE24==0){record[j]="E24"; j++}
                    if(cE25==0){record[j]="E25"; j++}
                    if(cE26==0){record[j]="E26"; j++}
                    if(cE27==0){record[j]="E27"; j++}
                    if(cE28==0){record[j]="E28"; j++}
                    
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
