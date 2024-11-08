<h1>Edit Product</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $product->name }}" placeholder="Nhập tên sản phẩm...">
    </div>

    <div>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="{{ $product->price }}" placeholder="Nhập giá sản phẩm...">
    </div>

    <div>
        <label for="category_id">Category:</label>
        <select id="category_id" name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="">Chọn trạng thái</option>
            <option value="0" {{ $product->status == 0 ? 'selected' : '' }}>Hết hàng</option>
            <option value="1" {{ $product->status == 1 ? 'selected' : '' }}>Còn hàng</option>
        </select>
    </div>

    <button type="submit">Edit Product</button>
</form>


<style>
    form {
        max-width: 500px;
        margin: 20px auto;
    }
    div {
        margin-bottom: 15px;
    }
    label {
        display: block;
        margin-bottom: 5px;
    }
    input[type="text"], textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    button:hover {
        background-color: #45a049;
    }
</style>