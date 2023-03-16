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


    <h4 class="text-center">Sửa thông tin</h4>
    
    <div class="container">
        <div class="col-12 col-lg-12 d-flex">
            <div class="card border shadow-none w-100">
                <div class="card-body">
                    <form class="row g-3" action="{{route('book.update',$books->id)}}" method='POST'>
                        @method('PUT')
                        @csrf
                        <div class="col-12">
                            <label class="form-label">Tên sách</label>
                            <input type="text" class="form-control" name="name" value="{{$books->name}}">
                            @error('name')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label">ISBN</label>
                            <input type="text" class="form-control" name="ISBN" value="{{$books->ISBN}}">
                            @error('ISBN')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror
                                <div class="col-12">
                            <label class="form-label">Số trang</label>
                            <input type="text" class="form-control" name="pages" value="{{$books->pages}}">
                            @error('pages')
                            <div class="text text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-12">
                                <label class="form-label">Tác giả</label>
                                <input type="text" class="form-control" name="author" value="{{$books->author}}">
                                @error('name')
                                <div class="text text-danger">{{ $message }}</div>
                                @enderror

                                <label for="">--Chọn thể loại--</label>
                                <div><select name=" category">
                                        <option>Truyện Trinh Thám</option>
                                        <option>Truyện Ngắn</option>
                                        <option>Thơ</option>
                                        <option>Truyện ngôn tình</option>
                                        <option>Truyện tình yêu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Năm xuất bản</label>
                                <input type="date" class="form-control" name="year" value="{{$books->year}}">
                                @error('year')
                                <div class="text text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Sửa</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>