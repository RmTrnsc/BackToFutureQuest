<?php

require_once '../controllers/TimeTravel.php';

//Instanciation de l'objet TimeTravel
$travel = new TimeTravel(new DateTime(), new DateTime());
var_dump($travel);

//Affichage de l'interval de temps entre deux dates
$travel->setStart(new DateTime('1989-01-23'))->setEnd(new DateTime());
echo '<br>' . $travel->getTravelInfo();

//Affichage de la date jusqu'ou Doc a voyagé
echo '<br><br>Doc se trouve à la date du ' . $travel->findDate(new DateInterval('PT1000000000S')) . '<br>';

//Affichage de toutes les étapes
$backStart = new DateTime('1954-04-23');
$backInterval = new DateInterval('P1M8D');
$backEnd = new DateTime('1985-12-31');
$backToFuture = new DatePeriod($backStart, $backInterval, $backEnd);
$return = $travel->backToFutureStepByStep($backToFuture);

foreach ($return as $date){
  echo '<p style="display: inline-block ">'.$date->format('M d Y a H:i').'</p>&nbsp;-&nbsp';
}
$travel1 = new TimeTravel(new DateTime('1985-12-31'), new DateTime('1954-04-23'));
$dates1 = $travel1->backToFutureStepByStep1(new DateInterval('P1M8D'));

