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