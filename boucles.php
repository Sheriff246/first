<?php
$notes = [];
if ($notes[] !==is_numeric && !($notes[] === 'fin')) {
  echo "La note doit être un nombre";
} else {
  if ($notes[]<0 || $notes[]>20) {
    echo "La note doit être entre 0 et 20";
  }
}
while ($notes[] !='fin') {
  $i++;
  $notes[] = readline("Entrez une note ou écrivez 'fin' pour terminer: ");
  if ($notes[] != !== fin){
    $notes[] = (float)$notes[];
  }
  if ($notes[$i] == 'fin') {
    echo "Vous avez fini la saisie des notes";
    return $notes;
  }
}

?>