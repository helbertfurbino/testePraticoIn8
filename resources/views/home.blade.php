<!DOCTYPE html>
<html ng-app="app" lang="pt" xml:lang="pt">
    @include('master')
    <body>
	<div ng-controller="home">
            <div>
                <div>
		    <form ng-submit="salvar($event)" ng-init="form" class="form">
			@csrf
			<div class="form-group">
			    <label for="Nome">Nome</label>
			    {!! Form::text('nome' ,null, ['class'=>'form-control', 'placeholder'=>'Nome', 'id'=>'nome','ng-model'=>'form.nome', 'class'=>'form-control']) !!}   
			</div>
			<div class="form-group">
			    <label for="Email">Email</label>
			    {!! Form::email('email' ,null, ['class'=>'form-control', 'placeholder'=>'Email', 'id'=>'email', 'ng-model'=>'form.email', 'required'=>'required', 'class'=>'form-control']) !!}
			</div>
			<div class="form-group">
			    <label for="Nascimento">Nascimento</label>
			    {!! Form::text('nascimento' ,null, ['class'=>'form-control', 'placeholder'=>'Nascimento', 'id'=>'nascimento', 'ng-model'=>'form.nascimento', 'required'=>'required', 'class'=>'form-control data']) !!}
			</div>
			<div class="form-group">
			    <label for="Telefone">Telefone</label>
			    {!! Form::text('telefone' ,null, ['class'=>'form-control', 'placeholder'=>'Telefone', 'id'=>'telefone', 'ng-model'=>'form.telefone', 'class'=>'form-control tel']) !!}
			</div>
			{!! Form::hidden('id' ,null, ['ng-model'=>'form.id']) !!}
			{!! Form::submit('Salvar', ['class'=>'btn btn-success btn-block'])!!}
		    </form>
                </div>

		<table ng-init="cadastros" class="table">
		    <thead>
			<tr>
			    <th scope="col">Nome</th>
			    <th scope="col">Email</th>
			    <th scope="col">Nascimento</th>
			    <th scope="col">Telefone</th>
			    <th scope="col">Excluir</th>
			    <th scope="col">Editar</th>
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
				<button class="btn btn-outline-danger" ng-click=remover(item.id)>Excluir</button>
			    </td>
			    <td>
				<button class="btn btn-outline-primary" ng-click=editar(item)>Editar</button>
			    </td>
			</tr>
		    </tbody>
		</table>
            </div>
        </div>
    </body>
</html>