<?php
$host = getenv('IP');
$username = 'neisha_lab7';
$password = 'neisha1234';
$dbname = 'world';

$country = $_GET['country'];

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

$stmt = $conn->query("SELECT * FROM countries where name like '%$country%' ");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<table>
    <tr>independence_year
        <th>Name</th>
        <th>Continent</th>
        <th>Inpendence</th>
        <th>Head of State</th>
    </tr>
        <?php foreach ($results as $row): ?>
    <tr>
        <td>  <?= $row['name'];?> </td>
        <td> <?= $row['continent'];?> </td>
        <td> <?= $row['independence_year']; ?> </td>
        <td> <?= $row['head_of_state'];?> </td>
   </tr>
   
   
   <?php endforeach; ?>
</table>
