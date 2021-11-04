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
    $t26=$_POST['t26'];   $t27=$_POST['t27'];   $t28=$_POST['t28'];   $t29=$_POST['t29'];   $t30=$_POST['t30'];
    $t31=$_POST['t31'];   $t32=$_POST['t32'];   $t33=$_POST['t33'];   $t34=$_POST['t34'];   $t35=$_POST['t35'];
    $t36=$_POST['t36'];   $t37=$_POST['t37'];   $t38=$_POST['t38'];   $t39=$_POST['t39'];   $t40=$_POST['t40'];
    $t41=$_POST['t41'];   $t42=$_POST['t42'];   $t43=$_POST['t43'];   $t44=$_POST['t44'];   $t45=$_POST['t45'];
    $t46=$_POST['t46'];   $t47=$_POST['t47'];   $t48=$_POST['t48'];   $t49=$_POST['t49'];   $t50=$_POST['t50'];

    $Time1=$_POST['Time1'];   $Time2=$_POST['Time2'];   $Time3=$_POST['Time3'];   $Time4=$_POST['Time4'];   $Time5=$_POST['Time5'];
    $Time6=$_POST['Time6'];   $Time7=$_POST['Time7'];   $Time8=$_POST['Time8'];   $Time9=$_POST['Time9'];   $Time10=$_POST['Time10'];
    $Time11=$_POST['Time11']; $Time12=$_POST['Time12']; $Time13=$_POST['Time13']; $Time14=$_POST['Time14']; $Time15=$_POST['Time15'];
    $Time16=$_POST['Time16']; $Time17=$_POST['Time17']; $Time18=$_POST['Time18']; $Time19=$_POST['Time19']; $Time20=$_POST['Time20'];
    $Time21=$_POST['Time21']; $Time22=$_POST['Time22']; $Time23=$_POST['Time23']; $Time24=$_POST['Time24']; $Time25=$_POST['Time25'];
    $Time26=$_POST['Time26']; $Time27=$_POST['Time27']; $Time28=$_POST['Time28']; $Time29=$_POST['Time29']; $Time30=$_POST['Time30'];
    $Time31=$_POST['Time31']; $Time32=$_POST['Time32']; $Time33=$_POST['Time33']; $Time34=$_POST['Time34']; $Time35=$_POST['Time35'];
    $Time36=$_POST['Time36']; $Time37=$_POST['Time37']; $Time38=$_POST['Time38']; $Time39=$_POST['Time39']; $Time40=$_POST['Time40'];
    $Time41=$_POST['Time41']; $Time42=$_POST['Time42']; $Time43=$_POST['Time43']; $Time44=$_POST['Time44']; $Time45=$_POST['Time45'];
    $Time46=$_POST['Time46']; $Time47=$_POST['Time47']; $Time48=$_POST['Time48']; $Time49=$_POST['Time49']; $Time50=$_POST['Time50'];

    $c2=$_POST['c2'];   $c3=$_POST['c3'];
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8;" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <title>Questionnaire 3</title>    
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
        <form method="post" name="exp4" id="exp4" onsubmit="return check();" accept-charset="utf-8" style="padding: 1%">
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
            <input type=hidden name="t26" value="<?php echo htmlspecialchars($t26); ?>">
            <input type=hidden name="t27" value="<?php echo htmlspecialchars($t27); ?>">
            <input type=hidden name="t28" value="<?php echo htmlspecialchars($t28); ?>">
            <input type=hidden name="t29" value="<?php echo htmlspecialchars($t29); ?>">
            <input type=hidden name="t30" value="<?php echo htmlspecialchars($t30); ?>">
            <input type=hidden name="t31" value="<?php echo htmlspecialchars($t31); ?>">
            <input type=hidden name="t32" value="<?php echo htmlspecialchars($t32); ?>">
            <input type=hidden name="t33" value="<?php echo htmlspecialchars($t33); ?>">
            <input type=hidden name="t34" value="<?php echo htmlspecialchars($t34); ?>">
            <input type=hidden name="t35" value="<?php echo htmlspecialchars($t35); ?>">
            <input type=hidden name="t36" value="<?php echo htmlspecialchars($t36); ?>">
            <input type=hidden name="t37" value="<?php echo htmlspecialchars($t37); ?>">
            <input type=hidden name="t38" value="<?php echo htmlspecialchars($t38); ?>">
            <input type=hidden name="t39" value="<?php echo htmlspecialchars($t39); ?>">
            <input type=hidden name="t40" value="<?php echo htmlspecialchars($t40); ?>">
            <input type=hidden name="t41" value="<?php echo htmlspecialchars($t41); ?>">
            <input type=hidden name="t42" value="<?php echo htmlspecialchars($t42); ?>">
            <input type=hidden name="t43" value="<?php echo htmlspecialchars($t43); ?>">
            <input type=hidden name="t44" value="<?php echo htmlspecialchars($t44); ?>">
            <input type=hidden name="t45" value="<?php echo htmlspecialchars($t45); ?>">
            <input type=hidden name="t46" value="<?php echo htmlspecialchars($t46); ?>">
            <input type=hidden name="t47" value="<?php echo htmlspecialchars($t47); ?>">
            <input type=hidden name="t48" value="<?php echo htmlspecialchars($t48); ?>">
            <input type=hidden name="t49" value="<?php echo htmlspecialchars($t49); ?>">
            <input type=hidden name="t50" value="<?php echo htmlspecialchars($t50); ?>">
            
            <input type=hidden name="t51" value="0">    <input type=hidden name="t52" value="0">
            <input type=hidden name="t53" value="0">    <input type=hidden name="t54" value="0">
            <input type=hidden name="t55" value="0">    <input type=hidden name="t56" value="0">
            <input type=hidden name="t57" value="0">    <input type=hidden name="t58" value="0">
            <input type=hidden name="t59" value="0">    <input type=hidden name="t60" value="0">
            <input type=hidden name="t61" value="0">    <input type=hidden name="t62" value="0">
            <input type=hidden name="t63" value="0">    <input type=hidden name="t64" value="0">
            <input type=hidden name="t65" value="0">
                
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
            <input type=hidden name="Time26" id="Time26" value="<?php echo htmlspecialchars($Time26); ?>">
            <input type=hidden name="Time27" id="Time27" value="<?php echo htmlspecialchars($Time27); ?>">
            <input type=hidden name="Time28" id="Time28" value="<?php echo htmlspecialchars($Time28); ?>">
            <input type=hidden name="Time29" id="Time29" value="<?php echo htmlspecialchars($Time29); ?>">
            <input type=hidden name="Time30" id="Time30" value="<?php echo htmlspecialchars($Time30); ?>">   
            <input type=hidden name="Time31" id="Time31" value="<?php echo htmlspecialchars($Time31); ?>">
            <input type=hidden name="Time32" id="Time32" value="<?php echo htmlspecialchars($Time32); ?>">
            <input type=hidden name="Time33" id="Time33" value="<?php echo htmlspecialchars($Time33); ?>">
            <input type=hidden name="Time34" id="Time34" value="<?php echo htmlspecialchars($Time34); ?>">
            <input type=hidden name="Time35" id="Time35" value="<?php echo htmlspecialchars($Time35); ?>">
            <input type=hidden name="Time36" id="Time36" value="<?php echo htmlspecialchars($Time36); ?>">
            <input type=hidden name="Time37" id="Time37" value="<?php echo htmlspecialchars($Time37); ?>">
            <input type=hidden name="Time38" id="Time38" value="<?php echo htmlspecialchars($Time38); ?>">
            <input type=hidden name="Time39" id="Time39" value="<?php echo htmlspecialchars($Time39); ?>">
            <input type=hidden name="Time40" id="Time40" value="<?php echo htmlspecialchars($Time40); ?>">   
            <input type=hidden name="Time41" id="Time41" value="<?php echo htmlspecialchars($Time41); ?>">
            <input type=hidden name="Time42" id="Time42" value="<?php echo htmlspecialchars($Time42); ?>">
            <input type=hidden name="Time43" id="Time43" value="<?php echo htmlspecialchars($Time43); ?>">
            <input type=hidden name="Time44" id="Time44" value="<?php echo htmlspecialchars($Time44); ?>">
            <input type=hidden name="Time45" id="Time45" value="<?php echo htmlspecialchars($Time45); ?>">
            <input type=hidden name="Time46" id="Time46" value="<?php echo htmlspecialchars($Time46); ?>">
            <input type=hidden name="Time47" id="Time47" value="<?php echo htmlspecialchars($Time47); ?>">
            <input type=hidden name="Time48" id="Time48" value="<?php echo htmlspecialchars($Time48); ?>">
            <input type=hidden name="Time49" id="Time49" value="<?php echo htmlspecialchars($Time49); ?>">
            <input type=hidden name="Time50" id="Time50" value="<?php echo htmlspecialchars($Time50); ?>">
            
            <input type=hidden name="Time51" id="Time51">   <input type=hidden name="Time52" id="Time52">
            <input type=hidden name="Time53" id="Time53">   <input type=hidden name="Time54" id="Time54">
            <input type=hidden name="Time55" id="Time55">   <input type=hidden name="Time56" id="Time56">
            <input type=hidden name="Time57" id="Time57">   <input type=hidden name="Time58" id="Time58">
            <input type=hidden name="Time59" id="Time59">   <input type=hidden name="Time60" id="Time60">
            <input type=hidden name="Time61" id="Time61">   <input type=hidden name="Time62" id="Time62">
            <input type=hidden name="Time63" id="Time63">   <input type=hidden name="Time64" id="Time64">
            <input type=hidden name="Time65" id="Time65">                
                
            <input type=hidden name="c2" value="<?php echo htmlspecialchars($c2); ?>">
            <input type=hidden name="c3" value="<?php echo htmlspecialchars($c3); ?>">
            
            <br><br>
            <h1>我認為自己：</h1><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no4"></div><div name="item2" style="padding: 10px; font-size: 20px">朋友們說我愛爭論。</div></legend>
                <li>
                    <label><input type="radio" name="t51" value="1" onclick="time51()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t51" value="2" onclick="time51()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t51" value="3" onclick="time51()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t51" value="4" onclick="time51()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t51" value="5" onclick="time51()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no4"></div><div name="item2" style="padding: 10px; font-size: 20px">我容易突然發怒，但會很快平靜下來。</div></legend>
                <li>
                    <label><input type="radio" name="t52" value="1" onclick="time52()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t52" value="2" onclick="time52()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t52" value="3" onclick="time52()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t52" value="4" onclick="time52()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t52" value="5" onclick="time52()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no4"></div><div name="item2" style="padding: 10px; font-size: 20px">我常常覺得自己與別人意見不一致。</div></legend>
                <li>
                    <label><input type="radio" name="t53" value="1" onclick="time53()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t53" value="2" onclick="time53()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t53" value="3" onclick="time53()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t53" value="4" onclick="time53()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t53" value="5" onclick="time53()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no4"></div><div name="item2" style="padding: 10px; font-size: 20px">有時候我覺得生活對我不公平。</div></legend>
                <li>
                    <label><input type="radio" name="t54" value="1" onclick="time54()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t54" value="2" onclick="time54()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t54" value="3" onclick="time54()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t54" value="4" onclick="time54()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t54" value="5" onclick="time54()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no4"></div><div name="item2" style="padding: 10px; font-size: 20px">當別人與我意見不一致時，我會不由自主地和別人爭論。</div></legend>
                <li>
                    <label><input type="radio" name="t55" value="1" onclick="time55()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t55" value="2" onclick="time55()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t55" value="3" onclick="time55()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t55" value="4" onclick="time55()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t55" value="5" onclick="time55()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no4"></div><div name="item2" style="padding: 10px; font-size: 20px">有時我會毫無理由的發怒。</div></legend>
                <li>
                    <label><input type="radio" name="t56" value="1" onclick="time56()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t56" value="2" onclick="time56()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t56" value="3" onclick="time56()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t56" value="4" onclick="time56()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t56" value="5" onclick="time56()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no4"></div><div name="item2" style="padding: 10px; font-size: 20px">如果有人激怒我，我可能會打他。</div></legend>
                <li>
                    <label><input type="radio" name="t57" value="1" onclick="time57()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t57" value="2" onclick="time57()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t57" value="3" onclick="time57()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t57" value="4" onclick="time57()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t57" value="5" onclick="time57()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no4"></div><div name="item2" style="padding: 10px; font-size: 20px">我不會沒理由的打人。</div></legend>
                <li>
                    <label><input type="radio" name="t58" value="5" onclick="time58()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t58" value="4" onclick="time58()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t58" value="3" onclick="time58()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t58" value="2" onclick="time58()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t58" value="1" onclick="time58()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no4"></div><div name="item2" style="padding: 10px; font-size: 20px">我曾經威脅過我認識的人。</div></legend>
                <li>
                    <label><input type="radio" name="t59" value="1" onclick="time59()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t59" value="2" onclick="time59()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t59" value="3" onclick="time59()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t59" value="4" onclick="time59()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t59" value="5" onclick="time59()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no4"></div><div name="item2" style="padding: 10px; font-size: 20px">有人用力推了我一下，我就打他或她。</div></legend>
                <li>
                    <label><input type="radio" name="t60" value="1" onclick="time60()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t60" value="2" onclick="time60()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t60" value="3" onclick="time60()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t60" value="4" onclick="time60()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t60" value="5" onclick="time60()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no4"></div><div name="item2" style="padding: 10px; font-size: 20px">我很難控制我的脾氣。</div></legend>
                <li>
                    <label><input type="radio" name="t61" value="1" onclick="time61()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t61" value="2" onclick="time61()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t61" value="3" onclick="time61()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t61" value="4" onclick="time61()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t61" value="5" onclick="time61()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no4"></div><div name="item2" style="padding: 10px; font-size: 20px">當我很生氣的離開有人的房間時，我會很用力地關門。</div></legend>
                <li>
                    <label><input type="radio" name="t62" value="1" onclick="time62()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t62" value="2" onclick="time62()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t62" value="3" onclick="time62()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t62" value="4" onclick="time62()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t62" value="5" onclick="time62()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no4"></div><div name="item2" style="padding: 10px; font-size: 20px">當別人對我好時，我會懷疑他們是不是有求於我。</div></legend>
                <li>
                    <label><input type="radio" name="t63" value="1" onclick="time63()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t63" value="2" onclick="time63()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t63" value="3" onclick="time63()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t63" value="4" onclick="time63()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t63" value="5" onclick="time63()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no4"></div><div name="item2" style="padding: 10px; font-size: 20px">我曾經發怒到摔打、毀壞東西。</div></legend>
                <li>
                    <label><input type="radio" name="t64" value="1" onclick="time64()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t64" value="2" onclick="time64()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t64" value="3" onclick="time64()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t64" value="4" onclick="time64()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t64" value="5" onclick="time64()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no4"></div><div name="item2" style="padding: 10px; font-size: 20px">我是個喜歡安靜的人。</div></legend>
                <li>
                    <label><input type="radio" name="t65" value="5" onclick="time65()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t65" value="4" onclick="time65()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t65" value="3" onclick="time65()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t65" value="2" onclick="time65()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t65" value="1" onclick="time65()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no4"></div><div style="padding: 10px; font-size: 20px">我覺得暴力不能解決問題。</div></legend>
                <li>
                    <label><input type="radio" name="c4" value="5">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="c4" value="4">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="c4" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="c4" value="2">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="c4" value="1">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br> 
            <br>
            已完成 3/8<br>
            <br>
            <input name="submit" value="下一頁" type="submit"><br>
            
            <script>
                //自動產生題號
                var counter2=counter;
                gen();

                function gen(){
                    No=document.getElementsByName("no4");
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
                        document.getElementById("exp4").action="index5.php";
                        document.getElementById("exp4").submit();
                    }
                }
                
                function highlight(){
                    var count=[], j=0;
                    items=["Time51", "Time52", "Time53", "Time54", "Time55", "Time56", "Time57", "Time58", "Time59", "Time60",
                           "Time61", "Time62", "Time63", "Time64", "Time65"];
                    for(var i=0, iLen=items.length; i<iLen; i++){
                        if(document.getElementById(items[i]).value==0){
                            divv=document.getElementsByName("item2")[i];
                            divv.style.background="yellow";
                            count[j]=i+counter2;
                            j++;
                        }else{
                            divv=document.getElementsByName("item2")[i];
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
                var tt51=0, tt52=0, tt53=0, tt54=0, tt55=0, tt56=0, tt57=0, tt58=0, tt59=0, tt60=0,
                    tt61=0, tt62=0, tt63=0, tt64=0, tt65=0;
                var Item2=document.getElementsByName("item2");
                var t=0;

                function timescore(){
                    t++;
                    //每隔一秒執行一次(加秒)
                    setTimeout("timescore()",1);
                }
                timescore();
                
                function time51(){
                    tt51=tt51+t;
                    t=0;
                    document.getElementById("Time51").value=tt51;
                }
                function time52(){
                    tt52=tt52+t;
                    t=0;
                    document.getElementById("Time52").value=tt52;
                }
                function time53(){
                    tt53=tt53+t;
                    t=0;
                    document.getElementById("Time53").value=tt53;
                }
                function time54(){
                    tt54=tt54+t;
                    t=0;
                    document.getElementById("Time54").value=tt54;
                }
                function time55(){
                    tt55=tt55+t;
                    t=0;
                    document.getElementById("Time55").value=tt55;
                }
                function time56(){
                    tt56=tt56+t;
                    t=0;
                    document.getElementById("Time56").value=tt56;
                }
                function time57(){
                    tt57=tt57+t;
                    t=0;
                    document.getElementById("Time57").value=tt57;
                }
                function time58(){
                    tt58=tt58+t;
                    t=0;
                    document.getElementById("Time58").value=tt58;
                }
                function time59(){
                    tt59=tt59+t;
                    t=0;
                    document.getElementById("Time59").value=tt59;
                }
                function time60(){
                    tt60=tt60+t;
                    t=0;
                    document.getElementById("Time60").value=tt60;
                }
                function time61(){
                    tt61=tt61+t;
                    t=0;
                    document.getElementById("Time61").value=tt61;
                }
                function time62(){
                    tt62=tt62+t;
                    t=0;
                    document.getElementById("Time62").value=tt62;
                }
                function time63(){
                    tt63=tt63+t;
                    t=0;
                    document.getElementById("Time63").value=tt63;
                }
                function time64(){
                    tt64=tt64+t;
                    t=0;
                    document.getElementById("Time64").value=tt64;
                }
                function time65(){
                    tt65=tt65+t;
                    t=0;
                    document.getElementById("Time65").value=tt65;
                }
                
                function sortitem(){
                    var min_pois=0, max_pois=0;
                    Instock=[tt51, tt52, tt53, tt54, tt55, tt56, tt57, tt58, tt59, tt60,
                             tt61, tt62, tt63, tt64, tt65];
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
                    Min_item[2]=Item2[min_pois].textContent;
                    Max_item[2]=Item2[max_pois].textContent;
                }          
            </script>
        </form>
    </section>
</body>
</html>
