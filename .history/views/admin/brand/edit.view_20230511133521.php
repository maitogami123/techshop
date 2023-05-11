<?php
use App\Models\User;

if (!isLoggedIn()) {
  $_SESSION['isLoggedIn'] = false;
}
if (isLoggedIn()) {
  $user = new User();
  $user = unserialize($_SESSION['user']);
}
if (!isLoggedIn() || !in_array('P_Edit', $user->getPermissions()))
  redirect($routes->get('homepage')->getPath())
    ?>
  <div class="modal-header modal-colored-header bg-info">
    <h4 class="modal-title" id="fill-info-modalLabel">
      Change Brand's information
    </h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
  </div>
  <div class="modal-body">
    <form class="ps-3 pe-3" action="" id="edit-form">
      <div class="mb-3">
        <label for="product-line" class="form-label">Line</label>
        <input class="form-control" type="text" id="product-line" required="" placeholder=""
          value="<?php echo $product->getProductLine() ?>" name='product_line' disabled />
      <input class="form-control" type="text" id="product-line" required="" placeholder=""
        value="<?php echo $product->getProductLine() ?>" name='product_line' hidden />
    </div>
    <div class="mb-3">
      <label for="product-name" class="form-label">Name</label>
      <input class="form-control" type="text" id="product-name" required="" placeholder=""
        value="<?php echo $product->getProductName() ?>" name='product_name' />
    </div>
    <div class="mb-3 modal-footer">
      <button type="button" class="btn btn-light" data-bs-dismiss="modal">
        Cancel
      </button>
      <button class="btn btn-primary" type="submit" id="save-change-btn"
        data-product-id="<?php echo $product->getProductLine() ?>">
        Save change
      </button>
    </div>
  </form>
</div>

<!-- <script src="/techshop/public/js/handle_admin_product_img_preview.js"></script> -->
<script>
  btnAddThumbnail = document.querySelector(".btn-add-thumbnail");
  thumbnailPreview = document.querySelector(".thumbnail-preview");
  btnAddImage = document.querySelector(".btn-add-img");
  displayImgPreview = document.querySelector(".img-preview");
  slidePreviewList = document.querySelector(".img-preview-list");
  listImage = [];
  saveThumbnailPath = "";
  saveImgPath = "";


  function handleDeleteSlide(id) {
    listImage.splice(id, 1);
    renderPreviewSlide(0);
    const dt = new DataTransfer()
    const input = btnAddImage
    const { files } = input
    for (let i = 0; i < files.length; i++) {
      const file = files[i]
      if (id !== i)
        dt.items.add(file) // here you exclude the file. thus removing it.
    }
    input.files = dt.files // Assign the updates list
    console.log(btnAddImage.files)
  }
  function renderPreviewSlide(slideIndex) {
    let htmls = listImage.map(
      (item, index) => `
            <div
                style="position: relative; width: 100px"
                class="img-preview-item"
            >
                <img
                src="${item.imgPath}"
                alt="image"
                class="img-fluid rounded"
                width="200"
                />
                <div
                class="position-absolute font-20 link-danger"
                style="top: 5px; right: 5px; cursor: pointer"
                id="delete-img"
                >
                <i class="mdi mdi-delete" onclick='handleDeleteSlide(${index})'></i>
                </div>
            </div>
              `
    );
    slidePreviewList.innerHTML = htmls.join("");
  }
  $(document).ready(function (e) {
    btnAddThumbnail.addEventListener("change", function (e) {
      const files = e.target.files[0];
      if (!files.type.match("image")) return;
      saveThumbnailPath = URL.createObjectURL(files);
      thumbnailPreview.innerHTML = `
      <img
        src="${saveThumbnailPath}"
        alt="image"
        class="img-fluid rounded"
        width="200"
      />
    `;
    });
    btnAddImage.addEventListener("change", function (e) {
      for (let i = 0; i < e.target.files.length; i++) {
        const files = e.target.files[i];
        if (!files.type.match("image")) return;
        saveImgPath = URL.createObjectURL(files);
        listImage = [...listImage, { imgPath: saveImgPath }];
        let htmls = listImage.map(
          (item, index) => `
          <div
              style="position: relative; width: 100px; "
              class="img-preview-item"
          >
              <img
              src="${item.imgPath}"
              alt="image"
              class="img-fluid rounded"
              width="200"
              />
              <div
              class="position-absolute font-20 link-danger"
              style="top: 5px; right: 5px; cursor: pointer"
              id="delete-img"
              >
              <i class="mdi mdi-delete" onclick='handleDeleteSlide(${index})'></i>
              </div>
          </div>
            `
        );
        slidePreviewList.innerHTML = htmls.join("");
      }
    });

    $('.delete-old-img-btn').click(function (e) {
      $(`#${$(this).attr('data-product-image')}`).remove();
    })

    $('#add-more-info').click((e) => {
      console.log('clicked')
      e.preventDefault();
      let newRow = `<input class="form-control" name='information[]' type='text' id="information">`
      $('#information-group-edit').append(newRow);
    })

    $('#edit-form').submit(function (e) {
      e.preventDefault();
      var formData = new FormData(this);
      $.ajax({
        type: "POST",
        url: "<?php echo getPath($routes, 'updateProduct') ?>",
        data: formData,
        contentType: false,
        processData: false,
        success: function (res) {
          // console.log(res)
          location.reload();
        },

      })
    })

  })

</script>