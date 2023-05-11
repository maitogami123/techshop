<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <div class="page-title-box">
        <div class="page-title-right">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item">
              <a href="javascript: void(0);">TechShop</a>
            </li>

            <li class="breadcrumb-item active">Permission Groups</li>
          </ol>
        </div>
        <h4 class="page-title">Permission Groups</h4>
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
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-new-permission">
              <i class="mdi mdi-file-plus"></i>
              Add new permission group
            </button>
          </div>

          <!-- end col-->
        </div>

        <div class="table-responsive">
          <table class="table table-centered w-100 dt-responsive nowrap" id="products-datatable">
            <thead class="table-light">
              <tr>
                <th class="all" style="width: 100px">Group</th>
                <th>Description</th>
                <th style="width: 85px">Active</th>
                <th style="width: 100px">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($permissionGroups->groups as $permissionGroup):?>
                <tr>
                  <td><?php echo $permissionGroup->getName()?></td>
                  <td><?php echo $permissionGroup->getDescription()?></td>
                  <td>
                    <input type="checkbox" id="switch1" <?php echo (empty($permissionGroup->getDeletedAt()) ? 'checked' : '')?> data-switch="success" />
                    <label for="switch1" data-on-label="Yes" data-off-label="No"></label>
                  </td>

                  <td class="table-action">
                    <a href="javascript:void(0);" class="action-icon">
                      <i class="mdi mdi-square-edit-outline"></i></a>
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