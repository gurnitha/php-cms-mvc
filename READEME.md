# php-cms-mvc
Belajar membuat aplikasi cms dengan menggunakan php mvc 
Github repo: https://github.com/gurnitha/php-cms-mvc/new/main?readme=1
My Learning: https://www.udemy.com/course/desarrolla-en-php-un-poderoso-cms-para-enlaces-de-wsp/

#### 1. Basic setup - merubah CMD/terminal prompt

        1. Buka terminal (cmd dalam windows)
        C:\Users\hp> 
        2. Membuat comment
        C:\Users\hp> REM:: Merubah CMD prompt dari "C:\Users\hp>" menjadi "hp@ING:~ "
        C:\Users\hp>
        3. Membuat prompt baru
        C:\Users\hp>prompt %USERNAME%@%COMPUTERNAME%:~
        4. Promt baru
        hp@ING:~
        5. Change directory ke root direktori
        hp@ING:~ cd E:\workspace\laragon\www\php-cms-mvc
        hp@ING:~ e:
        6. Memeriksa hasil (print working directory-pwd)
        hp@ING:~ pwd
        7. Hasilnya: root direktori
        /e/workspace/laragon/www/php-cms-mvc
        hp@ING:~

        8. Membuat lokal repositori

        8.1 Isisiasi git
        hp@ING:~ git init
        Initialized empty Git repository in E:/workspace/laragon/www/php-cms-mvc/.git/
        8.2 git add 
        hp@ING:~ git add .
        8.3 git status
        hp@ING:~ git status
        On branch master

        No commits yet

        Changes to be committed:
          (use "git rm --cached <file>..." to unstage)
                new file:   .gitignore
                new file:   READEME.md
                new file:   .gitignore
                new file:   READEME.md

        8.4 git commit
        git commit -am "1. Basic setup - merubah CMD/terminal prompt"

        [master (root-commit) 0ab92b3] 1. Basic setup - merubah CMD/terminal prompt
         2 files changed, 48 insertions(+)
         create mode 100644 .gitignore
         create mode 100644 READEME.md


#### 2. Basic setup - memeriksa hasil git

         hp@ING:~ git status
         On branch master
         nothing to commit, working tree clean

         hp@ING:~ git log
         commit 0ab92b30f448d22b67f5db74b4d51f8b3290d96b (HEAD -> master)
         Author: ing <ingafter60@outlook.com>
         Date:   Sun May 21 09:41:10 2023 +0700

         1. Basic setup - merubah CMD/terminal prompt


#### 3. Basic setup - mengisi template

        modified:   .gitignore
        modified:   READEME.md
        new file:   template.php


#### 4. Basic setup - mengisi assets dan loading assets pada template

        modified:   READEME.md
        new file:   template.php

        NOTE:

        1. assets di-ignore pada git shg tidak ikut terbawa
        2. Tesing: berhasil :)


#### 5. Basic setup - membuat path untuk loading assets dgn php

        modified:   READEME.md
        new file:   template.php

        NOTE:

        1. membuat path
        <?php  
                $path = "http://localhost/php-cms-mvc/";
        ?>

        2. Loading path: contoh
        <link href="<?php echo $path; ?>assets/css/animate.css" rel="stylesheet" type="text/css" />

        Note: isi path untuk semua: css, images, dan js

        2. Tesing: berhasil :)


#### 6. PHP MVC - membuat folder controllers dan views

        modified:   READEME.md

        hp@ING:~ tree
        Folder PATH listing
        Volume serial number is D810-E8AB
        E:.
        ├───assets
        ...
        ├───controllers
        ├───views


#### 7. PHP MVC - memindahkan assets dan template.php ke folder views

        modified:   READEME.md
        renamed:    template.php -> views/template.php


#### 8. PHP MVC - membuat modules (segmentasi template)

        modified:   READEME.md
        new file:   views/modules/back_to_top.php
        new file:   views/modules/content.php
        new file:   views/modules/content_hot_collections.php
        new file:   views/modules/content_new_items.php
        new file:   views/modules/content_top_seller.php
        new file:   views/modules/create_and_sell_now.php
        new file:   views/modules/footer.php
        new file:   views/modules/header.php
        new file:   views/modules/slider.php
        modified:   views/template.php


#### 9. PHP MVC - membuat controller dengan: class 'Template', method 'ctrTemplate'

        1. Membuat controller
        new file:   controllers/ctrTemplate.php
        2. Membuat index.php file dan load controller di sini
        new file:   index.php

        <?php  
        require "controllers/ctrTemplate.php";
        $template = new Template();
        $template->ctrTemplate();
        ?>


#### 10. PHP MVC - membuat Route controller

        1. Membuat Route controller
        new file:   controllers/ctrRoute.php

        <?php  

        class Route {
                
                static public function ctrRoute(){
                        return "http://localhost/php-cms-mvc/views/";
                }
        }

        ?>

        2. Include Route controller
        modified:   index.php

        <?php  
        require "controllers/ctrRoute.php";
        require "controllers/ctrTemplate.php";
        $template = new Template();
        $template->ctrTemplate();

        ?>

        3. Load  Route controller
        modified:   views/template.php

        <?php
        $path = Route::ctrRoute();
        ?>


#### 11. PHP MVC - memodifikasi README.md file


#### 12. PHP MVC - membuat tabel 'group_wsp' dan insert data

        CREATE TABLE `grupos_wsp` (
          `id` int(11) NOT NULL,
          `usu_id` int(11) NOT NULL,
          `id_cat` int(11) NOT NULL,
          `wsp_nom` text NOT NULL,
          `wsp_link` text NOT NULL,
          `wsp_descrip` text NOT NULL,
          `wsp_foto` text NOT NULL,
          `wsp_keywords` text NOT NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

        --
        -- Volcado de datos para la tabla `grupos_wsp`
        --

        INSERT INTO `grupos_wsp` (`id`, `usu_id`, `id_cat`, `wsp_nom`, `wsp_link`, `wsp_descrip`, `wsp_foto`, `wsp_keywords`) VALUES
        (1, 1, 1, 'sticker de perros', 'https://chat.whatsapp.com/BiiCiAnbOrqCHMkwzOzmL4', 'grupo para compartir sticvker graciosos', 'vistas/imagenes/grupos/100.jpg', 'amor  amistad stickers diversion'),
        (2, 1, 1, 'sticker de gatos', 'https://chat.whatsapp.com/BiiCiAnbOrqCHMkwzOzmL4', 'grupo para compartir sticvker graciosos', 'vistas/imagenes/grupos/1.jpg', 'amor  amistad stickers diversion'),
        (3, 1, 1, 'sticker de gatos', 'https://chat.whatsapp.com/BiiCiAnbOrqCHMkwzOzmL4', 'grupo para compartir sticvker graciosos', 'vistas/imagenes/grupos/2.jpg', 'amor  amistad stickers diversion'),
        (4, 1, 1, 'sticker de gatos', 'https://chat.whatsapp.com/BiiCiAnbOrqCHMkwzOzmL4', 'grupo para compartir sticvker graciosos', 'vistas/imagenes/grupos/3.jpg', 'amor  amistad stickers diversion'),
        (5, 1, 1, 'sticker de gatos', 'https://chat.whatsapp.com/BiiCiAnbOrqCHMkwzOzmL4', 'grupo para compartir sticvker graciosos', 'vistas/imagenes/grupos/4.jpg', 'amor  amistad stickers diversion'),
        (6, 1, 1, 'sticker de gatos', 'https://chat.whatsapp.com/BiiCiAnbOrqCHMkwzOzmL4', 'grupo para compartir sticvker graciosos', 'vistas/imagenes/grupos/5.jpg', 'amor  amistad stickers diversion');

        modified:   READEME.md


#### 13. PHP MVC - loading dan display (var_dump) data array pada template

        modified:   READEME.md
        new file:   controllers/ctrgruposwsp.php
        modified:   index.php
        new file:   models/conexion.php
        new file:   models/modelo.grupos.php
        modified:   views/template.php

