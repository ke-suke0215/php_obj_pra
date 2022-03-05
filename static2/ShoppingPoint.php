<?php
// 静的プロパティ
// クラスで1つの状態を保持したいとき
// ポイントを管理するプログラム
declare(strict_types=0);

class ShoppingPoint {
  // 静的プロパティを定義
  public static $point;

  // ポイントを1追加する
  public static function countUpPoint() {
    self::$point++;
  }
}