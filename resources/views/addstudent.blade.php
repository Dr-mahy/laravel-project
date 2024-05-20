<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
<body>
@include('includes.navstudent');
<h2>HTML Forms</h2>
<form action="{{route('studentdata')}}" method="post">
    @csrf
  <label for="fname">name:</label><br>
  <p style="color:darkmagenta">
    @error('name')
    {{$message}}
    @enderror
  <input type="text" id="name" name="name" value="John" class="form-control"><br>
  <label for="phone">age:</label><br>
  <p style="color:darkmagenta">
    @error('phone')
    {{$message}}
    @enderror
  <input type="text" id="age" name="age" value="Doe" class="form-control"><br><br>
  <input type="submit" value="Submit">
</form> 
{{-- <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p> --}}
</body>
</html>

