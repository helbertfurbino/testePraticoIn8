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
			{!! Form::hidden('id' ,null, ['ng-model'=>'form.id']) !!}
			<input type="hidden" name="_token" id="_token" value="{{ csrf_token()}}">
			{!! Form::submit('Salvar')!!}
		    </form>
                </div>

		<table border="1" ng-init="cadastros">
		    <thead>
			<tr>
			    <th>Nome</th>
			    <th>Email</th>
			    <th>Nascimento</th>
			    <th>Telefone</th>
			    <th>Excluir</th>
			    <th>Editar</th>
			</tr>
		    </thead>
		    <tbody>
			<tr ng-repeat="item in cadastros">
			    <td>
				@{{item.nome}}
			    </td>
			    <td>
				@{{item.email}}
			    </td>
			    <td>
				@{{item.nascimento}}
			    </td>
			    <td>
				@{{item.telefone}}
			    </td>
			    <td>		
				<button ng-click=remover(item.id)>Excluir</button>
			    </td>
			    <td>
				<button ng-click=editar(item)>Editar</button>
			    </td>
			</tr>
		    </tbody>
		</table>
            </div>
        </div>
    </body>
</html>