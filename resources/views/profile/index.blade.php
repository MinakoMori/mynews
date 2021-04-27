<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Myプロフィール</title>
    </head>
    <body>
        @extends('layouts.front')
        
        @section('content')
        <div class="container">
            <!-- <hr color="#c0c0c0"> -->
            @if (!is_null($headline))
            <div class="row">
            <div class="headline col-md-10 mx-auto">
                <div /*class="row"*/>
                    <div class="col-md-6">
                        <div class="caption mx-auto">
                            <div class="title p-2">
                                <h1>{{ str_limit($headline->name, 20) }}</h1>
                            </div>
                            <div class="title p-2">
                                <p>{{ str_limit($headline->gender, 20) }}</p>
                            </div>
                            <div class="title p-2">
                                <p>{{ str_limit($headline->hobby, 200) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p class="body mx-auto">{{ str_limit($headline->introduction, 1000) }}</p>
                    </div>
                </div>
            </div>
            </div>
            @endif
        </div>
        </div>
        @endsection
    </body>
</html>