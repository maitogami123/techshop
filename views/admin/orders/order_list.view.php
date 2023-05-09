<?php foreach($orders->orders as $order): ?>
  <tr>
    <td>
      <div class="form-check">
        <input type="checkbox" class="form-check-input" id="customCheck2" />
        <label class="form-check-label" for="customCheck2">&nbsp;</label>
      </div>
    </td>
    <td>
      <a href="apps-ecommerce-orders-details.html" class="text-body fw-bold">#<?php echo $order->getId()?></a>
    </td>
    <td>
      <?php echo $order->getCreatedAt()?>
    </td>
    <td>
      <h5>
        <?php echo $order->getUsername()?>
      </h5>
    </td>
    <td><?php echo number_format($order->getTotal())?>₫</td>
    <td>
      <h5>
        <span class="badge <?php echo getOrderStatusClassAdmin($order->getStatusId())?>"><?php echo $order->getStatusName()?></span>
      </h5>
    </td>
    <td>
      <a href="javascript:void(0);" class="action-icon">
        <i class="mdi mdi-eye"></i></a>
      <a href="javascript:void(0);" class="action-icon">
        <i class="mdi mdi-square-edit-outline"></i></a>
      <a href="javascript:void(0);" class="action-icon">
        <i class="mdi mdi-delete"></i></a>
    </td>
  </tr>
<?php endforeach ?>