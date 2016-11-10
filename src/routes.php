<?php
// Routes

/*$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
*/
$app->get('/club', function ($request, $response, $args) {
    $sth = $this->db->prepare("SELECT * FROM club");
    $sth->execute();
    $clubs = $sth->fetchAll();
    //$response->content_type = 'application/json;charset=utf-8';
    //$egal = [];
    //$egal[0] = $clubs[0];
    //$egal[1] = $clubs[1];

   /* $response->getBody()->write(json_encode($clubs));
    $newResponse = $response->withHeader(
        'Content-type',
        'application/json; charset=utf-8'
    );
    return $newResponse; */
    //$response = $response->withHeader('Content-Type', 'application/json;charset=utf-8');
    return $response->withJson($clubs);
});

$app->get('/test', function ($request, $response) {
    //header('Content-Type: application/json; charset=utf-8');
    $data = [
        ['name' => 'Tester'],
        ['name' => 'Österreich'],
    ];
    //$response = $response->withHeader('Content-Type', 'application/json;charset=utf-8');
    //return $response->withJson("Österreich");
    return $response->withJson($data);
});