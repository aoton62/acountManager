<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title') - {{config('consts.common.ROOT_NAME')}}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{config('consts.common.ROOT_PATH')}}css/style.css">

</head>
<body>
<div class="container-lg">
  <header class="row">
    <div class="col">
      <a href="{{config('consts.common.ROOT_PATH')}}" class="header-logo">
        <img src="{{config('consts.common.ROOT_PATH')}}images/logo.png" alt="Account Manager">
      </a>
    </div>
  </header>
  <div class="row">
    <nav class="col" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{config('consts.common.ROOT_PATH')}}">{{config('consts.common.ROOT_NAME')}}</a></li>
        @foreach($breadcrumb as $item)
            @if($item['href'] !== '')
                <li class="breadcrumb-item"><a href="{{$item['href']}}">{{$item['name']}}</a></li>
            @else
                <li class="breadcrumb-item active" aria-current="page">{{$item['name']}}</li>
            @endif
        @endforeach
      </ol>
    </nav>
  </div>
  <div class="row">
    <nav class="col-2">
        <a class="btn btn-outline-primary" href="{{config('consts.kind.KIND_PATH')}}" role="button">{{config('consts.kind.KIND_NAME')}}</a>
        <a class="btn btn-outline-primary" href="{{config('consts.category.CATEGORY_PATH')}}" role="button">{{config('consts.category.CATEGORY_NAME')}}</a>
    </nav>
    <main class="col">

      @yield('contents')
    </main>
  </div>
  <footer class="row">
    <div class="col">
      フッター
    </div>
  </footer>

</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
