PHP-Fusion 9.02
==================
Csak a fejlesztõk példánya: Ez a másolat még próba verzió, ami instabilitásához vezethet, kérjük, ne frissítse további értesítésig.
Important Announcements:
=============
02/Mar/2017(GMT+8) 17:50hr - https://www.php-fusion.co.uk/forum/viewthread.php?thread_id=38308


RC5 Naplók módosítások:
===============================
- Új Artemis és Material Adminisztrációs felület
- Új Fusion Felület Csomag (Nebula csomag a WIP, amíg véget ér minden egyes szakaszban futó minõségû egyedi sablonokat)
- Hírek Infusion frissítve 1.02-re, sok kódváltoztatással így már támogatja a Hír Gallériát, (Automatikus mentés funkció WIP)
- Törölve Admin Rights NC, DC, WC és továbbiak
- SecureImage v3, SecureImage v1 and v2 törölve
- Bootstrap frissítve 3.3.7 verzióra
- Új telepítõ a PHP-Fusion 9-hez, új frissítési futtatásokat.



Értesítések
===========

Frissítés PHP-Fusion 9 RC5
-----------------=========
Ez vonatkozik a PHP-Fusion bármely verziójára, amelyre frissíteni kívánja a PHP-Fusion Release Candidate 5 legújabb fejlesztõi verzióját, amely végleges kiadásra jelölt, még mielõtt véglegesre jelölték volna.

A frissítéshez léteznie kell egy létezõ config.php és egy létezõ adatbázisnak. Futtasd a install.php fájlt, és kövesse az összes lépést. Az Infusions lépésben kattintson a frissítésre ahol lehet, hogy frissítse az adatbázis rekordokat a PF9 infúziókhoz. Az összes frissítési fájlt eltávolíthatja hiba nélkül a telepítõ befejezése után. Ha bármilyen hiba van, kérjük, jelezze a hivatalos támogatási fórumon.


Szoftver Követelmény a PHP-Fusion 9 RC5-höz:
----
|   Software    |   Ajánlott |   Minimum |
|---|---|---|
| PHP   |  5.6.8 | 5.5.35 |
| MySQL |   5.5.3   | 5.1 |
| Apache    | 2.4+  | 2.0 |
| Nginx     |  1.8+ |   1.0 |

Közös Git parancsok:
----

````
git pull origin
git merge
git push
````

or for clones

````
git fetch https://www.github.com/PHP-Fusion/php-fusion.git 9.00
git merge
git push
````

Ukrán, orosz Magyar nyelven mindent lefordítottak. A litván és a dán részlegesen lefordítva, de a fájl integritását ellenõrzik. Ha hiba történt, kérjük, olvassa el az angol változatot.


PHP-Fusion Developers Only verzió
=================================
A PHP-Fusion 9.00 jelenleg aktív fejlesztés alatt áll. A Beta kiadásának elsõ verziója 2014 negyedik negyedévében indult el.
A PHP-Fusion 9.00-ben SEO permalineket vezettek be, a biztonság növelése érdekében. Sablonok kerültek bevezetésre a hatékonyság növelése érdekében.
Added Features in the Version 9.00 includes blog.

A PHP-Fusion egy könnyû, nyílt forráskódú PHP-ben futó tartalomkezelõ rendszer (CMS), amelyet Nick Jones (más néven Digitanium) alapított. MySQL adatbázis felhasználásával tárolja a weboldal tartalmát, és egy egyszerû, de átfogó adminisztrációs rendszerrel rendelkezik. A PHP-Fusion több más CMS-csomagban is használható szolgáltatásokat tartalmaz.


A Github Development Repository használata
==========================================
<strong>Saját PHP-Fusion Fork frissítése</strong>
<ol>
    <li><strong>Követelmény</strong>:
    <ul>
        <li>Hozz létre egy Github Hozzáférést</li>
        <li>Telepítsd a Github [Windows](https://desktop.github.com/)/Mac vagy telepítse a [GitSCM](https://git-scm.com/downloads) Hogy elérje a legújabb GitBash verziót</li>
        <li>Indítsa el a Gitbash parancssori terminálját
        <ol>
        <li><strong>Mac :</strong> Nyissa meg a terminált vagy egyszerûen írja be <strong>terminal</strong> a Spotlight/Finderben</li>
        <li><strong>PC:</strong> Start, írja be <strong>cmd</strong> a keresõbe.</li>
        <li>Így megnyit egy hozzáférést a <strong>Terminal vagy Dos vagy GitBash</strong> írja be a parancsot <strong>cd</strong> parancsal navigálhatja magát a tárhelye munkakönyvtárához (i.e. C:\User\user\Documents\Github\PHP-Fusion\ > - )
    </ul>
	</li>
    <li><strong>Most hajtsa végre és futtassa soronként</strong>
<ol>
<li>git init</li>
<li>git checkout 9.00</li>
<li>git pull upstream</li>
<li>git push</li>
<li>Írja be <strong>Felhasználó név</strong> és a <strong>jelszót</strong> (ha van)</li>
</ol>
<strong>Példa:</strong>
<ol>
<li>C:\User\user\Documents\Github\PHP-Fusion\ git init</li>
<li>C:\User\user\Documents\Github\PHP-Fusion\ git checkout 9.00</li>
<li>C:\User\user\Documents\Github\PHP-Fusion\ git pull upstream</li>
<li>C:\User\user\Documents\Github\PHP-Fusion\ git push</li>
<li>Írja be <strong>Felhasználó név</strong> és a <strong>jelszót</strong> (ha van)</li>
</ol>
</li>
</ul>

Fejlesztési változások (9. verzió)
==================================
<strong>Elkészült</strong>
<ul>
<li><strong>Gyors Mag</strong> - Leegyszerûsíthetõ a teljesítmény. Elõsször is, új class autoloader hoztak létre a class helyett, szerveroldali mentések fájl elérési utakon keresztül. A fájlok kezelése a Mag funkciója újra felhasználható a maincore.php hívása nélkül</li>
<li><strong>Hatékonyabb és könnyebb kódolás</strong> - Automatizált összetevõk nélkül sok html kódolás. Az ûrlapok létrehozása könnyebb, mint korábban, a részek és a szabványos formájú összetevõk funkciói, amelyek a szinte minden egyes HTML attribútumot magukban foglalják, és szinte minden egyes jquery implementációt egy ûrlapmezõben.</li>
<li><strong>360 degree Automatic Sanitization</strong> - A PHP-Fusion Defender mindent magába foglal. Nincs több egyéni sanitization vagy fájlfeltöltés érvényesítés. Ha a mag segítségével meg tudjuk csinálni, akkor a magon keresztül tesszük.</li>
<li><strong>Új PDO</strong> - Új PDO Támogatja a MSQLi szerver bázist.</li>
<li><strong>Idõzóna</strong> - A kiszolgálói idõ eltolódásokat az Idõzónák szerint újradefiniáltuk, így a DST a mi natív funkcióinkban is elérhetõ showdate(), timer(), countdown(), etc</li>
<li><strong>Összevont funkciók</strong> - A 6,7-es verzió óta támogatott, egyedi, beépített natív funkciók felülvizsgáltuk, elavultak átírtuk.</li>
<li>Bootstrapp & Letisztult dizájn</strong> - Minden alapvetõ sablon rögtön alkalmazkodik a tervezéshez. Le lehet kapcsolni, hogy támogassa az idõsebb generációk témáitt vagy más olyan érzékeny kereteket, mint az Foundation, a grid360, a Szemantikus felhasználói felület stb. Mindazonáltal kérjük, vegye figyelembe, hogy alapvetõ rendszereink kizárólag a Bootstrap alkalmazására épülnek.
</ul>

A PHP-Fusion lehetõséget nyújt a felhasználóknak arra, hogy a szabványos csomagokkal ún. Infúziókkal bõvítsék. Ezek az infúziók könnyen feltölthetõk, telepíthetõk és kezelhetõk. Számos infúzió érhetõ el, melyek így megtalálhatók a hivatalos PHP-Fusion Mods adatbázisában. Az infúziók mellett vannak olyan modok is, amelyek leginkább a magkódot és a paneleket tartalmaznak, amelyek valamelyik oldalsó oldalon jelennek meg. Ezek mind széles körben rendelkezésre állnak, ellenõrzik és fel vannak tüntetve a PHP-Fusion Mods adatbázisban.
A PHP-Fusion emellett témák létrehozását és weboldala könnyû használatát is kínálja, kevés munkával. Két fájl van, a theme.php és a styles.css, amelyeken a téma nagy része meghatározható és módosítható.

Fõbb jellemzõi
==============
A PHP-Fusion a következõ fõbb jellemzõkkel rendelkezik:
<ul>
<li>Hírek</li>
<li>Blog</li>
<li>Cikkek</li>
<li>Fórum</li>
<li>Galéria</li>
<li>Web Linkek</li>
<li>Letöltések</li>
<li>Szavazás</li>
<li>Üzenõfal</li>
<li>Privát Üzenetek</li>
<li>Keresõ</li>
<li>Felületek</li>
</ul>

Új funkciók 9.00
================
<strong>Fejlesztõi funkciók</strong><br/>
<P>A CMS-t úgy tervezték meg, hogy alkalmazkodjon a felhasználók igényeihez, elsõsorban az egyéni igények kielégítésére. Ebben az új verzióban dolgoztunk CMS átstrukturálásában, hogy egyre többet hozzunk ki a PHP-Fusion-ból, különös tekintettel a következõkre: </ p>
- Maximális fejlesztési produktivitás
- Maximális fejlesztési sebesség
- Egyszerû használat.

<strong>Új Mag</strong><br/>
A PHP-Fusion 9.00-et a maincore.php után négy extra core segíti.<br/>
- A Dynamic Output handling Class.
- A PHP-Fusion Quantum-Dynamic Field Class.
- A PHP-Fusion Defender Class.
- A PHP-Fusion Atom theme Class.
- A PHP-Fusion Autoloader Class.

<strong>Új Telepítõ</strong><br/>
Egy új telepítõt terveztek és alakítottak ki az egyedi igények kielégítésére:<br/>
- Telepítés/Törlés a Mag rendszer Modulja.
- A weboldal tulajdonjoga átruházása más személyekre anélkül, hogy ki kellene adnia az eredeti jelszót (Jelszó-visszaírási módszer).
- Frissítés A korábbi verziókból - úgy döntenek, hogy 2 legfontosabb okból átkerülnek
- A config.php átnevezése így leállítja a Weboldal mûködését, és nem zavarja a DB felülírását.
  -- fast-in-fast-out. Annak érdekében, hogy a telepítõ végrehajtsa a weboldalon a szükséges módosításokat, a webhely látogatói nem tudnak beavatkozni a folyamatba, és hogy a felhasználók biztonsági okból ne vegyék könnyedén ezeket a folyamatokat.

<P>Vegye figyelembe, hogy az adatbázis mentése az Admin Panel-ban maradt, mivel nem mûködik közre a weboldal futtatásával. A rendszergazdának lehetõsége van a webhely karbantartása bekapcsolására, ha azt szeretné.</ P>

<strong>Új Felület SDK</strong>
<P>Most robusztusabb és testre szabhatóbb. Az eddigi 7.00-es verzióból a kiterjesztett render_news(), a 9.00-es verzióban adták hozzá:</ p>

<strong>Cikkek:</strong>: display_main_articles(), render_article(), render_article_item()<br/>
<strong>Blog:</strong>: render_main_blog(), display_blog_item(), display_blog_index(), display_blog_menu()<br/>
<strong>Letölrések:</strong>: render_downloads(), display_download_menu()<br/>
<strong>GyiK</strong>: display_main_faq(), render_faq_item()<br/>
<strong>Fórum (Part A: Forms)</strong>: display_forum_postform(), display_forum_pollform(), display_quickReply()<br/>
<strong>Fórum (Part B: Main)</strong>: render_forum(), render_forum_main(), render_forum_item(), forum_viewforum(), render_forum_threads(), render_thread_item(), render_participated(), render_laft(), render_tracked(), render_unanswered(), render_unsolved(), forum_filter(), forum_newtopic(), render_postify()<br/>
<strong>Fórum (Part C: Tags)</strong>: display_forum_tags()<br/>
<strong>Fórum (Part D: Thread)</strong>: render_thread(), render_post_item()<br/>
<strong>Privát Üzenetek</strong>: display_inbox()<br/>
<strong>Hírek:</strong> render_news(), render_main_news(), render_news_item()<br/>
<strong>Felhasználói Profil: </strong> display_user_profile(), display_user_field(), display_user_field_container()<br/>
<strong>Web Linkek:</strong> display_main_weblinks(), render_weblinks_item()<br/>
<br/>
Ha szeretné testreszabni bármelyik részt, tegye be a függvényeket a téma közé, hogy felülírja az alapértelmezett értékeket.

<strong>Új Admin Panel</strong><br/>
<ul>
<li><strong>Felület</strong> :Az adminisztrátor Felület alapértelmezett útvonala /themes/admin_themes/</li>
<li><strong>Letisztult Dizájn</strong> : Új Admin felület az Artemis.</li>
<li><strong>Irányítópult</strong> : Új Adminisztrációs felület.</li>
<li><strong>Admin Belépés és Kilépés</strong>: Kiterjesztette a biztonságot, és eltávolította az adminisztrátor jelszavának beírását a bejelentkezés után.</li>
</ul>

<strong>Hatékony felhasználói mezõk Modul</strong><br/>
A felhasználói mezõk dinamikusak, modulok nélkül is hozzáadhatók. Csak add hozzá az Admin Panel segítségével.

<strong>Felület motor</strong><br/>
Hozzáadtja az alapértelmezett css témákat a módosításhoz.

<strong>Többnyelvû</strong><br/>
Támogatjuk Többnyelvû opciót a 9.00 Verziótól. Az alapvetõ funkciókat e köré fejlesztjük. A kompatibilitási ok miatt nem írtunk SDK-t vagy API-t, csak egyszerûen
a felhasználói nézet nyelvezetét könnyen az alábbi parancs "?lang=English" / "?lang=Russian" segítségével a felhasználó által használt nyelvi modell váltáshoz. Tartalomkezelés beleértve
a felhasználói mezõk létrehozása, a panel nyelvének váltása alkalmazkodni fog ehhez a módszerhez, és ennek megfelelõen válthat. Ha azonban egy tartalom angolul áll rendelkezésre, akkor nem jelenik meg
más nyelven, amíg egy másik tartalom nem áll rendelkezésre. A cikkek / hírek / szálait minden nyelvét külön kezeljük.
<strong>SEO Integráció</strong><br/>
Végrehajtottuk az elsõ lépést a rendszer egészére kiterjedõ, moduláris alapú SEO permalinkekre. Kulcsszavakkal és metákkat egészítetük ki a rendszert.

<strong>Új Almenû Rendszer</strong>
A Beta 4 alatt a fejlesztõi csapat új hierarchia menürendszert indított a 9.00-es verzióra.

Új Mag Rendszer
===============
 -- Sablon Mag
 -- Korlátlan hierarchia
 -- Új Adminisztrációs Felület

- Blog Rendszer
- Navigációs almenû rendszer

Kiemelt változások és Módosítások az új Rendszerben
===================================================
- Fórum - a fórumok korlátlan száma adható hozzá. Korlátlan fórum-hierarchia szinteket, és hozzáadott 2 új típusú fórumot - Válaszok és támogatások és linkek.
- Folyamatosan vizsgálja hogy a felhasználó éppen mit használ @username a fórum, üzenõfal, és az összes aplikációt felhasználja a parseSmileys();

A Jövõ
======
A PHP-Fusion egy egyszerû CMS, amelyet a kiszolgáló betöltési idejének villámgyors teljesítménye miatt használtak, mert a kódokat könnyûvé és tömörítjük.
Még az újonnan kifejlesztett funkciókkal is, hogy több alapmunkát végezzenek, nagyon valószínû, hogy a régebbi elemeket nem támogatják. Lessz idõ az átállásra.
Amikor minden alapmûveletet elindítottunk, jövõbeni fejlesztési verzióink a jquery, az ajax és a mobil eszközökkel fognak haladni.
