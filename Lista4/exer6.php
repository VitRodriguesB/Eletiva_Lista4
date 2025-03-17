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
  <h1>Lista 4 Exercicio 6</h1>
  <form action="exer6.php" method="post">
                        
                        <div class="mb-3">
                            <label for="valor" class="form-label">Informe o valor </label>
                            <input type="number" id="valor" name="valor" step="0.01" required="">
                        </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $num = $_POST['valor'];
            echo"Número arredondado: ". round($num); // round função do php para arredondar um número.
            echo"<br> $num valor antigo";


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