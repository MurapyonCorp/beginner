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
$json_sample = [
	"title" => "JSONサンプル",
	"items" => [
		"りんご",
		"みかん"
	]
];
$json = json_encode($json_sample, JSON_UNESCAPED_UNICODE);
echo $json;
file_put_contents("json_sample.json", $json);
?>
</pre>
</main>
</body>
</html>