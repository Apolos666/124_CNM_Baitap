<h1>Create Category</h1>

<form action="{{ route('categories.store') }}" method="POST">
    @method('PUT')
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
    </div>

    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4"></textarea>
    </div>
    <button type="submit">Create Category</button>
</form>

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

/* Input and textarea styles */
input[type="text"],
textarea {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #e2e8f0;
    border-radius: 4px;
    font-size: 1rem;
    transition: border-color 0.2s ease;
    background-color: #f8fafc;
}

input[type="text"]:focus,
textarea:focus {
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
textarea.error {
    border-color: #fc8181;
}

.error-message {
    color: #e53e3e;
    font-size: 0.875rem;
    margin-top: 0.5rem;
}
</style>