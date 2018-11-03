<?php
/*
         { IndoSec }
   Create | Secure | Exploit 
*/ 
system("clear");
menu:
print "
+---+----------------------------+
|   |      Shell Checker         |
+---+----------------------------+
| 1 | Single Checker             |
+---+----------------------------+
| 2 | Mass Checker               |
+---+----------------------------+
| 3 | Exit                       |
+---+----------------------------+
";
echo "\n@ShellCHK > ";
$pilih = trim(fgets(STDIN));

if ($pilih == '1') {
	echo "Masukan Site : ";
	$target1 = trim(fgets(STDIN));
	$cek = get_headers($target1);
	if (preg_match('/200/', $cek[0])) {
		echo "\n [ FOUND ] $target1 ";
	} else {
		echo "\n [ NOT FOUND ] $target1 ";
	}
} elseif ($pilih == '2') {
	echo "Masukan List Site : ";
	$target2 = trim(fgets(STDIN));

	$file = file_get_contents($target2);
	$extract = explode("\n", $file);

	foreach ($extract as $key) {
		$b = get_headers($key);
		if (preg_match('/200/', $b[0])) {
			echo " [ FOUND ] $key\n";
		} else {
			echo "[ NOT FOUND ] $key\n";
		}
	}
} elseif ($pilih == '3') {
	echo "Good Bye :*";
	sleep(1);
	exit();
} else {
	echo "$pilih Not found";
	sleep(1);
	system("clear");
	goto menu;
}

 ?>