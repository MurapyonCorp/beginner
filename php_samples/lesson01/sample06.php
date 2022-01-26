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
	$sum = 156 + 892 + 40981;
	?>
	<p>合計金額は、<?php echo $sum; ?>円です</p>
	<p>税込金額は、<?php echo $sum * 1.1; ?>円です</p>
	</pre>
	</main>
</body>
</html>