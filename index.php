<?php

require_once "Config/autoload.php";

$database = new Database(DB_DSN, DB_USER, DB_PWD);

$dispatch = new Dispatcher($database->connection);
$dispatch->dispatch();
