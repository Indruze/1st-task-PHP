<?php

  use function Nfq\Akademija\Not_Typed\calculateHomeWorkSum as homeWorkSum;
  use function Nfq\Akademija\Soft\calculateHomeWorkSum as homeWorkSumSoft;
  use function Nfq\Akademija\Strict\wrapper as homeWorkSumStrict;

  require_once __DIR__ . '/vendor/autoload.php';

  $result = \calculateHomeWorkSum(3, 2.2, '1');
  echo "calculateHomeWorkSum: $result";
  echo PHP_EOL;
  $result = homeWorkSum(3, 2.2, '1');
  echo "Nfq\Akademija\Not_Typed\calculateHomeWorkSum: $result";
  echo PHP_EOL;
  $result = homeWorkSumSoft(3, 2.2, '1');
  echo "Nfq\Akademija\Soft\calculateHomeWorkSum: $result";
  echo PHP_EOL;
  $result = homeWorkSumStrict(3, 2.2, '1');
  echo "Nfq\Akademija\Strict\calculateHomeWorkSum: $result";
  echo PHP_EOL;
?>
