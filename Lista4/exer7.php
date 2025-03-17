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
  <h1>Lista 4 Exercicio 7</h1>
  <form action="exer7.php" method="post">
                        
                       
                    <form method="post">
                        
                        <div class="mb-3">
                            <label for="date1" class="form-label">Informe a primeira Data</label>
                            <input type="date" id="date1" name="date1" class="form-control" required="">
                        </div>
                    
                        <div class="mb-3">
                            <label for="date2" class="form-label">Informe a segunda Data</label>
                            <input type="date" id="date2" name="date2" class="form-control" required="">
                        </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $d1 = $_POST['date1'];
            $d2 = $_POST['date2'];
            $timestamp1 = strtotime($d1);
            $timestamp2 = strtotime($d2);
            $diferenca = abs($timestamp2 - $timestamp1);
            $dias = floor($diferenca / (60 * 60 * 24));
            echo"A diferença entre as datas é de $dias dias";
            


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