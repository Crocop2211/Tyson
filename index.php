<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Mon site en local</title>
  <meta name="description" content="Mon site en local">
  <meta name="author" content="Alexandre Delaistre">

  <meta property="og:title" content="Mon super site en local">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://urldemonsite.com">
  <meta property="og:description" content="Ce site est mon premier, soyez indulgent !">
  <!--meta property="og:image" content="image.png"-->

  <link rel="icon" href="/favicon.ico">
  <link rel="icon" href="/favicon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">

  <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <?php

    /* Exercice 1 = function ajouterDix($nombre)
    {
      $nombre += 10;
      return $nombre
    }
    ajouterDix(10)*/

    /* Exercice 2 
    $a = 4;
    $b = 5;
    function $sommeDesDeuxNombres = somme($a, $b)
    {
      $sommeDesDeuxNombres = $a + $b;
      return $sommeDesDeuxNombres
      
    }
     
    echo($sommeDesDeuxNombre) */


/* Exercice 3 
1 ère façon:
function direbBonjour_1($name)
{
  return 'Bonjour ' . $name . ', ça va ?';
}*/

/*2 ème façon:
function direBonjour_2($nom = 'Mike', $balise = 'h1')
    {
        $reponse = "<$balise>Bonjour $nom ça va ? </$balise>";
        return $reponse;
    }

    echo */

    
   /* Exercice 4
   function debug($variable);
    {

      echo '<pre>';
      var_dump($variable);
      echo '<pre>';

    }
    debug($variableToDump)*/

    
    /*exercice5
    $liste_eleves = [
        'Alexandre',
        'Noe', 
        'David',
        'Lila',
        'Rudy',
        'Mike',
    ];

     function direBonjour($name, $balise)
     {

       return"<$balise>Bonjour $name, ça va ?</$balise>";

     }


 function direbBonjourAtous($liste_eleves, $balise)
      {

    foreach ($liste_eleves as $key => $value) 
    {
    echo direBonjour($value, $balise);
      }
     
    }
        direbBonjourAtous($liste_eleves,'h3'); */ 



        $liste_eleves_deux_dimensions = [
          'Alexandre' => [
              'message' => "Bonjour !",
          ],
          'Noe' => [
              'message' => "Salut !",
          ], 
          'David' => [
              'message' => "Ciao !",
          ],
          'Lila' => [
              'message' => "Hello !",
          ],
          'Rudy' => [
              'message' => "Welcome !",
          ],
          'Mike' => [
              'message' => "Hi !",
          ],
          'Celine' => [
              'message' => "Plop !",
          ],
          'Celine' => [
              'message' => "Hola !",
          ],
          'Laetitia' => [
              'message' => "Yo !",
          ],
          'Samia' => [
              'message' => "Hallo !",
          ],
          'Mahjoub' => [
              'message' => "Coucou !",
          ],
      ];
      function toutLeMondeDitBonjour($liste_eleves_deux_dimensions, $balise)
      {
        foreach ($liste_eleves_deux_dimensions as $key => $value) {
          echo "<$balise>$key dit : ". $value['message']." </$balise>";
        }
      }
      
      toutLeMondeDitBonjour($liste_eleves_deux_dimensions, 'h1');

    ?> 
    <script src="js/scripts.js"></script>
</body>
</html>