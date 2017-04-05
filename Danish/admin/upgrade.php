<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Danish/admin/upgrade.php
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
$locale['400'] = "Opgrader";
$locale['enable_maint_warning'] = "Sæt din side i vedligeholdelsestilstand, før du fortsætter for at undgå problemer under opgraderingen.\n
Du kan enten gå til [SECURITY_LINK]Sikkerhedsindstillinger[/SECURITY_LINK] og slå vedligeholdelsestilstand til, eller du kan klikke på knappen herunder.";
$locale['enable_maint'] = "Slå vedligeholdelsestilstand til";
//No upgrade
$locale['401'] = "Der er ingen databaseopgradering tilgængelig.";
// Stage 6 - User Field Categories
$locale['420'] = "Kontaktoplysninger";
$locale['421'] = "Diverse Information";
$locale['422'] = "Valgmuligheder";
$locale['423'] = "Statistik";
$locale['430'] = "Brugerfelt-kategorier";
$locale['432'] = "Brugeradministration";
$locale['434'] = "Elementer pr. side";
$locale['435'] = "Sikkerhed";
$locale['436'] = "Nyhedsindstillinger";
$locale['437'] = "Downloadindstillinger";
// v7.02 new locales
$locale['440'] = "Foreslå download";
$locale['441'] = "Replikboks";
$locale['442'] = "robots.txt";
$locale['443'] = "Brugerlog";
$locale['444'] = "Rediger administrativt kodeord";
$locale['445'] = "Fejllog";
//Upgrade locales
$locale['500'] = "En %s opgradering til databasen er tilgængelig.";
$locale['501'] = "Klik ganske enkelt på <i>opgrader</i> for at gennemføre den.";
$locale['502'] = "Opgraderingen er gennemført.";
$locale['503'] = "større";
$locale['504'] = "mindre";
$locale['505'] = "Erstat disse linjer i filen config.php!";
// Cookie Prefix
$locale['600'] = "Du skal redigere din config.php, og erstatte indholdet med følgende kode:";
// Email Template Setup
// Please do NOT translate the words between brackets [] !
$locale['T001'] = "Mailskabeloner";
$locale['T101'] = "Underretning ved ny PB";
$locale['T102'] = "Du har modtaget en ny privat besked fra [USER] på [SITENAME]";
$locale['T103'] = "Hej [RECEIVER],\r\nDu har modtaget en ny Privat Besked med overskriften [SUBJECT] fra [USER] på [SITENAME]. Du kan læse den private besked på [SITEURL]messages.php\r\n\r\nBesked: [MESSAGE]\r\n\r\nYDu kan slå denne funktion fra på siden under Private Beskeder - valgmuligheder, hvis du ikke længere ønsker at få mails.\r\n\r\nVenlig hilsen\r\n[SENDER].";
$locale['T201'] = "Underretning ved nye indlæg i debatten";
$locale['T202'] = "Nyt svar i debat - [SUBJECT]";
$locale['T203'] = "Hej [RECEIVER],\r\n\r\nDer er kommet et nyt indlæg i debatten \'[SUBJECT]\' som du følger på [SITENAME]. Du kan bruge følgende link til at se svaret:\r\n\r\n[THREAD_URL]\r\n\r\nHvis du ikke længere ønsker at følge denne debat, kan du klikke på linket \'Hold op med at følge\' som du finder i toppen af debatten.\r\n\r\nVenlig hilsen,\r\n[SENDER].";
$locale['T301'] = "Kontakt siden";
$locale['T302'] = "[SUBJECT]";
$locale['T303'] = "[MESSAGE]";
$locale['UF'] = "Privatlivsbeskyttelse";
$locale['SEO'] = "Permalinks";

$locale['700'] = "Dine fotoalbums er blevet flyttet";
$locale['701'] = "De tilknyttede filer i dit debatforum er blevet flyttet";
$locale['702'] = "Dine downloads er blevet flyttet";
$locale['703'] = "Flyt fotoalbums til din Version 9 folder";
$locale['704'] = "Flyt tilknyttede filer til din Version 9 folder";
$locale['705'] = "Flyt downloads til Version 9 folder";