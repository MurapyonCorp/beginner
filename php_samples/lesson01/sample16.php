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
$news = file_get_contents("data/news.txt");
echo $news;

// ファイルの追記
$news = $news. "\n 追加のニュースです";
$success = file_put_contents("data/news.txt", $news);
?>
</pre>
</main>
</body>
</html>