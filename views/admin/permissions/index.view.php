<div class="container-fluid">
  <!-- start page title -->
  <div class="row">
    <div class="col-12">
      <div class="page-title-box">
        <div class="page-title-right">
          <ol class="breadcrumb m-0">
            <li class="breadcrumb-item">
              <a href="javascript: void(0);">Techshop</a>
            </li>

            <li class="breadcrumb-item active">Permission</li>
          </ol>
        </div>
        <h4 class="page-title">Permission</h4>
      </div>
    </div>
  </div>
  <!-- end page title -->

  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row mb-4">
            <div class="col-sm-4">
              <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Nhóm người dùng
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">User</a>
                  <a class="dropdown-item" href="#">Admin</a>
                  <a class="dropdown-item" href="#">Employee</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="table-responsive">
                <table class="table table-bordered table-hover table-centered mb-0" id="admin-permissions">
                  <thead class="table-light">
                    <tr>
                      <th colspan="2">Admin</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Create Product</td>
                      <td style="width: 75px">
                        <input type="checkbox" id="switch1" checked data-switch="success" />
                        <label for="switch1" data-on-label="Yes" data-off-label="No"></label>
                      </td>
                    </tr>
                    <tr>
                      <td>Delete Product</td>
                      <td style="width: 75px">
                        <input type="checkbox" id="switch2" checked data-switch="success" />
                        <label for="switch2" data-on-label="Yes" data-off-label="No"></label>
                      </td>
                    </tr>
                    <tr>
                      <td>Edit Product</td>
                      <td style="width: 75px">
                        <input type="checkbox" id="switch3" checked data-switch="success" />
                        <label for="switch3" data-on-label="Yes" data-off-label="No"></label>
                      </td>
                    </tr>
                    <tr>
                      <td>Update Quantity Product</td>
                      <td style="width: 75px">
                        <input type="checkbox" id="switch8" checked data-switch="success" />
                        <label for="switch8" data-on-label="Yes" data-off-label="No"></label>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="table-responsive">
                <table class="table table-borderless table-hover table-centered mb-0">
                  <thead class="table-light">
                    <tr>
                      <th colspan="2">Employee</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Create Product</td>
                      <td style="width: 75px">
                        <input type="checkbox" id="switch4" checked data-switch="success" />
                        <label for="switch4" data-on-label="Yes" data-off-label="No"></label>
                      </td>
                    </tr>
                    <tr>
                      <td>Delete Product</td>
                      <td style="width: 75px">
                        <input type="checkbox" id="switch5" checked data-switch="success" />
                        <label for="switch5" data-on-label="Yes" data-off-label="No"></label>
                      </td>
                    </tr>
                    <tr>
                      <td>Edit Product</td>
                      <td style="width: 75px">
                        <input type="checkbox" id="switch6" checked data-switch="success" />
                        <label for="switch6" data-on-label="Yes" data-off-label="No"></label>
                      </td>
                    </tr>
                    <tr>
                      <td>Update Quantity Product</td>
                      <td style="width: 75px">
                        <input type="checkbox" id="switch7" checked data-switch="success" />
                        <label for="switch7" data-on-label="Yes" data-off-label="No"></label>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- end card-body-->
      </div>
      <!-- end card-->
    </div>
    <!-- end col -->
  </div>  