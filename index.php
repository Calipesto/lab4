<!DOCTYPE html>
<html lang="ru">

<head>
<!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

<header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Лабораторная работа №4</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">

          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Поиск">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
          </form>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container" style="padding-top:3rem">
      <h1 class="mt-5">Вычислить площадь прямоугольника со сторонами A и B и определить, является ли данная фигура квадратом.</h1>

		<form method="POST">
		  <div class="form-group">
		    <label for="sideA">Введите значение А</label>
		    <input type="text" class="form-control" id="sideA" placeholder="Сторона А" name="sideA">
		  </div>
		  <div class="form-group">
		    <label for="sideB">Введите значение В</label>
		    <input type="text" class="form-control" id="sideB" placeholder="Сторона В" name="sideB">
		  </div>
		  <button type="submit" class="btn btn-primary">Вычислить</button>
		</form>
    <?php
    $sideA = NULL;
    $sideB = NULL;
    if(isset($_POST['sideA'])) $sideA = strip_tags(htmlentities($_POST['sideA']));
    if (isset($_POST['sideB'])) $sideB = strip_tags(htmlentities($_POST['sideB']));
    if($sideA && $sideB)
    {
      $ret = floatval($sideA) * floatval($sideB);
      if (floatval($sideA) == floatval($sideB) && $ret > 0) {
        echo "<h1 style=\"margin-top:10px\">Это квадрат</h1>";
      }
      echo "<h1 style=\"margin-top:10px\">Площадь: $ret</h1>";
    }
    ?>
    </main>

    <footer class="footer">
    </footer>
</body>

</html>