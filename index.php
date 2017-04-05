<?php
	
	include_once("fonctions.php");


	$action = isset($_GET['action']) ? $_GET['action'] : '';
	$dataJson = readJson("data.json");

	if ($action == 'form' && isset($_POST['from'])) {
		$dataForm = getFormData();
		$dataJson[] = $dataForm;
		saveAsJson($dataJson);
		header("Location:index.php");
	}

?>



<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Serializer</title>
</head>
<body>
	<?php
		switch ($action) {
			case 'form':
				include_once("formulaire.html");
				break;
			
			case '':
				default:
				include_once("table.html");

			foreach ($dataJson as $row) {
				echo "<tr><td>" . $row->question . "</td><td></td></tr>";
			}
			break;
		}
	?>
</body>
</html>
