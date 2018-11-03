<?php
echo "List Site(TXT): ";
    $list=trim(fgets(STDIN,1010));
    $site = explode("\n", file_get_contents($list));
    foreach($site as $sites) {
    $ch=curl_init($sites);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_exec($ch);
    $check = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if($check == 200) {
        echo $sites." -> TerDeface\n";
        fwrite(fopen("found.txt","a"),$sites."\n");
    }
    elseif($check == 404) {
        echo $sites." -> 404\n";
    }
    elseif($check == 500) {
        echo $sites." -> 500 Internal Error\n";
    }
    elseif($check == 403) {
        echo $sites." -> 403 Forbidden\n";
        }
}
?>