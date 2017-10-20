@extends('master')

@section('title', 'Comments')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Comments for <a href="{{url('api/issue/customer/'.$ticket_info->user_ticket_id)}}">{{$ticket_info->user_ticket_id}}</a>
                </div>

                <div class="panel-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Comment</th>
                            <th>Submitted On</th>
                        </tr>
                        @foreach($comment as $comment_info)
                            <tr>
                                @if($comment_info->user_ticket_id === $ticket_info->user_ticket_id)
                                    <td>{{$comment_info->comment}}</td>
                                    <td>{{$comment_info->created_at}}</td>
                                @endif
                            </tr>
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