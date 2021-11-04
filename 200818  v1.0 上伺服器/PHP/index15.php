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
    $E15    =$_POST['E15'];
    $E16    =$_POST['E16'];
    $E17    =$_POST['E17'];
    $E18    =$_POST['E18'];
    $E19    =$_POST['E19'];
    $E20    =$_POST['E20'];
    $E21    =$_POST['E21'];
    $E22    =$_POST['E22'];
    $E23    =$_POST['E23'];
    $E24    =$_POST['E24'];
    $E25    =$_POST['E25'];
    $E26    =$_POST['E26'];
    $E27    =$_POST['E27'];
    $E28    =$_POST['E28'];

    $F1     =$_POST['F1'];
    $F2     =$_POST['F2'];
    $F3     =$_POST['F3'];
    $F4     =$_POST['F4'];
    $F5     =$_POST['F5'];
    $F6     =$_POST['F6'];
    $F7     =$_POST['F7'];
    $F8     =$_POST['F8'];
    $F9     =$_POST['F9'];
    $F10    =$_POST['F10'];
    $F11    =$_POST['F11'];
    $F12    =$_POST['F12'];
    $F13    =$_POST['F13'];
    $F14    =$_POST['F14'];

    $G1     =$_POST['G1'];
    $G2     =$_POST['G2'];
    $G3     =$_POST['G3'];
    $G4     =$_POST['G4'];
    $G5     =$_POST['G5'];
    $G6     =$_POST['G6'];
    $G7     =$_POST['G7'];
    $G7_1   =$_POST['G7_1'];
    $G8     =$_POST['G8'];
    $G9     =$_POST['G9'];
    $G10    =$_POST['G10'];
    $G11    =$_POST['G11'];
    $G12    =$_POST['G12'];
    $G13    =$_POST['G13'];
    $G14    =$_POST['G14'];
    $G15    =$_POST['G15'];
    $G16    =$_POST['G16'];
    $G17    =$_POST['G17'];
    $G18    =$_POST['G18'];
    $G19    =$_POST['G19'];
    $G20    =$_POST['G20'];
    $G21    =$_POST['G21'];
    $G21_1  =$_POST['G21_1'];
    $G22    =$_POST['G22'];
    $G22_1  =$_POST['G22_1'];

    $H1     =$_POST['H1'];
    $H2     =$_POST['H2'];
    $H3     =$_POST['H3'];
    $H4     =$_POST['H4'];
    $H5     =$_POST['H5'];
    $H6     =$_POST['H6'];
    $H7     =$_POST['H7'];
    $H8     =$_POST['H8'];
    $H9     =$_POST['H9'];
    $H10    =$_POST['H10'];
    $H11    =$_POST['H11'];
    $H12    =$_POST['H12'];
    $H13    =$_POST['H13'];
    $H14    =$_POST['H14'];
    $H15    =$_POST['H15'];
    $H16    =$_POST['H16'];
    $H17    =$_POST['H17'];
    $H18    =$_POST['H18'];
    $H19    =$_POST['H19'];
    $H20    =$_POST['H20'];
    $H21    =$_POST['H21'];
    $H22    =$_POST['H22'];

    $I1     =$_POST['I1'];
    $I2     =$_POST['I2'];
    $I3     =$_POST['I3'];
    $I4     =$_POST['I4'];
    $I5     =$_POST['I5'];
    $I6     =$_POST['I6'];
    $I7     =$_POST['I7'];
    $I8     =$_POST['I8'];
    $I9     =$_POST['I9'];
    $I10    =$_POST['I10'];
    $I11    =$_POST['I11'];
?>

<!doctype html>
<html>
<head>
    <title>Questionnaire I2</title>
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
            <h1>I. 隔離事件的影響</h1>
        </div>
    </div>
    
    <section>
        <form method="post" name="exp15" id="exp15" onsubmit="return check()" accept-charset="utf-8" style="padding: 5% 7.5%">
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
            <input type=hidden name="E15"   value="<?php echo htmlspecialchars($E15); ?>">
            <input type=hidden name="E16"   value="<?php echo htmlspecialchars($E16); ?>">
            <input type=hidden name="E17"   value="<?php echo htmlspecialchars($E17); ?>">
            <input type=hidden name="E18"   value="<?php echo htmlspecialchars($E18); ?>">
            <input type=hidden name="E19"   value="<?php echo htmlspecialchars($E19); ?>">
            <input type=hidden name="E20"   value="<?php echo htmlspecialchars($E20); ?>">
            <input type=hidden name="E21"   value="<?php echo htmlspecialchars($E21); ?>">
            <input type=hidden name="E22"   value="<?php echo htmlspecialchars($E22); ?>">
            <input type=hidden name="E23"   value="<?php echo htmlspecialchars($E23); ?>">
            <input type=hidden name="E24"   value="<?php echo htmlspecialchars($E24); ?>">
            <input type=hidden name="E25"   value="<?php echo htmlspecialchars($E25); ?>">
            <input type=hidden name="E26"   value="<?php echo htmlspecialchars($E26); ?>">
            <input type=hidden name="E27"   value="<?php echo htmlspecialchars($E27); ?>">
            <input type=hidden name="E28"   value="<?php echo htmlspecialchars($E28); ?>">

            <input type=hidden name="F1"    value="<?php echo htmlspecialchars($F1); ?>">
            <input type=hidden name="F2"    value="<?php echo htmlspecialchars($F2); ?>">
            <input type=hidden name="F3"    value="<?php echo htmlspecialchars($F3); ?>">
            <input type=hidden name="F4"    value="<?php echo htmlspecialchars($F4); ?>">
            <input type=hidden name="F5"    value="<?php echo htmlspecialchars($F5); ?>">
            <input type=hidden name="F6"    value="<?php echo htmlspecialchars($F6); ?>">
            <input type=hidden name="F7"    value="<?php echo htmlspecialchars($F7); ?>">
            <input type=hidden name="F8"    value="<?php echo htmlspecialchars($F8); ?>">
            <input type=hidden name="F9"    value="<?php echo htmlspecialchars($F9); ?>">
            <input type=hidden name="F10"   value="<?php echo htmlspecialchars($F10); ?>">
            <input type=hidden name="F11"   value="<?php echo htmlspecialchars($F11); ?>">
            <input type=hidden name="F12"   value="<?php echo htmlspecialchars($F12); ?>">
            <input type=hidden name="F13"   value="<?php echo htmlspecialchars($F13); ?>">
            <input type=hidden name="F14"   value="<?php echo htmlspecialchars($F14); ?>">

            <input type=hidden name="G1"    value="<?php echo htmlspecialchars($G1); ?>">
            <input type=hidden name="G2"    value="<?php echo htmlspecialchars($G2); ?>">
            <input type=hidden name="G3"    value="<?php echo htmlspecialchars($G3); ?>">
            <input type=hidden name="G4"    value="<?php echo htmlspecialchars($G4); ?>">
            <input type=hidden name="G5"    value="<?php echo htmlspecialchars($G5); ?>">
            <input type=hidden name="G6"    value="<?php echo htmlspecialchars($G6); ?>">
            <input type=hidden name="G7"    value="<?php echo htmlspecialchars($G7); ?>">
            <input type=hidden name="G7_1"  value="<?php echo htmlspecialchars($G7_1); ?>">
            <input type=hidden name="G8"    value="<?php echo htmlspecialchars($G8); ?>">
            <input type=hidden name="G9"    value="<?php echo htmlspecialchars($G9); ?>">
            <input type=hidden name="G10"   value="<?php echo htmlspecialchars($G10); ?>">
            <input type=hidden name="G11"   value="<?php echo htmlspecialchars($G11); ?>">
            <input type=hidden name="G12"   value="<?php echo htmlspecialchars($G12); ?>">
            <input type=hidden name="G13"   value="<?php echo htmlspecialchars($G13); ?>">
            <input type=hidden name="G14"   value="<?php echo htmlspecialchars($G14); ?>">
            <input type=hidden name="G15"   value="<?php echo htmlspecialchars($G15); ?>">
            <input type=hidden name="G16"   value="<?php echo htmlspecialchars($G16); ?>">
            <input type=hidden name="G17"   value="<?php echo htmlspecialchars($G17); ?>">
            <input type=hidden name="G18"   value="<?php echo htmlspecialchars($G18); ?>">
            <input type=hidden name="G19"   value="<?php echo htmlspecialchars($G19); ?>">
            <input type=hidden name="G20"   value="<?php echo htmlspecialchars($G20); ?>">
            <input type=hidden name="G21"   value="<?php echo htmlspecialchars($G21); ?>">
            <input type=hidden name="G21_1" value="<?php echo htmlspecialchars($G21_1); ?>">
            <input type=hidden name="G22"   value="<?php echo htmlspecialchars($G22); ?>">
            <input type=hidden name="G22_1" value="<?php echo htmlspecialchars($G22_1); ?>">

            <input type=hidden name="H1"    value="<?php echo htmlspecialchars($H1); ?>">
            <input type=hidden name="H2"    value="<?php echo htmlspecialchars($H2); ?>">
            <input type=hidden name="H3"    value="<?php echo htmlspecialchars($H3); ?>">
            <input type=hidden name="H4"    value="<?php echo htmlspecialchars($H4); ?>">
            <input type=hidden name="H5"    value="<?php echo htmlspecialchars($H5); ?>">
            <input type=hidden name="H6"    value="<?php echo htmlspecialchars($H6); ?>">
            <input type=hidden name="H7"    value="<?php echo htmlspecialchars($H7); ?>">
            <input type=hidden name="H8"    value="<?php echo htmlspecialchars($H8); ?>">
            <input type=hidden name="H9"    value="<?php echo htmlspecialchars($H9); ?>">
            <input type=hidden name="H10"   value="<?php echo htmlspecialchars($H10); ?>">
            <input type=hidden name="H11"   value="<?php echo htmlspecialchars($H11); ?>">
            <input type=hidden name="H12"   value="<?php echo htmlspecialchars($H12); ?>">
            <input type=hidden name="H13"   value="<?php echo htmlspecialchars($H13); ?>">
            <input type=hidden name="H14"   value="<?php echo htmlspecialchars($H14); ?>">
            <input type=hidden name="H15"   value="<?php echo htmlspecialchars($H15); ?>">
            <input type=hidden name="H16"   value="<?php echo htmlspecialchars($H16); ?>">
            <input type=hidden name="H17"   value="<?php echo htmlspecialchars($H17); ?>">
            <input type=hidden name="H18"   value="<?php echo htmlspecialchars($H18); ?>">
            <input type=hidden name="H19"   value="<?php echo htmlspecialchars($H19); ?>">
            <input type=hidden name="H20"   value="<?php echo htmlspecialchars($H20); ?>">
            <input type=hidden name="H21"   value="<?php echo htmlspecialchars($H21); ?>">
            <input type=hidden name="H22"   value="<?php echo htmlspecialchars($H22); ?>">

            <input type=hidden name="I1"    value="<?php echo htmlspecialchars($I1); ?>">
            <input type=hidden name="I2"    value="<?php echo htmlspecialchars($I2); ?>">
            <input type=hidden name="I3"    value="<?php echo htmlspecialchars($I3); ?>">
            <input type=hidden name="I4"    value="<?php echo htmlspecialchars($I4); ?>">
            <input type=hidden name="I5"    value="<?php echo htmlspecialchars($I5); ?>">
            <input type=hidden name="I6"    value="<?php echo htmlspecialchars($I6); ?>">
            <input type=hidden name="I7"    value="<?php echo htmlspecialchars($I7); ?>">
            <input type=hidden name="I8"    value="<?php echo htmlspecialchars($I8); ?>">
            <input type=hidden name="I9"    value="<?php echo htmlspecialchars($I9); ?>">
            <input type=hidden name="I10"   value="<?php echo htmlspecialchars($I10); ?>">
            <input type=hidden name="I11"   value="<?php echo htmlspecialchars($I11); ?>">
            <input type=hidden name="I12"   value="0">
            <input type=hidden name="I13"   value="0">
            <input type=hidden name="I14"   value="0">
            <input type=hidden name="I15"   value="0">
            <input type=hidden name="I16"   value="0">
            <input type=hidden name="I17"   value="0">
            <input type=hidden name="I18"   value="0">
            <input type=hidden name="I19"   value="0">
            <input type=hidden name="I20"   value="0">
            <input type=hidden name="I21"   value="0">
            <input type=hidden name="I22"   value="0">
            <br>
            <div id="progress"      style="position: relative; width: 100%; height: 30px; background-color: grey">
            <div id="progress-bar"  style="position: absolute; width: 100%; height: 100%; background-color: orange">100%</div>
            </div><br>
            
            <h3 align="center"><b>作答說明</b></h3>
            <p align="center" style="background-color: yellow">以下是一些人經歷過壓力事件後會經驗的困難，請仔細閱讀每一題目，並依自己<u><b>過去七天</b></u>的經驗選擇最能夠形容每一項困難對您影響的程度。以下提到的【那件事】是指：<u><b>隔離期間</b></u>的有關經歷。</p><br>
            
            <b>I12. 我察覺到我仍然對那件事有很多感受，但我沒有去處理它們。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I12" value="1">從未</label>
                <label><input type="radio" name="I12" value="2">很不常</label>
                <label><input type="radio" name="I12" value="3">普通</label>
                <label><input type="radio" name="I12" value="4">很常</label>
                <label><input type="radio" name="I12" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I13. 我對那件事的感覺有點麻木。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I13" value="1">從未</label>
                <label><input type="radio" name="I13" value="2">很不常</label>
                <label><input type="radio" name="I13" value="3">普通</label>
                <label><input type="radio" name="I13" value="4">很常</label>
                <label><input type="radio" name="I13" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I14. 我覺得我現在的行為或是感受與發生那件事時的行為和感受一樣。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I14" value="1">從未</label>
                <label><input type="radio" name="I14" value="2">很不常</label>
                <label><input type="radio" name="I14" value="3">普通</label>
                <label><input type="radio" name="I14" value="4">很常</label>
                <label><input type="radio" name="I14" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I15. 最近這段期間，我難以入睡。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I15" value="1">從未</label>
                <label><input type="radio" name="I15" value="2">很不常</label>
                <label><input type="radio" name="I15" value="3">普通</label>
                <label><input type="radio" name="I15" value="4">很常</label>
                <label><input type="radio" name="I15" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I16. 我對那件事的強烈感受一陣一陣地湧現出來。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I16" value="1">從未</label>
                <label><input type="radio" name="I16" value="2">很不常</label>
                <label><input type="radio" name="I16" value="3">普通</label>
                <label><input type="radio" name="I16" value="4">很常</label>
                <label><input type="radio" name="I16" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I17. 我嘗試忘記那件事。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I17" value="1">從未</label>
                <label><input type="radio" name="I17" value="2">很不常</label>
                <label><input type="radio" name="I17" value="3">普通</label>
                <label><input type="radio" name="I17" value="4">很常</label>
                <label><input type="radio" name="I17" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I18. 最近這段期間，我很難集中精神。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I18" value="1">從未</label>
                <label><input type="radio" name="I18" value="2">很不常</label>
                <label><input type="radio" name="I18" value="3">普通</label>
                <label><input type="radio" name="I18" value="4">很常</label>
                <label><input type="radio" name="I18" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I19. 當我想起那件事時，我會產生以下身體反應：流汗、呼吸困難、作嘔、或者強烈心跳。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I19" value="1">從未</label>
                <label><input type="radio" name="I19" value="2">很不常</label>
                <label><input type="radio" name="I19" value="3">普通</label>
                <label><input type="radio" name="I19" value="4">很常</label>
                <label><input type="radio" name="I19" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I20. 我夢到那件事。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I20" value="1">從未</label>
                <label><input type="radio" name="I20" value="2">很不常</label>
                <label><input type="radio" name="I20" value="3">普通</label>
                <label><input type="radio" name="I20" value="4">很常</label>
                <label><input type="radio" name="I20" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I21. 最近這段期間，我覺得自己警覺性很高，處處提防。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I21" value="1">從未</label>
                <label><input type="radio" name="I21" value="2">很不常</label>
                <label><input type="radio" name="I21" value="3">普通</label>
                <label><input type="radio" name="I21" value="4">很常</label>
                <label><input type="radio" name="I21" value="5">幾乎是如此</label>
            </fieldset><br>

            <b>I22. 我嘗試不談論有關那件事的話題。</b>
            <fieldset data-role="controlgroup" style="width: 60%; margin: 2.5% auto">
                <label><input type="radio" name="I22" value="1">從未</label>
                <label><input type="radio" name="I22" value="2">很不常</label>
                <label><input type="radio" name="I22" value="3">普通</label>
                <label><input type="radio" name="I22" value="4">很常</label>
                <label><input type="radio" name="I22" value="5">幾乎是如此</label>
            </fieldset><br>

            <input name="submit" value="送出" type="submit"><br>
            
            <script>
                //檢查各題是否完整填答，若否則依題號報錯
                function check(){
                    var cI12    =getValue("I12");
                    var cI13    =getValue("I13");
                    var cI14    =getValue("I14");
                    var cI15    =getValue("I15");
                    var cI16    =getValue("I16");
                    var cI17    =getValue("I17");
                    var cI18    =getValue("I18");
                    var cI19    =getValue("I19");
                    var cI20    =getValue("I20");
                    var cI21    =getValue("I21");
                    var cI22    =getValue("I22");
                    
                    var record=[], j=0;
                    if(cI12==0){record[j]="I12"; j++}
                    if(cI13==0){record[j]="I13"; j++}
                    if(cI14==0){record[j]="I14"; j++}
                    if(cI15==0){record[j]="I15"; j++}
                    if(cI16==0){record[j]="I16"; j++}
                    if(cI17==0){record[j]="I17"; j++}
                    if(cI18==0){record[j]="I18"; j++}
                    if(cI19==0){record[j]="I19"; j++}
                    if(cI20==0){record[j]="I20"; j++}
                    if(cI21==0){record[j]="I21"; j++}
                    if(cI22==0){record[j]="I22"; j++}
                    
                    if(j>0){
                        alert("您好，第"+record+"題尚未填答完畢唷！");
                        return false;
                    }else{
                        document.getElementById("exp15").action="index16.php";
                        document.getElementById("exp15").submit();
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
            </script>
        </form>
    </section>
</body>
</html>
