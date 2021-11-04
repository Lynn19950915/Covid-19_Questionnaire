<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<!doctype html>
<html>
<head>
    <title>Questionnaire C2</title>
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
        <form method="post" name="exp4" id="exp4" action="index5.php" onsubmit="return check()" accept-charset="utf-8" style="padding: 5% 7.5%">
            <input type=hidden name="C11" value="0">
            <input type=hidden name="C12" value="0">
            <input type=hidden name="C15" value="0">
            <input type=hidden name="C16" value="0">
            <input type=hidden name="C17" value="0">
            <input type=hidden name="C18" value="0">
            <input type=hidden name="C19" value="0">
            <input type=hidden name="C20" value="0">
            
            <b>C10. 請問您的居住城市？</b>
            <input type="text" name="C10" value="">
            <br>
           
            <b>C11. 請問您過去一個月有在現居地以外的國家或地區居住、旅遊、出差嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C11" value="1" onclick="C111h()">有</label>
                <label><input type="radio" name="C11" value="2" onclick="C111h()">沒有</label>
            </fieldset>
        
            <div id="C111" style="display: none">
            <b>C11-a. 地點：</b>
            <input type="text" name="C11_1" value="">
            <b>C11-b. 時間：</b>
            <input type="date" name="C11_2" value="">
            </div>
            
            <br><b>C12. 請問您現在每日的網路使用時間有因為新冠肺炎的流行而改變嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C12" value="1">明顯減少</label>
                <label><input type="radio" name="C12" value="2">有減少</label>
                <label><input type="radio" name="C12" value="3">沒有改變</label>
                <label><input type="radio" name="C12" value="4">有增加</label>
                <label><input type="radio" name="C12" value="5">明顯增加</label>
            </fieldset><br>
            
            <b>C13. 請問您最近一年來，多常使用社群網站或通訊軟體（臉書 Facebook、部落格、YouTube、Line、Skype、WeChat 等) 和人聊天、聯絡感情、一起玩遊戲、分享影音或影片等？</b>
            <select class="std" name="C13">
                <option value="0"></option>  
                <option value="1">每天好幾次</option>
                <option value="2">幾乎每天</option>
                <option value="3">每個禮拜兩三次</option>
                <option value="4">每個月兩三次</option>
                <option value="5">每個月一次或更少</option>
                <option value="6">都沒有</option>     
            </select><br>
        
            <b>C14.請問您最近一年來，多常透過網路（上網）買賣東西、辦事情或工作（瀏覽或查詢資訊、收發 EMAIL、上網繳稅、買賣股票、住宿訂房、買機票等）？</b>
            <select class="std" name="C14">
                <option value="0"></option>  
                <option value="1">每天好幾次</option>
                <option value="2">幾乎每天</option>
                <option value="3">每個禮拜兩三次</option>
                <option value="4">每個月兩三次</option>
                <option value="5">每個月一次或更少</option>
                <option value="6">都沒有</option>     
            </select><br>
           
            <b>C15. 請問您覺得您國家政府防疫相關的訊息透明嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C15" value="1">非常不透明</label>
                <label><input type="radio" name="C15" value="2">不透明</label>
                <label><input type="radio" name="C15" value="3">普通</label>
                <label><input type="radio" name="C15" value="4">透明</label>
                <label><input type="radio" name="C15" value="5">非常透明</label>
            </fieldset><br>
           
            <b>C16. 請問您覺得您的醫療用品充足嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C16" value="1">非常不充足</label>
                <label><input type="radio" name="C16" value="2">不充足</label>
                <label><input type="radio" name="C16" value="3">普通</label>
                <label><input type="radio" name="C16" value="4">充足</label>
                <label><input type="radio" name="C16" value="5">非常充足</label>
            </fieldset><br>
           
            <b>C17. 請問您覺得您的物資（糧食、其他民生用品）充足嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C17" value="1">非常不充足</label>
                <label><input type="radio" name="C17" value="2">不充足</label>
                <label><input type="radio" name="C17" value="3">普通</label>
                <label><input type="radio" name="C17" value="4">充足</label>
                <label><input type="radio" name="C17" value="5">非常充足</label>
            </fieldset><br>
            
            <b>C18. 請問您的居住地目前有出現瘋狂採買的現象嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C18" value="1" onclick="C181h()">有</label>
                <label><input type="radio" name="C18" value="2" onclick="C181h()">沒有</label>
                <label><input type="radio" name="C18" value="3" onclick="C181h()">不知道</label>
            </fieldset><br>
            
            <div id="C181" style="display: none">
            <b>C18-1. 請問您覺得這個現象的瘋狂程度？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C18_1" value="1">稍微瘋狂</label>
                <label><input type="radio" name="C18_1" value="2">普通瘋狂</label>
                <label><input type="radio" name="C18_1" value="3">非常瘋狂</label>
            </fieldset><br>
            </div>
            
            <div id="C182" style="display: none">
            <b>C18-2. 請問您有加入這個熱潮嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C18_2" value="1" onclick="C183h()">有</label>
                <label><input type="radio" name="C18_2" value="2" onclick="C183h()">沒有</label>
            </fieldset><br>
            </div>
            
            <div id="C183" style="display: none">
            <b>C18-3. 請問你主要搶購了些什麼？（可複選）</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="checkbox" name="C18_3[]" value="1" onclick="C183oh()">醫療用品（例酒精、口罩）</label>
                <label><input type="checkbox" name="C18_3[]" value="2" onclick="C183oh()">糧食</label>
                <label><input type="checkbox" name="C18_3[]" value="3" onclick="C183oh()">其他民生必需用品（如衛生紙）</label>
                <label><input type="checkbox" name="C18_3[]" value="4" onclick="C183oh()">其他</label>
            </fieldset>
            </div>
            <div id="C183o" style="display: none">
            <b>C18-3-其他，請說明：</b>
            <input type="text" data-clear-btn="true" name="C18_3o" value="">
            <br>
            </div>
           
            <b>C19. 就您的印象而言，近一星期中，平均有幾天太陽可以曬進家中？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C19" value="1">幾乎沒有</label>
                <label><input type="radio" name="C19" value="2">1-3 天</label>
                <label><input type="radio" name="C19" value="3">3-5 天</label>
                <label><input type="radio" name="C19" value="4">幾乎每天</label>
                <label><input type="radio" name="C19" value="5">不清楚</label>
            </fieldset><br>
           
            <b>C20. 疫情開始至今，因應政策或工作單位要求，你是否需要在家工作：</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C20" value="1" onclick="C201h()">是</label>
                <label><input type="radio" name="C20" value="2" onclick="C201h()">否</label>
            </fieldset><br> 
           
            <div id="C201" style="display: none">
            <b>C20-1. 以下問題，中間點表示為您過去平均每日所花的<u>工作時間</u>，試向左或向右拖移來表示您現在隔離這段期間平均每日所需的工作時間，向左拖移表示變少，向右拖移則表示增加。</b><br><br>
            <div style="width: 20%; display: inline-block; text-align: center"><b>花費時間少</b></div>
            <div style="width: 55%; display: inline-block"><input type="range" class="ui-hidden-accessible" data-mini="true" name="C20_1" min="0" max="10" value="5"></div>   
            <div style="width: 20%; display: inline-block; text-align: center"><b>花費時間多</b></div>
            <br><br>
            </div>
           
            <div id="C202" style="display: none">
            <b>C20-2. 以下問題，中間點表示為您過去平均每日能完成的<u>工作量</u>，試向左或向右拖移來表示您現在隔離這段期間平均每日所能完成的工作量，向左拖移表示變少，向右拖移則表示增加。</b><br><br>
            <div style="width: 20%; display: inline-block; text-align: center"><b>完成量少</b></div>
            <div style="width: 55%; display: inline-block"><input type="range" class="ui-hidden-accessible" data-mini="true" name="C20_2" min="0" max="10" value="5"></div>   
            <div style="width: 20%; display: inline-block; text-align: center"><b>完成量多</b></div>
            <br><br>
            </div>    
           
            <div id="C203" style="display: none">
            <b>C20-3. 請問您喜歡這個因為防疫而在家工作的經驗嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="C20_3" value="1">非常不喜歡</label>
                <label><input type="radio" name="C20_3" value="2">不喜歡</label>
                <label><input type="radio" name="C20_3" value="3">普通</label>
                <label><input type="radio" name="C20_3" value="4">喜歡</label>
                <label><input type="radio" name="C20_3" value="5">非常喜歡</label>
            </fieldset><br>
            </div>           
           
            <input name="submit" value="下一頁" type="submit"><br>            
               
            <script>
                //檢查各題是否完整填答，若否則依題號報錯
                function check(){
                    var cC10    =document.exp4.C10.value;
                    var cC11    =getValue("C11");
                    var cC11_1  =document.exp4.C11_1.value; 
                    var cC11_2  =document.exp4.C11_2.value;
                    var cC12    =getValue("C12");
                    var cC13    =document.exp4.C13.value;
                    var cC14    =document.exp4.C14.value;
                    var cC15    =getValue("C15");
                    var cC16    =getValue("C16");
                    var cC17    =getValue("C17");
                    var cC18    =getValue("C18");
                    var cC18_1  =getValue("C18_1");
                    var cC18_2  =getValue("C18_2");
                    var cC18_3  =getValueM("C18_3[]");
                    var cC18_3o =document.exp4.C18_3o.value;
                    var cC19    =getValue("C19");
                    var cC20    =getValue("C20");
                    var cC20_1  =document.exp4.C20_1.value;
                    var cC20_2  =document.exp4.C20_2.value;
                    var cC20_3  =getValue("C20_3");
                
                    //運用max檢查多選是否包含「其他」
                    if(cC18_3!=0){var maxcC18_3=Math.max(...cC18_3);}

                    var record=[], j=0;
                    if(cC10==""){record[j]="C10"; j++}
                    if(cC11==0|(cC11==1&cC11_1=="")|(cC11==1&cC11_2=="")){record[j]="C11"; j++}
                    if(cC12==0){record[j]="C12"; j++}
                    if(cC13==0){record[j]="C13"; j++}
                    if(cC14==0){record[j]="C14"; j++}
                    if(cC15==0){record[j]="C15"; j++}
                    if(cC16==0){record[j]="C16"; j++}
                    if(cC17==0){record[j]="C17"; j++}
                    if(cC18==0|(cC18==1&cC18_1==0)|(cC18==1&cC18_2==0)|(cC18_2==1&cC18_3==0)|(cC18_2==1&maxcC18_3==4&cC18_3o=="")){record[j]="C18"; j++}
                    if(cC19==0){record[j]="C19"; j++}
                    if(cC20==0|(cC20==1&cC20_3==0)){record[j]="C20"; j++}
                    
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
            
                function C111h(){
                    var c111=document.getElementById("C111");
                    var cC11=getValue("C11");
                    
                    if(cC11==1){
                        c111.style.display="block";                    
                    }else{
                        c111.style.display="none";
                        document.exp4.C11_1.value="";
                        document.exp4.C11_2.value="";
                    }
                }
            
                function C181h(){
                    var c181=document.getElementById("C181");
                    var c182=document.getElementById("C182");
                    var c183=document.getElementById("C183");
                    var c183o=document.getElementById("C183o");
                    var cC18=getValue("C18");
                    var itemC18_1=document.getElementsByName("C18_1")
                    var itemC18_2=document.getElementsByName("C18_2")
                    var itemC18_3=document.getElementsByName("C18_3[]")
                    
                    if(cC18==1){
                        //C18_2和C18_3有連動關係，故只呈現外層
                        c181.style.display="block";
                        c182.style.display="block";                    
                    }else{
                        //C18_1~C18_3o所有答案均清空
                        c181.style.display="none";
                        for(var i=0, iLen=itemC18_1.length; i<iLen; i++){
                            itemC18_1[i].checked=false;
                        }
                        c182.style.display="none";
                        for(var i=0, iLen=itemC18_2.length; i<iLen; i++){
                            itemC18_2[i].checked=false;
                        }
                        c183.style.display="none";
                        for(var i=0, iLen=itemC18_3.length; i<iLen; i++){
                            itemC18_3[i].checked=false;
                        }
                        c183o.style.display="none";
                        document.exp4.C18_3o.value="";
                    }
                }
            
                function C183h(){
                    var c183=document.getElementById("C183");
                    //注意：C18_3o是內層的內容，也會隨著C18_2的答案改變
                    var c183o=document.getElementById("C183o");
                    var cC18_2=getValue("C18_2");
                    var itemC18_3=document.getElementsByName("C18_3[]");

                    if(cC18_2==1){
                        //C18_3和C18_3o有連動關係，故只呈現外層
                        c183.style.display="block";                   
                    }else{
                        c183.style.display="none";
                        for(var i=0, iLen=itemC18_3.length; i<iLen; i++){
                            itemC18_3[i].checked=false;
                        }
                        c183o.style.display="none";
                        document.exp4.C18_3o.value="";
                    }
                }
            
                function C183oh(){
                    var c183o=document.getElementById("C183o");
                    var cC18_3=getValueM("C18_3[]");             
                    if(cC18_3!=0){var maxcC18_3=Math.max(...cC18_3);}

                    if(maxcC18_3==4){
                        c183o.style.display="block";
                    }else{
                        c183o.style.display="none";
                        document.exp4.C18_3o.value="";
                    }
                }
            
                function C201h(){
                    var c201=document.getElementById("C201");
                    var c202=document.getElementById("C202");
                    var c203=document.getElementById("C203");
                    var cC20=getValue("C20");
                    var itemC20_3=document.getElementsByName("C20_3");
                    
                    if(cC20==1){
                        c201.style.display="block";
                        c202.style.display="block";
                        c203.style.display="block";
                    }else{
                        c201.style.display="none";
                        document.exp4.C20_1.value="";
                        c202.style.display="none";
                        document.exp4.C20_2.value="";
                        c203.style.display="none";
                        for(var i=0, iLen=itemC20_3.length; i<iLen; i++){
                            itemC20_3[i].checked=false;
                        }
                    }
                }          
            </script>
        </form>
    </section>
</body>
</html>
