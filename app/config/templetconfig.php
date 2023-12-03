<?php
return [
    'template' => [
        'header'         => TEMPLATE_PATH . 'header.php',
        'nav'            => TEMPLATE_PATH . 'nav.php',
        'wraper_stat'    => TEMPLATE_PATH . 'wrapperstart.php',
        ':view'          => ':action_view',
        'wraper_end'     => TEMPLATE_PATH . 'wrapperend.php'
    ],
    'header_resources'  => [
        'css' => [
            'bootstrab'            => CSS . 'bootstrap/css/bootstrap.min.css',
            'fonto_awsem_css'      => CSS . 'dist/css/font-awesome.css',
            'plugines'             => CSS . 'plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css',
            'plugines'             => CSS . 'plugins/datatables/dataTables.bootstrap.css',
            'plugines'             => CSS . 'plugins/iCheck/all.css',
            'adminlte_css'         => CSS . 'dist/css/AdminLTE.min.css',
            'all_skin_css'         => CSS . 'dist/css/skins/_all-skins.min.css',
            'style'                => CSS . 'dist/css/style.css',
           
            

        ],
        'js' => [
            'style_js'             => JS . 'plugins/jQuery/jQuery-2.1.4.min.js'
        ]      
        
        
        ],
        'footer_resources' => [
            'jquery'                => JS . 'bootstrap/js/bootstrap.min.js',
            'helper'                => JS . 'dist/js/app.min.js',
            'main1'                  => JS . 'dist/js/functions.js',
            'main2'                  => JS . 'plugins/datatables/jquery.dataTables.min.js',
            'main3'                  => JS . 'plugins/datatables/dataTables.bootstrap.min.js',
            'main4'                  => JS . 'plugins/datatables/dataTables.bootstrap.min.js',
            'main5'                  => JS . 'plugins/datatables/jquery-datatable.js',
            'main6'                  => JS . 'plugins/datatables/dataTables.buttons.min.js',
            'main7'                  => JS . 'plugins/datatables/buttons.flash.min.js',
            'main8'                  => JS . 'plugins/datatables/jszip.min.js',
            'main9'                  => JS . 'plugins/datatables/pdfmake.min.js',
            'main10'                  => JS . 'plugins/datatables/vfs_fonts.js',
            'main11'                  => JS . 'plugins/datatables/buttons.html5.min.js',
            'main12'                  => JS . 'plugins/ckeditor/ckeditor.js',
            'main13'                  => JS . 'plugins/iCheck/icheck.min.js',
            'main14'                  => JS . 'plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'

        ]
];