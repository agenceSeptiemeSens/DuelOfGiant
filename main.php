<?php
include('world\world.php');
include('db\cartes.php');

$world = new World;
$deck = $world->deck($cards);
var_dump($deck['cuisine']);
var_dump($deck['cinema']);


