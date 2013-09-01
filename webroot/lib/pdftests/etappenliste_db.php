<?php

	error_reporting(E_ALL ^ E_NOTICE);

	include("../class.protokoll.php");

	$myEtappenliste = new Protokoll("Etappenliste");
	$myEtappenliste->setLogo("logo_briefkopf.jpg");
	$myEtappenliste->setFooter1("Bearbeiter: \nDatum: \nEtc:\nEtc:");
	$myEtappenliste->setFooter2("Bearbeiter: \nDatum: \nEtc:\nEtc:");
	

	$myEtappenliste->addItem(array('barcode'=>'test12345','amount'=>'1','itemno'=>'TGZ723591-123','price'=>7.0,'tax'=>'USTV','name'=>'Apfel', "desc"=>"Eine Kernfrucht mit s��lich-saurem Geschmack"));
	$myEtappenliste->addItem(array('barcode'=>'test12345','amount'=>'1','itemno'=>'TGZ723591-123','price'=>7.0,'tax'=>'USTV','name'=>'Apfel', "desc"=>"Mit Geschmack!"));
	$myEtappenliste->addItem(array('barcode'=>'test12345','amount'=>'1','price'=>7.0,'tax'=>'USTV','name'=>'Apfel', "desc"=>"Eine Kernfrucht mit s��lich-saurem GeschmackEine Kernfrucht mit s��lich-saurem GeschmackEine Kernfrucht mit s��lich-saurem Geschmack"));
	$myEtappenliste->addItem(array('barcode'=>'test12345','amount'=>'1','price'=>7.0,'tax'=>'USTV','name'=>'Apfel', "desc"=>"Eine Kernfrucht mit s��lich-saurem GeschmackEine Kernfrucht mit s��lich-saurem GeschmackEine Kernfrucht mit s��lich-saurem Geschmack"));
	$myEtappenliste->addItem(array('barcode'=>'test12345','amount'=>'1','price'=>7.0,'tax'=>'USTV','name'=>'Apfel', "desc"=>"Eine Kernfrucht mit s��lich-saurem GeschmackEine Kernfrucht mit s��lich-saurem GeschmackEine Kernfrucht mit s��lich-saurem Geschmack"));
	
	$myEtappenliste->displayDocument();

?>

