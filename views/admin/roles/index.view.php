<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="page-title-box">
        <div class="page-title-right">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item">
              <a href="javascript: void(0);">TechShop</a>
            </li>

            <li class="breadcrumb-item active">Roles</li>
          </ol>
        </div>
        <h4 class="page-title">Roles</h4>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-2">
          <div class="col-sm-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-new-role">
              <i class="mdi mdi-file-plus"></i>
              Add new role
            </button>
          </div>

          <!-- end col-->
        </div>

        <div class="table-responsive">
          <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
            <thead class="table-light">
              <tr>
                <th class="all" style="width: 100px">ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Created at</th>
                <th style="width: 85px">Active</th>
                <th style="width: 100px">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($roles->roles as $role):?>
                <tr>
                  <td><?php echo $role->getRoleId()?></td>
                  <td><?php echo $role->getRoleName()?></td>
                  <td><?php echo $role->getRoleDescription()?></td>
                  <td><?php echo $role->getCreatedAt()?></td>
                  <td>
                    <input type="checkbox" id="<?php echo $role->getRoleId() ?>"  
                    <?php if(!$role->getDisabled()) echo "checked"?>
                    data-role-id="<?php echo $role->getRoleId() ?>"
                    data-switch="success" />
                    <label for="<?php echo $role->getRoleId() ?>" data-on-label="Yes" data-off-label="No"></label>
                  </td>
  
                  <td class="table-action">
                    <button type="button" class="action-icon btn edit-btn"
                      data-bs-toggle="modal" data-bs-target="#change-role-info"
                      data-role-id="<?php echo $role->getRoleId() ?>">
                      <i class="mdi mdi-square-edit-outline"></i>
                    </button>
                    <!-- <?php if($role->getDeteleAble()):?>
                      <button type="button" class="action-icon btn delete-btn"
                        data-role-id="<?php echo $role->getRoleId() ?>">
                        <i class="mdi mdi-delete"></i>
                      </button>
                    <?php endif?> -->
                  </td>
                </tr>
              <?php endforeach?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- end card-body-->
    </div>
    <!-- end card-->
  </div>
  <!-- end col -->
</div>


<div id="add-new-role" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header modal-colored-header bg-info">
        <h4 class="modal-title" id="fill-info-modalLabel">
          Add new role
        </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
      </div>
      <div class="modal-body">
        <form class="ps-3 pe-3" id="create-form" method="POST" action="">
          <div class="row g-2 mb-3">
            <div class="col-sm-6">
              <label class="form-label" for="role-id">ID</label>
              <input class="form-control" type="text" id="role-id" name='roleId' />
            </div>
            <div class="col-sm-6">
              <label for="role-name" class="form-label">Name</label>
              <input class="form-control" type="text" name='roleName' id="role-name" />
            </div>
          </div>
          <div class="mb-3">
            <label for="role-description" class="form-label">Description</label>
            <input class="form-control" type="text" name='role-description' id="role-description" placeholder="" />
          </div>
          <div class="mb-3 modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
              Close
            </button>
            <button class="btn btn-primary" type="submit" id="submit">
              Add new product
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div id="change-role-info" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="editRoleModal">
    </div>
  </div>
</div>

<script>

  $(document).ready(function() {
    $('input[type=checkbox]').change(function() {
      let isDisabled = $(this).is(':checked') ? 0 : 1;
      let roleId = $(this).attr('data-role-id');
      $.ajax({
        type: 'POST',
        url: "/techshop/admin/toggleDisableRole",
        data: {
          'roleId': JSON.stringify(roleId),
          'state': JSON.stringify(isDisabled)
        },
        success:function(res) {
          
        }
      })
    })

    $('#create-form').submit(function (e) {
      e.preventDefault();
      var formData = new FormData(this);
      $.ajax({
        type: "POST",
        url: "<?php echo getPath($routes, 'createRole') ?>",
        data: formData,
        success: function (res) {
          // console.log(res)
          Swal.fire({
            title: 'Success!',
            text: 'Product successfully added!',
            icon: 'success',
            confirmButtonTeNxt: 'Cool!'
          })
          $('#create-form')[0].reset();
        },
        contentType: false,
        processData: false
      })
    })

    $('#change-role-info').on('shown.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var roleId = button.data('role-id')
      $.ajax({
        type: 'get',
        url: `/techshop/admin/getEditRoleForm`,
        data: {
          'roleId': JSON.stringify(roleId)
        },
        success: function (res) {
          $('#editRoleModal').html(res);
        }
      })
    })

    $('.delete-btn').click(function(e) {
      let roleId = ($(this).attr("data-role-id"))
      $.ajax({
        type: 'post',
        url: `/techshop/admin/deleteRole`,
        data: {
          'roleId': JSON.stringify(roleId)
        },
        success: function (res) {
          $('#editRoleModal').html(res);
        }
      })
    })
  })

  

</script>
