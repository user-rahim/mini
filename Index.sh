#!/bin/bash
green='\e[1;32m'
red='\e[1;31m'
#Header
ulang='y'
while [ $ulang == 'y' ]
do
pkg install php -y
pkg install curl -y
pkg install python2 -y
clear
echo -e "\e[${green}\t\t|~~~~~~~~~~~~~~~~~~~|"
echo -e "\e[${green}\t\t| Mini ToolMux V.1  |"
echo -e "\e[${green}\t\t| Author : Mr.Svy   |"
echo -e "\e[${green}\t\t| Team : IndoSec    |"
echo -e "\e[${green}\t\t|~~~~~~~~~~~~~~~~~~~|"
echo -e "\e[0mSelect the you want to Use?"
echo -e "${green}1.${red}Google Dork Grab Site"
echo -e "${green}2.${red}Google Dork Search Image"
echo -e "${green}3.${red}Google Dork SQLI"
echo -e "${green}4.${red}Creator Script Deface"
echo -e "${green}5.${red}Deface Page Checker"
echo -e "${green}6.${red}Shell Page Checker"
echo -e "${green}7.${red}ReverseIP"
echo -e "${green}8.${red}Admin Finder"
echo -e "${green}9.${red}Port Scan"

echo -e "\n\n\e${red} CTRL+C To Exit\n"
echo -n -e "\e[0mSelect Number > "
read pilih
echo -e "${red}Loading...\n"
sleep 3
#
#Select No 1
if [ $pilih -eq "1" ]; then
python2 1.py
fi
if [ $pilih -eq "2" ]; then
php 2.php
fi
if [ $pilih -eq "3" ]; then
python2 3.py
fi
if [ $pilih -eq "4" ]; then
python2 4.py
fi
if [ $pilih -eq "5" ]; then
php 6.php
echo "Hasil Di Found.txt"
fi
if [ $pilih -eq "6" ]; then
php 7.php
fi
if [ $pilih -eq "7" ]; then
php 8.php
fi
if [ $pilih -eq "8" ]; then
php 8.php
fi
if [ $pilih -eq "9" ]; then
python2 9.py
fi
echo ""
echo -n -e "\e[1;32mNext Or Exit? (Select y/n): "
read ulang
done
clear
