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
$fruits = [
	'apple' => 'りんご',
	'grape' => 'ぶどう',
	'lemon' => 'レモン',
	'tomato' => 'トマト',
	'peach' => 'もも'
];
?>
<dl>
	<?php foreach ($fruits as $english => $japanese) {
		echo "<bt> $english </bt>";
		echo "<bb> $japanese </bb>";
	}?>
</dl>
</pre>
</main>
</body>
</html>