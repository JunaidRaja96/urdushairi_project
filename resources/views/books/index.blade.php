<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Book Table</h2>
<a href="{{route('book.create')}}">Add New Book</a>
<table>
  <tr>
    <th>Name</th>
    <th>Book Name</th>

  </tr>
@foreach ( $records as  $record)
<tr>
    <td>{{$record->author_name}}</td>
    <td>{{$record->book_name}}</td>
  </tr>
@endforeach



</table>

</body>
</html>

