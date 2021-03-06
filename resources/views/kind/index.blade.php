@extends('layouts.app')

@foreach($breadcrumb as $item)
    @if($item['href'] === '')
        @section('title', $item['name'])
    @endif
@endforeach





@section('contents')
<a class="btn btn-primary" href="{{config('consts.kind.KIND_PATH')}}/create" role="button">新規登録</a>
<table class="table">
<thead class="table-dark">
  <th>ID</th>
  <th>NAME</th>
  <th>KANA</th>
  <th>Create Data</th>
  <th>Update Data</th>
</thead>
<tbody>
  @foreach($items as $item)
  <tr>
    <td>{{$item->kind_id}}</td>
    <td><a href="{{config('consts.kind.KIND_PATH')}}/{{$item->kind_id}}/edit">{{$item->name}}</a></td>
    <td>{{$item->kana}}</td>
    <td>{{$item->create_date}}</td>
    <td>{{$item->update_date}}</td>
    <td><a class="btn btn-primary" href="{{route('kind.show', $item->kind_id)}}" role="button">削除</a></td>
  </tr>
  @endforeach
</tbody>

</table>
@endsection
