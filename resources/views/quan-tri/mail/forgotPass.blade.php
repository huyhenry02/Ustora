<h2>Xin chào <br></h2>
<p class="text-info">
    # Đổi mật khẩu <br>
    Nhấp vào nút bên dưới để đổi mật khẩu của bạn:<br>
</p>
<a href="{{route('reset_pass.index',['user' => $user->id, 'token' => $user->token])}}">Click vào đây để tiếp tục</a>
<br>
<p class="text-warning">Nếu bạn không có yêu cầu đổi mật khẩu, không cần thực hiện bất cứ thao tác nào.<br></p>
<p>Cảm ơn bạn </p>

