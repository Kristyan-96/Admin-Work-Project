<x-home-master>
@section('content')

<h4>Тема</h4>
<div class="alert alert-success">{{$case->theme}}</div>
<h4>Собственик</h4>
<div class="alert alert-success">{{$case->owner}}</div>
<h4>Номер на машина</h4>
<div class="alert alert-success">{{$case->machine_number}}</div>
<h4>Сменени части</h4>
<div class="alert alert-success">{{$case->parts}}</div>
<h4>Извършени ремонти</h4>
<div class="alert alert-success">{{$case->repair_description}}</div>

@endsection
</x-home-master>
