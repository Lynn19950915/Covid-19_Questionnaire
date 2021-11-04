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
    $C21_a  =$_POST['C21_a'];
    $C21_b  =$_POST['C21_b'];
    $C21_c  =$_POST['C21_c'];
    $C21_d  =$_POST['C21_d'];
    $C21_e  =$_POST['C21_e'];
    $C21_f  =$_POST['C21_f'];
    $C21_g  =$_POST['C21_g'];
    $C21_h  =$_POST['C21_h'];
    $C21_i  =$_POST['C21_i'];
    $C21_j  =$_POST['C21_j'];

    $D1     =$_POST['D1'];
    $D2     =$_POST['D2'];
    $D3     =$_POST['D3'];
    $D4     =$_POST['D4'];
    $D5     =$_POST['D5'];
    $D6     =$_POST['D6'];
    $D7     =$_POST['D7'];
    $D8     =$_POST['D8'];
    $D9     =$_POST['D9'];
    $D10    =$_POST['D10'];
    $D11    =$_POST['D11'];
    $D12    =$_POST['D12'];
    $D13    =$_POST['D13'];
    $D14    =$_POST['D14'];

    $E1     =$_POST['E1'];
    $E2     =$_POST['E2'];
    $E3     =$_POST['E3'];
    $E4     =$_POST['E4'];
    $E5     =$_POST['E5'];
    $E6     =$_POST['E6'];
    $E7     =$_POST['E7'];
    $E8     =$_POST['E8'];
    $E9     =$_POST['E9'];
    $E10    =$_POST['E10'];
    $E11    =$_POST['E11'];
    $E12    =$_POST['E12'];
    $E13    =$_POST['E13'];
    $E14    =$_POST['E14'];
?>

<!doctype html>
<html>
<head>
    <title>Questionnaire E2</title>
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
            <h1>E. 生活品質</h1>
        </div>
    </div>
    
    <section>
        <form method="post" name="exp8" id="exp8" onsubmit="return check()" accept-charset="utf-8" style="padding: 5% 7.5%">
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
            <input type=hidden name="C21_a" value="<?php echo htmlspecialchars($C21_a); ?>">
            <input type=hidden name="C21_b" value="<?php echo htmlspecialchars($C21_b); ?>">
            <input type=hidden name="C21_c" value="<?php echo htmlspecialchars($C21_c); ?>">
            <input type=hidden name="C21_d" value="<?php echo htmlspecialchars($C21_d); ?>">
            <input type=hidden name="C21_e" value="<?php echo htmlspecialchars($C21_e); ?>">
            <input type=hidden name="C21_f" value="<?php echo htmlspecialchars($C21_f); ?>">
            <input type=hidden name="C21_g" value="<?php echo htmlspecialchars($C21_g); ?>">
            <input type=hidden name="C21_h" value="<?php echo htmlspecialchars($C21_h); ?>">
            <input type=hidden name="C21_i" value="<?php echo htmlspecialchars($C21_i); ?>">
            <input type=hidden name="C21_j" value="<?php echo htmlspecialchars($C21_j); ?>">

            <input type=hidden name="D1"    value="<?php echo htmlspecialchars($D1); ?>">
            <input type=hidden name="D2"    value="<?php echo htmlspecialchars($D2); ?>">
            <input type=hidden name="D3"    value="<?php echo htmlspecialchars($D3); ?>">
            <input type=hidden name="D4"    value="<?php echo htmlspecialchars($D4); ?>">
            <input type=hidden name="D5"    value="<?php echo htmlspecialchars($D5); ?>">
            <input type=hidden name="D6"    value="<?php echo htmlspecialchars($D6); ?>">
            <input type=hidden name="D7"    value="<?php echo htmlspecialchars($D7); ?>">
            <input type=hidden name="D8"    value="<?php echo htmlspecialchars($D8); ?>">
            <input type=hidden name="D9"    value="<?php echo htmlspecialchars($D9); ?>">
            <input type=hidden name="D10"   value="<?php echo htmlspecialchars($D10); ?>">
            <input type=hidden name="D11"   value="<?php echo htmlspecialchars($D11); ?>">
            <input type=hidden name="D12"   value="<?php echo htmlspecialchars($D12); ?>">
            <input type=hidden name="D13"   value="<?php echo htmlspecialchars($D13); ?>">
            <input type=hidden name="D14"   value="<?php echo htmlspecialchars($D14); ?>">

            <input type=hidden name="E1"    value="<?php echo htmlspecialchars($E1); ?>">
            <input type=hidden name="E2"    value="<?php echo htmlspecialchars($E2); ?>">
            <input type=hidden name="E3"    value="<?php echo htmlspecialchars($E3); ?>">
            <input type=hidden name="E4"    value="<?php echo htmlspecialchars($E4); ?>">
            <input type=hidden name="E5"    value="<?php echo htmlspecialchars($E5); ?>">
            <input type=hidden name="E6"    value="<?php echo htmlspecialchars($E6); ?>">
            <input type=hidden name="E7"    value="<?php echo htmlspecialchars($E7); ?>">
            <input type=hidden name="E8"    value="<?php echo htmlspecialchars($E8); ?>">
            <input type=hidden name="E9"    value="<?php echo htmlspecialchars($E9); ?>">
            <input type=hidden name="E10"   value="<?php echo htmlspecialchars($E10); ?>">
            <input type=hidden name="E11"   value="<?php echo htmlspecialchars($E11); ?>">
            <input type=hidden name="E12"   value="<?php echo htmlspecialchars($E12); ?>">
            <input type=hidden name="E13"   value="<?php echo htmlspecialchars($E13); ?>">
            <input type=hidden name="E14"   value="<?php echo htmlspecialchars($E14); ?>">
            <input type=hidden name="E15"   value="0">
            <input type=hidden name="E16"   value="0">
            <input type=hidden name="E17"   value="0">
            <input type=hidden name="E18"   value="0">
            <input type=hidden name="E19"   value="0">
            <input type=hidden name="E20"   value="0">
            <input type=hidden name="E21"   value="0">
            <input type=hidden name="E22"   value="0">
            <input type=hidden name="E23"   value="0">
            <input type=hidden name="E24"   value="0">
            <input type=hidden name="E25"   value="0">
            <input type=hidden name="E26"   value="0">
            <input type=hidden name="E27"   value="0">
            <input type=hidden name="E28"   value="0">
            <br>
            <div id="normal" style="display: none">
            <div id="progress"      style="position: relative; width: 100%; height: 30px; background-color: grey">
            <div id="progress-bar"  style="position: absolute; width:  87%; height: 100%; background-color: orange">87%</div>
            </div><br></div>
            
            <div id="quarantining" style="display: none">
            <div id="progress"      style="position: relative; width: 100%; height: 30px; background-color: grey">
            <div id="progress-bar"  style="position: absolute; width:  62%; height: 100%; background-color: orange">62%</div>
            </div><br></div>

            <div id="quarantined" style="display: none">
            <div id="progress"      style="position: relative; width: 100%; height: 30px; background-color: grey">
            <div id="progress-bar"  style="position: absolute; width:  55%; height: 100%; background-color: orange">55%</div>
            </div><br></div>
            
            <h3 align="center"><b>作答說明</b></h3>
            <p style="background-color: yellow">這份問卷詢問您對於自己的生活品質、健康、以及其他生活領域的感覺。請您回答所有的問題。如果您對某一問題的回答不確定，請選出五個答案中最適合的一個，通常會是您最早想的那個答案。<br><br>
                
            我們的問題所關心的是您最近兩星期內的生活情形，請您用自己的標準、希望、愉快、以及關注點來回答問題。<br><br>
            
            請仔細閱讀每個題目，並評估您自己的感覺，然後就每一個題目選出最適合自己的答案。謝謝您的協助！</p><br>
            
            <b>E15. 您四處行動的能力好嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E15" value="1">完全不好</label>
                <label><input type="radio" name="E15" value="2">有一點好</label>
                <label><input type="radio" name="E15" value="3">中等程度好</label>
                <label><input type="radio" name="E15" value="4">很好</label>
                <label><input type="radio" name="E15" value="5">極好</label>
            </fieldset><br>

            <b>E16. 您滿意自己的睡眠狀況嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E16" value="1">極不滿意</label>
                <label><input type="radio" name="E16" value="2">不滿意</label>
                <label><input type="radio" name="E16" value="3">中等程度滿意</label>
                <label><input type="radio" name="E16" value="4">滿意</label>
                <label><input type="radio" name="E16" value="5">極滿意</label>
            </fieldset><br>

            <b>E17. 您對自己從事日常活動的能力滿意嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E17" value="1">極不滿意</label>
                <label><input type="radio" name="E17" value="2">不滿意</label>
                <label><input type="radio" name="E17" value="3">中等程度滿意</label>
                <label><input type="radio" name="E17" value="4">滿意</label>
                <label><input type="radio" name="E17" value="5">極滿意</label>
            </fieldset><br>

            <b>E18. 您滿意自己的工作能力嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E18" value="1">極不滿意</label>
                <label><input type="radio" name="E18" value="2">不滿意</label>
                <label><input type="radio" name="E18" value="3">中等程度滿意</label>
                <label><input type="radio" name="E18" value="4">滿意</label>
                <label><input type="radio" name="E18" value="5">極滿意</label>
            </fieldset><br>

            <b>E19. 您對自己滿意嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E19" value="1">極不滿意</label>
                <label><input type="radio" name="E19" value="2">不滿意</label>
                <label><input type="radio" name="E19" value="3">中等程度滿意</label>
                <label><input type="radio" name="E19" value="4">滿意</label>
                <label><input type="radio" name="E19" value="5">極滿意</label>
            </fieldset><br>

            <b>E20. 您滿意自己的人際關係嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E20" value="1">極不滿意</label>
                <label><input type="radio" name="E20" value="2">不滿意</label>
                <label><input type="radio" name="E20" value="3">中等程度滿意</label>
                <label><input type="radio" name="E20" value="4">滿意</label>
                <label><input type="radio" name="E20" value="5">極滿意</label>
            </fieldset><br>

            <b>E21. 您滿意自己的性生活嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E21" value="1">極不滿意</label>
                <label><input type="radio" name="E21" value="2">不滿意</label>
                <label><input type="radio" name="E21" value="3">中等程度滿意</label>
                <label><input type="radio" name="E21" value="4">滿意</label>
                <label><input type="radio" name="E21" value="5">極滿意</label>
            </fieldset><br>

            <b>E22. 您滿意朋友給您的支持嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E22" value="1">極不滿意</label>
                <label><input type="radio" name="E22" value="2">不滿意</label>
                <label><input type="radio" name="E22" value="3">中等程度滿意</label>
                <label><input type="radio" name="E22" value="4">滿意</label>
                <label><input type="radio" name="E22" value="5">極滿意</label>
            </fieldset><br>

            <b>E23. 您滿意自己住所的狀況嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E23" value="1">極不滿意</label>
                <label><input type="radio" name="E23" value="2">不滿意</label>
                <label><input type="radio" name="E23" value="3">中等程度滿意</label>
                <label><input type="radio" name="E23" value="4">滿意</label>
                <label><input type="radio" name="E23" value="5">極滿意</label>
            </fieldset><br>

            <b>E24. 您對醫療保健服務的方便程度滿意嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E24" value="1">極不滿意</label>
                <label><input type="radio" name="E24" value="2">不滿意</label>
                <label><input type="radio" name="E24" value="3">中等程度滿意</label>
                <label><input type="radio" name="E24" value="4">滿意</label>
                <label><input type="radio" name="E24" value="5">極滿意</label>
            </fieldset><br>

            <b>E25. 您滿意所使用的交通運輸方式嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E25" value="1">極不滿意</label>
                <label><input type="radio" name="E25" value="2">不滿意</label>
                <label><input type="radio" name="E25" value="3">中等程度滿意</label>
                <label><input type="radio" name="E25" value="4">滿意</label>
                <label><input type="radio" name="E25" value="5">極滿意</label>
            </fieldset><br>

            <b>E26. 您常有負面的感受（如傷心、緊張、焦慮、憂鬱等）嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E26" value="1">從來沒有</label>
                <label><input type="radio" name="E26" value="2">不常有</label>
                <label><input type="radio" name="E26" value="3">一半有一半沒有</label>
                <label><input type="radio" name="E26" value="4">很常有</label>
                <label><input type="radio" name="E26" value="5">一直都有</label>
            </fieldset><br>

            <b>E27. 您覺得自己有面子或被尊重嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E27" value="1">完全沒有</label>
                <label><input type="radio" name="E27" value="2">有一點有</label>
                <label><input type="radio" name="E27" value="3">中等程度有</label>
                <label><input type="radio" name="E27" value="4">很有</label>
                <label><input type="radio" name="E27" value="5">極有</label>
            </fieldset><br>

            <b>E28. 您想吃的食物通常都能吃到嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E28" value="1">從來沒有</label>
                <label><input type="radio" name="E28" value="2">不常有</label>
                <label><input type="radio" name="E28" value="3">一半有一半沒有</label>
                <label><input type="radio" name="E28" value="4">很常有</label>
                <label><input type="radio" name="E28" value="5">一直都有</label>
            </fieldset><br>
       
            <input name="submit" value="下一頁" type="submit"><br>
      
            <script>
                //檢查各題是否完整填答，若否則依題號報錯
                function check(){
                    var cE15    =getValue("E15");
                    var cE16    =getValue("E16");
                    var cE17    =getValue("E17");
                    var cE18    =getValue("E18");
                    var cE19    =getValue("E19");
                    var cE20    =getValue("E20");
                    var cE21    =getValue("E21");
                    var cE22    =getValue("E22");
                    var cE23    =getValue("E23");
                    var cE24    =getValue("E24");
                    var cE25    =getValue("E25");
                    var cE26    =getValue("E26");
                    var cE27    =getValue("E27");
                    var cE28    =getValue("E28");
                    
                    var record=[], j=0;
                    if(cE15==0){record[j]="E15"; j++}
                    if(cE16==0){record[j]="E16"; j++}
                    if(cE17==0){record[j]="E17"; j++}
                    if(cE18==0){record[j]="E18"; j++}
                    if(cE19==0){record[j]="E19"; j++}
                    if(cE20==0){record[j]="E20"; j++}
                    if(cE21==0){record[j]="E21"; j++}
                    if(cE22==0){record[j]="E22"; j++}
                    if(cE23==0){record[j]="E23"; j++}
                    if(cE24==0){record[j]="E24"; j++}
                    if(cE25==0){record[j]="E25"; j++}
                    if(cE26==0){record[j]="E26"; j++}
                    if(cE27==0){record[j]="E27"; j++}
                    if(cE28==0){record[j]="E28"; j++}
                    
                    if(j>0){
                        alert("您好，第"+record+"題尚未填答完畢唷！");
                        return false;
                    }else{
                        document.getElementById("exp8").action="index9.php";
                        document.getElementById("exp8").submit();
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
                    var cA5=document.exp8.A5.value;
                    var cA5_4=document.exp8.A5_4.value;
                    
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
