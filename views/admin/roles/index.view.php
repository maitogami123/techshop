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
                <th class="all" style="width: 20px">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheck1" />
                    <label class="form-check-label" for="customCheck1">&nbsp;</label>
                  </div>
                </th>

                <th class="all" style="width: 100px">ID</th>
                <th>Type Name</th>
                <th>Created at</th>
                <th style="width: 85px">Active</th>
                <th style="width: 85px">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheck2" />
                    <label class="form-check-label" for="customCheck2">&nbsp;</label>
                  </div>
                </td>

                <td>Admin</td>
                <td>For administration the web page</td>
                <td>2023-04-02 13:44:39</td>
                <td>
                  <input type="checkbox" id="switch1" checked data-switch="success" />
                  <label for="switch1" data-on-label="Yes" data-off-label="No"></label>
                </td>

                <td class="table-action">
                  <a href="javascript:void(0);" class="action-icon">
                    <i class="mdi mdi-eye"></i></a>
                  <a href="javascript:void(0);" class="action-icon">
                    <i class="mdi mdi-square-edit-outline"></i></a>
                  <a href="javascript:void(0);" class="action-icon">
                    <i class="mdi mdi-delete"></i></a>
                </td>
              </tr>

              <tr>
                <td>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheck3" />
                    <label class="form-check-label" for="customCheck3">&nbsp;</label>
                  </div>
                </td>

                <td>CUSTOMER</td>
                <td>default for new account created by customer</td>
                <td>2023-04-02 13:44:39</td>
                <td>
                  <input type="checkbox" id="switch2" checked data-switch="success" />
                  <label for="switch2" data-on-label="Yes" data-off-label="No"></label>
                </td>

                <td class="table-action">
                  <a href="javascript:void(0);" class="action-icon">
                    <i class="mdi mdi-eye"></i></a>
                  <a href="javascript:void(0);" class="action-icon">
                    <i class="mdi mdi-square-edit-outline"></i></a>
                  <a href="javascript:void(0);" class="action-icon">
                    <i class="mdi mdi-delete"></i></a>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheck4" />
                    <label class="form-check-label" for="customCheck4">&nbsp;</label>
                  </div>
                </td>

                <td>EMPLOYEE</td>
                <td>For employee with basic functionality</td>
                <td>2023-04-02 13:45:04</td>
                <td>
                  <input type="checkbox" id="switch3" checked data-switch="success" />
                  <label for="switch3" data-on-label="Yes" data-off-label="No"></label>
                </td>

                <td class="table-action">
                  <button type="button" class="action-icon btn" data-bs-toggle="modal" data-bs-target="#see-product"
                    id="see-product-selected">
                    <i class="mdi mdi-eye"></i>
                  </button>

                  <button type="button" class="action-icon btn" data-bs-toggle="modal" data-bs-target="#change-product"
                    id="edit-product-selected">
                    <i class="mdi mdi-square-edit-outline"></i>
                  </button>

                  <button type="button" class="action-icon btn" id="delete-product-selected">
                    <i class="mdi mdi-delete"></i>
                  </button>
                </td>
              </tr>
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