<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Show Mentors') }}
        </h2>
    </x-slot>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
        <div class="card-header">{{ $mentor->name }}</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('images/'.$mentor->photo) }}" width="150">
                </div>
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $mentor->name }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="profession">Profession</label>
                        <input type="text" class="form-control" id="profession" name="profession" value="{{ $mentor->profession }}" disabled>
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" disabled>{{ $mentor->description }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</x-app-layout>