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
 - IDE: Visual Studio Code; Version: 1.79.1 (Universal)
 - PHP: 8.2.7 (NTS); Zend Engine v4.2.7 with Xdebug v3.2.1with Zend OPcache v8.2.7
 - Unit testing: PHPUnit 10.2.1 
 - Java: openjdk version "11.0.18" 2023-01-17; OpenJDK Runtime Environment  & OpenJDK Server VM
 - RDBMS: Sqlite version 3.39.5
 - CI/CD pipeline: Jenkins 


 Nuff said for now & Glück auf! 

 <pre>
 <code>
.
├── LICENSE
├── README.md
├── README.md.tpl
├── dox
│   └── rfc7946.txt
├── files.txt
├── gitit.sh
├── main_cfg.php.tpl
├── now.txt
├── phphttpd
├── phpunit.xml
├── private
│   └── lib
│       └── SpatialLab
│           ├── App
│           │   ├── Action.php
│           │   ├── Ctlr
│           │   │   └── IndexCtlr.php
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
│           │   ├── Main.php
│           │   └── main_cfg.php
│           └── Internal
│               ├── TestClass.php
│               └── Type
│                   ├── Dry
│                   │   ├── ArrayAccessTrait.php
│                   │   ├── CallbackArrayTrait.php
│                   │   ├── CaseStringTrait.php
│                   │   ├── IteratorTrait.php
│                   │   ├── MultiByteStringTrait.php
│                   │   ├── StackOperationTrait.php
│                   │   └── SubSplitStringTrait.php
│                   ├── Handler
│                   │   └── Sherlock.php
│                   ├── ListClass.php
│                   └── StringClass.php
├── public
│   └── index.php
├── router.php
└── test
    ├── App
    ├── Config
    ├── FooTest.php
    └── Internal
        └── Type
            ├── ListClassTest.php
            └── StringClassTest.php

20 directories, 38 files
      38 text files.
classified 32 files      32 unique files.                              
       5 files ignored.

github.com/AlDanial/cloc v 1.96  T=0.02 s (1655.5 files/s, 199275.5 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
Text                             4            679              0           1309
PHP                             25            333            489            889
Markdown                         1             21              0             94
XML                              1              0              0             17
Bourne Shell                     1              0              9             12
-------------------------------------------------------------------------------
SUM:                            32           1033            498           2321
-------------------------------------------------------------------------------
PHPUnit 10.2.1 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.7
Configuration: /Users/svenschrodt/projects/SpatialLab/phpunit.xml

.........                                                           9 / 9 (100%)

Time: 00:00.003, Memory: 22.42 MB

OK (9 tests, 19 assertions)
</code>
</pre>
.
├── LICENSE
├── README.md
├── README.md.tpl
├── dox
│   └── rfc7946.txt
├── files.txt
├── gitit.sh
├── main_cfg.php.tpl
├── now.txt
├── phphttpd
├── phpunit.xml
├── private
│   └── lib
│       └── SpatialLab
│           ├── App
│           │   ├── Action.php
│           │   ├── Ctlr
│           │   │   └── IndexCtlr.php
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
│           │   ├── Main.php
│           │   └── main_cfg.php
│           └── Internal
│               ├── TestClass.php
│               └── Type
│                   ├── Dry
│                   │   ├── ArrayAccessTrait.php
│                   │   ├── CallbackArrayTrait.php
│                   │   ├── CaseStringTrait.php
│                   │   ├── IteratorTrait.php
│                   │   ├── MultiByteStringTrait.php
│                   │   ├── StackOperationTrait.php
│                   │   └── SubSplitStringTrait.php
│                   ├── Handler
│                   │   └── Sherlock.php
│                   ├── ListClass.php
│                   └── StringClass.php
├── public
│   └── index.php
├── router.php
└── test
    ├── App
    ├── Config
    ├── FooTest.php
    └── Internal
        └── Type
            ├── ListClassTest.php
            └── StringClassTest.php

20 directories, 38 files
      38 text files.
classified 32 files      32 unique files.                              
       5 files ignored.

github.com/AlDanial/cloc v 1.96  T=0.01 s (2198.7 files/s, 269616.2 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
Text                             4            679              0           1309
PHP                             25            333            489            889
Markdown                         1             21              0            162
XML                              1              0              0             17
Bourne Shell                     1              4              6             15
-------------------------------------------------------------------------------
SUM:                            32           1037            495           2392
-------------------------------------------------------------------------------
PHPUnit 10.2.1 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.7
Configuration: /Users/svenschrodt/projects/SpatialLab/phpunit.xml

.........                                                           9 / 9 (100%)

Time: 00:00.003, Memory: 22.42 MB

OK (9 tests, 19 assertions)
</code>
</pre>
