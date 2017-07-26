
@if(Session::has('cart'))
<table class='table'> <!--Start table that will holds all data in the shopping cart --> 
@foreach($items as $item)
    <tr class='itemInCardRow'>            
        <td class='itemInCartDisplay'>
            <img class='img-responsive item_disp_image' style='max-width:80px; float:left;' src="source/images/{{$item['item']['image']}}">
        </td>

        <td class='itemInCartDisplay'>
            {{$item['item']['name']}}           
        </td>

        <td class='itemInCartDisplay'>
            <a href='javascript:void(0)' class='subtruct_itm_qty quantity_change' item_id="{{$item['item']['id']}}">-</a>  
                <span class='quantity'>Qty {{$item['qty']}}</span>"   
            <a href='javascript:void(0)' class='add_itm_qty quantity_change' item_id="{{$item['item']['id']}}">+</a>        
        </td>

        <td class='itemInCartDisplay'>
            ${{$item['price']}}
        </td>
        <td class='itemInCartDisplay'>
            <a href="#" class="remove_item_from_cart" item_id="{{$item['item']['id']}}">x</a>            
        </td>            
    </tr>
    
@endforeach
    <!-- This part displays Checkout button and price total -->
    <tr>                 
        <td class='itemInCartDisplay' colspan='4'>
            <div>
                <a href="{{route('checkout')}}" title="Review Cart and Check-Out"><button type="button" class="btn checkoutButton">CHECKOUT</button></a>
<!--                        <a class="checkoutButton" href="view_cart.php" CHECKOUT</a>            -->
            </div>
        </td>                
         <td class='itemInCartDisplay' style='text-align:right;'>
            <div class="cart-products-total">                        
                <span>Total : <span style='font-size:20px; color:#008cba;'></span>
                    ${{$totalPrice}}
                </span>
            </div>
        </td>
    </tr>
</table>
@else 
<div>Cart is empty!</div>
@endif