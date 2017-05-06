<?php
if (!$app->session->has("number")) {
    $app->session->set("number", 0);
} else {
    $app->session->get("number");
}
$incr = $app->url->create("session/increment");
$decr = $app->url->create("session/decrement");
$stat = $app->url->create("session/status");
$dump = $app->url->create("session/dump");
$dest = $app->url->create("session/destroy");
?>

<div class="centered" style="padding-bottom:220px;">
    <h3 class="header">Sessions</h3>
    <div class="divider divpadding"></div>
    <h3>Värde: <?= $app->session->get("number")?></h3>
    <a href="<?= $incr ?>">/increase</a>
    <a href="<?= $decr ?>">/decrease</a>
    <a href="<?= $stat ?>">/status</a>
    <a href="<?= $dump ?>">/dump</a>
    <a href="<?= $dest ?>">/destroy</a>

</div>
