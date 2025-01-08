
<?php
function verif_heure($heure)
{
$datetime = DateTime::createFromFormat('h-i', $heure);
if ($heure !==false)
{
  echo "L'heure entrée est correcte\n";
}
else{
  echo "L'heure entrée n'est pas au bon format\n";
}
}
echo "Entrez l'heure d'ouverture de votre magazin  (au format hh-mm)\n";
$heure_ouverture = readline();
verif_heure($heure_ouverture);
echo"Entrez l'heure de fermeture de votre magazin (au format hh-mm)\n";
$heure_fermeture = readline();
verif_heure($heure_fermeture);
echo"Il est quelle heure ? (au format hh-mm)\n";
$heure_actuelle = readline();
verif_heure($heure_actuelle);
echo"Quel jour somme nous ? (1 = lundi, 2 = mardi...)\n";
$jour_actuel = readline ();
function verif_jour($jour_actuel)
{
$datetime = DateTime::createFromFormat('w', $jour_actuel);
if ($jour_actuel !==false)
{
  echo "Le format du jour est correct\n";
}
  else{
    echo "Le format du jour est incorrect\n";
}
};
if ($heure_ouverture < $heure_actuelle  &&  $heure_actuelle < $heure_fermeture && $jour_actuel <6)
{
  echo "Le magasin est ouvert\n";
}
else
{ 
  echo "Le magizin est fermé\n";
}
?>