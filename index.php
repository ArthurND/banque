<?php
//inclusion des deux classes 
include('Compte.php');
include('Titulaire.php');

    echo '<h1>BANQUE</h1>';
    
    $t1 = new Titulaire("WAGNER",'Aline','1987-04-01','Colmar');
    $t2 = new Titulaire('WAGNER','Alia','2012-04-01','Strasbourg');
    $t3 = new Titulaire('WAGNER','Ashley','2016-04-01','Strasbourg');
    $t4 = new Titulaire('WAGNER','Archibald','2022-04-01','Strasbourg');
    $c1 = new Compte($t1,'Compte courant',5000,'euros');
    $c2 = new Compte($t1, 'Compte epargne', 15000,'euro');
    $c3 = new Compte($t2, 'Compte epargne', 150,'euro');
    $c4 = new Compte($t3, 'Compte epargne', 150,'euro');
    $c5 = new Compte($t4, 'Compte epargne', 150,'euro');

    echo $t1 -> afficherInfos();
    echo $t2 -> afficherInfos();
    echo $t3 -> afficherInfos();
    echo $t4 -> afficherInfos();
    $c1->debiterCompte(500);
    $c1->debiterCompte(5000); 
    $c1->effectuerVirement($c5,300);
    $c1->crediterCompte(10000);
    $c5->crediterCompte(5000);
    $c4->crediterCompte(5000);
    $c3->crediterCompte(5000);
    $t4->afficherInfos();

    
   

?>