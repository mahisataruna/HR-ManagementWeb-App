<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->
            
    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb fw-bold py-3 mb-4">
          <ol class="breadcrumb breadcrumb-style1">
            <li class="breadcrumb-item">
              <a href="javascript:void(0);">User</a>
            </li>
            <li class="breadcrumb-item active"><?= $title; ?></li>
          </ol>
        </nav>
        <!-- End -->

        <!-- Start content -->
        <div class="row">
            <div class="col-lg-6 col-md col-sm">
                <div class="card mb-4">
                    <h5 class="card-header">Change Password</h5>
                    <div class="card-body">
                        <?= $this->session->flashdata('message');?>
                        <form action="<?= base_url('user/changepassword');?>" method="post">
                            <div class="mb-3 col-md form-password-toggle">
                                <label for="current_password" class="form-label">Recent Password</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="password" id="current_password" name="current_password" placeholder="••••••" autofocus />
                                    <?= form_error('current_password','<small class="text-danger">','</small>'); ?>
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>    
                            </div>
                            <div class="mb-3 col-md form-password-toggle">
                                <label for="new_password1" class="form-label">New Password</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="password" id="new_password1" name="new_password1" placeholder="••••••" autofocus />
                                    <?= form_error('new_password1','<small class="text-danger">','</small>'); ?>
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>    
                            </div>
                            <div class="mb-3 col-md form-password-toggle">
                                <label for="new_password2" class="form-label">Replace New Password</label>
                                <div class="input-group input-group-merge">
                                    <input class="form-control" type="password" id="new_password2" name="new_password2" placeholder="••••••" autofocus />
                                    <?= form_error('new_password2','<small class="text-danger">','</small>'); ?>
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>    
                            </div>
                        </form>
                    </div>
                </div>    
            </div>
        </div>

        <!-- End -->

    </div>
    <!-- / Content -->  