<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+---------------------------------------------------------+
| Filename: root/locale/Czech/admin/blacklist.php
| Author: Frederic Chan 
| Translate czech: Kvido phpfusion.cz, 26.05.2017
+---------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
$locale['BLS_000'] = "Černá listina"; //406
//Blacklist message
$locale['BLS_010'] = "Neplatná e-mailová adresa nebo IP adresa.";
$locale['BLS_011'] = "Přidávání uživatelů do černé listiny.";
$locale['BLS_012'] = "Uživatelská modifikovaná černá listina.";
$locale['BLS_013'] = "Uživatel byl smazán z černé listiny"; //401
$locale['BLS_014'] = "Opravdu chcete tuto položku smazat?";
$locale['BLS_015'] = "Černá listina je momentálně prázdná."; //465
$locale['BLS_016'] = "E-mailová adresa černé listiny, není platná e-mailová adresa."; //405

$locale['BLS_020'] = "Černá listina uživatel"; //420
$locale['BLS_021'] = "Upravit uživatele na černé listině"; //421
$locale['BLS_022'] = "Přidat uživatele na černou listinu";
$locale['BLS_023'] = "Aktuální zobrazení %d z %d černé listiny.";

$locale['BLS_030'] = "Černá listina informace"; //461
$locale['BLS_031'] = "Admin"; //467
$locale['BLS_032'] = "Datum";  //468
$locale['BLS_033'] = "Možnosti"; //462
$locale['BLS_034'] = "Černá listina IP: [STRONG]nebo[/STRONG]"; //441
$locale['BLS_035'] = "Černá listina e-mail"; //442
$locale['BLS_036'] = "Černá listina důvod"; //443
$locale['BLS_037'] = "Přidat uživatele na černou listinu";  //444
$locale['BLS_038'] = "Aktualizace";

$locale['BLS_MS'] = "Zadání adresy IP zabrání uživateli, jehož adresa IP odpovídá záznamu při návštěvě tohoto webu.
Můžete zadat úplnou adresu IP, např. <em> 123.45.67.89. </em> Ale také částečnou adresu IP, např. <em> 123.45.67 </em>, případně <em> 123.45 </em>.
Vezměte prosím na vědomí: Adresy IPv6 jsou na tomto webu převedeny na jejich úplný formulář,
např. <em> ABCD: 1234: 5: 6: 7: 8: 9: FF </em>, se zobrazí jako <em> ABCD: 1234: 0005: 0006: 0007: 0008: 0009: 00FF </em>.
Smíšené adresy IP (ty, které obsahují část IPv6 i IPv4) nebudou kontrolovány pro částečnou shodu.
<br /> <br />
Zadání e-mailové adresy zabrání členům při registraci pomocí této adresy.
Můžete zadat úplnou e-mailovou adresu, např. <em> foo@bar.com </em>, nebo e-mailová doména, např. <em> bar.com </em>. <br /> <br />

% - odpovídá libovolnému řetězci. <br /> <br />

%%%%%%@domain.tld zakáže jakoukoli adresu, která obsahuje alespoň 3 body. <br />
%+%@domain.tld zakáže jakoukoli adresu, která obsahuje alespoň jeden znak plus. <br />
%@domena.tld zakáže libovolnou adresu z domain.tld <br />
% .domain.tld zakáže všechny subdomény domény.tld <br />
% Payday% zakáže jakoukoli adresu, která obsahuje slovo \ "payday \", což bylo velmi často na stránkách. <br />
Domain.tld je alias %@domain.tld, aby bylo kompatibilní s pravidly definovanými ve verzi PHP-Fusion v7. <br /> "; // 440
