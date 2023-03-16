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
  <h3>Danh mục sách</h3>
  <h4 style="text-align:center ;font-size:x-large">Thêm sách</h4>
  <div class="container">
    <div class="col-12 col-lg-12 d-flex">
      <div class="card border shadow-none w-100">
        <div class="card-body">
          <form class="row g-3" action="{{route('book.store')}}" method='POST'>
            @csrf
            <div class="col-12">
              <strong class="offset">Tên</strong>
              <input type="text" class="form-control" name="name" placeholder="nhập tên...">
              @error('name')
              <div class="text text-danger">{{ $message}}</div>
              @enderror
            </div>
            <div class="col-12">
              <strong class="offset">ISBN</strong>
              <input type="text" class="form-control" name="ISBN" placeholder="nhập ISBN..">
              @error('ISBN')
              <div class="text text-danger">{{ $message}}</div>
              @enderror
            </div>
            <div class="col-12">
              <strong class="offset">Số trang</strong>
              <input type="text" class="form-control" name="pages" placeholder="nhập trang...">
              @error('pages')
              <div class="text text-danger">{{ $message}}</div>
              @enderror
            </div>
            <div class="col-12">
              <strong class="offset">Tác giả</strong>
              <input type="text" class="form-control" name="author" placeholder="nhập tác giả...">
              @error('author')
              <div class="text text-danger">{{ $message}}</div>
              @enderror
            </div>
            <label for="">Thể loại</label>
            <select name="category">
              <option>Truyện Trinh Thám</option>
              <option>Truyện Ngắn</option>
              <option>Thơ</option>
              <option>Truyện ngôn tình</option>
              <option>Truyện tình yêu</option>
            </select>
            <div class="col-12">
              <strong class="offset">Năm xuất bản</strong>
              <input type="date" class="form-control" name="year">
              @error('year')
              <div class="text text-danger">{{ $message}}</div>
              @enderror
            </div>
      <div class=" col-12">
              <div class="d-grid"><br>
                <button class="btn btn-primary" type="submit">Thêm</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>