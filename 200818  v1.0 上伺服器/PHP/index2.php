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
?>

<!doctype html>
<html>
<head>
    <title>Questionnaire B</title>
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
            <h1>B. 社會網絡及社會資源</h1>
        </div>
    </div>    
    
    <section>
        <form method="post" name="exp2" id="exp2" onsubmit="return check()" accept-charset="utf-8" style="padding: 5% 7.5%">
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
            
            <input type=hidden name="B1_a"  value="0">
            <input type=hidden name="B1_b"  value="0">
            <input type=hidden name="B1_c"  value="0">
            <input type=hidden name="B3"    value="0">    
            <br>
            <div id="normal" style="display: none">
            <div id="progress"      style="position: relative; width: 100%; height: 30px; background-color: grey">
            <div id="progress-bar"  style="position: absolute; width:  15%; height: 100%; background-color: orange">15%</div>
            </div><br><br></div>
            
            <div id="quarantining" style="display: none">
            <div id="progress"      style="position: relative; width: 100%; height: 30px; background-color: grey">
            <div id="progress-bar"  style="position: absolute; width:  13%; height: 100%; background-color: orange">13%</div>
            </div><br><br></div>

            <div id="quarantined" style="display: none">
            <div id="progress"      style="position: relative; width: 100%; height: 30px; background-color: grey">
            <div id="progress-bar"  style="position: absolute; width:  12%; height: 100%; background-color: orange">12%</div>
            </div><br><br></div>
        
            <b>B1. 接下來想請問您有關生活方面不同的感受。以您現在的狀況來說，您常不常有以下的感覺。</b><br><br>
            
            <b>a. 覺得缺少人作伴</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="B1_a" value="1">從不</label>
                <label><input type="radio" name="B1_a" value="2">很少</label>
                <label><input type="radio" name="B1_a" value="3">有時</label>
                <label><input type="radio" name="B1_a" value="4">時常</label>
                <label><input type="radio" name="B1_a" value="5">很時常</label>
            </fieldset><br>
            
            <b>b. 覺得孤單</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="B1_b" value="1">從不</label>
                <label><input type="radio" name="B1_b" value="2">很少</label>
                <label><input type="radio" name="B1_b" value="3">有時</label>
                <label><input type="radio" name="B1_b" value="4">時常</label>
                <label><input type="radio" name="B1_b" value="5">很時常</label>
            </fieldset><br>
            
            <b>c. 覺得自己被排擠</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="B1_c" value="1">從不</label>
                <label><input type="radio" name="B1_c" value="2">很少</label>
                <label><input type="radio" name="B1_c" value="3">有時</label>
                <label><input type="radio" name="B1_c" value="4">時常</label>
                <label><input type="radio" name="B1_c" value="5">很時常</label>
            </fieldset><br>
            
            <b>B2. 以您現在的狀況來說，請問您平常一天裡面，從早到晚大概總共跟多少人接觸（包括講話、見面、打電話、寫信、透過網路，含同住家人，對方是認識或不認識的都算）？</b>
            <select class="std" name="B2" onchange="B21h()">
                <option value="0"></option>  
                <option value="1">0 人</option>
                <option value="2">1-4 人</option>
                <option value="3">5-9 人</option>
                <option value="4">10-19 人</option>
                <option value="5">20-49 人</option>
                <option value="6">50-99 人</option>
                <option value="7">100 人以上</option>
                <option value="8">無法選擇</option>
            </select><br>
            
            <div id="B21" style="display: none">
            <b>B2-1. 請問這些人裡面大概有多少是您平常面對面接觸的？</b>
            <select class="std" name="B2_1">
                <option value="0"></option>  
                <option value="1">都是或幾乎都是</option>
                <option value="2">大部份是</option>
                <option value="3">大概一半</option>
                <option value="4">只有一些</option>
                <option value="5">都不是或幾乎都不是</option>
                <option value="6">無法選擇</option>  
            </select><br>
            </div>

            <b>B3.請問您平均每天多長時間戴口罩？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="B3" value="1" onclick="B31h()">沒有</label>
                <label><input type="radio" name="B3" value="2" onclick="B31h()">不到兩個小時</label>
                <label><input type="radio" name="B3" value="3" onclick="B31h()">半天</label>
                <label><input type="radio" name="B3" value="4" onclick="B31h()">整天</label>
            </fieldset>
           
            <div id="B31" style="display: none">
            <br><b>B3-1.為什麼要戴口罩呢？（可複選）</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="checkbox" name="B3_1[]" value="1" onclick="B31oh()">無特殊原因</label>
                <label><input type="checkbox" name="B3_1[]" value="2" onclick="B31oh()">擔心被他人傳染</label>
                <label><input type="checkbox" name="B3_1[]" value="3" onclick="B31oh()">擔心傳染他人</label>
                <label><input type="checkbox" name="B3_1[]" value="4" onclick="B31oh()">遵守規定</label>
                <label><input type="checkbox" name="B3_1[]" value="5" onclick="B31oh()">其他</label>
            </fieldset>
            </div>
            <div id="B31o" style="display: none">
            <b>B3-1-其他，請說明：</b>
            <input type="text" name="B3_1o" value="">
            <br>
            </div>
            
            <br><input name="submit" value="下一頁" type="submit"><br>
      
            <script>
                //檢查各題是否完整填答，若否則依題號報錯
                function check(){
                    var cB1_a=  getValue("B1_a");
                    var cB1_b=  getValue("B1_b");  
                    var cB1_c=  getValue("B1_c");
                    var cB2=    document.exp2.B2.value;
                    var cB2_1=  document.exp2.B2_1.value;
                    var cB3=    getValue("B3");
                    var cB3_1=  getValueM("B3_1[]");
                    var cB3_1o= document.exp2.B3_1o.value;

                    //運用max檢查多選是否包含「其他」
                    if(cB3_1!=0){var maxcB3_1=Math.max(...cB3_1);}

                    var record=[], j=0;
                    if(cB1_a==0){record[j]="B1-a"; j++}
                    if(cB1_b==0){record[j]="B1-b"; j++}
                    if(cB1_c==0){record[j]="B1-c"; j++}
                    if(cB2==0|(cB2>1&cB2<8&cB2_1==0)){record[j]="B2"; j++}
                    if(cB3==0|(cB3>1&cB3_1==0)|(cB3>1&maxcB3_1==5&cB3_1o=="")){record[j]="B3"; j++}
                    
                    if(j>0){
                        alert("您好，第"+record+"題尚未填答完畢唷！");
                        return false;
                    }else{
                        document.getElementById("exp2").action="index3.php";
                        document.getElementById("exp2").submit();
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

                function getValueM(name){
                    var items=document.getElementsByName(name);
                    
                    var record=[], j=0;
                    for(var i=0, iLen= items.length; i<iLen; i++){
                        if(items[i].checked){
                            //不return，要跑完迴圈收所有答案(多選不限項數)
                            record[j]=items[i].value;
                            j++; 
                        }
                    }
                    if(j>0){
                        return record;
                    }else{
                        return 0;
                    }
                }

                function B21h(){
                    var b21=document.getElementById("B21");
                    var cB2=document.exp2.B2.value;
                    var itemB2_1=document.getElementsByName("B2_1");
                    
                    if(cB2>1&cB2<8){
                        b21.style.display="block";
                    }else{
                        b21.style.display="none";
                        document.exp2.B2_1.value=0;
                    }
                }

                function B31h(){
                    var b31=document.getElementById("B31");
                    //注意：B3_1o是內層的內容，也會隨著B3的答案改變
                    var b31o=document.getElementById("B31o");
                    var cB3=getValue("B3");
                    var itemB3_1=document.getElementsByName("B3_1[]");
                    
                    if(cB3>1){
                        b31.style.display="block";
                    }else{
                        b31.style.display="none";
                        for(var i=0, iLen=itemB3_1.length; i<iLen; i++){
                            itemB3_1[i].checked=false;
                        }
                        b31o.style.display="none";
                        document.exp2.B3_1o.value="";
                    }
                }

                function B31oh(){
                    var b31o=document.getElementById("B31o");
                    var cB3_1=getValueM("B3_1[]");
                    if(cB3_1!=0){var maxcB3_1=Math.max(...cB3_1);}

                    if(maxcB3_1==5){
                        b31o.style.display="block";
                    }else{
                        b31o.style.display="none";
                        document.exp2.B3_1o.value="";
                    }
                }
                
                progress();
                
                function progress(){
                    var normal=document.getElementById("normal");
                    var quarantining=document.getElementById("quarantining");
                    var quarantined=document.getElementById("quarantined");
                    var cA5=document.exp2.A5.value;
                    var cA5_4=document.exp2.A5_4.value;
                    
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
