<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class = "container mt-5">
  <h1>Lista 4 Exercicio 4</h1>
  <form action="exer4.php" method="post">
                        
                        <div class="mb-3">
                            <label for="dia" class="form-label">Informe o dia </label>
                            <input type="number" id="dia" name="dia" class="form-control" required="">
                        </div>

                        <div class="mb-3">
                            <label for="mes" class="form-label">Informe o mês</label>
                            <input type="number" id="mes" name="mes" class="form-control" required="">
                        </div>

                        <div class="mb-3">
                            <label for="ano" class="form-label">Informe o ano</label>
                            <input type="number" id="ano" name="ano" class="form-control" required="">
                        </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $dia = $_POST['dia'];
            $mes = $_POST['mes'];
            $ano = $_POST['ano'];
            if(checkdate($mes, $dia, $ano)){ //função do php para verificar se a data é válida.
                echo"A data é válida". sprintf("%02d/%02d/%04d", $dia, $mes, $ano); //função do php para formatar a data.
            }else{
                echo"A data é inválida";
            }
        
        }catch(Exception $e){
            echo $e->getMessage();
        }
        
        }
        

    ?>
    <br>
</div>   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html> 