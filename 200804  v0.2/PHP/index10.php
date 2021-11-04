<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<!doctype html>
<html>
<head>
    <title>Questionnaire G1</title>
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
        <form method="post" name="exp10" id="exp10" action="index11.php" onsubmit="return check()" accept-charset="utf-8" style="padding: 5% 7.5%">        
            <input type=hidden name="G1"  value="0">
            <input type=hidden name="G2"  value="0">
            <input type=hidden name="G3"  value="0">
            <input type=hidden name="G4"  value="0">
            <input type=hidden name="G5"  value="0">
            <input type=hidden name="G6"  value="0">
            <input type=hidden name="G8"  value="0">
            <input type=hidden name="G9"  value="0">
            <input type=hidden name="G10" value="0">
            <input type=hidden name="G11" value="0">
            <input type=hidden name="G12" value="0">
            <br>
            
            <b>G1. 請問您認為自己是高風險感染群嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G1" value="1">完全不認為</label>
                <label><input type="radio" name="G1" value="2">有點不認為</label>
                <label><input type="radio" name="G1" value="3">有點認為</label>
                <label><input type="radio" name="G1" value="4">完全認為</label>
            </fieldset><br>

            <b>G2. 請問您覺得自身的隔離對社會有幫助嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G2" value="1">非常沒幫助</label>
                <label><input type="radio" name="G2" value="2">沒幫助</label>
                <label><input type="radio" name="G2" value="3">普通</label>
                <label><input type="radio" name="G2" value="4">有幫助</label>
                <label><input type="radio" name="G2" value="5">非常有幫助</label>
            </fieldset><br>

            <b>G3. 當您知道必須被隔離的時候，請問您會感到內疚或自責嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G3" value="1">非常不覺得</label>
                <label><input type="radio" name="G3" value="2">不覺得</label>
                <label><input type="radio" name="G3" value="3">普通</label>
                <label><input type="radio" name="G3" value="4">覺得</label>
                <label><input type="radio" name="G3" value="5">非常覺得</label>
            </fieldset><br>

            <b>G4. 當您知道必須被隔離的時候，請問您會感到憤怒嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G4" value="1">非常不覺得</label>
                <label><input type="radio" name="G4" value="2">不覺得</label>
                <label><input type="radio" name="G4" value="3">普通</label>
                <label><input type="radio" name="G4" value="4">覺得</label>
                <label><input type="radio" name="G4" value="5">非常覺得</label>
            </fieldset><br>

            <b>G5. 當您知道必須被隔離的時候，請問您會感到無助嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G5" value="1">非常不覺得</label>
                <label><input type="radio" name="G5" value="2">不覺得</label>
                <label><input type="radio" name="G5" value="3">普通</label>
                <label><input type="radio" name="G5" value="4">覺得</label>
                <label><input type="radio" name="G5" value="5">非常覺得</label>
            </fieldset><br>          

            <b>G6. 請問您會覺得未來渺茫嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G6" value="1">非常不渺茫</label>
                <label><input type="radio" name="G6" value="2">不渺茫</label>
                <label><input type="radio" name="G6" value="3">普通</label>
                <label><input type="radio" name="G6" value="4">渺茫</label>
                <label><input type="radio" name="G6" value="5">非常渺茫</label>
            </fieldset><br>
            
            <div id="G7" style="display: none">
            <b>G7. <u>如果</u>得到新冠肺炎，請問您會擔心後遺症嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G7" value="1">非常不擔心</label>
                <label><input type="radio" name="G7" value="2">不擔心</label>
                <label><input type="radio" name="G7" value="3">普通</label>
                <label><input type="radio" name="G7" value="4">擔心</label>
                <label><input type="radio" name="G7" value="5">非常擔心</label>
            </fieldset><br>
            </div>

            <div id="G71" style="display: none">
            <b>G7. 請問您會擔心新冠肺炎的後遺症嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G7_1" value="1">非常不擔心</label>
                <label><input type="radio" name="G7_1" value="2">不擔心</label>
                <label><input type="radio" name="G7_1" value="3">普通</label>
                <label><input type="radio" name="G7_1" value="4">擔心</label>
                <label><input type="radio" name="G7_1" value="5">非常擔心</label>
            </fieldset><br>
            </div>

            <b>G8. 請問您會害怕讓別人知道自己被隔離嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G8" value="1">非常不害怕</label>
                <label><input type="radio" name="G8" value="2">不害怕</label>
                <label><input type="radio" name="G8" value="3">普通</label>
                <label><input type="radio" name="G8" value="4">害怕</label>
                <label><input type="radio" name="G8" value="5">非常害怕</label>
            </fieldset><br> 

            <b>G9. 請問在您隔離期間，會害怕走出自己房間嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G9" value="1">非常不害怕</label>
                <label><input type="radio" name="G9" value="2">不害怕</label>
                <label><input type="radio" name="G9" value="3">普通</label>
                <label><input type="radio" name="G9" value="4">害怕</label>
                <label><input type="radio" name="G9" value="5">非常害怕</label>
            </fieldset><br> 

            <b>G10. 請問在您隔離期間，會擔心給家人帶來麻煩嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G10" value="1">非常不擔心</label>
                <label><input type="radio" name="G10" value="2">不擔心</label>
                <label><input type="radio" name="G10" value="3">普通</label>
                <label><input type="radio" name="G10" value="4">擔心</label>
                <label><input type="radio" name="G10" value="5">非常擔心</label>
            </fieldset><br> 

            <b>G11. 請問在您隔離期間，除了家人以外，會擔心給朋友造成麻煩嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G11" value="1">非常不擔心</label>
                <label><input type="radio" name="G11" value="2">不擔心</label>
                <label><input type="radio" name="G11" value="3">普通</label>
                <label><input type="radio" name="G11" value="4">擔心</label>
                <label><input type="radio" name="G11" value="5">非常擔心</label>
            </fieldset><br>   

            <b>G12. 請問在您隔離期間，會擔心給不認識的人帶來困擾嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="G12" value="1">非常不擔心</label>
                <label><input type="radio" name="G12" value="2">不擔心</label>
                <label><input type="radio" name="G12" value="3">普通</label>
                <label><input type="radio" name="G12" value="4">擔心</label>
                <label><input type="radio" name="G12" value="5">非常擔心</label>
            </fieldset><br>

            <input name="submit" value="下一頁" type="submit"><br>
            
            <script>
                //檢查各題是否完整填答，若否則依題號報錯
                function check(){
                    var cG1     =getValue("G1");
                    var cG2     =getValue("G2");
                    var cG3     =getValue("G3");
                    var cG4     =getValue("G4");
                    var cG5     =getValue("G5");
                    var cG6     =getValue("G6");
                    var cG7     =getValue("G7");
                    var cG7_1   =getValue("G7_1");
                    var cG8     =getValue("G8");
                    var cG9     =getValue("G9");
                    var cG10    =getValue("G10");
                    var cG11    =getValue("G11");
                    var cG12    =getValue("G12");

                    var record=[], j=0;
                    if(cG1==0){record[j]="G1"; j++}
                    if(cG2==0){record[j]="G2"; j++}
                    if(cG3==0){record[j]="G3"; j++}
                    if(cG4==0){record[j]="G4"; j++}
                    if(cG5==0){record[j]="G5"; j++}
                    if(cG6==0){record[j]="G6"; j++}
                    if(cG7==0&cG7_1==0){record[j]="G7"; j++}
                    if(cG8==0){record[j]="G8"; j++}
                    if(cG9==0){record[j]="G9"; j++}
                    if(cG10==0){record[j]="G10"; j++}
                    if(cG11==0){record[j]="G11"; j++}
                    if(cG12==0){record[j]="G12"; j++}

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

                //G7視前面的答案產生，在頁面生成時即需呼叫程式
                G7G71();

                function G7G71(){
                    var g7=document.getElementById("G7");
                    var g71=document.getElementById("G71");               
                    var cA6=getValue("A6");
                    var itemG7=document.getElementsByName("G7");
                    var itemG7_1=document.getElementsByName("G7_1");
                    
                    if(cA6==1){
                        g71.style.display="block";
                        g7.style.display="none";
                        for(var i=0, iLen=itemG7.length; i<iLen; i++){
                            itemG7[i].checked=false;
                        }      
                    }else{
                        g7.style.display="block";
                        g71.style.display="none";
                        for(var i=0, iLen=itemG7_1.length; i<iLen; i++){
                            itemG7_1[i].checked=false;
                        }
                    }
                }
            </script>
        </form>
    </section>
</body>
</html>
