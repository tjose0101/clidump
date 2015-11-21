<?php $url = $_POST['url']; $name = $_POST['name'];
if (isset($_POST['unzip'])) { $zip = new ZipArchive;
$res = $zip->open("$url");
if ($res === TRUE) {
$zip->extractTo('./');
$zip->close();
echo "zip file extracted!";
} else {
echo "ERROR: FILE NOT EXTRACTED!";
}
} if (isset($_POST['import'])) { copy("$url","./$name"); }  ?>
<u><b>IMPORT</u></b><br><form method="post" action="">URL:<br><input type="text" name="url"><br>SAVE AS:<br><input name="name"><br><input type="submit" name="import"></form><br><u><b>UNZIP</u></b><br>*make sure zip file is inside public_html folder<br>
<form method="post" action="">FILE:<br><input type="text" name="url" value="file.zip"><br><input type="submit" name="unzip"></form>
