

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="" data-image="<?php echo base_url('assets/img/sidebar-1.jpg' ) ?>">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Aseguro Chubb
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src="<?php echo base_url('assets/img/faces/avatar.jpg') ?>" />
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                <?php echo'Nombre de usuario' ?>
                <b class="caret"></b>
              </span>
            </a>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> MP </span>
                    <span class="sidebar-normal"> My Profile </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> EP </span>
                    <span class="sidebar-normal"> Edit Profile </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> S </span>
                    <span class="sidebar-normal"> Settings </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item dashboard" >
            <a class="nav-link" href="<?php echo site_url('dashboard'); ?>">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>
          <li class="nav-item users">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
              <i class="material-icons">people</i>
              <p> Usuarios
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="<?php echo site_url('usuarios'); ?>">
                   <span class="sidebar-mini"> <i class="material-icons">person</i> </span>
                    <span class="sidebar-normal"> Ver usuarios </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>


         <li class="nav-item campaigns">
            <a class="nav-link collapsed" data-toggle="collapse" href="#formsExamples" aria-expanded="false">
              <i class="material-icons">content_paste</i>
              <p> Campañas
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="formsExamples" style="">
              <ul class="nav">
                <li class="nav-item dinamicas">
                  <a class="nav-link" href="<?php echo site_url('dinamicas'); ?>">
                    <span class="sidebar-mini"> <i class="material-icons">table_chart</i> </span>
                    <span class="sidebar-normal"> Ver campañas </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>


          <li class="nav-item conf">
            <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
              <i class="material-icons">apps</i>
              <p> Configuraciones
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples">
              <ul class="nav">
                <li class="nav-item pais">
                    <a class="nav-link" href="<?php echo site_url('paises'); ?>">
                    <span class="sidebar-mini"> <i class="material-icons">map</i> </span>
                    <span class="sidebar-normal"> Países </span>
                    </a>
                </li>
                <li class="nav-item region">
                    <a class="nav-link" href="<?php echo site_url('regiones'); ?>">
                      <span class="sidebar-mini"> <i class="material-icons">my_location</i> </span>
                      <span class="sidebar-normal"> Regiones </span>
                    </a>
                </li>
                <li class="nav-item sponsor">
                  <a class="nav-link" href="<?php echo site_url('sponsors'); ?>">
                    <span class="sidebar-mini"> <i class="material-icons">dns</i> </span>
                    <span class="sidebar-normal"> Sponsors </span>
                  </a>
                </li>
                 <li class="nav-item sucursal">
                  <a class="nav-link" href="<?php echo site_url('sucursales'); ?>">
                    <span class="sidebar-mini"><i class="material-icons">business</i></span>
                    <span class="sidebar-normal"> Sucursales </span>
                  </a>
                </li>
                <li class="nav-item canal">
                  <a class="nav-link" href="<?php echo site_url('canal'); ?>">
                    <span class="sidebar-mini"><i class="material-icons">money</i></span>
                    <span class="sidebar-normal"> Canales </span>
                  </a>
                </li>
                <li class="nav-item kpi">
                  <a class="nav-link" href="<?php echo site_url('kpi'); ?>">
                    <span class="sidebar-mini"><i class="material-icons">money</i></span>
                    <span class="sidebar-normal"> KPI </span>
                  </a>
                </li>
                 <li class="nav-item kpi">
                  <a class="nav-link" href="<?php echo site_url('badge'); ?>">
                    <span class="sidebar-mini"><i class="material-icons">money</i></span>
                    <span class="sidebar-normal"> Badge </span>
                  </a>
                </li>
                <li class="nav-item premio">
                  <a class="nav-link" href="<?php echo site_url('premios'); ?>">
                    <span class="sidebar-mini"><i class="material-icons">money</i></span>
                    <span class="sidebar-normal"> Premios </span>
                  </a>
                </li>
                <li class="nav-item producto">
                  <a class="nav-link" href="<?php echo site_url('producto'); ?>">
                    <span class="sidebar-mini"><i class="material-icons">money</i></span>
                    <span class="sidebar-normal"> Producto </span>
                  </a>
                </li>
                <li class="nav-item producto">
                  <a class="nav-link" href="<?php echo site_url('titulo'); ?>">
                    <span class="sidebar-mini"><i class="material-icons">money</i></span>
                    <span class="sidebar-normal"> Título </span>
                  </a>
                </li>
                <li class="nav-item campaigns">
                  <a class="nav-link collapsed" data-toggle="collapse" href="#files" aria-expanded="false">
                    <i class="material-icons">content_paste</i>
                    <p> Archivos
                      <b class="caret"></b>
                    </p>
                  </a>
                  <div class="collapse" id="files" style="">
                    <ul class="nav">
                      <li class="nav-item dinamicas">
                        <a class="nav-link" href="<?php echo site_url('archivo'); ?>">
                          <span class="sidebar-mini"> <i class="material-icons">table_chart</i> </span>
                          <span class="sidebar-normal">Ver Archivos </span>
                        </a>
                      </li>
                      <li class="nav-item dinamicas">
                        <a class="nav-link" href="<?php echo site_url('categoria_archivo'); ?>">
                          <span class="sidebar-mini"> <i class="material-icons">table_chart</i> </span>
                          <span class="sidebar-normal">Categoría de archivos </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="nav-item campaigns">
                  <a class="nav-link collapsed" data-toggle="collapse" href="#supervisor" aria-expanded="false">
                    <i class="material-icons">content_paste</i>
                    <p> Supervisores
                      <b class="caret"></b>
                    </p>
                  </a>
                  <div class="collapse" id="supervisor" style="">
                    <ul class="nav">
                      <li class="nav-item dinamicas">
                        <a class="nav-link" href="<?php echo site_url('supervisor'); ?>">
                          <span class="sidebar-mini"> <i class="material-icons">table_chart</i> </span>
                          <span class="sidebar-normal"> Supervisores </span>
                        </a>
                      </li>
                      <li class="nav-item dinamicas">
                        <a class="nav-link" href="<?php echo site_url('tipo_supervisor'); ?>">
                          <span class="sidebar-mini"> <i class="material-icons">table_chart</i> </span>
                          <span class="sidebar-normal">Tipos de supervisor </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="nav-item campaigns">
                  <a class="nav-link collapsed" data-toggle="collapse" href="#trivia" aria-expanded="false">
                    <i class="material-icons">content_paste</i>
                    <p> Trivia
                      <b class="caret"></b>
                    </p>
                  </a>
                  <div class="collapse" id="trivia" style="">
                    <ul class="nav">
                      <li class="nav-item dinamicas">
                        <a class="nav-link" href="<?php echo site_url('trivia'); ?>">
                          <span class="sidebar-mini"> <i class="material-icons">table_chart</i> </span>
                          <span class="sidebar-normal">Trivias</span>
                        </a>
                      </li>
                      <li class="nav-item dinamicas">
                        <a class="nav-link" href="<?php echo site_url('pregunta'); ?>">
                          <span class="sidebar-mini"> <i class="material-icons">table_chart</i> </span>
                          <span class="sidebar-normal">Preguntas</span>
                        </a>
                      </li>
                      <li class="nav-item dinamicas">
                        <a class="nav-link" href="<?php echo site_url('respuesta'); ?>">
                          <span class="sidebar-mini"> <i class="material-icons">table_chart</i> </span>
                          <span class="sidebar-normal">Respuestas </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>

                <li class="nav-item vendedor">
                  <a class="nav-link" href="<?php echo site_url('frase'); ?>">
                    <span class="sidebar-mini"><i class="material-icons">streetview</i></span>
                    <span class="sidebar-normal"> Frases motivacionales </span>
                  </a>
                </li>
               
                <li class="nav-item vendedor">
                  <a class="nav-link" href="<?php echo site_url('vendedores'); ?>">
                    <span class="sidebar-mini"><i class="material-icons">streetview</i></span>
                    <span class="sidebar-normal"> Vendedores </span>
                  </a>
                </li>
                <li class="nav-item tematica">
                  <a class="nav-link" href="<?php echo site_url('tematicas'); ?>">
                    <span class="sidebar-mini"> <i class="material-icons">rate_review</i></span> 
                    <span class="sidebar-normal"> Temática </span>
                  </a>
                </li>
                <li class="nav-item acelerador">
                  <a class="nav-link" href="<?php echo site_url('aceleradores'); ?>">
                    <span class="sidebar-mini"> <i class="material-icons">shutter_speed
</i></span>    
                    <span class="sidebar-normal"> Aceleradores</span>
                  </a>
                </li>
                <li class="nav-item logro">
                  <a class="nav-link" href="<?php echo site_url('logros'); ?>">
                    <span class="sidebar-mini"> <i class="material-icons">straighten</i> </span>
                    <span class="sidebar-normal"> Logros </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item reports" >
            <a class="nav-link" href="<?php echo site_url('reportes') ?>">
              <i class="material-icons">pie_chart</i>
              <p> Reportes </p>
            </a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="<?php echo site_url('login'); ?>">
              <i class="material-icons">keyboard_backspace</i>
              <p>Cerrar sesión</p>
            </a>
          </li>

        </ul>
      </div>
    </div>
    
      
      

      