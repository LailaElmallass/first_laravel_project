
  <!-- As a heading -->
  <nav class="navbar navbar-light bg-light">
    <span class="navbar-brand mb-0 h1">Social network</span>
    <ul class="d-flex" style="list-style-type: none">
        <li class="nav-item m-2"><a class="nav-link" href="{{route('home.index')}}">Home</a></li>
        <li class="nav-item m-2"><a class="nav-link" href="{{route('profiles.index')}}">All Profils</a></li>
        <li class="nav-item m-2"><a class="nav-link" href="{{route('informations.index')}}">informations</a></li>
    </ul>
  </nav>
{{-- @once
<script>
    alert('include navigation')
</script>
@endonce --}}
