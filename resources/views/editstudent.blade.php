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
<h2>edit student</h2>
<form action="{{route('updatestudents',$student->id)}}" method="post">
    @csrf
    @method('put');
  <label for="fname">name:</label><br>
  <input type="text" id="name" name="name" value="{{$student->name}}" class="form-control"><br>
  <label for="phone">age:</label><br>
  <input type="text" id="age" name="age" value="{{$student->age}}" class="form-control"><br><br>
  <input type="submit" value="Submit">
</form> 
{{-- <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p> --}}
</body>
</html>

