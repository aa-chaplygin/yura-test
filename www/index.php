<?php

$pages = array(
	'main'
);

$page = isset($_GET['page']) && in_array(strtolower($_GET['page']), $pages)  ? strtolower($_GET['page']) : $pages[0];

require('templates/header.php');
require(sprintf('templates/page_%s.php', $page));
require('templates/footer.php');

?>
