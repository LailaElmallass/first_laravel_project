<x-master title="Login" >
    <div class="m-5">


    <form method="POST" action="{{ route('login') }}" class="m-5">
        @csrf

        @if($errors->any())
        <x-alert type="danger">
            <h6>Errors:</h6>
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </x-alert>
        @endif
        
         <h2 class="text-center">Login</h2>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" />
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}" />
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-primary ">Login</button>
        </div>
    </form>
    </div>
</x-master>
