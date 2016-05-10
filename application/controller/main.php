<?php

class Main extends Controller {

	public function index()
	{
		require APP . 'view/_templates/header.php';
		require APP . 'view/main/home.php';
		require APP . 'view/_templates/footer.php';
	}

	public function leaderboard()
	{
		require APP . 'view/_templates/header.php';
		require APP . 'view/leaderboard/index.php';
		require APP . 'view/_templates/footer.php';	
	}
}