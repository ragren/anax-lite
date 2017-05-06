<?php
$app->router->add("", function () use ($app) {
    $app->view->add("take1/header", ["title" => ["Home", "css/style.css"]]);
    $app->view->add("navbar2/navbar");
    $app->view->add("take1/home");
     $app->view->add("take1/footer");
    $app->response->setBody([$app->view, "render"])
    ->send();
});
$app->router->add("about", function () use ($app) {
    $app->view->add("take1/header", ["title" => ["About", "css/style.css"]]);
    $app->view->add("navbar2/navbar");
    $app->view->add("take1/about");
     $app->view->add("take1/footer");
    $app->response->setBody([$app->view, "render"])
    ->send();
});
$app->router->add("report", function () use ($app) {
    $app->view->add("take1/header", ["title" => ["Report", "css/style.css"]]);
    $app->view->add("navbar2/navbar");
    $app->view->add("take1/report");
     $app->view->add("take1/footer");
    $app->response->setBody([$app->view, "render"])
    ->send();
});
$app->router->add("status", function () use ($app) {
    $data = [
        "Server" => php_uname(),
        "PHP version" => phpversion(),
        "Included files" => count(get_included_files()),
        "Memory used" => memory_get_peak_usage(true),
        "Execution time" => microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'],
    ];
    $app->response->sendJson($data);
});

$app->router->add("dice", function () use ($app) {
    $app->view->add("take1/header", ["title" => ["Dice", "css/style.css"]]);
    $app->view->add("navbar2/navbar");
    $app->view->add("Dice/dice");
     $app->view->add("take1/footer");
    $app->response->setBody([$app->view, "render"])
    ->send();
});
