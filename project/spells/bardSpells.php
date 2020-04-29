<?php
  //include header template
  echo '<body>';
  include('../layout/header.php');
?>
<br><br><br><br><br>
<h1 class="mt-4 mb-3">Bard Spells</h1>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="fennecology.com/bacs200/projects">Home</a>
  </li>
  <li class="breadcrumb-item active">Bard Spells</li>
</ol>
<?php
    $m = new MongoClient("mongodb://eva:Kittensrock333@fennecology.com");
    $db = $m->selectDB('pathfinderDB');
    $collection = $connection->pathfinderDB->spells
    $filter = ["bard" => ["$gte" => 1]];
    $results = $collection.find($filter);

    $cursor = $results->find();
    //echo "<html><head><body>";
    echo "<table>";
    foreach($cursor as $doc) {
         echo "<tr>";
            echo "<td>" . $doc['name'] . "</td>";
            echo "<td>" . $doc['school'] . "</td>";
            echo "<td>" . $doc['spell_level'] . "</td>";
            echo "<td>" . $doc['casting_time'] . "</td>";
            echo "<td>" . $doc['components'] . "</td>";
            echo "<td>" . $doc['saving_throw'] . "</td>";
            echo "<td>" . $doc['range'] . "</td>";
            echo "<td>" . $doc['area'] . "</td>";
            echo "<td>" . $doc['spell_resistence'] . "</td>";
            echo "<td>" . $doc['duration'] . "</td>";
            echo "<td>" . $doc['target'] . "</td>";
            echo "<td>" . $doc['effect'] . "</td>";
         echo "</tr>";
    }
    echo "<table>";
?>
<?php
// add footer
include("../layout/footer.php");
?>
