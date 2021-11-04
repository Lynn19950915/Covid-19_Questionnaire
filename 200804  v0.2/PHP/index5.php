<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<!doctype html>
<html>
<head>
    <title>Questionnaire C3</title>
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
            <h1>C. 基本狀況（二）</h1>
        </div>
    </div>
    
    <section>
        <form method="post" name="exp5" id="exp5" action="index6.php" onsubmit="return check()" accept-charset="utf-8" style="padding: 5% 7.5%">
            <input type=hidden name="C21_a" value="0">
            <input type=hidden name="C21_b" value="0">
            <input type=hidden name="C21_c" value="0">
            <input type=hidden name="C21_d" value="0">
            <input type=hidden name="C21_e" value="0">
            <input type=hidden name="C21_f" value="0">
            <input type=hidden name="C21_g" value="0">
            <input type=hidden name="C21_h" value="0">
            <input type=hidden name="C21_i" value="0">
            <input type=hidden name="C21_j" value="0">
            <br>
            
            <b>C21. 請問您認為下列的特徵符不符合您自己的個性？</b><br><br>
            
            <b>我覺得我自己：</b><br><br>

            <b>a. 比較放不開</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C21_a" value="1">非常不符合</label>
                <label><input type="radio" name="C21_a" value="2">不符合</label>
                <label><input type="radio" name="C21_a" value="3">無所謂符不符合</label>
                <label><input type="radio" name="C21_a" value="4">符合</label>
                <label><input type="radio" name="C21_a" value="5">非常符合</label>
            </fieldset><br>
            
            <b>b. 比較容易信任別人</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C21_b" value="1">非常不符合</label>
                <label><input type="radio" name="C21_b" value="2">不符合</label>
                <label><input type="radio" name="C21_b" value="3">無所謂符不符合</label>
                <label><input type="radio" name="C21_b" value="4">符合</label>
                <label><input type="radio" name="C21_b" value="5">非常符合</label>
            </fieldset><br>
            
            <b>c. 工作有始有終</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C21_c" value="1">非常不符合</label>
                <label><input type="radio" name="C21_c" value="2">不符合</label>
                <label><input type="radio" name="C21_c" value="3">無所謂符不符合</label>
                <label><input type="radio" name="C21_c" value="4">符合</label>
                <label><input type="radio" name="C21_c" value="5">非常符合</label>
            </fieldset><br>
            
            <b>d. 懂得放鬆且會處理壓力</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C21_d" value="1">非常不符合</label>
                <label><input type="radio" name="C21_d" value="2">不符合</label>
                <label><input type="radio" name="C21_d" value="3">無所謂符不符合</label>
                <label><input type="radio" name="C21_d" value="4">符合</label>
                <label><input type="radio" name="C21_d" value="5">非常符合</label>
            </fieldset><br>
            
            <b>e. 想像力豐富</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C21_e" value="1">非常不符合</label>
                <label><input type="radio" name="C21_e" value="2">不符合</label>
                <label><input type="radio" name="C21_e" value="3">無所謂符不符合</label>
                <label><input type="radio" name="C21_e" value="4">符合</label>
                <label><input type="radio" name="C21_e" value="5">非常符合</label>
            </fieldset><br>
            
            <b>f. 外向、擅於社交</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C21_f" value="1">非常不符合</label>
                <label><input type="radio" name="C21_f" value="2">不符合</label>
                <label><input type="radio" name="C21_f" value="3">無所謂符不符合</label>
                <label><input type="radio" name="C21_f" value="4">符合</label>
                <label><input type="radio" name="C21_f" value="5">非常符合</label>
            </fieldset><br>
            
            <b>g. 比較會挑人毛病</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C21_g" value="1">非常不符合</label>
                <label><input type="radio" name="C21_g" value="2">不符合</label>
                <label><input type="radio" name="C21_g" value="3">無所謂符不符合</label>
                <label><input type="radio" name="C21_g" value="4">符合</label>
                <label><input type="radio" name="C21_g" value="5">非常符合</label>
            </fieldset><br>
            
            <b>h. 比較懶</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C21_h" value="1">非常不符合</label>
                <label><input type="radio" name="C21_h" value="2">不符合</label>
                <label><input type="radio" name="C21_h" value="3">無所謂符不符合</label>
                <label><input type="radio" name="C21_h" value="4">符合</label>
                <label><input type="radio" name="C21_h" value="5">非常符合</label>
            </fieldset><br>
            
            <b>i. 容易緊張</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C21_i" value="1">非常不符合</label>
                <label><input type="radio" name="C21_i" value="2">不符合</label>
                <label><input type="radio" name="C21_i" value="3">無所謂符不符合</label>
                <label><input type="radio" name="C21_i" value="4">符合</label>
                <label><input type="radio" name="C21_i" value="5">非常符合</label>
            </fieldset><br>
            
            <b>j. 藝術方面的興趣比較少</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C21_j" value="1">非常不符合</label>
                <label><input type="radio" name="C21_j" value="2">不符合</label>
                <label><input type="radio" name="C21_j" value="3">無所謂符不符合</label>
                <label><input type="radio" name="C21_j" value="4">符合</label>
                <label><input type="radio" name="C21_j" value="5">非常符合</label>
            </fieldset><br>
            
            <input name="submit" value="下一頁" type="submit"><br>
            
            <script>
                //檢查各題是否完整填答，若否則依題號報錯
                function check(){
                    var cC21_a  =getValue("C21_a");
                    var cC21_b  =getValue("C21_b");
                    var cC21_c  =getValue("C21_c");
                    var cC21_d  =getValue("C21_d");
                    var cC21_e  =getValue("C21_e");
                    var cC21_f  =getValue("C21_f");
                    var cC21_g  =getValue("C21_g");
                    var cC21_h  =getValue("C21_h");
                    var cC21_i  =getValue("C21_i");
                    var cC21_j  =getValue("C21_j");
                    
                    var record=[], j=0;
                    if(cC21_a==0){record[j]="C21-a"; j++}
                    if(cC21_b==0){record[j]="C21-b"; j++}
                    if(cC21_c==0){record[j]="C21-c"; j++}
                    if(cC21_d==0){record[j]="C21-d"; j++}
                    if(cC21_e==0){record[j]="C21-e"; j++}
                    if(cC21_f==0){record[j]="C21-f"; j++}
                    if(cC21_g==0){record[j]="C21-g"; j++}
                    if(cC21_h==0){record[j]="C21-h"; j++}
                    if(cC21_i==0){record[j]="C21-i"; j++}
                    if(cC21_j==0){record[j]="C21-j"; j++}
                    
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
