<?php
    header('Content-Type: application/json');

    $data = json_decode(file_get_contents('php://input'), true);
    $ruc = $data['ruc'] ?? '';

    if (empty($ruc)) {
        echo json_encode(['error' => 'El RUC no puede estar vacío.']);
        exit;
    }

    $apiUrl = "https://api.apis.net.pe/v2/sunat/ruc?numero=" . $ruc;
    $apiToken = "apis-token-11871.RZi5UBMEN4bzeLtEWZRtLUb6ye4s0dVM";
    $options = [
        'http' => [
            'header' => "Authorization: Bearer $apiToken\r\n"
        ]
    ];

    $context = stream_context_create($options);
    $response = file_get_contents($apiUrl, false, $context);

    if ($response === FALSE) {
        echo json_encode(['error' => 'Error al consultar la API.']);
        exit;
    }

    echo $response;
    exit;
    $apiData = json_decode($response, true);

    if (isset($apiData['error'])) {
        echo json_encode(['error' => $apiData['error']]);
        exit;
    }

    $razonSocial = $apiData['nombre'] ?? '';
    $direccion = $apiData['direccion'] ?? '';

    echo json_encode([
        'nombre' => $razonSocial,
        'direccion' => $direccion
    ]);
?>