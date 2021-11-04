<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<!doctype html>
<html>
<head>
    <title>Questionnaire C1</title>
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
        <form method="post" name="exp3" id="exp3" action="index4.php" onsubmit="return check()" accept-charset="utf-8" style="padding: 5% 7.5%">
            <input type=hidden name="C3" value="0">
            <input type=hidden name="C7" value="0">
            <br>

            <b>C1. 請問您現在和誰住在一起：（請填入人數）</b><br><br>
            
            <div style="width: 30%; display: inline-block"><b>a. 長輩（祖／父母親）：</b></div>
            <div style="width: 30%; display: inline-block"><input type="number" name="C1_a" value="" min="0"></div>
            <br>
            <div style="width: 30%; display: inline-block"><b>b. 兄弟姊妹：</b></div>
            <div style="width: 30%; display: inline-block"><input type="number" name="C1_b" value="" min="0"></div>
            <br>
            <div style="width: 30%; display: inline-block"><b>c. 其他親戚：</b></div>
            <div style="width: 30%; display: inline-block"><input type="number" name="C1_c" value="" min="0"></div>
            <br>
            <div style="width: 30%; display: inline-block"><b>d. 配偶/伴侶：</b></div>
            <div style="width: 30%; display: inline-block"><input type="number" name="C1_d" value="" min="0"></div>
            <br>
            <div style="width: 30%; display: inline-block"><b>e. 小孩：</b></div>
            <div style="width: 30%; display: inline-block"><input type="number" name="C1_e" value="" min="0"></div>
            <br>
            <div style="width: 30%; display: inline-block"><b>f. 其他人士：</b></div>
            <div style="width: 30%; display: inline-block"><input type="number" name="C1_f" value="" min="0"></div>
            <br><br>
            
            <b>C2. 請問家裡目前平均每個月的總收入：（新台幣）</b>
            <select class="std" name="C2">
                <option value="0"></option>  
                <option value="1">0-9,999 元</option>
                <option value="2">10,000-29,999 元</option>
                <option value="3">30,000-49,999 元</option>
                <option value="4">50,000-99,999 元</option>
                <option value="5">100,000-199,999 元</option>
                <option value="6">200,000 元以上</option>
            </select><br>
            
            <b>C3. 請問目前家裡的收入來源為？（可複選）</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="checkbox" name="C3[]" value="1">父母</label>
                <label><input type="checkbox" name="C3[]" value="2">自己</label>
                <label><input type="checkbox" name="C3[]" value="3">配偶/伴侶</label>
                <label><input type="checkbox" name="C3[]" value="4">兄弟姊妹</label>
                <label><input type="checkbox" name="C3[]" value="5">其他親戚</label>
                <label><input type="checkbox" name="C3[]" value="6">機構補助</label>
                <label><input type="checkbox" name="C3[]" value="7">其他</label>
            </fieldset>

            <b>C4. 請問您的工作狀況是下列哪一項？</b>
            <select class="std" name="C4" onchange="C4oh()">
                <option value="0"></option>  
                <option value="1">有全職工作（每週 30 小時或以上）</option>
                <option value="2">有固定兼職工作</option>
                <option value="3">不固定（打零工）</option>
                <option value="4">為家庭事業工作，而且有領薪水</option>
                <option value="5">為家庭事業工作，但沒有領薪水</option>
                <option value="6">目前沒有工作 </option>
                <option value="7">學生／進修在學且沒有工作</option>
                <option value="8">學生／進修在學且有工作</option>
                <option value="9">學徒、受職業訓練者</option>
                <option value="10">已經退休</option>
                <option value="11">料理家務且沒有工作</option>
                <option value="12">高齡、身心障礙、生病不能工作</option>   
                <option value="13">服義務役或替代役</option>
                <option value="14">服研發替代役</option>
                <option value="15">無薪假／育嬰假／留職停薪</option>
                <option value="16">其他</option>      
            </select><br>
            <div id="C4o" style="display: none">
            <b>C4-其他，請說明：</b>
            <input type="text" name="C4_o" value="">
            <br>
            </div>
            
            <b>C5. 在您認識的人當中，請問有多少人需要居家／醫療機構／隔離場所隔離？</b>
            <input type="number" name="C5" value="" min="0">
            <br>
           
            <b>C6. 在您認識的人當中，請問有多少人確診武漢肺炎（新冠肺炎）？</b>
            <input type="number" name="C6" value="" min="0">
            <br>
            
            <b>C7. 請問您過去兩個星期內有去過醫療院所嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C7" value="1" onclick="C71h()">有</label>
                <label><input type="radio" name="C7" value="2" onclick="C71h()">沒有</label>
            </fieldset><br>
           
            <div id="C71" style="display: none">
            <b>C7-1. 承上，請問您去醫療院所是為了？（可複選）</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="checkbox" name="C7_1[]" value="1">自己看病</label>
                <label><input type="checkbox" name="C7_1[]" value="2">陪家人看病</label>
                <label><input type="checkbox" name="C7_1[]" value="3">探病</label>
                <label><input type="checkbox" name="C7_1[]" value="4">其他</label>
            </fieldset><br>
            </div>

            <div id="C8" style="display: none">
            <b>C8. <u>如果</u>您被要求隔離，您覺得親朋好友會在您需要幫忙的時候提供協助嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C8" value="1">一定不會</label>
                <label><input type="radio" name="C8" value="2">大概不會</label>
                <label><input type="radio" name="C8" value="3">大概會</label>
                <label><input type="radio" name="C8" value="4">一定會</label>
            </fieldset><br>
            </div>
           
            <div id="C81" style="display: none">
            <b>C8. 請問您覺得親朋好友在您需要幫忙的時候會提供足夠協助嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C8_1" value="1">一定不會</label>
                <label><input type="radio" name="C8_1" value="2">大概不會</label>
                <label><input type="radio" name="C8_1" value="3">大概會</label>
                <label><input type="radio" name="C8_1" value="4">一定會</label>
            </fieldset><br>
            </div>
           
            <div id="C9" style="display: none">
            <b>C9. <u>如果</u>您被要求隔離，您覺得防疫相關機構會在您需要幫助的時候，提供協助嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C9" value="1">一定不會</label>
                <label><input type="radio" name="C9" value="2">大概不會</label>
                <label><input type="radio" name="C9" value="3">大概會</label>
                <label><input type="radio" name="C9" value="4">一定會</label>
            </fieldset><br>
            </div>
           
            <div id="C91" style="display: none">
            <b>C9. 請問您覺得防疫相關機構會在您需要幫助的時候，提供協助嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C9_1" value="1">一定不會</label>
                <label><input type="radio" name="C9_1" value="2">大概不會</label>
                <label><input type="radio" name="C9_1" value="3">大概會</label>
                <label><input type="radio" name="C9_1" value="4">一定會</label>
            </fieldset><br>
            </div>
            
            <input name="submit" value="下一頁" type="submit"><br>    
               
            <script>
                //檢查各題是否完整填答，若否則依題號報錯
                function check(){
                    var cC1_a   =document.exp3.C1_a.value;
                    var cC1_b   =document.exp3.C1_b.value;
                    var cC1_c   =document.exp3.C1_c.value;
                    var cC1_d   =document.exp3.C1_d.value;
                    var cC1_e   =document.exp3.C1_e.value;
                    var cC1_f   =document.exp3.C1_f.value;
                    var cC2     =document.exp3.C2.value;
                    var cC3     =getValueM("C3[]");
                    var cC4     =document.exp3.C4.value;
                    var cC4_o   =document.exp3.C4_o.value;
                    var cC5     =document.exp3.C5.value; 
                    var cC6     =document.exp3.C6.value; 
                    var cC7     =getValue("C7");
                    var cC7_1   =getValueM("C7_1[]");
                    var cC8     =getValue("C8");
                    var cC8_1   =getValue("C8_1");
                    var cC9     =getValue("C9");
                    var cC9_1   =getValue("C9_1");

                    var record=[], j=0;
                    if(cC1_a==""){record[j]="C1-a"; j++}
                    if(cC1_b==""){record[j]="C1-b"; j++}
                    if(cC1_c==""){record[j]="C1-c"; j++}
                    if(cC1_d==""){record[j]="C1-d"; j++}
                    if(cC1_e==""){record[j]="C1-e"; j++}
                    if(cC1_f==""){record[j]="C1-f"; j++}        
                    if(cC2==0){record[j]="C2"; j++}
                    if(cC3==0){record[j]="C3"; j++}
                    if(cC4==0|(cC4==16&cC4_o=="")){record[j]="C4"; j++}
                    if(cC5==""){record[j]="C5"; j++}
                    if(cC6==""){record[j]="C6"; j++}
                    if(cC7==0|(cC7==1&cC7_1==0)){record[j]="C7"; j++}
                    if(cC8==0&cC8_1==0){record[j]="C8"; j++}
                    if(cC9==0&cC9_1==0){record[j]="C9"; j++}
                    
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
            
                function C4oh(){
                    var c4o=document.getElementById("C4o");
                    var cC4=document.exp3.C4.value;
                    
                    if(cC4==16){
                        c4o.style.display="block";
                    }else{
                        c4o.style.display="none";
                        document.exp3.C4_o.value="";
                    }
                }
            
                function C71h(){
                    var c71=document.getElementById("C71");
                    var cC7=getValue("C7");
                    var itemC7_1=document.getElementsByName("C7_1[]");
                    
                    if(cC7==1){
                        c71.style.display="block";
                    }else{
                        c71.style.display="none";
                        for(var i=0, iLen=itemC7_1.length; i<iLen; i++){
                            itemC7_1[i].checked=false;
                        }
                    }
                }
            
                //C8C9視前面的答案產生，在頁面生成時即需呼叫程式
                C8C9();
            
                function C8C9(){
                    var c8=document.getElementById("C8");
                    var c81=document.getElementById("C81");
                    var c9=document.getElementById("C9");
                    var c91=document.getElementById("C91");
                    var cA5=getValue("A5");
                    var itemC8=document.getElementsByName("C8");
                    var itemC8_1=document.getElementsByName("C8_1");
                    var itemC9=document.getElementsByName("C9");
                    var itemC9_1=document.getElementsByName("C9_1");
                    
                    if(cA5==1){
                        c81.style.display="block";
                        c91.style.display="block";
                        c8.style.display="none";
                        for(var i=0, iLen=itemC8.length; i<iLen; i++){
                            itemC8[i].checked=false;
                        }
                        c9.style.display="none";
                        for(var i=0, iLen=itemC9.length; i<iLen; i++){
                            itemC9[i].checked=false;
                        }
                    }else{
                        c8.style.display="block";
                        c9.style.display="block";
                        c81.style.display="none";
                        for(var i=0, iLen=itemC8_1.length; i<iLen; i++){
                            itemC8_1[i].checked=false;
                        }
                        c91.style.display="none";
                        for(var i=0, iLen=itemC9_1.length; i<iLen; i++){
                            itemC9_1[i].checked=false;
                        }
                    }
                }
            </script>
        </form>
    </section>
</body>
</html>
