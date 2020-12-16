 <?php
// TTD : Mr.7ev3n | INDONESIAN H4X0R LITE
// THIS TOOL FOR GABUNG KATA
// USAGE PHP THIS.PHP 1.TXT 2.TXT HASIL.TXT
$array = explode("\n", file_get_contents($argv[1]));
foreach($array as $arrayy){
	$array1 = explode("\n", file_get_contents($argv[2]));
	foreach($array1 as $arraye){
		$list = "start cmd.exe /k php list.txt country-$arraye saved.txt"; //edit disini
		$listt = str_replace("\r", "", $list);
		echo "$listt";
		$ilol = $argv[3];
		$myfile = fopen($ilol, "a");
		fwrite($myfile, "$listt\n");
		fclose($myfile);
	}	
}
$jum = count(file($argv[3]));
echo "\033[32m[ DONE ]! ";
echo "\033[34m >>> ";
echo "\033[37m[";
echo "\033[33m $jum ";
echo "\033[37m]";
?>
