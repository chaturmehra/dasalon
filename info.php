<?phpinfo()
$zip = new ZipArchive;
$res = $zip->open('dasalon-main.zip');
$path = pathinfo(realpath($file), PATHINFO_DIRNAME).'/dasalon';
//echo $path; die;
if ($res === TRUE) {
	$zip->extractTo($path);
	$zip->close();
	echo 'woot!';
} else {
	echo 'doh!';
}