
                  
                </div>
              </div>
             
              <!--   Core JS Files   -->
              <script src="<?php echo base_url('assets/js/core/jquery.min.js') ?>" type="text/javascript"></script>
              
              <script src="<?php echo base_url('assets/js/core/popper.min.js') ?>" type="text/javascript"></script>
              <script src="<?php echo base_url('assets/js/core/bootstrap-material-design.min.js') ?>" type="text/javascript" ></script>
              <script src="<?php echo base_url('assets/js/plugins/perfect-scrollbar.jquery.min.js') ?>" ></script>
              <!-- Plugin for the momentJs  -->
              <script src="<?php echo base_url('assets/js/plugins/moment.min.js') ?>"></script>
              <!--  Plugin for Sweet Alert -->
              <script src="<?php echo base_url('assets/js/plugins/sweetalert2.js') ?>"></script>
              <!-- Forms Validations Plugin -->
              <script src="<?php echo base_url('assets/js/plugins/jquery.validate.min.js') ?>"></script>
              <!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
              <script src="<?php echo base_url('assets/js/plugins/jquery.bootstrap-wizard.js') ?>"></script>
              <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
              <script src="<?php echo base_url('assets/js/plugins/bootstrap-selectpicker.js') ?>"></script>
              <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
              <script src="<?php echo base_url('assets/js/plugins/bootstrap-datetimepicker.min.js') ?>"></script>
              <!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
              <script src="<?php echo base_url('assets/js/plugins/jquery.dataTables.min.js') ?>"></script>
              <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
              <script src="<?php echo base_url('assets/js/plugins/bootstrap-tagsinput.js') ?>"></script>
              <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
              <script src="<?php echo base_url('assets/js/plugins/jasny-bootstrap.min.js') ?>"></script>
              <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
              <script src="<?php echo base_url('assets/js/plugins/fullcalendar.min.js') ?>"></script>
              <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
              <script src="<?php echo base_url('assets/js/plugins/jquery-jvectormap.js') ?>"></script>
              <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
              <script src="<?php echo base_url('assets/js/plugins/nouislider.min.js') ?>"></script>
              <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
              <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js') ?>"></script>
              <!-- Library for adding dinamically elements -->
              <script src="<?php echo base_url('assets/js/plugins/arrive.min.js') ?>"></script>
              <!--  Google Maps Plugin    -->
              <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
              <!-- Chartist JS -->
              <script src=" <?php echo base_url("
assets/js/plugins/chartist.min.js") ?>"></script>
              <!--  Notifications Plugin    -->
              <script src="<?php echo base_url("assets/js/plugins/bootstrap-notify.js") ?>"></script>
              <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
              <script src="<?php echo base_url("assets/js/material-dashboard.min.js?v=2.0.2") ?>" type="text/javascript"></script>
              <!-- Material Dashboard DEMO methods, don't include it in your project! -->
              <script>
                $(document).ready(function() {
                  $().ready(function() {
                    $sidebar = $('.sidebar');

                    $sidebar_img_container = $sidebar.find('.sidebar-background');

                    $full_page = $('.full-page');

                    $sidebar_responsive = $('body > .navbar-collapse');

                    window_width = $(window).width();

                    fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                    if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                      if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                        $('.fixed-plugin .dropdown').addClass('open');
                      }

                    }

                    $('.fixed-plugin a').click(function(event) {
                      // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                      if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                          event.stopPropagation();
                        } else if (window.event) {
                          window.event.cancelBubble = true;
                        }
                      }
                    });

                    $('.fixed-plugin .active-color span').click(function() {
                      $full_page_background = $('.full-page-background');

                      $(this).siblings().removeClass('active');
                      $(this).addClass('active');

                      var new_color = $(this).data('color');

                      if ($sidebar.length != 0) {
                        $sidebar.attr('data-color', new_color);
                      }

                      if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                      }

                      if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data-color', new_color);
                      }
                    });

                    $('.fixed-plugin .background-color .badge').click(function() {
                      $(this).siblings().removeClass('active');
                      $(this).addClass('active');

                      var new_color = $(this).data('background-color');

                      if ($sidebar.length != 0) {
                        $sidebar.attr('data-background-color', new_color);
                      }
                    });

                    $('.fixed-plugin .img-holder').click(function() {
                      $full_page_background = $('.full-page-background');

                      $(this).parent('li').siblings().removeClass('active');
                      $(this).parent('li').addClass('active');


                      var new_image = $(this).find("img").attr('src');

                      if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function() {
                          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                          $sidebar_img_container.fadeIn('fast');
                        });
                      }

                      if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $full_page_background.fadeOut('fast', function() {
                          $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                          $full_page_background.fadeIn('fast');
                        });
                      }

                      if ($('.switch-sidebar-image input:checked').length == 0) {
                        var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                      }

                      if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                      }
                    });

                    $('.switch-sidebar-image input').change(function() {
                      $full_page_background = $('.full-page-background');

                      $input = $(this);

                      if ($input.is(':checked')) {
                        if ($sidebar_img_container.length != 0) {
                          $sidebar_img_container.fadeIn('fast');
                          $sidebar.attr('data-image', '#');
                        }

                        if ($full_page_background.length != 0) {
                          $full_page_background.fadeIn('fast');
                          $full_page.attr('data-image', '#');
                        }

                        background_image = true;
                      } else {
                        if ($sidebar_img_container.length != 0) {
                          $sidebar.removeAttr('data-image');
                          $sidebar_img_container.fadeOut('fast');
                        }

                        if ($full_page_background.length != 0) {
                          $full_page.removeAttr('data-image', '#');
                          $full_page_background.fadeOut('fast');
                        }

                        background_image = false;
                      }
                    });

                    $('.switch-sidebar-mini input').change(function() {
                      $body = $('body');

                      $input = $(this);

                      if (md.misc.sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                      } else {

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                        setTimeout(function() {
                          $('body').addClass('sidebar-mini');

                          md.misc.sidebar_mini_active = true;
                        }, 300);
                      }

                      // we simulate the window Resize so the charts will get updated in realtime.
                      var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                      }, 180);

                      // we stop the simulation of Window Resize after the animations are completed
                      setTimeout(function() {
                        clearInterval(simulateWindowResize);
                      }, 1000);

                    });
                  });
                });
              </script>
              <script>
              $(document).ready(function() {



                $('#datatables').DataTable({
                  "pagingType": "full_numbers",
                  "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                  ],
                  responsive: true,
                  language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                  }
                });

                var table = $('#datatable').DataTable();

                // Edit record
                table.on('click', '.edit', function() {
                  $tr = $(this).closest('tr');
                  var data = table.row($tr).data();
                  alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
                });

                // Delete a record
                table.on('click', '.remove', function(e) {
                  $tr = $(this).closest('tr');
                  table.row($tr).remove().draw();
                  e.preventDefault();
                });

                //Like record
                table.on('click', '.like', function() {
                  alert('You clicked on Like button');
                  });
              });
              </script>

              <script>
                $(document).ready(function() {
                    $('#addMore').click(function(){
                    $('.divMore').append(
                      "<div class='row'>"+
                      "<label class='col-sm-2 col-form-label'>Pregunta</label>"+
                      "<div class='col-sm-10'><div class='form-group bmd-form-group'>"+
                      "<input type='text' class='form-control pregunta'>"+
                      "</div></div></div>"
                      );
                   });
                   var url = window.location.pathname;
                   var cad = url.split("/");
                   console.log("Url prueba",url);
                  
                     switch(cad[2]){

                        case 'reportes':
                          $('.reports').addClass('active');
                          $('.dashboard').removeClass('active');
                          $('.users').removeClass('active');
                          $('.campaigns').removeClass('active');
                          $('.region').removeClass('active');
                         break;

                         case 'usuarios':
                         $('.users').addClass('active');
                         $('.reports').removeClass('active');
                         $('.dashboard').removeClass('active');
                         $('.campaigns').removeClass('active');
                         $('.region').removeClass('active');
                         break;

                         case 'dinamicas':
                         $('.dinamicas').addClass('active');
                         $('.campaigns').addClass('active');
                         $('.users').removeClass('active');
                         $('.reports').removeClass('active');
                         $('.dashboard').removeClass('active');
                         break;

                         case 'paises':
                         $('.conf').addClass('active');
                         $('.pais').addClass('active');
                         $('.campaigns').removeClass('active');
                         $('.users').removeClass('active');
                         $('.reports').removeClass('active');
                         $('.dashboard').removeClass('active');
                         $('.region').removeClass('active');
                         break;

                         case 'regiones':
                         $('.region').addClass('active');
                         $('.conf').addClass('active');
                         $('.campaigns').removeClass('active');
                         $('.users').removeClass('active');
                         $('.reports').removeClass('active');
                         $('.dashboard').removeClass('active');
                         break;

                         case 'sponsors':
                         $('.sponsor').addClass('active');
                         $('.conf').addClass('active');
                         $('.campaigns').removeClass('active');
                         $('.users').removeClass('active');
                         $('.reports').removeClass('active');
                         $('.dashboard').removeClass('active');
                         break;

                         case 'sucursales':
                         $('.sucursal').addClass('active');
                         $('.conf').addClass('active');
                         $('.campaigns').removeClass('active');
                         $('.users').removeClass('active');
                         $('.reports').removeClass('active');
                         $('.dashboard').removeClass('active');
                         break;

                         case 'premios':
                         $('.premio').addClass('active');
                         $('.conf').addClass('active');
                         $('.campaigns').removeClass('active');
                         $('.users').removeClass('active');
                         $('.reports').removeClass('active');
                         $('.dashboard').removeClass('active');
                         break;

                         case 'vendedores':
                         $('.vendedor').addClass('active');
                         $('.conf').addClass('active');
                         $('.campaigns').removeClass('active');
                         $('.users').removeClass('active');
                         $('.reports').removeClass('active');
                         $('.dashboard').removeClass('active');
                         break;

                         case 'tematicas':
                         $('.tematica').addClass('active');
                         $('.conf').addClass('active');
                         $('.campaigns').removeClass('active');
                         $('.users').removeClass('active');
                         $('.reports').removeClass('active');
                         $('.dashboard').removeClass('active');
                         break;

                         case 'aceleradores':
                         $('.acelerador').addClass('active');
                         $('.conf').addClass('active');
                         $('.campaigns').removeClass('active');
                         $('.users').removeClass('active');
                         $('.reports').removeClass('active');
                         $('.dashboard').removeClass('active');
                         break;

                         case 'logros':
                         $('.logro').addClass('active');
                         $('.conf').addClass('active');
                         $('.campaigns').removeClass('active');
                         $('.users').removeClass('active');
                         $('.reports').removeClass('active');
                         $('.dashboard').removeClass('active');
                         break;


                         default :
                         $('.dashboard').addClass('active');
                         $('.campaigns').removeClass('active');
                         $('.users').removeClass('active');
                         $('.reports').removeClass('active');
                         break;

                     }

                   $('input[type="search"].form-control').attr('placeholder','Buscar registro');  
                   
                  md.initDashboardPageCharts();

                  md.initVectorMap();

                });
              </script>
              <script>
                 $(document).ready(function() {
      // initialise Datetimepicker and Sliders
      md.initFormExtendedDatetimepickers();
      if ($('.slider').length != 0) {
        md.initSliders();
      }
    });
              </script>
</body>

</html>