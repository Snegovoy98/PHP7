#!/usr/bin/env php

<?php
require __DIR__ . '/../vendor/autoload.php';
$repo  = new \App\Repository\ProductRepository();
$repo->getAll();
$repo->count('a');
