<?php 

// Import controller 
require "controllers/ctrRoute.php";
require "controllers/ctrTemplate.php";
require "controllers/ctrgruposwsp.php";

// Import models
require_once "models/modelo.grupos.php";

// Load controller template
$template = new Template();
$template->ctrTemplate();

?>