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
  <h1>Lista 4 Exercicio 3</h1>
  <form action="exer3.php" method="post">
                        
                        <div class="mb-3">
                            <label for="pal1" class="form-label">Informe a primeira palavra</label>
                            <input type="text" id="pal1" name="pal1" class="form-control" required="">
                        </div>

                        <div class="mb-3">
                            <label for="pal2" class="form-label">Informe a segunda palavra</label>
                            <input type="text" id="pal2" name="pal2" class="form-control" required="">
                        </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        try{
            $palavra1 = $_POST['pal1'];
            $palavra2 = $_POST['pal2'];
            if(strpos($palavra1, $palavra2) !== false){ //função do php para verificar se a palavra 2 está contida na palavra 1.
                echo"A palavra 2 está contida na palavra 1";
            }else{
                echo"A palavra 2 não está contida na palavra 1";
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