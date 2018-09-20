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
            <a class="navbar-brand" href="#pablo">Crear campaña</a>
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
        <a href="<?php echo base_url('dinamicas') ?>"><button class="btn btn-info">Regresar a campañas<div class="ripple-container"></div></button></a>
                    <div class="card ">
                      <div class="card-body ">
                        <form method="get" action="/" class="form-horizontal">
                          <div class="row">
                            <label class="col-sm-2 col-form-label">Nombre campaña</label>
                            <div class="col-sm-10">
                              <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" placeholder="">
                              </div>
                            </div>
                          </div>
                          
                          <div class="row">
                            <label class="col-sm-2 col-form-label">Encargado</label>
                            <div class="col-sm-10">
                              <div class="form-group bmd-form-group">
                                <input type="text" class="form-control">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <label class="col-sm-2 col-form-label">Descripción</label>
                            <div class="col-sm-10">
                              <div class="form-group bmd-form-group">
                                <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
                              </div>
                            </div>
                          </div>
                          

                          
                          <div class="row">

                             <div class="col-lg-4 col-md-4 col-sm-3 text-center">
                                <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select">
                                  <option disabled selected>País</option>
                                  <option value="2">Guatemala</option>
                                  <option value="3">México</option>
                                  <option value="4">El Salvador</option>
                                  <option value="5">Estados Unidos</option>
                                  <option value="6">Honduras</option>
                                </select>
                              </div>

                            <div class="col-lg-4 col-md-4 col-sm-3 text-center">
                                <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select">
                                  <option disabled selected>Region</option>
                                  <option value="2">Region 1</option>
                                  <option value="3">Region 2</option>
                                  <option value="4">Region 3</option>
                                  <option value="5">Region 4</option>
                                  <option value="6">Region 5</option>
                                </select>
                              </div>
                             
                              <div class="col-lg-4 col-md-4 col-sm-3 text-center">
                                <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select">
                                  <option disabled selected>Premio</option>
                                  <option value="2">Playera</option>
                                  <option value="3">Mouse gamer</option>
                                  <option value="4">Iphone X</option>
                                  <option value="5">Laptop Dell Inspiration</option>
                                </select>
                              </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12  text-center">
                             <button class="btn btn-info">Guardar<div class="ripple-container"></div></button>
                            </div>

                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

      </div>
  </div>
</div>