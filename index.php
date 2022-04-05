<?php
	date_default_timezone_set("America/Fortaleza");

	$today = date("d");
	$month = intval(date("m"));
	$year = date("Y");

	$months = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
		"Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
	
	$month = $months[$month-1];
	
	$firstDay = date("w", strtotime(date("Y-m-1"))) + 1;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calendário</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
	<table>
    <thead>
      <tr>
				<th class="month">
					<?php echo $month . " de " . $year; ?>
				</th>
      </tr>
      <tr class="daysOfWeek">
        <th>Dom</th>
        <th>Seg</th>
        <th>Ter</th>
        <th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sáb</th>
      </tr>
    </thead>
		<tbody>
		<?php
			$lastDay = 1;
			for($week = 1; $week <= 5; $week++){
		?>
			<tr>
			<?php
				for($day = 1; $day <= 7; $day++){
					if($week == 1 && $day < $firstDay){
			?>
				<td></td>
			<?php
				}elseif($lastDay > 31){
			?>
				<td></td>
			<?php }elseif($lastDay == $today){ ?>
				<td class="today">
				<?php
					echo $lastDay;
					$lastDay++;
				?>
				</td>
			<?php }else{ ?>
				<td>
				<?php
					echo $lastDay;
					$lastDay++;
				?>
				</td>
			<?php
				}
			}
			?>
			</tr>
		<?php } ?>
    </tbody>
  </table>
  <script src="./script.js"></script>
</body>
</html>

