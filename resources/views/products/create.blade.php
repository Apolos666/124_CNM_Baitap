<h1>Create Product</h1>

<form action="{{ route('products.store') }}" method="POST">
    @method('PUT')
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Nhập tên sản phẩm...">
    </div>

    <div>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" placeholder="Nhập giá sản phẩm...">
    </div>

    <div>
        <label for="category_id">Category:</label>
        <select id="category_id" name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" >{{$category->name}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="">Chọn trạng thái</option>
            <option value="0">Hết hàng</option>
            <option value="1">Còn hàng</option>
        </select>
    </div>

    <button type="submit">Create Product</button>
</form>

@error('name')
  <span class="error">{{ $message }}</span>
@enderror

<style>
/* Container styles */
h1 {
    color: #333;
    font-size: 2rem;
    margin-bottom: 2rem;
    padding-bottom: 0.5rem;
    border-bottom: 2px solid #eaeaea;
}

form {
    max-width: 600px;
    margin: 0 auto;
    padding: 2rem;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Form group styles */
div {
    margin-bottom: 1.5rem;
}

/* Label styles */
label {
    display: block;
    margin-bottom: 0.5rem;
    color: #4a5568;
    font-weight: 500;
    font-size: 0.95rem;
}

/* Input and select styles */
input[type="text"],
select {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #e2e8f0;
    border-radius: 4px;
    font-size: 1rem;
    transition: border-color 0.2s ease;
    background-color: #f8fafc;
    appearance: none; /* Removes default browser styling */
}

/* Custom select arrow */
select {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%234a5568'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 0.75rem center;
    background-size: 1em;
    padding-right: 2.5rem;
}

input[type="text"]:focus,
select:focus {
    outline: none;
    border-color: #4299e1;
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.1);
    background-color: #ffffff;
}

/* Button styles */
button[type="submit"] {
    background-color: #4299e1;
    color: white;
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 4px;
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.2s ease;
}

button[type="submit"]:hover {
    background-color: #3182ce;
}

button[type="submit"]:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.5);
}

/* Error state styles for form validation */
input.error,
select.error {
    border-color: #fc8181;
}

.error-message {
    color: #e53e3e;
    font-size: 0.875rem;
    margin-top: 0.5rem;
}
</style>