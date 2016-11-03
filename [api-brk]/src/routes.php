<?php
// Routes
$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    global $db;
    var_dump($db);exit();
    $this->logger->info("Slim-Skeleton '/' route");


    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/customer/{customer_id}', function ($request, $response, $args) {
	//echo $this->sss();
	$foundCustomer = getCustomer($request->getAttribute('customer_id'));
	$response = $response->withJson($foundCustomer);
	return $response;
});