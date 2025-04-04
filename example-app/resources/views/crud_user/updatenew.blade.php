@section('content')
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật thông tin</title>
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
                @else
                <a href="{{route('login')}}" class="text-decoration-none">Home</a> /
                <a href="{{ route('user.list') }}" class="text-decoration-none">Users</a> /
                <a href="{{ route('signout') }}" class="text-decoration-none">Đăng xuất</a>
                @endguest
            </div>
        </div>

        <!-- Update Profile Form -->
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Màn hình cập nhật</h4>
                        <form action="{{ route('user.postUpdateUser') }}" method="POST">
                            @csrf
                            <input name="id" type="hidden" value="{{$user->id}}">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    value="{{ $user->name }}"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mật khẩu</label>
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Nhập lại mật khẩu</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <div class="form-group mb-3">
                                    <input type="text" placeholder="Email" id="email_address" class="form-control"
                                        value="{{ $user->email }}"
                                        name="email" required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
  
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" class="text-decoration-none">Đã có tài khoản</a>
                                    <button type="submit" class="btn btn-dark btn-block">Update</button>
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