@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">


                    @if(count($polls) > 0)
                        <table class="table">
                            <thead>
                            <tr>
                                <h1 class="text-center">No Polls</h1>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($polls as $poll)





                                <tr>
                                    <td>{!! $poll->id !!}</td>
                                    <td><a href="{!! route('poll.list',$poll->id) !!}">{!! $poll->question !!}</a></td>

                                </tr>
                            @endforeach
                            @else
                                <h1 class="text-center">No Polls</h1>

                            @endif

                            </tbody>
                        </table>



                        </body>
                        </html>

                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
