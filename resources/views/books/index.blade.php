<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>

<body>

    <h2 class="offset-4">Danh mục sách</h2>
    <div class="container">
        <table class="table">
            <div class="col-6">
                <a class="btn btn-warning" href="{{ route('book.create')}}">Thêm Sách</a>
                @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                            @endif
                @csrf

                @if (session('error'))
            <div class="alert alert-danger" role="alert">
              {{ session('error') }}
            </div>
            @endif
                <div class="row" style="margin-bottom: 10px;">
                </div>
                <form class="navbar-form navbar-left" action="{{route('book.search')}}" method="GET">

                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <input type="text" name="search" class="form-control" placeholder="Search">
                            </div>
                        </div>

                        <div class="col-4">
                            <button type="submit" class="btn btn-success">Tìm kiếm</button>
                        </div>
                    </div>
                </form>
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên sách</th>
                        <th scope="col">ISBN</th>
                        <th scope="col">Tác giả</th>
                        <th scope="col">Năm xuất bản</th>
                        <th scope="col">Hành động</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    @foreach ($books as $key => $item)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->ISBN }}</td>
                        <td>{{ $item->author }}</td>
                        <td>{{ $item->year }}</td>
                        <td>
                            <form action="{{ route('book.delete', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="{{route('book.edit',[$item->id])}}" class="btn btn-warning">Sửa</a>
                                <button type="submit" class="btn btn-danger">Xoá</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
        {{$books->appends(request()->query())}}
    </div>
</body>

</html>