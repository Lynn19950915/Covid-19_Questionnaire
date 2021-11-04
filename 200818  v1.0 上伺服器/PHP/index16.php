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
    $A5_3   =$_POST['A5_3'];    $A5_3all=implode(",", $A5_3);
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
    $B3_1   =$_POST['B3_1'];    $B3_1all=implode(",", $B3_1);
    $B3_1o  =$_POST['B3_1o'];

    $C1_a   =$_POST['C1_a'];
    $C1_b   =$_POST['C1_b'];
    $C1_c   =$_POST['C1_c'];
    $C1_d   =$_POST['C1_d'];
    $C1_e   =$_POST['C1_e'];
    $C1_f   =$_POST['C1_f'];
    $C2     =$_POST['C2'];
    $C3     =$_POST['C3'];      $C3_all=implode(",", $C3);
    $C4     =$_POST['C4'];
    $C4_o   =$_POST['C4_o'];
    $C5     =$_POST['C5'];
    $C6     =$_POST['C6'];
    $C7     =$_POST['C7'];
    $C7_1   =$_POST['C7_1'];    $C7_1all=implode(",", $C7_1);
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
    $C18_3  =$_POST['C18_3'];   $C18_3all=implode(",", $C18_3);
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

    $G1     =isset($_POST['G1'])?$_POST['G1']: 99;
    $G2     =isset($_POST['G2'])?$_POST['G2']: 99;
    $G3     =isset($_POST['G3'])?$_POST['G3']: 99;
    $G4     =isset($_POST['G4'])?$_POST['G4']: 99;
    $G5     =isset($_POST['G5'])?$_POST['G5']: 99;
    $G6     =isset($_POST['G6'])?$_POST['G6']: 99;
    $G7     =isset($_POST['G7'])?$_POST['G7']: 99;
    $G7_1   =isset($_POST['G7_1'])?$_POST['G7_1']: 99;
    $G8     =isset($_POST['G8'])?$_POST['G8']: 99;
    $G9     =isset($_POST['G9'])?$_POST['G9']: 99;
    $G10    =isset($_POST['G10'])?$_POST['G10']: 99;
    $G11    =isset($_POST['G11'])?$_POST['G11']: 99;
    $G12    =isset($_POST['G12'])?$_POST['G12']: 99;
    $G13    =isset($_POST['G13'])?$_POST['G13']: 99;
    $G14    =isset($_POST['G14'])?$_POST['G14']: 99;
    $G15    =isset($_POST['G15'])?$_POST['G15']: 99;
    $G16    =isset($_POST['G16'])?$_POST['G16']: 99;
    $G17    =isset($_POST['G17'])?$_POST['G17']: 99;
    $G18    =isset($_POST['G18'])?$_POST['G18']: 99;
    $G19    =isset($_POST['G19'])?$_POST['G19']: 99;
    $G20    =isset($_POST['G20'])?$_POST['G20']: 99;
    $G21    =isset($_POST['G21'])?$_POST['G21']: 99;
    $G21_1  =isset($_POST['G21_1'])?$_POST['G21_1']: 99;
    $G22    =isset($_POST['G22'])?$_POST['G22']: 99;
    $G22_1  =isset($_POST['G22_1'])?$_POST['G22_1']: 99;

    $H1     =isset($_POST['H1'])?$_POST['H1']: 99;
    $H2     =isset($_POST['H2'])?$_POST['H2']: 99;
    $H3     =isset($_POST['H3'])?$_POST['H3']: 99;
    $H4     =isset($_POST['H4'])?$_POST['H4']: 99;
    $H5     =isset($_POST['H5'])?$_POST['H5']: 99;
    $H6     =isset($_POST['H6'])?$_POST['H6']: 99;
    $H7     =isset($_POST['H7'])?$_POST['H7']: 99;
    $H8     =isset($_POST['H8'])?$_POST['H8']: 99;
    $H9     =isset($_POST['H9'])?$_POST['H9']: 99;
    $H10    =isset($_POST['H10'])?$_POST['H10']: 99;
    $H11    =isset($_POST['H11'])?$_POST['H11']: 99;
    $H12    =isset($_POST['H12'])?$_POST['H12']: 99;
    $H13    =isset($_POST['H13'])?$_POST['H13']: 99;
    $H14    =isset($_POST['H14'])?$_POST['H14']: 99;
    $H15    =isset($_POST['H15'])?$_POST['H15']: 99;
    $H16    =isset($_POST['H16'])?$_POST['H16']: 99;
    $H17    =isset($_POST['H17'])?$_POST['H17']: 99;
    $H18    =isset($_POST['H18'])?$_POST['H18']: 99;
    $H19    =isset($_POST['H19'])?$_POST['H19']: 99;
    $H20    =isset($_POST['H20'])?$_POST['H20']: 99;
    $H21    =isset($_POST['H21'])?$_POST['H21']: 99;
    $H22    =isset($_POST['H22'])?$_POST['H22']: 99;

    $I1     =isset($_POST['I1'])?$_POST['I1']: 99;
    $I2     =isset($_POST['I2'])?$_POST['I2']: 99;
    $I3     =isset($_POST['I3'])?$_POST['I3']: 99;
    $I4     =isset($_POST['I4'])?$_POST['I4']: 99;
    $I5     =isset($_POST['I5'])?$_POST['I5']: 99;
    $I6     =isset($_POST['I6'])?$_POST['I6']: 99;
    $I7     =isset($_POST['I7'])?$_POST['I7']: 99;
    $I8     =isset($_POST['I8'])?$_POST['I8']: 99;
    $I9     =isset($_POST['I9'])?$_POST['I9']: 99;
    $I10    =isset($_POST['I10'])?$_POST['I10']: 99;
    $I11    =isset($_POST['I11'])?$_POST['I11']: 99;
    $I12    =isset($_POST['I12'])?$_POST['I12']: 99;
    $I13    =isset($_POST['I13'])?$_POST['I13']: 99;
    $I14    =isset($_POST['I14'])?$_POST['I14']: 99;
    $I15    =isset($_POST['I15'])?$_POST['I15']: 99;
    $I16    =isset($_POST['I16'])?$_POST['I16']: 99;
    $I17    =isset($_POST['I17'])?$_POST['I17']: 99;
    $I18    =isset($_POST['I18'])?$_POST['I18']: 99;
    $I19    =isset($_POST['I19'])?$_POST['I19']: 99;
    $I20    =isset($_POST['I20'])?$_POST['I20']: 99;
    $I21    =isset($_POST['I21'])?$_POST['I21']: 99;
    $I22    =isset($_POST['I22'])?$_POST['I22']: 99;

    $servername ="***";
    $username   ="***";
    $password   ="***";
    $dbname     ="***";
    $conn=new mysqli($servername, $username, $password, $dbname);

    $sql="INSERT INTO questionanire(time,
    A1, A2, A3, A4, A4_o, A5, A5_1, A5_2, A5_3all, A5_3o, A5_4, A5_5, A6, A6_1, A6_2, A7, A8, A8_o, A9, A10, A10_o,
    B1_a, B1_b, B1_c, B2, B2_1, B3, B3_1all, B3_1o,
    C1_a, C1_b, C1_c, C1_d, C1_e, C1_f, C2, C3_all, C4, C4_o, C5, C6, C7, C7_1all, C8, C8_1, C9, C9_1, C10, C11, C11_1, C11_2, C12, C13, C14, C15, C16, C17, C18, C18_1, C18_2, C18_3all, C18_3o, C19, C20, C20_1, C20_2, C20_3, C21_a, C21_b, C21_c, C21_d, C21_e, C21_f, C21_g, C21_h, C21_i, C21_j,
    D1, D2, D3, D4, D5, D6, D7, D8, D9, D10, D11, D12, D13, D14,
    E1, E2, E3, E4, E5, E6, E7, E8, E9, E10, E11, E12, E13, E14, E15, E16, E17, E18, E19, E20, E21, E22, E23, E24, E25, E26, E27, E28,    
    F1, F2, F3, F4, F5, F6, F7, F8, F9, F10, F11, F12, F13, F14,
    G1, G2, G3, G4, G5, G6, G7, G7_1, G8, G9, G10, G11, G12, G13, G14, G15, G16, G17, G18, G19, G20, G21, G21_1, G22, G22_1,
    H1, H2, H3, H4, H5, H6, H7, H8, H9, H10, H11, H12, H13, H14, H15, H16, H17, H18, H19, H20, H21, H22,
    I1, I2, I3, I4, I5, I6, I7, I8, I9, I10, I11, I12, I13, I14, I15, I16, I17, I18, I19, I20, I21, I22)
    
    VALUES(NOW(),
    '$A1','$A2','$A3','$A4','$A4_o','$A5',$A5_1','$A5_2','$A5_3all','$A5_3o','$A5_4','$A5_5','$A6','$A6_1','$A6_2','$A7','$A8','$A8_o','$A9','$A10', '$A10_o','$B1_a','$B1_b','$B1_c','$B2','$B2_1','$B3','$B3_1all','$B3_1o','$C1_a','$C1_b','$C1_c','$C1_d','$C1_e','$C1_f','$C2','$C3_all','$C4','$C4_o','$C5','$C6','$C7','$C7_1all','$C8','$C8_1','$C9','$C9_1','$C10','$C11','$C11_1','$C11_2','$C12','$C13','$C14','$C15','$C16','$C17','$C18','$C18_1', '$C18_2','$C18_3all','$C18_3o','$C19','$C20','$C20_1','$C20_2','$C20_3','$C21_a','$C21_b','$C21_c','$C21_d','$C21_e','$C21_f','$C21_g','$C21_h', '$C21_i','$C21_j','$D1','$D2','$D3','$D4','$D5','$D6','$D7','$D8','$D9','$D10','$D11','$D12','$D13','$D14','$E1','$E2','$E3','$E4','$E5','$E6','$E7', '$E8','$E9','$E10','$E11','$E12','$E13','$E14','$E15','$E16','$E17','$E18','$E19','$E20','$E21','$E22','$E23','$E24','$E25','$E26','$E27','$E28','$F1','$F2','$F3','$F4','$F5','$F6','$F7','$F8','$F9','$F10','$F11','$F12','$F13','$F14','$G1','$G2','$G3','$G4','$G5','$G6','$G7','$G7_1',$G8','$G9','$G10','$G11','$G12','$G13','$G14','$G15','$G16','$G17','$G18','$G19','$G20','$G21','$G21_1','$G22','$G22_1','$H1','$H2','$H3','$H4','$H5','$H6','$H7','$H8', '$H9','$H10','$H11','$H12','$H13','$H14','$H15','$H16','$H17','$H18','$H19','$H20','$H21','$H22','$I1','$I2','$I3','$I4','$I5','$I6','$I7','$I8','$I9','$I10','$I11','$I12','$I13','$I14','$I15','$I16','$I17','$I18','$I19','$I20','$I21','$I22')";

    $conn->query($sql);
    $conn->close();
?>

<!doctype html>
<html>
<head>
    <title>Done</title>
    <meta http-equiv="Content-Type" content="text/html, charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="themes/exp.min.css"/>
    <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css"/>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css"/> 
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    
    <style>        
	    section{
            width: 90%; line-height: 5em; margin: 17.5% auto; border-radius: 10px;
            background-color: #FFFFFF; box-shadow: #cccccc 0px 0px 1px 1px;
            font-size: 2em; position: relative;
        }
    </style>
</head>
    
<body style="font-family: Microsoft JhengHei">
    <section>
        <center>本研究到此結束，再次感謝您的耐心填答！</center>
    </section>
</body>
</html>
