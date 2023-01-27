<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
            
    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb fw-bold py-3 mb-4">
          <ol class="breadcrumb breadcrumb-style1">
            <li class="breadcrumb-item">
              <a href="javascript:void(0);">Admin</a>
            </li>
            <li class="breadcrumb-item active"><?= $title; ?></li>
          </ol>
        </nav>
            
        <!-- Start content -->
        <?= $this->session->flashdata('message'); ?>
              
        <div class="row">
            <!-- Start col  -->
            <div class="col-lg-12 col-md col-sm col">
                <div class="card">
                    <h5 class="card-header">Employes Data</h5>
                    <div class="card-body">
                        <div class="table-responsive text-nowrap" style="height: 250px">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Users</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td style="width: 4%;">1</td>
                                        <td><strong>Mahisa Taruna</strong></td>
                                    
                                        <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" class="avatar avatar-xs pull-up" itle="Lilian Fuller" >
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td>
                                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                                        <td>
                                            <a href="" class="btn rounded-pill btn-dark" data-bs-toggle="dropdown">
                                                <i class="bx bx-edit-alt"></i> Edit
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->

            