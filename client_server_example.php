<?php
require_once 'fotostudio.php';

$imgsrc = "tdot.jpg";

if ($_POST['caller'] == 'resize') {
	$img = myImageCreate($_POST['imgsrc']);
	$img = resize($img, $_POST['new_w'], $_POST['new_h']);
	myImageSave($img, 'altered.jpg');
	$imgsrc = 'altered.jpg';
}
if ($_POST['caller'] == 'shade') {
	$img = myImageCreate($_POST['imgsrc']);
	$img = shade($img, $_POST['orientation']);
	myImageSave($img, 'altered.jpg');
	$imgsrc = 'altered.jpg';
}

print '<html>
	<head><title>Fotostudio Client/Server Example</title></head>
	<body>
		<center>
			<p><img src="' . $imgsrc . '" /></p>
		
		<form action="client_server_example.php" method="POST">
			<p><input type="submit" value="resize" /> width: <input type="text" name="new_w" size="3" /> height: <td><input type="text" name="new_h" size="3" /> <input type="hidden" name="caller" value="resize" /><input type="hidden" name="imgsrc" value="' . $imgsrc .'" /></p>
			</form>
	
		<form action="client_server_example.php" method="POST">
			<p><input type="submit" value="shade" /> orientation: <select name="orientation"><option value="0">left to right</option>
<option value="1">right to left</option></select> <input type="hidden" name="caller" value="shade" /><input type="hidden" name="imgsrc" value="' . $imgsrc .'" /></p>
			</form>
	</center>
	</body>
	</html>';

?>
