<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User registration</title>

  <!-- bootstrapt CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">





  <div class="container-fluid my-3">
    <h2 class="text-center">Вход в ********</h2>
    <div class="row d-flex align-items-center justify-content-center mt-5">
      <div class="col-lg-12 col-xl-6">

        <form action="" method="post" enctype="multipart/form-data">


          <!-- User login field -->

          <div class="form-outline mb-4">

            <input type="text" id="user_username" class="form-control" placeholder="Введите ваш логин" autocomplete="off" required="required" name="user_username">
          </div>

          <!-- User password field -->

          <div class="form-outline mb-4 pt-2">

            <input type="password" id="user_password" class="form-control" placeholder="Введите ваш пароль" autocomplete="off" required="required" name="user_password">

          </div>



          <!-- Чекбокс "Запомнить" -->

          <fieldset>


            <div>
              <input type="checkbox" id="scales" name="scales" checked>
              <label for="scales">Запомнить</label>
            </div>


          </fieldset>


          <!-- Кнопка "Войти" -->

          <div class="mt-4 pt-2">

            <input type="submit" value="ВОЙТИ" class="bg-info py-2 px-3 border-0" name="user_login">


          </div>


          <!-- Запросить логин и пароль  -->

          <p class="small fw-bold mt-2 pt-1 mb-0"><a href="user_login.php"> Забыли логин или пароль ?</a></p>

        </form>





        <div class="pt-5">
          <h3><b>Впервые у нас?<b></h3>
          <h3>Зарегистрируйтесь и сможете размещать свои грузы и машины, общаться на форуме и <a href="">многое другое</a></h3>



        </div>


        <a href="#" class="">Зарегистрироваться</a>


      </div>
    </div>

  </div>








<body>

</body>

</html>