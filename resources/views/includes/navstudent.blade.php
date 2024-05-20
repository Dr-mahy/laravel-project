<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">students</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="{{request()->is('addstudent') ? 'active' :''}}"><a href="{{route('addstudent')}}">add student</a></li>
        <li class="{{request()->is('students') ? "active" : ''}}"><a href="{{route('students')}}">students</a></li>
        <li class="{{request()->is('trashstudents') ? "active" : ''}}"><a href="{{route('trashstudents')}}">trash</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </div>
  </nav>