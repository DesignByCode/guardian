# Changelog

All notable changes to `guardian` will be documented in this file.

## 1.4.1 - 2021-25-04
- javascript event listener bug fix

## 1.4.0 - 2021-21-04
- Removed unused top-nav component
- Removed unused migration
- Fixed avatar component unique id for removing image.
  - Added prop name to sidebar avatar [uniqueId]
  - Added prop name to profile page avatar [uniqueId]
- Added styles prop to dashboard layout for adding custom styles
- Added translation files
- Added lang files for profile page and status codes

## 1.3.0 - 2021-16-04
- Publish css file as part of the installation command.
- Fix force publish for laravel-medialibrary migrations


## 1.2.0 - 2021-29-03
- Upload avatar using [stapie/laravel-medialibrary](https://github.com/spatie/laravel-medialibrary)
- Update User model to work with media library.  
- Updated config file
- Rename AvatarTrait to Avatar
- Updated the ```guardian:install``` command handle zero configuration setup.

## 1.1.0 - 2021-28-03 
- Added support for gravatar and ui-avatars

## 1.0.2 - 2021-28-03 
- Resolve #1 - added titles to auth view templates 

## 1.0.1 - 2021-28-03 
- Added User model stub 
- Automatically uncomment email verification in fortify config file. 

## 1.0.0 - 2021-22-03
- Initial release
