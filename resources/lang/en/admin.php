<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'post' => [
        'title' => 'Posts',

        'actions' => [
            'index' => 'Posts',
            'create' => 'New Post',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'post' => [
        'title' => 'Posts',

        'actions' => [
            'index' => 'Posts',
            'create' => 'New Post',
            'edit' => 'Edit :name',
            'will_be_published' => 'Post will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'perex' => 'Perex',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'post' => [
        'title' => 'Posts',

        'actions' => [
            'index' => 'Posts',
            'create' => 'New Post',
            'edit' => 'Edit :name',
            'will_be_published' => 'Post will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'perex' => 'Perex',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => "ID",
            'name' => "Name",
            'email' => "Email",
            'email_verified_at' => "Email verified at",
            'password' => "Password",
            'password_repeat' => "Password Confirmation",
                
            //Belongs to many relations
            'roles' => "Roles",
                
        ],
    ],

    'medium' => [
        'title' => 'Media',

        'actions' => [
            'index' => 'Media',
            'create' => 'New Medium',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'model_type' => 'Model type',
            'model_id' => 'Model',
            'uuid' => 'Uuid',
            'collection_name' => 'Collection name',
            'name' => 'Name',
            'file_name' => 'File name',
            'mime_type' => 'Mime type',
            'disk' => 'Disk',
            'conversions_disk' => 'Conversions disk',
            'size' => 'Size',
            'manipulations' => 'Manipulations',
            'custom_properties' => 'Custom properties',
            'generated_conversions' => 'Generated conversions',
            'responsive_images' => 'Responsive images',
            'order_column' => 'Order column',
            
        ],
    ],

    'activation' => [
        'title' => 'Activation',

        'actions' => [
            'index' => 'Activation',
            'create' => 'New Activation',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'activation' => [
        'title' => 'Activations',

        'actions' => [
            'index' => 'Activations',
            'create' => 'New Activation',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'email' => 'Email',
            'token' => 'Token',
            'used' => 'Used',
            
        ],
    ],

    'user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'email_verified_at' => 'Email verified at',
            'password' => 'Password',
            
        ],
    ],

    'menu' => [
        'title' => 'Menus',

        'actions' => [
            'index' => 'Menus',
            'create' => 'New Menu',
            'edit' => 'Edit :name',
            'will_be_published' => 'Menu will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'price' => 'Price',
            'description' => 'Description',
            'image' => 'Image',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'promo' => [
        'title' => 'Promos',

        'actions' => [
            'index' => 'Promos',
            'create' => 'New Promo',
            'edit' => 'Edit :name',
            'will_be_published' => 'Promo will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'description' => 'Description',
            'image' => 'Image',
            'promo' => 'Promo',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'menu' => [
        'title' => 'Menus',

        'actions' => [
            'index' => 'Menus',
            'create' => 'New Menu',
            'edit' => 'Edit :name',
            'will_be_published' => 'Menu will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'price' => 'Price',
            'description' => 'Description',
            'image' => 'Image',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'promo' => [
        'title' => 'Promos',

        'actions' => [
            'index' => 'Promos',
            'create' => 'New Promo',
            'edit' => 'Edit :name',
            'will_be_published' => 'Promo will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'description' => 'Description',
            'image' => 'Image',
            'promo' => 'Promo',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'admin-user' => [
        'title' => 'Admin-User',

        'actions' => [
            'index' => 'Admin-User',
            'create' => 'New Admin-User',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'menu' => [
        'title' => 'Menus',

        'actions' => [
            'index' => 'Menus',
            'create' => 'New Menu',
            'edit' => 'Edit :name',
            'will_be_published' => 'Menu will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'price' => 'Price',
            'description' => 'Description',
            'image' => 'Image',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'promo' => [
        'title' => 'Promos',

        'actions' => [
            'index' => 'Promos',
            'create' => 'New Promo',
            'edit' => 'Edit :name',
            'will_be_published' => 'Promo will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'description' => 'Description',
            'image' => 'Image',
            'promo' => 'Promo',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'medium' => [
        'title' => 'Media',

        'actions' => [
            'index' => 'Media',
            'create' => 'New Medium',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'model_type' => 'Model type',
            'model_id' => 'Model',
            'uuid' => 'Uuid',
            'collection_name' => 'Collection name',
            'name' => 'Name',
            'file_name' => 'File name',
            'mime_type' => 'Mime type',
            'disk' => 'Disk',
            'conversions_disk' => 'Conversions disk',
            'size' => 'Size',
            'manipulations' => 'Manipulations',
            'custom_properties' => 'Custom properties',
            'generated_conversions' => 'Generated conversions',
            'responsive_images' => 'Responsive images',
            'order_column' => 'Order column',
            
        ],
    ],

    'post' => [
        'title' => 'Posts',

        'actions' => [
            'index' => 'Posts',
            'create' => 'New Post',
            'edit' => 'Edit :name',
            'will_be_published' => 'Post will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'perex' => 'Perex',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => "ID",
            'name' => "Name",
            'email' => "Email",
            'email_verified_at' => "Email verified at",
            'password' => "Password",
            'password_repeat' => "Password Confirmation",
                
            //Belongs to many relations
            'roles' => "Roles",
                
        ],
    ],

    'about' => [
        'title' => 'About',

        'actions' => [
            'index' => 'About',
            'create' => 'New About',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'about' => [
        'title' => 'Abouts',

        'actions' => [
            'index' => 'Abouts',
            'create' => 'New About',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'judul' => 'Judul',
            'isi' => 'Isi',
            
        ],
    ],

    'about' => [
        'title' => 'About',

        'actions' => [
            'index' => 'About',
            'create' => 'New About',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'about' => [
        'title' => 'Abouts',

        'actions' => [
            'index' => 'Abouts',
            'create' => 'New About',
            'edit' => 'Edit :name',
            'will_be_published' => 'About will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'judul' => 'Judul',
            'isi' => 'Isi',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'contact' => [
        'title' => 'Contacts',

        'actions' => [
            'index' => 'Contacts',
            'create' => 'New Contact',
            'edit' => 'Edit :name',
            'will_be_published' => 'Contact will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'telepon' => 'Telepon',
            'alamat' => 'Alamat',
            'jam_operasional' => 'Jam operasional',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'about' => [
        'title' => 'Abouts',

        'actions' => [
            'index' => 'Abouts',
            'create' => 'New About',
            'edit' => 'Edit :name',
            'will_be_published' => 'About will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'judul' => 'Judul',
            'isi' => 'Isi',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'menu' => [
        'title' => 'Menus',

        'actions' => [
            'index' => 'Menus',
            'create' => 'New Menu',
            'edit' => 'Edit :name',
            'will_be_published' => 'Menu will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'price' => 'Price',
            'description' => 'Description',
            'image' => 'Image',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'promo' => [
        'title' => 'Promos',

        'actions' => [
            'index' => 'Promos',
            'create' => 'New Promo',
            'edit' => 'Edit :name',
            'will_be_published' => 'Promo will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'description' => 'Description',
            'image' => 'Image',
            'promo' => 'Promo',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'about' => [
        'title' => 'Abouts',

        'actions' => [
            'index' => 'Abouts',
            'create' => 'New About',
            'edit' => 'Edit :name',
            'will_be_published' => 'About will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'judul' => 'Judul',
            'isi' => 'Isi',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'promo' => [
        'title' => 'Promos',

        'actions' => [
            'index' => 'Promos',
            'create' => 'New Promo',
            'edit' => 'Edit :name',
            'will_be_published' => 'Promo will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'description' => 'Description',
            'image' => 'Image',
            'promo' => 'Promo',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'medium' => [
        'title' => 'Media',

        'actions' => [
            'index' => 'Media',
            'create' => 'New Medium',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'model_type' => 'Model type',
            'model_id' => 'Model',
            'uuid' => 'Uuid',
            'collection_name' => 'Collection name',
            'name' => 'Name',
            'file_name' => 'File name',
            'mime_type' => 'Mime type',
            'disk' => 'Disk',
            'conversions_disk' => 'Conversions disk',
            'size' => 'Size',
            'manipulations' => 'Manipulations',
            'custom_properties' => 'Custom properties',
            'generated_conversions' => 'Generated conversions',
            'responsive_images' => 'Responsive images',
            'order_column' => 'Order column',
            
        ],
    ],

    'image' => [
        'title' => 'Image',

        'actions' => [
            'index' => 'Image',
            'create' => 'New Image',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'post' => [
        'title' => 'Posts',

        'actions' => [
            'index' => 'Posts',
            'create' => 'New Post',
            'edit' => 'Edit :name',
            'will_be_published' => 'Post will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'perex' => 'Perex',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'promo' => [
        'title' => 'Promos',

        'actions' => [
            'index' => 'Promos',
            'create' => 'New Promo',
            'edit' => 'Edit :name',
            'will_be_published' => 'Promo will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'description' => 'Description',
            'image' => 'Image',
            'promo' => 'Promo',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'admin-user' => [
        'title' => 'Admin-Users',

        'actions' => [
            'index' => 'Admin-Users',
            'create' => 'New Admin-User',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'admin-user' => [
        'title' => 'Admin-User',

        'actions' => [
            'index' => 'Admin-User',
            'create' => 'New Admin-User',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'admin-user' => [
        'title' => 'Admin Users',

        'actions' => [
            'index' => 'Admin Users',
            'create' => 'New Admin User',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
            
        ],
    ],

    'kuisioner' => [
        'title' => 'Kuisioner',

        'actions' => [
            'index' => 'Kuisioner',
            'create' => 'New Kuisioner',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'Nama' => 'Nama',
            'Alamat' => 'Alamat',
            'NoWa' => 'NoWa',
            'Instagram' => 'Instagram',
            'Petanyaan1' => 'Petanyaan1',
            'Pertanyaan2' => 'Pertanyaan2',
            'poto' => 'Poto',
            
        ],
    ],

    'questioner' => [
        'title' => 'Questioners',

        'actions' => [
            'index' => 'Questioners',
            'create' => 'New Questioner',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            
        ],
    ],

    'questioner' => [
        'title' => 'Questioners',

        'actions' => [
            'index' => 'Questioners',
            'create' => 'New Questioner',
            'edit' => 'Edit :name',
            'will_be_published' => 'Questioner will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'pertanyaan' => 'Pertanyaan',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    'question' => [
        'title' => 'Questions',

        'actions' => [
            'index' => 'Questions',
            'create' => 'New Question',
            'edit' => 'Edit :name',
            'will_be_published' => 'Question will be published at',
        ],

        'columns' => [
            'id' => 'ID',
            'pertanyaan' => 'Pertanyaan',
            'published_at' => 'Published at',
            'enabled' => 'Enabled',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];