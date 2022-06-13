<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'bukti_pembayaran' => [
            'driver' => 'local',
            'root' => storage_path('app/bukti_pembayaran'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],
        //lokasi menyimpan foto barang
        'lokasi_foto_barang' => [
            'driver' => 'local',
            'root' => storage_path('app/foto_barang'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'lokasi_ubah_fotobarang' => [
            'driver' => 'local',
            'root' => storage_path('app/ubah_fotobarang'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],


        //lokasi menyimpan gambar artikel
        'lokasi_gambar_artikel' => [
            'driver' => 'local',
            'root' => storage_path('app/gambar_artikel'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        'lokasi_ubah_gambarartikel' => [
            'driver' => 'local',
            'root' => storage_path('app/ubah_gambarartikel'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
        //untuk menampilkan gambar artikel
        public_path('lokasi_gambar_artikel') => storage_path('app/public/lokasi_gambar_artikel'),

        public_path('bukti_pembayaran') => storage_path('app/public/bukti_pembayaran')
    ],

    ];
