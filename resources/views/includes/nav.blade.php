<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">clients</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="{{request()->is('addclient') ? "active" : ""}}"><a href="{{route('addclient')}}">add</a></li>
        <li class="{{request()->is('clients') ? 'active' : ''}}"><a href="{{route('clients')}}">clients</a></li>
        {{-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a> --}}
          {{-- <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul> --}}
        </li>
        <li class="{{request()->is('trashedclients') ? 'active' : ''}}"><a href="{{route('trashedclients')}}">trash</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </div>
  </nav>