README FOR JPGRAPH Revision: r888, Exported: 2007-04-09 17:02
==============================================================

This package contains JpGraph, an Object Oriented PHP5 Graph Plotting library.

The library is Copyright (C) 2001-2007 Aditus Consulting and
released under dual license QPL 1.0 for open source and educational
use and JpGraph Professional License for commercial use. 

Please see full license details at http://www.aditus.nu/jpgraph/

* --------------------------------------------------------------------
* PHP4 IS NOT SUPPORTED IN THIS 2.x SERIE
* --------------------------------------------------------------------

* --------------------------------------------------------------------
* Note: Due to a bug in PHP5 make sure that the compatibility mode for
*       PHP4 is disabled by setting (in php.ini)
*
*       zend.ze1_compatibility_mode = Off
* --------------------------------------------------------------------


Included files
--------------
README	                This file
QPL.txt                 QPL 1.0  Licensee

/src
  jpg-config.inc.php		Configuration setup for JpGraph
  jpgraph.php			Base library
  jpgraph_ttf.inc.php		Base library. TTF font handling
  jpgraph_errhandler.inc.php	Base library. Error handler module.

  jpgraph_log.php		Extension: logarithmic scales
  jpgraph_line.php		Extension: line plots 
  jpgraph_bar.php		Extension: bar plots
  jpgraph_date.php		Extension: date scale
  jpgraph_flags.php		Extension: Country flags
  jpgraph_error.php		Extension: error plots
  jpgraph_scatter.php		Extension: scatter/impulse plots
  jpgraph_radar.php		Extension: radar plots
  jpgraph_pie.php		Extension: pie plots
  jpgraph_canvas.php		Extension: drawing canvas
  jpgraph_canvtools.php		Extension: utility classes for working with canvas
  jpgraph_pie3d.php		Extension: 3D pie plots
  jpgraph_gantt.php		Extension: Gantt chart
  jpgraph_regstat.php		Extension: Statistics and cubic splines.
  jpgraph_stock.php		Extension: Stock and box plots.
  jpgraph_gradient.php		Extension: Color gradient class
  jpgraph_gb2312.php		Extension: Chinese GB2312 to Unicode translation
  jpgraph_imgtrans.php		Extension: Basic image transformation
  jpgraph_flags.php		Extension: Country flags
  jpgraph_iconplot.php		Extension: Use image icons in plots
  jpgraph_polar.php		Extension: Polar plots
  jpgraph_plotband.php		Extension: Plotbands in graphs
  jpgraph_plotmark.inc.php	Extension: Using plotmarks in graphs
  jpgraph_mgraph.php		Extension: Multi graph extension
  jpgraph_utils.inc.php		Extension: Various non-mandatory utility classes
  jprgaph_led.php		Extension: 7x4 LED Digits module
  imgdata_*.inc.php		Extension: Encoded images for plot marks
  flags*.dat			Image data: Pre-compiled data for country flags.

/src/Examples		A directory with example sripts.
			Run testsuit.php to get a list of all
			files and you can easily click on a file to
			see the code and the resulting image.
		
/docs			Directory with all documentation				
/docs/index.html	Documentation portal

			
Requirements:
-------------
Miminum:
* PHP 5.1.0 or higher 
* GD 2.28 or higher
Note: Earlier versions might work but is unsupported.

Recommended:
* PHP 5.1.2
* PHP Builtin GD library

Installation Notes
------------------
Check that the default directory paths in jpg-config.inc
   for cache directory and TTF directory suits your installation. 
   Note1: The default directories are different depending on if
   the library is running on Windows or UNIX.
   Note2: Apache/PHP must have write permission to your cache 
   directory if you enable the cache feature. By default the cache
   is disabled.

Check that all rest of the DEFINE in jpg-config.inc 
   is setup to your preference. The default should be fine
   for most users. (See also Note 3. below)
