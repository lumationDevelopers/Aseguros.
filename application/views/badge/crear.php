<div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
              <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Crear Badge</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

<div class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-12">
                  <a href="<?php echo base_url('badge') ?>"><button class="btn btn-info">Regresar a Badges<div class="ripple-container"></div></button></a>
                    <div class="card ">
                      <div class="card-header card-header-success card-header-text">
                        <div class="card-text">
                          <h4 class="card-title">Crear Badge</h4>
                        </div>
                      </div>
                      <div class="card-body ">
                        <form method="get" action="/" class="form-horizontal">
                          <div class="row">
                            <label class="col-sm-2 col-form-label">Nombre Badge</label>
                            <div class="col-sm-10">
                              <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" placeholder="">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <label class="col-sm-2 col-form-label">Descripción</label>
                            <div class="col-sm-10">
                              <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" placeholder="">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <label class="col-sm-2 col-form-label">Valor</label>
                            <div class="col-sm-10">
                              <div class="form-group bmd-form-group">
                                <input type="number" class="form-control" placeholder="">
                              </div>
                            </div>
                          </div>

                         <div class="row">

                            <div class="col-lg-6 col-md-6 col-sm-3 text-center">
                                <select class="selectpicker" data-style="btn btn-info btn-round" title="Single Select">
                                  <option disabled selected>KPI</option>
                                  <option value="2">KPI 1</option>
                                  
                                </select>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-3 text-center">
                                <select class="selectpicker" data-style="btn btn-info btn-round" title="Single Select">
                                  <option disabled selected>Condición</option>
                                  <option value="1"><=</option>
                                  <option value="2">>=</option>
                                  <option value="3">=</option>
                                </select>
                              </div>

                          </div>

                          <div class="row">
                            <div class="col-sm-12 text-center">
                              <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                  <img src="<?php echo base_url('assets/img/image_placeholder.jpg') ?>" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                  <span class="btn btn-info btn-round btn-file">
                                    <span class="fileinput-new">Subir foto</span>
                                    <span class="fileinput-exists">Change</span>
                                    <input type="file" name="...">
                                  <div class="ripple-container"></div></span>
                                  <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                              </div>
                            </div>
                          </div>


                          <div class="row">
                            <div class="col-md-12  text-center">
                             <button class="btn btn-info">Crear Badge<div class="ripple-container"></div></button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

      </div>
  </div>
</div>