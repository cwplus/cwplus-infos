CwplusInfos
===========

To add web agency info in html head block , just after page <title>.
This module is developed with laravel 5.6

Installation
------------
#### With composer

1. Add to your `composer.json`:

    ```json
    "require": {
        "cwplus/cwplus-infos": "1.0"
    }
    ```

2. Now tell composer to download cwplus-infos by running the command:

    ```bash
    $ php composer.phar update
    ```

3. Next, publish the config file with the following artisan command. 
  
    ```bash
    $ php artisan vendor:publish --provider="Cwplus\CwplusInfos\CwplusInfosServiceProvider" --tag="config"
    ```




Credits
-------

Cwplus Infos module is developed with laravel 5.6 by Cwplus agency

[cwplus-infos]: https://github.com/cwplus/cwplus/cwplus-infos.git
