<style>
    table{
        margin-top: 40px;
        margin-bottom: 40px;
        margin-left: auto;
        margin-right: auto;
    }
    table, th, td {
         border: 1px solid grey;
    }
    h1{
        text-align:center
    }
</style>
<h1>Shopping Cart</h1>
<table >
<tr style="text-align: center; color:whitesmoke; background-color:black">
<th style="padding: 10px;">Name</th>
<th style="padding: 10px;">Quantity</th>
<th style="padding: 10px;">Price</th>
<th style="padding: 10px;">Total price of game</th>
</tr>
<?php foreach($_SESSION['cart']['items'] as $key=>$cart){ ?>
<tr>
<td style="padding: 10px;"><?php echo $cart['item']['name'] ?></td>
<td style="padding: 10px;"><?php echo $cart['quantity'] ?></td>
<td style="padding: 10px;"><?php echo $cart['item']['price'] ?></td>
<td style="padding: 10px;"><?php echo $cart['price'] ?></td>
</tr>
<?php } ?>
</table>