@extends('frontend.layouts.app')

<style>
  :root{
    --ink:#14171f;
    --navy:#1e2a44;
    --navy-deep:#12151c;
    --paper:#efe9dc;
    --paper-2:#e6ddc9;
    --brass:#9c7a3c;
    --brass-light:#c7a463;
    --brick:#8c3d2e;
    --slate:#5b6472;
    --line: rgba(20,23,31,0.14);
    --max: 1160px;
  }
  *{ box-sizing:border-box; }
  html{ scroll-behavior:smooth; }
  body{
    margin:0; background:var(--paper); color:var(--ink);
    font-family:'IBM Plex Sans', sans-serif; font-size:16px; line-height:1.6;
    -webkit-font-smoothing:antialiased;
  }
  h1,h2,h3{ font-family:'Fraunces', serif; font-weight:500; margin:0; letter-spacing:-0.01em; }
  a{ color:inherit; }
  .wrap{ max-width:var(--max); margin:0 auto; padding:0 32px; }
  .eyebrow{
    font-family:'IBM Plex Mono', monospace; font-size:12.5px; letter-spacing:0.14em;
    text-transform:uppercase; color:var(--brass); display:flex; align-items:center; gap:10px;
  }
  .eyebrow::before{ content:""; width:22px; height:1px; background:var(--brass); display:inline-block; }
  .eyebrow.on-dark{ color:var(--brass-light); }
  .eyebrow.on-dark::before{ background:var(--brass-light); }
  ::selection{ background:var(--brass); color:var(--paper); }

  @media (prefers-reduced-motion: no-preference){
    .reveal{ opacity:0; transform:translateY(18px); transition:opacity .7s ease, transform .7s ease; }
    .reveal.in{ opacity:1; transform:translateY(0); }
  }

  /* ---------- HERO ---------- */
  .hero{ background:var(--navy-deep); color:var(--paper); position:relative; overflow:hidden; padding:120px 0 0; }
  .hero::before{
    content:""; position:absolute; inset:0;
    background:
      radial-gradient(700px 420px at 82% 8%, rgba(156,122,60,0.16), transparent 60%),
      linear-gradient(180deg, var(--navy) 0%, var(--navy-deep) 65%);
    z-index:0;
  }
  .hero-inner{ position:relative; z-index:2; }
  .hero .wrap{ position:relative; }
  .hero-grid{ display:grid; grid-template-columns:1.2fr 0.7fr; gap:56px; align-items:end; padding-bottom:60px; }
  .hero h1{ font-size:clamp(32px, 4.4vw, 50px); line-height:1.14; color:var(--paper); margin-top:22px; max-width:20ch; }
  .hero-sub{ max-width:52ch; margin-top:22px; color:rgba(239,233,220,0.78); font-size:16.5px; }
  .seal-holder{ display:flex; justify-content:flex-end; align-items:flex-end; padding-bottom:44px; }
  .seal{ width:150px; height:150px; opacity:0.94; }
  .seal .ring{ fill:none; stroke:var(--brass-light); }
  .seal .center-txt{ font-family:'Fraunces', serif; fill:var(--paper); font-size:15px; }
  .seal .center-sub{ font-family:'IBM Plex Mono', monospace; fill:var(--brass-light); font-size:7.2px; letter-spacing:1.5px; }
  .hero-strip{ border-top:1px solid rgba(239,233,220,0.16); padding:20px 0; }
  .hero-strip .wrap{ display:flex; gap:44px; flex-wrap:wrap; font-family:'IBM Plex Mono', monospace; font-size:12px; color:rgba(239,233,220,0.6); letter-spacing:0.04em; }
  .hero-strip span b{ color:var(--brass-light); font-weight:500; }
  .contour{ display:block; width:100%; height:auto; }

  /* ---------- SECTION SHELL ---------- */
  section{ padding:100px 0; }
  .section-head{ max-width:680px; margin-bottom:44px; }
  .section-head h2{ font-size:clamp(26px, 3vw, 36px); margin-top:16px; }
  .section-head p.lede{ margin-top:16px; color:var(--slate); font-size:16px; max-width:60ch; }

  /* ---------- WHY COMPLIANCE MATTERS ---------- */
  .why{ background:var(--paper); border-bottom:1px solid var(--line); }
  .why-grid{ display:grid; grid-template-columns:1.1fr 0.9fr; gap:60px; }
  .why-grid p{ color:var(--ink); font-size:15.5px; margin:0 0 16px; }
  .fatf-box{
    border:1px solid var(--line); background:var(--paper-2); padding:30px;
  }
  .fatf-box .tag{
    font-family:'IBM Plex Mono', monospace; font-size:11.5px; letter-spacing:0.08em;
    text-transform:uppercase; color:var(--brick); margin-bottom:14px; display:block;
  }
  .fatf-box .fine{
    font-family:'Fraunces', serif; font-size:30px; color:var(--brick); line-height:1.2;
  }
  .fatf-box .fine small{
    display:block; font-family:'IBM Plex Mono', monospace; font-size:12px; color:var(--slate);
    letter-spacing:0.03em; margin-top:8px; text-transform:none;
  }
  .means-list{ list-style:none; margin:22px 0 0; padding:0; border-top:1px solid var(--line); }
  .means-list li{
    padding:14px 0 14px 26px; position:relative; border-bottom:1px solid var(--line); font-size:15px;
  }
  .means-list li::before{ content:"◆"; position:absolute; left:0; top:16px; font-size:8px; color:var(--brass); }

  /* ---------- COMPLIANCE FRAMEWORK GRID ---------- */
  .framework{ background:var(--paper-2); border-bottom:1px solid var(--line); }
  .fw-grid{ display:grid; grid-template-columns:repeat(2,1fr); gap:1px; background:var(--line); border:1px solid var(--line); }
  .fw-card{ background:var(--paper); padding:32px 30px; }
  .fw-card .num{ font-family:'IBM Plex Mono', monospace; font-size:12px; color:var(--brass); letter-spacing:0.08em; }
  .fw-card h3{ font-size:19px; margin-top:12px; margin-bottom:10px; line-height:1.3; }
  .fw-card p{ font-size:14px; color:var(--slate); margin:0; }

  /* ---------- LICENSE ---------- */
  .license{ background:var(--navy-deep); color:var(--paper); }
  .license .section-head h2{ color:var(--paper); }
  .license .section-head p.lede{ color:rgba(239,233,220,0.68); }
  .lic-grid{ display:grid; grid-template-columns:1.15fr 0.85fr; gap:56px; align-items:start; }
  .ledger{ border:1px solid rgba(239,233,220,0.2); background:rgba(239,233,220,0.03); }
  .ledger-row{ display:grid; grid-template-columns:230px 1fr; border-bottom:1px solid rgba(239,233,220,0.14); padding:20px 26px; }
  .ledger-row:last-child{ border-bottom:none; }
  .ledger-row .k{ font-family:'IBM Plex Mono', monospace; font-size:12px; letter-spacing:0.06em; text-transform:uppercase; color:var(--brass-light); }
  .ledger-row .v{ font-size:15px; color:var(--paper); }
  .ledger-row .v.placeholder{ color:rgba(239,233,220,0.5); font-style:italic; }
  .cert-frame{
    border:1px dashed rgba(239,233,220,0.35); aspect-ratio:3/4;
    display:flex; flex-direction:column; align-items:center; justify-content:center;
    text-align:center; padding:30px; gap:16px; position:relative;
  }
  .cert-frame .seal{ width:96px; height:96px; }
  .cert-frame p{ font-family:'IBM Plex Mono', monospace; font-size:11.5px; color:rgba(239,233,220,0.55); letter-spacing:0.04em; max-width:26ch; margin:0; }

  /* ---------- WHAT THIS MEANS FOR CLIENT ---------- */
  .client{     background: var(--navy-deep); }
  .client-grid{ display:grid; grid-template-columns:repeat(2,1fr); gap:1px; background:var(--line); border:1px solid var(--line); }
  .client-card{ background:var(--paper-2); padding:30px 32px; display:flex; gap:16px; align-items:flex-start; }
  .client-card .mark{ font-family:'IBM Plex Mono', monospace; color:var(--brass); font-size:13px; margin-top:2px; flex-shrink:0; }
  .client-card p{ margin:0; font-size:15px; color:var(--ink); }

  /* ---------- RESPONSIVE ---------- */
  @media (max-width:900px){
    .hero-grid{ grid-template-columns:1fr; }
    .seal-holder{ justify-content:flex-start; padding-top:20px; }
    .why-grid, .lic-grid{ grid-template-columns:1fr; }
    .fw-grid{ grid-template-columns:1fr; }
    .client-grid{ grid-template-columns:1fr; }
    .ledger-row{ grid-template-columns:1fr; gap:6px; }
  }
  @media (max-width:520px){
    .wrap{ padding:0 20px; }
    section{ padding:72px 0; }
    .hero{ padding-top:96px; }
  }
</style>

@section('content')

<!-- HERO -->

<section class="hero">

<div class="hero-inner">

<div class="wrap">

<div class="hero-grid">

<div>

<p class="eyebrow on-dark">
Governance & Integrity
</p>


<h1>
The discipline that makes our advice bankable.
</h1>


<p class="hero-sub">
Project financing, loan syndication, and public-listing work only happen when banks,
cooperatives, and market participants trust the party at the table.
That trust is built on governance.
</p>


<p class="hero-sub">
Omega Capital Advisors maintains institutional standards of integrity as a matter of routine —
not as a marketing message, but because it is what makes our engagements fundable and our advice credible.
</p>


</div>



<div class="seal-holder">

<svg class="seal" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">

<circle class="ring" cx="100" cy="100" r="92" stroke-width="1"/>

<circle class="ring" cx="100" cy="100" r="80" stroke-width="0.6"/>

<text x="100" y="94" text-anchor="middle" class="center-txt">
Ω
</text>

<text x="100" y="116" text-anchor="middle" class="center-sub">
TRUSTED ADVISOR
</text>

</svg>

</div>


</div>

</div>

</div>



<div class="hero-strip">

<div class="wrap">

<span><b>Licensed</b> institution</span>

<span><b>Transparent</b> engagements</span>

<span><b>Documented</b> processes</span>

<span><b>Trusted</b> advisory</span>

</div>

</div>



<svg class="contour" viewBox="0 0 1200 60" preserveAspectRatio="none">

<path d="M0,60 L0,40 L100,22 L180,38 L260,10 L340,30 L420,4 L520,32 L600,14 L700,36 L800,8 L900,28 L1000,6 L1100,26 L1200,12 L1200,60 Z" fill="#efe9dc"/>

</svg>


</section>




<!-- HOW WE OPERATE -->


<section class="framework">


<div class="wrap">


<div class="section-head reveal">


<p class="eyebrow">
How We Operate
</p>


<h2>
Governance embedded into every engagement.
</h2>


</div>



<div class="fw-grid reveal">



<div class="fw-card">

<span class="num">
01
</span>


<h3>
Client & Counterparty Diligence
</h3>


<p>
We verify the parties we work with and understand the source and structure
of the capital involved before an engagement proceeds.
</p>


</div>





<div class="fw-card">

<span class="num">
02
</span>


<h3>
Documentation & Records
</h3>


<p>
Engagements are properly documented and records retained,
so lenders, auditors, and authorities can rely on a clear,
verifiable trail.
</p>


</div>





<div class="fw-card">

<span class="num">
03
</span>


<h3>
Licensed & Accountable
</h3>


<p>
We operate as a government-licensed real estate firm and conduct ourselves
as an accountable institution across all our advisory work.
</p>


</div>





<div class="fw-card">

<span class="num">
04
</span>


<h3>
Conflict-Free Advice
</h3>


<p>
Fees and interests are disclosed clearly.
We do not take positions that compromise our client's interests
or the independence of our advice.
</p>


</div>



</div>


</div>


</section>






<!-- GOVERNANCE STANDARD -->








<!-- CLIENT BENEFITS -->


<section class="client">


<div class="wrap">


<div class="section-head reveal">


<p class="eyebrow">
What This Means For You
</p>


<h2 class="text-white">
Confidence through accountable advisory.
</h2>


</div>




<div class="client-grid reveal">


<div class="client-card">

<span class="mark">
◆
</span>

<p>
Your engagement is handled by an accountable, licensed institution —
not an informal intermediary.
</p>

</div>



<div class="client-card">

<span class="mark">
◆
</span>

<p>
Financing and advisory work is documented to a standard that lenders
and market participants can rely on.
</p>

</div>




<div class="client-card">

<span class="mark">
◆
</span>

<p>
Your information is handled with confidentiality and professional care.
</p>

</div>




<div class="client-card">

<span class="mark">
◆
</span>

<p>
Our licensed status can be independently verified with the relevant authority.
</p>

</div>



</div>


</div>


</section>

@endsection

@section('script')

<script>
  const revealEls = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window){
    const io = new IntersectionObserver((entries)=>{
      entries.forEach(e=>{
        if(e.isIntersecting){ e.target.classList.add('in'); io.unobserve(e.target); }
      });
    }, { threshold:0.12 });
    revealEls.forEach(el=>io.observe(el));
  } else {
    revealEls.forEach(el=>el.classList.add('in'));
  }
</script>
@endsection
