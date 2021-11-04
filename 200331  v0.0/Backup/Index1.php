<?php
    header('Content-Type: text/html; charset=utf-8');
?>

<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8;" />
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
    <title>Basic information</title>    
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
        <form method="post" name="exp" id="exp" onsubmit="return check();" accept-charset="utf-8" style="padding: 1%;">
            <br>
            <b>&nbsp; &nbsp;參與者姓名：</b>
                <input type="text" name="uname" value="" placeholder="王大明"><br>
                <input type=hidden name="utype" value="4">           
                <input type=hidden name="usex" value="0">
            <b>&nbsp; &nbsp;性別：</b>
                <fieldset data-role="controlgroup" data-type="horizontal">
                    <label><input type="radio" name="usex" value="boy">男生</label>
                    <label><input type="radio" name="usex" value="girl">女生</label>
                </fieldset><br>
            <b>&nbsp; &nbsp;出生年(民國)：</b>
                <input size="10" name="uold" value="0"><br>
            <b>&nbsp; &nbsp;教育程度：</b>
                <select name="school">
                    <option value="0"></option>  
                    <option value="none">不識字</option>   
                    <option value="elemantary">國小或未上學但識字</option>
                    <option value="junior">國中</option>
                    <option value="senior">高中或高職</option>
                    <option value="college">專科或大學</option>
                    <option value="master">碩士</option>
                    <option value="phd">博士</option>
                </select><br>
            <b>&nbsp; &nbsp;職業：</b>
                <select name="ucar">
                    <option value="0"></option>  
                    <option value="C1">學生</option>
                    <option value="C2">軍公教</option>
                    <option value="C3">金融業</option>
                    <option value="C4">營造業</option>
                    <option value="C5">電子業</option>
                    <option value="C6">服務業</option>
                    <option value="C7">資訊業</option>
                    <option value="C8">製造業</option>
                    <option value="C9">大眾傳播業</option>
                    <option value="C10">運輸業</option>
                    <option value="C11">通信業</option>
                    <option value="C12">農牧業</option>
                    <option value="C13">自由業</option>
                    <option value="C14">家管</option>
                    <option value="C15">醫務人員</option>
                    <option value="C16">商業</option>
                    <option value="C17">待業中</option>
                    <option value="C18">退休</option>
                    <option value="C19">其他</option>
                </select><br>
            <b>&nbsp; &nbsp;Email：</b>
                <input type="email" size="10" id= "umail" name="umail" value="" placeholder="xxx123@example.com"><br>
            
            <input name="submit" value="提交" type="submit"><br>
    
           <script>
               function check(){
                   var cuname   =document.exp.uname.value;
                   var cusex    =getValue("usex");
                   var cuold    =document.exp.uold.value;
                   var cschool  =document.exp.school.value;
                   var cucar    =document.exp.ucar.value;
                   var cumail   =document.exp.umail.value;          
                   
                   if(cuname=''|cusex==0|cuold==0|cschool==0|cucar==0|cumail==''){ 
                       window.alert("尚未填寫完畢");
                       return false;
                   }else{
                        document.getElementById("exp").action="index2.php";
                        document.getElementById("exp").submit();
                   }
               }
               
               //自定義函數，針對name去取其勾選的值
               function getValue(name){
                   var items=document.getElementsByName(name);
                   for(var i=0, iLen=items.length; i<iLen; i++){
                       var item=items[i];
                       if(item.checked){
                           return item.value;
                       }
                   }
                   //收到答案即return(故適用於單選)，只有未答時才執行至此，返回0代表異常
                   return 0;
               }               
           </script>
       </form>
    </section>
</body>
</html>
