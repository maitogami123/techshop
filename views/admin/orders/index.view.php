
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <div class="row mb-2">
          <div class="col-xl-8">
            <form class="row gy-2 gx-2 align-items-center justify-content-xl-start justify-content-between">
              <!-- <div class="col-auto">
                <label for="search-box" class="visually-hidden">Search</label>
                <input type="search" class="form-control" id="search-box" placeholder="Search..." />
              </div> -->
              <div class="col-auto">
                <div class="d-flex align-items-center">
                  <label for="status-select" class="me-2">Status</label>
                  <select class="form-select" id="status-select">
                    <option selected="" value="0">Choose...</option>
                    <option value="1">Đang xử lý</option>
                    <option value="3">Đang giao</option>
                    <option value="4">Hoàn thành</option>
                    <option value="5">Đã hủy</option>
                  </select>
                </div>
              </div>
              <div class="col-1">
                <button class="btn btn-primary" id="filter-btn" type="button">Apply</button>
              </div>
            </form>
          </div>
        </div>

        <div class="table-responsive">
          <table class="table table-centered mb-0">
            <thead class="table-light">
              <tr>
                <th style="width: 20px">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheck1" />
                    <label class="form-check-label" for="customCheck1">&nbsp;</label>
                  </div>
                </th>
                <th>Order ID</th>
                <th>Date</th>
                <th>Payment Status</th>
                <th>Total</th>
                <th>Order Status</th>
                <th style="width: 125px">Action</th>
              </tr>
            </thead>
            <tbody id="user-order__list">
              <?php require("order_list.view.php")?>
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

<script>

  $(document).ready(function() {
    $("#filter-btn").click(function(e) {
      e.preventDefault();
      let statusId = $('#status-select').val();
      $.ajax({
        method: 'get',
        url: "<?php echo getPath($routes, 'adminOrders') ?>",
        data: {
          "statusCode": JSON.stringify(statusId)
        },
        success: function (res) {
          console.log(res)
          $('#user-order__list').html(res);
        }
      })
    })
  })

</script>