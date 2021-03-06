

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
Rename the `env` configuration file to `.env`  in your project's root. In your terminal run the following command to launch file watching, processing and live browser reload:

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


Rename the `env` configuration file to `.env`  in your project's root, open it, uncomment the `app.baseURL` line and set its value to your local custom development domain, e.g.: `myproject.local`

In your terminal run the following command to launch file watching, processing and live browser reload:

`npm run dev`

Visit http://myproject.local in your browser and start the development!

## Folder and file structure
| File/folder | Description |
|--|--|
| /app/ | All PHP files of your project, except tests. |
| &ensp; Config/ | Configuration files for autoload, email, routes, etc. You can override some of these in `.env` file. |
| &ensp; Controllers/ | Controllers handle incoming requests. |
| &ensp; Database/ | Stores the database migrations and seeds files. |
| &ensp; Filters/ | Stores filter classes that can run before and after controller. |
| &ensp; Helpers/ | Smaller, custom functions. |
| &ensp; Language/ | Translations go here. |
| &ensp; Libraries/ | Your own, reusable modules go here, e.g.: Authentication, etc. |
| &ensp; Models/ | Database models. |
| &ensp; ThirdParty/ | If you can't or don't want to install an external library with Composer, you can place it here and load it in `app/Config/Autoload.php`  |
| &ensp; Views/ | Views create the HTML that is displayed to the client. |
| /public/ | The browser-accessible portion of your website, preventing direct access to your source code. This folder is meant to be the “web root” of your site, and your web server would be configured to point to it. |
| &ensp; css/ | Place of the compiled, production-ready CSS files. |
| &ensp; js/ | Place of the compiled, production-ready JavaScript files. |
| /resources/ | All non-PHP files which should be processed. |
| &ensp; js/ | The place to store uncompiled JavaScript files. |
| &ensp;  sass/ | The place to store the SASS files. |
| /tests/ | All tests go here. |
| /writable/ | Logs, cache files, user uploads. |
| .editorconfig | Configuration file of [EditorConfig](https://editorconfig.org/), a tool that helps to maintain consistent coding styles across various code editors and developers. |
| webpack.config.js | [Webpack](https://webpack.js.org/) configuration file. It helps in bundling and processing the source files. |



Read [CodeIgniter's documentation](https://codeigniter4.github.io/userguide/concepts/structure.html) to learn more about the structure.


## Updating CodeIgniter 4

Run `composer update`.

Download the [latest codeigniter framework](https://github.com/codeigniter4/framework).

Compare files in `app/Config` folder 1-by-1 to see what changed and update your code.
