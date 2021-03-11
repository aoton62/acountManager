@extends('layouts.app')


@foreach($breadcrumb as $i)
    @if($i['href'] === '')
        @section('title', $i['name'])
    @endif
@endforeach




@section('contents')
<form method="POST" action="/kind/{{$item->kind_id}}">
    @csrf
    @method('PUT')
    <table class="table">
      <tr>
          <th scope="row">NAME</th>
          <td>
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" maxlength="20" tabindex="1" placeholder="最大20文字" value="{{$item->name}}">
              @error('name')
              <span class="invalid-feedback">{{$message}}</span>
              @enderror
          </td>
      </tr>
      <tr>
          <th scope="row">KANA</th>
          <td>
              <input type="text" name="kana" class="form-control @error('kana') is-invalid @enderror" maxlength="20" tabindex="1" placeholder="最大50文字" value="{{$item->kana}}">
              @error('kana')
              <span class="invalid-feedback">{{$message}}</span>
              @enderror
          </td>
      </tr>
    </table>
    <input type="submit" value="編集" tabindex="3" class="btn btn-primary btn-sm">
</form>
@endsection
