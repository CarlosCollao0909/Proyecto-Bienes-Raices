import path from 'path';
import fs from 'fs';

import { src, dest, watch, series } from 'gulp'; //el modulo series ejecuta las tareas en secuencia en el orden en que se les pasa, tambien se puede importar parallel para ejecutar todo al mismo tiempo
import gulpSass from 'gulp-sass';
import * as dartSass from 'sass';
import terser from 'gulp-terser';

import sharp from 'sharp';
import concat from 'gulp-concat';

import { glob } from 'glob';

const sass = gulpSass(dartSass);

export const js = (done) => {
    src('src/js/**/*.js', {sourcemaps: true})
        .pipe(concat('bundle.js')) //concatena todos los js en un unico js
        .pipe(terser()) //comprime el js, eliminando los espacios en blanco
        .pipe(dest('./public/build/js', {sourcemaps: '.'})); //copia el js a la carpeta build/js. sourcemaps nos ayuda a ver en que archivo esta el js en el navegador
    done();
}

export const css = (done) => {
    src('src/scss/app.scss', {sourcemaps: true})
        .pipe(sass({
            style: 'compressed' //comprime el css, eliminando los espacios en blanco
        }).on('error', sass.logError)) //logError es para q si hay un error en el sass no se detenga el proceso
        .pipe(dest('./public/build/css', {sourcemaps: '.'})); //copia el css a la carpeta build/css. sourcemaps nos ayuda a ver en que archivo esta el scss en el navegador
    done();
};

//esta es una funcion que redimensiona el tamaño de las imagenes (la puedo usar para crear galerías o miniaturas)
/* export async function crop(done) {
    const inputFolder = 'src/img'
    const outputFolder = 'src/img/thumb';
    const width = 250;
    const height = 180;
    if (!fs.existsSync(outputFolder)) {
        fs.mkdirSync(outputFolder, { recursive: true })
    }
    const images = fs.readdirSync(inputFolder).filter(file => {
        return /\.(jpg)$/i.test(path.extname(file));
    });
    try {
        images.forEach(file => {
            const inputFile = path.join(inputFolder, file)
            const outputFile = path.join(outputFolder, file)
            sharp(inputFile) 
                .resize(width, height, {
                    position: 'centre'
                })
                .toFile(outputFile)
        });

        done()
    } catch (error) {
        console.log(error)
    }
} */

// esta función copia los SVGs a la carpeta build/img (si no tenemos svg comentamos esta parte)
export async function copiarSVG(done) {
    const srcDir = './src/img';
    const buildDir = './public/build/img';
    const svgs = await glob('./src/img/**/*.svg');

    svgs.forEach(file => {
        const relativePath = path.relative(srcDir, path.dirname(file));
        const outputSubDir = path.join(buildDir, relativePath);
        
        if (!fs.existsSync(outputSubDir)) {
            fs.mkdirSync(outputSubDir, { recursive: true });
        }

        const fileName = path.basename(file);
        const outputFile = path.join(outputSubDir, fileName);
        fs.copyFileSync(file, outputFile);
    });
    done();
}

//las funciones (imagenes y procesarImagenes) son para transformar imagenes al formato webp/avif y mandarlas a la carpeta build/img
export async function imagenes(done) {
    const srcDir = './src/img';
    const buildDir = './public/build/img';
    const images =  await glob('./src/img/**/*{jpg,png}');

    images.forEach(file => {
        const relativePath = path.relative(srcDir, path.dirname(file));
        const outputSubDir = path.join(buildDir, relativePath);
        procesarImagenes(file, outputSubDir);
    });
    done();
}

function procesarImagenes(file, outputSubDir) {
    if (!fs.existsSync(outputSubDir)) {
        fs.mkdirSync(outputSubDir, { recursive: true });
    }
    const baseName = path.basename(file, path.extname(file));
    const extName = path.extname(file);
    const outputFile = path.join(outputSubDir, `${baseName}${extName}`);
    const outputFileWebp = path.join(outputSubDir, `${baseName}.webp`);
    const outputFileAvif = path.join(outputSubDir, `${baseName}.avif`);

    const options = { quality: 80 };
    sharp(file).jpeg(options).toFile(outputFile);
    sharp(file).webp(options).toFile(outputFileWebp);
    sharp(file).avif().toFile(outputFileAvif);
}

export const dev = () => {
    watch('src/scss/**/*.scss', css);
    watch('src/js/**/*.js', js);
    watch('src/img/**/*.{png,jpg}', imagenes);
    watch('src/img/**/*.svg', copiarSVG); //solo agrego esta linea si tengo svg's
} //actualiza el css y el js en tiempo real en todas las carpetas q estén dentro de src/scss

export default series(js, css, copiarSVG, imagenes, dev);

/*  Gulpfile is ready to use! I get it!  */