
# Laravel Default Installer for 5.*

This Setup wizard will help to install the laravel application in your system and No Coding knowledge just need to click the installa button

<p align="left">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/appoets/default-installer/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/appoets/default-installer/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/appoets/default-installer/license.svg" alt="License"></a>
</p>

The current features are : 

	- It will Check For Server Requirements.
	- It will Check For Folders Permissions.
	- Has the Ability to set database information.
	- It will Migrate The Database.
	- It will Seed The Tables.
	- Finally it will redirect to home page
  

## Installation

First, pull in the package through Composer.

```
composer require "appoets/default-installer":"dev-master"

```

After that, include the service provider within `config/app.php`.

```
'providers' => [
    Appoets\DefaultInstaller\Providers\DefaultInstallerServiceProvider::class,
];
```

## Usage

Before using this package you need to run this command to publish the vendor files :
```
php artisan vendor:publish --provider="Appoets\DefaultInstaller\Providers\DefaultInstallerServiceProvider"
```

Happy Coding :)
