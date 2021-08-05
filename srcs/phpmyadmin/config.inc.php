<?php

$cfg['blowfish_secret'] = '678ibw8dhnvbi56nfosd4iaodi5hbishzbk42'; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */

$i = 0;

$i++;

$cfg['Servers'][$i]['auth_type'] = 'cookie';

$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true; /* was false by default */

$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';