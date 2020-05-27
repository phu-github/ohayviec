 @if(isset($user))
     <span id="account">
          {{"Tên". $user->name}}
          {{"email". $user->email}}
          {{-- nut logout sẽ nằm ở đây --}}
      </span>
    @else
      <span id="account">
        <a href="http://ohayviec.com/account/login" style="max-height: 40px; line-height: 22px;" class="btn btn-success">
              <span class="big">Đăng Nhập</span>
            </a>
        <a href="http://ohayviec.com/account/register" style="max-height: 40px; line-height: 22px;" class="btn btn-success">
              <span class="big">Đăng Kí</span>
        </a>
      </span>
@endif