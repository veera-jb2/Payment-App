<h1>Product Details</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Product Description</th>
        <th>Product Price</th>
        <th>Pay</th>
    </tr>
    @foreach($products as $product)
      <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->product_name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->product_price }}</td>
        <td><button><a href="{{ route('product.payment',['id'=> $product->id ]) }}">Pay</a></button></td>
      </tr>

    @endforeach
</table>