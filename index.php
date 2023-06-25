<?php include("config/config.php"); ?>

<!-- Ler o conteudo do txtfile, se existir -->
<?php  $read = @file_get_contents('controllers/txtfile.txt'); 

echo $read;?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="<?php echo 'lib/Css/style.css' ?>">
    <link rel="stylesheet" href="<?php echo 'lib/Javascript/FullCalandar/main.min.css'; ?>">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>
<body>
   <div class="calendar">
   </div>


<script src="<?php echo 'lib/Javascript/FullCalandar/main.min.js'; ?>"></script>
<script src="<?php echo 'lib/Javascript/js.js' ?>"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</body>
</html>