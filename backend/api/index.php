<?php
// Autoriser l'accès depuis n'importe quelle origine
header('Access-Control-Allow-Origin: *');
// Autoriser les méthodes HTTP
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
// Autoriser certains en-têtes
header('Access-Control-Allow-Headers: Content-Type, Authorization');
// Pour les requêtes OPTIONS préliminaires
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit(0);
}

header('Content-Type: application/json');

$data = [
    'message' => 'Bonjour depuis l\'API PHP !',
    'timestamp' => time()
];

echo json_encode($data);
