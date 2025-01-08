<?php
$note1 = readline("Entrez la première note : ");
if ($note1 !=is_numeric()) {
  echo "La note doit être un nombre";
} else {
  if ($note1<0 || $note1>20) {
    echo "La note doit être entre 0 et 20";
  } elseif ($note1 >= 10) {
      echo "Bravo ! Vous avez la moyenne";
    } else {
  echo "Dommage ! Vous n'avez pas la moyenne";
}
}
?>