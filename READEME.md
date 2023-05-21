# MEMBUAT APLIKASI MENGGUNAKAN PHP MVC


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
