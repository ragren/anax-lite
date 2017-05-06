<?php

$app->router->add("session", function () use ($app) {
    $app->view->add("take1/header", ["title" => ["Session", "css/style.css"]]);
    $app->view->add("navbar2/navbar");
    $app->view->add("Session/session");
     $app->view->add("take1/footer");
    $app->response->setBody([$app->view, "render"])
    ->send();
});

$app->router->add("session/increment", function () use ($app) {
    $app->session->set("number", $app->session->get("number") + 1);
    header("Location: {$app->url->create('session')}");
});

$app->router->add("session/decrement", function () use ($app) {
    $app->session->set("number", $app->session->get("number") - 1);
    header("Location: {$app->url->create('session')}");
});

$app->router->add("session/status", function () use ($app) {
    $status = [
        "Session id" => session_id(),
        "Session name" => session_name(),
        "Session status" => session_status(),
        "Session cache expire" => session_cache_expire(),
        "Session save path" => session_save_path(),
        "Session module name" => session_module_name(),
    ];
    $app->response->sendJson($status);
});

$app->router->add("session/dump", function () use ($app) {
    $app->view->add("take1/header", ["title" => ["Session Dump", "../css/style.css"]]);
    $app->view->add("navbar2/navbar");
    $app->view->add("Session/dump");
    $app->view->add("take1/footer");
    $app->response->setBody([$app->view, "render"])->send();
});

$app->router->add("session/destroy", function () use ($app) {
    $app->session->destroy();
    header("Location: {$app->url->create('session/dump')}");
});
