@section('content')
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- Navigation -->
        <div class="row border p-2 text-center mb-4">
            <div class="col">
            @guest
                <a href="{{route('login')}}" class="text-decoration-none">Home</a> /
                <a href="{{route('login')}}" class="text-decoration-none">Đăng nhập</a>/
                <a href="{{ route('user.createUser') }}" class="text-decoration-none">Đăng ký</a>
                @endguest
            </div>
        </div>

        <!-- Login Form -->
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Màn hình đăng nhập</h4>
                        <form method="POST" action="{{ route('user.authUser') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên đăng nhập</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe" checked>
                                <label class="form-check-label" for="rememberMe">Ghi nhớ đăng nhập</label>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="text-decoration-none">Quên mật khẩu</a>
                                <button type="submit" class="btn btn-primary">Đăng nhập</button>
                            </div>
                        </form>
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