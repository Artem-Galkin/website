<head>
  <meta name="viewport" content='width=device width, initial scale=1.0'>
</head>

<body>
  <form method="GET" action=""> // передаёт метод
    <input type="text" name="first"> <br>
    <input type="text" name="second"> <br>
    <input type="text" name="отправить"> <br>
  </form>
  <?php
  if (empty($_GET['first']) && empty($_GET['second'])) {
    exit('текстовые поля не заполнены');
  } else {
    echo '/pre>';
    print_r($_GET);
    echo '</pre>';
  }
  ?>


</body>