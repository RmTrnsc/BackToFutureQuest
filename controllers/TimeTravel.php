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

  public function __construct(DateTime $start, DateTime $end)
  {
    $this->start = $start;
    $this->end = $end;
  }

  public function getTravelInfo()
  {
    $diff = ($this->start)->diff($this->end);
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

  /**
   * @return DateTime
   */
  public function getStart(): DateTime
  {
    return $this->start;
  }

  /**
   * @param DateTime $start
   * @return TimeTravel
   */
  public function setStart(DateTime $start): TimeTravel
  {
    $this->start = $start;
    return $this;
  }

  /**
   * @return DateTime
   */
  public function getEnd(): DateTime
  {
    return $this->end;
  }

  /**
   * @param DateTime $end
   * @return TimeTravel
   */
  public function setEnd(DateTime $end): TimeTravel
  {
    $this->end = $end;
    return $this;
  }
}
