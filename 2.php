<?php
/**
BUAT SETTING PAGE di IJN={PAGE1,2,3,4 BEBAS} blm ku tambah ke automatis mls njingan >:(
*/
function getImg($kiword){
  $ch1 = curl_init();
  curl_setopt($ch1, CURLOPT_URL, "https://www.google.co.id/search?ei=c_uHW87hBc_p9QO-6I7wBg&safe=strict&yv=3&tbm=isch&q=$kiword&vet=10ahUKEwiO58Pk-pTdAhXPdH0KHT60A24QuT0IMSgB.c_uHW87hBc_p9QO-6I7wBg.i&ved=0ahUKEwiO58Pk-pTdAhXPdH0KHT60A24QuT0IMSgB&ijn=1&start=100&asearch=ichunk&async=_id:rg_s,_pms:s,_fmt:pc");
  curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch1, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
  $ex = curl_exec($ch1);
  curl_close($ch1);
  return($ex);
}
echo "
       GOOGLE DORK SEARCH IMAGE\n";
echo "SET KEYWORD: ";
$kiwd = trim(fgets(STDIN));
$kiWi = getImg($kiwd);
$list = array();
preg_match_all("/\"ou\":\"(.*?)\"/", $kiWi, $uRiMg);
foreach($uRiMg[1] as $uRI){
  if(!in_array($uRI, $list)){
    echo $uRI."\n";
}else{
    echo "NO RESULT FOUND...";
    sleep(3);
    echo "WAITING...";
    sleep(3);
    echo "EXITING...";
    exit();
  }
}