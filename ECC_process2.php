<html>
<link rel="stylesheet" type="text/css" href="style_ecc_process.css">
<body>
<body>
    <h1>Calculation Results</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $voltage = $_POST["voltage"];
        $current = $_POST["current"];
        $currentRate = $_POST["currentrate"];
        $power = $voltage * $current;
        $energy = $power*24*1000;  

        $kwhPerHour =EnergyPerHour($voltage, $current);
        $rates = ElectricityRatesPerHour($currentRate, $kwhPerHour);
        $kwhPerDay = EnergyPerDay($voltage, $current);
        $ratesPerDay = ElectricityRatesPerDay($voltage, $current, $currentRate);

    ?>
    <html>
      <div class="container-a">
            <?php
              echo "Power : " .($power/1000). "(kw)";
              echo "<br>";
              echo "Rates : " .($currentRate/100). "(RM)";
               ?>
       </div>
    </html> 
    <?php
    if (isset($rates)) {
              echo "<h2 class='mt-5'>Rates Per Hour:</h2>";
              echo '<table class="table">';
              echo '<thead>';
              echo '<tr>';
              echo '<th style="width:5%">No.</th>';
              echo '<th>Hour</th>';
              echo '<th>Energy (kWh)</th>';
              echo '<th>Rate (RM)</th>';
              echo '</tr>';
              echo '</thead>';
              echo '<tbody>';
            foreach ($rates as $bil => $rate) {
              echo '<tr>';
              echo '<td>' . $bil . '</td>';
              echo '<td>' . $bil . '</td>';
              echo '<td>' . $kwhPerHour[$bil] . '</td>';
              echo '<td>RM' . number_format($rate, 2) . '</td>';
              echo '</tr>';
            }
              echo '</tbody>';
              echo '</table>';
    }
    if (isset($ratesPerDay)) {
              echo "<h2 class='mt-5'>Rates Per Day:</h2>";
              echo '<table class="table">';
              echo '<thead>';
              echo '<tr>';
              echo '<th style="width:5%">No.</th>';
              echo '<th>Day</th>';
              echo '<th>Energy (kWd)</th>';
              echo '<th>Rate (RM)</th>';
              echo '</tr>';
              echo '</thead>';
              echo '<tbody>';
            foreach ($ratesPerDay as $bil => $rate) {
              echo '<tr>';
              echo '<td>' . $bil . '</td>';
              echo '<td>' . $bil . '</td>';
              echo '<td>' . $kwhPerDay[$bil] . '</td>';
              echo '<td>RM' . number_format($rate, 2) . '</td>';
              echo '</tr>';
            }
              echo '</tbody>';
              echo '</table>';
      }
    }
    ?>
</body>
</html>
<?php
    function EnergyPerHour($voltage, $current)
    {
      $power = $voltage * $current;
      $energy = $power / 1000;
      $kwPerHour = array();
      for ($hour = 1; $hour <= 24; $hour++) {
        $kwPerHour[$hour] = $energy * $hour;
      }
      return $kwPerHour;
    }

    function ElectricityRatesPerHour($currentRate, $kwhPerHour)
    {
      $rates = array();
      for ($hour = 1; $hour <= 24; $hour++) {
        $rate = $kwhPerHour[$hour] * ($currentRate / 100);
        $rates[$hour] = $rate;
      }
      return $rates;
    }
    function EnergyPerDay($voltage, $current)
    {
      $power = $voltage * $current;
      $energyPerHour = $power / 1000;
      $energyPerDay = array();
      for ($day = 1; $day <= 31; $day++) {
        $energyPerDay[$day] = $energyPerHour * 24 * $day;
      }
      return $energyPerDay;
    }
    function ElectricityRatesPerDay($voltage, $current, $currentRate)
    {
      $energyPerDay = EnergyPerHour($voltage, $current);
      
      $totalPerDay = array();
      for ($day = 1; $day <= 31; $day++) {
        $totalPerDay[$day] = $energyPerDay[24] * ($currentRate / 100) * $day;
      }
      
      return $totalPerDay;
    }
?>