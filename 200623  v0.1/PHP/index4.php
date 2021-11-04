<body style="font-family: Microsoft JhengHei">
    <h1>C. 基本狀況（二）</h1>
    
    <section>
        <form method="post" name="exp4" id="exp4" action="index5.php" onsubmit="return check()" accept-charset="utf-8" style="padding: 5%">  
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
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="C11" value="1">有</label>
                <label><input type="radio" name="C11" value="2">沒有</label>
            </fieldset><br>
            <b>a.地點：</b>
            <input type="text" name="C11_1" value="">
            <br>
            <b>b.時間：</b>
            <input type="date" name="C11_2" value="">
            <br>
        
            <b>C12. 請問您現在每日的網路使用時間有因為新冠肺炎的流行而改變嗎？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
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
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="C15" value="1">非常不透明</label>
                <label><input type="radio" name="C15" value="2">不透明</label>
                <label><input type="radio" name="C15" value="3">普通</label>
                <label><input type="radio" name="C15" value="4">透明</label>
                <label><input type="radio" name="C15" value="5">非常透明</label>
            </fieldset><br>
           
            <b>C16. 請問您覺得您的醫療用品充足嗎？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="C16" value="1">非常不充足</label>
                <label><input type="radio" name="C16" value="2">不充足</label>
                <label><input type="radio" name="C16" value="3">普通</label>
                <label><input type="radio" name="C16" value="4">充足</label>
                <label><input type="radio" name="C16" value="5">非常充足</label>
            </fieldset><br>
           
            <b>C17. 請問您覺得您的物資（糧食、其他民生用品）充足嗎？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="C17" value="1">非常不充足</label>
                <label><input type="radio" name="C17" value="2">不充足</label>
                <label><input type="radio" name="C17" value="3">普通</label>
                <label><input type="radio" name="C17" value="4">充足</label>
                <label><input type="radio" name="C17" value="5">非常充足</label>
            </fieldset><br>
           
            <b>C18. 請問您的居住地目前有出現瘋狂採買的現象嗎？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="C18" value="1">有</label>
                <label><input type="radio" name="C18" value="2">沒有</label>
                <label><input type="radio" name="C18" value="3">不知道</label>
            </fieldset><br>
           
            <b>C18-1. 請問您覺得這個現象的瘋狂程度？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="C18_1" value="1">稍微瘋狂</label>
                <label><input type="radio" name="C18_1" value="2">普通瘋狂</label>
                <label><input type="radio" name="C18_1" value="3">非常瘋狂</label>
            </fieldset><br>
        
            <b>C18-2. 請問您有加入這個熱潮嗎？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="C18_2" value="1">有</label>
                <label><input type="radio" name="C18_2" value="2">沒有</label>
            </fieldset><br>
        
            <b>C18-3. 請問你主要搶購了些什麼？（可複選）</b>
            <fieldset data-role="controlgroup">
                <label><input type="checkbox" name="C18_3[]" value="1">醫療用品（例酒精、口罩）</label>
                <label><input type="checkbox" name="C18_3[]" value="2">糧食</label>
                <label><input type="checkbox" name="C18_3[]" value="3">其他民生必需用品（如衛生紙）</label>
                <label><input type="checkbox" name="C18_3[]" value="4">其他</label>
            </fieldset><br>
        
            <b>C18-3-其他，請說明：</b>
            <input type="text" name="C18_3o" value="">
            <br>
            
            <b>C19. 就您的印象而言，近一星期中，平均有幾天太陽可以曬進家中？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="C19" value="1">幾乎沒有</label>
                <label><input type="radio" name="C19" value="2">1-3 天</label>
                <label><input type="radio" name="C19" value="3">3-5 天</label>
                <label><input type="radio" name="C19" value="4">幾乎每天</label>
                <label><input type="radio" name="C19" value="5">不清楚</label>
            </fieldset><br>
           
            <b>C20. 疫情開始至今，因應政策或工作單位要求，你是否需要在家工作：</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="C20" value="1">是</label>
                <label><input type="radio" name="C20" value="2">否</label>
            </fieldset><br> 
           
            <b>C20-1. 以下問題，中間點表示為您過去平均每日所花的<u>工作時間</u>，試向左或向右拖移來表示您現在隔離這段期間平均每日所需的工作時間，向左拖移表示變少，向右拖移則表示增加。</b><br>
            <b>花費時間少</b><input type="range" name="C20_1" class="ui-hidden-accessible" data-mini="true" min="0" max="10" value="5"><b>花費時間多</b>
            <br>
        
            <b>C20-2. 以下問題，中間點表示為您過去平均每日能完成的<u>工作量</u>，試向左或向右拖移來表示您現在隔離這段期間平均每日所能完成的工作量，向左拖移表示變少，向右拖移則表示增加。</b><br>
            <b>完成量少</b><input type="range" name="C20_2" class="ui-hidden-accessible" data-mini="true" min="0" max="10" value="5"><b>完成量多</b>
            <br> 
           
            <b>C20-3.請問您喜歡這個因為防疫而在家工作的經驗嗎？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="C20_3" value="1">非常不喜歡</label>
                <label><input type="radio" name="C20_3" value="2">不喜歡</label>
                <label><input type="radio" name="C20_3" value="3">普通</label>
                <label><input type="radio" name="C20_3" value="4">喜歡</label>
                <label><input type="radio" name="C20_3" value="5">非常喜歡</label>
            </fieldset><br>
            
            <br><input name="submit" value="下一頁" type="submit"><br>   
        </form>
    </section>
</body>
