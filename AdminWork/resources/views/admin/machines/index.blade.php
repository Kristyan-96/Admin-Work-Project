<x-home-master>
@section('content')

    <div class="card mb-10">
        @if (session('machine-exist'))
                <div class="alert alert-danger">{{session('machine-exist')}}</div>
                @elseif (session('machine-created'))
                <div class="alert alert-success">{{session('machine-created')}}</div>
                @endif

        @if (session('machine-deleted'))
            <div class="alert alert-success">{{session('machine-deleted')}}</div>
        @endif
        <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example

            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>Model</th>
                            <th>Number</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Model</th>
                            <th>Number</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>


                            @foreach ($machines as $machine)
                            <tr>
                            <td>{{ $machine->model }}</td>
                            <td>{{ $machine->number }}</td>
                            <td><form method="post" action="{{route('machines.destroy', $machine->id)}}" >
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
