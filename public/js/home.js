(function () {
    app = angular.module('app', []);
})();


angular.module('app').controller('home', function ($scope, $http) {

    $scope.salvar = function ($event) {

	$event.preventDefault();
	method = !$scope.form.id ? 'POST' : 'PUT';
	url = !$scope.form.id ? 'api/users' : 'api/users/' + $scope.form.id;


	$http({
	    method: method,
	    url: url,
	    data: $scope.form
	}).then(function successCallback(response) {

	    if (response.data.status == 1)
		alert('Opreação realizada com Sucesso!');

	    else
		alert('Erro ao realizar operação!');

	    delete $scope.form;
	    listar();

	}, function errorCallback(response) {

	    if (response.status == 422) {
		var erros = '';
		for (var i in response.data.errors) {
		    for (var j in response.data.errors[i]) {
			erros += response.data.errors[i][j]+'\n';
		    }
		}
		alert(erros);
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
	    $scope.cadastros = response.data;
	}, function errorCallback(response) {

	    if (response.status == 422) {
		alert('Erro na validação dos dados!')
	    } else {
		alert('Não foi possível prosseguir. Por favor, tente novamente.');
	    }

	});
    }

    $scope.remover = function (index) {
	
	 delete $scope.form;

	if (!confirm('Confirma a exclusão?'))
	    return false;

	$http({
	    method: 'DELETE',
	    url: 'api/users/' + index,
	    data: index
	}).then(function successCallback(response) {
	    if (response.data.status == 1)
		listar();
	    else
		alert('Erro ao realizar operação!');
	    ;
	}, function errorCallback(response) {

	    if (response.status == 422) {
		alert('Erro na validação dos dados!');
	    } else {
		alert('Não foi possível prosseguir. Por favor, tente novamente.');
	    }

	});
    };

    $scope.editar = function (data) {
	$scope.form = data;
    };

});