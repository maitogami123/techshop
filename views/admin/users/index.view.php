<!-- <?php print_r($users)?> -->

<div class="row">
  <div class="col-12">
    <div class="page-title-box">
      <div class="page-title-right">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item">
            <a href="javascript: void(0);">Techshop</a>
          </li>
          <li class="breadcrumb-item active">Customers</li>
        </ol>
      </div>
      <h4 class="page-title">Account</h4>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane show active" id="account-customers">
            <div class="row mb-2">
              <div class="col-sm-4">
                <a href="javascript:void(0);" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add User</a>
              </div>

              <!-- end col-->
            </div>

            <div class="table-responsive">
              <table class="table table-centered table-striped dt-responsive nowrap w-100" id="accounts-datatable">
                <thead>
                  <tr>
                    <th>Customer</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Create Date</th>
                    <th>Status</th>
                    <th style="width: 100px">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php require('user_list.view.php')?>
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

<script>
  $(document).ready(function () {
    $("#accounts-datatable").DataTable({
      language: {
        paginate: {
          previous: "<i class='mdi mdi-chevron-left'>",
          next: "<i class='mdi mdi-chevron-right'>"
        },
        info: "Showing accounts _START_ to _END_ of _TOTAL_",
        lengthMenu: 'Display <select class=\'form-select form-select-sm ms-1 me-1\'><option value="5">5</option><option value="10">10</option><option value="20">20</option><option value="-1">All</option></select> accounts'
      },
      pageLength: 5,
      columns: [
        {
          orderable: !0
        }, {
          orderable: !0
        }, {
          orderable: !0
        }, {
          orderable: !0
        }, {
          orderable: !0
        }, {
          orderable: !0
        }, {
          orderable: !1
        }],
      select: {
        style: "multi"
      },
      order: [[1, "asc"]],
      drawCallback: function () {
        $(".dataTables_paginate > .pagination").addClass("pagination-rounded"),
          $("#products-datatable_length label").addClass("form-label")
      }
    })
  });
</script>