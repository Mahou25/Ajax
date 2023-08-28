<?php
// Connexion à la base de données
$conn = mysqli_connect('localhost', 'root', '', 'ajaxtest');

// Vérification de la connexion
if (!$conn) {
    die("La connexion à la base de données a échoué : " . mysqli_connect_error());
}

// Récupérer tous les utilisateurs
$query = "SELECT * FROM users";

// Exécuter la requête
$result = mysqli_query($conn, $query);

// Vérifier si la requête a réussi
if (!$result) {
    die("Erreur dans la requête : " . mysqli_error($conn));
}

// Fetch Data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Fermer la connexion à la base de données
mysqli_close($conn);

// Convertir le tableau d'utilisateurs en JSON et l'afficher
echo json_encode($users);
?>
