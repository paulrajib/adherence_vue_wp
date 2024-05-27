<p align="center">
    <a href="#" style="width: 120px; max-width: 250px;" class="svg-pan-zoom_viewport">
        <img src="https://adherence.dev/assets/images/other-logos/vue.png" max-width="250" width="150" alt="Vue Logo">
    </a>
    <a href="https://adherence.dev" style="width: 120px; max-width: 250px;" >
        <img src="https://adherence.dev/assets/images/logo.png" max-width="250" width="150" alt="Adherence.dev Logo">
    </a>
    <a href="#" style="width: 120px; max-width: 250px;" >
        <img src="https://adherence.dev/assets/images/other-logos/wp.svg" max-width="250" width="150" alt="WP Logo">
    </a>
</p>

<p align="center">
    <a href="">
        <img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status">
    </a>
    <a href="">
        <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
    </a>
    <a href="">
        <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
    </a>
</p>

## Install and run

In root directory 

```
cd adherence_vue_frontend
npm install
```
To test setup:
```
npm run lint
```

Then, for production build, run: ``` npm run build ```
or to keep under watch, run: ``` npm run serve ```

you may get the Vue app running at/ or something like this depending on your setup:
```
  - Local:   http://localhost:8080/wp-content/themes/adherence_vue/adherence_vue_frontend/dist/ 
  - Network: http://192.168.31.31:8080/wp-content/themes/adherence_vue/adherence_vue_frontend/dist/

```
But this watch will only update in this links given above
## To get o/p in wordpress run: `npm run build`

------------------------------
To use SASS
Run ``` npm run sass``` to compile the sass automaticly with every change in a separate terminal

Or run  ``` npm run dev ``` to serve Vue, compile SASS and keep all of these under watch concurrently for any changes.

```
```
To remove dist `rm -rf dist`, then re-run `npm run build`
** ➜ Note: npm-run-all may not necessary for next setup update
  
