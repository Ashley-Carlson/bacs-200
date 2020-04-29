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
    try {
        $m = new MongoDB\Driver\Manager("mongodb://eva:Kittensrock333@localhost:27017");
        $filter = ['bard' => ['$ne' => "NULL"]];
        $options = [];

        $query = new MongoDB\Driver\Query($filter, $options);

        $spells = $m->executeQuery('pathfinderDB.spells', $query);

        echo "<table>";
        foreach ($spells as $spell) {
            $spell = json_decode(json_encode($spell), true);
            echo "<tr>";
                echo "<td>" . $spell['name'] . "</td>";
                echo "<td>" . $spell['school'] . "</td>";
                echo "<td>" . $spell['spell_level'] . "</td>";
                echo "<td>" . $spell['casting_time'] . "</td>";
                echo "<td>" . $spell['components'] . "</td>";
                echo "<td>" . $spell['saving_throw'] . "</td>";
                echo "<td>" . $spell['range'] . "</td>";
                echo "<td>" . $spell['area'] . "</td>";
                echo "<td>" . $spell['spell_resistence'] . "</td>";
                echo "<td>" . $spell['duration'] . "</td>";
                echo "<td>" . $spell['target'] . "</td>";
                echo "<td>" . $spell['effect'] . "</td>";
            echo "</tr>";
        }
        echo "<table>";
    } catch (Exception $e) {
        echo "Exception occurred: ", $e->getMessage(), "\n";
    }
?>
<?php
// add footer
include("../layout/footer.php");
?>
