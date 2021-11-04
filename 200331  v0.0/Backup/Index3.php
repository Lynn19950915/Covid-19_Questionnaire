<?php
    header('Content-Type: text/html; charset=utf-8');
	$uname =$_POST['uname'];
    $utype =$_POST['utype'];
	$usex  =$_POST['usex'];
    $uold  =$_POST['uold'];
	$school=$_POST['school'];
	$ucar  =$_POST['ucar'];
	$umail =$_POST['umail'];

    $t1=$_POST['t1'];     $t2=$_POST['t2'];     $t3=$_POST['t3'];     $t4=$_POST['t4'];     $t5=$_POST['t5'];
    $t6=$_POST['t6'];     $t7=$_POST['t7'];     $t8=$_POST['t8'];     $t9=$_POST['t9'];     $t10=$_POST['t10'];
    $t11=$_POST['t11'];   $t12=$_POST['t12'];   $t13=$_POST['t13'];   $t14=$_POST['t14'];   $t15=$_POST['t15'];
    $t16=$_POST['t16'];   $t17=$_POST['t17'];   $t18=$_POST['t18'];   $t19=$_POST['t19'];   $t20=$_POST['t20'];
    $t21=$_POST['t21'];   $t22=$_POST['t22'];   $t23=$_POST['t23'];   $t24=$_POST['t24'];   $t25=$_POST['t25'];

    $Time1=$_POST['Time1'];   $Time2=$_POST['Time2'];   $Time3=$_POST['Time3'];   $Time4=$_POST['Time4'];   $Time5=$_POST['Time5'];
    $Time6=$_POST['Time6'];   $Time7=$_POST['Time7'];   $Time8=$_POST['Time8'];   $Time9=$_POST['Time9'];   $Time10=$_POST['Time10'];
    $Time11=$_POST['Time11']; $Time12=$_POST['Time12']; $Time13=$_POST['Time13']; $Time14=$_POST['Time14']; $Time15=$_POST['Time15'];
    $Time16=$_POST['Time16']; $Time17=$_POST['Time17']; $Time18=$_POST['Time18']; $Time19=$_POST['Time19']; $Time20=$_POST['Time20'];
    $Time21=$_POST['Time21']; $Time22=$_POST['Time22']; $Time23=$_POST['Time23']; $Time24=$_POST['Time24']; $Time25=$_POST['Time25'];

    $c2=$_POST['c2'];
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8;" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <title>Questionnaire 2</title>    
    <link rel="stylesheet" href="themes/exp.min.css" />
    <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" /> 
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <style>
        section{
            top: 10px;
            bottom: 10px;
            border-radius: 8px;     
            box-shadow: #cccccc 0px 0px 1px 1px;
            margin: 0px auto;
            width: 90%;
            font-size: 120%;
            position: relative;
            background: white;
        }
        
        li{
            margin: 0px auto;
            width: 90%;
        }    
    </style>
</head>

<body style="font-family: Microsoft JhengHei">
    <section>
        <form method="post" name="exp3" id="exp3" onsubmit="return check();" accept-charset="utf-8" style="padding: 1%">
            <input type=hidden name="uname"     value="<?php echo htmlspecialchars($uname); ?>">
            <input type=hidden name="utype"     value="<?php echo htmlspecialchars($utype); ?>">
            <input type=hidden name="usex"      value="<?php echo htmlspecialchars($usex); ?>">
            <input type=hidden name="uold"      value="<?php echo htmlspecialchars($uold); ?>">
            <input type=hidden name="school"    value="<?php echo htmlspecialchars($school); ?>">
            <input type=hidden name="ucar"      value="<?php echo htmlspecialchars($ucar); ?>">
            <input type=hidden name="umail"     value="<?php echo htmlspecialchars($umail); ?>"> 
      
            <input type=hidden name="t1"  value="<?php echo htmlspecialchars($t1); ?>">
            <input type=hidden name="t2"  value="<?php echo htmlspecialchars($t2); ?>">
            <input type=hidden name="t3"  value="<?php echo htmlspecialchars($t3); ?>">
            <input type=hidden name="t4"  value="<?php echo htmlspecialchars($t4); ?>">
            <input type=hidden name="t5"  value="<?php echo htmlspecialchars($t5); ?>">
            <input type=hidden name="t6"  value="<?php echo htmlspecialchars($t6); ?>">
            <input type=hidden name="t7"  value="<?php echo htmlspecialchars($t7); ?>">
            <input type=hidden name="t8"  value="<?php echo htmlspecialchars($t8); ?>">
            <input type=hidden name="t9"  value="<?php echo htmlspecialchars($t9); ?>">
            <input type=hidden name="t10" value="<?php echo htmlspecialchars($t10); ?>">
            <input type=hidden name="t11" value="<?php echo htmlspecialchars($t11); ?>">
            <input type=hidden name="t12" value="<?php echo htmlspecialchars($t12); ?>">
            <input type=hidden name="t13" value="<?php echo htmlspecialchars($t13); ?>">
            <input type=hidden name="t14" value="<?php echo htmlspecialchars($t14); ?>">
            <input type=hidden name="t15" value="<?php echo htmlspecialchars($t15); ?>">
            <input type=hidden name="t16" value="<?php echo htmlspecialchars($t16); ?>">
            <input type=hidden name="t17" value="<?php echo htmlspecialchars($t17); ?>">
            <input type=hidden name="t18" value="<?php echo htmlspecialchars($t18); ?>">
            <input type=hidden name="t19" value="<?php echo htmlspecialchars($t19); ?>">
            <input type=hidden name="t20" value="<?php echo htmlspecialchars($t20); ?>">
            <input type=hidden name="t21" value="<?php echo htmlspecialchars($t21); ?>">
            <input type=hidden name="t22" value="<?php echo htmlspecialchars($t22); ?>">
            <input type=hidden name="t23" value="<?php echo htmlspecialchars($t23); ?>">
            <input type=hidden name="t24" value="<?php echo htmlspecialchars($t24); ?>">
            <input type=hidden name="t25" value="<?php echo htmlspecialchars($t25); ?>">
            
            <input type=hidden name="t26" value="0">    <input type=hidden name="t27" value="0">
            <input type=hidden name="t28" value="0">    <input type=hidden name="t29" value="0">
            <input type=hidden name="t30" value="0">    <input type=hidden name="t31" value="0">
            <input type=hidden name="t32" value="0">    <input type=hidden name="t33" value="0">
            <input type=hidden name="t34" value="0">    <input type=hidden name="t35" value="0">
            <input type=hidden name="t36" value="0">    <input type=hidden name="t37" value="0">
            <input type=hidden name="t38" value="0">    <input type=hidden name="t39" value="0">
            <input type=hidden name="t40" value="0">    <input type=hidden name="t41" value="0">
            <input type=hidden name="t42" value="0">    <input type=hidden name="t43" value="0">
            <input type=hidden name="t44" value="0">    <input type=hidden name="t45" value="0">   
            <input type=hidden name="t46" value="0">    <input type=hidden name="t47" value="0">
            <input type=hidden name="t48" value="0">    <input type=hidden name="t49" value="0">
            <input type=hidden name="t50" value="0">
                
            <input type=hidden name="Time1"  id="Time1"  value="<?php echo htmlspecialchars($Time1); ?>">
            <input type=hidden name="Time2"  id="Time2"  value="<?php echo htmlspecialchars($Time2); ?>">
            <input type=hidden name="Time3"  id="Time3"  value="<?php echo htmlspecialchars($Time3); ?>">
            <input type=hidden name="Time4"  id="Time4"  value="<?php echo htmlspecialchars($Time4); ?>">
            <input type=hidden name="Time5"  id="Time5"  value="<?php echo htmlspecialchars($Time5); ?>">
            <input type=hidden name="Time6"  id="Time6"  value="<?php echo htmlspecialchars($Time6); ?>">
            <input type=hidden name="Time7"  id="Time7"  value="<?php echo htmlspecialchars($Time7); ?>">
            <input type=hidden name="Time8"  id="Time8"  value="<?php echo htmlspecialchars($Time8); ?>">
            <input type=hidden name="Time9"  id="Time9"  value="<?php echo htmlspecialchars($Time9); ?>">
            <input type=hidden name="Time10" id="Time10" value="<?php echo htmlspecialchars($Time10); ?>">
            <input type=hidden name="Time11" id="Time11" value="<?php echo htmlspecialchars($Time11); ?>">
            <input type=hidden name="Time12" id="Time12" value="<?php echo htmlspecialchars($Time12); ?>">
            <input type=hidden name="Time13" id="Time13" value="<?php echo htmlspecialchars($Time13); ?>">
            <input type=hidden name="Time14" id="Time14" value="<?php echo htmlspecialchars($Time14); ?>">
            <input type=hidden name="Time15" id="Time15" value="<?php echo htmlspecialchars($Time15); ?>">
            <input type=hidden name="Time16" id="Time16" value="<?php echo htmlspecialchars($Time16); ?>">
            <input type=hidden name="Time17" id="Time17" value="<?php echo htmlspecialchars($Time17); ?>">
            <input type=hidden name="Time18" id="Time18" value="<?php echo htmlspecialchars($Time18); ?>">
            <input type=hidden name="Time19" id="Time19" value="<?php echo htmlspecialchars($Time19); ?>">
            <input type=hidden name="Time20" id="Time20" value="<?php echo htmlspecialchars($Time20); ?>">   
            <input type=hidden name="Time21" id="Time21" value="<?php echo htmlspecialchars($Time21); ?>">
            <input type=hidden name="Time22" id="Time22" value="<?php echo htmlspecialchars($Time22); ?>">
            <input type=hidden name="Time23" id="Time23" value="<?php echo htmlspecialchars($Time23); ?>">
            <input type=hidden name="Time24" id="Time24" value="<?php echo htmlspecialchars($Time24); ?>">
            <input type=hidden name="Time25" id="Time25" value="<?php echo htmlspecialchars($Time25); ?>">
            
            <input type=hidden name="Time26" id="Time26">   <input type=hidden name="Time27" id="Time27">
            <input type=hidden name="Time28" id="Time28">   <input type=hidden name="Time29" id="Time29">
            <input type=hidden name="Time30" id="Time30">   <input type=hidden name="Time31" id="Time31">
            <input type=hidden name="Time32" id="Time32">   <input type=hidden name="Time33" id="Time33">
            <input type=hidden name="Time34" id="Time34">   <input type=hidden name="Time35" id="Time35">
            <input type=hidden name="Time36" id="Time36">   <input type=hidden name="Time37" id="Time37">
            <input type=hidden name="Time38" id="Time38">   <input type=hidden name="Time39" id="Time39">
            <input type=hidden name="Time40" id="Time40">   <input type=hidden name="Time41" id="Time41">
            <input type=hidden name="Time42" id="Time42">   <input type=hidden name="Time43" id="Time43">
            <input type=hidden name="Time44" id="Time44">   <input type=hidden name="Time45" id="Time45">
            <input type=hidden name="Time46" id="Time46">   <input type=hidden name="Time47" id="Time47">
            <input type=hidden name="Time48" id="Time48">   <input type=hidden name="Time49" id="Time49">
            <input type=hidden name="Time50" id="Time50">               
                
            <input type=hidden name="c2" value="<?php echo htmlspecialchars($c2); ?>">
            
            <br><br>
            <h1>我認為自己：</h1><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我不健談。</div></legend>
                <li>
                    <label><input type="radio" name="t26" value="5" onclick="time26()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t26" value="4" onclick="time26()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t26" value="3" onclick="time26()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t26" value="2" onclick="time26()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t26" value="1" onclick="time26()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我心很軟。</div></legend>
                <li>
                    <label><input type="radio" name="t27" value="1" onclick="time27()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t27" value="2" onclick="time27()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t27" value="3" onclick="time27()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t27" value="4" onclick="time27()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t27" value="5" onclick="time27()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我常忘了將東西放回原處。</div></legend>
                <li>
                    <label><input type="radio" name="t28" value="5" onclick="time28()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t28" value="4" onclick="time28()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t28" value="3" onclick="time28()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t28" value="2" onclick="time28()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t28" value="1" onclick="time28()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我很容易不高興。</div></legend>
                <li>
                    <label><input type="radio" name="t29" value="5" onclick="time29()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t29" value="4" onclick="time29()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t29" value="3" onclick="time29()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t29" value="2" onclick="time29()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t29" value="1" onclick="time29()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我想像力不豐富。</div></legend>
                <li>
                    <label><input type="radio" name="t30" value="5" onclick="time30()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t30" value="4" onclick="time30()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t30" value="3" onclick="time30()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t30" value="2" onclick="time30()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t30" value="1" onclick="time30()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我在聚會上和很多不同的人聊天。</div></legend>
                <li>
                    <label><input type="radio" name="t31" value="1" onclick="time31()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t31" value="2" onclick="time31()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t31" value="3" onclick="time31()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t31" value="4" onclick="time31()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t31" value="5" onclick="time31()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我對別人不怎麼感興趣。</div></legend>
                <li>
                    <label><input type="radio" name="t32" value="5" onclick="time32()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t32" value="4" onclick="time32()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t32" value="3" onclick="time32()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t32" value="2" onclick="time32()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t32" value="1" onclick="time32()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我喜歡有條理。</div></legend>
                <li>
                    <label><input type="radio" name="t33" value="1" onclick="time33()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t33" value="2" onclick="time33()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t33" value="3" onclick="time33()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t33" value="4" onclick="time33()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t33" value="5" onclick="time33()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我情緒變化很大。</div></legend>
                <li>
                    <label><input type="radio" name="t34" value="5" onclick="time34()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t34" value="4" onclick="time34()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t34" value="3" onclick="time34()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t34" value="2" onclick="time34()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t34" value="1" onclick="time34()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我理解事物快。</div></legend>
                <li>
                    <label><input type="radio" name="t35" value="1" onclick="time35()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t35" value="2" onclick="time35()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t35" value="3" onclick="time35()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t35" value="4" onclick="time35()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t35" value="5" onclick="time35()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我不喜歡被別人注意。</div></legend>
                <li>
                    <label><input type="radio" name="t36" value="5" onclick="time36()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t36" value="4" onclick="time36()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t36" value="3" onclick="time36()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t36" value="2" onclick="time36()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t36" value="1" onclick="time36()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我抽空幫助別人。</div></legend>
                <li>
                    <label><input type="radio" name="t37" value="1" onclick="time37()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t37" value="2" onclick="time37()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t37" value="3" onclick="time37()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t37" value="4" onclick="time37()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t37" value="5" onclick="time37()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我逃避責任。</div></legend>
                <li>
                    <label><input type="radio" name="t38" value="5" onclick="time38()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t38" value="4" onclick="time38()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t38" value="3" onclick="time38()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t38" value="2" onclick="time38()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t38" value="1" onclick="time38()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我常常會心情起伏不定。</div></legend>
                <li>
                    <label><input type="radio" name="t39" value="5" onclick="time39()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t39" value="4" onclick="time39()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t39" value="3" onclick="time39()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t39" value="2" onclick="time39()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t39" value="1" onclick="time39()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我使用複雜艱深的詞語。</div></legend>
                <li>
                    <label><input type="radio" name="t40" value="1" onclick="time40()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t40" value="2" onclick="time40()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t40" value="3" onclick="time40()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t40" value="4" onclick="time40()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t40" value="5" onclick="time40()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我不介意成為眾人關注的焦點。</div></legend>
                <li>
                    <label><input type="radio" name="t41" value="1" onclick="time41()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t41" value="2" onclick="time41()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t41" value="3" onclick="time41()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t41" value="4" onclick="time41()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t41" value="5" onclick="time41()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我能感受別人的情緒。</div></legend>
                <li>
                    <label><input type="radio" name="t42" value="1" onclick="time42()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t42" value="2" onclick="time42()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t42" value="3" onclick="time42()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t42" value="4" onclick="time42()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t42" value="5" onclick="time42()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我按計畫做事。</div></legend>
                <li>
                    <label><input type="radio" name="t43" value="1" onclick="time43()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t43" value="2" onclick="time43()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t43" value="3" onclick="time43()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t43" value="4" onclick="time43()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t43" value="5" onclick="time43()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我很容易發怒。</div></legend>
                <li>
                    <label><input type="radio" name="t44" value="5" onclick="time44()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t44" value="4" onclick="time44()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t44" value="3" onclick="time44()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t44" value="2" onclick="time44()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t44" value="1" onclick="time44()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我花時間反思一些事情。</div></legend>
                <li>
                    <label><input type="radio" name="t45" value="1" onclick="time45()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t45" value="2" onclick="time45()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t45" value="3" onclick="time45()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t45" value="4" onclick="time45()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t45" value="5" onclick="time45()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我不愛跟陌生人說話。</div></legend>
                <li>
                    <label><input type="radio" name="t46" value="5" onclick="time46()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t46" value="4" onclick="time46()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t46" value="3" onclick="time46()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t46" value="2" onclick="time46()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t46" value="1" onclick="time46()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我讓別人在和我相處時感覺很放鬆。</div></legend>
                <li>
                    <label><input type="radio" name="t47" value="1" onclick="time47()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t47" value="2" onclick="time47()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t47" value="3" onclick="time47()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t47" value="4" onclick="time47()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t47" value="5" onclick="time47()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我對工作要求準確無誤。</div></legend>
                <li>
                    <label><input type="radio" name="t48" value="1" onclick="time48()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t48" value="2" onclick="time48()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t48" value="3" onclick="time48()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t48" value="4" onclick="time48()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t48" value="5" onclick="time48()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我經常感到憂鬱。</div></legend>
                <li>
                    <label><input type="radio" name="t49" value="5" onclick="time49()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t49" value="4" onclick="time49()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t49" value="3" onclick="time49()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t49" value="2" onclick="time49()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t49" value="1" onclick="time49()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div name="item1" style="padding: 10px; font-size: 20px">我主意很多。</div></legend>
                <li>
                    <label><input type="radio" name="t50" value="1" onclick="time50()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t50" value="2" onclick="time50()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t50" value="3" onclick="time50()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t50" value="4" onclick="time50()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t50" value="5" onclick="time50()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no3"></div><div style="padding: 10px; font-size: 20px">避免傷害到別人，我很注意我的言詞。</div></legend>
                <li>
                    <label><input type="radio" name="c3" value="1">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="c3" value="2">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="c3" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="c3" value="4">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="c3" value="5">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br> 
            <br>
            已完成 2/8<br>
            <br>
            <input name="submit" value="下一頁" type="submit"><br>
            
            <script>
                //自動產生題號
                var counter2=counter;
                gen();

                function gen(){
                    No=document.getElementsByName("no3");
                    for(var i=0, ilen=No.length; i<ilen; i++){
                        No[i].textContent=counter+".";
                        counter++;
                    }
                }

                //除了排序計時、紀錄結果外，也要檢查是否填答完畢
                function check(){
                    sortitem();
                    var door=highlight();
                    if(door==1){ 
                        return false;	
                    }else{
                        document.getElementById("exp3").action="index4.php";
                        document.getElementById("exp3").submit();
                    }
                }

                function highlight(){
                    var count=[], j=0;
                    items=["Time26", "Time27", "Time28", "Time29", "Time30", "Time31", "Time32", "Time33", "Time34", "Time35",
                           "Time36", "Time37", "Time38", "Time39", "Time40", "Time41", "Time42", "Time43", "Time44", "Time45",
                           "Time46", "Time47", "Time48", "Time49", "Time50"];
                    for(var i=0, iLen=items.length; i<iLen; i++){
                        if(document.getElementById(items[i]).value==0){
                            divv=document.getElementsByName("item1")[i];
                            divv.style.background="yellow";
                            count[j]=i+counter2;
                            j++;
                        }else{
                            divv=document.getElementsByName("item1")[i];
                            divv.style.background="white";
                        }
                    }                    
                    if(j>0){
                        window.alert("第"+count+"題尚未作答！");
                        return 1;
                    }
                    return 0;
                }

                //計時器: 按下選項後紀錄秒數，時間歸零並重新計時
                var tt26=0, tt27=0, tt28=0, tt29=0, tt30=0, tt31=0, tt32=0, tt33=0, tt34=0, tt35=0,
                    tt36=0, tt37=0, tt38=0, tt39=0, tt40=0, tt41=0, tt42=0, tt43=0, tt44=0, tt45=0,
                    tt46=0, tt47=0, tt48=0, tt49=0, tt50=0;
                var Item1=document.getElementsByName("item1");
                var t=0;

                function timescore(){
                    t++;
                    //每隔一秒執行一次(加秒)
                    setTimeout("timescore()",1);
                }
                timescore();                    

                function time26(){
                    tt26=tt26+t;
                    t=0;
                    document.getElementById("Time26").value=tt26;
                }                    
                function time27(){
                    tt27=tt27+t;
                    t=0;
                    document.getElementById("Time27").value=tt27;  
                }
                function time28(){
                    tt28=tt28+t;
                    t=0;
                    document.getElementById("Time28").value=tt28;  
                }
                function time29(){
                    tt29=tt29+t;
                    t=0;
                    document.getElementById("Time29").value=tt29;  
                }
                function time30(){
                    tt30=tt30+t;
                    t=0;
                    document.getElementById("Time30").value=tt30;  
                }
                function time31(){
                    tt31=tt31+t;
                    t=0;
                    document.getElementById("Time31").value=tt31;
                }                    
                function time32(){
                    tt32=tt32+t;
                    t=0;
                    document.getElementById("Time32").value=tt32;  
                }
                function time33(){
                    tt33=tt33+t;
                    t=0;
                    document.getElementById("Time33").value=tt33;  
                }
                function time34(){
                    tt34=tt34+t;
                    t=0;
                    document.getElementById("Time34").value=tt34;  
                }
                function time35(){
                    tt35=tt35+t;
                    t=0;
                    document.getElementById("Time35").value=tt35;  
                }
                function time36(){
                    tt36=tt36+t;
                    t=0;
                    document.getElementById("Time36").value=tt36;
                }                    
                function time37(){
                    tt37=tt37+t;
                    t=0;
                    document.getElementById("Time37").value=tt37;  
                }
                function time38(){
                    tt38=tt38+t;
                    t=0;
                    document.getElementById("Time38").value=tt38;  
                }
                function time39(){
                    tt39=tt39+t;
                    t=0;
                    document.getElementById("Time39").value=tt39;  
                }
                function time40(){
                    tt40=tt40+t;
                    t=0;
                    document.getElementById("Time40").value=tt40;  
                }
                function time41(){
                    tt41=tt41+t;
                    t=0;
                    document.getElementById("Time41").value=tt41;
                }                    
                function time42(){
                    tt42=tt42+t;
                    t=0;
                    document.getElementById("Time42").value=tt42;  
                }
                function time43(){
                    tt43=tt43+t;
                    t=0;
                    document.getElementById("Time43").value=tt43;  
                }
                function time44(){
                    tt44=tt44+t;
                    t=0;
                    document.getElementById("Time44").value=tt44;  
                }
                function time45(){
                    tt45=tt45+t;
                    t=0;
                    document.getElementById("Time45").value=tt45;  
                }
                function time46(){
                    tt46=tt46+t;
                    t=0;
                    document.getElementById("Time46").value=tt46;  
                }
                function time47(){
                    tt47=tt47+t;
                    t=0;
                    document.getElementById("Time47").value=tt47;  
                }
                function time48(){
                    tt48=tt48+t;
                    t=0;
                    document.getElementById("Time48").value=tt48;  
                }
                function time49(){
                    tt49=tt49+t;
                    t=0;
                    document.getElementById("Time49").value=tt49;  
                }
                function time50(){
                    tt50=tt50+t;
                    t=0;
                    document.getElementById("Time50").value=tt50;  
                }

                function sortitem(){
                    var min_pois=0, max_pois=0;
                    Instock=[tt26, tt27, tt28, tt29, tt30, tt31, tt32, tt33, tt34, tt35,
                             tt36, tt37, tt38, tt39, tt40, tt41, tt42, tt43, tt44, tt45,
                             tt46, tt47, tt48, tt49, tt50];
                    var min_value=Instock[0];
                    var max_value=Instock[0];
                    
                    //逐筆取代，去尋找極大、極小值、記錄在各自的第一項
                    for(var i=0, iLen=Instock.length; i<iLen; i++){
                        if(min_value>Instock[i+1]){
                            min_value=Instock[i+1];
                            min_pois=i+1
                        }
                        if(max_value<Instock[i+1]){
                            max_value=Instock[i+1];
                            max_pois=i+1
                        }
                    }
                    Min_item[1]=Item1[min_pois].textContent;
                    Max_item[1]=Item1[max_pois].textContent;
                }          
            </script>
        </form>
    </section>
</body>
</html>
