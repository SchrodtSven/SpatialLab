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
 - PHP: 8.2.7 (NTS); Zend Engine v4.2.7 with Xdebug v3.2.1 with Zend OPcache v8.2.7
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
│   ├── iah.jpg
│   └── rfc7946.txt
├── gitit.sh
├── main_cfg.php.tpl
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
│           │   └── Renderer.php
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
│                   ├── Meta.php
│                   └── StringClass.php
├── public
│   ├── index.php
│   ├── mapbox.php
│   ├── mb_pop.php
│   └── test.html
├── router.php
└── test
    ├── App
    ├── Config
    ├── FooTest.php
    └── Internal
        └── Type
            ├── Handler
            │   └── SherlockTest.php
            ├── ListClassTest.php
            └── StringClassTest.php

21 directories, 39 files
      41 text files.
classified 35 files      35 unique files.                              
       6 files ignored.

github.com/AlDanial/cloc v 1.96  T=0.02 s (1770.5 files/s, 211149.3 lines/s)
-------------------------------------------------------------------------------
Language                     files          blank        comment           code
-------------------------------------------------------------------------------
Text                             2            678              0           1286
PHP                             29            365            541           1157
Markdown                         1             10              0             82
XML                              1              0              0             17
Bourne Shell                     1              4              6             15
HTML                             1              1              0             12
-------------------------------------------------------------------------------
SUM:                            35           1058            547           2569
-------------------------------------------------------------------------------
PHPUnit 10.2.1 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.7
Configuration: /Users/svenschrodt/projects/SpatialLab/phpunit.xml

.....................                                             21 / 21 (100%)

Time: 00:00.006, Memory: 22.42 MB

OK (21 tests, 34 assertions)
</code>
</pre>
