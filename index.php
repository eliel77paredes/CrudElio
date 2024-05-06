<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">



</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3 class="text-center">REGISTRO DE ENCOMIENDAS</h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="frm">
                            <div class="form-group">
                                <label for="">Descripcion</label>
                                <input type="hidden" name="idp" id="idp" value="">
                                <input type="text" name="Descripcion" id="Descripcion" placeholder="Descripcion" class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="">peso</label>
                                <input type="text" name="peso" id="peso" placeholder="peso" class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="">telefono</label>
                                <input type="text" name="telefono" id="telefono" placeholder="telefono" class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="">destino</label>
                                <input type="text" name="destino" id="destino" placeholder="destino" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="button" value="registrar" id="registar" class="btn btn-primary btn-block">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 ml-auto">
                        <form action="" method="post">
                            <div class="form-group">
                                
                                
                            </div>
                        </form>
                    </div>
                </div>
                <table class="table table-hover table-resposive">
                <thead>
                        <tr>
                            <th>id</th>
                            <th>Descripcion</th>
                            <th>peso</th>
                            <th>telefono</th>
                            <th>destino</th>
                        </tr>
                    </thead>

                    <tbody id="RESULTADO">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 
    
    
</body>
</html>