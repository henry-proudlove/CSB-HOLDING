<?php
    header("Content-type: text/css; charset: UTF-8");
?>

/*
 * HTML5 Boilerplate
 *
 * What follows is the result of much research on cross-browser styling.
 * Credit left inline and big thanks to Nicolas Gallagher, Jonathan Neal,
 * Kroc Camen, and the H5BP dev community and team.
 */

/* ==========================================================================
   Base styles: opinionated defaults
   ========================================================================== */

html,
button,
input,
select,
textarea {
    color: #222;
}

html{
	height: 100%;
}

body {
    font-size: 1em;
    line-height: 1.4;
    /*background-image: url('../img/flags.svg#flag-1');*/
    font-family: "futura-pt",sans-serif;
    background: #222;
}

/*
 * Remove text-shadow in selection highlight: h5bp.com/i
 * These selection declarations have to be separate.
 * Customize the background color to match your design.
 */

::-moz-selection {
    background: #282828;
    text-shadow: none;
}

::selection {
    background: #b3d4fc;
    text-shadow: none;
}

/*
 * A better looking default horizontal rule
 */

hr {
    display: block;
    height: 1px;
    border: 0;
    border-top: 1px solid #ccc;
    margin: 1em 0;
    padding: 0;
}

/*
 * Remove the gap between images and the bottom of their containers: h5bp.com/i/440
 */

img {
    vertical-align: middle;
}

/*
 * Remove default fieldset styles.
 */

fieldset {
    border: 0;
    margin: 0;
    padding: 0;
}

/*
 * Allow only vertical resizing of textareas.
 */

textarea {
    resize: vertical;
}

/* ==========================================================================
   Chrome Frame prompt
   ========================================================================== */

.chromeframe {
    margin: 0.2em 0;
    background: #ccc;
    color: #000;
    padding: 0.2em 0;
}

/* ==========================================================================
   Author's custom styles
   ========================================================================== */



/*
 * FLAGS
 */
 
#flags{
	width: 100%;
	height: 100%;
	position: absolute;
}

.flag{
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	float:left;
	width: 12.5%;
	height: 12.5%;
	position: relative;
}

.flag-shape{
	background-size: 100% 100%;
	width: 16px;
	height: 16px;
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -8px;
	        transition:         transform 0.5s;
	-webkit-transition: -webkit-transform 0.5s;
	   -moz-transition:    -moz-transform 0.5s;
	    -ms-transition:     -ms-transform 0.5s;
	     -o-transition:      -o-transform 0.5s;
}

/* flag backgrounds */

.rotate{
	        transform: rotateX(90deg);
	-webkit-transform: rotateX(90deg);
	   -moz-transform: rotateX(90deg);
	    -ms-transform: rotateX(90deg);
	     -o-transform: rotateX(90deg);
}

<?php
	$pfs = array("-webkit-" , "-moz-" , "-ms-" , "-o-", "");
	
	for($i=0; $i < 21; $i++){
	
		/* Flag Backgrounds */
		$flag = $i + 1;
		echo ".flag-" . $flag . "{\n";
		echo "background-image: url('../img/flag-" . $flag . ".svg');\n";
		echo "}\n";
		
		/* Animation Classs */
		echo ".anim-" . $flag . "{\n";
		$stem = "anim-keys-" . $flag . " 1s;\n";
		foreach($pfs as $pf){
			echo $pf . "animation : " . $stem;
		} 
		echo "}\n";
		
		/* Animation Keyframes */
		foreach($pfs as $pf){
			echo "@" . $pf . "keyframes anim-keys-" . $flag . "{\n";
			echo "0% {" . $pf . "transform: rotateX(0deg); }\n";
			echo "50% {" . $pf . "transform: rotateX(90deg);}\n";
			echo "100% {" . $pf . "transform: rotateX(0deg); }\n";
			echo "}\n";
		}
	}
?>

/* ==========================================================================
   Helper classes
   ========================================================================== */

/*
 * Image replacement
 */

.ir {
    background-color: transparent;
    border: 0;
    overflow: hidden;
    /* IE 6/7 fallback */
    *text-indent: -9999px;
}

.ir:before {
    content: "";
    display: block;
    width: 0;
    height: 150%;
}

/*
 * Hide from both screenreaders and browsers: h5bp.com/u
 */

.hidden {
    display: none !important;
    visibility: hidden;
}

/*
 * Hide only visually, but have it available for screenreaders: h5bp.com/v
 */

.visuallyhidden {
    border: 0;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
}

/*
 * Extends the .visuallyhidden class to allow the element to be focusable
 * when navigated to via the keyboard: h5bp.com/p
 */

.visuallyhidden.focusable:active,
.visuallyhidden.focusable:focus {
    clip: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    position: static;
    width: auto;
}

/*
 * Hide visually and from screenreaders, but maintain layout
 */

.invisible {
    visibility: hidden;
}

/*
 * Clearfix: contain floats
 *
 * For modern browsers
 * 1. The space content is one way to avoid an Opera bug when the
 *    `contenteditable` attribute is included anywhere else in the document.
 *    Otherwise it causes space to appear at the top and bottom of elements
 *    that receive the `clearfix` class.
 * 2. The use of `table` rather than `block` is only necessary if using
 *    `:before` to contain the top-margins of child elements.
 */

.clearfix:before,
.clearfix:after {
    content: " "; /* 1 */
    display: table; /* 2 */
}

.clearfix:after {
    clear: both;
}

/*
 * For IE 6/7 only
 * Include this rule to trigger hasLayout and contain floats.
 */

.clearfix {
    *zoom: 1;
}

/* ==========================================================================
   EXAMPLE Media Queries for Responsive Design.
   Theses examples override the primary ('mobile first') styles.
   Modify as content requires.
   ========================================================================== */

@media only screen and (min-width: 35em) {
    /* Style adjustments for viewports that meet the condition */
}

@media print,
       (-o-min-device-pixel-ratio: 5/4),
       (-webkit-min-device-pixel-ratio: 1.25),
       (min-resolution: 120dpi) {
    /* Style adjustments for high resolution devices */
}

/* ==========================================================================
   Print styles.
   Inlined to avoid required HTTP connection: h5bp.com/r
   ========================================================================== */

@media print {
    * {
        background: transparent !important;
        color: #000 !important; /* Black prints faster: h5bp.com/s */
        box-shadow: none !important;
        text-shadow: none !important;
    }

    a,
    a:visited {
        text-decoration: underline;
    }

    a[href]:after {
        content: " (" attr(href) ")";
    }

    abbr[title]:after {
        content: " (" attr(title) ")";
    }

    /*
     * Don't show links for images, or javascript/internal links
     */

    .ir a:after,
    a[href^="javascript:"]:after,
    a[href^="#"]:after {
        content: "";
    }

    pre,
    blockquote {
        border: 1px solid #999;
        page-break-inside: avoid;
    }

    thead {
        display: table-header-group; /* h5bp.com/t */
    }

    tr,
    img {
        page-break-inside: avoid;
    }

    img {
        max-width: 100% !important;
    }

    @page {
        margin: 0.5cm;
    }

    p,
    h2,
    h3 {
        orphans: 3;
        widows: 3;
    }

    h2,
    h3 {
        page-break-after: avoid;
    }
}