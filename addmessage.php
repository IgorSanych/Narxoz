<?php
try{
	$conn = new PDO( dsn: "mysql:host=localhost;dbname=p-14109_practice", username: 'p-14109_Black', passwd: '28X1ub*h');

	if (empty($_POST['name'])) exit("Поле не заполнено");
	if (empty($_POST['content'])) exit("Поле не заполнено");

	$query = "INSERT INTO message VALUES (NULL, :name, NOW())";
	$msg = $conn->prepare($query);
	$msg->execute(['name' => $_POST['name']]);

	$msg_id = $conn->lastInsertId();

	$query = "INSERT INTO message_content VALUES (NULL, :content, :message_id)";
	$msg = $conn->prepare($query);
	$msg->execute(['content' => $_POST['content'], 'message_id' => $msg_id]);

	header(string: "Location: index.html");

}
catch (PDOException $e)
{
	 echo "error" .$e->getMessage();
}

?>