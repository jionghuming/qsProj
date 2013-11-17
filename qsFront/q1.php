<?php
session_start();
if(isset($_REQUEST["imei"]))
{
    $imei = $_REQUEST["imei"];
    $_SESSION["ime"]=$imei;
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="q.css" />
<script type="text/javascript" src="q.js"></script>
</head>

<body>
<div id='div_all'>

<div id='topic'>
<h3 align='center'>用户调查问卷</h3>
</div>

<div id='pre'>
<p>
欢迎参与2013年移动智能手机用户调查，这将占用您一分钟左右的时间，只要您完整填写并留下联系地址，就有机会获得我们赠送的礼品。请您如实填写问卷，您的答案对我们非常重要！感谢您对我们活动的大力支持！ 
</p>
</div>

<div id='part1'>
<?php

echo "<form action=\"q2?imei=$imei\" method='POST' name='form1' onsubmit=\"return check_form('form1')\">";

?>
<div class='question'>
<div class='ques_title'>
1. 您的性别？
</div>
<div class='ques_option'>
<input type='radio' name='sex' value='1'/>男
<br />
<input type='radio' name='sex' value='2'/>女
</div>
</div>

<div class='question'>
<div class='ques_title'>
2. 您的年龄?
</div>
<div class='ques_option'>
<input type='radio' name='age' value='1'/>10岁及以下
<br />
<input type='radio' name='age' value='2'/>11～18岁
<br />
<input type='radio' name='age' value='3'/>19～22岁
<br />
<input type='radio' name='age' value='4'/>23～29岁
<br />
<input type='radio' name='age' value='5'/>30～35岁
<br />
<input type='radio' name='age' value='6'/>36～39岁
<br />
<input type='radio' name='age' value='7'/>40～49岁
<br />
<input type='radio' name='age' value='8'/>50岁及以上
<br />
</div>
</div>

<div class='question'>
<div class='ques_title'>
3. 您最近6个月以来固定居住地点的行政划分是？
</div>
<div class='ques_option'>
<input type='radio' name='address' value='1'/>北京、上海等直辖市、港澳台
<br />
<input type='radio' name='address' value='2'/>省会城市
<br />
<input type='radio' name='address' value='3'/>地级市
<br />
<input type='radio' name='address' value='4'/>县级市
<br />
<input type='radio' name='address' value='5'/>县城乡镇农村
<br />
<input type='radio' name='address' value='6'/>海外及其他
<br />
</div>
</div>

<div class='question'>
<div class='ques_title'>
4. 您的教育程度？
</div>
<div class='ques_option'>
<input type='radio' name='edu' value='1'/>小学及以下
<br />
<input type='radio' name='edu' value='2'/>初中
<br />
<input type='radio' name='edu' value='3'/>高中/中专/职校/技校
<br />
<input type='radio' name='edu' value='4'/>大专
<br />
<input type='radio' name='edu' value='5'/>本科
<br />
<input type='radio' name='edu' value='6'/>硕士及以上
<br />
</div>
</div>

<div class='question'>
<div class='ques_title'>
5. 您的职业？
</div>
<div class='ques_option'>
<input type='radio' name='position' value='1'/>学生
<br />
<input type='radio' name='position' value='2'/>自由职业/个体户/私营企业主
<br />
<input type='radio' name='position' value='3'/>公司管理或一般职员
<br />
<input type='radio' name='position' value='4'/>党政机关事业单位管理者或一般职员
<br />
<input type='radio' name='position' value='5'/>工人/服务业人员
<br />
<input type='radio' name='position' value='6'/>无业/退休/失业/下岗
<br />
<input type='radio' name='position' value='7'/>其他
<br />
</div>
</div>

<div class='question'>
<div class='ques_title'>
6. 您个人的实际月收入？
</div>
<div class='ques_option'>
<input type='radio' name='payment' value='1' />没有收入
<br />
<input type='radio' name='payment' value='2' />1000元及以下
<br />
<input type='radio' name='payment' value='3' />1000～1999元
<br />
<input type='radio' name='payment' value='4' />2000～2999元
<br />
<input type='radio' name='payment' value='5' />3000～3999元
<br />
<input type='radio' name='payment' value='6' />4000～4999元
<br />
<input type='radio' name='payment' value='7' />5000～7999元
<br />
<input type='radio' name='payment' value='8' />8000～11999元
<br />
<input type='radio' name='payment' value='9' />12000～及以上
<br />
</div>
</div>

<div class='button'>
<input type='submit' value='下一页'/>
</div>
</form>
</div>  <!-- part1 -->


</div>

</body>
</html>
