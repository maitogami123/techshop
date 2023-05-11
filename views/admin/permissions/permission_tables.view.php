<?php foreach ($permissions->permissions as $permissionGroup => $groupPermissions): ?>
  <?php foreach ($groupPermissions as $groupName => $groupPermission): ?>
    <div class="col-lg-4">
      <div class="table-responsive">
        <table class="table table-bordered table-hover table-centered mb-0" id="admin-permissions">
          <thead class="table-light">
            <tr>
              <th colspan="2">
                <?php echo $groupName ?>
              </th>
            </tr>
          </thead>
          <tbody>
            <?php if (count($groupPermission) == 0): ?>
              <tr>
                <td>
                  Chưa có quyền nào thuộc nhóm quyền này!
                </td>
              </tr>
            <?php else: ?>
              <?php foreach ($groupPermission as $permission): ?>
                <tr>
                  <td>
                    <?php echo $permission->getPermissionName() ?>
                  </td>
                  <td style="width: 75px">
                    <input type="checkbox" id="<?php echo $permission->getPermissionId()?>" <?php if (in_array($permission->getPermissionId(), $permissions->activePermission))
                      echo "checked" ?> data-switch="success" />
                      <label for="<?php echo $permission->getPermissionId()?>" data-on-label="Yes" data-off-label="No"></label>
                    </td>
                  </tr>
              <?php endforeach ?>
            <?php endif ?>
          </tbody>
        </table>
      </div>
    </div>
  <?php endforeach ?>
<?php endforeach ?>