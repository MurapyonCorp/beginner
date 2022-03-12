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
$age = '２３';

$age = mb_convert_kana($age, 'n', 'UTF-8');
if (is_numeric($age)) {
	echo $age . '歳です';
} else {
	echo '※ 数字で入力してください';
}
?>
</pre>
</main>
</body>
</html>