# Translate Chineses Word Ucword

PHP library for interacting with CBSMS 

## Installation

```bash
$ composer require bobzhai/pinyin
```

Or add to `composer.json`:

```json
"require": {
    "bobzhai/pinyin": "dev-master"
}
```

then run `composer update`.


### single use

```php

require_once "./vendor/autoload.php";

use Bobzhai\Pinyin\Pinyin;
$input_str,$upper=true,$shift_word=false

/* ---  ucwords -------------------------
* `@input_str` - it's string
* `@upper` - output uppercase true/false 
* `@shift_word` - remove not no character true/false
*/
$code = Pinyin::ucwords('测试',true,false);

echo $code   //  CS

```


## License

Copyright 2022, Bobzhai. Licensed under the MIT license:
https://www.opensource.org/licenses/mit-license.php


