<?php /* Template Name: Slick */ ?>
<?php get_header(); ?>

<style type="text/css">
	.blue{background:#3498db;color:#fff;}
.blue h3{background:#fff;color:#3498db;font-size:36px;line-height:100px;margin:10px;padding:2%;position:relative;text-align:center;}
.button{background:#3498db;color:#fff;display:block;font-size:16px;margin:20px auto;padding:20px;text-align:center;text-decoration:none;width:48%;}
.buttons{padding:0 20px 20px; margin-bottom: 10px;}
.buttons .button{background:#FFF;color:#3498db;float:left;margin:5px;}
.center .slick-center h3{-moz-transform:scale(1.08);-ms-transform:scale(1.08);-o-transform:scale(1.08);-webkit-transform:scale(1.08);color:#e67e22;opacity:1;transform:scale(1.08);}
.center h3{opacity:0.8;transition:all 300ms ease;}
.content{margin:auto;padding:20px;width:600px;}
.content:after,.buttons::after{clear:both;content:"";display:table;}
.destroy{font-weight:400;margin-top:40px;}
.features{display:block;list-style-type:none;margin-top:30px;padding:0;text-align:center;}
.features li{margin:20px 0;}
.filter .button{background:#FFF;color:#3498db; margin-bottom: 40px;}
.fixed-header{background:#FFF;box-shadow:2px 0 5px rgba(0,0,0,0.5);display:none;padding:10px;position:fixed;top:0;width:100%;z-index:10000;}
.fixed-header .header-content{margin:auto;width:600px;}
.fixed-header .subheading{display:none;}
.fixed-header h1.title{float:left;font-size:24px;margin:0;}
.fixed-header ul.nav{float:right;margin:0;padding:5px;}
.fixed-header ul.nav li{margin:0 0 0 10px;}
.header{padding:20px 0;}
.margin-40{margin-bottom:40px;}
.more,.button.first{margin-top:40px;}
.red{background:#e74c3c;color:#fff;}
.slick-slide .image{padding:10px;}
.slick-slide img{border:5px solid #FFF;display:block;width:100%;}
.slick-slide img.slick-loading{border:0 }
.slick-slider{margin:30px auto 50px;}
.subheading{color:#555;font-size:12px;font-style:italic;font-weight:400;margin:10px auto;text-align:center;}
.white{background:#fff;color:#3498db;}
.white pre,.white hr{background:#3498db;}
a{color:#3498db;}
body,html{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;background:#fff;font-family:'Lucida Grande', sans-serif;height:100%;line-height:1;margin:0;padding:0;text-rendering:optimizeLegibility;width:100%;}
code{color:#000; overflow-x: scroll;}
h1{color:#3498db;font-family:Pacifico;font-size:72px;font-weight:400;line-height:1.2;margin:0 auto 10px;text-align:center;}
h1.title{font-size:96px;}
h2{font-family:Pacifico;font-size:36px;margin:20px auto;text-align:center;}
h4{font-family:Pacifico;font-size:28px;margin:20px auto;text-align:center;}
hr{background:#fff;border:0;height:1px;margin:40px 0;}
p{font-size:18px;font-weight:700;line-height:1.5;margin-bottom:40px;text-align:center;}
p.note{font-size: 12px;}
p.cdn{font-size: 14px;}
p.guff{font-size:16px;}
pre{background:#fff;margin:0 10px 20px;padding:10px;}
section{width:100%;}
table{border-collapse:collapse;border-spacing:0;margin:40px auto;text-align:left;width:100%; table-layout: fixed; font-size: 14px; line-height: 1.4;}
tbody{background:#fff;border-color:#fff;}
td{background:#3498db;border:1px solid #fff;color:#fff;padding:10px;width:33%; vertical-align: top;}
th{border-left:1px solid #3498db;padding:10px;}
td:first-child { font-weight: bold;}
th.last{width: 230px;}
th.type {width: 80px;}
th.default { width: 100px; }
th:first-child{border-left:0;}
thead{background:#fff;border-color:#3498db;color:#3498db;}
tr{background:#fff;border-right:1px solid #fff;}
ul.nav{margin-bottom:0;padding-left:0;text-align:center;}
ul.nav li{display:inline-block;list-style-type:none;margin:0 20px;}
ul.nav li a{font-size:12px;text-decoration:none;}
@media (max-width: 420px) {
ul.nav li a{display:block;font-size:10px;}
}
@media (max-width: 768px) {
.blue h3{font-size:24px;}
.button{margin:0 auto 20px;width:auto;}
.button.first{margin-top:40px;}
.buttons{padding:0 0 20px;}
.buttons .button{float:left;font-size:12px;margin:1%;width:48%;}
.center{margin-left:-40px;margin-right:-40px;}
.center .slick-center h3{-moz-transform:scale(1);-ms-transform:scale(1);-o-transform:scale(1);-webkit-transform:scale(1);color:#e67e22;opacity:1;transform:scale(1);}
.center h3{-moz-transform:scale(0.95);-ms-transform:scale(0.95);-o-transform:scale(0.95);-webkit-transform:scale(0.95);opacity:0.8;transform:scale(0.95);transition:all 300ms ease;}
.content{margin:auto;padding:20px 40px;width:auto;}
.fixed-header .header-content{width:auto;}
pre{font-size:12px; overflow-x: scroll;}
table{font-size:14px;line-height:18px;margin:40px auto 20px; display: block; float: left;}
tr { width: 100%; border-right: none; border-bottom: 1px solid #fff; margin: 0px 0px 20px; padding: 0px 0px 20px; background: transparent; float: left; }
thead { display: none; }
td { border: 0; padding: 10px 0px;}
td,tbody { display: block; width: 100% !important;}
table.settings td:nth-of-type(1), table.methods td:nth-of-type(1){font-weight: bold; font-size: 16px; line-height: 18px;}
table.settings td:nth-of-type(2):before{content: 'Type: '; font-weight: bold;}
table.settings td:nth-of-type(3):before{content: 'Default: '; font-weight: bold;}
table.methods td:nth-of-type(2):before{content: 'Arguments: '; font-weight: bold;}
}
</style>

<section class="row">
	<section id="features" class="blue">
			<div class="content">
				<h2>Features</h2>
				<ul class="features">
					<li>Fully responsive. Scales with its container.</li>
					<li>Separate settings per breakpoint</li>
					<li>Uses CSS3 when available. Fully functional when not.</li>
					<li>Swipe enabled. Or disabled, if you prefer.</li>
					<li>Desktop mouse dragging</li>
					<li>Infinite looping.</li>
					<li>Fully accessible with arrow key navigation</li>
					<li>Add, remove, filter & unfilter slides</li>
					<li>Autoplay, dots, arrows, callbacks, etc...</li>
				</ul>
				<hr id="demos"/>
				<h2>Single Item</h2>
				<div class="slider single-item">
					<div><h3>1</h3></div>
					<div><h3>2</h3></div>
					<div><h3>3</h3></div>
					<div><h3>4</h3></div>
					<div><h3>5</h3></div>
					<div><h3>6</h3></div>
				</div>
				<pre><code>
$('.single-item').slick();
				</code></pre>
				<hr/>
				<h2>Multiple Items</h2>
				<div class="slider multiple-items">
					<div><h3>1</h3></div>
					<div><h3>2</h3></div>
					<div><h3>3</h3></div>
					<div><h3>4</h3></div>
					<div><h3>5</h3></div>
					<div><h3>6</h3></div>
					<div><h3>7</h3></div>
					<div><h3>8</h3></div>
					<div><h3>9</h3></div>
				</div>
				<pre><code>
$('.multiple-items').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3
});
				</code></pre>
				<hr/>
				<h2>Responsive Display</h2>
				<div class="slider responsive">
					<div><h3>1</h3></div>
					<div><h3>2</h3></div>
					<div><h3>3</h3></div>
					<div><h3>4</h3></div>
					<div><h3>5</h3></div>
					<div><h3>6</h3></div>
					<div><h3>7</h3></div>
					<div><h3>8</h3></div>
				</div>
				<pre><code>
$('.responsive').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});
				</code></pre>
				<hr/>
				<h2>One At A Time</h2>
				<div class="slider one-time">
					<div><h3>1</h3></div>
					<div><h3>2</h3></div>
					<div><h3>3</h3></div>
					<div><h3>4</h3></div>
					<div><h3>5</h3></div>
					<div><h3>6</h3></div>
				</div>
				<pre><code>
$('.one-time').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 5,
  touchMove: false,
  slidesToScroll: 1
});
				</code></pre>
				<hr/>
				<h2>Uneven Sets</h2>
				<div class="slider uneven">
					<div><h3>1</h3></div>
					<div><h3>2</h3></div>
					<div><h3>3</h3></div>
					<div><h3>4</h3></div>
					<div><h3>5</h3></div>
					<div><h3>6</h3></div>
				</div>
				<pre><code>
$('.uneven').slick({
  slidesToShow: 4,
  slidesToScroll: 4
});
				</code></pre>
				<hr/>
				<h2>Center Mode</h2>
				<div class="slider center">
					<div><h3>1</h3></div>
					<div><h3>2</h3></div>
					<div><h3>3</h3></div>
					<div><h3>4</h3></div>
					<div><h3>5</h3></div>
					<div><h3>6</h3></div>
				</div>
				<pre><code>
$('.center').slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});
				</code></pre>
				<hr/>
				<h2>Lazy Loading</h2>
				<div class="slider lazy">
					<div><div class="image"><img data-lazy="img/lazyfonz1.png"/></div></div>
					<div><div class="image"><img data-lazy="img/lazyfonz2.png"/></div></div>
					<div><div class="image"><img data-lazy="img/lazyfonz3.png"/></div></div>
					<div><div class="image"><img data-lazy="img/lazyfonz4.png"/></div></div>
					<div><div class="image"><img data-lazy="img/lazyfonz5.png"/></div></div>
					<div><div class="image"><img data-lazy="img/lazyfonz6.png"/></div></div>
				</div>
				<pre><code>
// To use lazy loading, set a data-lazy attribute
// on your img tags and leave off the src

&lt;img data-lazy="img/lazyfonz1.png"/&gt;

$('.lazy').slick({
  lazyLoad: 'ondemand',
  slidesToShow: 3,
  slidesToScroll: 1
});
				</code></pre>
				<hr/>
				<h2>Autoplay</h2>
				<div class="slider autoplay">
					<div><h3>1</h3></div>
					<div><h3>2</h3></div>
					<div><h3>3</h3></div>
					<div><h3>4</h3></div>
					<div><h3>5</h3></div>
					<div><h3>6</h3></div>
				</div>
			<pre><code>
$('.autoplay').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});
				</code></pre>
				<hr/>
				<h2>Fade</h2>
				<div class="slider fade">
					<div><div class="image"><img src="img/fonz1.png"/></div></div>
					<div><div class="image"><img src="img/fonz2.png"/></div></div>
					<div><div class="image"><img src="img/fonz3.png"/></div></div>
				</div>
			<pre><code>
$('.fade').slick({
  dots: true,
  infinite: true,
  speed: 500,
  fade: true,
  slide: '> div',
  cssEase: 'linear'
});
				</code></pre>
				<hr/>
				<h2>Add & Remove</h2>
				<div class="slider add-remove">
					<div><h3>1</h3></div>
				</div>
				<div class="buttons">
					<a href="javascript:void(0)" class="button js-add-slide">Add Slide</a>
					<a href="javascript:void(0)" class="button js-remove-slide">Remove Slide</a>
				</div>
			<pre><code>
$('.add-remove').slick({
  slidesToShow: 3,
  slidesToScroll: 3
});
var slideIndex = 1;
$('.js-add-slide').on('click', function(){
  slideIndex++;
  $('.add-remove').slickAdd('&lt;div&gt;&lt;h3&gt;'+slideIndex+'&lt;/h3&gt;&lt;/div&gt;');
});

$('.js-remove-slide').on('click', function(){
  $('.add-remove').slickRemove(slideIndex - 1);
  if (slideIndex !== 0) {
  	slideIndex--;
  }
});
				</code></pre>
				<hr/>
				<h2>Filtering</h2>
				<div class="slider filtering">
					<div><h3>1</h3></div>
					<div><h3>2</h3></div>
					<div><h3>3</h3></div>
					<div><h3>4</h3></div>
					<div><h3>5</h3></div>
					<div><h3>6</h3></div>
					<div><h3>7</h3></div>
					<div><h3>8</h3></div>
					<div><h3>9</h3></div>
					<div><h3>10</h3></div>
					<div><h3>11</h3></div>
					<div><h3>12</h3></div>
				</div>
				<div class="filter">
					<a href="javascript:void(0)" class="button js-filter">Filter Slides</a>
				</div>
			<pre><code>
$('.filtering').slick({
  slidesToShow: 4,
  slidesToScroll: 4
});

var filtered = false;

$('.js-filter').on('click', function(){
  if(filtered === false) {
    $('.filtering').slickFilter(':even');
    $(this).text('Unfilter Slides');
    filtered = true;
  } else {
    $('.filtering').slickUnfilter();
    $(this).text('Filter Slides');
    filtered = false;
  }
});
				</code></pre>
				<hr/>
				<h2>Destroy</h2>
				<p class="destroy">If you really want to be that guy...</p>
				<pre><code>
$('.your-slider').unslick();
				</code></pre>
				<h4 class="more">and a whole lot more...</h4>
				</div>
		</section>
		<section id="getting-started" class="white">
			<div class="content">
				<h2 class="margin-40">Getting Started</h2>
				<p>Set up your HTML markup.</p>
				<pre><code>
&lt;div class="your-class"&gt;
  &lt;div&gt;your content&lt;/div&gt;
  &lt;div&gt;your content&lt;/div&gt;
  &lt;div&gt;your content&lt;/div&gt;
&lt;/div&gt;
				</code></pre>
				<hr/>
				<p>Move the /slick folder into your project</p>
				<hr/>
				<p>Add slick.css in your &lt;head&gt;</p>
				<pre><code>
&lt;link rel="stylesheet" type="text/css" href="slick/slick.css"/&gt;
				</code></pre>
				<hr/>
				<p>Add slick.js before your closing &lt;body&gt; tag, after jQuery (requires jQuery 1.7 +)</p>
				<pre><code>
&lt;script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="slick/slick.min.js"&gt;&lt;/script&gt;
				</code></pre>
				<hr/>
				<p>Initialize your slider in your script file or an inline script tag</p>
				<pre><code>
$(document).ready(function(){
	$('.your-class').slick({
	  setting-name: setting-value
	});
});
				</code></pre>
				<hr/>
				<p>When complete, your HTML should look something like:</p>
				<pre><code>
&lt;html&gt;
    &lt;head&gt;
    &lt;title&gt;My Now Amazing Webpage&lt;/title&gt;
    &lt;link rel="stylesheet" type="text/css" href="slick/slick.css"/&gt;
    &lt;/head&gt;
    &lt;body&gt;

    &lt;div class="your-class"&gt;
        &lt;div&gt;your content&lt;/div&gt;
        &lt;div&gt;your content&lt;/div&gt;
        &lt;div&gt;your content&lt;/div&gt;
    &lt;/div&gt;

    &lt;script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"&gt;&lt;/script&gt;
    &lt;script type="text/javascript" src="slick/slick.min.js"&gt;&lt;/script&gt;

    &lt;script type="text/javascript"&gt;
        $(document).ready(function(){
            $('.your-class').slick({
                setting-name: setting-value
            });
        });
    &lt;/script&gt;

    &lt;/body&gt;
&lt;/html&gt;
				</code></pre>
				<p class="note">NOTE: I highly recommend putting your initialization script in an external JS file.</p>
			</div>
		</section>
		<section id="settings" class="blue">
			<div class="content">
				<h2 >Settings</h2>
				<table class="settings">
					<thead>
						<tr>
							<th class="first">Setting</th>
							<th class="type">Type</th>
							<th class="default">Default</th>
							<th class="last">Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>accessibility</td>
							<td>boolean</td>
							<td>true</td>
							<td>Enables tabbing and arrow key navigation</td>
						</tr>
						<tr>
							<td>autoplay</td>
							<td>boolean</td>
							<td>false</td>
							<td>Enables Autoplay</td>
						</tr>
						<tr>
							<td>autoplaySpeed</td>
							<td>int(ms)</td>
							<td>3000</td>
							<td>Autoplay Speed in milliseconds</td>
						</tr>
						<tr>
							<td>arrows</td>
							<td>boolean</td>
							<td>true</td>
							<td>Prev/Next Arrows</td>
						</tr>
						<tr>
							<td>centerMode</td>
							<td>boolean</td>
							<td>false</td>
							<td>Enables centered view with partial prev/next slides. Use with odd numbered slidesToShow counts.</td>
						</tr>
						<tr>
							<td>centerPadding</td>
							<td>string</td>
							<td>'50px'</td>
							<td>Side padding when in center mode (px or %)</td>
						</tr>
						<tr>
							<td>cssEase</td>
							<td>string</td>
							<td>'ease'</td>
							<td>CSS3 Animation Easing</td>
						</tr>
						<tr>
							<td>customPaging</td>
							<td>function</td>
							<td>n/a</td>
							<td>Custom paging templates. See source for use example.</td>
						</tr>
						<tr>
							<td>dots</td>
							<td>boolean</td>
							<td>false</td>
							<td>Show dot indicators</td>
						</tr>
						<tr>
							<td>draggable</td>
							<td>boolean</td>
							<td>true</td>
							<td>Enable mouse dragging</td>
						</tr>
						<tr>
							<td>fade</td>
							<td>boolean</td>
							<td>false</td>
							<td>Enable fade</td>
						</tr>
						<tr>
							<td>easing</td>
							<td>string</td>
							<td>'linear'</td>
							<td>Add easing for jQuery animate. Use with easing libraries or default easing methods</td>
						</tr>
						<tr>
							<td>infinite</td>
							<td>boolean</td>
							<td>true</td>
							<td>Infinite loop sliding</td>
						</tr>
						<tr>
							<td>lazyLoad</td>
							<td>string</td>
							<td>'ondemand'</td>
							<td>Set lazy loading technique. Accepts 'ondemand' or 'progressive'.</td>
						</tr>
						<tr>
							<td>onBeforeChange</td>
					     <td>function</td>
							<td>null</td>
							<td>Before slide callback</td>
						</tr>
						<tr>
							<td>onAfterChange</td>
							<td>function</td>
							<td>null</td>
							<td>After slide callback</td>
						</tr>
						<tr>
							<td>onInit</td>
							<td>function</td>
							<td>null</td>
							<td>Callback that fires after first initialization</td>
						</tr>
						<tr>
							<td>onReInit</td>
							<td>function</td>
							<td>null</td>
							<td>Callback that fires after every re-initialization</td>
						</tr>
						<tr>
							<td>pauseOnHover</td>
							<td>boolean</td>
							<td>true</td>
							<td>Pause Autoplay On Hover</td>
						</tr>
						<tr>
							<td>responsive</td>
							<td>object</td>
							<td>none</td>
							<td>Object containing breakpoints and settings objects (see demo). Enables settings sets at given screen width.</td>
						</tr>
						<tr>
							<td>slide</td>
							<td>element</td>
							<td>'div'</td>
							<td>Element query to use as slide</td>
						</tr>
						<tr>
							<td>slidesToShow</td>
							<td>int</td>
							<td>1</td>
							<td># of slides to show</td>
						</tr>
						<tr>
							<td>slidesToScroll</td>
							<td>int</td>
							<td>1</td>
							<td># of slides to scroll</td>
						</tr>
						<tr>
							<td>speed</td>
							<td>int(ms)</td>
							<td>300</td>
							<td>Slide/Fade animation speed</td>
						</tr>
						<tr>
							<td>swipe</td>
							<td>boolean</td>
							<td>true</td>
							<td>Enable swiping</td>
						</tr>
						<tr>
							<td>touchMove</td>
							<td>boolean</td>
							<td>true</td>
							<td>Enable slide motion with touch</td>
						</tr>
						<tr>
							<td>touchThreshold</td>
							<td>int</td>
							<td>5</td>
							<td>Swipe distance threshold</td>
						</tr>
						<tr>
							<td>useCSS</td>
							<td>boolean</td>
							<td>true</td>
							<td>Enable/Disable CSS Transitions</td>
						</tr>
						<tr>
							<td>vertical</td>
							<td>boolean</td>
							<td>false</td>
							<td>Vertical slide mode</td>
						</tr>
					</tbody>
				</table>
				<h2>Methods</h2>
				<table class="methods">
					<thead>
						<tr>
							<th class="first">Method</th>
							<th>Arguments</th>
							<th class="last">Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>slickCurrentSlide</td>
							<td>none</td>
							<td>Returns the current slide index</td>
						</tr>
						<tr>
							<td>slickGoTo</td>
							<td>int : slide number</td>
							<td>Navigates to a slide by index</td>
						</tr>
						<tr>
							<td>slickNext</td>
							<td>none</td>
							<td>Navigates to the next slide</td>
						</tr>
						<tr>
							<td>slickPrev</td>
							<td>none</td>
							<td>Navigates to the previous slide</td>
						</tr>
						<tr>
							<td>slickPause</td>
							<td>none</td>
							<td>Pauses autoplay</td>
						</tr>
						<tr>
							<td>slickPlay</td>
							<td>none</td>
							<td>Starts autoplay</td>
						</tr>
						<tr>
							<td>slickAdd</td>
							<td>html or DOM object, index, addBefore</td>
							<td>Add a slide. If an index is provided, will add at that index, or before if addBefore is set. If no index is provided, add to the end or to the beginning if addBefore is set. Accepts HTML String || Object</td>
						</tr>
						<tr>
							<td>slickRemove</td>
							<td>index, removeBefore</td>
							<td>Remove slide by index. If removeBefore is set true, remove slide preceding index, or the first slide if no index is specified. If removeBefore is set to false, remove the slide following index, or the last slide if no index is set.</td>
						</tr>
						<tr>
							<td>slickFilter</td>
							<td>Selector or Function</td>
							<td>Filters slides using jQuery .filter()</td>
						</tr>
						<tr>
							<td>slickUnfilter</td>
							<td>index</td>
							<td>Removes applied filtering</td>
						</tr>
						<tr>
							<td>slickSetOption</td>
							<td>option : string, value : depends on option, refresh : boolean</td>
							<td>Sets an individual value live. Set refresh to true if it's a UI update.</td>
						</tr>
						<tr>
							<td>unslick</td>
							<td>none</td>
							<td>Deconstructs slick</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
		</section>
<?php get_footer(); ?>