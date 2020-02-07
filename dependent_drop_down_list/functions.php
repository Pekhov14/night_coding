<?php
	require_once 'DbConnect.php';

	if (isset($_POST['authorId'])) {
		$db   = new DbConnect;
		$conn = $db->connect();
		$sql  = "SELECT * FROM books WHERE author_id = " . $_POST['authorId'];
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
		echo json_encode($books);
	}

	function load_authors() {
		$db   = new DbConnect;
		$conn = $db->connect();
		$sql  = 'SELECT * FROM authors';
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		return $authors = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
