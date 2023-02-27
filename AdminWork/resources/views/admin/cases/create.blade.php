<x-home-master>
    @section('content')
    @if (session('case-created'))
    <div class="alert alert-success">{{session('case-created')}}</div>
    @elseif (session('case-not-created'))
    <div class="alert alert-danger">{{session('case-not-created')}}</div>
    @endif
    <h1>Create</h1>

    <form method="post" action="{{ route('cases.store') }}" >
            @csrf
            <div class="form-group">
                <label for="title">Тема</label>
                <input type="text" name="theme" class="form-control" id="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="title">Собственик на Случай</label>
                <input type="text" name="owner" value="{{ auth()->user()->name }}" class="form-control" id="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="title">Номер на машина</label>
                <input type="text" name="machine_number" class="form-control" id="title" placeholder="Enter title">
            </div>


            <div class="row d-flex justify-content-center mt-100">
                <div class="col-md-6"> <select name="parts[]" id="choices-multiple-remove-button" placeholder="Сменени части" multiple>
                    @foreach ($parts as $part)
                    <option value="{{ $part->name }}">{{ $part->name }}</option>
                    @endforeach
                    </select> </div>
            </div>

            <div class="row d-flex justify-content-center mt-100">
                <div class="col-md-6"> <select name="repair_description[]" id="choices-multiple-remove-button" placeholder="Извършени ремонти" multiple>
                        <option value="HTML">HTML</option>
                        <option value="Jquery">Jquery</option>
                        <option value="CSS">CSS</option>
                    </select> </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>



    @endsection
</x-home-master>
