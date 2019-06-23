# ijc_classic

https://www.ijc.uidaho.edu/

This is everything from old ijc_docs server, except the flash movies and some random unused asset files.
I quickly find & replaced out all the PHP parts to allow it to be added to new shared drive server, making it into a Jekyll project.
Jekyll build and copy `_site` onto the shared drive, it will be equally as useable / equally as broken as current version. 

Prep to rebuild *as is* without PHP:

1. replace all `<!--# include virtual` with equivalent `{% include file.html %}`
2. put all the old php includes into `_includes` dir
3. replace PHP video switcher with the "alternative content" image
4. add YML header to each html file: `for f in *.html; do sed -i '1i---\n# IJC\n---' "$f"; done`
5. fix instances where file extensions were capitalized (windows server considers `.PNG` and `.png` to be the same, but linux servers don't)
6. redirect a few template links going to old places that don't exist any more

Still lots of broken stuff, but it's not PHP's fault!
