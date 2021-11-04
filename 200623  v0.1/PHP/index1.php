<body style="font-family: Microsoft JhengHei">
    <h1>A. 基本狀況（一）</h1>   
    
    <section>    
        <form method="post" name="exp1" id="exp1" action="index2.php" onsubmit="return check()" accept-charset="utf-8" style="padding: 5%">
            <input type=hidden name="A3" value="0">
            <input type=hidden name="A4" value="0">
            <input type=hidden name="A5" value="0">
            <input type=hidden name="A6" value="0">            
                       
            <b>A1. Email:</b>
            <input type="email" name="A1" value="" placeholder="xxx123@example.com">
            <br>
            
            <b>A2. 請問您的出生年：</b>
            <b>西元 <input type="number" name="A2" value="" min="1900" max="2020"> 年</b>
            <br>
            
            <b>A3. 請問您的性別：</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="A3" value="1">男生</label>
                <label><input type="radio" name="A3" value="2">女生</label>
            </fieldset><br>
            
            <b>A4. 請問您目前的婚姻狀況是：</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="A4" value="1">未婚</label>
                <label><input type="radio" name="A4" value="2">已婚有偶</label>
                <label><input type="radio" name="A4" value="3">離婚</label>
                <label><input type="radio" name="A4" value="4">喪偶</label>
                <label><input type="radio" name="A4" value="5">其他</label>
            </fieldset><br>
            <b>A4-其他，請說明：</b>
            <input type="text" name="A4_o" value="">
            <br>
            
            <b>A5. 請問您正在進行居家／醫療機構／隔離場所隔離嗎？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="A5" value="1">是</label>
                <label><input type="radio" name="A5" value="2">否</label>
            </fieldset><br>
            
            <b>A5-1. 請問您從哪一天開始隔離的？（如果不確定可以容許有前後 2-3 天的誤差）</b>
            <input type="date" name="A5_1" value="">
            <br>
            
            <b>A5-2. 請問您知道您的隔離何時結束嗎？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="A5_2" value="1">是</label>
                <label><input type="radio" name="A5_2" value="2">否</label>
            </fieldset><br>

            <b>A5-3. 請問您待過哪些隔離地？（可複選）</b>
            <fieldset data-role="controlgroup">
                <label><input type="checkbox" name="A5_3[]" value="1">家中</label>
                <label><input type="checkbox" name="A5_3[]" value="2">政府安排的隔離所</label>
                <label><input type="checkbox" name="A5_3[]" value="3">醫院</label>
                <label><input type="checkbox" name="A5_3[]" value="4">其他</label>
            </fieldset><br>
            <b>A5-3-其他，請說明：</b>
            <input type="text" name="A5_3o" value="">
            <br>
           
            <b>A5-1. 請問您有被隔離過嗎？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="A5_4" value="1">有</label>
                <label><input type="radio" name="A5_4" value="2">沒有</label>
            </fieldset><br>

            <b>A5-2. 大約幾天前被隔離過？</b>
            <input type="number" name="A5_5" value="" min="0">
            <br>
           
            <b>A6. 請問您有做過新冠肺炎的篩檢嗎？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="A6" value="1">有</label>
                <label><input type="radio" name="A6" value="2">沒有</label>
            </fieldset><br>
           
            <b>A6-1. 請問檢測的結果為何？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="A6_1" value="1">陽性（確診）</label>
                <label><input type="radio" name="A6_1" value="2">陰性</label>
            </fieldset><br> 
           
            <b>A6-2. 請問您已從肺炎中康復了嗎？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="A6_2" value="1">已康復</label>
                <label><input type="radio" name="A6_2" value="2">未康復</label>
            </fieldset><br>    
           
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
            <select class="std" name="A8">
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
            <b>A8-其他，請說明：</b>
            <input type="text" name="A8_o" value="">
            <br>
           
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
            <select class="std" name="A10">
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
            <b>A10-其他，請說明：</b>
            <input type="text" name="A10_o" value="">
            <br>

            <br><input name="submit" value="下一頁" type="submit"><br>
        </form>
    </section>
</body>
