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
?>

<!doctype html>
<html>
<head>
    <title>Questionnaire E1</title>
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
        <form method="post" name="exp7" id="exp7" onsubmit="return check()" accept-charset="utf-8" style="padding: 5% 7.5%">
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
            
            <input type=hidden name="E1"    value="0">
            <input type=hidden name="E2"    value="0">
            <input type=hidden name="E3"    value="0">
            <input type=hidden name="E4"    value="0">
            <input type=hidden name="E5"    value="0">
            <input type=hidden name="E6"    value="0">
            <input type=hidden name="E7"    value="0">
            <input type=hidden name="E8"    value="0">
            <input type=hidden name="E9"    value="0">
            <input type=hidden name="E10"   value="0">
            <input type=hidden name="E11"   value="0">
            <input type=hidden name="E12"   value="0">
            <input type=hidden name="E13"   value="0">
            <input type=hidden name="E14"   value="0">
            <br>
            <div id="normal" style="display: none">
            <div id="progress"      style="position: relative; width: 100%; height: 30px; background-color: grey">
            <div id="progress-bar"  style="position: absolute; width:  74%; height: 100%; background-color: orange">74%</div>
            </div><br></div>
            
            <div id="quarantining" style="display: none">
            <div id="progress"      style="position: relative; width: 100%; height: 30px; background-color: grey">
            <div id="progress-bar"  style="position: absolute; width:  53%; height: 100%; background-color: orange">53%</div>
            </div><br></div>

            <div id="quarantined" style="display: none">
            <div id="progress"      style="position: relative; width: 100%; height: 30px; background-color: grey">
            <div id="progress-bar"  style="position: absolute; width:  47%; height: 100%; background-color: orange">47%</div>
            </div><br></div>
            
            <h3 align="center"><b>作答說明</b></h3>
            <p style="background-color: yellow">這份問卷詢問您對於自己的生活品質、健康、以及其他生活領域的感覺。請您回答所有的問題。如果您對某一問題的回答不確定，請選出五個答案中最適合的一個，通常會是您最早想的那個答案。<br><br>
                
            我們的問題所關心的是您最近兩星期內的生活情形，請您用自己的標準、希望、愉快、以及關注點來回答問題。<br><br>
            
            請仔細閱讀每個題目，並評估您自己的感覺，然後就每一個題目選出最適合自己的答案。謝謝您的協助！</p><br>
            
            <b>E1. 整體來說，您如何評價您的生活品質？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E1" value="1">極不好</label>
                <label><input type="radio" name="E1" value="2">不好</label>
                <label><input type="radio" name="E1" value="3">中等程度好</label>
                <label><input type="radio" name="E1" value="4">好</label>
                <label><input type="radio" name="E1" value="5">極好</label>
            </fieldset><br>

            <b>E2. 整體來說，您滿意自己的健康嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E2" value="1">極不滿意</label>
                <label><input type="radio" name="E2" value="2">不滿意</label>
                <label><input type="radio" name="E2" value="3">中等程度滿意</label>
                <label><input type="radio" name="E2" value="4">滿意</label>
                <label><input type="radio" name="E2" value="5">極滿意</label>
            </fieldset><br>

            <b>E3. 您覺得身體疼痛會妨礙您處理需要做的事情嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E3" value="1">完全沒有妨礙</label>
                <label><input type="radio" name="E3" value="2">有一點妨礙</label>
                <label><input type="radio" name="E3" value="3">中等程度妨礙</label>
                <label><input type="radio" name="E3" value="4">很妨礙</label>
                <label><input type="radio" name="E3" value="5">極妨礙</label>
            </fieldset><br>

            <b>E4. 您需要靠醫療的幫助應付日常生活嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E4" value="1">完全沒有需要</label>
                <label><input type="radio" name="E4" value="2">有一點需要</label>
                <label><input type="radio" name="E4" value="3">中等程度需要</label>
                <label><input type="radio" name="E4" value="4">很需要</label>
                <label><input type="radio" name="E4" value="5">極需要</label>
            </fieldset><br>

            <b>E5. 您享受生活嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E5" value="1">完全沒有享受</label>
                <label><input type="radio" name="E5" value="2">有一點享受</label>
                <label><input type="radio" name="E5" value="3">中等程度享受</label>
                <label><input type="radio" name="E5" value="4">很享受</label>
                <label><input type="radio" name="E5" value="5">極享受</label>
            </fieldset><br>

            <b>E6. 您覺得自己的生命有意義嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E6" value="1">完全沒有</label>
                <label><input type="radio" name="E6" value="2">有一點有</label>
                <label><input type="radio" name="E6" value="3">中等程度有</label>
                <label><input type="radio" name="E6" value="4">很有</label>
                <label><input type="radio" name="E6" value="5">極有</label>
            </fieldset><br>

            <b>E7. 您集中精神的能力有多好？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E7" value="1">完全不好</label>
                <label><input type="radio" name="E7" value="2">有一點好</label>
                <label><input type="radio" name="E7" value="3">中等程度好</label>
                <label><input type="radio" name="E7" value="4">很好</label>
                <label><input type="radio" name="E7" value="5">極好</label>
            </fieldset><br>

            <b>E8. 在日常生活中，您感到安全嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E8" value="1">完全不安全</label>
                <label><input type="radio" name="E8" value="2">有一點安全</label>
                <label><input type="radio" name="E8" value="3">中等程度安全</label>
                <label><input type="radio" name="E8" value="4">很安全</label>
                <label><input type="radio" name="E8" value="5">極安全</label>
            </fieldset><br>

            <b>E9. 您所處的環境健康（如污染、噪音、氣候、景觀）嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E9" value="1">完全不健康</label>
                <label><input type="radio" name="E9" value="2">有一點健康</label>
                <label><input type="radio" name="E9" value="3">中等程度健康</label>
                <label><input type="radio" name="E9" value="4">很健康</label>
                <label><input type="radio" name="E9" value="5">極健康</label>
            </fieldset><br>

            <b>E10. 您每天的生活有足夠的精力嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E10" value="1">完全不足夠</label>
                <label><input type="radio" name="E10" value="2">少許足夠</label>
                <label><input type="radio" name="E10" value="3">中等程度足夠</label>
                <label><input type="radio" name="E10" value="4">很足夠</label>
                <label><input type="radio" name="E10" value="5">完全足夠</label>
            </fieldset><br>

            <b>E11. 您能接受自己的外表嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E11" value="1">完全不能夠</label>
                <label><input type="radio" name="E11" value="2">少許能夠</label>
                <label><input type="radio" name="E11" value="3">中等程度能夠</label>
                <label><input type="radio" name="E11" value="4">很能夠</label>
                <label><input type="radio" name="E11" value="5">完全能夠</label>
            </fieldset><br>

            <b>E12. 您有足夠的金錢應付所需嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E12" value="1">完全不足夠</label>
                <label><input type="radio" name="E12" value="2">少許足夠</label>
                <label><input type="radio" name="E12" value="3">中等程度足夠</label>
                <label><input type="radio" name="E12" value="4">很足夠</label>
                <label><input type="radio" name="E12" value="5">完全足夠</label>
            </fieldset><br>

            <b>E13. 您能方便得到每日生活所需的資訊嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E13" value="1">完全不方便</label>
                <label><input type="radio" name="E13" value="2">少許方便</label>
                <label><input type="radio" name="E13" value="3">中等程度方便</label>
                <label><input type="radio" name="E13" value="4">很方便</label>
                <label><input type="radio" name="E13" value="5">完全方便</label>
            </fieldset><br>

            <b>E14. 您有機會從事休閒活動嗎？</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="E14" value="1">完全沒有機會</label>
                <label><input type="radio" name="E14" value="2">少許機會</label>
                <label><input type="radio" name="E14" value="3">中等程度機會</label>
                <label><input type="radio" name="E14" value="4">很有機會</label>
                <label><input type="radio" name="E14" value="5">完全有機會</label>
            </fieldset><br>

            <input name="submit" value="下一頁" type="submit"><br>
            
            <script>
                //檢查各題是否完整填答，若否則依題號報錯
                function check(){
                    var cE1     =getValue("E1");
                    var cE2     =getValue("E2");
                    var cE3     =getValue("E3");
                    var cE4     =getValue("E4");
                    var cE5     =getValue("E5");
                    var cE6     =getValue("E6");
                    var cE7     =getValue("E7");
                    var cE8     =getValue("E8");
                    var cE9     =getValue("E9");
                    var cE10    =getValue("E10");
                    var cE11    =getValue("E11");
                    var cE12    =getValue("E12");
                    var cE13    =getValue("E13");
                    var cE14    =getValue("E14");
                    
                    var record=[], j=0;
                    if(cE1==0){record[j]="E1"; j++}
                    if(cE2==0){record[j]="E2"; j++}
                    if(cE3==0){record[j]="E3"; j++}
                    if(cE4==0){record[j]="E4"; j++}
                    if(cE5==0){record[j]="E5"; j++}
                    if(cE6==0){record[j]="E6"; j++}
                    if(cE7==0){record[j]="E7"; j++}
                    if(cE8==0){record[j]="E8"; j++}
                    if(cE9==0){record[j]="E9"; j++}
                    if(cE10==0){record[j]="E10"; j++}
                    if(cE11==0){record[j]="E11"; j++}
                    if(cE12==0){record[j]="E12"; j++}
                    if(cE13==0){record[j]="E13"; j++}
                    if(cE14==0){record[j]="E14"; j++}
                    
                    if(j>0){
                        alert("您好，第"+record+"題尚未填答完畢唷！");
                        return false;
                    }else{
                        document.getElementById("exp7").action="index8.php";
                        document.getElementById("exp7").submit();
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
                    var cA5=document.exp7.A5.value;
                    var cA5_4=document.exp7.A5_4.value;
                    
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
