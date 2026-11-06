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
    --line-light: rgba(239,233,220,0.22);
    --max: 1160px;
  }

  *{ box-sizing:border-box; }
  html{ scroll-behavior:smooth; }
  body{
    margin:0;
    background:var(--paper);
    color:var(--ink);
    font-family:'IBM Plex Sans', sans-serif;
    font-size:16px;
    line-height:1.6;
    -webkit-font-smoothing:antialiased;
  }
  h1,h2,h3{
    font-family:'Fraunces', serif;
    font-weight:500;
    margin:0;
    letter-spacing:-0.01em;
  }
  a{ color:inherit; }
  .wrap{ max-width:var(--max); margin:0 auto; padding:0 32px; }
  .eyebrow{
    font-family:'IBM Plex Mono', monospace;
    font-size:12.5px;
    letter-spacing:0.14em;
    text-transform:uppercase;
    color:var(--brass);
    display:flex;
    align-items:center;
    gap:10px;
  }
  .eyebrow::before{
    content:"";
    width:22px; height:1px;
    background:var(--brass);
    display:inline-block;
  }
  .eyebrow.on-dark{ color:var(--brass-light); }
  .eyebrow.on-dark::before{ background:var(--brass-light); }

  ::selection{ background:var(--brass); color:var(--paper); }

  @media (prefers-reduced-motion: no-preference){
    .reveal{
      opacity:0;
      transform:translateY(18px);
      transition:opacity .7s ease, transform .7s ease;
    }
    .reveal.in{ opacity:1; transform:translateY(0); }
  }

  /* ---------- HERO ---------- */
  .hero{
    background:var(--navy-deep);
    color:var(--paper);
    position:relative;
    overflow:hidden;
    padding:120px 0 0;
  }
  .hero::before{
    content:"";
    position:absolute; inset:0;
    background:
      radial-gradient(700px 420px at 82% 8%, rgba(156,122,60,0.16), transparent 60%),
      linear-gradient(180deg, var(--navy) 0%, var(--navy-deep) 65%);
    z-index:0;
  }
  .hero-inner{ position:relative; z-index:2; }
  .hero .wrap{ position:relative; }
  .hero-grid{
    display:grid;
    grid-template-columns:1.2fr 0.7fr;
    gap:56px;
    align-items:end;
    padding-bottom:60px;
  }
  .hero h1{
    font-size:clamp(38px, 5.2vw, 62px);
    line-height:1.06;
    color:var(--paper);
    margin-top:22px;
    max-width:15ch;
  }
  .hero h1 em{
    font-style:italic;
    color:var(--brass-light);
  }
  .hero-sub{
    max-width:46ch;
    margin-top:22px;
    color:rgba(239,233,220,0.78);
    font-size:16.5px;
  }
  .hero-ctas{ display:flex; gap:14px; margin-top:34px; flex-wrap:wrap; }
  .btn{
    font-family:'IBM Plex Mono', monospace;
    font-size:12.5px;
    letter-spacing:0.06em;
    text-transform:uppercase;
    padding:14px 22px;
    background:white !important;
    text-decoration:none;
    display:inline-block;
    border:1px solid var(--brass-light);
  }
  .btn-solid{ background:var(--brass-light); color:var(--navy-deep); }
  .btn-solid:hover{ background:var(--paper); border-color:var(--paper); }
  .btn-outline{ color:var(--paper); border-color:rgba(239,233,220,0.4); }
  .btn-outline:hover{ border-color:var(--paper); }

  .seal-holder{
    display:flex; justify-content:flex-end; align-items:flex-end;
    padding-bottom:44px;
  }
  .seal{ width:168px; height:168px; opacity:0.94; }
  .seal .ring-text{ font-family:'IBM Plex Mono', monospace; font-size:8.4px; letter-spacing:2.2px; fill:var(--brass-light); }
  .seal .ring{ fill:none; stroke:var(--brass-light); }
  .seal .center-txt{ font-family:'Fraunces', serif; fill:var(--paper); font-size:15px; }
  .seal .center-sub{ font-family:'IBM Plex Mono', monospace; fill:var(--brass-light); font-size:7.2px; letter-spacing:1.5px; }

  .hero-strip{
    border-top:1px solid rgba(239,233,220,0.16);
    padding:20px 0;
  }
  .hero-strip .wrap{
    display:flex; gap:44px; flex-wrap:wrap;
    font-family:'IBM Plex Mono', monospace;
    font-size:12px;
    color:rgba(239,233,220,0.6);
    letter-spacing:0.04em;
  }
  .hero-strip span b{ color:var(--brass-light); font-weight:500; }

  .contour{ display:block; width:100%; height:auto; }

  /* ---------- SECTION SHELL ---------- */
  section{ padding:104px 0; }
  section.tight{ padding:88px 0; }
  .section-head{ max-width:640px; margin-bottom:52px; }
  .section-head h2{ font-size:clamp(28px, 3.4vw, 40px); margin-top:16px; }
  .section-head p.lede{ margin-top:16px; color:var(--slate); font-size:16px; }

  /* ---------- OUR STORY ---------- */
  .story{ background:var(--paper); border-bottom:1px solid var(--line); }
  .story-grid{
    display:grid; grid-template-columns:1.15fr 0.85fr; gap:64px;
  }
  .story-grid p{ margin:0 0 18px; color:var(--ink); font-size:16px; }
  .story-grid p:last-child{ margin-bottom:0; }

  .milestone{
    border:1px solid var(--line);
    background:var(--paper-2);
    padding:32px;
  }
  .milestone .yr{
    font-family:'IBM Plex Mono', monospace;
    font-size:12.5px; letter-spacing:0.1em; color:var(--brick);
    text-transform:uppercase;
  }
  .milestone h3{ font-size:22px; margin-top:10px; line-height:1.3; }
  .milestone-rule{ height:1px; background:var(--line); margin:22px 0; }
  .milestone .note{ font-size:14.5px; color:var(--slate); }
  .milestone .badge{
          position: absolute;
    left: 30px;
    width: fit-content;
    bottom: 27px;
    background: #0b0f1d;
    color: white;
    border-radius: 999px;
    padding: 12px;
    display:inline-flex; align-items:center; gap:8px;
    font-family:'IBM Plex Mono', monospace;
    font-size:11.5px; letter-spacing:0.08em; text-transform:uppercase;
    color:var(--brass); margin-top:20px;
  }
  .milestone .badge::before{ content:"◆"; font-size:9px; }

  /* ---------- MISSION / VISION ---------- */
  .mv{ background:var(--navy-deep); color:var(--paper); }
  .mv .wrap{ display:grid; grid-template-columns:1fr 1fr; gap:2px; background:rgba(239,233,220,0.14); }
  .mv-card{ background:var(--navy-deep); padding:52px 44px; }
  .mv-card .eyebrow{ margin-bottom:18px; }
  .mv-card h3{ color:var(--paper); font-size:18px; line-height:1.35; font-weight:400; }

  /* ---------- WHY DIFFERENT ---------- */
  .diff-grid{
    display:grid; grid-template-columns:repeat(2,1fr); gap:1px;
    background:var(--line);
    border:1px solid var(--line);
  }
  .diff-card{
    background:var(--paper); padding:38px 40px; position:relative;
  }
  .diff-card .eyebrow{ margin-bottom:16px; }
  .diff-card h3{ font-size:21px; margin-bottom:12px; }
  .diff-card p{ color:var(--slate); font-size:15px; margin:0; }
  .warn-line{
    margin-top:18px; padding:12px 16px;
    border-left:3px solid var(--brick);
    background:rgba(140,61,46,0.06);
    font-size:14px; color:var(--brick);
    font-family:'IBM Plex Mono', monospace;
    letter-spacing:0.01em;
  }

  /* ---------- VALUES ---------- */
  .values{ background:var(--paper-2); border-top:1px solid var(--line); border-bottom:1px solid var(--line); }
  .value-row{
    display:grid; grid-template-columns:280px 1fr; gap:40px;
    padding:30px 0;
    border-top:1px solid var(--line);
    align-items:baseline;
  }
  .value-row:last-child{ border-bottom:1px solid var(--line); }
  .value-row h3{ font-size:26px; color:var(--navy); }
  .value-row p{ margin:0; color:var(--slate); max-width:60ch; }

  /* ---------- LEADERSHIP ---------- */
  .leader-copy{ max-width:70ch; color:var(--slate); margin-bottom:44px; }
  .leader-grid{ display:grid; grid-template-columns:repeat(3,1fr); gap:28px; }
  .leader-card{
    border:1px dashed var(--brass);
    background:var(--paper-2);
    padding:30px 26px;
    text-align:left;
  }
  .avatar-ph{
    width:64px; height:64px; border-radius:50%;
    background:var(--paper);
    border:1px solid var(--line);
    display:flex; align-items:center; justify-content:center;
    font-family:'IBM Plex Mono', monospace;
    font-size:11px; color:var(--slate); letter-spacing:0.04em;
    margin-bottom:20px;
  }
  .leader-card .ph-name{ font-family:'Fraunces', serif; font-size:18px; color:var(--slate); }
  .leader-card .ph-role{
    font-family:'IBM Plex Mono', monospace; font-size:11.5px;
    color:var(--brass); letter-spacing:0.06em; text-transform:uppercase;
    margin-top:4px;
  }
  .leader-card .ph-blurb{ font-size:13.5px; color:var(--slate); margin-top:14px; line-height:1.55; }

  /* ---------- COMPLIANCE ---------- */
  .compliance{ background:var(--navy-deep); color:var(--paper); position:relative; overflow:hidden; }
  .compliance .section-head p.lede{ color:rgba(239,233,220,0.68); }
  .compliance .section-head h2{ color:var(--paper); }
  .comp-grid{ display:grid; grid-template-columns:1.15fr 0.85fr; gap:56px; align-items:start; }
  .ledger{
    border:1px solid rgba(239,233,220,0.2);
    background:rgba(239,233,220,0.03);
  }
  .ledger-row{
    display:grid; grid-template-columns:230px 1fr;
    border-bottom:1px solid rgba(239,233,220,0.14);
    padding:20px 26px;
  }
  .ledger-row:last-child{ border-bottom:none; }
  .ledger-row .k{
    font-family:'IBM Plex Mono', monospace; font-size:12px;
    letter-spacing:0.06em; text-transform:uppercase;
    color:var(--brass-light);
  }
  .ledger-row .v{ font-size:15px; color:var(--paper); }
  .ledger-row .v.placeholder{ color:rgba(239,233,220,0.5); font-style:italic; }

  .cert-frame{
    border:1px dashed rgba(239,233,220,0.35);
    aspect-ratio:3/4;
    display:flex; flex-direction:column; align-items:center; justify-content:center;
    text-align:center; padding:30px; gap:16px;
    position:relative;
  }
  .cert-frame .seal{ width:96px; height:96px; }
  .cert-frame p{
    font-family:'IBM Plex Mono', monospace; font-size:11.5px;
    color:rgba(239,233,220,0.55); letter-spacing:0.04em; max-width:26ch;
    margin:0;
  }

  /* ---------- RESPONSIVE ---------- */
  @media (max-width:900px){
    .hero-grid{ grid-template-columns:1fr; }
    .seal-holder{ justify-content:flex-start; padding-top:20px; }
    .story-grid, .comp-grid{ grid-template-columns:1fr; }
    .mv .wrap{ grid-template-columns:1fr; }
    .diff-grid{ grid-template-columns:1fr; }
    .leader-grid{ grid-template-columns:1fr; }
    .value-row{ grid-template-columns:1fr; gap:10px; }
    .ledger-row{ grid-template-columns:1fr; gap:6px; }
  }
  @media (max-width:520px){
    .wrap{ padding:0 20px; }
    section{ padding:72px 0; }
    .hero{ padding-top:96px; }
  }
</style>
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">


@section('content')

<section class="hero">
    <div class="hero-inner">
        <div class="wrap">
            <div class="hero-grid">

                <div>
                    <p class="eyebrow on-dark">
                        Capital Advisory & Real Estate Intelligence
                    </p>

                    <h1>
                        Where Property Meets <em>Capital.</em>
                    </h1>

                    <p class="hero-sub">
                        Omega Capital Advisors connects Nepal’s real estate opportunities
                        with structured financing, disciplined advisory, and long-term
                        capital solutions — from land acquisition to project completion
                        and public market readiness.
                    </p>

                    <div class="hero-ctas">
                        <a class="btn btn-solid" href="#story">
                            Our Story
                        </a>

                        <a class="btn btn-solid" href="#different">
                            Our Capabilities
                        </a>
                    </div>

                </div>


                <div class="seal-holder">
                    <svg class="seal" viewBox="0 0 200 200">
                        <circle class="ring" cx="100" cy="100" r="92"/>
                        <circle class="ring" cx="100" cy="100" r="80"/>

                        <text x="100" y="94" text-anchor="middle" class="center-txt">
                            Ω
                        </text>

                        <text x="100" y="116" text-anchor="middle" class="center-sub">
                            CAPITAL ADVISORS
                        </text>
                    </svg>
                </div>

            </div>
        </div>
    </div>


    <div class="hero-strip">
        <div class="wrap">
            <span><b>Real Estate</b> Market Intelligence</span>
            <span><b>Project</b> Financing Advisory</span>
            <span><b>Risk</b> & Feasibility Assessment</span>
            <span><b>Capital</b> Market Advisory</span>
        </div>
    </div>

</section>
<section class="story" id="story">

<div class="wrap">

<div class="story-grid">

<div class="reveal">

<p class="eyebrow">
Our Story
</p>


<h2>
Building the bridge between property and capital.
</h2>


<p>
Omega Capital Advisors Pvt. Ltd. was founded on a simple observation:
in Nepal, the people who transact land, finance projects, and guide businesses
towards growth rarely sit at the same table.
</p>


<p>
Promoters are often required to coordinate brokers, lenders, consultants,
and advisors separately — creating delays, fragmented decision-making,
and missed opportunities.
</p>


<p>
We built Omega to become that single table. Our real estate practice gives us
verified market understanding, while our capital advisory platform transforms
that knowledge into investable opportunities through project financing,
loan syndication, feasibility assessment, risk evaluation, and strategic advisory.
</p>


<p>
From identifying the right land opportunity to supporting development,
completion, handover, and eventual public-market readiness, we remain involved
throughout the lifecycle.
</p>


</div>


<div class="reveal">

<div class="milestone">

<p class="yr">
Our Approach
</p>


<h3>
From Land To Listing
</h3>


<div class="milestone-rule"></div>


<p class="note">
A single advisory partner connecting real estate knowledge,
financial structuring, execution support, and capital market ambition.
</p>




</div>

</div>


</div>

</div>

</section>
<section class="mv tight">

<div class="wrap">


<div class="mv-card reveal">

<p class="eyebrow on-dark">
Our Mission
</p>


<h3>
To move Nepal’s projects forward — from land to listing — by combining
real estate expertise with disciplined project financing, risk assessment,
and capital advisory under one roof.
</h3>

</div>



<div class="mv-card reveal">

<p class="eyebrow on-dark">
Our Vision
</p>


<h3>
To become the trusted partner for promoters, developers, and investors
when projects require both property expertise and capital strategy.
</h3>

</div>


</div>

</section>
<section id="different">
  <div class="wrap">
    <div class="section-head reveal">
      <p class="eyebrow">Why We Are Different</p>
      <h2>Four commitments the rest of the market still treats as optional.</h2>
    </div>
    <div class="diff-grid reveal">
     <div class="diff-card">

<p class="eyebrow">
01 — Integrated Advisory
</p>

<h3>
One Partner, Whole Lifecycle
</h3>

<p>
Land acquisition, financing, feasibility, execution support,
handover, and listing strategy coordinated through one accountable team.
</p>

</div>



<div class="diff-card">

<p class="eyebrow">
02 — Capital Solutions
</p>

<h3>
Financing & Loan Syndication
</h3>

<p>
We structure project debt and connect promoters with suitable banks,
financial institutions, and cooperative networks to secure appropriate capital.
</p>

</div>



<div class="diff-card">

<p class="eyebrow">
03 — Risk Discipline
</p>

<h3>
Feasibility Before Funding
</h3>

<p>
Independent assessment of project viability, market conditions,
financial assumptions, and execution risks before capital decisions are made.
</p>

</div>



<div class="diff-card">

<p class="eyebrow">
04 — Real Estate Intelligence
</p>

<h3>
Ground-Level Market Understanding
</h3>

<p>
Our licensed brokerage foundation provides verified insight into Nepal’s
property markets across metropolitan and sub-metropolitan regions.
</p>

</div>
    </div>
  </div>
</section>

<section class="values" id="values">
  <div class="wrap">
    <div class="section-head reveal">
      <p class="eyebrow">Our Values</p>
      <h2>What we hold ourselves to, on every transaction.</h2>
    </div>
    <div class="reveal">
  <div class="value-row">

<h3>
Candour
</h3>

<p>
We provide clear advice, including when the right decision is to wait,
restructure, or reconsider.
</p>

</div>


<div class="value-row">

<h3>
Transparency
</h3>

<p>
Fees, structures, risks, and expectations are communicated openly from the start.
</p>

</div>


<div class="value-row">

<h3>
Rigour
</h3>

<p>
Every financing decision begins with proper feasibility analysis and disciplined evaluation.
</p>

</div>


<div class="value-row">

<h3>
Partnership
</h3>

<p>
We remain involved throughout the project lifecycle rather than handing clients
between disconnected providers.
</p>

</div>


<div class="value-row">

<h3>
Access
</h3>

<p>
Professional advisory should support serious promoters and investors across different project sizes.
</p>

</div>
    </div>
  </div>
</section>

<section id="leadership">
  <div class="wrap">
    <div class="section-head reveal">
      <p class="eyebrow">Leadership &amp; Team</p>
      <h2>Advisors in finance, law, and technology.</h2>
    </div>
   <p class="leader-copy reveal">

Omega Capital Advisors is led by professionals with experience across
project finance, banking and loan syndication, real estate transactions,
feasibility analysis, risk management, and capital markets advisory.

</p>
    <div class="leader-grid reveal">
      <div class="leader-card">
        <div class="avatar-ph">PHOTO</div>
        <div class="ph-name">[Director Name]</div>
        <div class="ph-role">[Designation]</div>
        <div class="ph-blurb">Placeholder — insert 3–4 lines on relevant experience, qualifications, and background.</div>
      </div>
      <div class="leader-card">
        <div class="avatar-ph">PHOTO</div>
        <div class="ph-name">[Advisor Name]</div>
        <div class="ph-role">[Designation]</div>
        <div class="ph-blurb">Placeholder — insert 3–4 lines on relevant experience, qualifications, and background.</div>
      </div>
      <div class="leader-card">
        <div class="avatar-ph">PHOTO</div>
        <div class="ph-name">[Advisor Name]</div>
        <div class="ph-role">[Designation]</div>
        <div class="ph-blurb">Placeholder — insert 3–4 lines on relevant experience, qualifications, and background.</div>
      </div>
    </div>
  </div>
</section>

<section class="compliance" id="compliance">
  <div class="wrap">
    <div class="section-head reveal">
      <p class="eyebrow on-dark">Compliance &amp; Licensing</p>
      <h2>Regulatory Information</h2>
      <p class="lede">Omega Capital Advisors is a government-licensed real estate firm and a well-governed institution. Because project financing, syndication, and public-listing work depend on the confidence of banks, cooperatives, and capital-market participants, we maintain disciplined KYC, record-keeping, and transaction-integrity standards as a matter of course. This governance underpins our advisory work rather than defining it — a fuller summary is provided on the Governance page.
</p>
    </div>
<a class="btn btn-yellow" href="https://omegaadvisors.com.np/consult">Licensing & Governance <span class="right"></span></a>  </div>
</section>



@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true
    });
</script>
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