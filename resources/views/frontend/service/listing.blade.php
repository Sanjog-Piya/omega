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
    font-size:16px;
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
    font-size:clamp(34px, 4.6vw, 54px);
    line-height:1.1;
    color:var(--paper);
    margin-top:22px;
    max-width:18ch;
  }
  .hero-sub{
    max-width:52ch;
    margin-top:22px;
    color:rgba(239,233,220,0.78);
    font-size:16.5px;
  }
  .seal-holder{
    display:flex; justify-content:flex-end; align-items:flex-end;
    padding-bottom:44px;
  }
  .seal{ width:150px; height:150px; opacity:0.94; }
  .seal .ring{ fill:none; stroke:var(--brass-light); }
  .seal .center-txt{ font-family:'Fraunces', serif; fill:var(--paper); font-size:15px; }
  .seal .center-sub{ font-family:'IBM Plex Mono', monospace; fill:var(--brass-light); font-size:7.2px; letter-spacing:1.5px; }

  .hero-strip{ border-top:1px solid rgba(239,233,220,0.16); padding:20px 0; }
  .hero-strip .wrap{
    display:flex; gap:44px; flex-wrap:wrap;
    font-family:'IBM Plex Mono', monospace;
    font-size:12px; color:rgba(239,233,220,0.6); letter-spacing:0.04em;
  }
  .hero-strip span b{ color:var(--brass-light); font-weight:500; }

  .contour{ display:block; width:100%; height:auto; }

  /* ---------- SERVICE BLOCKS ---------- */
  .service{ padding:96px 0; border-bottom:1px solid var(--line); }
  .service.alt{ background:var(--paper-2); }
  .service-grid{
    display:grid;
    grid-template-columns:0.95fr 1.05fr;
    gap:64px;
  }
  .service-num{
    font-family:'Fraunces', serif;
    font-size:15px;
    color:var(--brass);
    letter-spacing:0.02em;
    display:block;
    margin-bottom:14px;
  }
  .service-head h2{
    font-size:clamp(22px, 2.6vw, 30px);
    margin-top:14px;
    line-height:1.28;
  }
  .service-head p.desc{
    margin-top:18px;
    color:var(--slate);
    font-size:15.5px;
    max-width:48ch;
  }
  .fee-line, .note-line{
    margin-top:24px;
    padding:14px 18px;
    border-left:3px solid var(--brass);
    background:rgba(156,122,60,0.07);
    font-size:13.5px;
    color:var(--ink);
    font-family:'IBM Plex Mono', monospace;
  }
  .note-line{ border-left-color:var(--navy); background:rgba(30,42,68,0.05); }

  .service-list{
    list-style:none;
    margin:0; padding:0;
    display:flex; flex-direction:column;
    gap:0;
    border-top:1px solid var(--line);
  }
  .service-list li{
    padding:16px 0 16px 30px;
    position:relative;
    border-bottom:1px solid var(--line);
    font-size:15px;
    color:var(--ink);
  }
  .service-list li::before{
    content:"◆";
    position:absolute; left:0; top:18px;
    font-size:8px;
    color:var(--brass);
  }

  /* ---------- COMPLIANCE ASSURANCE (05) ---------- */
  .compliance{ background:var(--navy-deep); color:var(--paper); padding:96px 0; }
  .compliance .service-num{ color:var(--brass-light); }
  .compliance .service-head p.desc{ color:rgba(239,233,220,0.68); }
  .compliance-grid{ display:grid; grid-template-columns:0.95fr 1.05fr; gap:64px; }
  .ledger{ border:1px solid rgba(239,233,220,0.2); background:rgba(239,233,220,0.03); }
  .ledger-row{
    display:flex; align-items:flex-start; gap:14px;
    padding:18px 24px;
    border-bottom:1px solid rgba(239,233,220,0.14);
    font-size:14.5px;
  }
  .ledger-row:last-child{ border-bottom:none; }
  .ledger-row .mark{
    font-family:'IBM Plex Mono', monospace;
    color:var(--brass-light);
    font-size:12px; flex-shrink:0; margin-top:2px;
  }

  /* ---------- FEE TRANSPARENCY ---------- */
  .fees{ padding:100px 0; background:var(--paper); text-align:left; }
  .fees-panel{
    border:1px solid var(--line);
    background:var(--paper-2);
    padding:56px;
    display:grid;
    grid-template-columns:1.3fr 0.7fr;
    gap:48px;
    align-items:center;
  }
  .fees-panel h2{ font-size:clamp(24px,2.8vw,32px); margin-top:14px; line-height:1.3; }
  .fees-panel p{ margin-top:16px; color:var(--slate); font-size:15.5px; max-width:56ch; }
  .fees-cta{ text-align:right; }
  .btn{
    font-family:'IBM Plex Mono', monospace;
    font-size:12.5px; letter-spacing:0.06em; text-transform:uppercase;
    padding:15px 24px; text-decoration:none; display:inline-block;
    border:1px solid var(--ink);
    background:white; color:var(--paper);
    transition:background .2s ease, color .2s ease, border-color .2s ease;
  }
  .btn:hover{ background:transparent; color:var(--ink); }

  /* ---------- RESPONSIVE ---------- */
  @media (max-width:900px){
    .hero-grid{ grid-template-columns:1fr; }
    .seal-holder{ justify-content:flex-start; padding-top:20px; }
    .service-grid, .compliance-grid, .fees-panel{ grid-template-columns:1fr; }
    .fees-cta{ text-align:left; }
  }
  @media (max-width:520px){
    .wrap{ padding:0 20px; }
    .service{ padding:64px 0; }
    .hero{ padding-top:96px; }
    .fees-panel{ padding:34px 26px; }
  }
</style>

@section('content')



@section('content')

<section class="hero">
  <div class="hero-inner">
    <div class="wrap">
      <div class="hero-grid">
        <div>
          <p class="eyebrow on-dark">Our Services</p>
          <h1>Real Estate. Project Financing. Risk & Advisory. Delivery. Listing.</h1>

          <p class="hero-sub">
            Omega Capital Advisors works across two connected pillars — real estate and project capital.
            Many clients engage us for one and grow into the other; the value is in the continuity between them.
            Every engagement is handled by a licensed, well-governed firm, with fees and terms disclosed up front.
          </p>
        </div>

        <div class="seal-holder">
          <svg class="seal" viewBox="0 0 200 200">
            <circle class="ring" cx="100" cy="100" r="92" stroke-width="1"/>
            <circle class="ring" cx="100" cy="100" r="80" stroke-width="0.6"/>
            <text x="100" y="94" text-anchor="middle" class="center-txt">Ω</text>
            <text x="100" y="116" text-anchor="middle" class="center-sub">ADVISORY</text>
          </svg>
        </div>

      </div>
    </div>
  </div>

  <div class="hero-strip">
    <div class="wrap">
      <span><b>2</b> business pillars</span>
      <span><b>6</b> core services</span>
      <span><b>Licensed</b> advisory</span>
      <span><b>100%</b> disclosed fees</span>
    </div>
  </div>

  <svg class="contour" viewBox="0 0 1200 60">
    <path d="M0,60 L0,40 L100,22 L180,38 L260,10 L340,30 L420,4 L520,32 L600,14 L700,36 L800,8 L900,28 L1000,6 L1100,26 L1200,12 L1200,60 Z" fill="#efe9dc"/>
  </svg>
</section>


<!-- PILLAR A -->
<section class="service">
<div class="wrap service-grid">

<div class="service-head reveal">
<span class="service-num" style="    font-weight: 800;
    background: #f7dc8b;
    width: fit-content;
    padding: 0 50px;
    color: #000;     font-size: 30px;">PILLAR A</span>

<p class="eyebrow">Real Estate</p>

<h2>Property & Land Advisory</h2>

<p class="desc">
Buy and sell land, houses, apartments, and commercial property — properly.
Whether you are acquiring a site for development or transacting a completed property,
we handle the process end to end with verified information and professional diligence.
</p>

</div>

<ul class="service-list reveal">

<li>
<strong>01. Property & Land Brokerage</strong><br>
Access to verified property and land inventory across Metropolitan and Sub-Metropolitan cities
</li>

<li>
Dedicated advisor from search through registration
</li>

<li>
Independent valuation guidance to establish fair market pricing
</li>

<li>
Due diligence: land registration checks, lalpurja verification, ownership history
</li>

<li>
Coordination with banks for mortgage and home-loan processing
</li>

<li>
End-to-end management through to Land Revenue Office registration
</li>

<li>
<div class="fee-line">
Advisory fees disclosed upfront. No hidden charges.
</div>
</li>

</ul>

</div>
</section>



<!-- INVESTMENT -->
<section class="service alt">

<div class="wrap service-grid">

<div class="service-head reveal">

<p class="eyebrow">Investment Advisory</p>

<h2>
Data-backed guidance on where and how to deploy property capital.
</h2>

<p class="desc">
Objective, research-based advice for residential and commercial property investment,
grounded in our verified view of the market.
</p>

</div>


<ul class="service-list reveal">

<li>Market analysis for target locations</li>

<li>Yield analysis for rental and resale strategies</li>

<li>Identification of emerging growth corridors (infrastructure and urban expansion)</li>

<li>Portfolio review for existing property investors</li>

<li>Commercial investment guidance: retail, office, hospitality</li>

</ul>

</div>

</section>


<!-- PILLAR B -->

<section class="compliance">

<div class="wrap compliance-grid">

<div class="service-head reveal">

<span class="service-num" style="
    font-weight:800;
    background:#f7dc8b;
    width:fit-content;
    padding:0 50px;
    color:#000;
    font-size:30px;">
    PILLAR B
</span>


<p class="eyebrow on-dark">
Project Capital Advisory
</p>


<h2 style="color:var(--paper);">
From Capital Structuring to Market Readiness
</h2>


<p class="desc">
We support developers and promoters across the complete project lifecycle —
from financing strategy and feasibility assessment to execution monitoring
and public market preparation.
</p>


</div>



<div class="ledger reveal">


<div class="ledger-row">

<span class="mark">◆</span>

<span>
<strong>03. Project Financing & Loan Syndication</strong><br>
The right capital, structured and arranged. We assess project capital needs,
structure financing, and syndicate loans across our network of banks and cooperatives.
</span>

</div>



<div class="ledger-row">

<span class="mark">◆</span>

<span>
<strong>04. Project Feasibility & Risk Assessment</strong><br>
Independent, evidence-based feasibility and risk analysis enabling promoters
and lenders to make confident investment decisions.
</span>

</div>



<div class="ledger-row">

<span class="mark">◆</span>

<span>
<strong>05. Project Management & Execution Advisory</strong><br>
Keeping projects on track after financing closes through stakeholder coordination,
progress monitoring, cost oversight and structured handover.
</span>

</div>



<div class="ledger-row">

<span class="mark">◆</span>

<span>
<strong>06. Public Listing Advisory</strong><br>
Helping project-based businesses prepare for public capital through IPO readiness,
governance improvement and capital raising strategy.
</span>

</div>


</div>

</div>

</section>





<!-- 03 PROJECT FINANCING -->

<section class="service">

<div class="wrap service-grid">

<div class="service-head reveal">


<span class="service-num">
03
</span>


<p class="eyebrow">
Project Financing & Loan Syndication
</p>


<h2>
The right capital, structured and arranged.
</h2>


<p class="desc">
We assess a project's capital requirements, structure the financing,
and coordinate with banks and financial institutions to secure suitable funding.
</p>


</div>



<ul class="service-list reveal">


<li>
Capital structuring: debt/equity mix, tenor, and terms suited to the project
</li>


<li>
Loan syndication across multiple banks and cooperatives
</li>


<li>
Preparation of lender-ready information memoranda and financial models
</li>


<li>
Negotiation support on pricing, covenants and security requirements
</li>


<li>
Coordination between promoters, lenders and stakeholders through disbursement
</li>


<li>
Refinancing and restructuring advisory for existing project debt
</li>


</ul>


</div>

</section>





<!-- 04 FEASIBILITY -->

<section class="service alt">

<div class="wrap service-grid">


<div class="service-head reveal">


<span class="service-num">
04
</span>


<p class="eyebrow">
Project Feasibility & Risk Assessment
</p>


<h2>
Know the risks before the capital moves.
</h2>


<p class="desc">
Independent feasibility and risk assessment that helps promoters,
investors and lenders evaluate opportunities with clarity.
</p>


</div>



<ul class="service-list reveal">


<li>
Technical and financial feasibility studies
</li>


<li>
Market and demand assessment
</li>


<li>
Project risk identification, rating and mitigation planning
</li>


<li>
Sensitivity and scenario analysis on returns and financing capacity
</li>


<li>
Regulatory and approvals-pathway review
</li>


<li>
Independent second opinions for lenders and investors
</li>


</ul>


</div>

</section>





<!-- 05 PROJECT MANAGEMENT -->

<section class="service">

<div class="wrap service-grid">


<div class="service-head reveal">


<span class="service-num">
05
</span>


<p class="eyebrow">
Project Management & Execution Advisory
</p>


<h2>
From groundbreaking to handover.
</h2>


<p class="desc">
We help maintain project momentum after financing closes by coordinating
stakeholders and monitoring delivery through completion.
</p>


</div>



<ul class="service-list reveal">


<li>
Stakeholder coordination between promoters, contractors and lenders
</li>


<li>
Progress monitoring against milestones and drawdown schedules
</li>


<li>
Budget and cost oversight throughout the construction lifecycle
</li>


<li>
Documentation management for lenders and authorities
</li>


<li>
Completion, commissioning and structured handover support
</li>


</ul>


</div>

</section>





<!-- 06 PUBLIC LISTING -->

<section class="service alt">

<div class="wrap service-grid">


<div class="service-head reveal">


<span class="service-num">
06
</span>


<p class="eyebrow">
Public Listing Advisory
</p>


<h2>
The pathway from private project to public capital.
</h2>


<p class="desc">
For promoters whose ambitions extend to capital markets,
we advise on the journey from project-based business to IPO readiness.
</p>


</div>



<ul class="service-list reveal">


<li>
IPO-readiness assessment and gap analysis
</li>


<li>
Guidance on governance, structure and disclosure expectations
</li>


<li>
Coordination with issue managers, auditors and legal counsel
</li>


<li>
Support through the pre-listing preparation timeline
</li>


<li>
Advisory on capital-raising strategy and timing
</li>


<li>
Public-listing advisory delivered in coordination with licensed issue managers
and relevant market participants
</li>


</ul>


</div>

</section>


<section class="fees">

<div class="wrap">

<div class="fees-panel reveal">

<div>

<p class="eyebrow">
Fees — Transparency Statement
</p>


<h2>
Every fee disclosed before engagement.
</h2>


<p>
Omega Capital Advisors operates on a disclosed-fee basis.
All advisory fees and commissions are presented before any service agreement is signed.
We do not charge undisclosed commissions or accept third-party payments that create conflicts of interest.
</p>


<p>
Fee structures are available on inquiry and are set out in every signed engagement.
</p>

</div>


<div class="fees-cta">

<a href="#" class="btn btn-yellow">
Request Fee Structure
</a>

</div>


</div>

</div>

</section>


@endsection

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
