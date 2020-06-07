<!DOCTYPE html>
<html ng-app="app" lang="pt" xml:lang="pt">
    <header>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="robots" content="none" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<script src="http://localhost/testePraticoIn8/public/js/angular.min.js"></script>	
	<link rel="stylesheet" href="http://localhost/testePraticoIn8/public/css/app.css">
	<script>
		    (function () {
		    app = angular.module('app', []);
		    })();</script>
	<script src="http://localhost/testePraticoIn8/public/js/home.js"></script>
    </header>

    <body>
	<div ng-controller="home">
            <div class="content">
                <div class="title m-b-md">
		    <form ng-submit="salvar($event)" ng-init="form">
			{!! Form::text('nome' ,null, ['class'=>'form-control', 'placeholder'=>'Nome', 'id'=>'nome','ng-model'=>'form.nome']) !!}     
			{!! Form::email('email' ,null, ['class'=>'form-control', 'placeholder'=>'email', 'id'=>'email', 'ng-model'=>'form.email']) !!}
			{!! Form::text('nascimento' ,null, ['class'=>'form-control', 'placeholder'=>'Nascimento', 'id'=>'nascimento', 'ng-model'=>'form.nascimento']) !!}
			{!! Form::text('telefone' ,null, ['class'=>'form-control', 'placeholder'=>'telefone', 'id'=>'telefone', 'ng-model'=>'form.telefone']) !!}
			<input type="hidden" name="_token" value="{{ csrf_token()}}">
			{!! Form::submit('Cadastrar')!!}
		    </form>
                </div>

		<table class="table table-condensed table-striped table-hover odd" id="table-search" ng-init="cadastros">
		    <thead>
			<tr>
			    <th>Nome</th>
			    <th>Email</th>
			    <th>Nacimento</th>
			    <th>Telefone</th>
			</tr>
		    </thead>
		    <tbody>
			<tr ng-repeat="item in cadastros">
			    <td class="readmore">
				<input type="text" ng-model="item.nome">
			    </td>
			    <td class="readmore">
				<input type="text" ng-model="item.email">
			    </td>
			    <td class="readmore">
				<input type="text" ng-model="item.nascimento">
			    </td>
			    <td class="readmore">
				<input type="text" ng-model="item.telefone">
			    </td>
			</tr>
		    </tbody>
		</table>
            </div>
        </div>
    </body>
</html>