<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Danish/reactivate.php
| Authors: Jan Mølgaard (janmol) & Helmuth Mikkelsen (helmuth)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
// Error messages
$locale['500'] = "Der opstod en fejl";
$locale['501'] = "Det genaktiveringslink, du klikkede på, er ikke længere gyldigt.<br /><br />
Kontakt en administrator på siden via <a href='mailto:".fusion_get_settings('siteemail')."'>".fusion_get_settings('siteemail')."</a> hvis du ønsker en manuel reaktivering.";
$locale['502'] = "Det genaktiveringslink, du klikkede på, er ikke længere gyldigt!<br /><br />
Kontakt en administrator på siden via <a href='mailto:".fusion_get_settings('siteemail'Blink."'>".fusion_get_settings('siteemail'Blink."</a> hvis du ønsker en manuel reaktivering.";
$locale['503'] = "Det reaktiveringslink, du anvendte kunne ikke reaktivere din brugerkonto.<br />
Måske er din konto allerede blevet reaktiveret, og er det tilfældet, skulle du være i stand til at <a href='".fusion_get_settings('siteurl')."login.php'>logge ind her.</a>.<br /><br />
Hvis du stadigvæk ikke kan logge ind, så kontakt en administrator på siden via mail: <a href='mailto:".fusion_get_settings('siteemail')."'>".fusion_get_settings('siteemail')."</a> hvis du ønsker en manuel reaktivering.";
// Send confirmation mail
$locale['504'] = "Din konto er reaktiveret på ".fusion_get_settings('sitename')."";
$locale['505'] = "Hej [USER_NAME],\n
Din konto på ".fusion_get_settings('sitename')." er blevet reaktiveret. Vi håber at se dig lidt oftere på siden.\n\n
Venlig hilsen,\n\n
".fusion_get_settings('siteusername');
$locale['506'] = "Reaktiveret af brugeren.";
