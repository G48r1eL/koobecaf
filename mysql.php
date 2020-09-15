<?php
//  connection à la BDD avec PDO
try
{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$base = new PDO('mysql:host=localhost;dbname=koobecaf', 'root', '', $pdo_options);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
