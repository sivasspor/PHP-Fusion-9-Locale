<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/Danish/admin/permalinks.php
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
// Section Titles
$locale['400'] = "Aktive permalinks";
$locale['401'] = "Inaktive permalinks";
$locale['401a'] = "Opsætning af permalinks";

// Common
$locale['402'] = "Genskriv navn";
$locale['403'] = "Beskrivelse";
$locale['404'] = "Valgmuligheder";
$locale['404a'] = "Slå til";
$locale['404b'] = "Slå fra";
$locale['404c'] = "Rediger";
$locale['404d'] = "Geninstaller";

// Editing Permalinks
$locale['405'] = "Redigerer permalinks for %s";
$locale['406'] = "Tags";
$locale['407'] = "Beskrivelse";
$locale['408'] = "Typer";
$locale['409'] = "Rediger mønster";
$locale['410'] = "Type af permalink %u";
$locale['411'] = "Fejl";
$locale['412'] = "Kontroller de filer, der som permalink har typen %s!";
$locale['413'] = "Gem";
$locale['414'] = "ADVARSEL: Dette permalink og alle CA-data vil blive slettet!\\nEr du sikker på at du vil slette linket?";
$locale['415'] = "<b>Permalinks</b> fungerer således, at funktionen ændrer adresserne på siden til adresser, der er mere anvendelige af søgemaskiner der gør det muligt at tilpasse adressestrukturen på din side.\n
Du kan slå Permalinks til under sideopsætningen, hvis din server understøtter mod_rewrite. Du aktiverer de forskellige som kan ses under sektionen Slået Fra. Du kan også redigere reglerne yderligere for bedre at tilpasse adresserne direkte i hvert Permalinkmodul.n\n
Bemærk venligst at mod_rewrite eller dens tilsvarende er påkrævet for at permalinks skal virke.";

// Admin Messages
$locale['420'] = "Der opstod en fejl.";
$locale['421'] = "Permalinks er opdateret.";
$locale['422'] = "Ingen permalinkmønstre fundet for %s.";
$locale['423'] = "Dette permalink kunne ikke findes.";
$locale['424'] = "Slog permalinks for %s til.";
$locale['425'] = "Permalinks for %s er allerede slået til.";
$locale['426'] = "Slog permalinks for %s fra.";
// Other
$locale['427'] = "Ingen permalinks er slået til.";
$locale['428'] = "Permalinks";
$locale['seo_htc_warning'] = "Bemærk venligst, at hvis du ændrer noget i denne opsætning, så vil indholdet i filen `.htaccess` blive overskrevet og alle tidligere ændringer i denne fil blive fjernet.";
$locale['rewrite_disabled'] = "Det ser ud til at `mod_rewrite` ikke er slået til hos din udbyder. Slår du SEF-adresser til, kan du risikere at ødelægge navigationen på din side. Kontakt først din udbyder for at få slået `mod_rewrite` til.";