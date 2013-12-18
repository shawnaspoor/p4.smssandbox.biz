<div id="wrap">
    <div class="row-fluid">
       <div class="span4"> 
            <h1>Shopping Cart</h1>  
                      
                        <form action="/cart/cart_submit" method="post"> 
              
                           <table class="table table-hover table-bordered table-condensed" style="width:80%">
                                <tr>  
                                    
                                    <th>Item</th>  
                                    <th>Unit Price</th> 
                                    <th>Quantity</th> 
                                    <th>Total</th>  
                                    <th>Remove</th>  

                                </tr>
                                <?php foreach ($results as $result): ?>
                                  
                                   <tr>              
                                        <td class="item_name"><?=$result['productName']?></td>  
                                        <td class="unit_price"><?=$result['pricePerUnit']?></td>  
                                        <td class="unit_price"><?php echo $quantity ?></td>  
                                        <td class="extended_price"><!--$<?php echo $total; ?>--></td>  
                                        <td class="remove center"><input type="checkbox" name="remove[]" value="" /></td>  
                                    </tr>  
              
                              <?php endforeach; ?>
                          </table>
                    
                     <input id="button" type="submit" value="Submit Order" />  
              
                     </form>
              
                         

         </div>
     </div>
 </div>

  