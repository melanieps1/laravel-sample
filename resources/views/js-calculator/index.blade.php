<!DOCTYPE html>
<html>
<head>
	<title>JS Calculator</title>
	<link rel="stylesheet" type="text/css" href="/js-calculator/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet">

	<!-- Bootstrap CSS, Bootstrap JS and JQUERY links -->
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body class="container">

<div class="header">
	<h2>JavaScript Calculator</h2>
</div>

	<div class="calculator">

		<div class="row">
			<div class="col-xs-12">
				<div id="display" class="calc-display"></div>
			</div>
		</div>
		<div class="row">
				<div class="col-xs-3">
					<button class="calc-btn key allclear">AC</button>
				</div>
				<div class="col-xs-3">
					<button class="calc-btn key clear">C</button>
				</div>
				<div class="col-xs-3">
					<button class="calc-btn key sign">+/-</button>
				</div>
				<div class="col-xs-3">
					<button class="calc-btn-op key operator">/</button>
				</div>
		</div>
		<div class="row">
				<div class="col-xs-3">
					<button class="calc-btn key numeric">7</button>
				</div>
				<div class="col-xs-3">
					<button class="calc-btn key numeric">8</button>
				</div>
				<div class="col-xs-3">
					<button class="calc-btn key numeric">9</button>
				</div>
				<div class="col-xs-3">
					<button class="calc-btn-op key operator">*</button>
				</div>
		</div>
		<div class="row">
				<div class="col-xs-3">
					<button class="calc-btn key numeric">4</button>
				</div>
				<div class="col-xs-3">
					<button class="calc-btn key numeric">5</button>
				</div>
				<div class="col-xs-3">
					<button class="calc-btn key numeric">6</button>
				</div>
				<div class="col-xs-3">
					<button class="calc-btn-op key operator">-</button>
				</div>
		</div>
		<div class="row">
				<div class="col-xs-3">
					<button class="calc-btn key numeric">1</button>
				</div>
				<div class="col-xs-3">
					<button class="calc-btn key numeric">2</button>
				</div>
				<div class="col-xs-3">
					<button class="calc-btn key numeric">3</button>
				</div>
				<div class="col-xs-3">
					<button class="calc-btn-op key operator">+</button>
				</div>
		</div>
		<div class="row">
				<div class="col-xs-3">
					<button class="calc-btn key numeric">0</button>
				</div>
				<div class="col-xs-3">
					<button class="calc-btn key decimal">.</button>
				</div>
				<div class="col-xs-6">
					<button class="calc-btn-2x key calculate">=</button>
				</div>
		</div>
	</div>

	<script type="text/javascript" src="/js-calculator/main.js"></script>
</body>
</html>