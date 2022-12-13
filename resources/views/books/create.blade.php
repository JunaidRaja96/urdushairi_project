<!DOCTYPE html>
<html>
<body>

<h2>Forms</h2>

<form method="POST" action="{{route('book.store')}}">
    @csrf
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="author_name"><br>
  <label for="book">Book name:</label><br>
  <input type="text" id="book" name="book_name"><br><br>
  <input type="submit" value="Submit">
</form>

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>
