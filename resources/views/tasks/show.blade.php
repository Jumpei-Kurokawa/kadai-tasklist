@extends('layouts.app')


@section('content')

<div class="container"> 
      <div class="row">
      <div class="col-xs-12"></div> 
      <div class="col-sm-offset-2 col-sm-8"></div>
      <div class="col-md-offset-2 col-md-8"></div> 
      <div class="col-lg-offset-3 col-sm-8"></div>
    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>
    
　　<table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タイトル</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>

    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-default']) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
    @endsection
    </div>
    </div>
