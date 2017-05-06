<?php


if (!$app->dice->has("dice")) {
    $app->dice->set("dice", new \raag\Dice\Dice());
    $dice = $app->dice->get("dice");
} else {
    $dice = $app->dice->get("dice");
}

$checked = $dice->checkList();
$winner = $dice->checkWinner();

if ($dice->checkTurn()) {
    $turn = 2;
} else {
    $turn = 1;
}
if (isset($_GET['roll'])) {
    $dice->dice();
    $app->dice->set("dice", $dice);
    $app->response->redirect($app->url->create("dice"));
}
if (isset($_GET['save'])) {
    $dice->addScore();
    $app->dice->set("dice", $dice);
    $app->response->redirect($app->url->create("dice"));
}

if (isset($_GET['reset'])) {
    $app->dice->destroy();
    $app->response->redirect($app->url->create("dice"));
}

$rolling = $app->url->create("dice?roll");
$saving = $app->url->create("dice?save");
$reset = $app->url->create("dice?reset");
?>

<div class="centered" style="padding-bottom:220px;">
    <h3 class="header">Player <?= $turn ?></h3>

    <h3>Number: <?= implode(" ", $dice->getList())?></h3>
    <h3>Player one: <?= $dice->getScore(1)?></h3>
    <h3>Player two: <?= $dice->getScore(2)?></h3>
    <a href="<?= $rolling ?>">Roll dice</a>
    <a href="<?= $saving ?>">Save dices</a>
    <a href="<?= $reset ?>">Reset</a>
    <h3><?= $checked ?></h3>
    <h3><?= $winner ?></h3>
    <div class="divider divpadding"></div>
</div>
