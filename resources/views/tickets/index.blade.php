@extends('tickets.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>tickets </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tickets.create') }}"> Create New Ticket</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($tickets as $ticket) <!-- Cambio de $products a $tickets -->
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $ticket->name }}</td>
            <td>{{ $ticket->detail }}</td>
            <td>
                <form action="{{ route('tickets.destroy',$ticket->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('tickets.show',$ticket->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('tickets.edit',$ticket->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $tickets->links() !!}

@endsection
