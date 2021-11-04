<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<!doctype html>
<html>
<head>
    <title>Questionnaire A</title>
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
            <h1>A. 基本狀況（一）</h1>
        </div>
    </div>    
    
    <section>
        <form method="post" name="exp1" id="exp1" onsubmit="return check()" accept-charset="utf-8" style="padding: 5% 7.5%">
            <input type=hidden name="A3" value="0">
            <input type=hidden name="A4" value="0">
            <input type=hidden name="A5" value="0">
            <input type=hidden name="A6" value="0">
            <br>
            <div id="progress"      style="position: relative; width: 100%; height: 30px; background-color: grey">
            <div id="progress-bar"  style="position: absolute; width:   8%; height: 100%; background-color: orange">8%</div>
            </div><br><br>
            
            <b>A1. Email:</b>
            <input type="email" name="A1" value="" placeholder="xxx123@example.com">
            <br>
            
            <b>A2. 請問您的出生年：</b>
            <input type="number" name="A2" value="" min="1900" max="2020" placeholder="請填西元年">
            <br>
            
            <b>A3. 請問您的性別：</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="A3" value="1">男生</label>
                <label><input type="radio" name="A3" value="2">女生</label>
            </fieldset><br>
            
            <b>A4. 請問您目前的婚姻狀況是：</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="A4" value="1" onclick="A4oh()">未婚</label>
                <label><input type="radio" name="A4" value="2" onclick="A4oh()">已婚有偶</label>
                <label><input type="radio" name="A4" value="3" onclick="A4oh()">離婚</label>
                <label><input type="radio" name="A4" value="4" onclick="A4oh()">喪偶</label>
                <label><input type="radio" name="A4" value="5" onclick="A4oh()">其他</label>
            </fieldset>
            <div id="A4o" style="display: none">
            <b>A4-其他，請說明：</b>
            <input type="text" name="A4_o" value="">
            <br>
            </div>
            
            <br><b>A5. 請問您正在進行居家／醫療機構／隔離場所隔離嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="A5" value="1" onclick="A51h()">是</label>
                <label><input type="radio" name="A5" value="2" onclick="A51h()">否</label>
            </fieldset><br>
            
            <div id="A51" style="display: none">
            <b>A5-1. 請問您從哪一天開始隔離的？（如果不確定可以容許有前後 2-3 天的誤差）</b>
            <input type="date" name="A5_1" value="">
            <br>
            </div>
            
            <div id="A52" style="display: none">
            <b>A5-2. 請問您知道您的隔離何時結束嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="A5_2" value="1">是</label>
                <label><input type="radio" name="A5_2" value="2">否</label>
            </fieldset><br>
            </div>
            
            <div id="A53" style="display: none">
            <b>A5-3. 請問您待過哪些隔離地？（可複選）</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="checkbox" name="A5_3[]" value="1" onclick="A53oh()">家中</label>
                <label><input type="checkbox" name="A5_3[]" value="2" onclick="A53oh()">政府安排的隔離所</label>
                <label><input type="checkbox" name="A5_3[]" value="3" onclick="A53oh()">醫院</label>
                <label><input type="checkbox" name="A5_3[]" value="4" onclick="A53oh()">其他</label>
            </fieldset>
            </div>
            <div id="A53o" style="display: none">
            <b>A5-3-其他，請說明：</b>
            <input type="text" name="A5_3o" value="">
            <br>
            </div>
           
            <div id="A54" style="display: none">
            <b>A5-1. 請問您有被隔離過嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="A5_4" value="1" onclick="A55h()">有</label>
                <label><input type="radio" name="A5_4" value="2" onclick="A55h()">沒有</label>
            </fieldset><br>
            </div>

            <div id="A55" style="display: none">
            <b>A5-2. 大約幾天前被隔離過？</b>
            <input type="number" name="A5_5" value="" min="1">
            <br>
            </div>
            
            <b>A6. 請問您有做過新冠肺炎的篩檢嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="A6" value="1" onclick="A61h()">有</label>
                <label><input type="radio" name="A6" value="2" onclick="A61h()">沒有</label>
            </fieldset><br>
           
            <div id="A61" style="display: none">
            <b>A6-1. 請問檢測的結果為何？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="A6_1" value="1" onclick="A62h()">陽性（確診）</label>
                <label><input type="radio" name="A6_1" value="2" onclick="A62h()">陰性</label>
            </fieldset><br>
            </div>
           
            <div id="A62" style="display: none">
            <b>A6-2. 請問您已從肺炎中康復了嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="A6_2" value="1">已康復</label>
                <label><input type="radio" name="A6_2" value="2">未康復</label>
            </fieldset><br>
            </div>
            
            <b>A7. 請問您覺得現在所居住的地方是都市或鄉村？</b>
            <select class="std" name="A7">
                <option value="0"></option>  
                <option value="1">大都市</option>
                <option value="2">大都市旁的郊區</option>
                <option value="3">小都市或小鎮</option>
                <option value="4">農村地區</option>
                <option value="5">獨立農家</option>
            </select><br>
            
            <b>A8. 請問您目前的宗教信仰？</b>
            <select class="std" name="A8" onchange="A8oh()">
                <option value="0"></option>  
                <option value="1">基督新教</option>
                <option value="2">天主教</option>
                <option value="3">其他基督宗教</option>
                <option value="4">回教（伊斯蘭教）</option>
                <option value="5">印度教</option>
                <option value="6">佛教</option>
                <option value="7">道教</option>
                <option value="8">神道教</option>
                <option value="9">一貫道</option>
                <option value="10">民間信仰</option>
                <option value="11">無宗教信仰</option>
                <option value="12">其他</option>               
            </select><br>
            <div id="A8o" style="display: none">
            <b>A8-其他，請說明：</b>
            <input type="text" name="A8_o" value="">
            <br>
            </div>
            
            <b>A9. 請問您大概多久參加一次宗教活動（進香、禪修、做禮拜、靈修聚會、宗教志工服務）？</b>
            <select class="std" name="A9">
                <option value="0"></option>  
                <option value="1">每星期好幾次</option>
                <option value="2">每星期一次</option>
                <option value="3">一個月兩三次</option>
                <option value="4">一個月一次</option>
                <option value="5">一年好幾次</option>
                <option value="6">一年一次</option>
                <option value="7">幾乎沒有（比一年一次更少）</option>
                <option value="8">從未參加</option>
            </select><br>
           
            <b>A10. 教育程度：</b>
            <select class="std" name="A10" onchange="A10oh()">
                <option value="0"></option>  
                <option value="1">小學</option>   
                <option value="2">國（初）中</option>
                <option value="3">高中或高職</option>
                <option value="4">專科</option>
                <option value="5">大學</option>
                <option value="6">碩士</option>
                <option value="7">博士</option>
                <option value="8">其他</option>
            </select><br>
            <div id="A10o" style="display: none">
            <b>A10-其他，請說明：</b>
            <input type="text" name="A10_o" value="">
            <br>
            </div>
            
            <br><input name="submit" value="下一頁" type="submit"><br>
            
            <script>
                //檢查各題是否完整填答，若否則依題號報錯
                function check(){
                    var cA1     =document.exp1.A1.value;
                    var cA2     =document.exp1.A2.value;  
                    var cA3     =getValue("A3");
                    var cA4     =getValue("A4");
                    var cA4_o   =document.exp1.A4_o.value;
                    var cA5     =getValue("A5");
                    var cA5_1   =document.exp1.A5_1.value;
                    var cA5_2   =getValue("A5_2");
                    var cA5_3   =getValueM("A5_3[]");
                    var cA5_3o  =document.exp1.A5_3o.value;
                    var cA5_4   =getValue("A5_4");
                    var cA5_5   =document.exp1.A5_5.value;
                    var cA6     =getValue("A6");
                    var cA6_1   =getValue("A6_1");
                    var cA6_2   =getValue("A6_2");
                    var cA7     =document.exp1.A7.value;
                    var cA8     =document.exp1.A8.value;
                    var cA8_o   =document.exp1.A8_o.value;
                    var cA9     =document.exp1.A9.value; 
                    var cA10    =document.exp1.A10.value; 
                    var cA10_o  =document.exp1.A10_o.value;
                    
                    //運用max檢查多選是否包含「其他」
                    if(cA5_3!=0){var maxA5_3=Math.max(...cA5_3);}
                    
                    var record=[], j=0;
                    if(cA1==""){record[j]="A1"; j++}
                    if(cA2==""){record[j]="A2"; j++}
                    if(cA3==0){record[j]="A3"; j++}
                    if(cA4==0|(cA4==5&cA4_o=="")){record[j]="A4"; j++}
                    if(cA5==0|(cA5==1&cA5_1=="")|(cA5==1&cA5_2==0)|(cA5==1&cA5_3==0)|(cA5==1&maxA5_3==4&cA5_3o=="")|(cA5==2&cA5_4==0)|(cA5==2&cA5_4==1&cA5_5=="")){record[j]="A5"; j++}
                    if(cA6==0|(cA6==1&cA6_1==0)|(cA6==1&cA6_1==1&cA6_2==0)){record[j]="A6"; j++}
                    if(cA7==0){record[j]="A7"; j++}
                    if(cA8==0|(cA8==12&cA8_o=="")){record[j]="A8"; j++}
                    if(cA9==0){record[j]="A9"; j++}
                    if(cA10==0|(cA10==8&cA10_o=="")){record[j]="A10"; j++}

                    if(j>0){
                        alert("您好，第"+record+"題尚未填答完畢唷！");
                        return false;
                    }else{
                        document.getElementById("exp1").action="index2.php";
                        document.getElementById("exp1").submit();
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

                function A4oh(){
                    var a4o=document.getElementById("A4o");
                    var cA4=getValue("A4");
                    
                    if(cA4==5){
                        a4o.style.display="block";
                    }else{
                        a4o.style.display="none";
                        document.exp1.A4_o.value="";
                    }
                }

                function A51h(){
                    var a51=document.getElementById("A51");
                    var a52=document.getElementById("A52");
                    var a53=document.getElementById("A53");
                    var a53o=document.getElementById("A53o");
                    var a54=document.getElementById("A54");
                    var a55=document.getElementById("A55");
                    var cA5=getValue("A5")
                    var itemA5_2=document.getElementsByName("A5_2");
                    var itemA5_3=document.getElementsByName("A5_3[]");
                    var itemA5_4=document.getElementsByName("A5_4");

                    if(cA5==1){
                        //A5_3和A5_3o有連動關係，故只呈現外層
                        a51.style.display="block";
                        a52.style.display="block";
                        a53.style.display="block";
                        
                        //A5_4和A5_5所有答案均清空
                        a54.style.display="none";
                        for(var i=0, iLen=itemA5_4.length; i<iLen; i++){
                            itemA5_4[i].checked=false;
                        }
                        a55.style.display="none";     
                        document.exp1.A5_5.value="";
                    }else{
                        //A5_4和A5_5有連動關係，故只呈現外層
                        a54.style.display="block";
                        
                        //A5_1~A5_3o所有答案均清空
                        a51.style.display="none";
                        document.exp1.A5_1.value="";
                        a52.style.display="none";
                        for(var i=0, iLen=itemA5_2.length; i<iLen; i++){
                            itemA5_2[i].checked=false;
                        }
                        a53.style.display="none";
                        for(var i=0, iLen=itemA5_3.length; i<iLen; i++){
                            itemA5_3[i].checked=false;
                        }
                        a53o.style.display="none";
                        document.exp1.A5_3o.value="";
                    }
                }

                function A53oh(){
                    var a53o=document.getElementById("A53o");
                    var cA5_3=getValueM("A5_3[]");
                    if(cA5_3!=0){var maxcA5_3=Math.max(...cA5_3);}

                    if(maxcA5_3==4){
                        a53o.style.display="block";
                    }else{
                        a53o.style.display="none";
                        document.exp1.A5_3o.value="";
                    }
                }

                function A55h(){
                    var a55=document.getElementById("A55");
                    var cA5_4=getValue("A5_4");
                    
                    if(cA5_4==1){
                        a55.style.display="block";
                    }else{
                        a55.style.display="none";
                        document.exp1.A5_5.value="";
                    }
                }

                function A61h(){
                    var a61=document.getElementById("A61");
                    //注意：A6_2是內層的內容，也會隨著A6的答案改變
                    var a62=document.getElementById("A62");
                    var cA6=getValue("A6");
                    var itemA6_1=document.getElementsByName("A6_1");
                    var itemA6_2=document.getElementsByName("A6_2");
                    
                    if(cA6==1){
                        a61.style.display="block";
                    }else{
                        a61.style.display="none";
                        for(var i=0, iLen=itemA6_1.length; i<iLen; i++){
                            itemA6_1[i].checked=false;
                        }
                        a62.style.display="none";
                        for(var i=0, iLen=itemA6_2.length; i<iLen; i++){
                            itemA6_2[i].checked=false;
                        }
                    }
                }

                function A62h(){
                    var a62=document.getElementById("A62");
                    var cA6_1=getValue("A6_1");
                    var itemA6_2=document.getElementsByName("A6_2");
                    
                    if(cA6_1==1){
                        a62.style.display="block";
                    }else{
                        a62.style.display="none";
                        for(var i=0, iLen=itemA6_2.length; i<iLen; i++){
                            itemA6_2[i].checked=false;
                        }
                    }
                }

                function A8oh(){
                    var a8o=document.getElementById("A8o");
                    var cA8=document.exp1.A8.value;
                    
                    if(cA8==12){
                        a8o.style.display="block";
                    }else{
                        a8o.style.display="none";
                        document.exp1.A8_o.value="";
                    }
                }

                function A10oh(){
                    var a10o=document.getElementById("A10o");
                    var cA10=document.exp1.A10.value;
                    
                    if(cA10==8){
                        a10o.style.display="block";
                    }else{
                        a10o.style.display="none";
                        document.exp1.A10_o.value="";
                    }
                }
            </script>
        </form>
    </section>
</body>
</html>
