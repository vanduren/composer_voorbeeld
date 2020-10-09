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