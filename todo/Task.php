<?php
declare(strict_types=1);

class Task {
  public const PRIORITY_LOW = 0;
  public const PRIORITY_MIDDLE = 1;
  public const PRIORITY_HIGH = 2;

  private $name; // タスク名
  private $progress; // 進行度
  public $priority;
  private $secret; // 外部に漏らさないトークン値

  // 優先度を低〜高の文字列で取得する
  public function getPriorityAsString(): string {
    switch ($this->priority) {
      case self::PRIORITY_LOW:
        return '低';
        break;
      case self::PRIORITY_MIDDLE:
        return '中';
        break;
      case self::PRIORITY_HIGH:
        return '高';
        break;
    }
  }

  // タスク名のgetメソッド
  public function getName(): string {
    return $this->name;
  }

  // タスク名のsetメソッド
  public function setName(string $name): void {
    $this->name = $name;
  }

  // 進行度のgetメソッド
  public function getProgress(): int {
    return $this->progress;
  }

  // 進行度のsetメソッド
  public function setProgress(int $progress): void {
    if ($progress < 0) {
      $progress = 0;
    } else if ($progress > 100){
      $progress = 100;
    } 
    $this->progress = $progress;
  }

  // タスクを完了にする
  public function completeProgress(): void {
    $this->progress = 100;
  }

  // タスクを未完了にする
  public function clearProgress(): void {
    $this->progress = 0;
  }
}