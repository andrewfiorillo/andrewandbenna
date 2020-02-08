# andrewandbenna

To start a simple PHP server on macOS, run:

```
php -S localhost:9000
```

Then you can visit http://localhost:9000 in your web browser and see the site.


The styles are written using scss. The easiest way to compile scss is with the
dart sass compiler, which can be installed with:

```
brew install sass/sass/sass
```

Then, to compile the styles for the site, run:

```
sass --watch assets/style
```
