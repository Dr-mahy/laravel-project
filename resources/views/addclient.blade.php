<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">clients</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('addclient')}}">add</a></li>
        <li ><a href="{{route('clients')}}">clients</a></li>
        {{-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a> --}}
          {{-- <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul> --}}
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </div>
  </nav>
<h2>HTML Forms</h2>

<form action="{{route('insertclient')}}" method="post">
    @csrf
  <label for="fname">First name:</label><br>
  <p style="color:darkmagenta">
  @error('clientname')
  {{$message}}
  @enderror
  <p >
  <input type="text" id="fname" name="clientname" value="John" class="form-control"><br>
  <label for="phone">phone:</label><br>
  <p>
    @error('phone')
    {{$message}}
    @enderror
    <p>
  <input type="text" id="phone" name="phone" value="Doe" class="form-control"><br><br>
  <label for="email">email:</label><br>
  <p>
    @error('email')
    {{$message}}
    @enderror
    <p>
  <input type="text" id="email" name="email" value="Doe" class="form-control"><br><br>
  <label for="website">site:</label><br>
  <p>
    @error('website')
    {{$message}}
    @enderror
    <p>
  <input type="text" id="lname" name="website" value="Doe" class="form-control"><br><br>


  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>

