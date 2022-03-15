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
$zip = '123-4567';

if (preg_match("/\A\d{3}[-]\d{4}\z/", $zip)) {
	echo '郵便番号：〒' . $zip;
} else {
	echo '※ 郵便番号を正しくご記入ください';
}
?>
</pre>
</main>
</body>
</html>