<body style="font-family: Microsoft JhengHei">
    <h1>B. 社會網絡及社會資源</h1>

    <section>
        <form method="post" name="exp2" id="exp2" action="index3.php" onsubmit="return check()" accept-charset="utf-8" style="padding: 5%">        
            <input type=hidden name="B1_a" value="0">
            <input type=hidden name="B1_b" value="0">
            <input type=hidden name="B1_c" value="0">
            <input type=hidden name="B3"   value="0">    
           
            <b>B1. 接下來想請問您有關生活方面不同的感受。以您現在的狀況來說，您常不常有以下的感覺。</b><br>
            <b>a. 覺得缺少人作伴</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="B1_a" value="1">從不</label>
                <label><input type="radio" name="B1_a" value="2">很少</label>
                <label><input type="radio" name="B1_a" value="3">有時</label>
                <label><input type="radio" name="B1_a" value="4">時常</label>
                <label><input type="radio" name="B1_a" value="5">很時常</label>
            </fieldset><br>
            
            <b>b. 覺得孤單</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="B1_b" value="1">從不</label>
                <label><input type="radio" name="B1_b" value="2">很少</label>
                <label><input type="radio" name="B1_b" value="3">有時</label>
                <label><input type="radio" name="B1_b" value="4">時常</label>
                <label><input type="radio" name="B1_b" value="5">很時常</label>
            </fieldset><br>
            
            <b>c. 覺得自己被排擠</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="B1_c" value="1">從不</label>
                <label><input type="radio" name="B1_c" value="2">很少</label>
                <label><input type="radio" name="B1_c" value="3">有時</label>
                <label><input type="radio" name="B1_c" value="4">時常</label>
                <label><input type="radio" name="B1_c" value="5">很時常</label>
            </fieldset><br>
            
            <b>B2. 以您現在的狀況來說，請問您平常一天裡面，從早到晚大概總共跟多少人接觸（包括講話、見面、打電話、寫信、透過網路，含同住家人，對方是認識或不認識的都算）？</b>
            <select class="std" name="B2">
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
            
            <b>B3.請問您平均每天多長時間戴口罩？</b>
            <fieldset data-role="controlgroup" data-type="horizontal">
                <label><input type="radio" name="B3" value="1">沒有</label>
                <label><input type="radio" name="B3" value="2">不到兩個小時</label>
                <label><input type="radio" name="B3" value="3">半天</label>
                <label><input type="radio" name="B3" value="4">整天</label>
            </fieldset><br>
           
            <b>B3-1.為什麼要戴口罩呢？（可複選）</b>
            <fieldset data-role="controlgroup">
                <label><input type="checkbox" name="B3_1[]" value="1">無特殊原因</label>
                <label><input type="checkbox" name="B3_1[]" value="2">擔心被他人傳染</label>
                <label><input type="checkbox" name="B3_1[]" value="3">擔心傳染他人</label>
                <label><input type="checkbox" name="B3_1[]" value="4">遵守規定</label>
                <label><input type="checkbox" name="B3_1[]" value="5">其他</label>
            </fieldset><br>
            <b>B3-1-其他，請說明：</b>
            <input type="text" name="B3_1o" value="">
            <br>

            <br><input name="submit" value="下一頁" type="submit"><br>
        </form>
    </section>
</body>
