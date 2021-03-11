@extends('layouts.app')


@foreach($breadcrumb as $i)
    @if($i['href'] === '')
        @section('title', $i['name'])
    @endif
@endforeach




@section('contents')
<form method="POST" action="/kind/{{$item->kind_id}}">
    @csrf
    @method('DELETE')
    <table class="table">
      <tr>
          <th scope="row">NAME</th>
          <td>
              <input type="text" name="name" maxlength="20" tabindex="1" value="{{$item->name}}">
          </td>
      </tr>
      <tr>
          <th scope="row">KANA</th>
          <td>
              <input type="text" name="kana" maxlength="20" tabindex="1" placeholder="最大50文字" value="{{$item->kana}}">
          </td>
      </tr>
    </table>
    <input type="submit" value="削除" tabindex="3" class="btn btn-primary btn-sm">
</form>
@endsection
