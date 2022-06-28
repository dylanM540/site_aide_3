<?php
$userAge = 17;
?>

<?php
$userAge = 17; // La variable est créée et vaut 17
$userAge = 23; // La variable est modifiée et vaut 23
$userAge = 55; // La variable est modifiée et vaut 55
?>

<?php
$fullname = "Mathieu Nebra";
$email = 'mathieu.nebra@exemple.com';
?>

<?php
$variable = "Mon \"nom\" est Mathieu";
$variable = 'Je m\'appelle Mathieu';
?>

<?php
$variable = 'Mon "nom" est Mathieu';
$variable = "Je m'appelle Mathieu";
?>

<?php
$userAge = 17;
?>

<?php
$price = 57.3;
?>

<?php
$isAuthor = true;
$isAdministrator = false;
?>


<?php
$noValue = NULL;
?>

<?php
$fullname = 'Mathieu Nebra';
echo $fullname;
?>


<?php
$fullname = "Mathieu Nebra";
echo "Bonjour ";
echo $fullname;
echo " et bienvenue sur le site !";
?>

<?php
$fullname = "Mathieu Nebra";
echo "Bonjour $fullname et bienvenue sur le site !";
?>

<?php
$fullname = 'Mathieu Nebra';
echo 'Bonjour $fullname et bienvenue sur le site !'; // ERREUR !
?>

<?php
$fullname = 'Mathieu Nebra';
echo 'Bonjour ' . $fullname . ' et bienvenue sur le site !'; // OK
?>

<?php
$number = 2 + 4; // $number prend la valeur 6
$number = 5 - 1; // $number prend la valeur 4
$number = 3 * 5; // $number prend la valeur 15
$number = 10 / 2; // $number prend la valeur 5

// Allez on rajoute un peu de difficulté
$number = 3 * 5 + 1; // $number prend la valeur 16
$number = (1 + 2) * 2; // $number prend la valeur 6
?>

<?php
$number = 10;
$result = ($number + 5) * $number; // $result prend la valeur 150
?>

<?php
$number = 10 % 5; // $number prend la valeur 0 car la division tombe juste
$number = 10 % 3; // $number prend la valeur 1 car il reste 1
?>