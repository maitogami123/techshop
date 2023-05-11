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

  <div id="add-new-brand" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header modal-colored-header bg-info">
        <h4 class="modal-title" id="fill-info-modalLabel">
          Add New Brand
        </h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
      </div>
      <div class="modal-body">
        <form class="ps-3 pe-3" id="create-form" method="POST" action="" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="product-line" class="form-label">Line</label>
            <input class="form-control" type="text" name='product_line' id="product-line" placeholder="" />
          </div>
          <div class="mb-3">
            <label for="product-name" class="form-label">Name</label>
            <input class="form-control" type="text" name='product_name' id="product-name" placeholder="" />
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
<div id="change-product" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="editModal">
    </div>
  </div>
</div>

<div id="see-product" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" id="detailModal">
    </div>
  </div>
</div>

<div id="update-quantity-product" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="add-qty-modal">
    </div>
  </div>
</div>