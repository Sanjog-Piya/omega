@extends('frontend.layouts.app')

<style>

 :root{
    --ink:#14171f; --navy:#1e2a44; --navy-deep:#12151c;
    --paper:#efe9dc; --paper-2:#e6ddc9;
    --brass:#9c7a3c; --brass-light:#c7a463; --brick:#8c3d2e;
    --slate:#5b6472; --line: rgba(20,23,31,0.14); --max: 1160px;
  }

    /* feature-item-6 */
.ltn__feature-item-6 {
    border: 1px solid var(--border-color-8);
    margin-bottom: 30px;
    padding: 40px 30px 35px;
    position: relative;
        border-top: solid 4px #182140;
    border-radius: 8px;
}

.ltn__feature-item-6::before {
    position: absolute;
    content: "";
    left: 0;
    bottom: 0;
    width: 0%;
    height: 4px;
    background-color: #182140;
    transition: all 0.5s ease 0s;
    opacity: 0;
    visibility: hidden;
}

.ltn__feature-item-6 .ltn__feature-icon {
    color: var(--ltn__secondary-color);
        font-size: 20px;
}

.ltn__feature-item-6 .ltn__feature-icon i {
    transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    font-size: 40px;
    color: #182140;
}

.ltn__feature-item-6 .ltn__feature-info p {
    font-size: 14px;
    margin-bottom: 0;
}

.ltn__feature-item-6 h4{
    margin: 20px 0;
    font-weight: 600;
    font-size: 18px;
    white-space: nowrap;
}

.ltn__feature-item-6 .ltn__feature-info p + p {
    margin-top: 15px;
}

/************************************/
/*** 	 18. Services Page css	  ***/
/************************************/



.page-services .service-item{

	    height: calc(100% - 30px);
    margin-bottom: 30px;
    background: white;
    box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    padding: 20px;
    border-radius: 10px;
}

.page-services .service-item-header .icon-box::before{
	background-color: var(--primary-color);
} 

.service-item-header {
    display: flex;
    align-items: center;
    gap: 15px;
    flex-direction: column;
}

.dark-section {
    background-color: #000;
    background-image: url(https://html.awaikenthemes.com/finsta/images/dark-section-bg-image.png);
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;
}


.page-services .service-item-title h2{
	    color: #182140;
    font-size: 17px;
}

.page-services .service-item:hover .service-item-header .icon-box img{
	filter: none;
}
.service-item-header .icon-box {
    position: relative;
    width: 50px;
    height: 50px;
    background: var(--main-color-one);
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}
.page-services .service-item-content{
	border-color: var(--divider-color);
}

.page-services .service-item-content p{
	color: var(--text-color);
}

/************************************/
/*** 	19. Service Single css	  ***/
/************************************/


.ltn__feature-item-6 .ltn__feature-info .ltn__service-btn {
    transition: all 0.3s ease 0s;
    color: var(--ltn__color-1);
    font-weight: 700;
    font-size: 14px;
    display: flex;
    justify-content: center;
    margin-top: 25px;
}

.ltn__feature-item-6 .ltn__feature-info .ltn__service-btn i {
    display: flex;
    align-items: center;
}

.ltn__feature-item-6.active,
.ltn__feature-item-6:hover {
    box-shadow: 0 16px 32px 0 rgba(7, 28, 31, 0.1);;
}

.ltn__feature-item-6.active::before,
.ltn__feature-item-6:hover::before {
    width: 100%;
    opacity: 1;
    visibility: visible;
}

.ltn__feature-item-6.active .ltn__feature-info .ltn__service-btn,
.ltn__feature-item-6.active .ltn__feature-icon,
.ltn__feature-item-6:hover .ltn__feature-info .ltn__service-btn,
.ltn__feature-item-6:hover .ltn__feature-icon {
    color: #182140;
}

/************************************/
/***       05. About Us css       ***/
/************************************/
/************************************/
/***     10. Our Expertise css    ***/
/************************************/

.our-expertise{
	padding: 120px 0 100px;
		margin-bottom: 40px;

} 
 
.our-expertise-tab-box{
	margin-bottom: -210px;
}

.our-expertise-nav{
	margin-bottom: 60px;
}

.our-expertise-nav .nav-tabs{
	display: flex;
	justify-content: center;
	gap: 20px;
	padding: 0;
	margin: 0;
	list-style: none;
	border: none;
}

.our-expertise-nav ul li .nav-link{
	position: relative;
	width: 100%;
	display: flex;
    align-items: center;
	gap: 10px;
	border: none;
	font-family: var(--accent-font);
	font-size: 20px;
	font-weight: 500;
	color: var(--white-color);
	background: var(--dark-divider-color);
	backdrop-filter: blur(20px);
	-webkit-backdrop-filter: 20px;
	border-radius: 10px;
	padding: 16px 20px;
	overflow: hidden;
	transition: all 0.4s ease-in-out;
}

.our-expertise-nav ul li .nav-link.active,
.our-expertise-nav ul li .nav-link:hover{
	color: var(--white-color);
	background: var(--accent-color);
}

.our-expertise-nav ul li .nav-link .icon-box img{
	width: 100%;
	max-width: 24px;
	transition: all 0.3s ease-in-out;
}

.our-expertise-box{
	background-color: var(--secondary-color);
    border-radius: 20px;
    padding: 10px;
}

.our-expertise-item{
	display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.expertise-item-image{
	width: calc(41% - 5px);
}

.expertise-item-image figure{
	display: block;
    height: 100%;
    border-radius: 20px;
}

.expertise-item-image figure img{
	width: 100%;
    height: 100%;
    aspect-ratio: 1 / 0.868;
    object-fit: cover;
    border-radius: 12px;
}

.expertise-item-content{
	width: calc(59% - 5px);
	align-content: center;
	padding: 50px;
}

.expertise-item-content h3{
	font-size: 30px;
}

.expertise-item-content p{
	margin: 10px 0 0;
}

.expertise-item-content ul{
	list-style: none;
	border-top: 1px solid var(--divider-color);
	padding: 30px 0 0;
	margin: 30px 0 0;
}

.client-area .item{
        background-color: #fff;
    background-clip: border-box;
    border: 1px solid #eeeeee;
    border-radius: 5px;
    padding:20px;
}

.client-area{
        background: #f1f6fc;
}

.expertise-item-content ul li{
    position: relative;
    line-height: 1.5em;
    padding-left: 25px;
    margin-bottom: 15px;
}

.expertise-item-content ul li:last-child{
	margin-bottom: 0;
}

.expertise-item-content ul li::before{
	content: '\f058';
    position: absolute;
    font-family: 'Font Awesome 5 Free';
    font-size: 18px;
    font-weight: 900;
    color: var(--accent-color);
    top: 0;
    left: 0;
}



.about-us-image.box-2 {
    position: absolute;
    top: 0;
    right: 0;
    max-width: 320px;
    background-color: var(--bg-color);
    border: 20px solid var(--bg-color);
    border-top: none;
    border-right: none;
    border-radius: 0 0 0 20px;
    z-index: 1;
}

.about-us-body{
	display: flex;
    flex-wrap: wrap;
    gap: 10px;
    background-color: var(--secondary-color);
    border-radius: 20px;
    padding: 10px;
}

.about-us-body-image{
	width: calc(41% - 5px);
}

.about-us-body-image figure{
	height: 100%;
    display: block;
    border-radius: 20px;
}

.about-us-body-image figure img{
	width: 100%;
    height: 100%;
    aspect-ratio: 1 / 0.706;
    object-fit: cover;
    border-radius: 20px;
}

.about-body-item{
	width: calc(59% - 5px);
	align-content: center;
	padding: 20px;
}

.about-body-item-header{
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	gap: 15px;
	border-bottom: 1px solid var(--divider-color);
	padding-bottom: 20px;
	margin-bottom: 20px;
}

.about-body-item-header .icon-box{
	position: relative;
    width: 50px;
    height: 50px;
    background-color: var(--main-color-one);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.about-body-item-header .icon-box::before{
	content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    background: var(--main-color-one);
    border-radius: 50%;
    width: 100%;
    height: 100%;
    transform: scale(0);
    transition: all 0.4s ease-in-out;
    z-index: 0;
}

.about-body-item:hover .about-body-item-header .icon-box::before{
	transform: scale(1);
}

.about-body-item-header  .icon-box img{
	position: relative;
	width: 100%;
	max-width: 24px;
	z-index: 1;
}

.about-body-item-title{
	width: calc(100% - 65px);
}

.about-body-item-title h3{
	font-size: 26px;
}

.about-body-item-content p{
	margin: 0;
}

.about-us-footer{
	display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 25px;
	border-top: 1px solid var(--divider-color);
    margin-top: 40px;
}

.about-us-author-box{
	display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 15px;
}

.about-us-author-image figure{
	display: block;
    border-radius: 50%;
}

.about-us-author-image figure img{
	width: 100%;
    max-width: 50px;
    height:50px;
	border-radius: 50%;
}

.about-us-author-content{
	width: calc(100% - 65px);
}

.about-us-author-content h3{
	font-size: 20px;
}

.about-us-author-content p{
	line-height: normal;
	margin: 5px 0 0;
}

.about-us-image-box{
	position: relative;
	margin-left: 15px;
	padding: 80px 100px 0 0;
}

.about-us-image figure{
	display: block;
	border-radius: 20px;
}

.about-us-image figure img{
	width: 100%;
	object-fit: cover;
	border-radius: 20px;
}

.about-us-image.box-1 figure img{
	aspect-ratio: 1 / 1.199;
}

.about-us-image.box-2{
	position: absolute;
	top: 0;
	right: 0;
	max-width: 320px;
	background-color: #fff;
	border: 20px solid #fff;
	border-top: none;
	border-right: none;
	border-radius: 0 0 0 20px;
	z-index: 1;
}

.about-us-image.box-2::after,
.about-us-image.box-2::before{
	content: '';
	position: absolute;
	width: 20px;
    height: 20px;
	mask: url('https://html.awaikenthemes.com/finsta/images/image-corner-bg-shape.svg');
	-webkit-mask: url('https://html.awaikenthemes.com/finsta/images/image-corner-bg-shape.svg');
	background-color: var(--bg-color);
	mask-repeat: no-repeat;
	mask-size: cover;
	z-index: 1;
}

.about-us-image.box-2::before{
	top: 80px;
    left: -40px;
}

.about-us-image.box-2::after{
	right: 100px;
    bottom: -40px;
}

.about-us-image.box-2 figure img{
	aspect-ratio: 1 / 0.956;
}

.about-us-counter-box{
	position: absolute;
	left: 0;
	bottom: 0;
	background-color: #fff;
	border: 20px solid #fff;
	border-left: none;
	border-bottom: none;
	border-radius: 0 20px 0 0;
	z-index: 1;
}

.about-us-counter-box::before,
.about-us-counter-box::after{
	content: '';
	position: absolute;
	width: 20px;
    height: 20px;
	transform: rotate(180deg);
	mask: url('https://html.awaikenthemes.com/finsta/images/image-corner-bg-shape.svg');
	-webkit-mask: url('https://html.awaikenthemes.com/finsta/images/image-corner-bg-shape.svg');
	background-color: var(--bg-color);
	mask-repeat: no-repeat;
	mask-size: cover;
	z-index: 1;
}

.about-us-counter-box::before{
	top: -40px;
    left: 0;
}

.about-us-counter-box::after{
	right: -40px;
    bottom: 0;
}

.about-us-counter-body{
	max-width: 180px;
	min-height: 195px;
	align-content: center;
	text-align: center;
	background-color: var(--main-color-one);
	border-radius: 20px;
	padding: 25px;
	color:white;
}

.about-us-counter-body h2{
	font-size: 48px;
	color: var(--white-color);
}

.about-us-counter-body p{
	font-family: var(--accent-font);
	font-weight: 500;
	line-height: 1.4em;
	color: var(--white-color);
	margin: 5px 0 0;
}

.about-us-image-box .contact-us-circle{
	position: absolute;
	bottom: 120px;
	right: 30px;
	z-index: 1;
}

.contact-us-circle a{
	display: inline-block;
	border: 6px solid var(--bg-color);
	border-radius: 50%;
}

.contact-us-circle a img{
	width: 100%;
	max-width: 130px;
	aspect-ratio: 1 / 1;
	border-radius: 50%;
	object-fit: cover;
	animation: infiniterotate 20s infinite linear;
}

.contact-us-circle a:hover img{
	animation-play-state: paused;
}

@keyframes infiniterotate{
	100%{
		transform: rotate(360deg);
    }
}

 .wrap{ max-width:var(--max); margin:0 auto; padding:0 32px; }
  .eyebrow{
    font-family:'IBM Plex Mono', monospace; font-size:12.5px; letter-spacing:0.14em;
    text-transform:uppercase; color:var(--brass); display:flex; align-items:center; gap:10px;
  }
  .eyebrow::before{ content:""; width:22px; height:1px; background:var(--brass); display:inline-block; }
  .eyebrow.on-dark{ color:var(--brass-light); }
  .eyebrow.on-dark::before{ background:var(--brass-light); }
 
  @media (prefers-reduced-motion: no-preference){
    .reveal{ opacity:0; transform:translateY(18px); transition:opacity .7s ease, transform .7s ease; }
    .reveal.in{ opacity:1; transform:translateY(0); }
  }
 
  section{ padding:100px 0; }
  .section-head{ max-width:640px; margin-bottom:48px; }
  .section-head.center{ margin-left:auto; margin-right:auto; text-align:center; }
  .section-head h2{ font-size:clamp(28px, 3.2vw, 38px); margin-top:16px; }
  .section-head p.lede{ margin-top:16px; color:var(--slate); font-size:16px; max-width:58ch; }
  .section-head.center p.lede{ margin-left:auto; margin-right:auto; }
  .section-head.on-dark p.lede{ color:rgba(239,233,220,0.68); }
  .section-head.on-dark h2{ color:var(--paper); }
 
  /* ================= SERVICES SNAPSHOT ================= */
  .snapshot{ background:var(--paper); border-bottom:1px solid var(--line); }
  .pillars{ display:grid; grid-template-columns:1fr 1.4fr; gap:28px; }
 
  .pillar-head{ display:flex; align-items:baseline; justify-content:space-between; margin-bottom:18px; }
  .pillar-head h3{ font-size:14px; font-family:'IBM Plex Mono', monospace; letter-spacing:0.1em; text-transform:uppercase; color:var(--ink); font-weight:500; }
  .pillar-head span{ font-family:'IBM Plex Mono', monospace; font-size:11.5px; color:var(--slate); }
 
  .pillar-re{ display:flex; flex-direction:column; gap:20px; }
  .tile{
    border:1px solid var(--line); background:var(--paper-2); padding:28px 26px;
    position:relative; overflow:hidden; transition:border-color .2s ease;
  }
  .tile:hover{ border-color:var(--brass); }
  .pillar-re .tile{ flex:1; display:flex; flex-direction:column; justify-content:center; min-height:150px; }
  .tile .tag{ font-family:'IBM Plex Mono', monospace; font-size:11px; letter-spacing:0.08em; text-transform:uppercase; color:var(--brass); }
  .tile h4{ font-family:'Fraunces', serif; font-size:19px; font-weight:500; margin:10px 0 8px; line-height:1.3; color:var(--ink); }
  .tile p{ font-size:13.5px; color:var(--slate); margin:0; line-height:1.5; }
 
  .pillar-pc{ display:grid; grid-template-columns:1fr 1fr; grid-template-rows:1fr 1fr; gap:14px; }
  .pillar-pc .tile{ padding:22px 22px; min-height:135px; }
  .pillar-pc .tile h4{ font-size:16.5px; }
  .pillar-pc .tile p{ font-size:12.5px; }
 
  /* ================= ONE-STOP MODEL ================= */
  .model{ background:var(--navy-deep); color:var(--paper); position:relative; overflow:hidden; }
  .model::before{
    content:""; position:absolute; inset:0;
    background: radial-gradient(900px 500px at 15% 0%, rgba(156,122,60,0.14), transparent 55%),
      radial-gradient(700px 420px at 90% 100%, rgba(156,122,60,0.1), transparent 55%);
    z-index:0;
  }
  .model .wrap{ position:relative; z-index:2; }
 
  /* ---- horizontal zigzag timeline (desktop) ---- */
  .timeline-h{ position:relative; height:460px; margin-top:10px; }
  .tl-track{ position:absolute; top:209px; left:1%; right:1%; height:2px;
    background:linear-gradient(90deg, rgba(199,164,99,0.2), var(--brass-light) 88%, var(--brass-light) 100%); }
  .tl-arrow{ position:absolute; top:203px; right:1%; width:0; height:0;
    border-top:6px solid transparent; border-bottom:6px solid transparent; border-left:10px solid var(--brass-light); }
 
  .tl-stop{ position:absolute; top:0; height:100%; width:180px; margin-left:-90px; }
  .tl-stop .tl-node{
    position:absolute; left:50%; top:178px; width:64px; height:64px; margin-left:-32px;
    border-radius:50%; background:var(--navy-deep); border:2px solid var(--brass-light);
    display:flex; align-items:center; justify-content:center;
    font-family:'Fraunces', serif; font-size:19px; color:var(--brass-light); z-index:2;
  }
  .tl-stop .tl-connector{ position:absolute; left:50%; width:2px; margin-left:-1px; background:rgba(199,164,99,0.55); }
  .tl-stop.top .tl-connector{ top:132px; height:46px; }
  .tl-stop.bottom .tl-connector{ top:242px; height:46px; }
  .tl-stop .tl-label{ position:absolute; left:0; width:180px; text-align:center; }
  .tl-stop.top .tl-label{ bottom:330px; }
  .tl-stop.bottom .tl-label{ top:288px; }
  .tl-label .tl-eyebrow{
    font-family:'IBM Plex Mono', monospace; font-size:10.5px; letter-spacing:0.08em; text-transform:uppercase;
    color:var(--brass-light); opacity:0.8; margin-bottom:6px; display:block;
  }
  .tl-label h3{ font-size:15.5px; color:var(--paper); margin:0 0 8px; line-height:1.3; }
  .tl-label p{ font-size:12.5px; color:rgba(239,233,220,0.62); margin:0; line-height:1.5; }
 
  /* ---- vertical fallback (mobile) ---- */
  .timeline-v{ display:none; flex-direction:column; }
  .tv-stop{ display:flex; gap:20px; position:relative; padding-bottom:36px; }
  .tv-stop:last-child{ padding-bottom:0; }
  .tv-stop::before{
    content:""; position:absolute; left:26px; top:56px; bottom:0; width:2px;
    background:rgba(199,164,99,0.35);
  }
  .tv-stop:last-child::before{ display:none; }
  .tv-node{
    flex-shrink:0; width:52px; height:52px; border-radius:50%;
    background:var(--navy-deep); border:2px solid var(--brass-light);
    display:flex; align-items:center; justify-content:center;
    font-family:'Fraunces', serif; font-size:16px; color:var(--brass-light); z-index:1;
  }
  .tv-body h3{ font-size:16px; color:var(--paper); margin:2px 0 6px; }
  .tv-body p{ font-size:13px; color:rgba(239,233,220,0.62); margin:0; }
 
  .model-close{
    margin-top:52px; padding-top:34px; border-top:1px solid rgba(239,233,220,0.14);
    display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:20px;
  }
  .model-close p{ font-family:'Fraunces', serif; font-size:20px; font-style:italic; color:var(--brass-light); margin:0; max-width:44ch; }
  .btn{
    font-family:'IBM Plex Mono', monospace; font-size:12.5px; letter-spacing:0.06em; text-transform:uppercase;
    padding:14px 22px; text-decoration:none; display:inline-block; white-space:nowrap;
    border:1px solid var(--brass-light); background:var(--brass-light); color:var(--navy-deep);
    transition:background .2s ease, color .2s ease;
  }
  .btn:hover{ background:transparent; color:var(--paper); }
 
  /* ================= RESPONSIVE ================= */
  @media (max-width:980px){
    .pillars{ grid-template-columns:1fr; }
    .timeline-h{ display:none; }
    .timeline-v{ display:flex; }
  }
  @media (max-width:600px){
    .wrap{ padding:0 20px; }
    section{ padding:72px 0; }
    .pillar-pc{ grid-template-columns:1fr; grid-template-rows:none; }
    .model-close{ flex-direction:column; align-items:flex-start; }
  }
  
  .cta-strip{
    background:var(--navy-deep); color:var(--paper);
    position:relative; overflow:hidden; padding:88px 0;
  }
  .cta-strip::before{
    content:""; position:absolute; inset:0;
    background:
      radial-gradient(760px 420px at 50% -10%, rgba(199,164,99,0.14), transparent 60%);
    z-index:0;
  }
  .cta-logo{
    position:absolute; top:50%; right:4%; width:280px; height:280px;
    transform:translateY(-50%); opacity:0.5; mix-blend-mode:screen; z-index:0; pointer-events:none;
  }
 
  .cta-inner{ position:relative; z-index:2; max-width:680px; }
  .cta-strip h2{
    font-size:clamp(28px, 3.6vw, 42px); line-height:1.2; color:var(--paper);
  }
  .cta-strip .sub{
    margin-top:20px; font-size:16.5px; color:rgba(239,233,220,0.72); max-width:56ch; line-height:1.65;
  }
  .cta-actions{ margin-top:36px; display:flex; align-items:center; gap:22px; flex-wrap:wrap; }
  .btn{
    font-family:'IBM Plex Mono', monospace; font-size:13px; letter-spacing:0.06em; text-transform:uppercase;
    padding:16px 30px; text-decoration:none; display:inline-block;
    border:1px solid var(--brass-light); background:var(--brass-light); color:var(--navy-deep);
    transition:background .2s ease, color .2s ease, border-color .2s ease;
  }
  .btn:hover{ background:transparent; color:var(--paper); }
  .cta-note{
    font-family:'IBM Plex Mono', monospace; font-size:12px; letter-spacing:0.04em;
    color:rgba(239,233,220,0.5);
  }
 
  @media (max-width:600px){
    .cta-strip{ padding:64px 0; }
    .cta-logo{ display:none; }
  }
  
  /* ================= INSIGHTS / BLOG ================= */
  .insights{ background:var(--paper); }
  .post-grid{ display:grid; grid-template-columns:1.3fr 1fr; gap:28px; }
 
  .post-thumb{
    position:relative; width:100%; aspect-ratio:16/10; overflow:hidden;
    background:linear-gradient(135deg, var(--navy) 0%, var(--navy-deep) 100%);
  }
  .post-thumb svg{ position:absolute; inset:0; width:100%; height:100%; opacity:0.5; }
  .post-thumb .cat-badge{
    position:absolute; top:16px; left:16px;
    font-family:'IBM Plex Mono', monospace; font-size:10.5px; letter-spacing:0.08em; text-transform:uppercase;
    color:var(--navy-deep); background:var(--brass-light); padding:6px 12px;
  }
 
  .post-card{ display:flex; flex-direction:column; }
  .post-featured .post-thumb{ margin-bottom:24px; }
  .post-featured h3{ font-size:26px; line-height:1.3; margin-bottom:12px; }
  .post-featured p.excerpt{ font-size:15px; color:var(--slate); margin:0 0 18px; max-width:56ch; }
 
  .post-meta{
    font-family:'IBM Plex Mono', monospace; font-size:11.5px; letter-spacing:0.04em;
    color:var(--slate); display:flex; gap:14px; align-items:center;
  }
  .post-meta .dot{ width:3px; height:3px; border-radius:50%; background:var(--slate); display:inline-block; }
 
  .post-list{ display:flex; flex-direction:column; }
  .post-row{
    display:flex; gap:20px; padding:22px 0; border-top:1px solid var(--line);
  }
  .post-row:first-child{ border-top:none; padding-top:0; }
  .post-row .post-thumb{ width:120px; height:88px; aspect-ratio:auto; flex-shrink:0; }
  .post-row-body{ display:flex; flex-direction:column; justify-content:center; }
  .post-row-body .cat{
    font-family:'IBM Plex Mono', monospace; font-size:10.5px; letter-spacing:0.08em; text-transform:uppercase;
    color:var(--brass); margin-bottom:6px;
  }
  .post-row-body h3{ font-size:16.5px; line-height:1.35; margin-bottom:8px; }
  .post-row-body .post-meta{ font-size:11px; }
 
  .read-link{
    display:inline-flex; align-items:center; gap:6px; margin-top:14px;
    font-family:'IBM Plex Mono', monospace; font-size:12px; letter-spacing:0.05em; text-transform:uppercase;
    color:var(--brass);
  }
  .read-link svg{ width:12px; height:12px; transition:transform .15s ease; }
  .post-featured:hover .read-link svg{ transform:translateX(3px); }
 
  /* ================= RESPONSIVE ================= */
  @media (max-width:900px){
    .post-grid{ grid-template-columns:1fr; }
  }
  @media (max-width:560px){
    .wrap{ padding:0 20px; }
    section{ padding:72px 0; }
    .post-row{ flex-direction:column; }
    .post-row .post-thumb{ width:100%; height:auto; aspect-ratio:16/10; }
  }
</style>

</style>

@section('content')

  <!-- banner area start -->
    <div class="banner-area jarallax" style="    background-image: url(https://omegaadvisors.com.np/public/assets/images/banners.png);
    background-size: cover;">
        <div class="container">
            <div class="banner-inner-wrap">
                <div class="row">
                    <div class="col-12">
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->
    
    <!-- main search area end -->
    <div class="main-search-area">
        <div class="container">
            <div class="banner-search-wrap">
                <ul class="nav nav-tabs rld-banner-tab">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tabs_1">For Buy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tabs_2">For Rent</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs_1">
                        <div class="rld-main-search">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="rld-single-input left-icon">
                                        <input type="text" placeholder="Entry Landmark Location">
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6 col-md-6">
                                    <div class="rld-single-select">
                                        <select class="select single-select">
                                          <option value="1">All Properties</option>
                                          <option value="2">Properties 1</option>
                                          <option value="3">Properties 2</option>
                                          <option value="3">Properties 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4">
                                    <div class="rld-single-select">
                                        <select class="select single-select">
                                          <option value="1">Room</option>
                                          <option value="2">Room 1</option>
                                          <option value="3">Room 2</option>
                                          <option value="3">Room 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4">
                                    <div class="rld-single-select">
                                        <select class="select single-select">
                                          <option value="1">Any Price</option>
                                          <option value="2">Price 1</option>
                                          <option value="3">Price 2</option>
                                          <option value="3">Price 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4">
                                    <a class="btn btn-yellow" href="https://omegaadvisors.com.np/search">SEARCH NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs_2">
                        <div class="rld-main-search">
                            <div class="row">
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="rld-single-input left-icon">
                                        <input type="text" placeholder="Entry Landmark Location">
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-6 col-md-6">
                                    <div class="rld-single-select">
                                        <select class="select single-select">
                                          <option value="1">All Properties</option>
                                          <option value="2">Properties 1</option>
                                          <option value="3">Properties 2</option>
                                          <option value="3">Properties 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4">
                                    <div class="rld-single-select">
                                        <select class="select single-select">
                                          <option value="1">Room</option>
                                          <option value="2">Room 1</option>
                                          <option value="3">Room 2</option>
                                          <option value="3">Room 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4">
                                    <div class="rld-single-select">
                                        <select class="select single-select">
                                          <option value="1">Any Price</option>
                                          <option value="2">Price 1</option>
                                          <option value="3">Price 2</option>
                                          <option value="3">Price 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-lg-4 col-md-4">
                                    <a class="btn btn-yellow" href="#">SEARCH NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main search area end -->
    
<div class="ltn__feature-area pt-90 pb-90 mt-5">
    <div class="container">

        <div class="row ltn__custom-gutter">

            <!-- End-to-End Delivery -->
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6">
                    <div class="ltn__feature-icon">
                        <span><i class="fas fa-project-diagram"></i></span>
                    </div>
                    <div class="ltn__feature-info">
                        <h4><a href="#">End-to-End Delivery</a></h4>
                        <p>One team from land acquisition through financing, execution, handover, and property listing.</p>
                    </div>
                </div>
            </div>

            <!-- Financing & Syndication -->
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6">
                    <div class="ltn__feature-icon">
                        <span><i class="fas fa-hand-holding-usd"></i></span>
                    </div>
                    <div class="ltn__feature-info">
                        <h4><a href="#">Financing &amp; Syndication</a></h4>
                        <p>Project financing structured and loans syndicated across our trusted banking and cooperative network.</p>
                    </div>
                </div>
            </div>

            <!-- Risk & Feasibility -->
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6">
                    <div class="ltn__feature-icon">
                        <span><i class="fas fa-chart-line"></i></span>
                    </div>
                    <div class="ltn__feature-info">
                        <h4><a href="#">Risk &amp; Feasibility</a></h4>
                        <p>Independent feasibility studies and comprehensive project risk assessments before capital is committed.</p>
                    </div>
                </div>
            </div>

            <!-- Licensed Brokerage -->
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="ltn__feature-item ltn__feature-item-6">
                    <div class="ltn__feature-icon">
                        <span><i class="fas fa-building"></i></span>
                    </div>
                    <div class="ltn__feature-info">
                        <h4><a href="#">Licensed Brokerage</a></h4>
                        <p>Government-licensed real estate transactions across all Metropolitan and Sub-Metropolitan cities in Nepal.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>    
<div class="about-us mt-5 pb-90">
    <div class="container">
        <div class="row">

<div class="col-xl-6">
    <div class="about-us-content">

        <div class="section-title">
            <span class="section-sub-title">Why Choose Omega Capital</span>

            <h2>
                From Property to Capital — One Trusted Partner
            </h2>

            <p>
                Property and capital are two halves of the same journey — yet in Nepal they are almost always handled by different, disconnected parties. Omega Capital Advisors closes that gap. We advise on and transact the land, structure and syndicate the financing, assess project risks, support construction and handover, and guide businesses toward public listing when the time is right.
            </p>

            <p>
                For developers, promoters, and investors, this means fewer intermediaries, a single accountable partner, and a clearer path from a plot of land to a successful enterprise. Our licensed brokerage provides deep, verified visibility into Nepal's property market, while our capital advisory practice transforms that insight into fundable, executable, and scalable projects.
            </p>

        </div>

        <div class="about-us-body">

            <div class="about-us-body-image">
                <figure class="image-anime">
                    <img src="https://omegaadvisors.com.np/public/assets/images/home-desktop-cover.png" alt="Omega Capital Advisors">
                </figure>
            </div>

            <div class="about-body-item">
                <div class="about-body-item-header">
                    <div class="icon-box">
                        <i class="fas fa-chart-line"></i>
                    </div>

                    <div class="about-body-item-title">
                        <h3>Integrated Advisory</h3>
                    </div>
                </div>

                <div class="about-body-item-content">
                    <p>
                        From land acquisition and financing to project execution, handover, and capital markets advisory, we deliver end-to-end real estate and investment solutions under one roof.
                    </p>
                </div>
            </div>

        </div>

        <div class="about-us-footer">

            <div class="about-us-btn">
                <a class="btn btn-yellow" href="{{ route('aboutus') }}">
                    Learn More
                </a>
            </div>

            <div class="about-us-author-box">

                <div class="about-us-author-image">
                    <figure class="image-anime">
                        <img src="https://omegaadvisors.com.np/public/assets/images/home-desktop-cover.png" alt="Omega Capital Advisors">
                    </figure>
                </div>

                <div class="about-us-author-content">
                    <h3>Omega Capital Advisors</h3>
                    <p>Integrated Real Estate & Capital Advisory</p>
                </div>

            </div>

        </div>

    </div>
</div>
            <div class="col-xl-6">

                <div class="about-us-image-box">

                    <div class="about-us-image box-1">
                        <figure class="image-anime">
                            <img src="https://omegaadvisors.com.np/public/assets/images/home-desktop-cover.png" alt="DOLMA Real Estate">
                        </figure>
                    </div>

                    <div class="about-us-image box-2">
                        <figure class="image-anime">
                            <img src="https://omegaadvisors.com.np/public/assets/images/home-desktop-cover.png" alt="Property Listings">
                        </figure>
                    </div>

                    <div class="about-us-counter-box">
                        <div class="about-us-counter-body">
                            <h2><span class="counter">1000</span>+</h2>
                            <p>Verified Property Listings</p>
                        </div>
                    </div>

                    <div class="contact-us-circle">
                        <a href="">
                            <img src="images/contact-us-circle.svg" alt="Contact DOLMA">
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<!--<div class="page-services mt-5" style="    background-image: url(https://templates.g5plus.net/homeid/images/BG7.png), url(https://templates.g5plus.net/homeid/images/BG7.png);-->
<!--    background-position: left, right bottom;-->
<!--    background-repeat: no-repeat, no-repeat;-->
<!--    background-size: auto, auto;-->
<!--    padding-top: 3.75rem !important;">-->
<!--    <div class="container">-->
        
<!--        <div class="section-title text-center">-->
<!--                <h2 class="title">See What We <br> Offer</h2>-->
<!--            </div>-->
        
<!--        <div class="row">-->

<!--            <div class="col-xl-3 col-md-6">-->
<!--                <div class="service-item">-->
<!--                    <div class="service-item-header-box">-->
<!--                        <div class="service-item-header">-->
<!--                            <div class="">-->
<!--                                <img style="    width: 70px;"  src="https://cdn-icons-png.flaticon.com/128/11990/11990397.png" alt="Property Buying">-->
<!--                            </div>-->
<!--                            <div class="service-item-title">-->
<!--                                <h2><a href="#">Property Buying</a></h2>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="service-item-content">-->
<!--                            <p>Find verified properties across Nepal. Our advisors guide you through every step, from property search to legal registration.</p>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <div class="service-item-image d-none">-->
<!--                        <figure class="image-anime">-->
<!--                            <img src="images/service-buying.jpg" alt="Property Buying">-->
<!--                        </figure>-->

<!--                        <div class="service-item-btn">-->
<!--                            <a href="#"><img src="images/arrow-white.svg" alt=""></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="col-xl-3 col-md-6">-->
<!--                <div class="service-item">-->
<!--                    <div class="service-item-header-box">-->
<!--                        <div class="service-item-header">-->
<!--                            <div class="">-->
<!--                                <img style="    width: 70px;"  src="https://cdn-icons-png.flaticon.com/128/11608/11608287.png" alt="Property Selling">-->
<!--                            </div>-->
<!--                            <div class="service-item-title">-->
<!--                                <h2><a href="#">Property Selling</a></h2>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="service-item-content">-->
<!--                            <p>Reach qualified buyers faster with professional valuation, targeted marketing, KYC verification, and seamless closing support.</p>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <div class="service-item-image d-none">-->
<!--                        <figure class="image-anime">-->
<!--                            <img src="images/service-selling.jpg" alt="Property Selling">-->
<!--                        </figure>-->

<!--                        <div class="service-item-btn">-->
<!--                            <a href="#"><img src="images/arrow-white.svg" alt=""></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="col-xl-3 col-md-6">-->
<!--                <div class="service-item">-->
<!--                    <div class="service-item-header-box">-->
<!--                        <div class="service-item-header">-->
<!--                            <div class="">-->
<!--                                <img style="    width: 70px;"  src="https://cdn-icons-png.flaticon.com/128/14597/14597492.png" alt="Investment Advisory">-->
<!--                            </div>-->
<!--                            <div class="service-item-title">-->
<!--                                <h2><a href="#">Investment Advisory</a></h2>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="service-item-content">-->
<!--                            <p>Identify high-yield residential and commercial investment opportunities backed by market insights and data-driven analysis.</p>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <div class="service-item-image d-none">-->
<!--                        <figure class="image-anime">-->
<!--                            <img src="images/service-investment.jpg" alt="Investment Advisory">-->
<!--                        </figure>-->

<!--                        <div class="service-item-btn">-->
<!--                            <a href="#"><img src="images/arrow-white.svg" alt=""></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="col-xl-3 col-md-6">-->
<!--                <div class="service-item">-->
<!--                    <div class="service-item-header-box">-->
<!--                        <div class="service-item-header">-->
<!--                            <div class="">-->
<!--                                <img style="    width: 70px;" src="https://cdn-icons-png.flaticon.com/128/12450/12450757.png" alt="Developer Projects">-->
<!--                            </div>-->
<!--                            <div class="service-item-title">-->
<!--                                <h2><a href="#">Developer Projects</a></h2>-->
<!--                            </div>-->
<!--                        </div>-->

<!--                        <div class="service-item-content">-->
<!--                            <p>Gain exclusive access to new launches, off-plan developments, and developer-direct pricing across Nepal.</p>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <div class="service-item-image d-none">-->
<!--                        <figure class="image-anime">-->
<!--                            <img src="images/service-developer.jpg" alt="Developer Projects">-->
<!--                        </figure>-->

<!--                        <div class="service-item-btn">-->
<!--                            <a href="#"><img src="images/arrow-white.svg" alt=""></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--        </div>-->
<!--    </div>-->
<!--</div>-->
    <!-- Explore area start -->
    <!-- Explore area end -->

<section class="snapshot mt-5">
  <div class="wrap">
    <div class="section-head reveal">
      <p class="eyebrow">Services Snapshot</p>
      <h2>Two pillars. One partner, start to finish.</h2>
      <p class="lede">From finding the right land to structuring the capital behind it, Omega Capital Advisors covers both sides of a property's life — the asset, and the deal that finances it.</p>
    </div>
 
    <div class="pillars reveal">
      <div>
        <div class="pillar-head">
          <h3>Real Estate</h3>
          <span>01 — 02</span>
        </div>
        <div class="pillar-re">
          <div class="tile">
            <span class="tag">Brokerage</span>
            <h4>Property &amp; Land Brokerage</h4>
            <p>Find, verify, and transact land, houses, apartments, and commercial property.</p>
          </div>
          <div class="tile">
            <span class="tag">Advisory</span>
            <h4>Investment Advisory</h4>
            <p>Objective, research-based guidance on where and how to invest.</p>
          </div>
        </div>
      </div>
 
      <div>
        <div class="pillar-head">
          <h3>Project Capital</h3>
          <span>03 — 06</span>
        </div>
        <div class="pillar-pc">
          <div class="tile">
            <span class="tag">Financing</span>
            <h4>Financing &amp; Loan Syndication</h4>
            <p>Structure project debt and syndicate loans across banks and cooperatives.</p>
          </div>
          <div class="tile">
            <span class="tag">Risk</span>
            <h4>Risk &amp; Feasibility</h4>
            <p>Feasibility studies and independent project risk assessment.</p>
          </div>
          <div class="tile">
            <span class="tag">Delivery</span>
            <h4>Project Management</h4>
            <p>Oversight from groundbreaking through completion and handover.</p>
          </div>
          <div class="tile">
            <span class="tag">Capital Markets</span>
            <h4>Public Listing Advisory</h4>
            <p>IPO readiness and the pathway to public capital markets.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 
<!-- ================= THE OMEGA ONE-STOP MODEL ================= -->
<section class="model">
  <div class="wrap">
    <div class="section-head center on-dark reveal">
      <p class="eyebrow on-dark">The Omega One-Stop Model</p>
      <h2>One partner, from land to listing.</h2>
      <p class="lede">Most firms hand a project off between six specialists. We stay with it — the same partner across every stage, from the first site visit to the day it reaches capital markets.</p>
    </div>
 
    <!-- Desktop: horizontal zigzag timeline -->
    <div class="timeline-h reveal">
      <div class="tl-track"></div>
      <div class="tl-arrow"></div>
 
      <div class="tl-stop top" style="left:8.3333%;">
        <div class="tl-label">
          <span class="tl-eyebrow">Stage 01</span>
          <h3>Land &amp; site acquisition</h3>
          <p>Verified property, due diligence, negotiation.</p>
        </div>
        <div class="tl-connector"></div>
        <div class="tl-node">01</div>
      </div>
 
      <div class="tl-stop bottom" style="left:25%;">
        <div class="tl-node">02</div>
        <div class="tl-connector"></div>
        <div class="tl-label">
          <span class="tl-eyebrow">Stage 02</span>
          <h3>Feasibility &amp; risk assessment</h3>
          <p>Is the project viable, and on what terms?</p>
        </div>
      </div>
 
      <div class="tl-stop top" style="left:41.6667%;">
        <div class="tl-label">
          <span class="tl-eyebrow">Stage 03</span>
          <h3>Capital structuring &amp; loan syndication</h3>
          <p>The right financing, arranged.</p>
        </div>
        <div class="tl-connector"></div>
        <div class="tl-node">03</div>
      </div>
 
      <div class="tl-stop bottom" style="left:58.3333%;">
        <div class="tl-node">04</div>
        <div class="tl-connector"></div>
        <div class="tl-label">
          <span class="tl-eyebrow">Stage 04</span>
          <h3>Execution &amp; project management</h3>
          <p>Delivery through to completion.</p>
        </div>
      </div>
 
      <div class="tl-stop top" style="left:75%;">
        <div class="tl-label">
          <span class="tl-eyebrow">Stage 05</span>
          <h3>Handover</h3>
          <p>A finished, documented, transferable asset.</p>
        </div>
        <div class="tl-connector"></div>
        <div class="tl-node">05</div>
      </div>
 
      <div class="tl-stop bottom" style="left:91.6667%;">
        <div class="tl-node">06</div>
        <div class="tl-connector"></div>
        <div class="tl-label">
          <span class="tl-eyebrow">Stage 06</span>
          <h3>Public listing</h3>
          <p>Advisory on the route to capital markets.</p>
        </div>
      </div>
    </div>
 
    <!-- Mobile: vertical fallback -->
    <div class="timeline-v reveal">
      <div class="tv-stop">
        <div class="tv-node">01</div>
        <div class="tv-body">
          <h3>Land &amp; site acquisition</h3>
          <p>Verified property, due diligence, negotiation.</p>
        </div>
      </div>
      <div class="tv-stop">
        <div class="tv-node">02</div>
        <div class="tv-body">
          <h3>Feasibility &amp; risk assessment</h3>
          <p>Is the project viable, and on what terms?</p>
        </div>
      </div>
      <div class="tv-stop">
        <div class="tv-node">03</div>
        <div class="tv-body">
          <h3>Capital structuring &amp; loan syndication</h3>
          <p>The right financing, arranged.</p>
        </div>
      </div>
      <div class="tv-stop">
        <div class="tv-node">04</div>
        <div class="tv-body">
          <h3>Execution &amp; project management</h3>
          <p>Delivery through to completion.</p>
        </div>
      </div>
      <div class="tv-stop">
        <div class="tv-node">05</div>
        <div class="tv-body">
          <h3>Handover</h3>
          <p>A finished, documented, transferable asset.</p>
        </div>
      </div>
      <div class="tv-stop">
        <div class="tv-node">06</div>
        <div class="tv-body">
          <h3>Public listing</h3>
          <p>Advisory on the route to capital markets.</p>
        </div>
      </div>
    </div>
 
    <div class="model-close reveal">
      <p>Land to listing — under one roof, with one point of accountability.</p>
      <a class="btn btn-yellow" href="#">Talk to an Advisor</a>
    </div>
  </div>
</section>
 

    <!-- Properties area start -->
    <div class="properties-area mt-5">
        <div class="container">
            <div class="section-title">
                <h2 class="title">Recent Properties for Sale</h2>
                <a class="btn btn-yellow mt-0" href="https://omegaadvisors.com.np/search">View All</a>
            </div>
            <div class="row">
            <div class="col-lg-3 col-sm-6">
    <div class="single-feature">
        <div class="thumb">
            <a href="https://omegaadvisors.com.np/product/luxury-apartment-lazimpat">
            <img src="{{static_asset('assets/images/p1.webp')}}" alt="img">
            </a>
          
        </div>
        <div class="details">
       
            <p class="author"><i class="fa fa-user"></i> Listed by Everest Realty</p>
            <h6 class="title"><a href="https://omegaadvisors.com.np/product/luxury-apartment-lazimpat">Luxury Apartment, Lazimpat</a></h6>
            <h6 class="price">Rs. 85,000/mo</h6><del>Rs. 95,000/mo</del>
            <ul class="info-list">
                <li><i class="fa fa-bed"></i> 3 Bed</li>
                <li><i class="fa fa-bath"></i> 2 Bath</li>
            <li><i class="fa fa-expand"></i> 1650 sq.ft.</li>
            </ul>
            <ul class="contact-list">
                <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
            
                <li><a class="btn btn-yellow" href="https://omegaadvisors.com.np/product/luxury-apartment-lazimpat">View Details</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="col-lg-3 col-sm-6">
    <div class="single-feature">
        <div class="thumb">
     <a href="https://omegaadvisors.com.np/product/luxury-apartment-lazimpat">
            <img src="{{static_asset('assets/images/p2.webp')}}" alt="img">
            </a>            
        </div>
        <div class="details">
        
            <p class="author"><i class="fa fa-user"></i> Listed by Kathmandu Homes</p>
            <h6 class="title"><a href="https://omegaadvisors.com.np/product/luxury-apartment-lazimpat">Modern House, Budhanilkantha</a></h6>
            <h6 class="price">Rs. 1,25,000/mo</h6><del>Rs. 1,40,000/mo</del>
            <ul class="info-list">
                <li><i class="fa fa-bed"></i> 5 Bed</li>
                <li><i class="fa fa-bath"></i> 4 Bath</li>
             <li><i class="fa fa-expand"></i> 3200 sq.ft.</li>
            </ul>
            <ul class="contact-list">
                <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
              
                <li><a class="btn btn-yellow" href="https://omegaadvisors.com.np/product/luxury-apartment-lazimpat">View Details</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="col-lg-3 col-sm-6">
    <div class="single-feature">
        <div class="thumb">
     <a href="https://omegaadvisors.com.np/product/luxury-apartment-lazimpat">
            <img src="{{static_asset('assets/images/p3.webp')}}" alt="img">
            </a>          
        </div>
        <div class="details">
         
            <p class="author"><i class="fa fa-user"></i> Listed by Nepal Property Hub</p>
            <h6 class="title"><a href="https://omegaadvisors.com.np/product/luxury-apartment-lazimpat">Family Home, Bhaktapur</a></h6>
            <h6 class="price">Rs. 75,000/mo</h6><del>Rs. 85,000/mo</del>
            <ul class="info-list">
                <li><i class="fa fa-bed"></i> 4 Bed</li>
                <li><i class="fa fa-bath"></i> 3 Bath</li>
             <li><i class="fa fa-expand"></i> 2400 sq.ft.</li>
            </ul>
            <ul class="contact-list">
                <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
             
                <li><a class="btn btn-yellow" href="https://omegaadvisors.com.np/product/luxury-apartment-lazimpat">View Details</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="col-lg-3 col-sm-6">
    <div class="single-feature">
        <div class="thumb">
     <a href="https://omegaadvisors.com.np/product/luxury-apartment-lazimpat">
            <img src="{{static_asset('assets/images/p4.webp')}}" alt="img">
            </a>           
        </div>
        <div class="details">
         
            <p class="author"><i class="fa fa-user"></i> Listed by Himalayan Realtors</p>
            <h6 class="title"><a href="https://omegaadvisors.com.np/product/luxury-apartment-lazimpat">Premium Villa, Bhaisepati</a></h6>
            <h6 class="price">Rs. 2,10,000/mo</h6><del>Rs. 2,35,000/mo</del>
            <ul class="info-list">
                <li><i class="fa fa-bed"></i> 6 Bed</li>
                <li><i class="fa fa-bath"></i> 5 Bath</li>
              <li><i class="fa fa-expand"></i> 4500 sq.ft.</li>
            </ul>
            <ul class="contact-list">
                <li><a class="phone" href="#"><i class="fa fa-phone"></i></a></li>
              
                <li><a class="btn btn-yellow" href="https://omegaadvisors.com.np/product/luxury-apartment-lazimpat">View Details</a></li>
            </ul>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
    <!-- feature Properties area end -->
    
    <section class="insights">
  <div class="wrap">
    <div class="section-head reveal">
      <div>
        <p class="eyebrow">Insights &amp; Market Updates</p>
        <h2>Perspective on Nepal's evolving property market.</h2>
      </div>
      <a class="view-all d-none" href="#">View All Articles →</a>
    </div>
 
    <div class="post-grid reveal">
      <!-- Featured post -->
      <a class="post-card post-featured" href="https://www.sharesansar.com/newsdetail/omega-capital-advisors-granted-official-license-for-real-estate-operations-in-nepal-2026-02-25">
        <div class="post-thumb">
        <img style="    width: 100%;" src="https://snowberry.prixacdn.net/media/gallery_folder/OMEGA-CAPITAL%2520LAND_H883CCaH4U_jozde5mupmipbb7cqauct63eu3dpx0d4m1st8wnfvlibo2me1umbza9kzmps_3DByFDa9H3_dwzeqjhd3abergwqzshqlj8t7hdxv4eupe7fegtkp3x7snlwywbvjjld0mni.jpeg"/>
        </div>
        <h3>Omega Capital Advisors Granted Official License for Real Estate Operations in Nepal
</h3>
        <p class="excerpt">Omega Capital Advisors Pvt. Ltd. has officially received a license (License No. BRK1835601) from the Department of Land Management and Records under the Ministry of Land Management, Cooperatives, and Poverty Alleviation to legally conduct real estate transactions in designated metropolitan and sub-metropolitan areas.</p>
        <div class="post-meta">
          <span>Feb 25, 2026</span><span class="dot"></span><span>6 min read</span>
        </div>
        <span class="read-link">Read the article
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
        </span>
      </a>
 
      <!-- Secondary posts -->
      <div class="post-list">
        <a class="post-row" href="https://www.tourismmail.com/news/detail/109801/">
          <div class="post-thumb">
                  <img style="    width: 100%;" src="https://snowberry.prixacdn.net/media/gallery_folder/OMEGA-CAPITAL%2520LAND_H883CCaH4U_jozde5mupmipbb7cqauct63eu3dpx0d4m1st8wnfvlibo2me1umbza9kzmps_3DByFDa9H3_dwzeqjhd3abergwqzshqlj8t7hdxv4eupe7fegtkp3x7snlwywbvjjld0mni.jpeg"/>

          </div>
          <div class="post-row-body">
            <h3>Omega Capital Advisors received a government license to conduct real estate transactions.</h3>
            <div class="post-meta"><span>Feb 25, 2026</span><span class="dot"></span><span>5 min read</span></div>
          </div>
        </a>
        <a class="post-row" href="https://english.insurancekhabar.com/omega-capital-advisors-gets-government-license-to-carry-out-real-estate-transactions-2/">
          <div class="post-thumb">
                             <img style="    width: 100%;" src="https://snowberry.prixacdn.net/media/gallery_folder/OMEGA-CAPITAL%2520LAND_H883CCaH4U_jozde5mupmipbb7cqauct63eu3dpx0d4m1st8wnfvlibo2me1umbza9kzmps_3DByFDa9H3_dwzeqjhd3abergwqzshqlj8t7hdxv4eupe7fegtkp3x7snlwywbvjjld0mni.jpeg"/>

          </div>
          <div class="post-row-body">
            <h3>Omega Capital Advisors gets government license to carry out real estate transactions
</h3>
            <div class="post-meta"><span>February 24, 2026</span><span class="dot"></span><span>4 min read</span></div>
          </div>
        </a>
        <a class="post-row" href="https://sharehubnepal.com/news/129010-insurance-khabar-omega-capital-advisors-government-license-real-estate-transactions">
          <div class="post-thumb">
                           <img style="    width: 100%;" src="https://snowberry.prixacdn.net/media/gallery_folder/OMEGA-CAPITAL%2520LAND_H883CCaH4U_jozde5mupmipbb7cqauct63eu3dpx0d4m1st8wnfvlibo2me1umbza9kzmps_3DByFDa9H3_dwzeqjhd3abergwqzshqlj8t7hdxv4eupe7fegtkp3x7snlwywbvjjld0mni.jpeg"/>

          </div>
          <div class="post-row-body">
            <h3>Omega Capital Advisors Receives Government License for Real Estate Transactions
</h3>
            <div class="post-meta"><span>February 24, 2026</span><span class="dot"></span><span>7 min read</span></div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
 

    <div class="client-area pd-top-60 pb-7 mt-5">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="title">What Our Customers <br> Are Saying</h2>
            </div>
            <div class="client-review-img">
                
                <div class="row justify-content-center">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <div class="client-slider-2 text-center" style="display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;">
                            <div class="item">
                                <div class="single-client-review">
                                    <div class="thumb">
                                        <img src="https://www.99acres.com/load/Company/testimonial_photo_serve/169" alt="client">
                                    </div>
                                    <div class="review-details">
                                       <p>
                Omega Capital made it very easy for me to find my dream home in Kathmandu.
                The listings were genuine, and the team guided me throughout the entire buying process.
                I highly recommend this platform to anyone looking for property in Nepal.
            </p>
            <h4>Suresh Shrestha</h4>
            <p>Home Buyer, Kathmandu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-client-review">
                                    <div class="thumb">
                                        <img src="https://www.99acres.com/load/Company/testimonial_photo_serve/165" alt="client">
                                    </div>
                                    <div class="review-details">
                                        <p>
                I listed my house in Lalitpur and received several genuine inquiries within a few days.
                The process was simple, transparent, and the customer support was excellent.
            </p>
            <h4>Priya Karki</h4>
            <p>Property Owner, Lalitpur</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-client-review">
                                    <div class="thumb">
                                        <img src="https://www.99acres.com/load/Company/testimonial_photo_serve/89" alt="client">
                                    </div>
                                    <div class="review-details">
   <p>
                As a real estate investor, I appreciate the accurate property information and verified listings.
                Hamro Property has become my preferred platform for buying and selling properties across Nepal.
            </p>
            <h4>Ramesh Adhikari</h4>
            <p>Real Estate Investor, Pokhara</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
<section class="cta-strip">
<img class="cta-logo" src="https://omegaadvisors.com.np/public/assets/images/omegalogo.png" alt="" aria-hidden="true" style="
    /* opacity: 0.1; */
"> 
  <div class="wrap">
    <div class="cta-inner reveal">
      <h2>Have a project, a property, or a plan? Let's take it forward.</h2>
      <p class="sub">From a single plot to a full development raise, speak with an Omega Capital advisor. No obligation — just clear, professional guidance.</p>
      <div class="cta-actions">
        <a class="btn btn-yellow" href="#">Book a Consultation</a>
        <span class="cta-note">Response within 1 business day</span>
      </div>
    </div>
  </div>
</section>
@endsection

@section('script')

<script>
$(window).on('load', function () {
    $('#popupModal').modal('show');
});
</script>

        <script>
      var swiper = new Swiper(".mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
<script>
  const revealEls = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window){
    const io = new IntersectionObserver((entries)=>{
      entries.forEach(e=>{ if(e.isIntersecting){ e.target.classList.add('in'); io.unobserve(e.target); } });
    }, { threshold:0.1 });
    revealEls.forEach(el=>io.observe(el));
  } else { revealEls.forEach(el=>el.classList.add('in')); }
</script>



@endsection