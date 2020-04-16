<?php
//これを読み込んでやると独自ページにワードプレスの関数を使用できるようになる
require_once( $_SERVER['DOCUMENT_ROOT']. '/wp-load.php' );
?>
<!DOCTYPE html>
<html>
<head>
<style>
html, body {
    overflow:hidden;
    margin:0;
    padding:0;

    /*Avoid flicker on slides transitions for mobile phones #336 */
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
.pp-section {
    height:100%;
    position:absolute;
    width:100%;
    
    /* fixes flickering in firefox*/
    backface-visibility: hidden; 
}
.pp-easing {
    -webkit-transition: all 1000ms cubic-bezier(0.550, 0.085, 0.000, 0.990);
    -moz-transition: all 1000ms cubic-bezier(0.550, 0.085, 0.000, 0.990);
    -o-transition: all 1000ms cubic-bezier(0.550, 0.085, 0.000, 0.990);
    transition: all 1000ms cubic-bezier(0.550, 0.085, 0.000, 0.990);
    /* custom */
    -webkit-transition-timing-function: cubic-bezier(0.550, 0.085, 0.000, 0.990);
    -moz-transition-timing-function: cubic-bezier(0.550, 0.085, 0.000, 0.990);
    -o-transition-timing-function: cubic-bezier(0.550, 0.085, 0.000, 0.990);
    transition-timing-function: cubic-bezier(0.550, 0.085, 0.000, 0.990);
    /* custom */
}
#pp-nav {
    position: fixed;
    z-index: 100;
    margin-top: -32px;
    top: 50%;
    opacity: 1;
}
#pp-nav.right {
    right: 17px;
}
#pp-nav.left {
    left: 17px;
}
.pp-section.pp-table{
    display: table;
}
.pp-tableCell {
    display: table-cell;
    vertical-align: middle;
    width: 100%;
    height: 100%;
}
.pp-slidesNav{
    position: absolute;
    z-index: 4;
    left: 50%;
    opacity: 1;
}
.pp-slidesNav.bottom {
    bottom: 17px;
}
.pp-slidesNav.top {
    top: 17px;
}
#pp-nav ul,
.pp-slidesNav ul {
  margin: 0;
  padding: 0;
}
#pp-nav li,
.pp-slidesNav li {
    display: block;
    width: 14px;
    height: 13px;
    margin: 7px;
    position:relative;
}
.pp-slidesNav li {
    display: inline-block;
}
#pp-nav li a,
.pp-slidesNav li a {
    display: block;
    position: relative;
    z-index: 1;
    width: 100%;
    height: 100%;
    cursor: pointer;
    text-decoration: none;
}
#pp-nav li .active span,
.pp-slidesNav .active span {
    background: #333;
}
#pp-nav span,
.pp-slidesNav span {
    top: 2px;
    left: 2px;
    width: 8px;
    height: 8px;
    border: 1px solid #000;
    background: rgba(0, 0, 0, 0);
    border-radius: 50%;
    position: absolute;
    z-index: 1;
}
.pp-tooltip {
    position: absolute;
    top: -2px;
    color: #fff;
    font-size: 14px;
    font-family: arial, helvetica, sans-serif;
    white-space: nowrap;
    max-width: 220px;
}
.pp-tooltip.right {
    right: 20px;
}
.pp-tooltip.left {
    left: 20px;
}
.pp-scrollable{
    overflow-y: scroll;
    height: 100%;
}




/* Menu
 * --------------------------------------- */
#menu li {
	display:inline-block;
	margin: 10px;
	color: #000;
	background:#fff;
	background: rgba(255,255,255, 0.5);
	-webkit-border-radius: 10px;
            border-radius: 10px;
}
#menu li.active{
	background:#666;
	background: rgba(0,0,0, 0.5);
	color: #fff;
}
#menu li a{
	text-decoration:none;
	color: #000;
}
#menu li.active a:hover{
	color: #000;
}
#menu li:hover{
	background: rgba(255,255,255, 0.8);
}
#menu li a,
#menu li.active a{
	padding: 9px 18px;
	display:block;
}
#menu li.active a{
	color: #fff;
}
#menu{
	position:fixed;
	top:0;
	left:0;
	height: 40px;
	z-index: 70;
	width: 100%;
	padding: 0;
	margin:0;
}

</style>
	<!-------wp_head()が---jsの読み込み---------->
	<?php wp_head(); ?>
</head>
<body>

<nav>
    <ul id="menu">
        <li data-menuanchor="page1" class="active"><a href="#page1">Page1</a></li>
        <li data-menuanchor="page2"><a href="#page2">Page2</a></li>
        <li data-menuanchor="page3"><a href="#page3">Page3</a></li>
        <li data-menuanchor="page4"><a href="#page4">Page4</a></li>
		<li data-menuanchor="page5"><a href="#page5">Page5</a></li>
    </ul>
</nav>



<div id="pagepiling">
    <section class="section" id="section1">
        〜内容1〜
    </section>
    <section class="section pp-scrollable" id="section2">
        〜内容2〜
    </section>
    <section class="section" id="section3">
        〜内容3〜
    </section>
    <section class="section" id="section4">
        〜内容4〜
    </section>
	<section class="section" id="section5">
        〜内容5〜
    </section>
</div>






</body>
<?php get_footer();?>
</html>