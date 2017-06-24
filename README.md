2017-child-theme-example
========================

Child Themes, A Beginning
-------------------------

Today I will walk you through the creation of a basic child them in WordPress. In an effort to make your studies on this topic easier after leaving today I am going to mostly follow the examples and information provided by the [Child Theme Documentation](https://developer.wordpress.org/themes/advanced-topics/child-themes/) on the developer.wordpress.org site.

We start off with an [empty repo in github](https://github.com/demianseiler/2017-child-theme-example) and will move through a series of commits to show a general order and details of steps you might take to create a child theme.

### Starting Off With Style
This first thing you will need to create is a style.css file. This file alone tells WordPress a lot of information about your child theme. This includes The child theme name, author information, and which parent theme is going to act as your template. This is the only file required to create a child theme.

### Getting Functional
A style.css may technically be the only required file for a child them, but to load that style.css file it is best practice to engqueu it so it is available to the theme in WordPress. To do that, you need a functions.php file.

### Copy Cat
This is where the power of the child/parent theme relationship really comes into it's own. We will copy some of the files we want to override from the twentyfifteen them to our child theme and then modify as needed. Some of these files include the footer files footer-widgets.php and site-info.php.
