<?php

$link = mysqli_connect('localhost', 'root', 'root', 'geek');

function getPage($pages) {
	$pageNumber = 1;
	if (!empty((int) $_GET['page'])) {
		$pageNumber = (int) $_GET['page'];
	}

	if (empty($pages[$pageNumber])) {
		$pageNumber = 1;
	}

	return $pages[$pageNumber];
}

function getId() {
	if (!empty((int) $_GET['id'])) {
		return (int) $_GET['id'];
	}

	return 0;
}
