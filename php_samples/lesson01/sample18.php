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
$file = file_get_contents("feed.json");
$json = json_decode($file);

foreach ($json -> items as $item) {
?>
・<a href="<?php echo $item -> url; ?>"><?php echo $item -> title; ?></a><br>
<?php
}
?>
</pre>
</main>
</body>
</html>