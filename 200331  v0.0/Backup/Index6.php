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
    $t51=$_POST['t51'];   $t52=$_POST['t52'];   $t53=$_POST['t53'];   $t54=$_POST['t54'];   $t55=$_POST['t55'];
    $t56=$_POST['t56'];   $t57=$_POST['t57'];   $t58=$_POST['t58'];   $t59=$_POST['t59'];   $t60=$_POST['t60'];
    $t61=$_POST['t61'];   $t62=$_POST['t62'];   $t63=$_POST['t63'];   $t64=$_POST['t64'];   $t65=$_POST['t65'];
    $t66=$_POST['t66'];   $t67=$_POST['t67'];   $t68=$_POST['t68'];   $t69=$_POST['t69'];   $t70=$_POST['t70'];
    $t71=$_POST['t71'];   $t72=$_POST['t72'];   $t73=$_POST['t73'];   $t74=$_POST['t74'];   $t75=$_POST['t75'];
    $t76=$_POST['t76'];   $t77=$_POST['t77'];   $t78=$_POST['t78'];   $t79=$_POST['t79'];

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
    $Time51=$_POST['Time51']; $Time52=$_POST['Time52']; $Time53=$_POST['Time53']; $Time54=$_POST['Time54']; $Time55=$_POST['Time55'];
    $Time56=$_POST['Time56']; $Time57=$_POST['Time57']; $Time58=$_POST['Time58']; $Time59=$_POST['Time59']; $Time60=$_POST['Time60'];
    $Time61=$_POST['Time61']; $Time62=$_POST['Time62']; $Time63=$_POST['Time63']; $Time64=$_POST['Time64']; $Time65=$_POST['Time65'];
    $Time66=$_POST['Time66']; $Time67=$_POST['Time67']; $Time68=$_POST['Time68']; $Time69=$_POST['Time69']; $Time70=$_POST['Time70'];
    $Time71=$_POST['Time71']; $Time72=$_POST['Time72']; $Time73=$_POST['Time73']; $Time74=$_POST['Time74']; $Time75=$_POST['Time75'];
    $Time76=$_POST['Time76']; $Time77=$_POST['Time77']; $Time78=$_POST['Time78']; $Time79=$_POST['Time79'];

    $c2=$_POST['c2'];   $c3=$_POST['c3'];   $c4=$_POST['c4'];   $c5=$_POST['c5'];
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8;" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <title>Questionnaire 5</title>    
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
        <form method="post" name="exp6" id="exp6" onsubmit="return check();" accept-charset="utf-8" style="padding: 1%">
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
            <input type=hidden name="t51" value="<?php echo htmlspecialchars($t51); ?>">
            <input type=hidden name="t52" value="<?php echo htmlspecialchars($t52); ?>">
            <input type=hidden name="t53" value="<?php echo htmlspecialchars($t53); ?>">
            <input type=hidden name="t54" value="<?php echo htmlspecialchars($t54); ?>">
            <input type=hidden name="t55" value="<?php echo htmlspecialchars($t55); ?>">
            <input type=hidden name="t56" value="<?php echo htmlspecialchars($t56); ?>">
            <input type=hidden name="t57" value="<?php echo htmlspecialchars($t57); ?>">
            <input type=hidden name="t58" value="<?php echo htmlspecialchars($t58); ?>">
            <input type=hidden name="t59" value="<?php echo htmlspecialchars($t59); ?>">
            <input type=hidden name="t60" value="<?php echo htmlspecialchars($t60); ?>">
            <input type=hidden name="t61" value="<?php echo htmlspecialchars($t61); ?>">
            <input type=hidden name="t62" value="<?php echo htmlspecialchars($t62); ?>">
            <input type=hidden name="t63" value="<?php echo htmlspecialchars($t63); ?>">
            <input type=hidden name="t64" value="<?php echo htmlspecialchars($t64); ?>">
            <input type=hidden name="t65" value="<?php echo htmlspecialchars($t65); ?>">
            <input type=hidden name="t66" value="<?php echo htmlspecialchars($t66); ?>">
            <input type=hidden name="t67" value="<?php echo htmlspecialchars($t67); ?>">
            <input type=hidden name="t68" value="<?php echo htmlspecialchars($t68); ?>">
            <input type=hidden name="t69" value="<?php echo htmlspecialchars($t69); ?>">
            <input type=hidden name="t70" value="<?php echo htmlspecialchars($t70); ?>">
            <input type=hidden name="t71" value="<?php echo htmlspecialchars($t71); ?>">
            <input type=hidden name="t72" value="<?php echo htmlspecialchars($t72); ?>">
            <input type=hidden name="t73" value="<?php echo htmlspecialchars($t73); ?>">
            <input type=hidden name="t74" value="<?php echo htmlspecialchars($t74); ?>">
            <input type=hidden name="t75" value="<?php echo htmlspecialchars($t75); ?>">
            <input type=hidden name="t76" value="<?php echo htmlspecialchars($t76); ?>">
            <input type=hidden name="t77" value="<?php echo htmlspecialchars($t77); ?>">
            <input type=hidden name="t78" value="<?php echo htmlspecialchars($t78); ?>">
            <input type=hidden name="t79" value="<?php echo htmlspecialchars($t79); ?>">

            <input type=hidden name="t80" value="0">    <input type=hidden name="t81" value="0">
            <input type=hidden name="t82" value="0">    <input type=hidden name="t83" value="0">
            <input type=hidden name="t84" value="0">    <input type=hidden name="t85" value="0">
            <input type=hidden name="t86" value="0">    <input type=hidden name="t87" value="0">
            <input type=hidden name="t88" value="0">    <input type=hidden name="t89" value="0">
            <input type=hidden name="t90" value="0">    <input type=hidden name="t91" value="0">
            <input type=hidden name="t92" value="0">    <input type=hidden name="t93" value="0">
            <input type=hidden name="t94" value="0">    <input type=hidden name="t95" value="0">
            <input type=hidden name="t96" value="0">
            
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
            <input type=hidden name="Time51" id="Time51" value="<?php echo htmlspecialchars($Time51); ?>">
            <input type=hidden name="Time52" id="Time52" value="<?php echo htmlspecialchars($Time52); ?>">
            <input type=hidden name="Time53" id="Time53" value="<?php echo htmlspecialchars($Time53); ?>">
            <input type=hidden name="Time54" id="Time54" value="<?php echo htmlspecialchars($Time54); ?>">
            <input type=hidden name="Time55" id="Time55" value="<?php echo htmlspecialchars($Time55); ?>">
            <input type=hidden name="Time56" id="Time56" value="<?php echo htmlspecialchars($Time56); ?>">
            <input type=hidden name="Time57" id="Time57" value="<?php echo htmlspecialchars($Time57); ?>">
            <input type=hidden name="Time58" id="Time58" value="<?php echo htmlspecialchars($Time58); ?>">
            <input type=hidden name="Time59" id="Time59" value="<?php echo htmlspecialchars($Time59); ?>">
            <input type=hidden name="Time60" id="Time60" value="<?php echo htmlspecialchars($Time60); ?>">   
            <input type=hidden name="Time61" id="Time61" value="<?php echo htmlspecialchars($Time61); ?>">
            <input type=hidden name="Time62" id="Time62" value="<?php echo htmlspecialchars($Time62); ?>">
            <input type=hidden name="Time63" id="Time63" value="<?php echo htmlspecialchars($Time63); ?>">
            <input type=hidden name="Time64" id="Time64" value="<?php echo htmlspecialchars($Time64); ?>">
            <input type=hidden name="Time65" id="Time65" value="<?php echo htmlspecialchars($Time65); ?>">
            <input type=hidden name="Time66" id="Time66" value="<?php echo htmlspecialchars($Time66); ?>">
            <input type=hidden name="Time67" id="Time67" value="<?php echo htmlspecialchars($Time67); ?>">
            <input type=hidden name="Time68" id="Time68" value="<?php echo htmlspecialchars($Time68); ?>">
            <input type=hidden name="Time69" id="Time69" value="<?php echo htmlspecialchars($Time69); ?>">
            <input type=hidden name="Time70" id="Time70" value="<?php echo htmlspecialchars($Time70); ?>">
            <input type=hidden name="Time71" id="Time71" value="<?php echo htmlspecialchars($Time71); ?>">
            <input type=hidden name="Time72" id="Time72" value="<?php echo htmlspecialchars($Time72); ?>">
            <input type=hidden name="Time73" id="Time73" value="<?php echo htmlspecialchars($Time73); ?>">
            <input type=hidden name="Time74" id="Time74" value="<?php echo htmlspecialchars($Time74); ?>">
            <input type=hidden name="Time75" id="Time75" value="<?php echo htmlspecialchars($Time75); ?>">
            <input type=hidden name="Time76" id="Time76" value="<?php echo htmlspecialchars($Time76); ?>">
            <input type=hidden name="Time77" id="Time77" value="<?php echo htmlspecialchars($Time77); ?>">
            <input type=hidden name="Time78" id="Time78" value="<?php echo htmlspecialchars($Time78); ?>">
            <input type=hidden name="Time79" id="Time79" value="<?php echo htmlspecialchars($Time79); ?>">
            
            <input type=hidden name="Time80" id="Time80">   <input type=hidden name="Time81" id="Time81" >
            <input type=hidden name="Time82" id="Time82">   <input type=hidden name="Time83" id="Time83">
            <input type=hidden name="Time84" id="Time84">   <input type=hidden name="Time85" id="Time85">
            <input type=hidden name="Time86" id="Time86">   <input type=hidden name="Time87" id="Time87">
            <input type=hidden name="Time88" id="Time88">   <input type=hidden name="Time89" id="Time89">
            <input type=hidden name="Time90" id="Time90">   <input type=hidden name="Time91" id="Time91">
            <input type=hidden name="Time92" id="Time92">   <input type=hidden name="Time93" id="Time93">
            <input type=hidden name="Time94" id="Time94">   <input type=hidden name="Time95" id="Time95">
            <input type=hidden name="Time96" id="Time96">                

            <input type=hidden name="c2" value="<?php echo htmlspecialchars($c2); ?>">
            <input type=hidden name="c3" value="<?php echo htmlspecialchars($c3); ?>">
            <input type=hidden name="c4" value="<?php echo htmlspecialchars($c4); ?>">
            <input type=hidden name="c5" value="<?php echo htmlspecialchars($c5); ?>">
            
            <br><br>
            <h1>我認為自己：</h1><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no6"></div><div name="item4" style="padding: 10px; font-size: 20px">我總是試著了解我自己。</div></legend>
                <li>
                    <label><input type="radio" name="t80" value="1" onclick="time80()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t80" value="2" onclick="time80()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t80" value="3" onclick="time80()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t80" value="4" onclick="time80()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t80" value="5" onclick="time80()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no6"></div><div name="item4" style="padding: 10px; font-size: 20px">我很注意我做事的風格。</div></legend>
                <li>
                    <label><input type="radio" name="t81" value="1" onclick="time81()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t81" value="2" onclick="time81()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t81" value="3" onclick="time81()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t81" value="4" onclick="time81()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t81" value="5" onclick="time81()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no6"></div><div name="item4" style="padding: 10px; font-size: 20px">一般來說，我並不太察覺自己。</div></legend>
                <li>
                    <label><input type="radio" name="t82" value="5" onclick="time82()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t82" value="4" onclick="time82()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t82" value="3" onclick="time82()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t82" value="2" onclick="time82()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t82" value="1" onclick="time82()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no6"></div><div name="item4" style="padding: 10px; font-size: 20px">我經常做自我反省。</div></legend>
                <li>
                    <label><input type="radio" name="t83" value="1" onclick="time83()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t83" value="2" onclick="time83()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t83" value="3" onclick="time83()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t83" value="4" onclick="time83()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t83" value="5" onclick="time83()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no6"></div><div name="item4" style="padding: 10px; font-size: 20px">我注意我呈現自己的方式。</div></legend>
                <li>
                    <label><input type="radio" name="t84" value="1" onclick="time84()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t84" value="2" onclick="time84()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t84" value="3" onclick="time84()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t84" value="4" onclick="time84()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t84" value="5" onclick="time84()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no6"></div><div name="item4" style="padding: 10px; font-size: 20px">我經常是我在做幻想時的主要對象。</div></legend>
                <li>
                    <label><input type="radio" name="t85" value="1" onclick="time85()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t85" value="2" onclick="time85()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t85" value="3" onclick="time85()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t85" value="4" onclick="time85()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t85" value="5" onclick="time85()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no6"></div><div name="item4" style="padding: 10px; font-size: 20px">我從不審視自己。</div></legend>
                <li>
                    <label><input type="radio" name="t86" value="5" onclick="time86()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t86" value="4" onclick="time86()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t86" value="3" onclick="time86()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t86" value="2" onclick="time86()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t86" value="1" onclick="time86()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no6"></div><div name="item4" style="padding: 10px; font-size: 20px">我很清楚我自己看事情的方式。</div></legend>
                <li>
                    <label><input type="radio" name="t87" value="1" onclick="time87()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t87" value="2" onclick="time87()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t87" value="3" onclick="time87()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t87" value="4" onclick="time87()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t87" value="5" onclick="time87()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no6"></div><div name="item4" style="padding: 10px; font-size: 20px">通常我很注意我內心的感覺。</div></legend>
                <li>
                    <label><input type="radio" name="t88" value="1" onclick="time88()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t88" value="2" onclick="time88()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t88" value="3" onclick="time88()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t88" value="4" onclick="time88()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t88" value="5" onclick="time88()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no6"></div><div name="item4" style="padding: 10px; font-size: 20px">我經常擔心能否塑造好形象。</div></legend>
                <li>
                    <label><input type="radio" name="t89" value="1" onclick="time89()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t89" value="2" onclick="time89()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t89" value="3" onclick="time89()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t89" value="4" onclick="time89()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t89" value="5" onclick="time89()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no6"></div><div name="item4" style="padding: 10px; font-size: 20px">我經常檢視我做事的動機。</div></legend>
                <li>
                    <label><input type="radio" name="t90" value="1" onclick="time90()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t90" value="2" onclick="time90()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t90" value="3" onclick="time90()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t90" value="4" onclick="time90()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t90" value="5" onclick="time90()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no6"></div><div name="item4" style="padding: 10px; font-size: 20px">我出門之前會先照鏡子。</div></legend>
                <li>
                    <label><input type="radio" name="t91" value="1" onclick="time91()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t91" value="2" onclick="time91()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t91" value="3" onclick="time91()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t91" value="4" onclick="time91()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t91" value="5" onclick="time91()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no6"></div><div name="item4" style="padding: 10px; font-size: 20px">我有時覺得我是站在身外之處看我自己。</div></legend>
                <li>
                    <label><input type="radio" name="t92" value="1" onclick="time92()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t92" value="2" onclick="time92()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t92" value="3" onclick="time92()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t92" value="4" onclick="time92()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t92" value="5" onclick="time92()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no6"></div><div name="item4" style="padding: 10px; font-size: 20px">我很在乎別人如何看我。</div></legend>
                <li>
                    <label><input type="radio" name="t93" value="1" onclick="time93()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t93" value="2" onclick="time93()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t93" value="3" onclick="time93()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t93" value="4" onclick="time93()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t93" value="5" onclick="time93()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no6"></div><div name="item4" style="padding: 10px; font-size: 20px">我留心自己心情的起伏。</div></legend>
                <li>
                    <label><input type="radio" name="t94" value="1" onclick="time94()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t94" value="2" onclick="time94()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t94" value="3" onclick="time94()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t94" value="4" onclick="time94()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t94" value="5" onclick="time94()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no6"></div><div name="item4" style="padding: 10px; font-size: 20px">我經常注意到我的外表。</div></legend>
                <li>
                    <label><input type="radio" name="t95" value="1" onclick="time95()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t95" value="2" onclick="time95()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t95" value="3" onclick="time95()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t95" value="4" onclick="time95()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t95" value="5" onclick="time95()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no6"></div><div name="item4" style="padding: 10px; font-size: 20px">我在解決問題時，很注意我的思考方式。</div></legend>
                <li>
                    <label><input type="radio" name="t96" value="1" onclick="time96()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t96" value="2" onclick="time96()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t96" value="3" onclick="time96()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t96" value="4" onclick="time96()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t96" value="5" onclick="time96()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no6"></div><div style="padding: 10px; font-size: 20px">我奔放豪爽不在乎他人眼光。</div></legend>
                <li>
                    <label><input type="radio" name="c6" value="5">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="c6" value="4">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="c6" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="c6" value="2">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="c6" value="1">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br> 
            <br>
            已完成 5/8<br>
            <br>
            <input name="submit" value="下一頁" type="submit"><br>
                
            <script>
                //自動產生題號
                var counter2=counter;
                gen();

                function gen(){
                    No=document.getElementsByName("no6");
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
                        document.getElementById("exp6").action="index7.php";
                        document.getElementById("exp6").submit();
                    }
                }
                
                function highlight(){
                    var count=[], j=0;
                    items=["Time80", "Time81", "Time82", "Time83", "Time84", "Time85", "Time86", "Time87", "Time88", "Time89",
                           "Time90", "Time91", "Time92", "Time93", "Time94", "Time95", "Time96"];
                    for(var i=0, iLen=items.length; i<iLen; i++){
                        if(document.getElementById(items[i]).value==0){
                            divv=document.getElementsByName("item4")[i];
                            divv.style.background="yellow";
                            count[j]=i+counter2;
                            j++;
                        }else{
                            divv=document.getElementsByName("item4")[i];
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
                var tt80=0, tt81=0, tt82=0, tt83=0, tt84=0, tt85=0, tt86=0, tt87=0, tt88=0, tt89=0,
                    tt90=0, tt91=0, tt92=0, tt93=0, tt94=0, tt95=0, tt96=0;
                var Item4=document.getElementsByName("item4");
                var t=0;

                function timescore(){
                    t++;
                    //每隔一秒執行一次(加秒)
                    setTimeout("timescore()",1);
                }
                timescore();
                
                function time80(){
                    tt80=tt80+t;
                    t=0;
                    document.getElementById("Time80").value=tt80;
                }
                function time81(){
                    tt81=tt81+t;
                    t=0;
                    document.getElementById("Time81").value=tt81;
                }
                function time82(){
                    tt82=tt82+t;
                    t=0;
                    document.getElementById("Time82").value=tt82;
                }
                function time83(){
                    tt83=tt83+t;
                    t=0;
                    document.getElementById("Time83").value=tt83;
                }
                function time84(){
                    tt84=tt84+t;
                    t=0;
                    document.getElementById("Time84").value=tt84;
                }
                function time85(){
                    tt85=tt85+t;
                    t=0;
                    document.getElementById("Time85").value=tt85;
                }
                function time86(){
                    tt86=tt86+t;
                    t=0;
                    document.getElementById("Time86").value=tt86;
                }
                function time87(){
                    tt87=tt87+t;
                    t=0;
                    document.getElementById("Time87").value=tt87;
                }
                function time88(){
                    tt88=tt88+t;
                    t=0;
                    document.getElementById("Time88").value=tt88;
                }
                function time89(){
                    tt89=tt89+t;
                    t=0;
                    document.getElementById("Time89").value=tt89;
                }
                function time90(){
                    tt90=tt90+t;
                    t=0;
                    document.getElementById("Time90").value=tt90;
                }
                function time91(){
                    tt91=tt91+t;
                    t=0;
                    document.getElementById("Time91").value=tt91;
                }
                function time92(){
                    tt92=tt92+t;
                    t=0;
                    document.getElementById("Time92").value=tt92;
                }
                function time93(){
                    tt93=tt93+t;
                    t=0;
                    document.getElementById("Time93").value=tt93;
                }
                function time94(){
                    tt94=tt94+t;
                    t=0;
                    document.getElementById("Time94").value=tt94;
                }
                function time95(){
                    tt95=tt95+t;
                    t=0;
                    document.getElementById("Time95").value=tt95;
                }
                function time96(){
                    tt96=tt96+t;
                    t=0;
                    document.getElementById("Time96").value=tt96;
                }
                
                function sortitem(){
                    var min_pois=0, max_pois=0;
                    Instock=[tt80, tt81, tt82, tt83, tt84, tt85, tt86, tt87, tt88, tt89,
                             tt90, tt91, tt92, tt93, tt94, tt95, tt96];
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
                    Min_item[4]=Item4[min_pois].textContent;
                    Max_item[4]=Item4[max_pois].textContent;
                }          
            </script>
        </form>
    </section>
</body>
</html>
