@extends('layouts.app')


@section('content')
<div class="container"> 
      <div class="row">
      <div class="col-xs-12"></div> 
      <div class="col-sm-offset-2 col-sm-8"></div>
      <div class="col-md-offset-2 col-md-8"></div> 
      <div class="col-lg-offset-3 col-sm-8"></div>

  <h1>タスク新規作成ページ</h1>

    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}

      <div class="form-group">
        {!! Form::label('status', 'タイトル:') !!}
        {!! Form::text('status', null, ['class' => 'form-control']) !!}
      </div>
      
      <div class="form-group">
        {!! Form::label('content', 'タスク:') !!}
        {!! Form::text('content', null, ['class' => 'form-control']) !!}
      </div>

        {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
    @endsection
       </div>     
    </div> 
        
