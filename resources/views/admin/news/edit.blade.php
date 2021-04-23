<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>MyNews</title>
    </head>
    <body>
        <!-- layouts/admin.blade.phpを読み込む -->
        @extends('layouts.admin')
        <!-- admin.blade.phpに'ニュースの編集'を埋め込む -->
        @section('title', 'ニュースの編集')
        <!-- admin.blade.phpに以下のタグを埋め込む -->
        @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <h2>ニュース編集</h2>
                    <form action="{{ action('Admin\NewsController@update') }}" method="post" enctype="multipart/form-data">
                        @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                        @endif
                        <div class="form-group row">
                            <label class="col-md-2" for="title">タイトル</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="title" value="{{ $news_form->title }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="body">本文</label>
                            <div class="col-md-10">
                                <textarea class="form-control" name="body" rows="20">{{ $news_form->body }}"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2" for="image">画像</label>
                            <div class="col-md-10">
                                <input type="file" class="form-control-file" name="image">
                                <div class="form-text text-info">
                                    設定中: {{ $news_form->image_path }}
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-10">
                                <input type="hidden" name="id" value="{{ $news_form->id }}">
                                {{ csrf_field() }}
                                <input type="submit" class="btn btn-primary" value="更新">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection
    </body>
</html>