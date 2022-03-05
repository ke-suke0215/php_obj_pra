<?php
declare(strict_types=0);

require_once dirname(__FILE__).'/Clock.php';

// Clockクラスを継承
class DigitalClock extends Clock
{
  // Clockクラスで定義した抽象メソッドを実装
  public function show(): string
  {
    // 親クラスで定義したプロパティには通常通りアクセスできる
    return date('H:i', $this->time);
  }
}