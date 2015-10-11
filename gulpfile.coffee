gulp = require('gulp')
coffee = require('gulp-coffee')
livereload = require('gulp-livereload')
# CSS
stylus = require('gulp-stylus')
nib = require('nib')
csso = require('gulp-csso')
# Utils
chalk = require('chalk')
dateformat = require('dateformat')
plumber = require('gulp-plumber')
fs = require('fs')

outputFolder = './app/wp-content/themes/bigpixel'

log = ->
  time = '[' + chalk.magenta(dateformat(new Date(), 'HH:MM:ss')) + ']'
  args = Array::slice.call(arguments)
  args.unshift time
  console.log.apply console, args
  return this

filePathShort = (filePath)->
  filePath.replace(__dirname, '')

# Watch
# #########################

gulp.task 'watch', ['build'], ->
  livereload.listen({auto: true})

  # Watch style changes
  watcher_style = gulp.watch('./src/css/**/*', ['development-styles'])
  watcher_style.on 'change', (e)->
    log e.type + ' ' + chalk.yellow(filePathShort(e.path))

# Development
# #########################

gulp.task 'development-styles', ->
  gulp.src './src/css/application.styl'
    .pipe plumber()
    .pipe stylus({use: [nib()], linenos: true, 'include css': true, url: {name: 'url', limit: 32768, paths: [outputFolder + '/img']}})
    .pipe gulp.dest "#{outputFolder}/css"
    .pipe livereload auto: false

# Build
# #########################

gulp.task 'build', ['build-styles']

gulp.task 'build-styles', ['build-styles-files', 'build-style-editor'], ->
  gulp.src "#{outputFolder}/css/application.css"
    .pipe gulp.dest "#{outputFolder}/css/"

gulp.task 'build-styles-files', ->
  gulp.src './src/css/application.styl'
    .pipe stylus({use: [nib()], 'include css': true, url: {name: 'url', limit: 32768, paths: [outputFolder + '/img']}})
    .pipe(csso(false))
    .pipe gulp.dest "#{outputFolder}/css"

gulp.task 'build-style-editor', ->
  gulp.src './src/css/editor-style.styl'
    .pipe stylus({use: [nib()], 'include css': true, url: {name: 'url', limit: 32768, paths: [outputFolder + '/img']}})
    .pipe gulp.dest "#{outputFolder}"

