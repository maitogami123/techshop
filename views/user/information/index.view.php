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
  <div class="user__heading">
    <h3 class="heading__secondary">Hồ sơ của tôi</h3>
    <p class="font-size-1 text-color--4">
      Quản lý thông tin hồ sơ để bảo mật tài khoản
    </p>
  </div>
  <div class="user__information-form">
    <form class="FromUpdateUserInfo">
      <div class="form__field-box u-margin-bottom-medium">
        <div class="form__field">
          <label for="user__first-name" class="form__label u-margin-bottom-small">Họ và tên đệm</label>
          <input type="text" id="user__first-name" name="user__first-name" value="Hà Quốc" class="form__input" />
        </div>
        <div class="form__field">
          <label for="user__last-name" class="form__label u-margin-bottom-small">Tên</label>
          <input type="text" id="user__last-name" name="user__last-name" value="Vĩ" class="form__input" />
        </div>
      </div>
      <div class="form__field-box">
        <div class="form__field u-margin-bottom-medium">
          <label for="user__email" class="form__label u-margin-bottom-small">Email</label>
          <input type="email" id="user__email" name="user__email" value="quocvi1701@gmail.com" class="form__input" />
        </div>
        <div class="form__field u-margin-bottom-medium">
          <label for="user__tel" class="form__label u-margin-bottom-small">Điện thoại</label>
          <input type="tel" id="user__tel" name="user__tel" value="0327148900" class="form__input" />
        </div>
      </div>
      <div class="form__field-box">
        <div class="form__field u-margin-bottom-medium" id="province-select">
          <label for="order__address-city" class="form__label u-margin-bottom-small">Tỉnh, thành phố:</label>
          <select type="text" id="order__address-city" name="city" class="form__input">
            <!-- Provinces -->
          </select>
        </div>
        <div class="form__field u-margin-bottom-medium">
          <label for="order__address-district" class="form__label u-margin-bottom-small">Quận, huyện:</label>
          <select type="text" id="order__address-district" name="district" class="form__input">
            <!-- District -->
          </select>
        </div>
      </div>
      <div class="form__field u-margin-bottom-medium">
        <label for="password" class="form__label u-margin-bottom-small">Địa chỉ chi tiết:</label>
        <input type="text" id="order__address" name="" placeholder="Số nhà, tên đường, xã, phường, thị trấn,..."
          class="form__input" />
      </div>
      <button type="submit" class="btn btn__primary btn__primary--active u-center-text">
        Thay đổi
      </button>
      <button type="submit" class="btn btn__success u-center-text">
        Lưu
      </button>
      <button type="submit" class="btn btn__danger u-center-text">
        Hủy
      </button>
    </form>
  </div>
</div>
<script>
  async function getProvincesHanlder() {
    const provinceAPI = 'https://provinces.open-api.vn/api/?depth=2';
    const res = await fetch(provinceAPI);
    const jsonData = await res.json();

    for (let i = 0; i < jsonData.length; i++) {
      $("#order__address-city").append(`
        <option value="${jsonData[i].name}" data-province-id="${i}">${jsonData[i].name}</option>
      `)
    }
    $("#order__address-city").on('change', function () {
      $("#order__address-district").empty();
      const provinceId = $('#order__address-city').find(":selected").attr('data-province-id')
      for (let i = 0; i < jsonData[provinceId].districts.length; i++) {
        $("#order__address-district").append(`
            <option value="${jsonData[provinceId].districts[i].name}">${jsonData[provinceId].districts[i].name}</option>
          `)
      }
    });
  }

  $(document).ready(function(e) {
    getProvincesHanlder();
  })
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