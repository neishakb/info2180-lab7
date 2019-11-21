<?php
$host = getenv('IP');
$username = 'neisha_lab7';
$password = 'neisha1234';
$dbname = 'world';

$country = $_GET['country'];

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

$stmt = $conn->query("SELECT * FROM countries where name like '%$country%' ");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt2 = $conn->query("SELECT * FROM countries join cities on cities.country_code = countries.code where countries.name like '%$country%' ");

$results2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);



?>


<table>
    <?php if ($_GET["context"] === "cities"): ?>

<tr>independence_year
        <th>Name</th>
        <th>district</th>
        <th>population</th>
        <th>city</th>
    </tr>
        <?php foreach ($results2 as $row2): ?>
    <tr>
        <td>  <?= $row2['name'];?> </td>
        <td> <?= $row2['district'];?> </td>
        <td> <?= $row2['population']; ?> </td>
        
   </tr>
   <?php endforeach; ?>

<?php else: ?>

<tr>
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

<?php endif ?>
    
</table>
