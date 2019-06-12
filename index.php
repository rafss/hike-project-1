
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista - Big Lar</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="JsBarcode.all.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Gerar Lista de Separação Big Lar</h1>
             <div class="row">
                  <div class="col-sm-4">
                      <form action="php/insertar.php" method="post">
                          <label>estoque_id</label>
                          <input type="text" name="codigo" class="form-control">
                          <br>
                          <button type="submit" class="btn btn-primary">Inserir</button>
                      </form>
                  </div>
             </div>
            <hr>
            <div class="row">
                <div class="col-sm-10">
                     <?php require_once "table.php"; ?>
                </div>
            </div>
        </div>           

                          
    </body>
</html>
