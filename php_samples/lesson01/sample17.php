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
$xmlTree = simplexml_load_file("rss.xml");
foreach ($xmlTree -> channel -> item as $item) {
	// echo $item -> title. "\n";
?>
・<a href="<?php echo $item -> link; ?>"><?php echo $item -> title; ?></a>
<?php
}
?>
</pre>
</main>
</body>
</html>