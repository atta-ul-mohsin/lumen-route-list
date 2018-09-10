# Lumen Route List Display


## Installation

1. Run
    ```
    composer require atta-ul-mohsin/lumen-routes-list
    ```

2. Add service provider into **/bootstrap/app.php** file.
    ```php
    $app->register(Atamohsin\LumenRouteList\RouteCmdServiceProvider::class);
    ```
3. Run ```composer dump-autoload```

## Commands

```
php artisan route:list
```


## Author

<a href="#">Atta Ul Mohsin</a>