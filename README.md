# toolvault
https://toolvault.xyz - all the useful tools any sane human would need

# Dev Requirements

* Laravel Valet - https://laravel.com/docs/5.6/valet#installation
* * `valet link toolvault`
* * `valet link ip.toolvault`
* * `valet link ipv4.toolvault`
* * `valet link ipv6.toolvault`
* * `valet link echo.toolvault`
* * `valet link httpstatus.toolvault`
* * `valet link base64.toolvault`
* * `valet link url.toolvault`

# Dev URLs
* http://toolvault.test
* http://ip.toolvault.test/


# Adding a tool
* Create `resources/views/tools/{subdomain}.blade.php` info page extending `layouts/app`
* Create `resources/routes/tools/{subdomain}.php` with the routes/code

```php
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function(Request $request) {
    return $request->ip();
});
```
