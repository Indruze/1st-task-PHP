# 1st-task-PHP

- kodėl Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, ‘1’) yra 6?

  Funkcijoje nurodome tipą, kuris paverčia argumentus į int. 3 + 2 + 1 = 6

- kas ir kodėl nutiko bandant kviesti: Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, ‘1’);

  PHP Fatal error:  Uncaught TypeError: Argument 2 passed to Nfq\Akademija\Strict\calculateHomeWorkSum() must be of the type integer, float given, called in src/functions_strict.php on line 8 and defined in src/functions_strict.php:4

  Next TypeError: Argument 3 passed to Nfq\Akademija\Strict\calculateHomeWorkSum() must be of the type integer, string given, called in src/functions_strict.php on line 8 and defined in src/functions_strict.php:4

  Kadangi nurodėme direktyvą strict_types, kuri nurodo, kad paduodami argumentai turi atitikti aprašytą type (šiuo atveju int), o paduodame ir float ir stringą, gauname errorą.
