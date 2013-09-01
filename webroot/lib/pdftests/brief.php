<?php

error_reporting(E_ALL ^ E_NOTICE);

	include("../class.brief.php");

	$myLetter = new Brief();
	$myLetter->setLogo("logo_briefkopf.jpg");

  $myLetter->setDocumentDetails(
				"sender", 
				array("enterprise"=>"Embedded Projects","firstname"=>"Benedikt","familyname"=>"Sauter","address1"=>"Holzbachstr. 4","address2"=>"EG","areacode"=>"86150","city"=>"Augsburg", "country"=>"Germany", "phone1"=>"+(49) 821 279599-0", "fax"=>"+(49) 821 279599-20", "email"=>"info@embedded-projects.net", "web"=>"www.embedded-projects.net", "taxnr"=>"109/125/52073", "ustid"=>"DE263136143")
		);

	$myLetter->setRecipient(array("DrakeData","Ralph","Voigt","Theodor-Heuss-Platz 8","86150","Augsburg"));
	$myLetter->setLetterDetails(array("Ihr Schreiben vom ...","Sehr geehrter Herr Voigt,","erfallesinn Garist derech nigtocheider tr�us eit gemsteicher grofas H�hnt isondens Strer Arbin mittotzlischeul alastistise cum mungl�gewund; hinehre. Baucht platettend lauchruh�nd Hiesenb�ge Klauchlegsg�nd eich auf dauch der glich zu er undocheinlicht eist mintein in, der ung vertund die St. Arbile. Trotsachlein harkeit nundesch abeseingebe mitie St. Essenn stereints jen; der esten am zughachte, mitehen ech wiletzt.

Bur Kelnach lannalklandesolostorte wung eins ist Rand Felletochenem Bach gel Malb unget de ung Sond notader amalls Zeillanker ein zurrn Ichen warzensre vies Hauf den Per unktigkerklerlich�netten plamme eit nochen Teutzt K�ts Bauf tund die aumpoveracht er. Strall und leide Bus in Lie. Teutzt dur da�en Bedur h�nich en Seeine Noths, wie�teibter ein hies plavie Malaus ben dasen Mi� docheitz der Welderhaftauft aucht alst, dergt vergwasser es das berzimpon der dem befas k�neue Stum und ine.

Anheuf davolgt ein Jen und dur Bauf tumwur zwei den Namsheinzig h�nes Zigen ab, nisterm Fen zu gem Cover Sch gesfer Heill diegel unglaubehren all, no weilt um, w�rf gler sen nem ster h�nntene der Meit nigs zu se der pfe, alle Aughen Gefals S�dweigeschter auf des.

�beittlaummes solen ungenn kommen wierkeinhen, dirgrand den eng dielfe �benplechke imeingarf die die 900 Feln. Ein jedenesche Es Ant da� den; haber H�hrt parstrumera�es Haufkommerbilich nurchtund, den manglachten K�nhen Eifals tum St. Etan ung dese T�re Haus n�her Ahn sert�ckengef�ngliche Solichersch den kommelbt auch da�en St. Diedastig der f�nfrem Verotber wen Ver ind H�use glin vogese Mirs, dies Mal vonsichen Lon Hann Luf es sch.
	","Mit freundlichen Gr��en","Benedikt Sauter"));	
	
	$myLetter->displayDocument();

?>

