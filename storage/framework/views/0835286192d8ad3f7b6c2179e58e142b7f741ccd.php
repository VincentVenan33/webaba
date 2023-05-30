<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="<?php echo e(url('')); ?>/assets/images/favicon.ico" />
    <title>WEB ABA | <?php echo e($title); ?></title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/css/feather.css">
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/css/select2.css">
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/css/dropzone.css">
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/css/uppy.min.css">
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/css/jquery.steps.css">
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/css/quill.snow.css">
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/css/dataTables.bootstrap4.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="<?php echo e(url('')); ?>/css/app-light.css" id="lightTheme">
    
    <link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body class="vertical  light  ">
    <div class="wrapper">
        <nav class="topnav navbar navbar-light">
            <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
              <i class="fe fe-menu navbar-toggler-icon"></i>
            </button>
            <ul class="nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="avatar avatar-sm mt-2">
                    <img src="<?php echo e(url('')); ?>/assets/avatars/face-9.jpg" alt="..." class="avatar-img rounded-circle">
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <a class="dropdown-item" href="#">Activities</a>
                  <a class="dropdown-item" href="<?php echo e(route('actionlogout')); ?>">Log Out</a>
                </div>
              </li>
            </ul>
          </nav>
        <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
            <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <nav class="vertnav navbar navbar-light">
                <!-- nav bar -->
                <div class="w-100 mb-4 d-flex">
                    <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="<?php echo e(route('dashboard')); ?>">
                        <img class="logo" src="<?php echo e(url('')); ?>/assets/images/logo.png" alt="asiabangunabadi" />
                    </a>
                </div>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="<?php echo e(route('dashboard')); ?>" class="nav-link">
                            <i class="fe fe-home fe-16"></i>
                            <span class="ml-3 item-text">Dashboard</span>
                        </a>
                    </li>
                </ul>
                
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="<?php echo e(route('viewproduk')); ?>" class="nav-link">
                            <i class="fe fe-compass fe-16"></i>
                            <span class="ml-3 item-text">Products</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="<?php echo e(route('viewkatalog')); ?>" class="nav-link">
                            <i class="fe fe-grid fe-16"></i>
                            <span class="ml-3 item-text">Katalog</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="<?php echo e(route('viewteam')); ?>" class="nav-link">
                            <i class="fe fe-users fe-16"></i>
                            <span class="ml-3 item-text">Team</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="<?php echo e(route('viewuserdata')); ?>" class="nav-link">
                            <i class="fe fe-user fe-16"></i>
                            <span class="ml-3 item-text">User</span>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                        <a href="<?php echo e(route('viewcontact')); ?>" class="nav-link">
                            <i class="fe fe-inbox fe-16"></i>
                            <span class="ml-3 item-text">Inbox</span>
                            <?php if(isset($unread_count)): ?>
                                <?php $__env->startSection('notifications'); ?>
                                    <span class="badge badge-danger" style="padding: 4px 8px; font-weight: bold; line-height: 14px; font-size: 12px;"><?php echo e($unread_count); ?></span>
                                <?php echo $__env->yieldSection(); ?>
                            <?php endif; ?>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <?php echo $__env->yieldContent('main'); ?>

    </div> <!-- .wrapper -->
    <script src="https://kit.fontawesome.com/c3e62f3962.js" crossorigin="anonymous"></script>
    <script src="<?php echo e(url('')); ?>/js/popper.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/moment.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/simplebar.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/daterangepicker.js"></script>
    <script src="<?php echo e(url('')); ?>/js/jquery.stickOnScroll.js"></script>
    <script src="<?php echo e(url('')); ?>/js/tinycolor-min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/config.js"></script>
    <script src="<?php echo e(url('')); ?>/js/d3.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/topojson.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/datamaps.all.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/datamaps-zoomto.js"></script>
    <script src="<?php echo e(url('')); ?>/js/datamaps.custom.js"></script>
    <script src="<?php echo e(url('')); ?>/js/Chart.min.js"></script>
    <script>
        /* defind global options */
        // Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
        Chart.defaults.global.defaultFontColor = colors.mutedColor;
        </script>
    <script src="<?php echo e(url('')); ?>/js/gauge.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/jquery.sparkline.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/apexcharts.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/apexcharts.custom.js"></script>
    <script src="<?php echo e(url('')); ?>/js/jquery.mask.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/select2.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/jquery.steps.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/jquery.validate.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/jquery.timepicker.js"></script>
    <script src="<?php echo e(url('')); ?>/js/dropzone.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/uppy.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/quill.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/jquery.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/popper.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/moment.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo e(url('')); ?>/js/simplebar.min.js"></script>
    <script src='<?php echo e(url('')); ?>/js/daterangepicker.js'></script>
    <script src='<?php echo e(url('')); ?>/js/jquery.stickOnScroll.js'></script>
    <script src="<?php echo e(url('')); ?>/js/tinycolor-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
    <script src='<?php echo e(url('')); ?>/js/jquery.dataTables.min.js'></script>
    <script src='<?php echo e(url('')); ?>/js/dataTables.bootstrap4.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js" integrity="sha512-F636MAkMAhtTplahL9F6KmTfxTmYcAcjcCkyu0f0voT3N/6vzAuJ4Num55a0gEJ+hRLHhdz3vDvZpf6kqgEa5w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='<?php echo e(url('')); ?>/js/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/dayjs@1.10.7/dayjs.min.js"></script>
    <script src="path/to/dayjs.min.js"></script>
    <script>
        var uptarg = document.getElementById('drag-drop-area');
        if (uptarg) {
            var uppy = Uppy.Core().use(Uppy.Dashboard, {
                inline: true,
                target: uptarg,
                proudlyDisplayPoweredByUppy: false,
                theme: 'dark',
                width: 770,
                height: 210,
                plugins: ['Webcam']
            }).use(Uppy.Tus, {
                endpoint: 'https://master.tus.io/files/'
            });
            uppy.on('complete', (result) => {
                console.log('Upload complete! We’ve uploaded these files:', result.successful)
            });
        }
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
    <script>
        $('#dataTable-1').DataTable(
        {
          autoWidth: true,
          "lengthMenu": [
            [16, 32, 64, -1],
            [16, 32, 64, "All"]
          ]
        });
      </script>
      <script src="<?php echo e(url('')); ?>/js/apps.js"></script>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];

        function gtag()
        {
          dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
      </script>
      <script>
        <?php if(Session::has('message')): ?>
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.success("<?php echo e(session('message')); ?>");
        <?php endif; ?>

        <?php if(Session::has('error')): ?>
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.error("<?php echo e(session('error')); ?>");
        <?php endif; ?>

        <?php if(Session::has('info')): ?>
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.info("<?php echo e(session('info')); ?>");
        <?php endif; ?>

        <?php if(Session::has('warning')): ?>
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
                toastr.warning("<?php echo e(session('warning')); ?>");
        <?php endif; ?>
      </script>
      
      <script>
        const inputharga = document.getElementById('inputharga');
        inputharga.addEventListener('input', function (e) {
            const regex = /^[0-9]+(\.[0-9]*)?$/g;
            const input = e.target.value;
            const result = regex.test(input);
            if (!result) {
                e.target.value = input.replace(/[^\d.]/g, '');
            }
        });
    </script>
    
    <script>
        // Mengambil input element
        const inputharga = document.getElementById('inputharga');

        // Menambahkan event listener pada saat pengguna mengetik
        inputharga.addEventListener('input', function () {
            // Membuang karakter selain angka dan tanda titik
            inputharga.value = inputharga.value.replace(/[^0-9\.]/g, '');
        });
    </script>
    
</body>

</html>
<?php /**PATH C:\xampp\htdocs\webaba\resources\views/layouts/template.blade.php ENDPATH**/ ?>