<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Inventory</title>
		@vite
	</head>
	<body class="background">
		@inertia
	</body>
</html>

<style>
	.background {
		background-image: url('/assets/Inventory.jpeg');
		background-size: 100%;
		background-repeat: no-repeat;
		/* width: 100%;
		height: 100%; */
	}
</style>
