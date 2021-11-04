<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<!doctype html>
<html>
<head>
    <title>Questionnaire H2</title>
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
            <h1>H. 心理狀態</h1>
        </div>
    </div>
    
    <section>
        <form method="post" name="exp13" id="exp13" action="index14.php" onsubmit="return check()" accept-charset="utf-8" style="padding: 5% 7.5%">     
            <input type=hidden name="H12" value="0">
            <input type=hidden name="H13" value="0">
            <input type=hidden name="H14" value="0">
            <input type=hidden name="H15" value="0">
            <input type=hidden name="H16" value="0">
            <input type=hidden name="H17" value="0">
            <input type=hidden name="H18" value="0">
            <input type=hidden name="H19" value="0">
            <input type=hidden name="H20" value="0">
            <input type=hidden name="H21" value="0">
            <input type=hidden name="H22" value="0">
            
            <h3 align="center"><b>作答說明</b></h3>
            <p align="center" style="background-color: yellow">以下是一些你可能曾有的感受或行為。請按照過去一星期內你的實際情况或感覺作答題目。</p><br>
            
            <b>H12. 我覺得自己的行動太緩慢。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H12" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H12" value="2">一至兩天</label>
                <label><input type="radio" name="H12" value="3">三至四天</label>
                <label><input type="radio" name="H12" value="4">五至七天</label>
                <label><input type="radio" name="H12" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br>             

            <b>H13. 我覺得坐立不安。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H13" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H13" value="2">一至兩天</label>
                <label><input type="radio" name="H13" value="3">三至四天</label>
                <label><input type="radio" name="H13" value="4">五至七天</label>
                <label><input type="radio" name="H13" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br> 

            <b>H14. 我寧願自己已經死亡。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H14" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H14" value="2">一至兩天</label>
                <label><input type="radio" name="H14" value="3">三至四天</label>
                <label><input type="radio" name="H14" value="4">五至七天</label>
                <label><input type="radio" name="H14" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br>           

            <b>H15. 我想傷害自己。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H15" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H15" value="2">一至兩天</label>
                <label><input type="radio" name="H15" value="3">三至四天</label>
                <label><input type="radio" name="H15" value="4">五至七天</label>
                <label><input type="radio" name="H15" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br>            

            <b>H16. 我時常感到疲倦。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H16" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H16" value="2">一至兩天</label>
                <label><input type="radio" name="H16" value="3">三至四天</label>
                <label><input type="radio" name="H16" value="4">五至七天</label>
                <label><input type="radio" name="H16" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br>           

            <b>H17. 我不喜歡我自己。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H17" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H17" value="2">一至兩天</label>
                <label><input type="radio" name="H17" value="3">三至四天</label>
                <label><input type="radio" name="H17" value="4">五至七天</label>
                <label><input type="radio" name="H17" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br>          

            <b>H18. 我雖然沒有嘗試減肥，但卻輕了很多。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H18" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H18" value="2">一至兩天</label>
                <label><input type="radio" name="H18" value="3">三至四天</label>
                <label><input type="radio" name="H18" value="4">五至七天</label>
                <label><input type="radio" name="H18" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br>            

            <b>H19. 我很難才能入睡。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H19" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H19" value="2">一至兩天</label>
                <label><input type="radio" name="H19" value="3">三至四天</label>
                <label><input type="radio" name="H19" value="4">五至七天</label>
                <label><input type="radio" name="H19" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br>            

            <b>H20. 我不能集中精神做一些重要的事情。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H20" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H20" value="2">一至兩天</label>
                <label><input type="radio" name="H20" value="3">三至四天</label>
                <label><input type="radio" name="H20" value="4">五至七天</label>
                <label><input type="radio" name="H20" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br>          

            <b>H21. 我覺得我倒不如放棄。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H21" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H21" value="2">一至兩天</label>
                <label><input type="radio" name="H21" value="3">三至四天</label>
                <label><input type="radio" name="H21" value="4">五至七天</label>
                <label><input type="radio" name="H21" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br>           

            <b>H22. 我覺得生活充滿樂趣。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H22" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H22" value="2">一至兩天</label>
                <label><input type="radio" name="H22" value="3">三至四天</label>
                <label><input type="radio" name="H22" value="4">五至七天</label>
                <label><input type="radio" name="H22" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br>           

            <input name="submit" value="下一頁" type="submit"><br>
            
            <script>
                //檢查各題是否完整填答，若否則依題號報錯
                function check(){
                    var cH12    =getValue("H12");
                    var cH13    =getValue("H13");
                    var cH14    =getValue("H14");
                    var cH15    =getValue("H15");
                    var cH16    =getValue("H16");
                    var cH17    =getValue("H17");
                    var cH18    =getValue("H18");
                    var cH19    =getValue("H19");
                    var cH20    =getValue("H20");
                    var cH21    =getValue("H21");
                    var cH22    =getValue("H22");
                    
                    var record=[], j=0;
                    if(cH12==0){record[j]="H12"; j++}
                    if(cH13==0){record[j]="H13"; j++}
                    if(cH14==0){record[j]="H14"; j++}
                    if(cH15==0){record[j]="H15"; j++}
                    if(cH16==0){record[j]="H16"; j++}
                    if(cH17==0){record[j]="H17"; j++}
                    if(cH18==0){record[j]="H18"; j++}
                    if(cH19==0){record[j]="H19"; j++}
                    if(cH20==0){record[j]="H20"; j++}
                    if(cH21==0){record[j]="H21"; j++}
                    if(cH22==0){record[j]="H22"; j++}
                    
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
