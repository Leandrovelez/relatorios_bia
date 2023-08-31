<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-2 pb-4">
                <h1>Relatório</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <form action="{{route('relatorio')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card form-group">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <label for="arquivo" class="float-start text-secondary">Arquivo csv</label><br>
                                    <input type="file" id="arquivo" name="arquivo" class="form-control">
                                </div>
                                <!-- <div class="col-6">
                                    <label for="tipo" class="float-start text-secondary">Tipo de relatório</label><br>
                                    <select name="" id="tipo" name="tipo" class="form-control">
                                        <option value="1">Por curso</option>
                                        <option value="2">Por domínio</option>
                                    </select>
                                </div> -->
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <input type="submit" value="Gerar relatório" class="btn btn-large btn-success mt-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>