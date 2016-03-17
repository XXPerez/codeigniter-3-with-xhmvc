# codeigniter-3-0-5-with-xhmvc
Codeigniter 3.0.5 with XHMVC

What is XHMVC:  http://xhmvc.4amics.com/applications/demo/www/user_guide/

## Installation

XHMVC is ready-to-go, you only need to extract to any directory under a document root of your choice.

Needed: Apache (mod_rewrite enabled for a ready-to-go functionality) + PHP (5.3).

  * Extract all files under your web workspace (as configured in your Xampp/Wampp), extract, for example, as 'codeigniter-3-xhmvc' in your htdocs directory.
  * Browse demo as: http://localhost/codeigniter-3-xhmvc/apps/base/www
  * Under apps/base/modules/welcome you will see all HMVC possibilities.
  * Also, you can load a core/common/module ... http://localhost/codeigniter-3-xhmvc/apps/base/www/home
  * This Home module isn't in apps/base, but is under common/modules folder for all apps.

Install with composer:

Create a directory in your htdocs path, ex: c:/xampp/htdocs/codeigniter-3-xhmvc
Edit a new composer.json:


{
    "require": {
        "xmadmax/codeigniter-3-xhmvc": "@dev"
    }
}

Use:  composer install

Browse to http://localhost/codeigniter-3-xhmvc/vendor/xmadmax/codeigniter-3-xhmvc/apps/base/www









