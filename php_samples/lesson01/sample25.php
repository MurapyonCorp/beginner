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
	<table>
		<?php for ($i = 1; $i <= 10; $i++) { ?>
			<?php if ($i % 2) { ?>
			<tr style="background-color: #ccc;">
			<?php } else { ?>
			<tr>
			<?php } ?>
				<td><?php echo $i; ?>行目</td>
				<td>ABC</td>
			</tr>
		<?php } ?>
	</table>
</pre>
</main>
</body>
</html>