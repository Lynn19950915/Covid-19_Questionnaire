<?php
    header('Content-Type: text/html; charset=utf-8');

    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    }else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip=$_SERVER['REMOTE_ADDR'];
    }
    date_default_timezone_set("Asia/Taipei");
    $date_dir=date("Y/m/d/h:i:sa");

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
    $t126=$_POST['t126']; $t127=$_POST['t127']; $t128=$_POST['t128']; $t129=$_POST['t129']; $t130=$_POST['t130'];
    $t131=$_POST['t131']; $t132=$_POST['t132']; $t133=$_POST['t133']; $t134=$_POST['t134']; $t135=$_POST['t135'];
    $t136=$_POST['t136']; $t137=$_POST['t137']; $t138=$_POST['t138']; $t139=$_POST['t139']; $t140=$_POST['t140'];
    $t141=$_POST['t141']; $t142=$_POST['t142']; $t143=$_POST['t143']; $t144=$_POST['t144']; $t145=$_POST['t145'];
    $t146=$_POST['t146'];

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


    $servername ="***";
    $username   ="***";
    $password   ="***";
    $dbname     ="***";
    $conn=new mysqli($servername, $username, $password, $dbname);

    $sql="INSERT INTO identity(type, ip, date, name, sex, old, school, carrer, mail) VALUES('$utype', '$ip', '$date_dir', '$uname', '$usex', '$uold', '$school', '$ucar', '$umail')";
    $conn->query($sql);

    $sql="INSERT INTO items
    (name, type, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, i31, i32, i33, i34, i35, i36, i37, i38, i39, i40, i41, i42, i43, i44, i45, i46, i47, i48, i49, i50, i51, i52, i53, i54, i55, i56, i57, i58, i59, i60, i61, i62, i63, i64, i65, i66, i67, i68, i69, i70, i71, i72, i73, i74, i75, i76, i77, i78, i79, i80, i81, i82, i83, i84, i85, i86, i87, i88, i89, i90, i91, i92, i93, i94, i95, i96, i97, i98, i99, i100, i101, i102, i103, i104, i105, i106, i107, i108, i109, i110, i111, i112, i113, i114, i115, i116, i117, i118, i119, i120, i121, i122, i123, i124, i125, i126, i127, i128, i129, i130, i131, i132, i133, i134, i135, i136, i137, i138, i139, i140, i141, i142, i143, i144, i145, i146)
    VALUES('$uname', '$utype', '$t1', '$t2', '$t3', '$t4', '$t5', '$t6', '$t7', '$t8', '$t9', '$t10', '$t11', '$t12', '$t13', '$t14', '$t15', '$t16', '$t17', '$t18', '$t19', '$t20', '$t21', '$t22', '$t23', '$t24', '$t25', '$t26', '$t27', '$t28', '$t29', '$t30', '$t31', '$t32', '$t33', '$t34', '$t35', '$t36', '$t37', '$t38', '$t39', '$t40', '$t41', '$t42', '$t43', '$t44', '$t45', '$t46', '$t47', '$t48', '$t49', '$t50', '$t51', '$t52', '$t53', '$t54', '$t55', '$t56', '$t57', '$t58', '$t59', '$t60', '$t61', '$t62', '$t63', '$t64', '$t65', '$t66', '$t67', '$t68', '$t69', '$t70', '$t71', '$t72', '$t73', '$t74', '$t75', '$t76', '$t77', '$t78', '$t79', '$t80', '$t81', '$t82', '$t83', '$t84', '$t85', '$t86', '$t87', '$t88', '$t89', '$t90', '$t91', '$t92', '$t93', '$t94', '$t95', '$t96', '$t97', '$t98', '$t99', '$t100', '$t101', '$t102', '$t103', '$t104', '$t105', '$t106', '$t107', '$t108', '$t109', '$t110', '$t111', '$t112', '$t113', '$t114', '$t115', '$t116', '$t117', '$t118', '$t119', '$t120', '$t121', '$t122', '$t123', '$t124', '$t125', '$t126', '$t127', '$t128', '$t129', '$t130', '$t131', '$t132', '$t133', '$t134', '$t135', '$t136', '$t137', '$t138', '$t139', '$t140', '$t141', '$t142', '$t143', '$t144', '$t145', '$t146')";
    $conn->query($sql);

    $sql = "INSERT INTO time
    (name, type, t1, t2, t3, t4, t5, t6, t7, t8, t9, t10, t11, t12, t13, t14, t15, t16, t17, t18, t19, t20, t21, t22, t23, t24, t25, t26, t27, t28, t29, t30, t31, t32, t33, t34, t35, t36, t37, t38, t39, t40, t41, t42, t43, t44, t45, t46, t47, t48, t49, t50, t51, t52, t53, t54, t55, t56, t57, t58, t59, t60, t61, t62, t63, t64, t65, t66, t67, t68, t69, t70, t71, t72, t73, t74, t75, t76, t77, t78, t79, t80, t81, t82, t83, t84, t85, t86, t87, t88, t89, t90, t91, t92, t93, t94, t95, t96)
    VALUES('$uname', '$utype', '$Time1', '$Time2', '$Time3', '$Time4', '$Time5', '$Time6', '$Time7', '$Time8', '$Time9', '$Time10', '$Time11', '$Time12', '$Time13', '$Time14', '$Time15', '$Time16', '$Time17', '$Time18', '$Time19', '$Time20', '$Time21', '$Time22', '$Time23', '$Time24', '$Time25', '$Time26', '$Time27', '$Time28', '$Time29', '$Time30', '$Time31', '$Time32', '$Time33', '$Time34', '$Time35', '$Time36', '$Time37', '$Time38', '$Time39', '$Time40', '$Time41', '$Time42', '$Time43', '$Time44', '$Time45', '$Time46', '$Time47', '$Time48', '$Time49', '$Time50', '$Time51', '$Time52', '$Time53', '$Time54', '$Time55', '$Time56', '$Time57', '$Time58', '$Time59', '$Time60', '$Time61', '$Time62', '$Time63', '$Time64', '$Time65', '$Time66', '$Time67', '$Time68', '$Time69', '$Time70', '$Time71', '$Time72', '$Time73', '$Time74', '$Time75', '$Time76', '$Time77', '$Time78', '$Time79', '$Time80', '$Time81', '$Time82', '$Time83', '$Time84', '$Time85', '$Time86', '$Time87', '$Time88', '$Time89', '$Time90', '$Time91', '$Time92', '$Time93', '$Time94', '$Time95', '$Time96')";
    $conn->query($sql);

    $sql="INSERT INTO check_item(name, type, c2, t35, c3, t12, c4, t73, c5, t56, c6, t89) VALUES('$uname', '$utype', '$c2', '$t35', '$c3', '$t12', '$c4', '$t73', '$c5', '$t56', '$c6', '$t89')";
    $conn->query($sql);
    $conn->close();
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8;" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <title>Thanks</title>    
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
        
        .result{
            float: left;
        }   
    </style>
</head>

<body style="font-family: Microsoft JhengHei">
    <section>
        <article dir="center" style="padding: 1%;"> 
            謝謝您的耐心作答！<br>
            祝您中獎！<br>
            <br>
            <div class="result" style="float: left">根據本次作答結果顯示，您可能是一個</div> 
                <div id="bidr1"      class="result" style="float: left"></div> 
                <div id="bidr_tran1" class="result" style="float: left"></div> 
                <div id="bidr2"      class="result" style="float: left"></div> 
                <div id="bidr_tran2" class="result" style="float: left"></div>
            <div class="result" style="float: left">個性</div>     
                <div id="bigfive1"   class="result" style="float: left"></div>
                <div id="bigfive2"   class="result" style="float: left"></div>
                <div id="bigfive3"   class="result" style="float: left"></div>
                <div id="bigfive4"   class="result" style="float: left"></div>
                <div id="bigfive5"   class="result" style="float: left"></div>
            <div class="result" style="float: left">除此之外，在行事上</div>      
                <div id="aggre1"     class="result" style="float: left"></div>
                <div id="aggre2"     class="result" style="float: left"></div>
                <div id="aggre3"     class="result" style="float: left"></div>
                <div id="aggre4"     class="result" style="float: left"></div>
            <div class="result" style="float: left">最後，為人處世</div>      
                <div id="control1"   class="result" style="float: left"></div>
                <div id="control2"   class="result" style="float: left"></div><br>
            <div style="clear:both;"></div>
            <br>
            以上結果僅作參考之用，再次謝謝您的參與！<br>
        </article>
        
        <script>    
            bidr();
            bigfive();
            aggre();
            control();
                        
            function bidr(){
                var t1 =Math.floor((<?php echo $t107; ?>)/5);   var t2 =Math.floor((<?php echo $t108; ?>)/5);
                var t3 =Math.floor((<?php echo $t109; ?>)/5);   var t4 =Math.floor((<?php echo $t110; ?>)/5);
                var t5 =Math.floor((<?php echo $t111; ?>)/5);   var t6 =Math.floor((<?php echo $t112; ?>)/5);
                var t7 =Math.floor((<?php echo $t113; ?>)/5);   var t8 =Math.floor((<?php echo $t114; ?>)/5);
                var t9 =Math.floor((<?php echo $t115; ?>)/5);   var t10=Math.floor((<?php echo $t116; ?>)/5);
                var t11=Math.floor((<?php echo $t117; ?>)/5);   var t12=Math.floor((<?php echo $t118; ?>)/5);
                var t13=Math.floor((<?php echo $t119; ?>)/5);   var t14=Math.floor((<?php echo $t120; ?>)/5);
                var t15=Math.floor((<?php echo $t121; ?>)/5);   var t16=Math.floor((<?php echo $t122; ?>)/5);
                var t17=Math.floor((<?php echo $t123; ?>)/5);   var t18=Math.floor((<?php echo $t124; ?>)/5);
                var t19=Math.floor((<?php echo $t125; ?>)/5);   var t20=Math.floor((<?php echo $t126; ?>)/5);
                var t21=Math.floor((<?php echo $t127; ?>)/4);   var t22=Math.floor((<?php echo $t128; ?>)/4);
                var t23=Math.floor((<?php echo $t129; ?>)/4);   var t24=Math.floor((<?php echo $t130; ?>)/4);
                var t25=Math.floor((<?php echo $t131; ?>)/4);   var t26=Math.floor((<?php echo $t132; ?>)/4);
                var t27=Math.floor((<?php echo $t133; ?>)/4);   var t28=Math.floor((<?php echo $t134; ?>)/4);
                var t29=Math.floor((<?php echo $t135; ?>)/4);   var t30=Math.floor((<?php echo $t136; ?>)/4);
                var t31=Math.floor((<?php echo $t137; ?>)/4);   var t32=Math.floor((<?php echo $t138; ?>)/4);
                var t33=Math.floor((<?php echo $t139; ?>)/4);   var t34=Math.floor((<?php echo $t140; ?>)/4);
                var t35=Math.floor((<?php echo $t141; ?>)/4);   var t36=Math.floor((<?php echo $t142; ?>)/4);
                var t37=Math.floor((<?php echo $t143; ?>)/4);   var t38=Math.floor((<?php echo $t144; ?>)/4);
                var t39=Math.floor((<?php echo $t145; ?>)/4);   var t40=Math.floor((<?php echo $t146; ?>)/4);
                    
                var sde=t1+t2+t3+t4+t5+t6+t7+t8+t9+t10+t11+t12+t13+t14+t15+t16+t17+t18+t19+t20;
                var im =t21+t22+t23+t24+t25+t26+t27+t28+t29+t30+t31+t32+t33+t34+t35+t36+t37+t38+t39+t40;
                
                if(sde>4.2|im>12.5){
                    if(sde>4.2){
                        document.getElementById("bidr1").textContent="容易受到社會觀感所影響";
                    }
                    if(sde>4.2&&im>12.5){
                        document.getElementById("bidr_tran1").textContent="，亦或";
                    }
                    if(im>12.5){
                        document.getElementById("bidr2").textContent="容易為迎合社會之期待，而不自覺誇大自我";
                    }
                    document.getElementById("bidr_tran2").textContent="的人。";
                }                    
            }
            
            function bigfive(){
                var ct1 =<?php echo $t1; ?>;    var ct2 =<?php echo $t2; ?>;
                var ct3 =<?php echo $t3; ?>;    var ct4 =<?php echo $t4; ?>;
                var ct5 =<?php echo $t5; ?>;    var ct6 =<?php echo $t6; ?>;
                var ct7 =<?php echo $t7; ?>;    var ct8 =<?php echo $t8; ?>;
                var ct9 =<?php echo $t9; ?>;    var ct10=<?php echo $t10; ?>;
                var ct11=<?php echo $t11; ?>;   var ct12=<?php echo $t12; ?>;
                var ct13=<?php echo $t13; ?>;   var ct14=<?php echo $t14; ?>;
                var ct15=<?php echo $t15; ?>;   var ct16=<?php echo $t16; ?>;
                var ct17=<?php echo $t17; ?>;   var ct18=<?php echo $t18; ?>;
                var ct19=<?php echo $t19; ?>;   var ct20=<?php echo $t20; ?>;
                var ct21=<?php echo $t21; ?>;   var ct22=<?php echo $t22; ?>;
                var ct23=<?php echo $t23; ?>;   var ct24=<?php echo $t24; ?>;
                var ct25=<?php echo $t25; ?>;   var ct26=<?php echo $t26; ?>;
                var ct27=<?php echo $t27; ?>;   var ct28=<?php echo $t28; ?>;
                var ct29=<?php echo $t29; ?>;   var ct30=<?php echo $t30; ?>;
                var ct31=<?php echo $t31; ?>;   var ct32=<?php echo $t32; ?>;
                var ct33=<?php echo $t33; ?>;   var ct34=<?php echo $t34; ?>;
                var ct35=<?php echo $t35; ?>;   var ct36=<?php echo $t36; ?>;
                var ct37=<?php echo $t37; ?>;   var ct38=<?php echo $t38; ?>;
                var ct39=<?php echo $t39; ?>;   var ct40=<?php echo $t40; ?>;
                var ct41=<?php echo $t41; ?>;   var ct42=<?php echo $t42; ?>;
                var ct43=<?php echo $t43; ?>;   var ct44=<?php echo $t44; ?>;
                var ct45=<?php echo $t45; ?>;   var ct46=<?php echo $t46; ?>;
                var ct47=<?php echo $t47; ?>;   var ct48=<?php echo $t48; ?>;
                var ct49=<?php echo $t49; ?>;   var ct50=<?php echo $t50; ?>;
                        
                var e =ct1+ct6+ct11+ct16+ct21+ct26+ct31+ct36+ct41+ct46
                var a =ct2+ct7+ct12+ct17+ct22+ct27+ct32+ct37+ct42+ct47 
                var c =ct3+ct8+ct13+ct18+ct23+ct28+ct33+ct38+ct43+ct48
                var es=ct4+ct9+ct14+ct19+ct24+ct29+ct34+ct39+ct44+ct49
                var i =ct5+ct10+ct15+ct20+ct25+ct30+ct35+ct40+ct45+ct50
                
                if(e>33){
                    document.getElementById("bigfive1").textContent="主動並喜歡與他人來往；"
                }else{
                    document.getElementById("bigfive1").textContent="沉默帶點嚴肅，行為腼腆亦安静；"
                }
                if(a>40){
                    document.getElementById("bigfive2").textContent="散發同情心，傾向信任別人；"
                }else{
                    document.getElementById("bigfive2").textContent="傾向相信自己；"
                }
                if(c>35){
                    document.getElementById("bigfive3").textContent="為人較講究，並較受他人信賴；"
                }else{
                    document.getElementById("bigfive3").textContent="心思較豁達；"
                }
                if(es>23){
                    document.getElementById("bigfive4").textContent="情緒較穩定；"
                }else{
                    document.getElementById("bigfive4").textContent="傾向將壓力埋藏心中，做起事來帶點衝勁；"
                }
                if(i>36){
                    document.getElementById("bigfive5").textContent="對新事物感到好奇，較有創造性。"
                }else{
                    document.getElementById("bigfive5").textContent="思想較傳統。"
                }
            }
            
            function aggre(){
                var ct1 =<?php echo $t51; ?>;   var ct2 =<?php echo $t52; ?>;
                var ct3 =<?php echo $t53; ?>;   var ct4 =<?php echo $t54; ?>;
                var ct5 =<?php echo $t55; ?>;   var ct6 =<?php echo $t56; ?>;
                var ct7 =<?php echo $t57; ?>;   var ct8 =<?php echo $t58; ?>;
                var ct9 =<?php echo $t59; ?>;   var ct10=<?php echo $t60; ?>;
                var ct11=<?php echo $t61; ?>;   var ct12=<?php echo $t62; ?>;
                var ct13=<?php echo $t63; ?>;   var ct14=<?php echo $t64; ?>;
                var ct15=<?php echo $t65; ?>;   var ct16=<?php echo $t66; ?>;
                var ct17=<?php echo $t67; ?>;   var ct18=<?php echo $t68; ?>;
                var ct19=<?php echo $t69; ?>;   var ct20=<?php echo $t70; ?>;
                var ct21=<?php echo $t71; ?>;   var ct22=<?php echo $t72; ?>;
                var ct23=<?php echo $t73; ?>;   var ct24=<?php echo $t74; ?>;
                var ct25=<?php echo $t75; ?>;   var ct26=<?php echo $t76; ?>;
                var ct27=<?php echo $t77; ?>;   var ct28=<?php echo $t78; ?>;
                var ct29=<?php echo $t79; ?>;
                        
                var p=ct7+ct8+ct9+ct10+ct14+ct19+ct20+ct21+ct23;
                var v=ct1+ct3+ct5+ct16+ct22;
                var a=ct2+ct6+ct11+ct12+ct15+ct25+ct27;
                var h=ct4+ct13+ct17+ct18+ct24+ct26+ct28+ct29;
                
                if(p>21){
                    document.getElementById("aggre1").textContent="可能帶點衝動；"
                }else{
                    document.getElementById("aggre1").textContent="較不愛與人發生衝突；"
                }
                if(v>14){
                    document.getElementById("aggre2").textContent="言語可能稍帶冒犯；"
                }else{
                    document.getElementById("aggre2").textContent="較不愛與人爭論；"
                }
                if(a>16){
                    document.getElementById("aggre3").textContent="可能有點脾氣；"
                }else{
                    document.getElementById("aggre3").textContent="較不愛生氣；"
                }
                if(h>20){
                    document.getElementById("aggre4").textContent="可能帶點警戒心。"
                }else{
                    document.getElementById("aggre4").textContent="較願意與他人和睦相處。"
                }
            }
            
            function control(){
                var ct1 =<?php echo $t80; ?>;   var ct2 =<?php echo $t81; ?>;
                var ct3 =<?php echo $t82; ?>;   var ct4 =<?php echo $t83; ?>;
                var ct5 =<?php echo $t84; ?>;   var ct6 =<?php echo $t85; ?>;
                var ct7 =<?php echo $t86; ?>;   var ct8 =<?php echo $t87; ?>;
                var ct9 =<?php echo $t88; ?>;   var ct10=<?php echo $t89; ?>;
                var ct11=<?php echo $t90; ?>;   var ct12=<?php echo $t91; ?>;
                var ct13=<?php echo $t92; ?>;   var ct14=<?php echo $t93; ?>;
                var ct15=<?php echo $t94; ?>;   var ct16=<?php echo $t95; ?>;
                var ct17=<?php echo $t96; ?>;
                        
                var private=ct1+ct3+ct4+ct6+ct7+ct9+ct11+ct13+ct15+ct17;
                var public =ct2+ct5+ct8+ct10+ct12+ct14+ct16;
                
                if(private>15){
                    document.getElementById("control1").textContent="較重視他人觀感；"
                }else{
                    document.getElementById("control1").textContent="較自我原則，不受他人影響；"
                }
                if(public>13){
                    document.getElementById("control2").textContent="並較注意自我的內心狀態。"
                }else{
                    document.getElementById("control2").textContent="且較奔放豪爽不自我約束。"
                }
            }
        </script>
    </section>
</body>
</html>
