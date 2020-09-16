<div>

<link rel="stylesheet" type="text/css" href="public/assets/css/login.css" />
<h1 style="text-align: center;">Add Game</h1>
<div class="container">
  <form action="./index.php?controller=admin&action=addProduct" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Name of the game" required>
        <input type="text" name="price" placeholder="Price of the game" required>
        <input type="text" name="publisher" placeholder="Name of publisher" required>
        <input type="text" name="quantity" placeholder="Input quantity" id="quantity">
        <input type="file" name="images" id="">
        <input type="submit" value="Add product">
    </div>
  </form>
</div>

</div>
