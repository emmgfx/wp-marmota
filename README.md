# Marmota

Wordpress theme.

---

### Development guide:

This project uses Gulp for the development stage and the build process. Since the javascript isn't really complex or large, isn't minified / uglyfied.

1. To build the theme, run `gulp build`, this generates a folder named `build` with a zip file named `marmota.zip`, that can be uploaded directly to the theme manager in the Wordpress admin panel.
2. Run `gulp styles` to compile the SCSS once.
3. Run `gulp` to compile the SCSS, watching changes to the source files. Use `control + C` to stop the watch task.

---

### Related plugins

Check the [wp-marmota-categories](https://github.com/emmgfx/wp-marmota-categories), a Wordpress Gutenberg block for this theme. **Under early stages of development**.
 
---

![Screenshot](https://github.com/emmgfx/wp-marmota/raw/master/screenshot.png)
