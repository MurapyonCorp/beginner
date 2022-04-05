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
	// 税込み金額を返す
	function intax($value)	{
		return ceil($value * 1.1);
	}
	$price = 3250;
	$price_tax = intax($price);
	echo $price_tax;
?>
</pre>
</main>
</body>
</html>