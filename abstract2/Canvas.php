<?php
declare(strict_types=0);

require_once dirname(__FILE__).'/Clock.php';

class Canvas
{
  public $backgroundColor;

  public function drawClock(Clock $clock): void
  {
    echo $clock->show();
  }
}