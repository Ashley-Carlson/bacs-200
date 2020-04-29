<?php
  echo '<body>';
  include('../layout/header.php');

  $filter = [];
  if (isset($_GET["class"]))
  {
    $class = $_GET["class"];
    $filter = [$class => ['$ne' => "NULL"]];
    if ($class === "sor") { $class = "sorcerer"; }
    else if ($class === "wiz") { $class = "wizard"; }
  }
  $spells = NULL;
  $emsg = NULL;
  try {
    $m = new MongoDB\Driver\Manager("mongodb://eva:Kittensrock333@localhost:27017");
    $options = [];
    $query = new MongoDB\Driver\Query($filter, $options);
    $spells = $m->executeQuery('pathfinderDB.spells', $query);
  } catch (Exception $e) {
    $emsg = "Exception in query: " . $e->getMessage() . "\n";
  }

?>

<br /><br /><br /><br /><br />

<h1 class="mt-4 mb-3"><?php echo ucfirst($class); ?> Spells</h1>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="https://fennecology.com/bacs200/projects">Home</a>
  </li>
  <li class="breadcrumb-item active"><?php echo ucfirst($class); ?> Spells</li>
</ol>

<table>
  <th>Filter by:</th>
  <th><a href="spells.php?class=bard">&nbsp;&nbsp;Bard</a></th>
  <th><a href="spells.php?class=sor">&nbsp;&nbsp;Sorcerer</a></th>
  <th><a href="spells.php?class=wiz">&nbsp;&nbsp;Wizard</a></th>
  <th><a href="spells.php?class=cleric">&nbsp;&nbsp;Cleric</a></th>
  <th><a href="spells.php?class=ranger">&nbsp;&nbsp;Ranger</a></th>
  <th><a href="spells.php?class=paladin">&nbsp;&nbsp;Paladin</a></th>
  <th><a href="spells.php?class=summoner">&nbsp;&nbsp;Summoner</a></th>
  <th><a href="spells.php?class=alchemist">&nbsp;&nbsp;Alchemist</a></th>
  <th><a href="spells.php?class=witch">&nbsp;&nbsp;Witch</a></th>
  <th><a href="spells.php?class=inquisitor">&nbsp;&nbsp;Inquisitor</a></th>
  <th><a href="spells.php?class=oracle">&nbsp;&nbsp;Oracle</a></th>
  <th><a href="spells.php?class=druid">&nbsp;&nbsp;Druid</a></th>
  <th><a href="spells.php?class=antipaladin">&nbsp;&nbsp;Antipaladin</a></th>
  <th><a href="spells.php?class=magus">&nbsp;&nbsp;Magus</a></th>
</table>

<?php
  if (isset($emsg)) {
    echo '<p style="color: red;">' . $emsg . '</p>';
  }
  else {
    echo '<table style="border: 1px solid black">';
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
  }
?>

<?php
// add footer
include("../layout/footer.php");
?>
