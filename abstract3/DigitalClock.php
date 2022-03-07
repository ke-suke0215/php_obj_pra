<?php
declare(strict_types=0);

require_once dirname(__FILE__).'/Clock.php';

class DigitalClock extends Clock 
{
  // 文字色
  private $color;

  // 時間をセット（Clockクラスのメソッドをオーバーライド）
  // オーバーライド時はもとの関数と名前、引数が同じでなくてはいけない
  public function setTime(int $time): void
  { 
    if (date('H', $time) >= 6 && date('H', $time) <= 21) {
      // 6~21時は文字色は赤
      $this->color = 'red';
    } else {
      // その他は青
      $this->color = 'blue';
    }
    $this->time = $time;
  }
  
  // 文字色を取得するメソッド
  public function getColor(): string
  {
    return $this->color;
  }

  public function show(): string
  {
    return date('H:i', $this->time);
  }
}