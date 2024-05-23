<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
<h2 style="text-align: center">insert client</h2>

<form class="container" action="{{route('insertclient')}}" method="post" enctype="multipart/form-data">
    @csrf
  <label for="fname">First name:</label><br>
      @error('clientname')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
  <input type="text" id="fname" name="clientname" value="{{old('clientname')}}" class="form-control"><br>
  <label for="phone">phone:</label><br>
      @error('phone')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
  <input type="text" id="phone" name="phone" value="{{old('phone')}}" class="form-control"><br><br>
  <label for="email">email:</label><br>
      @error('email')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
  <input type="text" id="email" name="email" value="{{old('email')}}" class="form-control"><br><br>
  <label for="website">site:</label><br>
      @error('website')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
  <input type="text" id="lname" name="website" value="{{old('website')}}" class="form-control"><br><br>
  <label for="city">City:</label><br>
      @error('city')
      <div class="alert alert-danger">{{$message}}</div>
      @enderror
    <select name="city" id="city" class="form-control">
      <option value="">Please Select City</option>
      <option value="cairo"{{ old('city') == 'cairo' ? 'selected' : '' }}>Cairo</option>
      <option value="Giza"{{ old('city') == 'Giza' ? 'selected' : '' }}>Giza</option>
      <option value="Alex"{{ old('city') == 'Alex' ? 'selected' : '' }}>Alex</option>
    </select>
    <br><br>
    <label for="active">Active:</label>
    <input type="checkbox" id="active" name="active" {{ old('active') ? 'checked' : '' }}><br><br>

    <label for="img">img:</label><br>
    <input type="file" id="img" name="img" class="form-control" {{ old('img') }}><br><br>


  <input type="submit" value="Submit">
</form> 
{{-- 
<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p> --}}

</body>
</html>

