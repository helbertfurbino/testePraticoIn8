angular.module('app').controller('home', function ($scope, $http) {

    $scope.salvar = function ($event) {

	$event.preventDefault();

	$http({
	    method: 'POST',
	    url: 'api/users',
	    data: $scope.form
	}).then(function successCallback(response) {
	    if (response.data.status == 1) {
		$('.div-ajax-carregamento-pagina').css('display', 'none');
		return window.open('../../' + response.data.url, "Preview", 'height=768,width=1366,left=10,top=10,titlebar=no,toolbar=no,menubar=no,location=no,directories=no,status=no');
		$scope.ajax = 0;
	    } else {

		$.gritter.add({
		    title: 'Atenção',
		    text: response.data.erro,
		    time: 10000,
		    class_name: 'erro'});
		$scope.ajax = 0;
	    }
	    $('.div-ajax-carregamento-pagina').css('display', 'none');
	}, function errorCallback(response) {
	    $scope.ajax = 0;
	    if (response.status == 422) {
		$("label").css("color", "#76838f");
		var erros = '';
		for (var i in response.data.errors) {
		    for (var j in response.data.errors[i]) {
			erros += response.data.errors[i][j] + '<br>';
			var textU = $(response.data.errors[i][j]).wrap("<u></u>")[0];
			if (textU) {
			    var textFor = $(response.data.errors[i][j]).wrap("<u></u>")[0].innerHTML.trim();
			    var label = $('label[for="' + textFor + '"]');
			    $(label).css("color", "#FF0000");
			}
		    }
		}
		if (erros) {
		    $.gritter.add({title: 'Atenção',
			text: erros,
			time: 10000,
			class_name: 'erro'
		    });
		} else {
		    alert('Não foi possível salvar. Por favor, tente novamente.');
		}
	    } else {
		alert('Não foi possível prosseguir. Por favor, tente novamente.');
	    }
	    $('.div-ajax-carregamento-pagina').css('display', 'none');
	});
    };
});