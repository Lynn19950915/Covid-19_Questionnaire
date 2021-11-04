<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<!doctype html>
<html>
<head>
    <title>Questionnaire G2</title>
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
            <h1>G. 隔離狀況</h1>
        </div>
    </div>
    
    <section>
        <form method="post" name="exp11" id="exp11" action="index12.php" onsubmit="return check()" accept-charset="utf-8" style="padding: 5% 7.5%">
            <input type=hidden name="G13" value="0">
            <input type=hidden name="G14" value="0">
            <input type=hidden name="G15" value="0">
            <input type=hidden name="G16" value="0">
            <input type=hidden name="G17" value="0">
            <input type=hidden name="G18" value="0">
            <input type=hidden name="G19" value="0">
            <input type=hidden name="G21" value="0">
            <input type=hidden name="G22" value="0">
            <br>
            
            <b>G13. 請問在您隔離期間，會覺得自己與他人斷了連結嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G13" value="1">非常不覺得</label>
                <label><input type="radio" name="G13" value="2">不覺得</label>
                <label><input type="radio" name="G13" value="3">普通</label>
                <label><input type="radio" name="G13" value="4">覺得</label>
                <label><input type="radio" name="G13" value="5">非常覺得</label>
            </fieldset><br>

            <b>G14. 請問在您隔離期間，會覺得自己離死亡很近嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G14" value="1">非常不覺得</label>
                <label><input type="radio" name="G14" value="2">不覺得</label>
                <label><input type="radio" name="G14" value="3">普通</label>
                <label><input type="radio" name="G14" value="4">覺得</label>
                <label><input type="radio" name="G14" value="5">非常覺得</label>
            </fieldset><br>           

            <b>G15. 請問在您隔離期間，會覺得自己的個性變得很糟嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G15" value="1">非常不覺得</label>
                <label><input type="radio" name="G15" value="2">不覺得</label>
                <label><input type="radio" name="G15" value="3">普通</label>
                <label><input type="radio" name="G15" value="4">覺得</label>
                <label><input type="radio" name="G15" value="5">非常覺得</label>
            </fieldset><br>  

            <b>G16. 請問在您隔離期間，會覺得自己變得很脆弱嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G16" value="1">非常不覺得</label>
                <label><input type="radio" name="G16" value="2">不覺得</label>
                <label><input type="radio" name="G16" value="3">普通</label>
                <label><input type="radio" name="G16" value="4">覺得</label>
                <label><input type="radio" name="G16" value="5">非常覺得</label>
            </fieldset><br>       

            <b>G17. 請問在您隔離期間，會擔心自己的婚姻或感情嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G17" value="1">非常不擔心</label>
                <label><input type="radio" name="G17" value="2">不擔心</label>
                <label><input type="radio" name="G17" value="3">普通</label>
                <label><input type="radio" name="G17" value="4">擔心</label>
                <label><input type="radio" name="G17" value="5">非常擔心</label>
                <label><input type="radio" name="G17" value="6">沒有婚姻或感情</label>
            </fieldset><br>   

            <b>G18. 請問在您隔離期間，會擔心自己的工作嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G18" value="1">非常不擔心</label>
                <label><input type="radio" name="G18" value="2">不擔心</label>
                <label><input type="radio" name="G18" value="3">普通</label>
                <label><input type="radio" name="G18" value="4">擔心</label>
                <label><input type="radio" name="G18" value="5">非常擔心</label>
            </fieldset><br>  

            <b>G19. 請問在您隔離期間，會擔心家裡收入不夠嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G19" value="1">非常不擔心</label>
                <label><input type="radio" name="G19" value="2">不擔心</label>
                <label><input type="radio" name="G19" value="3">普通</label>
                <label><input type="radio" name="G19" value="4">擔心</label>
                <label><input type="radio" name="G19" value="5">非常擔心</label>
            </fieldset><br>
            
            <b>G20. 請問在您隔離期間，平均每天的經濟損失？（新台幣）</b>
            <select class="std" name="G20">
                <option value="0"></option>  
                <option value="1">0-299 元</option>
                <option value="2">300-999 元</option>
                <option value="3">1,000-1,499 元</option>
                <option value="4">1,500-2,999 元</option>
                <option value="5">3,000-5,999 元</option>
                <option value="6">6,000 元以上</option>
            </select><br>
            
            <b>G21. 在不察看時間的情況下，請問您知道今天星期幾嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G21" value="1" onclick="G211h()">知道</label>
                <label><input type="radio" name="G21" value="2" onclick="G211h()">不知道</label>
            </fieldset><br>
            
            <div id="G211" style="display: none">
            <b>G21-1. 今天是：</b>
            <select class="std" name="G21_1">
                <option value="0"></option>  
                <option value="1">星期一</option>
                <option value="2">星期二</option>
                <option value="3">星期三</option>
                <option value="4">星期四</option>
                <option value="5">星期五</option>
                <option value="6">星期六</option>
                <option value="7">星期日</option>
            </select><br>
            </div>
            
            <b>G22. 請問您的政府有提供隔離補償措施嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G22" value="1" onclick="G221h()">有</label>
                <label><input type="radio" name="G22" value="2" onclick="G221h()">沒有</label>
            </fieldset><br>
            
            <div id="G221" style="display: none">
            <b>G22-1.請問您滿意這項措施嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G22_1" value="1">非常不滿意</label>
                <label><input type="radio" name="G22_1" value="2">不滿意</label>
                <label><input type="radio" name="G22_1" value="3">普通</label>
                <label><input type="radio" name="G22_1" value="4">滿意</label>
                <label><input type="radio" name="G22_1" value="5">非常滿意</label>
            </fieldset><br>
            </div>
            
            <input name="submit" value="下一頁" type="submit"><br>
            
            <script>
                //檢查各題是否完整填答，若否則依題號報錯
                function check(){
                    var cG13    =getValue("G13");
                    var cG14    =getValue("G14");
                    var cG15    =getValue("G15");
                    var cG16    =getValue("G16");
                    var cG17    =getValue("G17");
                    var cG18    =getValue("G18");
                    var cG19    =getValue("G19");
                    var cG20    =document.exp11.G20.value;
                    var cG21    =getValue("G21");
                    var cG21_1  =document.exp11.G21_1.value;
                    var cG22    =getValue("G22");
                    var cG22_1  =getValue("G22_1");

                    var record=[], j=0;
                    if(cG13==0){record[j]="G13"; j++}
                    if(cG14==0){record[j]="G14"; j++}
                    if(cG15==0){record[j]="G15"; j++}
                    if(cG16==0){record[j]="G16"; j++}
                    if(cG17==0){record[j]="G17"; j++}
                    if(cG18==0){record[j]="G18"; j++}
                    if(cG19==0){record[j]="G19"; j++}
                    if(cG20==0){record[j]="G20"; j++}
                    if(cG21==0|(cG21==1&cG21_1==0)){record[j]="G21"; j++}
                    if(cG22==0|(cG22==1&cG22_1==0)){record[j]="G22"; j++}
                    
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
                
                function G211h(){
                    var g211=document.getElementById("G211");
                    var cG21=getValue("G21");
                    
                    if(cG21==1){
                        g211.style.display="block";                    
                    }else{
                        g211.style.display="none";
                        document.exp11.G21_1.value=0;
                    } 
                }
                
                function G221h(){
                    var g221=document.getElementById("G221");
                    var cG22=getValue("G22");
                    var itemG22_1=document.getElementsByName("G22_1");
                    
                    if(cG22==1){
                        g221.style.display="block";                    
                    }else{
                        g221.style.display="none";
                        for(var i=0, iLen=itemG22_1.length; i<iLen; i++){
                            itemG22_1[i].checked=false;
                        }
                    }
                }
            </script>
        </form>
    </section>
</body>
</html>
