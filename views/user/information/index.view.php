<?php
use App\Models\User;

if (!isLoggedIn()) {
  $_SESSION['isLoggedIn'] = false;
}
if (isLoggedIn()) {
  $user = new User();
  $user = unserialize($_SESSION['user']);
}
?>
<div class="user__container">
  <div class="user__haeding">
    <h3 class="heading__secondary">Hồ sơ của tôi</h3>
    <p class="font-size-1 text-color--4">
      Quản lý thông tin hồ sơ để bảo mật tài khoản
    </p>
  </div>
  <div class="user__information-form">
    <form class="FromUpdateUserInfo">
      <div class="form__field u-margin-bottom-medium">
        <label for="userAccount" class="form__label u-margin-bottom-small">Tên đăng nhập: <?php echo $user -> getUsername();?></label>
      </div>
      <div class="form__field u-margin-bottom-medium">
        <label for="userName" class="form__label u-margin-bottom-small">Tên</label>
        <input type="text" id="userName" value="<?php echo $user -> getFullNameOfLogingUser($user -> getUsername())[0]?>" name="account" placeholder="Hà Quốc Vĩ" class="form__input" />
      </div>
      <div class="form__field u-margin-bottom-medium">
        <label for="userName" class="form__label u-margin-bottom-small">Email</label>
        <p class="">qu********@gmail.com</p>
        <a href="">Thay đổi</a>
      </div>
      <button type="submit" class="btn btn__primary btn__primary--active u-center-text">
        Lưu
      </button>
    </form>
  </div>
</div>
<script>
        $('.FromUpdateUserInfo').submit(function(e){
          e.preventDefault();
          let valueFullName = document.querySelector('#userName');
          $.ajax({
            url:'<?php echo getPath($routes, 'viewPersonalInfo') ?>',
            method:'GET',
            data:{fullName: valueFullName.value},
            success: function(data){
            Swal.fire(
                      'SUCCESS!',
                      'Success update!',
                      'success'
                    )
            } 
          })
        })
</script>