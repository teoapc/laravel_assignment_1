@extends('master')

@section('title', 'My Open Tickets')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-ticket">My Open Tickets</i>
                </div>
                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Ticket</th>
                            <th>Status</th>
                            <th>Submitted On</th>
                        </tr>
                        @foreach($ticket_info as $ticket)
                            @if($ticket->status === 'Pending' || $ticket->status === 'In Progress')
                                <tr>
                                    <td>
                                        <a href="{{url('api/issue/customer/'.$ticket->user_ticket_id)}}">
                                            {{ $ticket->user_ticket_id }} - {{$ticket->software_issue}}</a>
                                    <td>
                                        @if($ticket->status === 'Pending')
                                            <span class="label label-warning">{{ $ticket->status }}</span>
                                        @elseif($ticket->status === 'In Progress')
                                            <span class="label label-info">{{ $ticket->status }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $ticket->created_at}}</td>
                                </tr>
                            @endif
                        @endforeach
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection