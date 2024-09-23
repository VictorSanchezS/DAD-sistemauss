<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
</head>

<body>
    <h1>New Category</h1>
    <br>
    <form action="{{ route('categories.store') }}" method="post">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name">
        <br><br>
        <label for="">Description</label>
        <textarea name="description" cols="30" rows="10"></textarea>
        <br><br>
        <button type="submit">Save</button>
    </form>

</body>

</html>
