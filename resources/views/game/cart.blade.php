@extends('layout.customer')
@section('content')
    <div class="row">
        <div class="col">
            <h3 class="mb-3">
                <i class="fas fa-stream"></i> Shopping cart
                <small class="text-muted">All game in cart</small>
            </h3>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">
                    <input type="checkbox" id="check-all">
                </th>
                <th scope="col">Id</th>
                <th scope="col">Avatar</th>
                <th scope="col">Name</th>
                <th scope="col">Unit Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total Price</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody id="cart-body">
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function () {
            var shoppingCartJson = localStorage.getItem('shopping-cart');
            if (shoppingCartJson == null) {
                alert('Hiện tại không có sản phẩm nào trong giỏ hàng!');
                return;
            }
            var shoppingCart = JSON.parse(shoppingCartJson);
            var htmlContent = '';
            for (var gameId in shoppingCart) {
                var cartItem = shoppingCart[gameId];
                htmlContent += `<tr>
                <th scope="row">
                    <input type="checkbox" class="check-item" value="">
                </th>
                <td>${cartItem.id}</td>
                <td><img class="img-thumbnail rounded game-avatar" src="${cartItem.thumbnail}" alt=${cartItem.name}>
                </td>
                <td>${cartItem.name}</td>
                <td>$${cartItem.price}</td>
                <td>${cartItem.quantity}</td>
                <td>$${cartItem.price * cartItem.quantity}</td>
                <td>
                </td>
            </tr>`;
            }

            $('#cart-body').html(htmlContent);
        });
    </script>
@endsection
