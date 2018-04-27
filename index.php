
<html>
<head>
	<title>Amazon par David Good enough</title>
	<link rel="stylesheet" type="text/css" href="css_files/index.css">
</head>

<body>
	
	<h1 class="david"> Vos livres ont brulés , mais au moins ils ont fait un bon feu </h1>



<?php 

$_1 = array(
        'titre' => "UN",
        'prix' => 20,
        'prime' => True,
        'note' => 4
      );

$_2 = array(
        'titre' => "DEUX",
        'prix' => 15,
        'prime' => false,
        'note' => 3
      );
$_3 = array(
        'titre' => "TROIS",
        'prix' => 50,
        'prime' => false,
        'note' => 5
      );
$_4 = array(
        'titre' => "QUATRE",
        'prix' => 93,
        'prime' => true,
        'note' => 0
      );
$_5 = array(
        'titre' => "CINQ",
        'prix' => 24,
        'prime' => false,
        'note' => 1
      );
$_6 = array(
        'titre' => "SIX",
        'prix' => 80,
        'prime' => true,
        'note' => 5
      );
$_7 = array(
        'titre' => "SEPT",
        'prix' => 40,
        'prime' => false,
        'note' => 3
      );

$_8 = array(
        'titre' => "HUIT",
        'prix' => 40,
        'prime' => true,
        'note' => 2
      );

$_9 = array(
        'titre' => "NEUF",
        'prix' => 29.9,
        'prime' => true,
        'note' => 5
      );

$_10 = array(
        'titre' => "DIX",
        'prix' => 10,
        'prime' => false,
        'note' => 4
      );

$livres = array($_1, $_2, $_3, $_4, $_5, $_6, $_7, $_8, $_9, $_10);

foreach ($livres as $livre) {
   echo '<div class="book">';
   echo 'Titre:' .$livre['titre'].'<br />';
   echo 'Prix: '.$livre['prix'].'€<br />';
   echo 'Note: '.$livre['note'].'<br />';


if ($livre['prime']==true) {
            echo 'Prime';
        }
        else {
            echo 'Pas prime';
        }
        echo '</span>';
        echo '</div>';
 
 }

?>



</body>
</html>