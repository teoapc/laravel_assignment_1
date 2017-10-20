@extends('master')

@section('title', $ticket_info->user_ticket_id)

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                {{--<div class="panel-heading">--}}
                    {{--#{{ $ticket_info->user_ticket_id }} - {{ $ticket_info->software_issue }}--}}
                {{--</div>--}}

                <div class="panel-body">

                    <div class="ticket-info">
                        <p>Submitted on: {{ $ticket_info->created_at }}</p>
                        <p>Status:
                            @if($ticket_info->status === 'Pending')
                                <span class="label label-warning">{{$ticket_info->status}}</span>
                            @elseif($ticket_info->status === 'Unresolved')
                                <span class="label label-danger">{{$ticket_info->status}}</span>
                            @elseif($ticket_info->status === 'Resolved')
                                <span class="label label-success">{{$ticket_info->status}}</span>
                            @elseif($ticket_info->status === 'In Progress')
                                <span class="label label-info">{{$ticket_info->status}}</span>
                            @endif
                        </p>
                        <p>Operating system: {{$ticket_info->operating_system}}</p>
                        <p>Software issue: {{$ticket_info->software_issue}}</p>
                        <p>Description: {{$ticket_info->description}}</p>
                        <p>
                            <a href="{{url('api/issue/customer/'.$ticket_info->user_ticket_id.'/comments')}}">Comments</a>
                        </p>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
@endsection