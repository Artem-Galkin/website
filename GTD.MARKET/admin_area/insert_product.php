<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Products-Admin Dasboard</title>

  <!-- bootstrapt CSS link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- font awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- CSS file link -->
  <link rel="stylesheet" href="../style.css">

</head>

<body class="bg-light">
  <div class="container mt-3">
    <h1 class="text-center">Insert Products</h1>


    <!-- ! form -->

    <form action="" method="post" enctype="multipart/form-data">

      <!-- Title -->
      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_title" class="form-labal">Product title</label>
        <input type="text" name="product title" id="product title" class="form-control" placeholder="Enter product title" autocomplete="off" required="required">
      </div>

      <!-- description -->

      <div class="form-outline mb-4 w-50 m-auto">
        <label for="description" class="form-labal">Product title</label>
        <input type="text" name="description" id="description" class="form-control" placeholder="Enter product description" autocomplete="off" required="required">
      </div>


      <!-- keywords -->

      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_keywords" class="form-labal">Product keywords</label>
        <input type="text" name="keywords" id="product_keywords" class="form-control" placeholder="Enter product keywords" autocomplete="off" required="required">
      </div>




      <!-- Categories -->


      <div class="form-outline mb-4 w-50 m-auto">
        <select name="product_category" id="" class="form-select">
          <option value="">Select a category</option>
          <option value="">Category1</option>
          <option value="">Category2</option>
          <option value="">Category3</option>
          <option value="">Category4</option>
        </select>
      </div>


      <!-- Brands -->


      <div class="form-outline mb-4 w-50 m-auto">
        <select name="product_brands" id="" class="form-select">
          <option value="">Select a brands</option>
          <option value="">Brand1</option>
          <option value="">Brand2</option>
          <option value="">Brand3</option>
          <option value="">Brand4</option>
        </select>
      </div>


      <!-- Image 1 -->

      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_keywords" class="form-labal">Product image 1</label>
        <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
      </div>



      <!-- Image 2 -->

      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_keywords" class="form-labal">Product image 2</label>
        <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
      </div>


      <!-- Image 3 -->

      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_keywords" class="form-labal">Product image 3</label>
        <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
      </div>



      <!-- Price -->

      <div class="form-outline mb-4 w-50 m-auto">
        <label for="product_price" class="form-labal">Product price</label>
        <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">
      </div>

      <!-- Price -->

      <div class="form-outline mb-4 w-50 m-auto">
        <input type="submit" name="insert_product" class="btn-info mb-3 px-3" value="Insert Products">
      </div>








    </form>




  </div>

</body>

</html>