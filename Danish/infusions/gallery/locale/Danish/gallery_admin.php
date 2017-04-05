<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: locale/infusions/gallery/locale/Danish/gallery_admin.php
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
$locale['gallery_0001'] = "Album";
$locale['gallery_0002'] = "Tilføj billede";
$locale['gallery_0003'] = "Rediger billede";
$locale['gallery_0004'] = "Tilføj album";
$locale['gallery_0005'] = "Rediger album";
$locale['gallery_0006'] = "Albumopsætning";
$locale['gallery_0007'] = "Brugerforslag";
$locale['gallery_0009'] = "Upload et enkelt billede";
$locale['gallery_0010'] = "Upload flere billeder";
$locale['gallery_0011'] = "Der er ikke oprettet albums.";
$locale['gallery_0012'] = "Der er ikke oprettet albums. Du er nødt til at oprette mindst et album, før du kan tilføje billeder. <a href='%s'>Klik her</a> for at springe til fotoalbums.";
$locale['gallery_0013'] = "Billedhandlinger";
$locale['gallery_0014'] = "Flyt billede op";
$locale['gallery_0015'] = "Flyt billede ned";
$locale['gallery_0016'] = "Rediger billede";
$locale['gallery_0017'] = "Slet billede";
$locale['gallery_0018'] = "Aktuelt viser vi %d af i alt %d albums.";
$locale['gallery_0019'] = "Aktuelt viser vi %d af i alt %d billeder i det hele taget.";
$locale['gallery_0020'] = "Dette album er senest opdateret for";
$locale['gallery_0021'] = "Adgang til album";
$locale['gallery_0022'] = "Albumadministration";
$locale['gallery_0023'] = "Der er i alt %d albums og %d billeder på siden. Seneste opdatering %s.";
$locale['gallery_0024'] = "Der er ikke oprettet albums.";

// Album Form
$locale['album_0001'] = "Albumoverskrift";
$locale['album_0002'] = "Albumnavn";
$locale['album_0003'] = "Albumbeskrivelse";
$locale['album_0004'] = "Beskriv dit album";
$locale['album_0005'] = "Nøgleord";
$locale['album_0006'] = "Brug ENTER til at adskille nøgleord";
$locale['album_0007'] = "Adgang for";
$locale['album_0008'] = "Sprog";
$locale['album_0009'] = "Albumminiature";
$locale['album_0010'] = "Maksimal filstørrelse: %s / Tilladte filtyper: %s / Maksimal bredde: %spx, Maksimal højde: %spx";
$locale['album_0011'] = "Rækkefølge af albums ";
$locale['album_0012'] = "Gem album";
$locale['album_0013'] = "Dit album er opdateret";
$locale['album_0014'] = "Dit album er oprettet";
$locale['album_0015'] = "Du skal angive et navn for dit album";
$locale['album_0016'] = "Slet ikonet for dit album";

// Gallery actions & front page (first tab)
$locale['album_0020'] = "Handlinger";
$locale['album_0021'] = "Flyt op";
$locale['album_0022'] = "Flyt ned";
$locale['album_0023'] = "Slet album";
$locale['album_0024'] = "Rediger album";
$locale['album_0025'] = "Dit album er flyttet opad";
$locale['album_0026'] = "Dit album er flyttet nedad";
$locale['album_0027'] = "Der er billeder i det aktuelle album";
$locale['album_0028'] = "Slet hele dette album";
$locale['album_0029'] = "Flyt billederne til... %s";
$locale['album_0030'] = "Dit album er slettet";
$locale['album_0031'] = "Dine billeder er flyttet til %s";
$locale['album_0032'] = "%d billeder i dette album er slettet";

// Photo Form
$locale['photo_0001'] = "Billedets overskrift ";
$locale['photo_0002'] = "Billedets navn";
$locale['photo_0003'] = "Album ";
$locale['photo_0004'] = "Billede ";
$locale['photo_0005'] = "Nøgleord for billedet ";
$locale['photo_0006'] = $locale['album_0005']; // i put like this, and no dependencies.
$locale['photo_0007'] = $locale['album_0006'];
$locale['photo_0008'] = "Beskrivelse af billedet ";
$locale['photo_0009'] = "Beskriv billedet";
$locale['photo_0010'] = "Tillad kommentarer ";
$locale['photo_0011'] = "Tillad vurdering ";
$locale['photo_0012'] = "Gem";
$locale['photo_0013'] = "Rækkefølge ";
$locale['photo_0014'] = "Billede skal angives";
$locale['photo_0015'] = "Billedet er opdateret";
$locale['photo_0016'] = "Billedet er tilføjet";
$locale['photo_0017'] = $locale['album_0010'];
$locale['photo_0018'] = "Slet billede";
$locale['photo_0019'] = "Du kan uploade op til 20 billeder her. Klik på <i>Tilføj billede/billeder</i>) og udpeg flere billeder for at vælge dem. Klik derefter på <i>Gem</i> for at påbegynde upload.";$locale['photo_0020'] = "Upload de valgte billede";
$locale['photo_0020'] = "Upload de valgte billeder";
$locale['photo_0021'] = "%d billeder er tilføjet";
$locale['photo_0021a'] = "%d billeder blev ikke uploadet på grund af fejl";
$locale['photo_0022'] = "Billedet er flyttet opad";
$locale['photo_0023'] = "Billedet er flyttet nedad";
$locale['photo_0024'] = "Billedet er slettet";
$locale['photo_0025'] = "Slet alle billeder";
$locale['photo_0026'] = "<strong>ADVARSEL:</strong> Denne funktion vil <strong>for altid fjerne alle billeder</strong> i dette album. Er du sikker?";
$locale['photo_0027'] = "Bekræft sletning";
$locale['photo_0028'] = "Fortryd";

// Submissions form
$locale['gallery_0100'] = "Brugerforeslåede billeder";
$locale['gallery_0101'] = "Tak for dit billedforslag";
$locale['gallery_0102'] = "Vil du foreslå endnu et billede";
$locale['gallery_0103'] = $locale['photo_0003'];
$locale['gallery_0104'] = $locale['photo_0001'];
$locale['gallery_0105'] = $locale['photo_0005'];
$locale['gallery_0106'] = $locale['album_0006'];
$locale['gallery_0107'] = "Brug nedenstående formular til at foreslå et billede. Dit forslag vil blive gennemset af en
administrator. [SITENAME] forbeholder sig retten til at slette eller redigere alle forslag. Billedet
skal ligge på linje med sidens øvrige indhold. Forslag der vurderes som upassende vil blive slettet uden videre.";
$locale['gallery_0106'] = $locale['photo_0008'];
$locale['gallery_0109'] = $locale['photo_0004'];
$locale['gallery_0110'] = $locale['photo_0014'];
$locale['gallery_0111'] = "Foreslå billede";
$locale['gallery_0112'] = "Beklager, men vi modtager aktuelt ikke forslag til billeder her på siden.";
$locale['gallery_0113'] = "Tilbage til [SITENAME]";

// Submissions admin
$locale['gallery_0150'] = "Der er aktuelt ikke foreslået billeder.";
$locale['gallery_0151'] = "Der er aktuelt %s brugerforslag, der venter på gennemsyn.";
$locale['gallery_0152'] = "Overskrift på foreslået billede";
$locale['gallery_0153'] = "Forslagsstiller";
$locale['gallery_0154'] = "Forslagstidspunkt";
$locale['gallery_0155'] = "Forslags-ID";
$locale['gallery_0156'] = "Ovenstående billede blev foreslået af ";
$locale['gallery_0157'] = "Foreslået af ";
$locale['gallery_0158'] = "Offentliggør billede";
$locale['gallery_0159'] = "Slet brugerforslag";
$locale['gallery_0160'] = "Billedforslaget er blevet offentliggjort";
$locale['gallery_0161'] = "Forslaget er slettet";

// Settings
$locale['gallery_0200'] = "Tillad billedforslag ";
$locale['gallery_0201'] = "Skal billeder have en beskrivelse ";
$locale['gallery_0202'] = "Miniaturer pr. side";
$locale['gallery_0203'] = "Miniaturestørrelse";
$locale['gallery_0204'] = "bredde x højde";
$locale['gallery_0205'] = "Billedstørrelse";
$locale['gallery_0206'] = "Maksimal billedstørrelse";
$locale['gallery_0207'] = "Maksimal filstørrelse for billede";
$locale['gallery_0208'] = "Farve for vandmærke";
$locale['gallery_0209'] = "Farve for vandmærke ved albumbeskrivelse";
$locale['gallery_0210'] = "Billedoverskriftsfarve på vandmærke";
$locale['gallery_0211'] = "Slet eksisterende vandmærker";
$locale['gallery_0212'] = "Angiv en .png fil, der skal bruges som vandmærke ";
$locale['gallery_0213'] =  "Slå tekstvandmærker til på billeder ";
$locale['gallery_0214'] = "Slå vandmærker til på billeder ";
$locale['gallery_0215'] = "Gem de oprettede vandmærker ";
$locale['gallery_0216'] = "Gem opsætning for fotoalbum";
$locale['gallery_0217'] = "Tilladte filtyper";

// temporary
// Error Album messages
$locale['635'] = "Fotoalbum ";
$locale['636'] = "Uploadet af";
$locale['637'] = "Dato for tilføjelse";
$locale['638'] = "Vurder";
$locale['639'] = "Kommenter";
$locale['640'] = "Billedbeskrivelse";
$locale['641'] = "Antal frenvisninger";
$locale['642'] = "Vurderinger";
$locale['643'] = "Kommentarer";
$locale['644'] = "Dimensioner";
$locale['645'] = "Billedtype";
$locale['646'] = "Kanaler";
$locale['647'] = "Bits";
$locale['648'] = "ISO";
$locale['649'] = "Belysning";
$locale['650'] = "Blænde";
$locale['651'] = "Kamera";
$locale['652'] = "Kameramodel";
$locale['655'] = "Nøgleord";
$locale['660'] = "Der er ingen billeder i dette album";
$locale['702'] = "Billedet er uploadet";
$locale['703'] = "Billedet er opdateret";

// Photo Gallery Settings
$locale['600'] = "Album";
$locale['601'] = "Miniaturestørrelse";
$locale['602'] = "Billedstørrelse";
$locale['603'] = "Maksimal billedstørrelse";
$locale['604'] = "Bredde x Højde";
$locale['605'] = "Maksimal filstørrelse (i bytes)";
$locale['606'] = "Kompressionsmetode til miniature";
$locale['607'] = "GD1";
$locale['608'] = "GD2";
$locale['609'] = "Miniaturer pr. række";
$locale['609b'] = "Miniaturer pr. række (Administration)";
$locale['610'] = "Miniaturer pr. side";
$locale['611'] = "Skal vandmærker slås til på billeder?";
$locale['612'] = "Angiv vandmærke af typen PNG";
$locale['613'] = "Skal tekstbeskrivelse slås til på billeder?";
$locale['614'] = "Overskriftsfarve for album";
$locale['615'] = "Farve på beskrivelsen af dit album";
$locale['616'] = "Overskriftsfarve på billedets overskrift";
$locale['617'] = "Skal oprettede vandmærker gemmes?";
$locale['618'] = "Reducerer belastningen på serveren; tager mindre plads";
$locale['619'] = "Slet eksisterende vandmærker";
$locale['620'] = "Skal eksisterende vandmærker slettes?";
$locale['621'] = "Upload et billede";