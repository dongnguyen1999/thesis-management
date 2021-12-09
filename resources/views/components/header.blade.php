<header id="content">
    <nav class="navbar navbar-default-login">
        <div class="container-fluid d-flex justify-content-between">
            <div class="nav-title">
                {{ Request::path() == '/' ? 'Giới thiệu' : '' }}
                {{ Str::startsWith(Request::path(), 'student') ? 'Quản lý sinh viên' : '' }}
                {{ Str::startsWith(Request::path(), 'lecturers') ? 'Quản lý giảng viên' : '' }}
            </div>

            @if (isset($user))
                <div class="nav-btn-container">
                    <span class="welcome-message">Chào {{ $user->nd_ten }}</span>
                    <a href="/logout"> <button type="button" class="btn btn-success">Đăng xuất</button></a>
                </div>    
            @else
                <div class="nav-btn-container">
                    <a href="/login"> <button type="button" class="btn btn-success">Đăng nhập</button></a>
                </div>    
            @endif
            
        </div>
    </nav>
</header>
