<?php


	$fh = fopen('serverSolr_conf.xml', 'w+');

	fwrite($fh, '<?xml version="1.0" encoding="UTF-8"?><configuration><connection_solr>');
	fwrite($fh, '<server>'.$_POST['server'].'</server>');
	fwrite($fh, '<username>'.$_POST['username'].'</username>');
	fwrite($fh, '<password>'.$_POST['password'].'</password>');
	fwrite($fh, '<port>'.$_POST['port'].'</port>');
	fwrite($fh, '</connection_solr><prefs>');
	fwrite($fh, '<tickets_manual>'.$_POST['tickets_manual'].'</tickets_manual>');
	fwrite($fh, '</prefs></configuration>');

	fclose($fh);

	print(json_encode("success"));

?>
