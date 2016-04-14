# Entity Generator

A module for automatically generating contao entities in a comfortable and extensible way.
All functionality is controlable using the backend entity "Entity Generator".

The following files/folders can be created:

- assets/* (including .htaccess for direct access)
- config/config.php
- dca/tl_*.php
- dca/tl_user.php
- dca/tl_user_group.php
- languages/de/modules.php
- languages/de/tl_*.php
- languages/de/tl_user.php
- languages/de/tl_user_group.php
- models/*Model.php


![alt myModulePreview](docs/screenshot.png)

*Module config preview*

## Features

### Modules

Name | Description
---- | -----------
ModuleEntityGenerator | A backend module for generating new entities from scratch

## Known Issues
- not all of the possibilities of the Contao DCA API are configurable, yet