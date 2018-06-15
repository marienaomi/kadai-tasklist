@extends('layouts.app')

@section('content')

 <h1>id = {{ $task->id }} のタスク詳細ページ</h1>
 
 <table>
     <tr>
         <th>id</th>
         <td>{{ $task->status }}</td>
     </tr>
     
     <tr>
         <th>タスク</th>
         <td>{{ $task->content }}</td>
     </tr>
     
     <tr>
         <th>ステータス</th>
         <td>{{ $task->status }}</td>
     </tr>
 </table>

    
    <br>
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-info']) !!}
    <br>
    <br>

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
<!-- Write content for each page here -->

@endsection