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

<h2>Shair Table</h2>
{{-- <a href="{{route('shair.create')}}">Add New Shair</a>
<div class="row">
    <div class="left" style="background-color:#bbb;">
      <h2>Menu</h2>
      <form method="GET" action="{{route('search')}}">
        @csrf
      <input type="text"  placeholder="Search.." name="search">
      <input type="submit"  value="seach">
      </form> --}}
    </div>
<table>
    <th>Sno.</th>
<th>Book name</th>
<th>Auther name</th>
<th>Shair</th>
@foreach ( $records as $key=> $record)
<tr>
    <td>
    <b>{{$key}}</b>
    </td>
    <td>
        {{$record->books->book_name}}
        </td>
        <td>{{$record->author_name}}</td>
    <td id="myMenu">
     {{$record->shair}}
    </td>
  </tr>
@endforeach



</table>



</body>
</html>

