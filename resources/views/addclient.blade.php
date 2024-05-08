<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="{{route('insertclient')}}" method="post">
    @csrf
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="clientname" value="John"><br>
  <label for="phone">phone:</label><br>
  <input type="text" id="phone" name="phone" value="Doe"><br><br>
  <label for="email">email:</label><br>
  <input type="text" id="email" name="email" value="Doe"><br><br>
  <label for="website">site:</label><br>
  <input type="text" id="lname" name="website" value="Doe"><br><br>


  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

