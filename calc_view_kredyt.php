<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>
Kalkulator kredytowy
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #c6e2e9; width:300px;">
<form action="<?php print(_APP_URL);?>/app/calc_kredyt.php" method="get">
	<label for="id_kwota">	Kwota: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php if (isset ($kwota))print($kwota); ?>" />
	<br />
	<label for="id_lata">Liczba lat: </label>
	<input id="id_lata" type="text" name="lata" value="<?php if (isset ($lata))print($lata); ?>" />
	<br />
	<label for="id_oprocentowanie">Oprocentowanie: </label>
	<input id="id_oprocentowanie" type="text" name="oprocentowanie" value="<?php if (isset ($oprocentowanie))print($oprocentowanie); ?>" />
	<br />
	<br />
	<input type="submit" value="Oblicz" />
</form>	
</div>
<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #f1ffc4; width:300px;">
<?php echo 'Miesięczna rata: '.round($result,2); ?> złotych
</div>
<?php } ?>

</body>
</html>