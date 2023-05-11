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

              <li class="breadcrumb-item active">Brand</li>
            </ol>
          </div>
          <h4 class="page-title">Brand</h4>
        </div>
      </div>
    </div>
    <!-- end page title -->

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <div class="row mb-2">
              <div class="col-sm-4">
                <a
                  href="javascript:void(0);"
                  class="btn btn-danger mb-2"
                  ><i class="mdi mdi-plus-circle me-2"></i>Add Brand</a
                >
              </div>

              <!-- end col-->
            </div>

            <div class="table-responsive">
              <table
                class="table table-centered w-100 table-hover dt-responsive nowrap"
                id="products-datatable"
              >
                <thead class="table-light">
                  <tr>
                    <th class="all" style="width: 150px">ID</th>
                    <th>Name brand</th>
                    <th style="width: 150px">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($BrandList->brandList as $brand): ?>
                    <tr>
                      <td><?php echo $brand->getId() ?></td>
                      <td><?php echo $brand->getName() ?></td>
                      <td class="table-action">
                        <a href="javascript:void(0);" class="action-icon">
                          <i class="mdi mdi-eye"></i
                        ></a>
                        <a href="javascript:void(0);" class="action-icon">
                          <i class="mdi mdi-square-edit-outline"></i
                        ></a>
                        <a href="javascript:void(0);" class="action-icon">
                          <i class="mdi mdi-delete"></i
                        ></a>
                      </td>
                    </tr>
                  <?php endforeach ?>
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
    <!-- end row -->
  </div>