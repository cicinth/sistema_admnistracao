<html>
  <head>
	<?php include 'imports.php'; ?>
  </head>
  <body>
    <div class="wraper">
      <?php include 'menu.php'; ?>
      <div class="container">
        <div class="row">
            <div class = "col-md-6 col-md-offset-5">
                <h1> Gerar Contrato </h1>
            </div>
        </div>
        <div class = "row">
            <div class = "col-md-7 col-md-offset-4">
                <form action="lib/gerar_contrato.php" method="POST">
                    <select name = "tipo_contrato" id="tipo_contrato" class="form-control">
                        <option value = "1" >Electa</option>
                        <option value = "2" >Infap</option>
                    </select>
                    <input type="submit" class="btn btn-success" value="Submit">
                </form>
            </div>
            
          
        </div>
      </div>
    </div>
  </body>
  <?php include 'imports2.php'; ?>
</html>