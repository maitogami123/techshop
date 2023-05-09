<?php foreach ($users->userList as $user): ?>
  <tr>
    <td class="table-user">
      <img src="/techshop/public/images/productImg/Image.png" alt="table-user" class="me-2 rounded-circle" />
      <a href="javascript:void(0);" class="text-body fw-semibold"><?php echo $user->getFirstName()." ".$user->getLastName()?></a>
    </td>
    <td><?php echo $user->getPhoneNumber()?></td>
    <td><?php echo $user->getEmail()?></td>
    <td><?php echo $user->getUserGroup()?></td>
    <td><?php echo date('d-m-Y', strtotime($user->getCreatedAt()))?></td>
    <td>
      <?php if($user->getDeletedAt() != null):?>
        <span class="badge badge-danger-lighten">Deactive</span>
      <?php else: ?>
        <span class="badge badge-success-lighten">Active</span>
      <?php endif?>
    </td>

    <td style="width: 100px">
      <a href="javascript:void(0);" class="action-icon">
        <i class="mdi mdi-square-edit-outline"></i></a>
      <a href="javascript:void(0);" class="action-icon">
        <i class="mdi mdi-delete"></i></a>
    </td>
  </tr>
<?php endforeach ?>