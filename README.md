# SpatialLab
Tiny collection of code (mainly: PHP 8.2+, HTML, CSS, ECMAScript) handling  “spatial” &lt;geo|-detic|-graphical|-logical> data(|structures)




 



## Appendix

### Development environment 

 Chronicler's duty: 

 - Box: MacBookAir M1 /2020 (Development)
 - Box: iMac21,2 M1/2020 (Development)
 - Box: Raspberry Pi 4 Model B Rev 1.1 (RDBMS, CI/CD)
 - OS: Darwin 22.3.0 Darwin Kernel Version 22.3.0; RELEASE_ARM64_T8103 arm64
 - OS: Linux raspberrypi 5.10.17-v7l+ #1403 SMP Mon Feb 22 11:33:35 GMT 2021 armv7l GNU/Linux
 - IDE: Visual Studio Code; version: 1.70.2 (Universal)
 - PHP: 8.2.7 (NTS); Zend Engine v4.2.7 with Xdebug v3.2.1with Zend OPcache v8.2.7
 - Unit testing: PHPUnit 10.2.1 
 - Java: openjdk version "11.0.18" 2023-01-17; OpenJDK Runtime Environment  & OpenJDK Server VM
 - RDBMS: Sqlite version 3.39.5
 - CI/CD pipeline: Jenkins 


 Nuff said for now & Glück auf! 

 Sven.
├── 1
├── LICENSE
├── README.md
├── dox
│   └── rfc7946.txt
├── files.txt
├── gitit.sh
├── now.txt
├── phphttpd
├── phpunit.xml
├── private
│   └── lib
│       └── SpatialLab
│           ├── App
│           │   ├── Front.php
│           │   ├── Renderer.php
│           │   ├── RequestHandlerInterface..php
│           │   ├── ResponseInterface.php
│           │   └── ServerRequestInterface.php
│           ├── Application.php
│           ├── Communication
│           │   └── Http
│           │       ├── Request.php
│           │       └── Response.php
│           ├── Config
│           │   └── main_cfg.php
│           └── Internal
│               ├── TestClass.php
│               └── Type
│                   ├── Dry
│                   │   ├── ArrayAccessTrait.php
│                   │   ├── CallbackArrayTrait.php
│                   │   ├── IteratorTrait.php
│                   │   ├── MultiByteStringTrait.php
│                   │   └── StackOperationTrait.php
│                   ├── ListClass.php
│                   └── StringClass.php
├── public
│   └── index.php
├── router.php
├── secret.txt
└── test
    ├── App
    ├── Config
    ├── FooTest.php
    └── Internal
        └── Type
            └── StringClassTest.php

18 directories, 31 files
      28 text files.
classified 23 files      23 unique files.                              
       6 files ignored.

github.com/AlDanial/cloc v 1.96  T=0.01 s (1563.9 files/s, 217650.1 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
Text                             4            679              0           1309
PHP                             16            242            305            545
Markdown                         1             15              0             69
XML                              1              0              0             17
Bourne Shell                     1              0              6             14
-------------------------------------------------------------------------------
SUM:                            23            936            311           1954
-------------------------------------------------------------------------------
PHPUnit 10.2.1 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.7
Configuration: /Users/svenschrodt/projects/SpatialLab/phpunit.xml

......                                                              6 / 6 (100%)

Time: 00:00.002, Memory: 22.42 MB

OK (6 tests, 7 assertions)
</code>
</pre>
.
├── LICENSE
├── README.md
├── dox
│   └── rfc7946.txt
├── files.txt
├── gitit.sh
├── now.txt
├── phphttpd
├── phpunit.xml
├── private
│   └── lib
│       └── SpatialLab
│           ├── App
│           │   ├── Front.php
│           │   ├── Renderer.php
│           │   ├── RequestHandlerInterface..php
│           │   ├── ResponseInterface.php
│           │   └── ServerRequestInterface.php
│           ├── Application.php
│           ├── Communication
│           │   └── Http
│           │       ├── Request.php
│           │       └── Response.php
│           ├── Config
│           │   └── main_cfg.php
│           └── Internal
│               ├── TestClass.php
│               └── Type
│                   ├── Dry
│                   │   ├── ArrayAccessTrait.php
│                   │   ├── CallbackArrayTrait.php
│                   │   ├── IteratorTrait.php
│                   │   ├── MultiByteStringTrait.php
│                   │   └── StackOperationTrait.php
│                   ├── ListClass.php
│                   └── StringClass.php
├── public
│   └── index.php
├── router.php
├── secret.txt
└── test
    ├── App
    ├── Config
    ├── FooTest.php
    └── Internal
        └── Type
            └── StringClassTest.php

18 directories, 30 files
      27 text files.
classified 23 files      23 unique files.                              
       5 files ignored.

github.com/AlDanial/cloc v 1.96  T=0.01 s (1539.7 files/s, 219505.6 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
Text                             4            679              0           1309
PHP                             16            242            305            545
Markdown                         1             21              0            141
XML                              1              0              0             17
Bourne Shell                     1              0              6             14
-------------------------------------------------------------------------------
SUM:                            23            942            311           2026
-------------------------------------------------------------------------------
PHPUnit 10.2.1 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.7
Configuration: /Users/svenschrodt/projects/SpatialLab/phpunit.xml

......                                                              6 / 6 (100%)

Time: 00:00.002, Memory: 22.42 MB

OK (6 tests, 7 assertions)
</code>
</pre>
