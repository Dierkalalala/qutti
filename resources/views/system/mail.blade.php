<html>
    <table style="width: 100%;" class="table table-bordered">
        <thead>
            <tr>
                <td>Product Name</td>
                <td>Quantity</td>
                <td>Unit Price</td>
                <td>Total</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->products as $product)
            <tr>
                <td>
                    <a href="{{ route('product', ['categories' => $product->category->code, 'product' => $product->code]) }}">{{ $product->name }}</a>
                </td>
                <td>
                    <div class="input-group btn-block">
                        <div class="product-qty mr-3">                      
                            {{ $product->pivot->count }}
                        </div>
                    </div>
                <td>{{ $product->price }}</td>
                <td>{{ $product->getFullPrice() }}</td>
            </tr>
            @endforeach
            <tr>
                <td>ФИО</td>
                <td>{{ $order->fio }}</td>
            </tr>
            <tr>
                <td>Номер телефона</td>
                <td>{{ $order->telephone }}</td>
            </tr>
        </tbody>
    </table>
    

</html>