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
3,000円の物から、100円値引きした場合、
<?php
echo floor(100 / 3000 * 100);
?>%引きです
<br>
<?php
echo ceil(3.33). "\n";
echo round(3.66, 1). "\n";
?>
</pre>
</main>
</body>
</html>