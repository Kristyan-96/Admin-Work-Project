<x-home-master>
    @section('content')


    <h1>Create</h1>

    <form method="post" action="{{ route('machines.store') }}" >
            @csrf
            <div class="form-group">
                <label for="title">Модел</label>
                <input type="text" name="model" class="form-control" id="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="title">Номер</label>
                <input type="text" name="number" class="form-control" id="title" placeholder="Enter title">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>



    @endsection
</x-home-master>
