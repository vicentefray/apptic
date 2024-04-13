<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Productos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
   <?php
      include ("conexion_pg.php");

    ?>
</head>
<body>
  <div class="container">
    <div class="row">
    <table class="table table-bordered table-hover" id="datos">
    <thead>
        <tr>
            <td>Cod. Producto</td>
            <td>Nombre Producto</td>
            <td>Cantidad</td>
        </tr>
        </thead>
    <?php 
      $result = pg_query($connection, "SELECT * FROM productos");
      echo "<tbody>";
      while ($row = pg_fetch_assoc($result))
       {
        echo "<tr>";
            $cod_producto=$row["cod_producto"] ;
            $nom_producto=$row["nom_producto"] ;
            $precio=$row["precio"] ;
            echo "<td>". $cod_producto ."</td>";
            echo "<td>". $nom_producto ."</td>";
            echo "<td>". $precio ."</td>";
        echo "</tr>";
      }
      echo "</tbody>";
    ?>
    </table>
    <?php 
      pg_close($connection);
    ?>
    </div>
    </div>

    <script>
      $(document).ready(function () {
        let table = new DataTable('#datos');   
      });
     
    </script>
</body>

<script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"> </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>



</html>