<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<!doctype html>
<html>
<head>
    <title>Questionnaire H1</title>
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
        <form method="post" name="exp12" id="exp12" action="index13.php" onsubmit="return check()" accept-charset="utf-8" style="padding: 5% 7.5%">     
            <input type=hidden name="H1"  value="0">
            <input type=hidden name="H2"  value="0">
            <input type=hidden name="H3"  value="0">
            <input type=hidden name="H4"  value="0">
            <input type=hidden name="H5"  value="0">
            <input type=hidden name="H6"  value="0">
            <input type=hidden name="H7"  value="0">
            <input type=hidden name="H8"  value="0">
            <input type=hidden name="H9"  value="0">
            <input type=hidden name="H10" value="0">
            <input type=hidden name="H11" value="0"> 
            
            <h3 align="center"><b>作答說明</b></h3>
            <p align="center" style="background-color: yellow">以下是一些你可能曾有的感受或行為。請按照過去一星期內你的實際情况或感覺作答題目。</p><br>
            
            <b>H1. 我不想吃東西，我的胃口不好。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H1" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H1" value="2">一至兩天</label>
                <label><input type="radio" name="H1" value="3">三至四天</label>
                <label><input type="radio" name="H1" value="4">五至七天</label>
                <label><input type="radio" name="H1" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br>

            <b>H2. 無法擺脫苦悶。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H2" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H2" value="2">一至兩天</label>
                <label><input type="radio" name="H2" value="3">三至四天</label>
                <label><input type="radio" name="H2" value="4">五至七天</label>
                <label><input type="radio" name="H2" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br>

            <b>H3. 我在做事時，無法集中自己的注意力。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H3" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H3" value="2">一至兩天</label>
                <label><input type="radio" name="H3" value="3">三至四天</label>
                <label><input type="radio" name="H3" value="4">五至七天</label>
                <label><input type="radio" name="H3" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br>

            <b>H4. 我感到情緒低沉。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H4" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H4" value="2">一至兩天</label>
                <label><input type="radio" name="H4" value="3">三至四天</label>
                <label><input type="radio" name="H4" value="4">五至七天</label>
                <label><input type="radio" name="H4" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br>

            <b>H5. 我的睡眠情況不好。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H5" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H5" value="2">一至兩天</label>
                <label><input type="radio" name="H5" value="3">三至四天</label>
                <label><input type="radio" name="H5" value="4">五至七天</label>
                <label><input type="radio" name="H5" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br>

            <b>H6. 我感到憂愁。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H6" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H6" value="2">一至兩天</label>
                <label><input type="radio" name="H6" value="3">三至四天</label>
                <label><input type="radio" name="H6" value="4">五至七天</label>
                <label><input type="radio" name="H6" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br>

            <b>H7. 我覺得我無法繼續我的日常工作。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H7" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H7" value="2">一至兩天</label>
                <label><input type="radio" name="H7" value="3">三至四天</label>
                <label><input type="radio" name="H7" value="4">五至七天</label>
                <label><input type="radio" name="H7" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br> 

            <b>H8. 沒有東西能令我開心。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H8" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H8" value="2">一至兩天</label>
                <label><input type="radio" name="H8" value="3">三至四天</label>
                <label><input type="radio" name="H8" value="4">五至七天</label>
                <label><input type="radio" name="H8" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br> 

            <b>H9. 我覺得自己是一個壞人。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H9" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H9" value="2">一至兩天</label>
                <label><input type="radio" name="H9" value="3">三至四天</label>
                <label><input type="radio" name="H9" value="4">五至七天</label>
                <label><input type="radio" name="H9" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br>      

            <b>H10. 我對平時有興趣做的事情都失去興趣。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H10" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H10" value="2">一至兩天</label>
                <label><input type="radio" name="H10" value="3">三至四天</label>
                <label><input type="radio" name="H10" value="4">五至七天</label>
                <label><input type="radio" name="H10" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br> 

            <b>H11. 我的睡眠時間比平時多很多。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="H11" value="1">沒有或少於一天</label>
                <label><input type="radio" name="H11" value="2">一至兩天</label>
                <label><input type="radio" name="H11" value="3">三至四天</label>
                <label><input type="radio" name="H11" value="4">五至七天</label>
                <label><input type="radio" name="H11" value="5">過去兩個星期或差不多天天也有</label>
            </fieldset><br>
            
            <input name="submit" value="下一頁" type="submit"><br>
            
            <script>
                //檢查各題是否完整填答，若否則依題號報錯
                function check(){
                    var cH1     =getValue("H1");
                    var cH2     =getValue("H2");
                    var cH3     =getValue("H3");
                    var cH4     =getValue("H4");
                    var cH5     =getValue("H5");
                    var cH6     =getValue("H6");
                    var cH7     =getValue("H7");
                    var cH8     =getValue("H8");
                    var cH9     =getValue("H9");
                    var cH10    =getValue("H10");
                    var cH11    =getValue("H11");

                    var record=[], j=0;
                    if(cH1==0){record[j]="H1"; j++}
                    if(cH2==0){record[j]="H2"; j++}
                    if(cH3==0){record[j]="H3"; j++}
                    if(cH4==0){record[j]="H4"; j++}
                    if(cH5==0){record[j]="H5"; j++}
                    if(cH6==0){record[j]="H6"; j++}
                    if(cH7==0){record[j]="H7"; j++}
                    if(cH8==0){record[j]="H8"; j++}
                    if(cH9==0){record[j]="H9"; j++}
                    if(cH10==0){record[j]="H10"; j++}
                    if(cH11==0){record[j]="H11"; j++}

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
