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
    $t76=$_POST['t76'];   $t77=$_POST['t77'];   $t78=$_POST['t78'];   $t79=$_POST['t79'];   $t80=$_POST['t80'];
    $t81=$_POST['t81'];   $t82=$_POST['t82'];   $t83=$_POST['t83'];   $t84=$_POST['t84'];   $t85=$_POST['t85'];
    $t86=$_POST['t86'];   $t87=$_POST['t87'];   $t88=$_POST['t88'];   $t89=$_POST['t89'];   $t90=$_POST['t90'];
    $t91=$_POST['t91'];   $t92=$_POST['t92'];   $t93=$_POST['t93'];   $t94=$_POST['t94'];   $t95=$_POST['t95'];
    $t96=$_POST['t96'];   $t97=$_POST['t97'];   $t98=$_POST['t98'];   $t99=$_POST['t99'];   $t100=$_POST['t100'];
    $t101=$_POST['t101']; $t102=$_POST['t102']; $t103=$_POST['t103']; $t104=$_POST['t104']; $t105=$_POST['t105'];
    $t106=$_POST['t106']; $t107=$_POST['t107']; $t108=$_POST['t108']; $t109=$_POST['t109']; $t110=$_POST['t110'];
    $t111=$_POST['t111']; $t112=$_POST['t112']; $t113=$_POST['t113']; $t114=$_POST['t114']; $t115=$_POST['t115'];
    $t116=$_POST['t116']; $t117=$_POST['t117']; $t118=$_POST['t118']; $t119=$_POST['t119']; $t120=$_POST['t120'];
    $t121=$_POST['t121']; $t122=$_POST['t122']; $t123=$_POST['t123']; $t124=$_POST['t124']; $t125=$_POST['t125'];
    $t126=$_POST['t126'];

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
    $Time76=$_POST['Time76']; $Time77=$_POST['Time77']; $Time78=$_POST['Time78']; $Time79=$_POST['Time79']; $Time80=$_POST['Time80'];
    $Time81=$_POST['Time81']; $Time82=$_POST['Time82']; $Time83=$_POST['Time83']; $Time84=$_POST['Time84']; $Time85=$_POST['Time85'];
    $Time86=$_POST['Time86']; $Time87=$_POST['Time87']; $Time88=$_POST['Time88']; $Time89=$_POST['Time89']; $Time90=$_POST['Time90'];
    $Time91=$_POST['Time91']; $Time92=$_POST['Time92']; $Time93=$_POST['Time93']; $Time94=$_POST['Time94']; $Time95=$_POST['Time95'];
    $Time96=$_POST['Time96'];

    $c2=$_POST['c2'];   $c3=$_POST['c3'];   $c4=$_POST['c4'];   $c5=$_POST['c5'];   $c6=$_POST['c6'];

    if(!empty($_POST['re1'])){
        $re1=$_POST['re1'];   $re2=$_POST['re2'];   $re3=$_POST['re3'];   $re4=$_POST['re4'];   $re5=$_POST['re5'];
        $re6=$_POST['re6'];   $re7=$_POST['re7'];   $re8=$_POST['re8'];   $re9=$_POST['re9'];   $re10=$_POST['re10'];

        $servername ="***";
        $username   ="***";
        $password   ="***";
        $dbname     ="***";
        $conn=new mysqli($servername, $username, $password, $dbname);

        date_default_timezone_set("Asia/Taipei");
        $date_dir=date("Y/m/d/h:i:sa");
        $sql="INSERT INTO sort(date, s1, s2, s3, s4, s5, s6, s7, s8, s9, s10) VALUES('$date_dir', '$re1', '$re2', '$re3', '$re4', '$re5', '$re6', '$re7', '$re8', '$re9', '$re10')";
        $conn->query($sql);
        $conn->close();
    }
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8;" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <title>Questionnaire 8</title>    
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
        <form method="post" name="exp9" id="exp9" onsubmit="return check();" accept-charset="utf-8" style="padding: 1%">
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
            <input type=hidden name="t80" value="<?php echo htmlspecialchars($t80); ?>">
            <input type=hidden name="t81" value="<?php echo htmlspecialchars($t81); ?>">
            <input type=hidden name="t82" value="<?php echo htmlspecialchars($t82); ?>">
            <input type=hidden name="t83" value="<?php echo htmlspecialchars($t83); ?>">
            <input type=hidden name="t84" value="<?php echo htmlspecialchars($t84); ?>">
            <input type=hidden name="t85" value="<?php echo htmlspecialchars($t85); ?>">
            <input type=hidden name="t86" value="<?php echo htmlspecialchars($t86); ?>">
            <input type=hidden name="t87" value="<?php echo htmlspecialchars($t87); ?>">
            <input type=hidden name="t88" value="<?php echo htmlspecialchars($t88); ?>">
            <input type=hidden name="t89" value="<?php echo htmlspecialchars($t89); ?>">
            <input type=hidden name="t90" value="<?php echo htmlspecialchars($t90); ?>">
            <input type=hidden name="t91" value="<?php echo htmlspecialchars($t91); ?>">
            <input type=hidden name="t92" value="<?php echo htmlspecialchars($t92); ?>">
            <input type=hidden name="t93" value="<?php echo htmlspecialchars($t93); ?>">
            <input type=hidden name="t94" value="<?php echo htmlspecialchars($t94); ?>">
            <input type=hidden name="t95" value="<?php echo htmlspecialchars($t95); ?>">
            <input type=hidden name="t96" value="<?php echo htmlspecialchars($t96); ?>">
            <input type=hidden name="t97" value="<?php echo htmlspecialchars($t97); ?>">
            <input type=hidden name="t98" value="<?php echo htmlspecialchars($t98); ?>">
            <input type=hidden name="t99" value="<?php echo htmlspecialchars($t99); ?>">
            <input type=hidden name="t100" value="<?php echo htmlspecialchars($t100); ?>">
            <input type=hidden name="t101" value="<?php echo htmlspecialchars($t101); ?>">
            <input type=hidden name="t102" value="<?php echo htmlspecialchars($t102); ?>">
            <input type=hidden name="t103" value="<?php echo htmlspecialchars($t103); ?>">
            <input type=hidden name="t104" value="<?php echo htmlspecialchars($t104); ?>">
            <input type=hidden name="t105" value="<?php echo htmlspecialchars($t105); ?>">
            <input type=hidden name="t106" value="<?php echo htmlspecialchars($t106); ?>">
            <input type=hidden name="t107" value="<?php echo htmlspecialchars($t107); ?>">
            <input type=hidden name="t108" value="<?php echo htmlspecialchars($t108); ?>">
            <input type=hidden name="t109" value="<?php echo htmlspecialchars($t109); ?>">
            <input type=hidden name="t110" value="<?php echo htmlspecialchars($t110); ?>">
            <input type=hidden name="t111" value="<?php echo htmlspecialchars($t111); ?>">
            <input type=hidden name="t112" value="<?php echo htmlspecialchars($t112); ?>">
            <input type=hidden name="t113" value="<?php echo htmlspecialchars($t113); ?>">
            <input type=hidden name="t114" value="<?php echo htmlspecialchars($t114); ?>">
            <input type=hidden name="t115" value="<?php echo htmlspecialchars($t115); ?>">
            <input type=hidden name="t116" value="<?php echo htmlspecialchars($t116); ?>">
            <input type=hidden name="t117" value="<?php echo htmlspecialchars($t117); ?>">
            <input type=hidden name="t118" value="<?php echo htmlspecialchars($t118); ?>">
            <input type=hidden name="t119" value="<?php echo htmlspecialchars($t119); ?>">
            <input type=hidden name="t120" value="<?php echo htmlspecialchars($t120); ?>">
            <input type=hidden name="t121" value="<?php echo htmlspecialchars($t121); ?>">
            <input type=hidden name="t122" value="<?php echo htmlspecialchars($t122); ?>">
            <input type=hidden name="t123" value="<?php echo htmlspecialchars($t123); ?>">
            <input type=hidden name="t124" value="<?php echo htmlspecialchars($t124); ?>">
            <input type=hidden name="t125" value="<?php echo htmlspecialchars($t125); ?>">
            <input type=hidden name="t126" value="<?php echo htmlspecialchars($t126); ?>">
            
            <input type=hidden name="t127" value="0">   <input type=hidden name="t128" value="0">
            <input type=hidden name="t129" value="0">   <input type=hidden name="t130" value="0">
            <input type=hidden name="t131" value="0">   <input type=hidden name="t132" value="0">
            <input type=hidden name="t133" value="0">   <input type=hidden name="t134" value="0">
            <input type=hidden name="t135" value="0">   <input type=hidden name="t136" value="0">
            <input type=hidden name="t137" value="0">   <input type=hidden name="t138" value="0">
            <input type=hidden name="t139" value="0">   <input type=hidden name="t140" value="0">
            <input type=hidden name="t141" value="0">   <input type=hidden name="t142" value="0">
            <input type=hidden name="t143" value="0">   <input type=hidden name="t144" value="0">
            <input type=hidden name="t145" value="0">   <input type=hidden name="t146" value="0">
            
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
            <input type=hidden name="Time80" id="Time80" value="<?php echo htmlspecialchars($Time80); ?>">
            <input type=hidden name="Time81" id="Time81" value="<?php echo htmlspecialchars($Time81); ?>">
            <input type=hidden name="Time82" id="Time82" value="<?php echo htmlspecialchars($Time82); ?>">
            <input type=hidden name="Time83" id="Time83" value="<?php echo htmlspecialchars($Time83); ?>">
            <input type=hidden name="Time84" id="Time84" value="<?php echo htmlspecialchars($Time84); ?>">
            <input type=hidden name="Time85" id="Time85" value="<?php echo htmlspecialchars($Time85); ?>">
            <input type=hidden name="Time86" id="Time86" value="<?php echo htmlspecialchars($Time86); ?>">
            <input type=hidden name="Time87" id="Time87" value="<?php echo htmlspecialchars($Time87); ?>">
            <input type=hidden name="Time88" id="Time88" value="<?php echo htmlspecialchars($Time88); ?>">
            <input type=hidden name="Time89" id="Time89" value="<?php echo htmlspecialchars($Time89); ?>">
            <input type=hidden name="Time90" id="Time90" value="<?php echo htmlspecialchars($Time90); ?>">
            <input type=hidden name="Time91" id="Time91" value="<?php echo htmlspecialchars($Time91); ?>">
            <input type=hidden name="Time92" id="Time92" value="<?php echo htmlspecialchars($Time92); ?>">
            <input type=hidden name="Time93" id="Time93" value="<?php echo htmlspecialchars($Time93); ?>">
            <input type=hidden name="Time94" id="Time94" value="<?php echo htmlspecialchars($Time94); ?>">
            <input type=hidden name="Time95" id="Time95" value="<?php echo htmlspecialchars($Time95); ?>">
            <input type=hidden name="Time96" id="Time96" value="<?php echo htmlspecialchars($Time96); ?>">
            
            <input type=hidden name="c2" value="<?php echo htmlspecialchars($c2); ?>">
            <input type=hidden name="c3" value="<?php echo htmlspecialchars($c3); ?>">
            <input type=hidden name="c4" value="<?php echo htmlspecialchars($c4); ?>">
            <input type=hidden name="c5" value="<?php echo htmlspecialchars($c5); ?>">
            <input type=hidden name="c6" value="<?php echo htmlspecialchars($c6); ?>">
            
            <br><br>
            <h1>我認為自己：</h1><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">在不得已時，我有時會說謊。</div></legend>
                <li>
                    <label><input type="radio" name="t127" value="5">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t127" value="4">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t127" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t127" value="2">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t127" value="1">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">我從不遮掩自己的錯誤。</div></legend>
                <li>
                    <label><input type="radio" name="t128" value="1">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t128" value="2">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t128" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t128" value="4">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t128" value="5">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">我有時也會欺負他人。</div></legend>
                <li>
                    <label><input type="radio" name="t129" value="5">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t129" value="4">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t129" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t129" value="2">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t129" value="1">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">我從不說髒話。</div></legend>
                <li>
                    <label><input type="radio" name="t130" value="1">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t130" value="2">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t130" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t130" value="4">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t130" value="5">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">有時，我寧可對別人進行報復，也不願寬恕或一忘了之。</div></legend>
                <li>
                    <label><input type="radio" name="t131" value="5">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t131" value="4">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t131" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t131" value="2">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t131" value="1">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">即使明知不會被抓住，我也總是遵紀守法。</div></legend>
                <li>
                    <label><input type="radio" name="t132" value="1">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t132" value="2">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t132" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t132" value="4">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t132" value="5">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">我在背後說過朋友的壞話。</div></legend>
                <li>
                    <label><input type="radio" name="t133" value="5">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t133" value="4">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t133" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t133" value="2">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t133" value="1">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">當發現別人在竊竊私語時，我就立即迴避不去聽。</div></legend>
                <li>
                    <label><input type="radio" name="t134" value="1">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t134" value="2">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t134" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t134" value="4">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t134" value="5">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">我曾經在售貨員多找給我錢時，不告訴他悄悄的收下。</div></legend>
                <li>
                    <label><input type="radio" name="t135" value="5">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t135" value="4">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t135" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t135" value="2">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t135" value="1">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">在海關，我總是申報每一件納稅品。</div></legend>
                <li>
                    <label><input type="radio" name="t136" value="1">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t136" value="2">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t136" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t136" value="4">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t136" value="5">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">小時候，我有時偷東西。</div></legend>
                <li>
                    <label><input type="radio" name="t137" value="5">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t137" value="4">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t137" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t137" value="2">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t137" value="1">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">我從未在街上扔過垃圾。</div></legend>
                <li>
                    <label><input type="radio" name="t138" value="1">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t138" value="2">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t138" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t138" value="4">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t138" value="5">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">我有時超速駕車。</div></legend>
                <li>
                    <label><input type="radio" name="t139" value="5">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t139" value="4">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t139" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t139" value="2">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t139" value="1">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">我從未看過黃色的書或雜誌。</div></legend>
                <li>
                    <label><input type="radio" name="t140" value="1">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t140" value="2">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t140" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t140" value="4">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t140" value="5">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">我曾經做過一些難以啟齒的事情。</div></legend>
                <li>
                    <label><input type="radio" name="t141" value="5">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t141" value="4">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t141" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t141" value="2">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t141" value="1">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">我從未拿過不屬於自己的東西。</div></legend>
                <li>
                    <label><input type="radio" name="t142" value="1">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t142" value="2">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t142" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t142" value="4">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t142" value="5">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">我曾假裝生病請假不去上班或上課。</div></legend>
                <li>
                    <label><input type="radio" name="t143" value="5">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t143" value="4">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t143" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t143" value="2">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t143" value="1">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">我損壞了圖書館的書或商店的商品後，總是去自首。</div></legend>
                <li>
                    <label><input type="radio" name="t144" value="1">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t144" value="2">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t144" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t144" value="4">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t144" value="5">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">我有一些惡習。</div></legend>
                <li>
                    <label><input type="radio" name="t145" value="5">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t145" value="4">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t145" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t145" value="2">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t145" value="1">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no9"></div><div name="item7" style="padding: 10px; font-size: 20px">我從不對別人的事說三道四。</div></legend>
                <li>
                    <label><input type="radio" name="t146" value="1">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t146" value="2">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t146" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t146" value="4">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t146" value="5">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <br>
            已完成 8/8<br>
            <br>
            <input name="submit" value="作答完畢" type="submit"><br>
            
            <script>
                //自動產生題號
                var counter2=counter;
                gen();

                function gen(){
                    No=document.getElementsByName("no9");
                    for(var i=0, ilen=No.length; i<ilen; i++){
                        No[i].textContent=counter+".";
                        counter++;
                    }
                }
                
                function check(){
                    var door=highlight();
                    if(door==1){ 
                        return false;	
                    }else{
                        document.getElementById("exp9").action="index10.php";
                        document.getElementById("exp9").submit();
                    }
                }
                
                function highlight(){
                    var count=[], j=0;
                    items=["Time127", "Time128", "Time129", "Time130", "Time131", "Time132", "Time133", "Time134", "Time135", "Time136",
                           "Time137", "Time138", "Time139", "Time140", "Time141", "Time142", "Time143", "Time144", "Time145", "Time146"];
                    for(var i=0, iLen=items.length; i<iLen; i++){
                        if(document.getElementById(items[i]).value==0){
                            divv=document.getElementsByName("item7")[i];
                            divv.style.background="yellow";
                            count[j]=i+counter2;
                            j++;
                        }else{
                            divv=document.getElementsByName("item7")[i];
                            divv.style.background="white";
                        }
                    }                    
                    if(j>0){
                        window.alert("第"+count+"題尚未作答！");
                        return 1;
                    }
                    dataupload();
                    return 0;
                }
                
                function dataupload(){
                    var i=0;
                    var num2=new Array(10);
                               
                    var k=0;
                    for(var i=0; i<2; i++){
                        for(var j=0; j<5; j++){
                            num2[k]=num[i][j]; 
                            k++;
                        }
                    }
                        
                    $.ajax({
                        url: "index9.php",
                        type: "POST",
                        data:{
                            re1: num2[0], re2: num2[1], re3: num2[2], re4: num2[3], re5: num2[4],
                            re6: num2[5], re7: num2[6], re8: num2[7], re9: num2[8], re10:num2[9]
                        }
                    })
                }
            </script>
        </form>
    </section>
</body>
</html>
