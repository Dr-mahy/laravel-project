
<!DOCTYPE html>
<html lang="en">
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
<div class="container">
  <h2>student Table</h2>
  {{-- <p>The .table-bordered class adds borders to a table:</p>             --}}
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>student name</th>
        <th>age</th>
        <th>restore</th>
        <th>show</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
     @foreach($trashed as $student)
      <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->age}}</td>
        <td><a href="{{route('restorestudents',$student->id)}}">restore</a></td>
        <td><a href="{{route('showstudents',$student->id)}}">show</a></td>
          <td>
            <form action="{{route('forcedelstudents',$student->id)}}" method="post">
              @csrf
              @method('delete')
              <input type="hidden" value="{{$student->id}}" name="id">
              <input type="submit" value="Delete" onclick="return confirm('are you sure you want to delete this client')">
            </form>
          </td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>