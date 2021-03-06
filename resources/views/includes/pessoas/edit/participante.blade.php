   {{---------------------------------- Participante --------------------------------------------}}

      <div class="x_panel modal-content" id="participante">

         <div class="x_title">

            <h2> Participante </h2>

            <ul class="nav navbar-right panel_toolbox">

               <li class='dropdown'>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Adicionar coparticipante ou dependente"><i class="fa fa-user btn btn-pn-circulo btn-cor-padrao"></i></a>
                  <ul class="dropdown-menu" role="menu">
                           <li><a href="#" class="addcoparticipante btn btn-cor-padrao modal-content" style='text-align: left;'><i class='fa fa-user-plus'></i> Co-participante</a>
                           </li>
                           <li><a href="#" class="adddependentes btn btn-cor-padrao modal-content" style='text-align: left;'><i class='fa fa-user-plus'></i> Dependentes</a>
                           </li>
                  </ul>
               </li>

               <li>
                  <a class="collapse-link" data-toggle="tooltip" title="Reduzir / Expandir"><i class="fa fa-chevron-up btn btn-pn-circulo btn-cor-padrao"></i></a>
               </li>

            </ul>

            <div class="clearfix"></div>

         </div>

         <div class="x_content">

            {{-- CPF --}}
            <label class="col-md-1 control-label" for="cpf">CPF</label>
            <div class="col-md-2">
            <input value="{{ $pessoa->cpf }}" id="cpf" name="cpf" type="text" placeholder="999.999.999-99" data-inputmask="'mask': '999.999.999-99', 'numericInput': true" class="form-control input-md cpf"><span class="obrigatorio">*</span>
            </div>

            {{-- Nome --}}
            <div class="form-group">
            <label class="col-md-1 control-label" for="nome">Nome</label>
            <div class="col-md-5">
               <input value="{{ $pessoa->nome }}" id="nome" name="nome" type="text" placeholder="Informe o nome" class="form-control input-md nome">
            </div>



            <div class="exibir">
               <label class="col-md-2 control-label" for="mulher_responsavel">Responsável familiar</label>
               <div class="col-md-1">
                  <input type="checkbox" @if($pessoa->mulher_responsavel) checked @endif id="mulher_responsavel" name="mulher_responsavel" style="margin-top: 12px" data-switchery="true"><span style="margin-top: -4px;margin-left: -56px" class="obrigatorio">*</span>
               </div>
            </div>
            </div>

            {{-- CPF, Nascimento, Sexo e Bolsa Família --}}
            <div class="form-group">

            {{-- Sexo   --}}
            <label class="col-md-1 control-label" for="sexo">Sexo</label>
            <div class="col-md-2">
            <select id="sexo" name="sexo" type="text" class="form-control input-md" >
               <option value="" disabled selected>Selecione...</option>
               <option value="Masculino" @if($pessoa->sexo == "Masculino") selected="selected" @endif>Masculino</option>
               <option value="Feminino" @if($pessoa->sexo == "Feminino") selected="selected" @endif>Feminino</option>
               <option value="Outros" @if($pessoa->sexo == "Outros") selected="selected" @endif>Outros</option>
            </select><span class="obrigatorio">*</span>
            </div>

            {{-- Data de Nascimento --}}
            <label class="col-md-1 control-label" for="nascimento" data-toggle="tooltip" title="Data de nascimento">Nasc.</label>
            <div class="col-md-2">
               <input value="{{ $pessoa->nascimento }}" id="nascimento" name="nascimento" type="date" class="form-control input-md global_data"><span class="obrigatorio">*</span>
            </div>

            {{-- Bolsa Família --}}
            <label class="col-md-1 control-label" for="bolsa_familia" data-toggle="tooltip" title="Bolsa Família">Bolsa F.</label>
            <div class="col-md-2">
               <select id="bolsa_familia" name="bolsa_familia" type="text" class="form-control input-md" >
                  <option value="" disabled selected>Selecione...</option>
                  <option value="1" @if($pessoa->bolsa_familia == "1") selected="selected" @endif >Possui</option>
                  <option value="0" @if($pessoa->bolsa_familia == "0") selected="selected" @endif >Não possui</option>
               </select><span class="obrigatorio">*</span>
            </div>

            {{-- Renda Familiar --}}
            <div class="col-md-2">
            <input value="{{ number_format($pessoa->vr_bolsa, 2, ",", ".") }}" id="bolsa_renda" name="vr_bolsa" type="text" placeholder="R$ 99.999,99" data-inputmask="'mask': 'R$ 99.999,99', 'numericInput': true" class="form-control input-md cash">
            </div>


            </div> {{-- FIM CPF, NIS/PIS e Bolsa Família --}}


            {{-- RG, Orgão Emissor do RG e Data de Emissão do RG--}}
            <div class="form-group">

            <!-- RG-->
            <label class="col-md-1 control-label" for="rg">RG</label>
            <div class="col-md-2">
               <input value="{{ $pessoa->rg }}" id="rg" name="rg" placeholder="99.999.999-9" class="form-control input-md rg" >
            </div>

            <!-- Data de Emissão do RG-->
            <label class="col-md-1 control-label" for="emissao_rg">Emissão</label>
            <div class="col-md-2">
               <input value="{{ $pessoa->emissao_rg }}" id="emissao_rg" name="emissao_rg" type="date" class="form-control input-md global_data" >
            </div>

            <!-- Orgão Emissor do RG-->
            <label class="col-md-1 control-label" for="orgao_emissor_rg">Orgão</label>
            <div class="col-md-2">
               <input value="{{ $pessoa->orgao_emissor_rg }}" id="orgao_emissor_rg" name="orgao_emissor_rg" type="text" placeholder="Orgão Emissor" class="form-control input-md" >
            </div>

            </div> {{-- FIM RG, Orgão Emissor do RG e Data de Emissão do RG --}}


            {{-- NIS, Carteira e Deficiente --}}
            <div class="form-group">

            {{-- NIS/PIS --}}
            <label class="col-md-1 control-label" for="nis">NIS/PIS</label>
            <div class="col-md-2">
               <input value="{{ $pessoa->nis }}" id="nis" name="nis" type="text" placeholder="999.999999.99-99" data-inputmask="'mask': '999.99999.99-9', 'numericInput': true" class="form-control input-md nis" >
            </div>

            {{-- Carteira de Trabalho --}}
            <label class="col-md-1 control-label" for="ctps">CTPS</label>
            <div class="col-md-2">
               <input value="{{ $pessoa->ctps }}" id="ctps" name="ctps" type="text" placeholder="9999999 999-9" data-inputmask="'mask': '9999999 999-9', 'numericInput': true" class="form-control input-md carteira" >
            </div>

            {{-- Deficiente --}}
            <label class="col-md-1 control-label" for="necessidades_especiais" data-toggle="tooltip" title="Portador de necessidade especial">Deficiente</label>
            <div class="col-md-2">
               <select id="necessidades_especiais" name="necessidades_especiais" type="text" class="form-control input-md" >
                  <option value=" " disabled selected @if(!$pessoa->necessidades_especiais) selected @endif>Selecione...</option>
                  <option value="1" @if($pessoa->necessidades_especiais == "1") selected="selected" @endif>Sim</option>
                  <option value="0" @if($pessoa->necessidades_especiais == "0") selected="selected" @endif>Não</option>
               </select><span class="obrigatorio">*</span>
            </div>

            <div class="col-md-2">
               <select id="tipo_necessidade" name="tipo_deficiencia" type="text" class="form-control input-md" disabled>
                  <option value="" disabled selected
                     @if(!is_null($pessoa->tipo_deficiencia))
                        selected
                     @endif>Tipos...
                  </option>

                  <option value="Microcefalia"
                     @if($pessoa->tipo_deficiencia == "Microcefalia")
                        selected="selected"
                     @endif>Microcefalia
                  </option>

                  <option value="Deficiência Física"
                     @if($pessoa->tipo_deficiencia == "Deficiência Física")
                        selected="selected"
                     @endif>Física
                  </option>

                  <option value="Deficiência Auditiva"
                     @if($pessoa->tipo_deficiencia == "Deficiência Auditiva")
                        selected="selected"
                     @endif>Auditiva
                  </option>

                  <option value="Deficiência Visual"
                     @if($pessoa->tipo_deficiencia == "Deficiência Visual")
                        selected="selected"
                     @endif>Visual
                  </option>

                  <option value="Deficiência Mental"
                     @if($pessoa->tipo_deficiencia == "Deficiência Mental")
                        selected="selected"
                     @endif>Deficiência Mental
                  </option>

                  <option value="Deficiência Mùltipla"
                     @if($pessoa->tipo_deficiencia == "Deficiência Mùltipla")
                        selected="selected"
                     @endif>Deficiência Mùltipla
                  </option>

               </select>
            </div>

            </div> {{-- Fim Data de Nascimento, Sexo, Deficiente --}}


            {{-- CEP, Munícipio e Bairro --}}
            <div class="form-group">



            <!-- CEP-->
            <label class="col-md-1 control-label" for="cep">
               <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" target="_blank" data-toggle="tooltip" title="Buscar CEP" formtarget="_blank" style="margin-right: 0; margin-bottom: 3px;"><i class="btn btn-pn-circulo btn-cor-padrao glyphicon glyphicon-search" style="margin-top: -10px;"></i></a>
               CEP
            </label>
            <div class="col-md-2">
               <input value="{{ $pessoa->endereco->cep }}" id="cep" name="endereco[cep]" type="text" placeholder="99999-999" data-inputmask="'mask': '99999-999', 'numericInput': true" class="form-control input-md cep"><span class="obrigatorio">*</span>
            </div>

            {{--  Município  --}}
            <label class="col-md-1 control-label" for="municipio">Município</label>
            <div class="col-md-2">
               <input value="{{ $pessoa->endereco->municipio }}" id="municipio" name="" type="text" placeholder="Mesquita"  class="form-control input-md input-municipio" disabled>

               <input value="{{ $pessoa->endereco->municipio }}" name="endereco[municipio]" type="hidden" class="input-municipio">
            </div>

            {{-- Bairro --}}
            <label class="col-md-1 control-label" for="bairro">Bairro</label>
            <div class="col-md-2">
               <input value="{{ $pessoa->endereco->bairro }}" id="bairro" name="" type="text" placeholder="Centro" class="form-control input-md input-bairro" disabled> <span class="obrigatorio">*</span>

               <input value="{{ $pessoa->endereco->bairro }}" name="endereco[bairro]" type="hidden" class="input-bairro">
            </div>



            </div> {{-- FIM CEP, Munícipio e Bairro--}}

            {{-- Logradouro, Número e Complemento --}}
            <div class="form-group">

            <!-- Logradouro ...Av...Rua....etc-->
            <label class="col-md-1 control-label" for="logradouro" data-toggle="tooltip" title="Logradouro">Logradouro</label>
            <div class="col-md-5">
               <input value="{{ $pessoa->endereco->logradouro }}" id="logradouro" name="endereco[logradouro]" type="text" placeholder="Av, Rua, Travessa..." class="form-control input-md"><span class="obrigatorio">*</span>
            </div>

               <!-- Número da residência-->
            <label class="col-md-1 control-label" for="numero">Número</label>
            <div class="col-md-1">
               <input value="{{ $pessoa->endereco->numero }}" id="numero" name="endereco[numero]" type="text" placeholder="999" class="form-control input-md"><span class="obrigatorio">*</span>
            </div>

            {{-- Complemento --}}
            <label class="col-md-1 control-label" for="complemento">Complemento</label>
            <div class="col-md-2">
               <input value="{{ $pessoa->endereco->complemento }}" id="complemento" name="endereco[complemento]" type="text" placeholder="Ap., Fundos,..." class="form-control input-md">
            </div>

         </div> {{-- FIM Logradouro, Número e Complemento --}}

         {{-- Celular e Telefone --}}
         <div class="form-group">

            {{-- TELEFONE 1 --}}
            <label class="col-md-1 control-label" for="telefones[0][numero]" data-toggle="tooltip" title="Celular">
               Telefone 1 
            </label>
            <div class="col-md-3">
               <div class="input-group my-group"> 

                  <select name="telefones[0][tipo_telefone]" class="form-control input-md select-tipo-telefone">
                     <option value="" disabled selected>---</option>

                     @if( isset($pessoa->telefones[0]->tipo_telefone) )
                        <option value="FIXO"    
                           @if(strtoupper($pessoa->telefones[0]->tipo_telefone) == "FIXO")     selected="selected" @endif>Fixo
                        </option>
                        <option value="CELULAR" 
                           @if(strtoupper($pessoa->telefones[0]->tipo_telefone) == "CELULAR")  selected="selected" @endif>Celular
                        </option>
                     @else
                        <option value="FIXO">Fixo</option>
                        <option value="CELULAR">Celular</option>
                     @endif
                  </select>

                  <input value="{{ $pessoa->telefones[0]->numero or null }}" id="telefones[0][numero]" name="telefones[0][numero]" type="text" placeholder="(99) 99999-9999" data-inputmask="'mask': '(99) 99999-9999'" class="form-control input-md celular">
               </div>
            </div>

            {{-- TELEFONE 2 --}}
            <label class="col-md-1 control-label" for="telefones[1][numero]" data-toggle="tooltip" title="Celular">
               Telefone 2 
            </label>
            <div class="col-md-3">
               <div class="input-group my-group"> 
                  <select name="telefones[1][tipo_telefone]" class="form-control input-md select-tipo-telefone">
                     <option value="" disabled selected>---</option>

                     @if( isset($pessoa->telefones[1]->tipo_telefone) )
                        <option value="FIXO"    
                           @if(strtoupper($pessoa->telefones[1]->tipo_telefone) == "FIXO")     selected="selected" @endif>Fixo
                        </option>
                        <option value="CELULAR" 
                           @if(strtoupper($pessoa->telefones[1]->tipo_telefone) == "CELULAR")  selected="selected" @endif>Celular
                        </option>
                     @else
                        <option value="FIXO">Fixo</option>
                        <option value="CELULAR">Celular</option>
                     @endif
                  </select>

                  <input value="{{ $pessoa->telefones[1]->numero or null }}" id="telefones[1][numero]" name="telefones[1][numero]" type="text" placeholder="(99) 99999-9999" data-inputmask="'mask': '(99) 99999-9999'" class="form-control input-md celular">
               </div>
            </div>
            

            {{-- TELEFONE 3 --}}
            <label class="col-md-1 control-label" for="telefones[2][numero]" data-toggle="tooltip" title="Celular">
               Telefone 3 
            </label>
            <div class="col-md-3">
               <div class="input-group my-group"> 

               <select name="telefones[2][tipo_telefone]" class="form-control input-md select-tipo-telefone">
                     <option value="" disabled selected>---</option>

                     @if( isset($pessoa->telefones[2]->tipo_telefone) )
                        <option value="FIXO"    
                           @if(strtoupper($pessoa->telefones[2]->tipo_telefone) == "FIXO")     selected="selected" @endif>Fixo
                        </option>
                        <option value="CELULAR" 
                           @if(strtoupper($pessoa->telefones[2]->tipo_telefone) == "CELULAR")  selected="selected" @endif>Celular
                        </option>
                     @else
                        <option value="FIXO">Fixo</option>
                        <option value="CELULAR">Celular</option>
                     @endif
                  </select>

                  <input value="{{ $pessoa->telefones[2]->numero or null }}" id="telefones[2][numero]" name="telefones[2][numero]" type="text" placeholder="(99) 99999-9999" data-inputmask="'mask': '(99) 99999-9999'" class="form-control input-md celular">
               </div>
            </div>

         </div> {{-- FIM  Celular e Telefone --}}

         {{-- Email --}}
         <div class="form-group">

            {{-- Email --}}
            <label class="col-md-1 control-label" for="email">Email</label>
            <div class="col-md-6">
               <input value="{{ $pessoa->email }}" id="email" name="email" type="text" placeholder="email@servidor.com.br" class="form-control input-md email">
            </div>
         </div>{{-- FIM Email --}}


      </div> {{-- FIM x_content --}}

   </div> {{-- Fim Participante  --}}