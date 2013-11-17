<?php
session_start();

if(isset($_SESSION["imei"]))
{
    echo $_SESSION["imei"];
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

<div class='topic'>
<h3 align='center'>用户调查问卷</h3>
</div>

<div id='pre'>
<p>
欢迎参与2013年移动智能手机用户调查，这将占用您一分钟左右的时间，只要您完整填写并留下联系地址，就有机会获得我们赠送的礼品。请您如实填写问卷，您的答案对我们非常重要！感谢您对我们活动的大力支持！ 
</p>
</div>

<div id='part2'>
<form action="#contact" method='POST' name='form2' onsubmit="return check_form('form2')">

<div class='question'>
<div class='ques_title'>
7. 您开始使用智能手机到现在有多长时间?
</div>
<div class='ques_option'>
<input type='radio' name='useMobileTime' value='1' />不到一年
<br />
<input type='radio' name='useMobileTime' value='2' />1～3年
<br />
<input type='radio' name='useMobileTime' value='3' />4～6年
<br />
<input type='radio' name='useMobileTime' value='4' />7～9年
<br />
<input type='radio' name='useMobileTime' value='5' />10年及以上
<br />
</div>
</div>

<div class='question'>
<div class='ques_title'>
8. 您平均每天使用手机上网多长时间?
</div>
<div class='ques_option'>
<input type='radio' name='webTime' value='1' />1小时以下
<br />
<input type='radio' name='webTime' value='2' />1～4小时
<br />
<input type='radio' name='webTime' value='3' />4～8小时
<br />
<input type='radio' name='webTime' value='4' />8小时以上
<br />
</div>
</div>

<div class='question'>
<div class='ques_title'>
9. 您平时用手机上网的时段是?（可多选）
</div>
<div class='ques_option'>
<input type='checkbox' name='webMoment' value='1' />早晨
<br />
<input type='checkbox' name='webMoment' value='2' />上午
<br />
<input type='checkbox' name='webMoment' value='3' />中午
<br />
<input type='checkbox' name='webMoment' value='4' />下午
<br />
<input type='checkbox' name='webMoment' value='5' />晚上
<br />
<input type='checkbox' name='webMoment' value='6' />深夜
<br />
</div>
</div>

<div class='question'>
<div class='ques_title'>
10. 您平时手机上网主要做的事情是？（请选择最经常做的三项）
</div>
<div class='ques_option'>
<input type='checkbox' name='webUsage' value='1' />浏览国内外社会新闻
<br />
<input type='checkbox' name='webUsage' value='2' />关注近期热点娱乐事件
<br />
<input type='checkbox' name='webUsage' value='3' />在论坛看帖子灌水
<br />
<input type='checkbox' name='webUsage' value='4' />聊QQ、微信
<br />
<input type='checkbox' name='webUsage' value='5' />网上购物逛店
<br />
<input type='checkbox' name='webUsage' value='6' />看网络小说
<br />
<input type='checkbox' name='webUsage' value='7' />更新博客、微博、空间
<br />
<input type='checkbox' name='webUsage' value='8' />去人人网等社区
<br />
<input type='checkbox' name='webUsage' value='9' />在线看电影、视频
<br />
<input type='checkbox' name='webUsage' value='10' />听音乐
<br />
<input type='checkbox' name='webUsage' value='11' />下载电影、音乐及其他资源
<br />
<input type='checkbox' name='webUsage' value='12' />打网络游戏
<br />
<input type='checkbox' name='webUsage' value='13' />其他
<br />
</div>
</div>

<div class='button'>
<input type='submit' value='提交' />
</div>
</form>
</div><!-- Part2  -->

<div id='last'>
<p>
<a name="contact">
感谢您百忙之中填写问卷，请您留下联系方式，调查结束后，我们会随机抽取用户并寄送礼品，敬请留意。
</a>
</p>
</div>

<div id='part3'>

<form action="thanks" method='POST' name="contact_form" onsubmit="return checkContact('contact_form')">
<table>
<tr>
<th>姓名: </th>
<td><input type='text' name='name' size='30'/></td>
</tr>
<tr>
<th>手机: </th>
<td><input type='text' name='mobile' size='30'/></td>
</tr>
<tr>
<th>QQ号: </th>
<td><input type='text' name='qq' size='30'/></td>
</tr>
<tr>
<th>地址: </th>
<td><input type='text' name='address' size='30'/></td>
</tr>

<tr>
<td><input type='submit' value='提交'  /></td>
<td><input type='reset' value='重写' /></td>
</tr>

</table>
</form>
</div>  <!-- Part3 -->


</div>

</body>
</html>
