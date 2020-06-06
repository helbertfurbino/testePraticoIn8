<html ng-app="app" lang="pt" xml:lang="pt">
    <head>
	<title>IN8</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="robots" content="none" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<script src="{{asset('js/angular.min.js')}}"></script>	
	<script src="{{asset('js/home.js')}}"></script>	
	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
	<script>
	    (function () {
		app = angular.module('app', []);
	    })();
	</script>
    </head>
</html>