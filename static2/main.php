<body>
  <?php
    require_once dirname(__FILE__).'/ShoppingPoint.php';
    
    // 曜日ポイントクラス
    class WeekDayPoint {
      public function addWeekDayPoint(string $youbi) {
        if ($youbi == 'Fri') {
          ShoppingPoint::countUpPoint();
        }
      }
    }
    
    // 1000円以上でポイント加算
    function addPricePoint(int $price) {
      if ($price >= 1000) {
        ShoppingPoint::countUpPoint();
      }
    }

    // ポイントの初期値は0
    ShoppingPoint::$point = 0;

    // 購入すると1ポイント
    ShoppingPoint::countUpPoint();

    $weekDayPoint = new WeekDayPoint();
    $weekDayPoint->addWeekDayPoint('Fri');

    addPricePoint(3000);

    echo '購入ポイント：'.ShoppingPoint::$point;
  ?>
</body>