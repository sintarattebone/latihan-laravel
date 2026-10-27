<x-app>
    <div>
        <h1>Create Student</h1>
    </div>

    <a class="btn btn-primary mb-3" href="/student/create" role="button">Create Student</a>

    <table class="table table-bordered border-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Nim</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->nim }}</td>
                    <td>
                        <a href="/student/{{ $student->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">
                        Belum ada data mahasiswa.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</x-app>
