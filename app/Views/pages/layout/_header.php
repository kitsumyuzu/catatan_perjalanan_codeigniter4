<!DOCTYPE html>
<html>

    <head>

        <!-- Meta -->
        
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

        <!-- Webpage Icon & Title -->

            <title><?php echo $setting -> app_name ?></title>

            <link rel="icon" href="<?= base_url('assets/icon/favicon.ico') ?>" type="image/x-icon">

        <!-- Script -->
            
            <link rel="stylesheet" href="<?= base_url('template') ?>/fonts/fontawesome-free/css/all.min.css">
            <script src="<?= base_url('template') ?>/js/plugin/webfont/webfont.min.js"></script>

            <script>

                WebFont.load({

                    google: {"families":["Lato:300,400,700,900"]},
                    active: function() {

                        sessionStorage.fonts = true;

                    }

                });

            </script>

            <link rel="stylesheet" href="<?= base_url('template') ?>/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?= base_url('template') ?>/css/atlantis.min.css">
            
    </head>

<body data-background-color="bg3">