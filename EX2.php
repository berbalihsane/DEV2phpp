<?php
// 1 : on cree les fichiers
$fichier1 = fopen('pscde01_CLI1001.txt', 'w');
$fichier2 = fopen('psccl01_CLI1004.txt', 'w');

// 2 : on ajout les commandes de client 1
$keys = array('NumCmd' , 'NumCl' , 'DateCmd' , 'DesArt' , 'Qte' , 'PrixU' ,'DateLiv' , 'AdrssCl');
$client1 = array_fill_keys($keys,2012090001,'CLI1001','11-09-12','sucre morceaux',1,6,'13-09-12','Rue2Agadir');
fputs($fichier1, $client1);
// 3 : on ajout les commandes de client 2
$keys = array('NumCmd' , 'NumCl' , 'DateCmd' , 'DesArt' , 'Qte' , 'PrixU' ,'DateLiv' , 'AdrssCl');
$client2 = array_fill_keys($keys,2013090001,'CLI1004','11-09-12','haricote sec',1,6,'15-09-12','Rue2Coleber');
fputs($fichier2, $client2);

// 4 : on ferme le fichier
fclose($fichier1);
fclose($fichier2);
?>