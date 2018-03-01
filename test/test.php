<?php
if(!isset($_COOKIE["visittime"])){ //􀽖􁵰 Cookie 􀏡􁄬􀳼
setcookie("visittime",'sassas'); //􄆒􃕂􀏔􀏾 Cookie 􀦬􄞣
echo "􂃶􄖢􁙼􃄀􀏔􂃵􄆓􄯂􃔥􃂭􀊽"."<br>"; //􄕧􀟎􁄫􃃺􀐆
}else{ //􀽖􁵰 Cookie 􁄬􀳼
setcookie("visittime",'sasas',time()+60); //􄆒􃕂􁏺 Cookie

echo "􁙼􀏞􂃵􄆓􄯂􃔥􃂭􂱘􁯊􄯈􀐎􀋖".$_COOKIE["visittime"]; //􄕧􀟎􀏞􂃵􄆓􄯂
echo "<br>"; //􄕧􀟎􀲲􄔺􃃺
}
echo "􁙼􁴀􂃵􄆓􄯂􃔥􃂭􂱘􁯊􄯈􀐎􀋖 ".date("y-m-d H:i:s");//􄕧􀟎􁔧􀠡􂱘􄆓􄯂􁯊􄯈
?>


<?php
if (!empty ($_COOKIE['conter'] )){
$counter = $_COOKIE['conter']+1 ;
}
else{
$counter = 1 ;
}
echo "<br/>";
 echo $counter; 
?>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>􀤮􁅶􂫼􁠋􂱏􁔩</title>
</head>
<body>
<script language="javascript">
function check(form){
if(form1.user.value==""){
alert("飒飒");form1.user.focus();return false;
}
if(form1.pwd.value==""){
alert('飒飒是');form.pwd.focus();return false;
}

if(form1.ps.value!=form1.pwd.value){
alert("􂷕");form.ps.focus();return false;
}
form.submit();
}
</script>
<form name="form1" method="post" action="cookie.php">
<table width="521" height="394" border="0" cellpadding="0" cellspacing="0">
<tr>
<td valign="top" background="images/login.jpg"><table width="521"
border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="262" height="218">&nbsp;</td>
<td width="259">&nbsp;</td>
</tr>
<tr>
<td height="24" align="right">􂫼􁠋􀧡􀋖</td>
<td height="24" align="left"><input name="uer" type="text"
id="user" size="20"></td>
</tr>


<tr>
<td height="24" align="right">􁆚&nbsp;&nbsp;􂷕􀋖</td>
<td height="24" align="left"><input name="wd" type="password"
id="pwd" size="20"></td>
</tr>



<tr>
<td height="24" align="right">􁆚&nbsp;&nbsp;􂷕􀋖</td>
<td height="24" align="left"><input name="ps" type="password"
id="ps" size="20"></td>
</tr>

<tr align="center">
<td height="24" colspan="2"><input type="submit" name="Submit"
value="􁦤􀑸" onClick="return check(form)">
&nbsp;&nbsp;
<input type="reset" name="Submit2" value="􄞡􀸿"></td>
</tr>




<tr>
<td height="76" align="right"><span class="style1">􄍙􃑻􂫼􁠋􀋖
tsoft<br>
􁆚&nbsp;&nbsp;&nbsp;&nbsp;􂷕􀋖111&nbsp;&nbsp;</span></td>
<td><span class="style1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;􁱂􄗮
􂫼􁠋􀋖zts<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;􁆚&nbsp;&nbsp;&nbsp;&nbsp;􂷕􀋖
000</span></td>
</tr>
</table></td>
</tr>
</table>
</form>
</body>
</html>

