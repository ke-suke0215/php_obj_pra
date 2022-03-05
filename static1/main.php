<?php declare(strict_types=0); ?>
<body>
  <?php
    require_once dirname(__FILE__).'/ExcelColumnConverter.php';

    echo ExcelColumnConverter::calcAlphabetColumnName(3);
    echo ExcelColumnConverter::calcNumberColumnName('D');
  ?>
</body>