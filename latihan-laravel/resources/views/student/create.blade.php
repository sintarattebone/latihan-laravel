<x-app>
    <div>
        <h1>Create Student</h1>
    </div>

    <form method="POST" action="{{ route('student.store') }}">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"name="name">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">Nim</label>
            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim"name="nim">
            @error('nim')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn-solid theme-primary">Submit</button>
    </form>

    <a class="btn btn-warning" href="/student" role="button">Back</a>
</x-app>
