@props(['profile'])

<div>
    <div class="card text-center">
        <div class="card-header">
            <h1>Profile Details</h1>
        </div>
        <div class="card-body">
            <h4 class="card-title">
                <p>Name: {{ $profile->name }}</p>
            </h4>
            <p class="card-text">
                <p>Email: {{ $profile->email }}</p>
                <p>Bio: {{ $profile->bio }}</p>
            </p>
        </div>
    </div>
</div>
