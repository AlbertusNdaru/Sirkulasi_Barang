<div class="col">
<a href="<?= base_url('formaddusergroup'); ?>" class="btn addUsergroup btn-round btn-default"><i class="glyphicon glyphicon-plus-sign"></i>
<button type="button" class="btn btn-primary">Add UserGroup</button>
</a>
</div>
<div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Data User Group</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name Hak akses</th>
                    <th scope="col">Action</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  $i=1;
                  foreach ($usergroup as $o){ ?>
                <tr>
                      <div class="adge badge-dot mr-4">
                        <td><?= $i ?> </td>
                      </div>
                      <div class="adge badge-dot mr-4">
                        <td><?= $o->Description ?></td>
                      </div>  
                      <div class="adge badge-dot mr-6">
                          <td class="center">
                            <a class="btn btn-info" href="<?= base_url('formeditusergroup/' . $o->id_level . '') ?>">
                             <i class="glyphicon glyphicon-edit icon-white"></i>
                              Edit
                            </a>
                            <a class="btn btn-danger" href="<?= base_url('deleteusergroup/' . $o->id_level . '') ?>">
                             <i class="glyphicon glyphicon-trash icon-white"></i>
                              Delete
                            </a></td>
                        </div>
                      </div>
                  </tr>
                  <?php
                $i++;
                }?>
                </tbody>
              </table>
            </div>
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
  <script>