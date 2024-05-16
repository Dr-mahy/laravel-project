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
        <li class="active"><a href="{{route('addclient')}}">edit</a></li>
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

<form action="{{route('updateclient',$client->id)}}" method="post">
    @csrf
    @method('put');
  <label for="fname">First name:</label><br>
  <input type="text" id="name" name="clientname"  class="form-control" value="{{$client->clientname}}"><br>
  <label for="phone">phone:</label><br>
  <input type="text" id="phone" name="phone" class="form-control" value="{{$client->phone}}"><br><br>
  <label for="email">email:</label><br>
  <input type="text" id="email" name="email"  class="form-control" value="{{$client->email}}"><br><br>
  <label for="website">site:</label><br>
  <input type="text" id="name" name="website"  class="form-control" value="{{$client->website}}"><br><br>


  <input type="submit" value="Submit">
</form> 

{{-- <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p> --}}

</body>
</html>

