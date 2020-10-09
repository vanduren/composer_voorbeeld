Maken van een compose package
Gebaseerd op video https://www.youtube.com/watch?v=B2DFoO_CMwQ&ab_channel=RakibTG
1. maak code in src en in inc
2. Open terminal en "composer init" (maak een composer.json)
3. Kies package naam
4. geef description, auteur en minimum stability
stability:
–stable (most stable)
– RC
– beta
– alpha
– dev (least stable)
alle packages waar jouw package van afhankelijk is moeten ook die stability hebben
5. kies type (library voor classes), license, dependencies
6. Voeg nog een autoload property toe (zie composer.json)
hierin geef je aan waar moet worden gezocht naar de class (namespace en pad)

7. Maak een github repo aan en push code naar github
8. Maak account aan op https://packagist.org/
9. kies submit vanuit menu (en submit de repo link (zonder .git))
10.  Create new release (in github aaan rechterkant in code scherm)
11. Maak release nummer en andere info en update in packagist.org
12. Kopieer commando in packagist om te testen
13. maak nieuw lokaal map en geef commando
14. test de code (maak test.php)met behulp van volgende code:
<?php

use RandomQuotes\RandomQuotes;

require_once('./vendor/autoload.php');
$myQuote = new \RandomQuotes\RandomQuotes;
print_r($myQuote->generate());

15. test met php test.php