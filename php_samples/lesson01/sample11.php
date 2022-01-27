<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../css/style.css" />
	<title>PHP</title>
</head>
<body>
<header>
	<!--<h1 class="font-weight-normal">PHP</h1>    -->
</header>

<main>
	<!--<h2>Practice</h2>-->
<pre>
<?php
$week_name = ['日', '月', '火', '水', '木', '金', '土'];

date_default_timezone_set('Asia/Tokyo');
$week = date('w');
echo "今日は、$week_name[$week]曜日です";
?>
</pre>
</main>
</body>
</html>