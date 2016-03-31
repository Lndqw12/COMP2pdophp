<meta charset ="utf-8">
<?php
$host='localhost';
$dbname='nazvanie';
$user='redactor';
$password='12345';
try {
$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
echo $e->getMessage();
}
$name = 'Ксения';
//$stmt = $pdo->prepare('SELECT name FROM nazvanie1 WHERE name = ?');
//$stmt = $pdo->prepare('SELECT name FROM nazvanie1');
$stmt->execute(array('name' => $name));
foreach ($stmt as $row)
{
    echo $row['name'] . "\n";
}
?>