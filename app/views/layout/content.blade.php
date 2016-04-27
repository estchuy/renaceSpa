<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/images/renaceSpa_ico.ico">

        <title>Renace Spa System</title>

        <!--Form Wizard-->
        <link rel="stylesheet" type="text/css" href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/jquery.steps/demo/css/jquery.steps.css" />
        <!-- Form advanced -->
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" /> 

        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/modernizr.min.js"></script>

        <!-- picker form -->
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- Plugins css form Advanced -->
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/switchery/dist/switchery.min.css" rel="stylesheet" />
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />


    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="http://<?php echo $_SERVER['SERVER_NAME']; ?>" class="logo"><img class="img-circle thumb-sm" alt="user-img" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/images/renaceSpa.png"></a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect">
                                        <i class="md md-menu"></i>
                                    </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav hidden-xs">

                                <li><a href="#" class="waves-effect">Files</a></li>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle waves-effect" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                                  <ul class="dropdown-menu dropdown-menu-animate">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li><a href="#">Separated link</a></li>
                                  </ul>
                                </li>
                              </ul>


                            <form role="search" class="navbar-left app-search pull-left hidden-xs">
                           <input type="text" placeholder="Search..." class="form-control">
                           <a href=""><i class="fa fa-search"></i></a>
                      </form>


                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="true">
                                        <i class="fa fa-bell-o"></i> <span class="badge badge-xs badge-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-animate drop-menu-right dropdown-menu-lg">
                                        <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                        <li class="list-group nicescroll notification-list">
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond noti-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog noti-warning"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-bell-o noti-custom"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">Updates</h5>
                                                    <p class="m-0">
                                                        <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-user-plus noti-pink"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New user registered</h5>
                                                    <p class="m-0">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                            <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-diamond noti-primary"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left p-r-10">
                                                    <em class="fa fa-cog noti-warning"></em>
                                                 </div>
                                                 <div class="media-body">
                                                    <h5 class="media-heading">New settings</h5>
                                                    <p class="m-0">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>

                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="list-group-item text-right">
                                                <small class="font-600">See all notifications</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect"><i class="fa fa-cog"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile waves-effect" data-toggle="dropdown" aria-expanded="true"><img src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu dropdown-menu-animate drop-menu-right">
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                        <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
            <!-- ========== Left Sidebar Start MENU ========== -->
            @include('layout.menu')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                      @if(Session::has('notification'))
                        <div id="notificationDiv" class="{{Session::get('level')}} alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <strong>{{Session::get('notification')}}</strong>
                        </div>
                      @endif
                       @yield("content")
                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    DySChuy 2016 www.estuardochuy.com
                </footer>

            </div>
        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery.min.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/bootstrap.min.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/detect.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/fastclick.js"></script>

        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery.slimscroll.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery.blockUI.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/waves.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/wow.min.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery.nicescroll.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery.scrollTo.min.js"></script>

        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery.core.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/js/jquery.app.js"></script>

        <!--Form Validation-->
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>

        <!--Form Validation-->
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/bootstrapvalidator/dist/js/bootstrapValidator.js" type="text/javascript"></script>

        <!--Form Wizard-->
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/jquery.steps/build/jquery.steps.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>

        <!--wizard initialization-->
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/pages/jquery.wizard-init.js" type="text/javascript"></script>

        <!-- picker form -->
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/moment/moment.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/timepicker/bootstrap-timepicker.min.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/clockpicker/dist/jquery-clockpicker.min.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
        
        <!-- form advanced -->
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/switchery/dist/switchery.min.js"></script>
        <script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/select2/select2.min.js" type="text/javascript"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/bootstrap-filestyle/src/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>

        <!-- Autocomplete -->
        <script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/autocomplete/jquery.mockjax.js"></script>
        <script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/autocomplete/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/autocomplete/countries.js"></script>
        <script type="text/javascript" src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/pages/autocomplete.js"></script>

        <!-- form mask -->
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js" type="text/javascript"></script>
        <script src="http://<?php echo $_SERVER['SERVER_NAME']; ?>/packages/assets/plugins/autoNumeric/autoNumeric.js" type="text/javascript"></script>

        <script type="text/javascript">
            
      jQuery(function($) {
          $('.autonumber').autoNumeric('init');    
      });
        </script>

          <script>
        jQuery(document).ready(function() {

          // Time Picker
          jQuery('#timepicker').timepicker({
            defaultTIme : false
          });
          jQuery('#timepicker2').timepicker({
            showMeridian : false
          });
          jQuery('#timepicker3').timepicker({
            minuteStep : 15
          });
          
          //colorpicker start

                  $('.colorpicker-default').colorpicker({
                      format: 'hex'
                  });
                  $('.colorpicker-rgba').colorpicker();
                  
                  // Date Picker
                  jQuery('#datepicker').datepicker();
                  jQuery('#datepicker-autoclose').datepicker({
                    autoclose: true,
                    todayHighlight: true
                  });
                  jQuery('#datepicker-inline').datepicker();
                  jQuery('#datepicker-multiple-date').datepicker({
                      format: "mm/dd/yyyy",
            clearBtn: true,
            multidate: true,
            multidateSeparator: ","
                  });
                  jQuery('#date-range').datepicker({
                      toggleActive: true
                  });
                  
                  //Clock Picker
                  $('.clockpicker').clockpicker({
                    donetext: 'Done'
                  });
                  
                  $('#single-input').clockpicker({
              placement: 'bottom',
              align: 'left',
              autoclose: true,
              'default': 'now'
          });
          $('#check-minutes').click(function(e){
              // Have to stop propagation here
              e.stopPropagation();
              $("#single-input").clockpicker('show')
                      .clockpicker('toggleView', 'minutes');
          });
          
          
          //Date range picker
          $('.input-daterange-datepicker').daterangepicker({
            buttonClasses: ['btn', 'btn-sm'],
                  applyClass: 'btn-default',
                  cancelClass: 'btn-white'
          });
              $('.input-daterange-timepicker').daterangepicker({
                  timePicker: true,
                  format: 'MM/DD/YYYY h:mm A',
                  timePickerIncrement: 30,
                  timePicker12Hour: true,
                  timePickerSeconds: false,
                  buttonClasses: ['btn', 'btn-sm'],
                  applyClass: 'btn-default',
                  cancelClass: 'btn-white'
              });
              $('.input-limit-datepicker').daterangepicker({
                  format: 'MM/DD/YYYY',
                  minDate: '06/01/2015',
                  maxDate: '06/30/2015',
                  buttonClasses: ['btn', 'btn-sm'],
                  applyClass: 'btn-default',
                  cancelClass: 'btn-white',
                  dateLimit: {
                      days: 6
                  }
              });
      
              $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
      
              $('#reportrange').daterangepicker({
                  format: 'MM/DD/YYYY',
                  startDate: moment().subtract(29, 'days'),
                  endDate: moment(),
                  minDate: '01/01/2012',
                  maxDate: '12/31/2015',
                  dateLimit: {
                      days: 60
                  },
                  showDropdowns: true,
                  showWeekNumbers: true,
                  timePicker: false,
                  timePickerIncrement: 1,
                  timePicker12Hour: true,
                  ranges: {
                      'Today': [moment(), moment()],
                      'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                      'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                      'This Month': [moment().startOf('month'), moment().endOf('month')],
                      'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                  },
                  opens: 'left',
                  drops: 'down',
                  buttonClasses: ['btn', 'btn-sm'],
                  applyClass: 'btn-default',
                  cancelClass: 'btn-white',
                  separator: ' to ',
                  locale: {
                      applyLabel: 'Submit',
                      cancelLabel: 'Cancel',
                      fromLabel: 'From',
                      toLabel: 'To',
                      customRangeLabel: 'Custom',
                      daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                      monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                      firstDay: 1
                  }
              }, function (start, end, label) {
                  console.log(start.toISOString(), end.toISOString(), label);
                  $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
              });
          
        });
      </script>
      <script>
            jQuery(document).ready(function() {

                //advance multiselect start
                $('#my_multi_select3').multiSelect({
                    selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    afterInit: function (ms) {
                        var that = this,
                            $selectableSearch = that.$selectableUl.prev(),
                            $selectionSearch = that.$selectionUl.prev(),
                            selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                            selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                        that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                            .on('keydown', function (e) {
                                if (e.which === 40) {
                                    that.$selectableUl.focus();
                                    return false;
                                }
                            });

                        that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                            .on('keydown', function (e) {
                                if (e.which == 40) {
                                    that.$selectionUl.focus();
                                    return false;
                                }
                            });
                    },
                    afterSelect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    },
                    afterDeselect: function () {
                        this.qs1.cache();
                        this.qs2.cache();
                    }
                });

                // Select2
                $(".select2").select2();
                
                $(".select2-limiting").select2({
          maximumSelectionLength: 2
        });
        
         $('.selectpicker').selectpicker();
              $(":file").filestyle({input: false});
              });
              
              //Bootstrap-TouchSpin
              $(".vertical-spin").TouchSpin({
                verticalbuttons: true,
                verticalupclass: 'ion-plus-round',
                verticaldownclass: 'ion-minus-round'
            });
            var vspinTrue = $(".vertical-spin").TouchSpin({
                verticalbuttons: true
            });
            if (vspinTrue) {
                $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
            }
    
            $("input[name='demo1']").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%'
            });
            $("input[name='demo2']").TouchSpin({
                min: -1000000000,
                max: 1000000000,
                stepinterval: 50,
                maxboostedstep: 10000000,
                prefix: '$'
            });
            $("input[name='demo3']").TouchSpin();
            $("input[name='demo3_21']").TouchSpin({
                initval: 40
            });
            $("input[name='demo3_22']").TouchSpin({
                initval: 40
            });
    
            $("input[name='demo5']").TouchSpin({
                prefix: "pre",
                postfix: "post"
            });
            $("input[name='demo0']").TouchSpin({});
            
            
            //Bootstrap-MaxLength
            $('input#defaultconfig').maxlength()
            
            $('input#thresholdconfig').maxlength({
                threshold: 20
            });

            $('input#moreoptions').maxlength({
                alwaysShow: true,
                warningClass: "label label-success",
                limitReachedClass: "label label-danger"
            });

            $('input#alloptions').maxlength({
                alwaysShow: true,
                warningClass: "label label-success",
                limitReachedClass: "label label-danger",
                separator: ' out of ',
                preText: 'You typed ',
                postText: ' chars available.',
                validate: true
            });

            $('textarea#textarea').maxlength({
                alwaysShow: true
            });

            $('input#placement') .maxlength({
                    alwaysShow: true,
                    placement: 'top-left'
                });
        </script>


    </body>
</html>



