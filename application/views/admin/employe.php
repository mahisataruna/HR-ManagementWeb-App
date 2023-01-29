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
                                        <th>Joined</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td style="width: 4%;">1</td>
                                        <td><strong>Mahisa Taruna</strong></td>
                                        <td></td>
                                        <td style="width: 4%;"><span class="badge bg-label-primary me-1">Active</span></td>
                                        <td style="width: 5%">
                                            <a class="btn btn-icon btn-success" href="">
                                                <i class="tf-icons bx bx-edit text-white"></i>
                                            </a>
                                            <a class="btn btn-icon btn-danger" href="">
                                                <i class="tf-icons bx bx-trash text-white"></i>
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

            