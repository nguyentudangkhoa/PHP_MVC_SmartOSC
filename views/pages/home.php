<div class="container">
  <div class="row">
  <?php while($row = mysqli_fetch_array($data)){?>
    <div class="col-sm-4" style="text-align:center; margin-bottom:20px">
    <a href="?controller=pages&action=single&id=<?php echo $row['id']?>">
      <div class="top">
        <img src="./public/assets/images/<?php echo $row['image']?>" width="250px" height="250px" alt="">
      </div>
      <div class="bottom">
        <div class="name"><label style="font-weight: bold;margin-top:10px"><?php echo $row['name']?></label></div>
      </div>
      </a>
      <div class="price" style="color: red; font-weight:bold;margin-bottom:10px"><?php echo number_format($row['price'])?> VND</div>
      <button class="btn btn-primary"> Add to cart</button>
   
    </div>
  <?php } ?>
  </div>
</div>