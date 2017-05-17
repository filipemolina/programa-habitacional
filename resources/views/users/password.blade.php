@extends("layouts.blank")

@section('titulo')

	Alteração de Senha

@endsection

@section("main_container")

<div class="col-md-12 col-sm-12 col-xs-12">

	<div class="x_title">
		<h2> Alteração de Senha</h2>
		<div class="clearfix"></div>
	</div>
	
	<div class="x_panel">
		
		<div class="x_title"> Dados </div>
		
		<div class="x_content">

			<form action="" class="form-horizontal" id="form-cadastro-usuario">


				{{-- Campo Senha Atual--}}

				<div class="form-group">

					<label for="senha" class="col-sm-4 control-label">Senha Atual</label>

					<div class="col-sm-4">
						<input name="senhaatual" type="password" class="form-control" id="senha" placeholder="Senha Atual">
					</div>
				</div>

				{{-- Campo Nova Senha --}}

				<div class="form-group">

					<label for="novasenha" class="col-sm-4 control-label">Nova Senha</label>

					<div class="col-sm-4">
						<input name="novasenha" type="password" class="form-control" id="senha" placeholder="Nova Senha">

					</div>
				</div>

				{{-- Campo Confirmar Senha--}}

				<div class="form-group">

					<label for="confirmarsenha" class="col-sm-4 control-label">Confirmar Senha</label>

					<div class="col-sm-4">
						<input name="senhaconfirmar" type="password" class="form-control" id="senha" placeholder="Confirmar Senha">
					</div>
				</div>

				<div class="form-group" style="text-align: center;">
                    <button type="submit" value="submit" class="btn btn-primary">Enviar</button>
           		 </div>

				
			</form>



		</div>
	</div>
</div>


@endsection