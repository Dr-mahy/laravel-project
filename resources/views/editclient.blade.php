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

<form action="{{route('updateclient',$client->id)}}" method="post" >
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
  <label for="city">City:</label><br>
      @error('city')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    <select name="city" id="city" class="form-control">
      <option value="">Please Select City</option>
      <option value="cairo" {{ $client->city||old('cairo')== "cairo" ? "selected" : "''" }}>Cairo</option>
      <option value="Giza" {{ $client->city||old('Giza')== 'Giza' ? 'selected' : "''" }}>Giza</option>
      <option value="Alex" {{ $client->city||old('Alex')== 'Alex' ? 'selected' : "" }}>Alex</option>
    </select>
    <br><br>
    <label for="active">Active:</label>
    <input type="hidden" value="0" name="active" >
    <input type="checkbox" id="active" name="active" value='1'{{$client->active||old('active')==1 ? "checked":"" }}><br><br>

    <label for="img">img:</label><br>
    <p><img  style="width:200px"src="{{asset('assets/img/' . $client->img)}}" alt=""></p>
    <input type="file" id="img" name="img" class="form-control" {{ old('img') }}><br><br>


  <input type="submit" value="Submit">
</form> 

{{-- <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p> --}}

</body>
</html>

