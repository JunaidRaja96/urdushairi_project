<!DOCTYPE html>
<html>

<body>

    <h2>Forms</h2>

    <form method="POST" action="{{ route('shair.store') }}">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="author_name"><br>
        <label for="book">Book name:</label><br>
        <select name="book_id">
            <option>Select Book Name</option>
            @foreach ($records as $record)
                <option value="{{ $record->id }}">{{ $record->book_name }}</option>
            @endforeach
        </select><br>
        <label for="name">Shair:</label><br>
        <textarea name="shair" rows="4" cols="50"></textarea><br>
        <label>Date</label>
        <input type="date" id="date" name="date"><br><br>

        <input type="submit" value="Submit">
    </form>

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>

</html>
