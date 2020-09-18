
    <div >
        <div style="text-align: center;" class="salary"><h1>Game</h1></div>
        <div class="container"style="margin-top:40px;margin-bottom:40px">
            <div class="row">
            <div class="col-sm-4">
            <img src="<?php echo $data['image']?>" width="300px" height="400px" alt="">
            </div>
            <div class="col-sm-4">
                <div class="name" style="font-size:20px"><strong>Tên: </strong><?php echo $data['name']?></div>
                    <div class="position" style="margin-top: 30px;font-size:20px"><strong>Nhà sản xuất: </strong><?php echo $data['publisher']?></div>
                    <div class="position" style="margin-top: 30px;font-size:20px"><strong>Giá: </strong><?php echo number_format($data['price'])?> VND</div>
                    <form  class="form-cart" data-id="<?php echo $data['id'] ?>">
                    <div class="position" style="margin-top: 30px;font-size:20px"><button class="btn btn-primary" style="height: 50px; width:200px"> Add to cart</button></div>
                    </form>
            </div>
            </div>

        </div>        
    </div>
