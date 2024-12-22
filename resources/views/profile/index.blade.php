<x-master title="profiles">
    <a class="btn btn-primary m-3" href="{{ route('create')}}">Add Profil</a>
    <table class='table table-striped table-light'>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Bio</th>
            <th>Action</th>
        </tr>
        @foreach($profiles as $profil)
            <tr>
                <td>{{$profil->id}}</td>
                <td>{{Str::limit($profil->name,10)}}</td>
                <td>{{$profil->email}}</td>
                <td>{{Str::limit($profil->bio,10,'...')}}</td>
                <td><a class='btn btn-primary' href='{{ route('profiles.show', $profil->id) }}'>view</a></td>
            </tr>
        @endforeach
       
    </table>
    {{ $profiles->links() }}
</x-master>