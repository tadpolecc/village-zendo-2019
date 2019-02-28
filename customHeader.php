<?
/***** 

Custom things by Kojin (ben@benheath.me)
Aug 18, 2017
Shuso Sesshin

I know that there's a better way to do this, but life is short and samu practice is over in the time it takes to sneeze. I don't have time to go over wordpress function documentations. Thus, Kojin turns the website wheel, albiet squeekily.

This is the custom homepage header.

*****/
?>

<style>
body {
	background: #efefef;
}
.site-inner, .wrap {
	background: #fff;
}
.content-sidebar-wrap {
	width: 100%;
}
.sidebar-secondary {
	background: #000;
	float: none;
	padding-top: 0;
	width: auto;
	display: none;
}
.sidebar-secondary section {
	display: inline-block;
}
.sidebar .widget_nav_menu li {
	position: relative !important;
	display: inline-block;
}
.sidebar .widget_nav_menu .sub-menu {
	left: 0 !important;
	top: 68px;
}
header.masthead {
	background: url('http://villagezendo.org/images/masthead.jpg') center center no-repeat;
	background-size: 100%;
	height: 480px;
	overflow: auto;
}
header.masthead h1 {
	text-indent: -9000em;
	background: url('http://villagezendo.org/images/logo.png') center center no-repeat;
	background-size: 100%;
	width: 520px;
    height: 42px;
    margin-top: 75px;
}
header.masthead p {
	color: #fff;
    width: 510px;
    text-align: justify;
    line-height: 24px;
	margin: 55px 0 60px 55px;
    font-size: 15px;
}
header.masthead h1, header.masthead p, header.masthead div {
	margin-left: 50px;
}
header.masthead a {
	text-transform: uppercase;
    text-decoration: none;
    color: #fff;
    border: 1px solid #8a8a8a;
    -o-border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    padding: 11px 26px;
    font-size: 16px;
    margin-right: 51px;
}
header.masthead a:last-child {
	background: #ee2f3d;
	border-color: #ee2f3d;
}
header.masthead a:visited {
	color: #fff;
}
header.masthead a:hover {
	text-decoration: none;
	color: #fff;
	background: #ee2f3d;
	border-color: #ee2f3d;
}
header.masthead a:last-child:hover {
	background: #ff0000;
}
.schedule {
	text-align: center;
}
.schedule h2 {
	text-align: center;
    margin: 40px 0 20px;
    font-size: 32px;
    text-transform: uppercase;
}
.schedule hr {
	border: 1px solid #f00;
    width: 200px;
}
.schedule p {
	display: inline-block;
	width: 280px;
	padding: 110px 40px 0;
	font-size: 20px;
	-o-border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	margin: 5px 30px;
	font-size: 19px;
	height: 245px;
	background-image: url(https://villagezendo.org/images/scheduleClock.png);
	background-position: center 30px;
	background-size: 65px;
	background-repeat: no-repeat;
	position: relative;
}
.schedule > p {
	vertical-align: top;
}
.schedule p.last span {
	left: auto;
	right: 0;
}
@media only screen and (min-width: 926px) {
	.schedule p:hover {
		background-image: url(https://villagezendo.org/images/scheduleClockHover.png);
		background-color: #ee2d3f;
		color: #fff;
	}
}
.schedule p em, .schedule p strong {
	display: block;
}
.schedule p img {
	position: absolute;
    top: 10px;
    right: 10px;
    width: 23px;
	display: none;
}
.schedule p img.arrow {
	display: none;
    top: 244px;
    width: 50px;
    margin-left: -25px;
    left: 50%;
}
.schedule em, .schedule strong {
	font-size: 15px;
}
.schedule span {
	display: none;
    position: absolute;
    padding: 20px;
    left: 0;
    top: 273px;
    text-align: left;
    z-index: 10;
    background: #fff;
    color: #000 !important;
    width: 660px;
    border-radius: 5px;
    box-shadow: 0px 0px 11px rgba(0,0,0,0.4);
}
.schedule span em {
	margin: 5px 0;
}
.bigButton {
	text-decoration: none;
    background: #ee2d3f;
    border-radius: 5px;
    font-size: 20px;
	margin: 20px 0 25px;
}
.center {
	text-align: center;
}
.post-grid .item {
	width: 30% !important;
}
</style>

<header class="masthead">
	<h1>Village Zendo Zen Center</h1>
    <p>The Village Zendo is a Zen community in the heart of downtown New York City. Serving as a sanctuary in busy Manhattan, we offer daily meditation, dharma talks, Buddhist services, retreats, workshops and study groups. Participation is open to all.</p>
    <div>
    	<a href="/about-us/" title="About Us">About Us</a>
        <a href="/teachers/" title="Teachers">Teachers</a>
        <a href="/calendar/" title="Calendar">Calendar</a>
    </div>
</header>

<div class="schedule">
	<h2>Weekly Meditation Schedule</h2>
    <hr>
    	<p>
        	Meditation Instruction
            <em>Every Monday</em>
            <strong>6:30pm - 8:30pm</strong>
            <img src="http://villagezendo.org/images/infoIcon.png" alt="Info icon">
            <img src="http://villagezendo.org/images/arrow.png" alt="Arrow icon" class="arrow">
            <span>
            	<strong>Meditation Instruction</strong>
                <em>For those new to Zen meditation or who have not practiced meditation in a zendo before.</em>
                <em>Instruction begins promptly at 6:30 (arrive at least a few minutes early). Recommendations for a comfortable, stable sitting posture are given, as well as guidance on how to begin a meditation practice and do walking meditation. There will be ample opportunity for Q & A.</em>
                <em>6:30&mdash;7:05 Meditation Instruction<br>
                7:05&mdash;7:15 Kinhin (walking meditation)<br>
                7:15&mdash;7:45 Zazen<br>
                7:45&mdash;7:55 Kinhin<br>
                7:55&mdash;8:20 Zazen<br>
                8:20&mdash;Four Vows</em>
            </span>
        </p>
        <p>
        	Mornings &amp; Midday
            <em>Monday through Friday</em>
            <strong>
            	7:30am - 8:30am<br>
            	12:30pm - 1:30pm
			</strong>
            <img src="http://villagezendo.org/images/infoIcon.png" alt="Info icon">
            <img src="http://villagezendo.org/images/arrow.png" alt="Arrow icon" class="arrow">
            <span>
            	<strong>Weekday Morning &amp; Midday Schedule</strong>
                <em>Open to all practioners, join us for zazen (meditation) in a spacious and welcoming environment. Dokusan (interview with a teacher) is offered most mornings to Village Zendo members, and morning meditation is followed by a short zen liturgy service.</em>
                <em>Midday sitting is very informal and an opportunity for practioners to drop in during the middle of their day. Come and go at any time.</em>
            </span>
        </p>
        <p class="last">
        	Evenings
            <em>Monday through Thursday</em>
            <strong>6:30pm - 8:20pm</strong>
            <img src="http://villagezendo.org/images/infoIcon.png" alt="Info icon">
            <img src="http://villagezendo.org/images/arrow.png" alt="Arrow icon" class="arrow">
            <span>
            	<strong>Evening Schedule</strong>
                <em>Our evening meditation schedule is open to all practitioners, with dokusan (interview with a teacher) offered most evenings to Village Zendo members. Drop in any time between zazen periods.</em>
                <em>Each period of sitting is followed by kinhin (walking meditation), and the evening is concluded with the chanting of the Four Vows.</em>
                <em>6:30&mdash;7:05 Zazen<br>
                7:05&mdash;7:15 Kinhin (walking meditation)<br>
                7:15&mdash;7:45 Zazen<br>
                7:45&mdash;7:55 Zinhin<br>
                7:55&mdash;8:20 Zazen<br>
				8:20&mdash;Four Vows</em>
            </span>
        </p>
</div>
<div class="schedule">
	<h2>Dharma Talks &amp; Liturgy Services</h2>
    <hr>
    <p>
    	Zen Liturgy Service
        <em>1st &amp; 3rd Tuesday of every month</em>
        <strong>5:00 - 7:20</strong>
        <img src="http://villagezendo.org/images/infoIcon.png" alt="Info icon">
        <img src="http://villagezendo.org/images/arrow.png" alt="Arrow icon" class="arrow">
        <span>
        	<strong>Zen Liturgy Service</strong>
            <em>Our Zen liturgy service is an opportunity to engage in the ancient traditions and forms passed down within our lineage. These forms include chanting and bowing, and they are methods to help support ourselves and each other in seeing our lives as they are moment to moment, and to continually remind us of our conviction to stay awake.</em>
            <em>Service is open to all, and if you’ve never attended, we encourage you to engage in them with an open mind—without the worry that you’re doing anything right or wrong.</em>
            <em>5:00&mdash;Service<br>
            5:30&mdash;6:00 Zazen<br>
            6:00&mdash;6:05 Slow kinhin<br>
            6:05&mdash;6:35 Zazen<br>
            6:35&mdash;6:40 Slow kinhin<br>
            6:40&mdash;7:10 Zazen<br>
            7:10&mdash;7:20 Four vows and evening gatha</em>
        </span>
    </p>
    <p>
    	Dharma Talk or Fusatsu
        <em>Thursday Evenings</em>
        <strong>5:30 - 7:10</strong>
        <img src="http://villagezendo.org/images/infoIcon.png" alt="Info icon">
        <img src="http://villagezendo.org/images/arrow.png" alt="Arrow icon" class="arrow">
        <span>
        	<strong>Thursday Evening Schedule</strong>
            <em>Every Thursday we offer a meditation schedule, followed by a dharma talk or Fusatsu (see calendar for details).</em>
            <em>This evening is open to all practitioners, and dokusan (interview with a teacher) is offered most evenings to Village Zendo members. Drop in any time between zazen (meditation) periods.</em>
            <em>5:30&mdash;6:00 Zazen<br>
            6:00&mdash;6:05 Slow kinhin<br>
            6:05&mdash;6:30 Zazen<br>
            6:30&mdash;6:35 Slow kinhin<br>
            6:35&mdash;7:05 Dharma talk or Fusatsu<br>
            7:05&mdash;7:10 Four Vows</em>
        </span>
    </p>
    <p class="last">
    	Dharma Talk or Council
        <em>Every Sunday Morning</em>
        <strong>9:30 - 12:30</strong>
        <img src="http://villagezendo.org/images/infoIcon.png" alt="Info icon">
        <img src="http://villagezendo.org/images/arrow.png" alt="Arrow icon" class="arrow">
        <span>
        	<strong>Sunday Morning Schedule</strong>
            <em>Our Sunday morning program includes a Zen liturgy service, followed by zazen, kinhin and a dharma talk. On first Sunday of the month, we hold Council (the practice of speaking and listening from the heart). Dokusan (interview with a teacher) is available to Village Zendo members.</em>
            <em>See our calendar for our full schedule and details.</em>
        </span> 
    </p>
</div>

<p class="center">
    <a class="bigButton button" href="http://villagezendo.org/calendar/">View our full calendar of events &amp; workshops</a>
</p>

<div class="schedule">
	<h2>Upcoming Events</h2>
    <hr>
</div>

<!-- Scripts by Kojin -->
<!--<script type='text/javascript' src='https://staging.villagezendo.org/wp-content/themes/village-zendo/scriptsKojin.js'></script>-->

<script>
jQuery(function($) {
	
	
$('.sidebar-secondary').insertBefore('.site-container');

$('.schedule p').hover(function() {
	if (window.innerWidth >= 926) {
		$(this).children('img, span').css('display','block');
	}
}, function() {
	$(this).children('img, span').css('display','none');
});


});
</script>