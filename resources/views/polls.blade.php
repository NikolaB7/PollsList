@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">



                        <table class="table">

                            <tbody>



                                            <h4 align="center">{{ $polls->question }}</h4>
                                    <p align="center">{{Form::radio('answer1')}} {{ $polls->answer1 }}</p>
                                    <p align="center">{{Form::radio('answer2')}} {{ $polls->answer2 }}</p>
                                    <p align="center">{{Form::radio('answer3')}} {{ $polls->answer3 }}</p>
                                    <p align="center">{{Form::radio('answer4')}} {{ $polls->answer4 }}</p>
                                    <p align="center" class="thicker">{{Form::radio('answer5')}} {{ $polls->answer5 }}</p>
                                    <p align="center">{{Form::submit('Vote'), array('class' => 'btn btn-primary') }}</p>








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
