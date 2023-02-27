<x-home-master>
    @section('content')

        <div class="card mb-10">
            @if (session('case-deleted'))
                <div class="alert alert-success">{{session('case-deleted')}}</div>
            @endif
            <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example

                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>Theme</th>
                                <th>Machine number</th>
                                <th>Owner</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Delete</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Theme</th>
                                <th>Machine number</th>
                                <th>Owner</th>
                                <th>Created at</th>
                                <th>Updated at</th>
                                <th>Delete</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($cases as $case)
                                <tr>
                                <td><a href="{{route('cases.view', $case->id)}}">{{$case->theme}}</a></td>
                                <td>{{$case->machine_number}}</td>
                                <td>{{$case->owner}}</td>
                                <td>{{$case->created_at->diffForHumans()}}</td>
                                <td>{{$case->updated_at->diffForHumans()}}</td>
                                <td><form method="post" action="{{route('cases.destroy', $case->id)}}" >
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
