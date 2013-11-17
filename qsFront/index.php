<?php
    $host="10.109.242.65";

    $imei = substr(md5(time()), 0, 8);
    $answer_url = "http://$host/qs/q1?imei=$imei";
    $show_url = "http://$host:8000/qs/show/";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="q.css" />
</head>
<div id="div_all">

<body>

<h2 align="center"> This is a questionnaire example </h2>
<h4>1. Send this url to the user</h4>
<?php
    echo "$answer_url <br />";
    echo "<h4>2. User opens this url</h4>";
    echo "<a href=$answer_url target=\"_blank\">开始答题</a> <br />";
?>

<h4>3. Check answer</h4>
<?php
echo "<a href=$show_url target=\"_blank\">查看</a>";
?>

</div>
</body>
</html>

