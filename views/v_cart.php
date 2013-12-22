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
                                    <th>Remove</th>  
 
                                </tr>

                                <?php foreach ($lines as $line): ?>
                                  
                                   <tr>              
                                        <td class="item_name"><?=$line[0]['productName']?></td>  
                                        <td class="unit_price"><?=$line[0]['pricePerUnit']?></td>  
                                        <td class="unit_price"><?=$line[0]['quantity']?></td> 
                                        <td class="remove">
                                            <a href="/cart/cart&id=<?=$line[0]['productID']?>&action=remove"><button>remove</button></a>
                                         </td>  
                                    </tr>  
              
                              <?php endforeach; ?>
                              <tr>
                                    <td >
                                        Total:
                                    </td>
                                    <td colspan=3;>
                                         $<?=$totalAll?>
                                    </td>
                                    
                              </tr>
                          </table>
                    
                     <input id="button" type="submit" value="Submit Order" />  
              
                     </form>
              
                         

         </div>
     </div>
 </div>

  