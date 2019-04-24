<?php 
    require_once("header.php");
    require_once("./../config.php");
?>

<link rel="stylesheet" href="<?= BASE_URL ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Listar Membros
        <small>Atualizado até: <?= date('d/m/Y') ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= BASE_URL ?>"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="<?= BASE_URL ?>listar"><i class="fa fa-list"></i> Listar Membros</a></li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content container-fluid">
    
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listar Membros</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="listMembers" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Foto</th>
                  <th>Nome Completo</th>
                  <th>Função</th>
                  <th>Status</th>
                  <th>Onde Congrega</th>
                  <th>Estado Civil/Sexo</th>
                  <th>Alt/Del</th>
                </tr>
                </thead>
                <tbody>
                  <?php

                    $Arr = $db -> query("SELECT * FROM tb_membros ORDER BY nome_competo");
                    $array = $Arr -> fetchAll();
                    var_dump($array);
                  
                  ?>
                <tr>
                  <td><img src = "<?= BASE_URL ?>upload/215ae20455edf28c60d0cf66adae8a74.jpg" width = "100%"></td>
                  <td>ALLAN CRISTIAN CERVANTES CAMARGO</td>
                  <td>Membro(a)</td>
                  <td>Ativo(a)</td>
                  <td>Curitiba</td>
                  <td>Solteiro / Masculino</td>
                  <td><a href = "<?= BASE_URL ?>alterar" >Alterar</a> / <a href = "<?= BASE_URL ?>cadastrar/remover">Remover</a> </td>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>



    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- jQuery 3 -->
<script>
  var BASE_URL = '<?= BASE_URL ?>';
</script>
<script src="<?= BASE_URL ?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?= BASE_URL ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?= BASE_URL ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= BASE_URL ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= BASE_URL ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= BASE_URL ?>bower_components/fastclick/lib/fastclick.js"></script>

<script>
  $(function () {
    $('#listMembers').DataTable({
    "oLanguage": {
        "sProcessing":   "Processando...",
        "sLengthMenu":   "Mostrar _MENU_ registros",
        "sZeroRecords":  "Não foram encontrados resultados",
        "sInfo":         "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        "sInfoEmpty":    "Mostrando de 0 até 0 de 0 registros",
        "sInfoFiltered": "",
        "sInfoPostFix":  "",
        "sSearch":       "Buscar:",
        "sUrl":          "",
        "oPaginate": {
            "sFirst":    "Primeiro",
            "sPrevious": "Anterior",
            "sNext":     "Seguinte",
            "sLast":     "Último"
        }
    },
      'paging'      : true,
      'responsive'  : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true


    });
  });
</script>

<?php 
    require_once("footer.php");
?>