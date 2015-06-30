# naturalis-icon-font
A webfont containing much used interface icons in Naturalis style.

Icon fonts are a flexible way for including icons in websites. Instead of using images for displaying 'iconographic' elements, we load specific font where the characters have been replaced by icons. This Naturalis icon font contains arrows, chevrons, magnifier glasses and many more elements adjusted to the Naturalis corporate style.

The main advantages of using an icon font are (quoting iconfont.com)
- flexible: change the color of your icons or apply other CSS effects.
- scalable: changing the size of your icons would be as easy as changing the font size.
- vector: Font icons are vector and resolution independent
- fast: By having your icons in a font, you can load them with one HTTP request.

## Naturalis Employees: Quick use of the icons

If you just want to use any of the icons, you can browse through the 'generated' folder in this repro. Just open the PDF to view all icons. The icons are available as SVG, PNG and PDF files. 

You can also install the font on your computer. The font file is available in: _generated/font/fonts/Naturalis-UI-Icons.ttf_  Mind you that the icons are not mapped to regular characters, but are all available as glyphs in Unicodes Private Use Area. You might need to use a character map to find them, or copy the character from the demo.pdf or demo.html file.

If this is too cumbersome, you would need to JSON file from the root of the repro in the /iconmoon webapp/ and re-assign the icons to more usable (typable) characters, such as "A", "B", "C" etc. You need to use the IcoMoon web-app for this.

## IcoMoon WebApp

We use the IcoMoon WebApp to convert SVG images into a font and some CSS: https://icomoon.io/app

## Naturalis Webdevelopers: Using icons in a website

If the provided font is sufficient and doesn't need editing, you can use the CSS and SCSS files from the _generated/font_ folder.  The font is embedded (uring base64 url encoding) in the CSS file. The CSS file assigns the icons to classes. To turn a span into a home-icon, use
' <span class="icon icon-home"></span>

If you want to edit the font (adding icons, removing icons, re-assing glyphs to icons), you can import the JSON file from the root of this repro into the /iconmoon web-app/. It will import all the icons. 

## Naturalis Designers: maintaining this repro.

The SVG files in this repro are created using Adobe Illustrator by saving every artboard to a SVG file into the 'svg' folder in the root. The SVG files need re-naming after an export to get rid of the prefix.

Open the JSON file in the /icomoon app/ and update the selected icons.

When you add, edit or change any of the SVG files, you need to re-generate everything under the _generated_ folder of this repro. This folder should contain both the generated folder, as the generated SVG, PNG and PDF files. It requires some unzipping and moving of folders to get everything in place.

Most important, we need to download the generated font again. Under 'geneate font' --> preferences, make sure to choose "Encode & Embed font in CSS' and "Generate Stylesheets Variabels for:" and "Sass".

The generated folder should look as such:
-[Generated[]
 - [demo-files]
 - demo.html
 - demo.pdf
 - [font]
 - [PDF]
 - [PNG]
 - style.css
 - [SVG]
- icons.ai
- Naturalis UI Icons.json
- [php]
- README.md
- [svg]
