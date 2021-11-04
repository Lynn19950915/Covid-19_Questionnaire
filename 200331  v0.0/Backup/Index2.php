<?php
    header('Content-Type: text/html; charset=utf-8');
	$uname =$_POST['uname'];
    $utype =$_POST['utype'];
	$usex  =$_POST['usex'];
    $uold  =$_POST['uold'];
	$school=$_POST['school'];
	$ucar  =$_POST['ucar'];
	$umail =$_POST['umail'];
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8;" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <title>Questionnaire 1</title>    
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
        <form method="post" name="exp2" id="exp2" onsubmit="return check();" accept-charset="utf-8" style="padding: 1%">       
            <input type=hidden name="uname"     value="<?php echo htmlspecialchars($uname); ?>">
            <input type=hidden name="utype"     value="<?php echo htmlspecialchars($utype); ?>">
            <input type=hidden name="usex"      value="<?php echo htmlspecialchars($usex); ?>">
            <input type=hidden name="uold"      value="<?php echo htmlspecialchars($uold); ?>">
            <input type=hidden name="school"    value="<?php echo htmlspecialchars($school); ?>">
            <input type=hidden name="ucar"      value="<?php echo htmlspecialchars($ucar); ?>">
            <input type=hidden name="umail"     value="<?php echo htmlspecialchars($umail); ?>"> 

            <input type=hidden name="t1"  value="0">    <input type=hidden name="t2"  value="0">
            <input type=hidden name="t3"  value="0">    <input type=hidden name="t4"  value="0">
            <input type=hidden name="t5"  value="0">    <input type=hidden name="t6"  value="0">
            <input type=hidden name="t7"  value="0">    <input type=hidden name="t8"  value="0">
            <input type=hidden name="t9"  value="0">    <input type=hidden name="t10" value="0">
            <input type=hidden name="t11" value="0">    <input type=hidden name="t12" value="0">
            <input type=hidden name="t13" value="0">    <input type=hidden name="t14" value="0">
            <input type=hidden name="t15" value="0">    <input type=hidden name="t16" value="0">
            <input type=hidden name="t17" value="0">    <input type=hidden name="t18" value="0">
            <input type=hidden name="t19" value="0">    <input type=hidden name="t20" value="0">   
            <input type=hidden name="t21" value="0">    <input type=hidden name="t22" value="0">
            <input type=hidden name="t23" value="0">    <input type=hidden name="t24" value="0">
            <input type=hidden name="t25" value="0">

            <input type=hidden name="Time1"  id="Time1">    <input type=hidden name="Time2"  id="Time2">
            <input type=hidden name="Time3"  id="Time3">    <input type=hidden name="Time4"  id="Time4">
            <input type=hidden name="Time5"  id="Time5">    <input type=hidden name="Time6"  id="Time6">
            <input type=hidden name="Time7"  id="Time7">    <input type=hidden name="Time8"  id="Time8">
            <input type=hidden name="Time9"  id="Time9">    <input type=hidden name="Time10" id="Time10">
            <input type=hidden name="Time11" id="Time11">   <input type=hidden name="Time12" id="Time12">
            <input type=hidden name="Time13" id="Time13">   <input type=hidden name="Time14" id="Time14">
            <input type=hidden name="Time15" id="Time15">   <input type=hidden name="Time16" id="Time16">
            <input type=hidden name="Time17" id="Time17">   <input type=hidden name="Time18" id="Time18">
            <input type=hidden name="Time19" id="Time19">   <input type=hidden name="Time20" id="Time20">
            <input type=hidden name="Time21" id="Time21">   <input type=hidden name="Time22" id="Time22">
            <input type=hidden name="Time23" id="Time23">   <input type=hidden name="Time24" id="Time24">
            <input type=hidden name="Time25" id="Time25">
            
            <br><br>
            <h1>我認為自己：</h1><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我總是聚會上炒熱氣氛的人。</div></legend>
                <li>
                    <label><input type="radio" name="t1" value="1" onclick="time1()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t1" value="2" onclick="time1()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t1" value="3" onclick="time1()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t1" value="4" onclick="time1()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t1" value="5" onclick="time1()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我不關心其他人。</div></legend>
                <li>
                    <label><input type="radio" name="t2" value="5" onclick="time2()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t2" value="4" onclick="time2()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t2" value="3" onclick="time2()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t2" value="2" onclick="time2()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t2" value="1" onclick="time2()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我總有所準備。</div></legend>
                <li>
                    <label><input type="radio" name="t3" value="1" onclick="time3()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t3" value="2" onclick="time3()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t3" value="3" onclick="time3()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t3" value="4" onclick="time3()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t3" value="5" onclick="time3()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我很容易感覺壓力過大。</div></legend>
                <li>
                    <label><input type="radio" name="t4" value="5" onclick="time4()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t4" value="4" onclick="time4()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t4" value="3" onclick="time4()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t4" value="2" onclick="time4()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t4" value="1" onclick="time4()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我詞彙豐富。</div></legend>
                <li>
                    <label><input type="radio" name="t5" value="1" onclick="time5()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t5" value="2" onclick="time5()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t5" value="3" onclick="time5()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t5" value="4" onclick="time5()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t5" value="5" onclick="time5()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我話不多。</div></legend>
                <li>
                    <label><input type="radio" name="t6" value="5" onclick="time6()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t6" value="4" onclick="time6()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t6" value="3" onclick="time6()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t6" value="2" onclick="time6()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t6" value="1" onclick="time6()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我對人感興趣。</div></legend>
                <li>
                    <label><input type="radio" name="t7" value="1" onclick="time7()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t7" value="2" onclick="time7()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t7" value="3" onclick="time7()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t7" value="4" onclick="time7()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t7" value="5" onclick="time7()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">把自己的東西到處亂放。</div></legend>
                <li>
                    <label><input type="radio" name="t8" value="5" onclick="time8()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t8" value="4" onclick="time8()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t8" value="3" onclick="time8()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t8" value="2" onclick="time8()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t8" value="1" onclick="time8()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我大部分時間很放鬆。</div></legend>
                <li>
                    <label><input type="radio" name="t9" value="1" onclick="time9()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t9" value="2" onclick="time9()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t9" value="3" onclick="time9()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t9" value="4" onclick="time9()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t9" value="5" onclick="time9()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我很難理解抽象的概念。</div></legend>
                <li>
                    <label><input type="radio" name="t10" value="5" onclick="time10()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t10" value="4" onclick="time10()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t10" value="3" onclick="time10()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t10" value="2" onclick="time10()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t10" value="1" onclick="time10()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我和別人相處時感覺很自然。</div></legend>
                <li>
                    <label><input type="radio" name="t11" value="1" onclick="time11()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t11" value="2" onclick="time11()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t11" value="3" onclick="time11()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t11" value="4" onclick="time11()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t11" value="5" onclick="time11()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我容易冒犯別人。</div></legend>
                <li>
                    <label><input type="radio" name="t12" value="5" onclick="time12()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t12" value="4" onclick="time12()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t12" value="3" onclick="time12()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t12" value="2" onclick="time12()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t12" value="1" onclick="time12()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我注重細節。</div></legend>
                <li>
                    <label><input type="radio" name="t13" value="1" onclick="time13()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t13" value="2" onclick="time13()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t13" value="3" onclick="time13()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t13" value="4" onclick="time13()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t13" value="5" onclick="time13()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我擔心的事情很多。</div></legend>
                <li>
                    <label><input type="radio" name="t14" value="5" onclick="time14()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t14" value="4" onclick="time14()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t14" value="3" onclick="time14()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t14" value="2" onclick="time14()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t14" value="1" onclick="time14()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我有生動的想像力。</div></legend>
                <li>
                    <label><input type="radio" name="t15" value="1" onclick="time15()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t15" value="2" onclick="time15()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t15" value="3" onclick="time15()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t15" value="4" onclick="time15()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t15" value="5" onclick="time15()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我躲在人群的背後，不喜歡引人注目。</div></legend>
                <li>
                    <label><input type="radio" name="t16" value="5" onclick="time16()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t16" value="4" onclick="time16()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t16" value="3" onclick="time16()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t16" value="2" onclick="time16()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t16" value="1" onclick="time16()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我能同情他人的感受。</div></legend>
                <li>
                    <label><input type="radio" name="t17" value="1" onclick="time17()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t17" value="2" onclick="time17()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t17" value="3" onclick="time17()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t17" value="4" onclick="time17()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t17" value="5" onclick="time17()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我常把事情搞得一團糟。</div></legend>
                <li>
                    <label><input type="radio" name="t18" value="5" onclick="time18()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t18" value="4" onclick="time18()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t18" value="3" onclick="time18()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t18" value="2" onclick="time18()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t18" value="1" onclick="time18()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我很少感到憂鬱。</div></legend>
                <li>
                    <label><input type="radio" name="t19" value="1" onclick="time19()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t19" value="2" onclick="time19()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t19" value="3" onclick="time19()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t19" value="4" onclick="time19()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t19" value="5" onclick="time19()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我對抽象的觀點不感興趣。</div></legend>
                <li>
                    <label><input type="radio" name="t20" value="5" onclick="time20()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t20" value="4" onclick="time20()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t20" value="3" onclick="time20()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t20" value="2" onclick="time20()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t20" value="1" onclick="time20()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我主動與別人交談。</div></legend>
                <li>
                    <label><input type="radio" name="t21" value="1" onclick="time21()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t21" value="2" onclick="time21()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t21" value="3" onclick="time21()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t21" value="4" onclick="time21()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t21" value="5" onclick="time21()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我對別人遇到的問題不感興趣。</div></legend>
                <li>
                    <label><input type="radio" name="t22" value="5" onclick="time22()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t22" value="4" onclick="time22()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t22" value="3" onclick="time22()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t22" value="2" onclick="time22()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t22" value="1" onclick="time22()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">平常的事我馬上就處理，不拖延。</div></legend>
                <li>
                    <label><input type="radio" name="t23" value="1" onclick="time23()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t23" value="2" onclick="time23()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t23" value="3" onclick="time23()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t23" value="4" onclick="time23()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t23" value="5" onclick="time23()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我很容易心煩。</div></legend>
                <li>
                    <label><input type="radio" name="t24" value="5" onclick="time24()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t24" value="4" onclick="time24()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t24" value="3" onclick="time24()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t24" value="2" onclick="time24()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t24" value="1" onclick="time24()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div name="item" style="padding: 10px; font-size: 20px">我總有好點子。</div></legend>
                <li>
                    <label><input type="radio" name="t25" value="1" onclick="time25()">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="t25" value="2" onclick="time25()">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="t25" value="3" onclick="time25()">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="t25" value="4" onclick="time25()">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="t25" value="5" onclick="time25()">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br>
            <fieldset data-role="controlgroup">
                <legend><div name="no2"></div><div style="padding: 10px; font-size: 20px">一樣的問題，我需要花比其他人多一點的時間理解。</div></legend>
                <li>
                    <label><input type="radio" name="c2" value="5">&nbsp; &nbsp;非常不同意</label>
                    <label><input type="radio" name="c2" value="4">&nbsp; &nbsp;不同意</label>
                    <label><input type="radio" name="c2" value="3">&nbsp; &nbsp;沒意見</label>
                    <label><input type="radio" name="c2" value="2">&nbsp; &nbsp;同意</label>
                    <label><input type="radio" name="c2" value="1">&nbsp; &nbsp;非常同意</label>
                </li>
            </fieldset><br> 
            <br>
            已完成 1/8<br>
            <br>
            <input name="submit" value="下一頁" type="submit"><br>

            <script>
                //自動產生題號
                var counter=1;
                var counter2=counter;
                gen();

                function gen(){
                    No=document.getElementsByName("no2");
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
                        document.getElementById("exp2").action="index3.php";
                        document.getElementById("exp2").submit();
                    }
                }

                function highlight(){
                    var count=[], j=0;
                    items=["Time1",  "Time2",  "Time3",  "Time4",  "Time5",  "Time6",  "Time7",  "Time8",  "Time9",  "Time10",
                           "Time11", "Time12", "Time13", "Time14", "Time15", "Time16", "Time17", "Time18", "Time19", "Time20",
                           "Time21", "Time22", "Time23", "Time24", "Time25"];
                    for(var i=0, iLen=items.length; i<iLen; i++){
                        if(document.getElementById(items[i]).value==0){
                            divv=document.getElementsByName("item")[i];
                            divv.style.background="yellow";
                            count[j]=i+1;
                            j++;
                        }else{
                            divv=document.getElementsByName("item")[i];
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
                var tt1=0,  tt2=0,  tt3=0,  tt4=0,  tt5=0,  tt6=0,  tt7=0,  tt8=0,  tt9=0,  tt10=0,
                    tt11=0, tt12=0, tt13=0, tt14=0, tt15=0, tt16=0, tt17=0, tt18=0, tt19=0, tt20=0,
                    tt21=0, tt22=0, tt23=0, tt24=0, tt25=0;
                var Item=document.getElementsByName("item");
                var Min_item=[0,0,0,0,0], Max_item=[0,0,0,0,0];
                var t=0;

                function timescore(){
                    t++;
                    //每隔一秒執行一次(加秒)
                    setTimeout("timescore()",1);
                }
                timescore();                    

                function time1(){
                    tt1=tt1+t;
                    t=0;
                    document.getElementById("Time1").value=tt1;
                }                    
                function time2(){
                    tt2=tt2+t;
                    t=0;
                    document.getElementById("Time2").value=tt2;  
                }
                function time3(){
                    tt3=tt3+t;
                    t=0;
                    document.getElementById("Time3").value=tt3;  
                }
                function time4(){
                    tt4=tt4+t;
                    t=0;
                    document.getElementById("Time4").value=tt4;  
                }
                function time5(){
                    tt5=tt5+t;
                    t=0;
                    document.getElementById("Time5").value=tt5;  
                }
                function time6(){
                    tt6=tt6+t;
                    t=0;
                    document.getElementById("Time6").value=tt6;
                }                    
                function time7(){
                    tt7=tt7+t;
                    t=0;
                    document.getElementById("Time7").value=tt7;  
                }
                function time8(){
                    tt8=tt8+t;
                    t=0;
                    document.getElementById("Time8").value=tt8;  
                }
                function time9(){
                    tt9=tt9+t;
                    t=0;
                    document.getElementById("Time9").value=tt9;  
                }
                function time10(){
                    tt10=tt10+t;
                    t=0;
                    document.getElementById("Time10").value=tt10;  
                }
                function time11(){
                    tt11=tt11+t;
                    t=0;
                    document.getElementById("Time11").value=tt11;
                }                    
                function time12(){
                    tt12=tt12+t;
                    t=0;
                    document.getElementById("Time12").value=tt12;  
                }
                function time13(){
                    tt13=tt13+t;
                    t=0;
                    document.getElementById("Time13").value=tt13;  
                }
                function time14(){
                    tt14=tt14+t;
                    t=0;
                    document.getElementById("Time14").value=tt14;  
                }
                function time15(){
                    tt15=tt15+t;
                    t=0;
                    document.getElementById("Time15").value=tt15;  
                }
                function time16(){
                    tt16=tt16+t;
                    t=0;
                    document.getElementById("Time16").value=tt16;
                }                    
                function time17(){
                    tt17=tt17+t;
                    t=0;
                    document.getElementById("Time17").value=tt17;  
                }
                function time18(){
                    tt18=tt18+t;
                    t=0;
                    document.getElementById("Time18").value=tt18;  
                }
                function time19(){
                    tt19=tt19+t;
                    t=0;
                    document.getElementById("Time19").value=tt19;  
                }
                function time20(){
                    tt20=tt20+t;
                    t=0;
                    document.getElementById("Time20").value=tt20;  
                }
                function time21(){
                    tt21=tt21+t;
                    t=0;
                    document.getElementById("Time21").value=tt21;  
                }
                function time22(){
                    tt22=tt22+t;
                    t=0;
                    document.getElementById("Time22").value=tt22;  
                }
                function time23(){
                    tt23=tt23+t;
                    t=0;
                    document.getElementById("Time23").value=tt23;  
                }
                function time24(){
                    tt24=tt24+t;
                    t=0;
                    document.getElementById("Time24").value=tt24;  
                }
                function time25(){
                    tt25=tt25+t;
                    t=0;
                    document.getElementById("Time25").value=tt25;  
                }

                function sortitem(){
                    var min_pois=0, max_pois=0;
                    Instock=[tt1,  tt2,  tt3,  tt4,  tt5,  tt6,  tt7,  tt8,  tt9,  tt10,
                             tt11, tt12, tt13, tt14, tt15, tt16, tt17, tt18, tt19, tt20,
                             tt21, tt22, tt23, tt24, tt25];
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
                    Min_item[0]=Item[min_pois].textContent;
                    Max_item[0]=Item[max_pois].textContent;
                }          
            </script>
        </form>
    </section>
</body>
</html>
