<?php
    header('Content-Type: text/html; charset=utf-8');
    $A1     =$_POST['A1'];
    $A2     =$_POST['A2'];
    $A3     =$_POST['A3'];
    $A4     =$_POST['A4'];
    $A4_o   =$_POST['A4_o'];
    $A5     =$_POST['A5'];
    $A5_1   =$_POST['A5_1'];
    $A5_2   =$_POST['A5_2'];
    $A5_3   =$_POST['A5_3'];
    $A5_3o  =$_POST['A5_3o'];
    $A5_4   =$_POST['A5_4'];
    $A5_5   =$_POST['A5_5'];
    $A6     =$_POST['A6'];
    $A6_1   =$_POST['A6_1'];
    $A6_2   =$_POST['A6_2'];
    $A7     =$_POST['A7'];
    $A8     =$_POST['A8'];
    $A8_o   =$_POST['A8_o'];
    $A9     =$_POST['A9'];
    $A10    =$_POST['A10'];
    $A10_o  =$_POST['A10_o'];

    $B1_a   =$_POST['B1_a'];
    $B1_b   =$_POST['B1_b'];
    $B1_c   =$_POST['B1_c'];
    $B2     =$_POST['B2'];
    $B2_1   =$_POST['B2_1'];
    $B3     =$_POST['B3'];
    $B3_1   =$_POST['B3_1'];
    $B3_1o  =$_POST['B3_1o'];

    $C1_a   =$_POST['C1_a'];
    $C1_b   =$_POST['C1_b'];
    $C1_c   =$_POST['C1_c'];
    $C1_d   =$_POST['C1_d'];
    $C1_e   =$_POST['C1_e'];
    $C1_f   =$_POST['C1_f'];
    $C2     =$_POST['C2'];
    $C3     =$_POST['C3'];
    $C4     =$_POST['C4'];
    $C4_o   =$_POST['C4_o'];
    $C5     =$_POST['C5'];
    $C6     =$_POST['C6'];
    $C7     =$_POST['C7'];
    $C7_1   =$_POST['C7_1'];
    $C8     =$_POST['C8'];
    $C8_1   =$_POST['C8_1'];
    $C9     =$_POST['C9'];
    $C9_1   =$_POST['C9_1'];
    $C10    =$_POST['C10'];
    $C11    =$_POST['C11'];
    $C11_1  =$_POST['C11_1'];
    $C11_2  =$_POST['C11_2'];
    $C12    =$_POST['C12'];
    $C13    =$_POST['C13'];
    $C14    =$_POST['C14'];
    $C15    =$_POST['C15'];
    $C16    =$_POST['C16'];
    $C17    =$_POST['C17'];
    $C18    =$_POST['C18'];
    $C18_1  =$_POST['C18_1'];
    $C18_2  =$_POST['C18_2'];
    $C18_3  =$_POST['C18_3'];
    $C18_3o =$_POST['C18_3o'];
    $C19    =$_POST['C19'];
    $C20    =$_POST['C20'];
    $C20_1  =$_POST['C20_1'];
    $C20_2  =$_POST['C20_2'];
    $C20_3  =$_POST['C20_3'];
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
        <form method="post" name="exp5" id="exp5" onsubmit="return check()" accept-charset="utf-8" style="padding: 5% 7.5%">
            <input type=hidden name="A1"    value="<?php echo htmlspecialchars($A1); ?>">
            <input type=hidden name="A2"    value="<?php echo htmlspecialchars($A2); ?>">
            <input type=hidden name="A3"    value="<?php echo htmlspecialchars($A3); ?>">
            <input type=hidden name="A4"    value="<?php echo htmlspecialchars($A4); ?>">
            <input type=hidden name="A4_o"  value="<?php echo htmlspecialchars($A4_o); ?>">
            <input type=hidden name="A5"    value="<?php echo htmlspecialchars($A5); ?>">
            <input type=hidden name="A5_1"  value="<?php echo htmlspecialchars($A5_1); ?>">
            <input type=hidden name="A5_2"  value="<?php echo htmlspecialchars($A5_2); ?>">
            <input type=hidden name="A5_3"  value="<?php echo htmlspecialchars($A5_3); ?>">
            <input type=hidden name="A5_3o" value="<?php echo htmlspecialchars($A5_3o); ?>">
            <input type=hidden name="A5_4"  value="<?php echo htmlspecialchars($A5_4); ?>">
            <input type=hidden name="A5_5"	value="<?php echo htmlspecialchars($A5_5); ?>">
            <input type=hidden name="A6"    value="<?php echo htmlspecialchars($A6); ?>">
            <input type=hidden name="A6_1"	value="<?php echo htmlspecialchars($A6_1); ?>">
            <input type=hidden name="A6_2"	value="<?php echo htmlspecialchars($A6_2); ?>">
            <input type=hidden name="A7"	value="<?php echo htmlspecialchars($A7); ?>">
            <input type=hidden name="A8"	value="<?php echo htmlspecialchars($A8); ?>">
            <input type=hidden name="A8_o"	value="<?php echo htmlspecialchars($A8_o); ?>">
            <input type=hidden name="A9"	value="<?php echo htmlspecialchars($A9); ?>">
            <input type=hidden name="A10"	value="<?php echo htmlspecialchars($A10); ?>">
            <input type=hidden name="A10_o"	value="<?php echo htmlspecialchars($A10_o); ?>">

            <input type=hidden name="B1_a"	value="<?php echo htmlspecialchars($B1_a); ?>">
            <input type=hidden name="B1_b"	value="<?php echo htmlspecialchars($B1_b); ?>">
            <input type=hidden name="B1_c"	value="<?php echo htmlspecialchars($B1_c); ?>">
            <input type=hidden name="B2"	value="<?php echo htmlspecialchars($B2); ?>">
            <input type=hidden name="B2_1"	value="<?php echo htmlspecialchars($B2_1); ?>">    
            <input type=hidden name="B3"	value="<?php echo htmlspecialchars($B3); ?>">
            <input type=hidden name="B3_1"  value="<?php echo htmlspecialchars($B3_1); ?>">
            <input type=hidden name="B3_1o"	value="<?php echo htmlspecialchars($B3_1o); ?>">

            <input type=hidden name="C1_a"	value="<?php echo htmlspecialchars($C1_a); ?>">
            <input type=hidden name="C1_b"	value="<?php echo htmlspecialchars($C1_b); ?>">
            <input type=hidden name="C1_c"	value="<?php echo htmlspecialchars($C1_c); ?>">
            <input type=hidden name="C1_d"	value="<?php echo htmlspecialchars($C1_d); ?>">
            <input type=hidden name="C1_e"	value="<?php echo htmlspecialchars($C1_e); ?>">
            <input type=hidden name="C1_f"	value="<?php echo htmlspecialchars($C1_f); ?>">            
            <input type=hidden name="C2"	value="<?php echo htmlspecialchars($C2); ?>">
            <input type=hidden name="C3"    value="<?php echo htmlspecialchars($C3); ?>">
            <input type=hidden name="C4"	value="<?php echo htmlspecialchars($C4); ?>">
            <input type=hidden name="C4_o"	value="<?php echo htmlspecialchars($C4_o); ?>">
            <input type=hidden name="C5"	value="<?php echo htmlspecialchars($C5); ?>">
            <input type=hidden name="C6"	value="<?php echo htmlspecialchars($C6); ?>">
            <input type=hidden name="C7"	value="<?php echo htmlspecialchars($C7); ?>">
            <input type=hidden name="C7_1"  value="<?php echo htmlspecialchars($C7_1); ?>">
            <input type=hidden name="C8"	value="<?php echo htmlspecialchars($C8); ?>">
            <input type=hidden name="C8_1"  value="<?php echo htmlspecialchars($C8_1); ?>">
            <input type=hidden name="C9"	value="<?php echo htmlspecialchars($C9); ?>">
            <input type=hidden name="C9_1"  value="<?php echo htmlspecialchars($C9_1); ?>">
            <input type=hidden name="C10"	value="<?php echo htmlspecialchars($C10); ?>">
            <input type=hidden name="C11"	value="<?php echo htmlspecialchars($C11); ?>">
            <input type=hidden name="C11_1"	value="<?php echo htmlspecialchars($C11_1); ?>">
            <input type=hidden name="C11_2"	value="<?php echo htmlspecialchars($C11_2); ?>">
            <input type=hidden name="C12"	value="<?php echo htmlspecialchars($C12); ?>">
            <input type=hidden name="C13"	value="<?php echo htmlspecialchars($C13); ?>">
            <input type=hidden name="C14"	value="<?php echo htmlspecialchars($C14); ?>">
            <input type=hidden name="C15"	value="<?php echo htmlspecialchars($C15); ?>">
            <input type=hidden name="C16"	value="<?php echo htmlspecialchars($C16); ?>">
            <input type=hidden name="C17"	value="<?php echo htmlspecialchars($C17); ?>">
            <input type=hidden name="C18"	value="<?php echo htmlspecialchars($C18); ?>">
            <input type=hidden name="C18_1"	value="<?php echo htmlspecialchars($C18_1); ?>">
            <input type=hidden name="C18_2"	value="<?php echo htmlspecialchars($C18_2); ?>">
            <input type=hidden name="C18_3"	value="<?php echo htmlspecialchars($C18_3); ?>">
            <input type=hidden name="C18_3o"value="<?php echo htmlspecialchars($C18_3o); ?>">
            <input type=hidden name="C19"	value="<?php echo htmlspecialchars($C19); ?>">
            <input type=hidden name="C20"	value="<?php echo htmlspecialchars($C20); ?>">
            <input type=hidden name="C20_1"	value="<?php echo htmlspecialchars($C20_1); ?>">
            <input type=hidden name="C20_2"	value="<?php echo htmlspecialchars($C20_2); ?>">
            <input type=hidden name="C20_3"	value="<?php echo htmlspecialchars($C20_3); ?>">
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
            <div id="normal" style="display: none">
            <div id="progress"      style="position: relative; width: 100%; height: 30px; background-color: grey">
            <div id="progress-bar"  style="position: absolute; width:  48%; height: 100%; background-color: orange">48%</div>
            </div><br><br></div>
            
            <div id="quarantining" style="display: none">
            <div id="progress"      style="position: relative; width: 100%; height: 30px; background-color: grey">
            <div id="progress-bar"  style="position: absolute; width:  35%; height: 100%; background-color: orange">35%</div>
            </div><br><br></div>

            <div id="quarantined" style="display: none">
            <div id="progress"      style="position: relative; width: 100%; height: 30px; background-color: grey">
            <div id="progress-bar"  style="position: absolute; width:  31%; height: 100%; background-color: orange">31%</div>
            </div><br><br></div>
            
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
                        document.getElementById("exp5").action="index6.php";
                        document.getElementById("exp5").submit();
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
                
                progress();
                
                function progress(){
                    var normal=document.getElementById("normal");
                    var quarantining=document.getElementById("quarantining");
                    var quarantined=document.getElementById("quarantined");
                    var cA5=document.exp5.A5.value;
                    var cA5_4=document.exp5.A5_4.value;
                    
                    if(cA5_4==1){
                        quarantined.style.display="block";
                    }else if(cA5==1){
                        quarantining.style.display="block";
                    }else{
                        normal.style.display="block";
                    }
                }
            </script>
        </form>
    </section>
</body>
</html>
