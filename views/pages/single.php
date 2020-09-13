
    <div>
        <div class="salary"><h1>Single</h1></div>
        <div class="container">
            <div class="row">
            <div class="col-sm-4">
            <img src="./public/assets/images/<?php echo $data['image']?>" width="300px" height="400px" alt="">
            </div>
            <div class="col-sm-4">
                <div class="name"><strong>Tên: </strong><?php echo $data['name']?></div>
                    <div class="position"><strong>Nhà sản xuất: </strong><?php echo $data['publisher']?></div>
                    <div class="position"><strong>Giá: </strong><?php echo number_format($data['price'])?> VND</div>
                    <div class="position"><button class="btn btn-primary" style="height: 50px; width:200px"> Add to cart</button></div>
            </div>
            </div>

        </div>        
    </div>
