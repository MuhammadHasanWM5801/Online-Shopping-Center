<?php

function component($productname,$productprice,$productimg,$productid){
    $element = "
    
    <div class=\"col-sm12 col-md-6 col-lg-3\">
    
  <form action=\"HOM.php\" method=\"post\">

  <div class=\"card0\">
          <img src=\"$productimg\" class=\"card-img-top\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">$productname</h5>
            <h6>
              <i class=\"fas fa-star\"></i>
              <i class=\"fas fa-star\"></i>
              <i class=\"fas fa-star\"></i>
              <i class=\"fas fa-star\"></i>
              <i class=\"far fa-star\"></i>


            </h6>
            <p class=\"card-text\">$productprice</p>
            
            <button type=\"submit\" class=\"btn btn-primary my-3\" name=\"add\">Add to Cart<i class=\"fas fa-shopping-cart\"></i></button>
            <input type ='hidden' name='product_id' value='$productid'>
            </div>
        </div>



    </form>
    
      
  </div>

    
    
    
    ";
    echo $element;
}
// cart kar lya component bana hai 
function cartElement($productimage,$productname,$productprice,$productid){
  $element="
     
  <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                        <div class=\"border rounded\">
                            <div class=\"row bg-white\">
                                <div class=\"col-md-3 pl-0\">
                                    <img src=$productimage alt=\"image1\" class=\"img-fluid\">
                                </div>
                                <div class=\"col-md-6\">
                                    <h5 class=\"pt-2\">$productname</h5>
                                    <small class=\"text-secondary\">Seller: E-Shopping</small>
                                    <h5 class=\"pt-2\">$$productprice</h5>
                                    <button type=\"submit\" class=\"btn btn-warning \">Save</button>
                                    <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>

                                </div>
                                <div class=\"col-md-3 py-5\">
                                    <div>
                                        <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                        <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                        <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>

                                    </div>
                                </div>
                            </div>

                        </div>



                </form>
  
                ";

                  echo $element;
              }
