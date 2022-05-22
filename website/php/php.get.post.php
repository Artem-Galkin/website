<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ГТД маркет - онлайн магазин таможенных деклараций</title>

  <link rel="stylesheet" href="css/mustard-ui.min.css">
  <link rel="stylesheet" href="css/stylemodal.css">



</head>

<body>
  <div class="container">
    <h1>Работа с get, post</h1>
    <h2><a href="http://gtd.market/" target="_blank"> Практика</a></h2>

    <section>
      <!-- action указывает на файл, который будет эту форму обрабатывать -->
      <!-- Также, есть атрибут метод, который указывает каким способот отправляются данные. Поскольку не указывем метода, то у меня данные отправляются с помощью метода "get" -->
      <!-- value="Pupkin" можно убрать из стороки, задали чтобы не задовать каждый раз -->

      <form action="form_handler.php">
        <div><label for="">Name:<input type="text" name="user" value="Pupkin"> </label></div>
        <div><label for="">Pass:<input type="text" name="pass" value="A4722773a555"> </label></div>
        <div><input type="submit" class="get-started button button-primary button-large" value="Push"></div>

      </form>










    </section>

  </div>



</body>

</html>