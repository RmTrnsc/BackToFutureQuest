<?php


class TimeTravel
{
  /**
   * @var DateTime
   */
  private $start;
  /**
   * @var DateTime
   */
  private $end;

  public function __construct()
  {
    $this->start = new DateTime();
    $this->end = new DateTime();
  }

  public function getTravelInfo($start, $end)
  {
    $diff = ($start)->diff($end);
    return "Il s'est passé {$diff->y} années, {$diff->m} mois, {$diff->d} jours, 
    {$diff->h} heures, {$diff->i} minutes et {$diff->s} secondes depuis ma naissance";
  }

  public function findDate(DateInterval $interval)
  {
    $start = new DateTime('1985-12-31');
    $diff = $start->sub($interval);
    return $diff->format('d M Y');
  }

  public function backToFutureStepByStep(DatePeriod $step)
  {
    $date = [];
    foreach ($step as $stopDate) {
      array_push($date, $stopDate);
    }
    return $date;
  }
}