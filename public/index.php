<?php
echo 'jenkins is working finally !!!!!!!!';
echo 'hello world';
echo 'hello world';
echo 'hellohello';
echo '<br><br>';

$username = "root";
$password = "12345678";

// Create connection
$conn = new PDO('mysql:host=172.31.16.104;dbname=sample_app;charset=utf8', $username, $password);

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$sql = 'SELECT * FROM click_counts WHERE url = ' . $conn->quote($url);
$data = $conn->query($sql);

if($data->fetchColumn()) {
  $data = $conn->query($sql);
  $row = $data->fetch();
  echo 'clicks: ' . ($row['clicks']+1);
  $conn->query('UPDATE click_counts SET clicks = clicks+1 where url = ' . $conn->quote($url));
} else {
  $conn->query('INSERT INTO click_counts (url, clicks) VALUES(' . $conn->quote($url) . ',1)');
  echo 'clicks: 1';
}

?>
