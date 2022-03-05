<?php
// 抽象クラスの継承
declare(strict_types=0);

// 抽象クラスを定義
abstract class Clock
{
  protected $time;

  // 時間を表示する抽象メソッド
  // 中身は子クラスで定義する
  abstract public function show(): string;

  public function setTime($time): void
  {
    $this->time = $time;
  }

  public function getTime(): string
  {
    return $this->time;
  }
}
