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
          <div class="row g-2 mb-3">
            <div class="col-sm-6">
              <label class="form-label" for="product-price">Price</label>
              <input class="form-control" type="number" id="product-price" name='price' />
            </div>
            <div class="col-sm-6">
              <label for="product-discount" class="form-label">Discount</label>
              <input class="form-control" type="number" name='discount' id="product-discount" />
            </div>
          </div>
          <div class="row g-2 mb-3">
            <div class="col-sm-6">
              <label for="example-select" class="form-label">Warranty Period</label>
              <select class="form-select" name="warranty" id="example-select">
                <option value='null'>Không có bảo hành</option>
                <?php foreach ($warrantyList->warrantyList as $warranty): ?>
                  <option value=<?php echo $warranty->getWarrantyId() ?>><?php echo $warranty->getMonths() ?> Tháng</option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="row g-2 mb-3">
            <div class="col-sm-6">
              <label for="example-select" class="form-label">Brand</label>
              <select class="form-select" name="brand" id="example-select">
                <?php foreach ($brands->brandList as $brand): ?>
                  <option value=<?php echo $brand->id ?>><?php echo $brand->name ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-sm-6">
              <label for="example-select" class="form-label">Category</label>
              <select class="form-select" name="category" id="example-select">
                <?php foreach ($categories->categories as $category): ?>
                  <option value=<?php echo $category->getCategoryID() ?>><?php echo $category->getCategoryName() ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="mb-3">
            <label for="information" class="form-label">Information</label>
            <button id="add-info" class="btn btn-link btn-sm">
              More info
            </button>
            <div id="information-group">
              <input class="form-control" name="information[]" type="text" id="information" />
            </div>
          </div>
          <div class="form-group mb-3">
            <label for="serial_number" class="form-label">Serial Number</label>
            <button id="add-sn" class="btn btn-link btn-sm">
              More S/N
            </button>
            <div id="serial_number-group">
              <input class="form-control" name="serial_number[]" type="text" id="serial_number" />
            </div>
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