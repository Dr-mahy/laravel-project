<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{route('studentdata')}}" method="post">
    @csrf
  <label for="fname">name:</label><br>
  <input type="text" id="name" name="name" value="John"><br>
  <label for="phone">age:</label><br>
  <input type="text" id="age" name="age" value="Doe"><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

