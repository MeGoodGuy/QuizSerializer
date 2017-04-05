<?php


	function saveAsJson($data) {
		file_put_contents("data.json", json_encode($data));
	}

	function readJson($filename) {
		$content = "{}";
		if (file_exists($filename)) {
			$content = file_get_contents($filename);
		}

		return json_decode($content);
	}

	function getFormData() {
		$tmpArr = ["question" => $_POST["question"] ];
		return $tmpArr;
	}

    ?>