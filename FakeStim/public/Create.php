<?php

 require_once __DIR__ . '/../database/db.php';
 //require_once __DIR__ . '/../model/ValidationInscription.php';
 

 $Database = new Database(
     "127.0.0.1",
     "fakesteamdb",
     "root",
     "",
     
 );
 $model = new ($Database);

 //include view
 include __DIR__ . '/../view/Create.php';
