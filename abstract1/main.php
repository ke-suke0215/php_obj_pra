<?php declare(strict_types=0); ?>

<body>
  <?php
    require_once dirname(__FILE__).'/DigitalClock.php';

    // 日付文字列をUNIXタイムに変換
    $currentTime = strtotime('2022-03-06 07:26');
    
    $digitalClock = new DigitalClock();
    $digitalClock->setTime($currentTime);
    echo $digitalClock->show();
  ?>
</body>