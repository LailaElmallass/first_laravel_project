<x-master title="Add Profile">
    <h2>Add Profile</h2>
    
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

    <form method="POST" action="{{ route('store') }}">
         @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control"  value="{{ old('name') }}"/>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" />
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}" />
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password" class="form-control" value="{{ old('password_confirmation') }}" />
        </div>

        <div class="mb-3">
            <label for="bio" class="form-label">Bio</label>
            <textarea name="bio" id="bio" class="form-control">{{ old('bio') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</x-master>
