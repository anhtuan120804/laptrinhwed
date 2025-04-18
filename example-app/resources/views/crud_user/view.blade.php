<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết user</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row border p-2 text-center mb-4">
            <div class="col">
                @guest
                <a href="{{route('login')}}" class="text-decoration-none">Home</a> /
                @else
                <a href="{{route('login')}}" class="text-decoration-none">Home</a> /
                <a href="{{ route('user.list') }}" class="text-decoration-none">Users</a> /
                <a href="{{ route('signout') }}" class="text-decoration-none">Đăng xuất</a>
                @endguest
            </div>
        </div>

        <!-- User Details -->
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Màn hình chi tiết</h4>
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label">Username</label>
                            <div class="col-sm-8">
                                <span class="form-control-plaintext">{{$messi->name}}</span>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <span class="form-control-plaintext">{{$messi->email}}</span>
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="#" class="btn btn-primary">Chỉnh sửa</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="row border p-2 text-center mt-4">
            <div class="col">
                Lập trình web @01024
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>