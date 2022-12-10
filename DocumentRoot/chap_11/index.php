	<?php
	require_once 'login.php';

	try {
		$pdo = new PDO($attr, $user, $pass, $opts);
		$query = "SELECT * FROM TEST";
		$result = $pdo->query($query)->fetchAll();
	} catch (PDOException $e) {
		throw new PDOException($e->getMessage(), (int)$e->getCode());
	}