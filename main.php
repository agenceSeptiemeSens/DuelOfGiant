<?php
include('./world/deck/deck.php');
include('./world/deck/world.php');

$world = new World;

$world->setNom("world");

$deck = $world->setDeck('deck');

$deck->setCommonCreature('sushi-man');

echo  $deck->getDeckName();



