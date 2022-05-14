<?php

$age = new DateTime('20.04.1990');

$today = new DateTime(date('d.m.y')) ;

$ageDiff = $today->diff($age);

echo($ageDiff->y );


