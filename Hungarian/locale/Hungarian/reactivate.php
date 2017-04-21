<?php
// Error messages
$locale['500'] = "Hiba történt";
$locale['501'] = "Az aktiváló link, amire rákattintottál, már nem érvényes.\n\n
Kérjük lépj kapcsolatba oldalunk adminisztrátorával: <a href='mailto:".fusion_get_settings('siteemail')."'>".fusion_get_settings('siteemail')."</a>";
$locale['502'] = "Az aktiváló link, amire rákattintottál, nem érvényes!<br /><br />
Kérjük lépj kapcsolatba oldalunk adminisztrátorával: <a href='mailto:".fusion_get_settings('siteemail')."'>".fusion_get_settings('siteemail')."</a>";
$locale['503'] = "Az aktiváló link, mire rákattintottál, már nem érvényes.\n
Valószínűleg hozzáférésed már aktiválva lett korábban. Ebben az esetben már be kellene tudnod jelentkezni <a href='".fusion_get_settings('siteurl')."login.php'>ezen az oldalon</a>.\n\n
Ha mégsem tudsz bejelentkezni, kérjük lépj kapcsolatba oldalunk adminisztrátorával: <a href='mailto:".fusion_get_settings('siteemail')."'>".fusion_get_settings('siteemail')."</a>";
// Send confirmation mail
$locale['504'] = "Felhasználó ativálva - ".fusion_get_settings('sitename');
$locale['505'] = "Szia [USER_NAME],\n
Hozzáférésed újraaktiválásra került. Reméljük aktív tagunk leszel a későbbiekben is.\n\n
Üdvözlettel,\n
".fusion_get_settings('siteusername')."\n".fusion_get_settings('sitename');
$locale['506'] = "Felhasználó által aktiválva.";