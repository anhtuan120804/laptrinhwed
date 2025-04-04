@section('content')
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
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
                <a href="{{route('login')}}" class="text-decoration-none">Đăng nhập</a> /
                <a href="{{ route('user.createUser') }}" class="text-decoration-none">Đăng ký</a>
                @endguest
            </div>
        </div>
        
        <!-- Registration Form -->
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Màn hình đăng ký</h4>
                        <form action="{{ route('user.postUser') }}" method="POST">
                            @csrf <!-- CSRF Token for Laravel -->
                            
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên người dùng</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                @if ($errors->first('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                @if ($errors->first('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            
                            <div class="mb-3">
                                <label for="password" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                @if ($errors->first('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="/login" class="text-decoration-none">Đã có tài khoản?</a>
                                <button type="submit" class="btn btn-primary">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="row border p-2 text-center mt-4">
            <div class="col">
                Lập trình web @2024
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
