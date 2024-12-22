@props(['users'])
<div>
    <h1>Home</h1>
    <table class="table table-stripped-light">
       <tr>
           <th>Id</th>
           <th>Nom</th>
           <th>Métier</th>
       </tr>
       @foreach($users as $user)
           <tr>
               <td>{{$user['id']}}</td>
               <td>{{$user['nom']}}</td>
               <td>{{$user['metier']}}</td>
           </tr>
       @endforeach
    </table>
</div>