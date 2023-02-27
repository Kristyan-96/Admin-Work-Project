<x-home-master>
    @section('content')

    <table class="graph">
        <caption>Годишен резултат</caption>
        <thead>
            <tr>
                <th scope="col">Item</th>
                <th scope="col">Percent</th>
            </tr>
        </thead><tbody>
            @foreach ($CountMonthCases as $CountMonthCase)
                <tr style="height:{{ $CountMonthCase['count'] }}%">
                    <th scope="row">{{ $CountMonthCase['month'] }}</th>
                    <td><span>{{ $CountMonthCase['count'] }}</span></td>
                </tr>
             @endforeach
        </tbody>
    </table>
    {{-- {{ dd($CountMonthCase['count']); }} --}}
    @endsection
</x-home-master>
