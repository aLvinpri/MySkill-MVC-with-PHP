<?php
// Ini berada di folder public / index.php

if (!session_id()) session_start();
  
require_once '../app/init.php';

$app = new App;
