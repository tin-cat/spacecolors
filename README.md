# https://spacecolors.io
A CSS repository and experiment to document and explore the real colors of the planets and other space bodies as they might appear to the human eye.

All the colors have been carefully picked after a thorough study from multiple sources (See references) and are considered (by the people contributing to this project) the most accurate colors that represent how the space body would look to a human eye if they were orbiting the body.

See the colors and learn more about the project: https://spacecolors.io

## Instructions
You'll find the colors in the spaceBodiesColors.css file. All CSS classes assign the colors as backgrounds. Each space body has three colors and a gradient:

* **Primary color**
The most predominant natural accurate color that is considered to be the most representative color of the space body.
* **Secondary color**
A second natural accurate color that is also considered to be representative of the space body.
* **Tertiary color**
A third natural accurate color that is also considered to be representative of the space body.
* **Gradient**
A vertical gradient using various natural and accurate colors of the space body that represents a simplified but representative view of the contrasts, variances and characteristics.

If you're a PHP programmer, you can also include the spaceBodiesColors.php file in your code, the colors are specified there in the form of a PHP array.

## Currently documented space bodies

* sun
* mercury
* venus
* earth
* moon
* mars
* jupiter
* saturn
* uranus
* neptune
* pluto

## How to use
Import the spaceBodiesColors.css file to your project and assign the CSS classes in your HTML as follows:

* `.spaceBodyBackgroundColor.[Space body name].primary`
To color the element's background with the primary color of the space body.

* `.spaceBodyBackgroundColor.[Space body name].secondary`
To color the element's background with the secondary color of the space body.

* `.spaceBodyBackgroundColor.[Space body name].tertiary`
To color the element's background with the tertiary color of the space body.

* `.spaceBodyBackgroundGradient.[Space body name]`
To color the element's background with a vertical gradient that represents the space body.

Of course, you can just take a look at the Red, Green and Blue values in the CSS code and use the color for any specific purposes. If you're new to CSS, you'll find the colors there in the syntax: `.spaceBodyBackgroundColor.**[Space body name]**.primary { background-color: rgb(**[Red]**,**[Green]**,**[Blue]**); }`

## For contributors
The colors are stored in the spaceBodiesColors.php file as a PHP array. To generate the spaceBodiesColors.css file, run the generateSpaceBodiesColorsCss.php PHP script. Do not change the spaceBodiesColors.css. Here's how it works:

* **spaceBodiesColors.php** Edit this file if you want to change any colors.
* **generateSpaceBodiesColorsCss.php** Run this PHP script to generate the spaceBodiesColors.css CSS file (example: '`php -q generateSpaceBodiesColorsCss.php`')
* **spaceBodiesColors.css** This is the generated file you can use in your web projects.

# References

* [True Color photos of all the planets](https://owlcation.com/stem/True-Color-Photos-of-All-the-Planets) by Ellen [@GreekGeek](https://twitter.com/greekgeek)
* [The planets in natural colors](https://planetarium.madison.k12.wi.us/planets-true.htm) by the Madison Metropolitan School District Planetarium
* [What are the colors of the planets?](https://www.universetoday.com/33642/the-colors-of-the-planets/) by Matt Williams from Universe Today
* [Palette of the planets](https://donpmitchell.wordpress.com/2006/02/09/palette-of-the-planets) by donpmitchell
* [Venus looks more boring than you think it does](http://www.planetary.org/blogs/emily-lakdawalla/2009/2105.html) by [The Planetary Society](http://www.planetary.org)
* [Different ways of using colors for imaging planets](http://www.planetary-astronomy-and-imaging.com/en/different-ways-color-imaging-planets/) by Christophe Pellier
* [What color is the Sun?](http://solar-center.stanford.edu/SID/activities/GreenSun.html) by the Solar Center at Standford University
* [What color is the Sun?](https://www.universetoday.com/18689/color-of-the-sun/) by Fraser Cain at [@UniverseToday](https://twitter.com/universetoday)
* [What color is the Sun?](https://astrobob.areavoices.com/2012/08/26/what-color-is-the-sun/) by AstroBob [@astrobob_bk](https://twitter.com/astrobob_bk)
* [Reflectance and Color Variations on Mercury: Regolith Processes and Compositional Heterogeneity](http://science.sciencemag.org/content/321/5885/66) by Mark S. Robinson, Scott L. Murchie, David T. Blewett, Deborah L. Domingue, S. Edward Hawkins III, James W. Head, Gregory M. Holsclaw, William E. McClintock, Timothy J. McCoy, Ralph L. McNutt Jr., Louise M. Prockter, Sean C. Solomon, and Thomas R. Watters in [Science Mag](http://www.sciencemag.org)
* [No Longer Boring: 'Fireworks' and Other Surprises at Uranus Spotted Through Adaptive Optics](http://science.sciencemag.org/content/321/5885/66) by Emily Lakdawalla at [The Planetary Society](http://www.planetary.org/about/staff/emily-lakdawalla.html)
* [We Finally Know What Made the Huge Heart on Pluto](https://gizmodo.com/we-finally-know-what-made-the-huge-heart-on-pluto-1786802522) by Ria Mirsa [@misra](https://twitter.com/misra)
* NASA [Messenger](https://www.nasa.gov/mission_pages/messenger/main/index.html) mission (Mercury)
* NASA [Mariner 10](https://www.jpl.nasa.gov/missions/mariner-10/) mission (Venus)
* NASA [Blue Marble Project](https://visibleearth.nasa.gov/view_cat.php?categoryID=1484) (Earth)
* NASA [Hubble Space Telescope](https://www.nasa.gov/mission_pages/hubble/story/index.html) (Mars, Uranus and Neptune)
* NASA [Cassini](https://www.nasa.gov/mission_pages/cassini/main/index.html) mission (Jupiter and Saturn)
* NASA [New Horizons](https://www.nasa.gov/mission_pages/newhorizons/main/index.html) mission (Pluto)
* [Uranus in true and false color](https://www.nasa.gov/mission_pages/voyager/pia00032.html) by NASA

This work was inspired by the book ["Pale blue dot"](http://amzn.to/2jpFGHW) by Carl Sagan and Gustav Holst's suite ["The Planets"](http://amzn.to/2iaLngF)

This work is licensed under the [Creative Commons Attribution 4.0 International License](http://creativecommons.org/licenses/by/4.0/), meaning you can use, modify and build upon it even for commercial purposes, as long as you provide credit to the original authors, a link to http://spacecolors.io, for example!