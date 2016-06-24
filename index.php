if (isset($_POST['Result'])){
  $result = $_POST['Result'];
  $myfile = fopen("latest.txt", "w");
  fwrite($myfile, $result);
  fclose($myfile);
} else {
  $filename = "calculation.txt";
  $myfile = fopen($filename, "r");
  echo fread($myfile, filesize($filename));
  fclose($myfile);
}
