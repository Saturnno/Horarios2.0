<?php include '../Horarios2.0/assets/php/header.php'?>
   <html>
    <head>
        <title>Horarios</title>

        <link rel="stylesheet" href="./Horarios2.0/assets/css/estilos.css">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="
            stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../Horarios2.0/assets/css/lib/animate.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="../Horarios2.0/assets/js/lib/sweetalert2.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
         <?php get_header();?>
         <div class="container">
            <div class="row"></div>
            <div class="row">
                <table id="categoria" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th></th>
                                
                            </tr>
                        </thead>
                        <tbody>
            
                        </tbody>
                    </table>
            </div>
         </div>
         <?php get_footer();?>
    </body>
    <script>
    
        $(document).ready( function () {
            var table = $('#categoria').DataTable(
            {
              responsive: true,
                "language": {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
            },
                "columnDefs": [ {
            "targets": 3,
            "data": null,
            "defaultContent": "<div class='d-flex justify-content-center'><button id='modify' class='bg-primary btn_Usr' data-toggle='modal' data-target='#modifyForm'>Modificar</button><button id='status' class='bg-success btn_Usr' data='3' style='margin-left: 10px;'>Activo</button></div>"
            }
            });
        } );
        
    </script>
</html> 
                       

                       