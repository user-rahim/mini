<?php
//NOTE: PUT URL WITHOUT HTTP:// or HTTPS;//
function save($haha,$data){
        $fp = @fopen("$haha.txt", "a") or die("cant open file");
        fwrite($fp, $data);
        fclose($fp);
}
$banner = "
   REVERSEIP DOMAIN/IP\n";
echo $banner;
echo "Domain/IP: ";
$domain = trim(fgets(STDIN));
$list = array();
$domains = urlencode($domain);
$ch1 = curl_init("https://viewdns.info/reverseip/?host=$domains&t=1");
curl_setopt ($ch1, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch1, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch1, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
curl_setopt ($ch1, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch1, CURLOPT_SSL_VERIFYHOST, 0);
$result = curl_exec ($ch1); 
preg_match_all("/<\/tr><tr> <td>(.*?)<\/td>/", $result, $kontoru);
foreach($kontoru[1] as $kontolatos){
if(!in_array($kontolatos,$list)){
	$list[] = $kontolatos;
	echo $kontolatos."\n";
  save($domain, $kontolatos."\n");
}
else{
//
}
}
$kontoruss = file_get_contents("$domain.txt");
$asu = explode("\n", $kontoruss);
$count = count($asu);
echo "\n\nTotal Domain: $count";
echo "\nSaved To ==> $domain.txt\n";