
<h1>Detail</h1>


<table>
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Action</th>

    </tr>
    <tr>
      <td>{{ $category->name }}</td>
      <td>{{ $category->description }}</td>
      <td>
        <a href="{{ route('categories.edit', $category->id) }}">
          Edit
        </a>
      </td>

    </tr>
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
</style>