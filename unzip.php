<?php
$zip = new ZipArchive;
$res = $zip->open('wp6.zip');
if ($res === TRUE) {
  $zip->extractTo(dirname(__FILE__));
  $zip->close();
  echo 'woot!';
} else {
  echo 'doh!';
}
?>
