<div id="wrap">
    <div class="row-fluid">
       <div class="span12"> 
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

                                <?php foreach ($lines as $line): ?>
                                  
                                   <tr>              
                                        <td class="item_name"><?=$line[0]['productName']?></td>  
                                        <td class="unit_price"><?=$line[0]['pricePerUnit']?></td>  
                                        <td class="unit_price"><?=$line[0]['quantity']?></td>  
                                        <td class="extended_price"><!--$<?php echo $total; ?>--></td>  
                                        <td class="remove">
                                            <form  action="/cart/cart" method="get" >
                                                <input type="hidden" name="id" value="<?=$line[0]['productID']?>">
                                                <button type ="submit" name="action" value="remove" id="<?=$line[0]['productID']?>" >remove</button>
                                            </form>
                                        </td>  
                                    </tr>  
              
                              <?php endforeach; ?>
                          </table>
                    
                     <input id="button" type="submit" value="Submit Order" />  
              
                     </form>
              
                         

         </div>
     </div>
 </div>

  