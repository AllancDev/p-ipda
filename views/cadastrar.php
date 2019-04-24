<?php

  require_once("header.php");

?>
<link rel="stylesheet" href="<?= BASE_URL ?>plugins/iCheck/all.css">
<style>
  .mini_foto {
    width: 160px;
    height: 160px;
  }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Painel Administrativo
      <small>Início</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?= BASE_URL ?>"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li><a href="<?= BASE_URL ?>cadastrar"><i class="fa fa-users"></i> Cadastrar Membros</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Cadastrar Membros</h3>
          </div>

          <!-- /.box-header -->
          <!-- form start -->
          <form method = "POST" name = "data" action = "<?= BASE_URL ?>cadastrar/add_membros" role="form" enctype = "multipart/form-data">
            <div class="box-body">
              <div class="panel-group">

                <div class="panel panel-primary">
                  <div class="panel-heading">Dados Pessoais</div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nome Completo</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" name = "nomecompleto"  required autofocus placeholder="Digite seu nome completo:">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Estado Civil:</label>
                          <select name = "estadocivil" required class="form-control">
                            <option value = "Solteiro(a)">Solteiro(a)</option>
                            <option value = "Casado(a)" >Casado(a)</option>
                            <option value = "Separado(a)" >Separado(a)</option>
                            <option value = "Divorciado(a)" >Divorciado(a)</option>
                            <option value = "Viúvo(a)" >Viúvo(a)</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Sexo:</label>
                          <select name = "sexo" class="form-control" required>
                            <option option = "m">Masculino</option>
                            <option option = "f">Feminino</option>
                          </select>
                        </div>
                      </div>

                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="profissao">Profissão: </label>
                          <input type="text" class="form-control"  id="profissao" name = "profissao"  placeholder="Digite sua profissão:" required>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <div class="radio">
                            <label>
                              <input type="radio" class="minimal cpf-cnpj" id="cpf-cnpj" name="cpf/cnpj" value="cpf" > Pessoa Fisica
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" class="minimal cpf-cnpj" id="cpf-cnpj" name="cpf/cnpj" value="cnpj">
                              Pessoa Juridica
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label id="label-cpf-cnpj">CPF/CNPJ</label>
                          <input type="text" class="form-control" id="InputCpf-cnpj" name="cpf/cnpj" disabled>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="rg">RG: </label>
                          <input type="text" class="form-control" id="rg" name="rg" placeholder="Digite seu RG:" required>
                        </div>
                      </div>

                    </div>

                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="dtnascimento">Data nascimento: </label>
                          <input type="text" class="form-control" id="dtnascimento" name ="dtnascimento" placeholder="dd/mm/yyyy" required>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="nacionalidade">Nacionalidade: </label>
                          <input type="text" class="form-control" id="nacionalidade" name ="nacionalidade"  placeholder="Digite sua nacionalidade:" required>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="naturalidade">Naturalidade: </label>
                          <input type="text" class="form-control" id="naturalidade" name ="naturalidade" placeholder="Digite sua naturalidade:" required>
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="ufnascimento">UF: </label>
                          <input type="text" class="form-control" id="ufnascimento" name ="ufnascimento" placeholder="UF:" required>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="nomedopai">Nome do Pai: </label>
                          <input type="text" class="form-control" id="nomedopai" name ="nomedopai" placeholder="Nome do Pai:" >
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="nomedamae">Nome da Mãe: </label>
                          <input type="text" class="form-control" id="nomedamae" name ="nomedamae" placeholder="Nome do Mãe:">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="ondecongrega">Onde Congrega: </label>
                          <input type="text" class="form-control" id="ondecongrega" name ="ondecongrega" placeholder="Onde Congrega:">
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="dtbatismo">Data de batismo: </label>
                          <input type="text" class="form-control" id="dtbatismo" name ="dtbatismo" placeholder="dd/mm/yyyy">
                        </div>
                      </div>


                    </div>
                  </div>
                </div>

                <br />

                <div class="panel panel-primary">
                  <div class="panel-heading">Endereço</div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="exampleInputEmail1">CEP: </label>
                          <input type="text" class="form-control" id="cep" name ="cep" placeholder="Digite o CEP: " required>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Endereço: </label>
                          <input type="text" class="form-control" id="rua" name ="rua" placeholder="Digite o endereço: " required >
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Bairro: </label>
                          <input type="text" class="form-control" id="bairro" name ="bairro" placeholder="Bairro: " required>
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Cidade: </label>
                          <input type="text" class="form-control" id="cidade" name ="cidade" placeholder="Cidade: " required>
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="exampleInputEmail1">UF: </label>
                          <input type="text" class="form-control" id="uf" name ="uf" placeholder="UF: " required >
                        </div>
                      </div>



                    </div>
                    <div class="row">
                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Número: </label>
                          <input type="number" class="form-control" id="numero" name="numero" placeholder="Digite o numero: " required >
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Complemento: </label>
                          <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Complemento: " required>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <br />

                <div class="panel panel-primary">
                  <div class="panel-heading">Informações Gerais</div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Função:</label>
                          <select name = "funcao" class="form-control" required>
                            <option option = "membro">Membro</option>
                            <option option = "Diácono" >Diácono</option>
                            <option option = "Lider" >Lider</option>
                            <option option = "Presbítero" >Presbítero</option>
                            <option option = "Dirigente" >Dirigente</option>
                            <option option = "Voluntário(a)" >Voluntário(a)</option>
                            <option option = "Financeiro(a)" >Financeiro(a)</option>
                            <option option = "Conselheiro(a)" >Conselheiro(a)</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Status:</label>
                          <select name = "status" class="form-control" required>
                            <option option = "Ativo(a)">Ativo(a)</option>
                            <option option = "Inativo(a)" >Inativo(a)</option>
                            <option option = "Observação(a)" >Observação(a)</option>
                            <option option = "Transferido(a)" >Transferido(a)</option>
                            <option option = "Disciplinado(a)" >Disciplinado(a)</option>
                            <option option = "Falecido(a)" >Falecido(a)</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Anexo:</label>
                          <input type="file" name = "anexoarquivo" />
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                <div class="panel panel-primary">
                  <div class="panel-heading">Informações Adicionais</div>
                  <div class="panel-body">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">E-mail: </label>
                          <input type="email" class="form-control" id="email" name="email" placeholder="Digite o Email: " required>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Telefone Residencial: </label>
                          <input type="text" class="form-control" id="phonehouse" name="phonehouse" placeholder="Telefone Residencial: " required>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Telefone Celular: </label>
                          <input type="text" class="form-control" id="phonemobile" name="phonemobile" placeholder="Telefone Celular: " required>
                        </div>
                      </div>

                      <div class="col-md-2">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Telefone Whatsapp: </label>
                          <input type="text" class="form-control" id="phonewhats" name="phonewhats" placeholder="Telefone Whatsapp: ">
                        </div>
                      </div>


                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Observações:</label>
                          <textarea class="form-control" rows="3" name = "observacao" placeholder="Digite as observações ..."></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <br />
                <div class="row">


                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Foto:</label>
                      <input type="file" id="image" name="image" onchange="readURL(this,'mini_foto_new');" />
                    </div>
                  </div>


                </div>
                <div class="row">
                  <div class="col-md-4">
                    <img id="mini_foto_new" class="mini_foto" src="<?= BASE_URL ?>/assets/img/user2-160x160.jpg" />
                  </div>
                </div>
              </div>

              <div class="box-footer">
                <div class="row">
                  <button type="submit" class="btn btn-success">Cadastrar Membro</button>
                  <button type="reset" class="btn btn-warning">Limpar</button>
                </div>
              </div>
          </form>
        </div>

      </div>

    </div>

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script src="<?= BASE_URL ?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?= BASE_URL ?>assets/js/jquery.mask.min.js"></script>

<script src="<?= BASE_URL ?>assets/js/api-correios.js"></script>

<script src="<?= BASE_URL ?>plugins/iCheck/icheck.min.js"></script>
<script src="<?= BASE_URL ?>assets/js/validate-input.js"></script>

<script src="<?= BASE_URL ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script>
  function readURL(input, id) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#' + id).attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
<?php 
    require_once("footer.php");

?>