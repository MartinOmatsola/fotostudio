<?php

require_once 'fotostudio.php';


$img = myImageCreate('tdot.jpg');
$copy = myImageCreate('tdot.jpg');

$img1 = createFrame($img, 20, 0, 23, 255);
$img1 = scale($img1, 50);
myImageSave($img1, 'framed.jpg');

$img1 = roundEdges($copy, 15, 40, 255, 255, 255, 11, 24, 47);
$img1 = scale($img1, 50);
myImageSave($img1, 'rounded.jpg');

$img1 = icicle($img);
$img1 = scale($img1, 30);
myImageSave($img1, 'icicle.jpg');

$img1 = stack($img, 25, 4, 0, 1, 255, 255, 255);
$img1 = scale($img1, 45);
myImageSave($img1, 'stacked.jpg');

imagedestroy($img);
imagedestroy($img1);
imagedestroy($copy);

print '<html>
	<head><title>Fotostudio Example</title>
	</head>
	<body>
		<center>
			<table cellspacing="5" cellpadding="5">
				<tr>
					<td><img src="framed.jpg" /></td>
					<td><img src="rounded.jpg" /></td>
				</tr>
				<tr>
					<td><img src="icicle.jpg" /></td>
					<td><img src="stacked.jpg" /></td>
				</tr>
			<table>
		</center>
	</body>
	</html>';

?>
