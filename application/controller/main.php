<?php

class Main extends Controller {

	public function index()
	{
		require APP . 'view/_templates/header_main.php';
		require APP . 'view/main/index.php';
		require APP . 'view/_templates/footer_main.php';
	}

	public function disclaimer()
	{
		require APP . 'view/_templates/header_main.php';
		require APP . 'view/main/disclaimer.php';
		require APP . 'view/_templates/footer_main.php';	
	}

	public function info()
	{
		require APP . 'view/_templates/header_main.php';
		require APP . 'view/main/info.php';
		require APP . 'view/_templates/footer_main.php'; 
	}

	public function leaderboard()
	{
		require APP . 'view/_templates/header_main.php';
		require APP . 'view/leaderboard/index.php';
		require APP . 'view/_templates/footer_main.php';
	}
}