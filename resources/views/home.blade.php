@extends('layouts.app')

@section('content')
<div class="container" style="">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Twoje UUID to: {{ Auth::user()->uuid }} </br>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
    </script>
@endsection