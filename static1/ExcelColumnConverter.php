<?php
// 静的メソッド
declare(strict_types=0);

// エクセルの列名を変換するクラス
class ExcelColumnConverter {
  // 数値の列番をアルファベットに変換
  public static function calcAlphabetColumnName(int $number): string {
    return chr(ord('A')+$number);
  }

  // アルファベットを数値の列番に変換
  public static function calcNumberColumnName(string $alphabet): int {
    return ord($alphabet) - ord('A');
  }
}