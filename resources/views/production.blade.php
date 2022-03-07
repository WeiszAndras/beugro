@extends('layouts.app')
@section('content')
<!-- Scripts -->
<div class="container" style="margin-top: 10px">
    <div class="form-group">
        <label for="products">Pcb</label>
        <select class="form-control" id="products">
                <option>All data</option>
            @foreach ($products as $p)
            @foreach ($production as $item)
            @if( $p->id == $item->pcb_id)
                <option value="{{ $p->id }}">{{ $p->pcb }}</option>
            @endif
            @endforeach
            @endforeach
        </select>
    </div>
    <div id="productions">
        <table id="prod" class="table table-hover">
            <tr>
                <td>id</td>
                <td>pcb_id</td>
                <td>quantity</td>
                <td>startDate</td>
                <td>endDate</td>
                <td>delete item</td>
            </tr>
            @foreach ($production as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->pcb_id }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->startDate }}</td>
                <td>{{ $item->endDate }}</td>
                <td><a href = 'delete/{{ $item->id }}'>X</a></td>
            </tr>
            @endforeach
        </table></div>
</div>
@endsection
