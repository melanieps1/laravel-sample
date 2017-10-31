<!DOCTYPE html>
<html>
<head>
	<title>Tic-Tac-Toe</title>
	
	<!-- Bootstrap CSS, Bootstrap JS and JQUERY links -->
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="/js-tictactoe/style.css">
</head>
<body>

	<div class="tictactoe container">

		<div style="margin-top: 24px;"><a href="/">Go Back</a></div>

		<h1>Tic-Tac-Toe</h1>

		<div class="row bg-info img-rounded" id="notification">
			<p class="text-center" id="winnerMessage"></p>
		</div>

		<div id="gameBoard">
			<div class="row">
				<div class="col-xs-4 space line-right line-bottom"></div>
				<div class="col-xs-4 space line-right line-bottom"></div>
				<div class="col-xs-4 space line-bottom"></div>
			</div>
			<div class="row">
				<div class="col-xs-4 space line-right line-bottom"></div>
				<div class="col-xs-4 space line-right line-bottom"></div>
				<div class="col-xs-4 space line-bottom"></div>
			</div>
			<div class="row">
				<div class="col-xs-4 space line-right"></div>
				<div class="col-xs-4 space line-right"></div>
				<div class="col-xs-4 space"></div>
			</div>
		</div>

		<div class="row text-center">
			<button class="btn btn-primary" id="restartButton">New Game</button>
		</div>

	</div>

	<script src="/js-tictactoe/main.js"></script>
	<script src="/js-tictactoe/wins.js"></script>

</body>
</html>