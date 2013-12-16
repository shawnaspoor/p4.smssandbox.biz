<div id="wrap">
    <div class="row-fluid">
       <div class="span4"> 
            <h1>Shopping Cart</h1>  
                      
                        <form action="cart.php" method="get">  
              
                            <table id="cart">  
                                <tr>  
                                    
                                    <th>Item</th>  
                                    <th>Unit Price</th>  
                                    <th>Total</th>  
                                    <th>Remove</th>  
                                </tr>              
                                        <td class="item_name"><!--<?php echo $cart->productName; ?>--></td>  
                                        <td class="unit_price"><!--<?php echo $cart->pricePerUnit; ?>--></td>  
              
                                        <td class="extended_price"><!--$<?php echo $total; ?>--></td>  
                                        <td class="remove center"><input type="checkbox" name="remove[]" value="" /></td>  
                                    </tr>  
              
                              
                            <input type="submit" name="update" value="Update cart" />  
              
                        </form>  
              
                         

         </div>
     </div>
 </div>

  