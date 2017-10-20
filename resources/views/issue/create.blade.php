@extends('master')
@section('title', 'Report Issue')
@section('content')
    <div class="container">
        <div class="box-container">
        <div class="content">
            <center>
                <div class="title">
                    <h1>Report an Issue</h1>
                </div>
            </center>
        </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There was an error with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
            @if (session('alert'))
                <div class="alert alert-success">
                    {{ session('alert') }}
                </div>
            @endif
    {!! Form::model($ticket, ['action' => 'TicketController@store']) !!}
            {{--{{csrf_token()}}--}}
    <div class="form-group">
        {!! Form::label('user_first_name', 'Personal Details: ') !!}
    <br>
    <br>
        {!! Form::text('user_first_name', '', ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
    <br>
        {!! Form::text('user_last_name', '', ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
    <br>
        {!! Form::email('user_email', '', ['class' => 'form-control', 'placeholder' => 'E-mail Address']) !!}
    <br>
        {!! Form::text('operating_system', '', ['class' => 'form-control', 'placeholder' => "Your device's operating system"]) !!}
    <br>
        {!! Form::text('software_issue', '', ['class' => 'form-control', 'placeholder' => 'Short description of software issue']) !!}
    <br>
        <div class="desc-box">
            {!! Form::textarea('description', '', ['placeholder' => 'Enter the details of your issue here', 'class' => 'form-control', 'row'=>'5']) !!}
        </div>
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
    </div>
    @if (session('alert'))
        <div class="alert alert-success">
            {{ session('alert') }}
        </div>
    @endif
    {!! Form::close() !!}
@endsection