# ijc_classic

prep to rebuild *as is* without PHP:

1. replace all `<!--# include virtual` with equivalent `{% include file.html %}`
2. put all the old php includes into `_includes` dir
3. replace PHP video switcher with the "alternative content" image
4. add YML header to each html file: `for f in *.html; do sed -i '1i---\n# IJC\n---' "$f"; done`
5. fix instances where file extensions were capitolized (windows server considers `.PNG` and `.png` to be the same, but linux servers don't)
6. redirect a few template links going to old places that don't exist any more

Still lots of broken stuff, but it's not PHP's fault!
