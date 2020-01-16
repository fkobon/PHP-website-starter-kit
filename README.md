# PHP website starter kit
A well configured, minimal skeleton to kickstart modern website development projects.

**Base:** [CodeIgniter 4](https://codeigniter.com/), a simple, lightweight PHP framework

**Features:**

- [SASS](https://sass-lang.com/) and [JS (ES)](https://babeljs.io/) processing to `public` folder on file change
- [CSS](https://stylelint.io/) and [JS](https://eslint.org/) linting in terminal
- [Live browser reload](https://www.browsersync.io/) on file change (even for PHP)
- [EditorConfig](https://editorconfig.org/)

## Install
Your PHP version must be 7.2 or higher. Also make sure the following extensions are enabled in your `php.ini`:
- intl
- libcurl
- json
- mbstring
- mysqlnd
- xml


You should already have installed:
- A nice terminal like [ConEmu](https://conemu.github.io/)
- [Composer](https://getcomposer.org/)
- [Node](https://nodejs.org/en/download/)

Download the package and extract it into your local webserver's root folder. Rename the folder as you wish, I will use `project` for this example.

Open your terminal, go into the `project` folder and run the following command:

`composer install && npm install`

## Usage
#### Quick start with PHP's built-in server
In your terminal run the following command to launch file watching, processing and live browser reload:

`npm run dev`

Open another terminal window to start the server:

`php spark serve`

Now you can view your website in your browser at http://localhost:8080

---
#### Hosting with Apache
Make sure that the rewrite and virtual hosting module is enabled (uncommented) in the main configuration file, e.g.: `apache2/conf/httpd.conf`

Add a host alias in your “hosts” file, typically `/etc/hosts` on unix-type platforms, or `c:/Windows/System32/drivers/etc/hosts` on Windows. E.g.:

`127.0.0.1 myproject.local`

**Tip:** To keep access to your existing projects on `localhost`, use the following line instead:

`127.0.0.1 myproject.local localhost`

Add a new item in virtual hosting configuration, eg. `apache2/conf/extra/httpd-vhost.conf`:
```
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/project/public"
    ServerName myproject.local
</VirtualHost>
```
Make sure the root points to the project's `public` folder. Start or restart your Apache server to apply changes.


Rename `env` configuration file to `.env`  in your project's root, open it, uncomment the `app.baseURL` line and set its value to your local custom development domain, e.g.: `myproject.local`

In your terminal run the following command to launch file watching, processing and live browser reload:

`npm run dev`

Visit http://myproject.local in your browser and start the development!

## Folder and file structure
```
/public/css/
```
Place of the compiled, production-ready CSS files.

```
/public/js/
```
Place of the compiled, production-ready JavaScript files.

```
/resources/
```
All non-PHP files which should be processed.

```
/resources/js/
```
The place to store uncompiled JavaScript files.

```
/resources/sass/
```
The place to store the SASS files.

```
.editorconfig
```
Configuration file of [EditorConfig](https://editorconfig.org/), a tool that helps to maintain consistent coding styles across various code editors and developers.

```
webpack.config.js
```
[Webpack](https://webpack.js.org/) configuration file. It helps in bundling and processing the source files.

The rest is part of CodeIgniter. [Click here](https://codeigniter4.github.io/userguide/concepts/structure.html) to learn more about its structure.
