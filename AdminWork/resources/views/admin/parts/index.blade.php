<x-home-master>
    @section('content')

    <h2>Добавяне на част</h2>

    <form method="post" action="{{ route('parts.store') }}" >
            @csrf
            <div class="form-group">
                <label for="title">Име</label>
                <input type="text" name="name" class="form-control" id="title" placeholder="Enter title">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <br>

    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Списък със части
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($parts as $part)
                    <tr>
                    <td>{{ $part->name }}</td>
                    <td><form method="post" action="{{ route('parts.destroy',$part->id) }}" >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>




    @endsection
</x-home-master>
