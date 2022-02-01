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
date_default_timezone_set('Asia/Tokyo');
$time = date('G');
if ($time < 9) {
	echo "<p>※ 営業時間外です</p>";
} else {
	echo "<p>ようこそ</p>";
}
?>
</pre>
</main>
</body>
</html>