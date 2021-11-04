<body style="font-family: Microsoft JhengHei">
    <h1>C. 基本狀況（二）</h1>
    
    <section>
        <form method="post" name="exp3" id="exp3" action="index4.php" onsubmit="return check()" accept-charset="utf-8" style="padding: 5%">
            <input type=hidden name="C3" value="0">
            <input type=hidden name="C7" value="0">
                
            <b>C1. 請問您現在和誰住在一起：</b><br>
            <b>a. 長輩（祖／父母親）：</b>
            <input type="number" name="C1_a" value="" min="0"> <b>位</b>
            <br>
            <b>b. 兄弟姊妹：</b>
            <input type="number" name="C1_b" value="" min="0"> <b>位</b>
            <br>
            <b>c. 其他親戚：</b>
            <input type="number" name="C1_c" value="" min="0"> <b>位</b>
            <br>
            <b>d. 配偶/伴侶：</b>
            <input type="number" name="C1_d" value="" min="0"> <b>位</b>
            <br>
            <b>e. 小孩：</b>
            <input type="number" name="C1_e" value="" min="0"> <b>位</b>
            <br>
            <b>f. 其他人士：</b>
            <input type="number" name="C1_f" value="" min="0"> <b>位</b>
            <br>
            
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
            <fieldset data-role="controlgroup">
                <label><input type="checkbox" name="C3[]" value="1">父母</label>
                <label><input type="checkbox" name="C3[]" value="2">自己</label>
                <label><input type="checkbox" name="C3[]" value="3">配偶/伴侶</label>
                <label><input type="checkbox" name="C3[]" value="4">兄弟姊妹</label>
                <label><input type="checkbox" name="C3[]" value="5">其他親戚</label>
                <label><input type="checkbox" name="C3[]" value="6">機構補助</label>
                <label><input type="checkbox" name="C3[]" value="7">其他</label>
            </fieldset><br>

            <b>C4. 請問您的工作狀況是下列哪一項？</b>
            <select class="std" name="C4">
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
            <b>C4-其他，請說明：</b>
            <input type="text" name="C4_o" value="">
            <br>
           
            <b>C5. 在您認識的人當中，請問有多少人需要居家／醫療機構／隔離場所隔離？</b>
            <input type="number" name="C5" value="" min="0"> <b>位</b>
            <br>
           
            <b>C6. 在您認識的人當中，請問有多少人確診武漢肺炎（新冠肺炎）？</b>
            <input type="number" name="C6" value="" min="0"> <b>位</b>
            <br>
            
            <b>C7. 請問您過去兩個星期內有去過醫療院所嗎？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="C7" value="1">有</label>
                <label><input type="radio" name="C7" value="2">沒有</label>
            </fieldset><br>
           
            <b>C7-1. 承上，請問您去醫療院所是為了？（可複選）</b>
            <fieldset data-role="controlgroup">
                <label><input type="checkbox" name="C7_1[]" value="1">自己看病</label>
                <label><input type="checkbox" name="C7_1[]" value="2">陪家人看病</label>
                <label><input type="checkbox" name="C7_1[]" value="3">探病</label>
                <label><input type="checkbox" name="C7_1[]" value="4">其他</label>
            </fieldset><br>
        
            <b>C8. <u>如果</u>您被要求隔離，您覺得親朋好友會在您需要幫忙的時候提供協助嗎？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="C8" value="1">一定不會</label>
                <label><input type="radio" name="C8" value="2">大概不會</label>
                <label><input type="radio" name="C8" value="3">大概會</label>
                <label><input type="radio" name="C8" value="4">一定會</label>
            </fieldset><br>
        
            <b>C8. 請問您覺得親朋好友在您需要幫忙的時候會提供足夠協助嗎？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="C8_1" value="1">一定不會</label>
                <label><input type="radio" name="C8_1" value="2">大概不會</label>
                <label><input type="radio" name="C8_1" value="3">大概會</label>
                <label><input type="radio" name="C8_1" value="4">一定會</label>
            </fieldset><br>
        
            <b>C9. <u>如果</u>您被要求隔離，您覺得防疫相關機構會在您需要幫助的時候，提供協助嗎？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="C9" value="1">一定不會</label>
                <label><input type="radio" name="C9" value="2">大概不會</label>
                <label><input type="radio" name="C9" value="3">大概會</label>
                <label><input type="radio" name="C9" value="4">一定會</label>
            </fieldset><br>
        
            <b>C9. 請問您覺得防疫相關機構會在您需要幫助的時候，提供協助嗎？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="C9_1" value="1">一定不會</label>
                <label><input type="radio" name="C9_1" value="2">大概不會</label>
                <label><input type="radio" name="C9_1" value="3">大概會</label>
                <label><input type="radio" name="C9_1" value="4">一定會</label>
            </fieldset><br>
        
            <br><input name="submit" value="下一頁" type="submit"><br>   
        </form>
    </section>
</body>
