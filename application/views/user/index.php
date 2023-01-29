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

        <!-- Start content -->
        <div class="row">
            <div class="col-lg-6 col-md col-sm">
                  <!-- <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="pages-account-settings-connections.html"
                        ><i class="bx bx-link-alt me-1"></i> Connections</a
                      >
                    </li>
                  </ul> -->
                  <div class="card mb-4">
                    <!-- Account -->
                    <div class="card-body">
                      <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="user-avatar" class="d-block rounded"
                          height="100"
                          width="100"
                          id="uploadedAvatar"
                        />
                        <div class="button-wrapper">
                          <h4 class="mb-2">
                            <?= $user['name']; ?> 
                            <span class="badge badge-center rounded-pill bg-label-primary" data-bs-toggle="tooltip" data-bs-offset="0,4" data-bs-placement="right" data-bs-html="true" title="" data-bs-original-title="<i class='bx bx-fw bxs-bell bx-tada bx-xs' ></i> <span> Your account is active and verified.</span>" aria-describedby="tooltip753344">
                              <?php 
                                if ($user['is_active'] == 1) {
                                  echo '<i class="bx bx-check text-primary"></i>';
                                } else {
                                  echo '<i class="bx bx-close text-primary"></i>';
                                }
                              ?>
                            </span>
                          </h4>
                          <p class="text-muted mb-1"><i class="bx bx-envelope"></i> <?= $user['email']; ?></p>
                          <p class="text-muted mb-0"><i class="bx bx-bell"></i> Join : <?= date('d F Y', $user['date_created']); ?></p>
                        </div>
                      </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                      <!-- Start -->
                      <div class="col-lg">
                        <div class="demo-inline-spacing mt-3">
                          <div class="list-group list-group-horizontal-md text-md-center">
                            <a
                              class="list-group-item list-group-item-action active"
                              id="profile-list-item"
                              data-bs-toggle="list"
                              href="#horizontal-profile"
                              >
                              <span class="tf-icons bx bx-user"></span> 
                              Profile</a
                            >
                            <a
                              class="list-group-item list-group-item-action"
                              id="messages-list-item"
                              data-bs-toggle="list"
                              href="#horizontal-messages"
                              >
                              <span class="tf-icons bx bx-message"></span>
                              Messages</a
                            >
                            <a
                              class="list-group-item list-group-item-action"
                              id="settings-list-item"
                              data-bs-toggle="list"
                              href="#horizontal-settings"
                              >
                              <span class="tf-icons bx bx-link"></span>
                              Connection</a
                            >
                          </div>
                          <div class="tab-content px-0 mt-0">
                            <!-- Profile -->
                            <div class="tab-pane fade show active" id="horizontal-profile">
                              <!-- Start -->
                              <div class="col-lg col-md col-sm">
                      
                                <div class="demo-inline-spacing mt-3">
                                <ul class="list-group">
                                  <li class="list-group-item d-flex align-items-center">
                                    <i class="bx bx-face me-2"></i>
                                    <div class="row col">
                                      <div class="col-4">
                                        Birthday
                                      </div>
                                      <div class="col-1">
                                        :
                                      </div>
                                      <div class="col-7">
                                        10 Oktober 1997
                                      </div>
                                    </div>
                                  </li>
                                  <li class="list-group-item d-flex align-items-center">
                                    <i class="bx bx-pin me-2"></i>
                                    <div class="row col">
                                      <div class="col-4">
                                        Address
                                      </div>
                                      <div class="col-1">
                                        :
                                      </div>
                                      <div class="col-7">
                                        Jl. Kenangan no.1
                                      </div>
                                    </div>
                                  </li>
                                  <li class="list-group-item d-flex align-items-center">
                                    <i class="bx bx-tag me-2"></i>
                                    <div class="row col">
                                      <div class="col-4">
                                        Employe Status
                                      </div>
                                      <div class="col-1">
                                        :
                                      </div>
                                      <div class="col-7">
                                        Contract
                                      </div>
                                    </div>
                                  </li>
                                  <li class="list-group-item d-flex align-items-center">
                                    <i class="bx bx-laptop me-2"></i>
                                    <div class="row col">
                                      <div class="col-4">
                                        Division
                                      </div>
                                      <div class="col-1">
                                        :
                                      </div>
                                      <div class="col-7">
                                        IT Support
                                      </div>
                                    </div>
                                  </li>
                                </ul>
                              </div>
                            </div>
                              <!-- End -->
                            </div>
                            <!-- End -->
                            <!-- Tab message -->
                            <div class="tab-pane fade" id="horizontal-messages">
                              No message here
                            </div>
                            <!-- End -->
                            <!-- Tab connection -->
                            <div class="tab-pane fade" id="horizontal-settings">
                              <div class="col-lg col-md col-sm col-12">
                                <div class="card">
                                  <h5 class="card-header">Accounts connection</h5>
                                  <div class="card-body">
                                    <!-- Facebook -->
                                    <div class="d-flex mb-3">
                                      <div class="flex-shrink-0">
                                          <img
                                            src="<?= base_url('assets/'); ?>img/icons/brands/facebook.png"
                                            alt="facebook"
                                            class="me-3"
                                            height="30"
                                          />
                                      </div>
                                      <div class="flex-grow-1 row">
                                        <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                          <h6 class="mb-0">Facebook</h6>
                                          <small class="text-muted">Not Connected</small>
                                        </div>
                                        <div class="col-4 col-sm-5 text-end">
                                          <button type="button" class="btn btn-icon btn-outline-secondary">
                                            <i class="bx bx-link-alt"></i>
                                          </button>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Twitter -->
                                    <div class="d-flex mb-3">
                                      <div class="flex-shrink-0">
                                          <img
                                            src="<?= base_url('assets/'); ?>img/icons/brands/twitter.png"
                                            alt="twitter"
                                            class="me-3"
                                            height="30"
                                          />
                                      </div>
                                      <div class="flex-grow-1 row">
                                        <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                          <h6 class="mb-0">Twitter</h6>
                                          <small class="text-muted">Not Connected</small>
                                        </div>
                                        <div class="col-4 col-sm-5 text-end">
                                          <button type="button" class="btn btn-icon btn-outline-secondary">
                                            <i class="bx bx-link-alt"></i>
                                          </button>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Instagram -->
                                    <div class="d-flex mb-3">
                                      <div class="flex-shrink-0">
                                          <img
                                            src="<?= base_url('assets/'); ?>img/icons/brands/instagram.png"
                                            alt="instagram"
                                            class="me-3"
                                            height="30"
                                          />
                                      </div>
                                      <div class="flex-grow-1 row">
                                        <div class="col-8 col-sm-7 mb-sm-0 mb-2">
                                          <h6 class="mb-0">Instagram</h6>
                                          <small class="text-muted">Not Connected</small>
                                        </div>
                                        <div class="col-4 col-sm-5 text-end">
                                          <button type="button" class="btn btn-icon btn-outline-secondary">
                                            <i class="bx bx-link-alt"></i>
                                          </button>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End -->
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- End -->
                          </div>
                        </div>
                      </div>
                      <!-- End -->
                    </div>
                    <!-- /Account -->
                  </div>
                  
            </div>
            <!-- New col -->
            <div class="col-lg-6 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary">Congratulation <?= $user['name']; ?>! 🎉</h5>
                          <p class="mb-4">
                            You have done <span class="fw-bold">72%</span> more sales today. Check your new badge in
                            your profile.
                          </p>

                          <div class="col">
                            <button
                              type="button"
                              class="btn rounded-pill btn-outline-primary"
                              data-bs-toggle="popover"
                              data-bs-offset="0,14"
                              data-bs-placement="right"
                              data-bs-html="true"
                              data-bs-content="<p>This is a very beautiful popover, show some love.</p> <div class='d-flex justify-content-between'><button type='button' class='btn btn-sm btn-outline-secondary'>Skip</button><button type='button' class='btn btn-sm btn-primary'>Read More</button></div>"
                              title="Congratulation! 🎉"
                            >
                              <span class="bx bx-fw bx-bell bx-tada"></span>  
                              View Details
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                          <img
                            src="<?= base_url('assets/'); ?>img/illustrations/man-with-laptop-light.png"
                            height="140"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
        </div>

        <!-- End -->

    </div>
    <!-- / Content -->    