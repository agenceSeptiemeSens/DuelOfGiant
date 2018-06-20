<?php
include('world\world.php');

$world = new World;

$deck = $world->setDeck();
var_dump($deck);


