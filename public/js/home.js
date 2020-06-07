angular.module('app').controller('home', function ($scope, $http) {

    $scope.salvar = function ($event) {

	$event.preventDefault();

	$http({
	    method: 'POST',
	    url: 'api/users',
	    data: $scope.form
	}).then(function successCallback(response) {
	    alert('Cadastrado com Sucesso!');
	}, function errorCallback(response) {

	    if (response.status == 422) {
		alert('Erro na validação dos dados!')
	    } else {
		alert('Não foi possível prosseguir. Por favor, tente novamente.');
	    }

	});
    };
    
    listar();

    function listar() {

	$http({
	    method: 'GET',
	    url: 'api/users'
	}).then(function successCallback(response) {
	    console.log(response.data);
	   $scope.cadastros = response.data;
	}, function errorCallback(response) {

	    if (response.status == 422) {
		alert('Erro na validação dos dados!')
	    } else {
		alert('Não foi possível prosseguir. Por favor, tente novamente.');
	    }

	});
    }
    ;
});