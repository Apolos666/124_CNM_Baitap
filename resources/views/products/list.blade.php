
<h1>Products</h1>
@if (session('success'))
    <p>{{ session('success') }}</p>
@endif

@if (session('error'))
    <p>{{ session('error') }}</p>
@endif

<a class="create-button" href="{{ route('products.create') }}" type='button'>Create product</a>


<table>
    <tr>
      <th>Name</th>
      <th>Category</th>
      <th>Price</th>
      <th>Status</th>
      <th></th>

    </tr>
    @foreach ($items as $product)
    <tr>
      <td>
        <a href="/">
          {{$product->name}}
        </a>
      </td>
      <td>
        {{ $product->category->name }}
      </td>
      <td>
        {{ $product->price }}
      </td>
      <td>
        @if($product->status == 0)
            Hết hàng
        @elseif($product->status == 1)
            Còn hàng
        @else
            Unknown Status
        @endif
    </td>
      <td>
        <a href="{{ route('products.edit', $product->id) }}">Edit</a>
      </td>
    </tr>
    @endforeach
  </table>

  <style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    .create-button {
      display: inline-block;
      padding: 6px 12px;
      background: rgb(36, 108, 237);
      border-radius: 4px;
      color: white;
      border: none;
      cursor: pointer;
      margin: 10px 0;
      text-decoration: none;
    }

    .create-button:hover {
      opacity: 0.7;
    }
</style>