<?php
$mdp='unmotdepasse_dur';
$mdp_hash= password_hash($mdp, PASSWORD_BCRYPT);
echo $mdp_hash;
?>