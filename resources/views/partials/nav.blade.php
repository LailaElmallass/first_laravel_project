
  <!-- As a heading -->
  <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Social network</span>
    <ul class="d-flex my-2" style="list-style-type: none">
        <li class="nav-item m-2"><a class="nav-link" href="{{route('home.index')}}">Home</a></li>
        <li class="nav-item m-2"><a class="nav-link" href="{{route('profiles.index')}}">All Profils</a></li>
        <li class="nav-item m-2"><a class="nav-link" href="{{route('informations.index')}}">informations</a></li>
    </ul>
    
    <span><a href="{{route('login.show')}}" class="m-4"><i class="fa fa-user"></i></a></span>
    
    @auth

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        {{ auth()->user()->name}}
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a href="{{route('login.logout')}}" class="dropdown-item"><i class="fa fa-sign-out"></i></a>Logout</li>
      </ul>
    </div>
    
    @endauth  
    
  </nav>
{{-- @once
<script>
    alert('include navigation')
</script>
@endonce --}}
