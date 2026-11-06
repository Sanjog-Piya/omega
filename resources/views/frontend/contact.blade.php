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
  .hero h1{ font-size:clamp(34px, 4.6vw, 54px); line-height:1.1; color:var(--paper); margin-top:22px; max-width:16ch; }
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
 
  section{ padding:100px 0; }
  .section-head{ max-width:680px; margin-bottom:44px; }
  .section-head h2{ font-size:clamp(26px, 3vw, 36px); margin-top:16px; }
  .section-head p.lede{ margin-top:16px; color:var(--slate); font-size:16px; max-width:60ch; }
 
  /* ---------- CONTACT DETAILS + FORM ---------- */
  .contact-main{ background:var(--paper); border-bottom:1px solid var(--line); }
  .contact-grid{ display:grid; grid-template-columns:0.85fr 1.15fr; gap:56px; align-items:start; }
 
  .ledger{ border:1px solid var(--line); background:var(--paper-2); }
  .ledger-row{ display:grid; grid-template-columns:150px 1fr; border-bottom:1px solid var(--line); padding:18px 24px; }
  .ledger-row:last-child{ border-bottom:none; }
  .ledger-row .k{ font-family:'IBM Plex Mono', monospace; font-size:11.5px; letter-spacing:0.06em; text-transform:uppercase; color:var(--brass); }
  .ledger-row .v{ font-size:14.5px; color:var(--ink); }
  .ledger-row .v.placeholder{ color:var(--slate); font-style:italic; }
 
  .regions{
    margin-top:28px; border:1px solid var(--line); background:var(--paper-2); padding:26px;
  }
  .regions .eyebrow{ margin-bottom:16px; }
  .region-tags{ display:flex; flex-wrap:wrap; gap:10px; }
  .region-tag{
    font-family:'IBM Plex Mono', monospace; font-size:12px; letter-spacing:0.03em;
    border:1px solid var(--line); background:var(--paper); padding:8px 14px; color:var(--ink);
  }
 
  /* form */
  .form-card{ border:1px solid var(--line); background:var(--paper-2); padding:36px; }
  .form-card .eyebrow{ margin-bottom:6px; }
  .form-card h3{ font-size:20px; margin-top:10px; margin-bottom:24px; }
  .form-row{ display:grid; grid-template-columns:1fr 1fr; gap:18px; margin-bottom:18px; }
  .form-field{ display:flex; flex-direction:column; gap:6px; }
  .form-field.full{ grid-column:1 / -1; }
  .form-field label{
    font-family:'IBM Plex Mono', monospace; font-size:11px; letter-spacing:0.06em;
    text-transform:uppercase; color:var(--slate);
  }
  .form-field input, .form-field select, .form-field textarea{
    font-family:'IBM Plex Sans', sans-serif; font-size:14.5px; color:var(--ink);
    background:var(--paper); border:1px solid var(--line); padding:12px 14px;
    outline:none;
  }
  .form-field input:focus, .form-field select:focus, .form-field textarea:focus{
    border-color:var(--brass);
  }
  .form-field textarea{ resize:vertical; min-height:90px; }
  .consent{ display:flex; align-items:flex-start; gap:10px; margin:20px 0 26px; }
  .consent input{ margin-top:3px; }
  .consent label{ font-size:13px; color:var(--slate); line-height:1.5; }
  .form-submit{
    font-family:'IBM Plex Mono', monospace; font-size:12.5px; letter-spacing:0.06em;
    text-transform:uppercase; padding:15px 26px; border:1px solid var(--ink);
    background:var(--ink); color:var(--paper); cursor:pointer;
    transition:background .2s ease, color .2s ease;
  }
  .form-submit:hover{ background:transparent; color:var(--ink); }
 
  /* ---------- CONSULTATION CTA ---------- */
  .consult{ padding:100px 0; background:var(--navy-deep); color:var(--paper); }
  .consult-panel{
    border:1px solid rgba(239,233,220,0.2); background:rgba(239,233,220,0.03);
    padding:56px; display:grid; grid-template-columns:1.3fr 0.7fr; gap:48px; align-items:center;
  }
  .consult-panel .eyebrow{ margin-bottom:6px; }
  .consult-panel h2{ font-size:clamp(24px,2.8vw,32px); margin-top:14px; color:var(--paper); line-height:1.3; }
  .consult-panel p{ margin-top:16px; color:rgba(239,233,220,0.72); font-size:15.5px; max-width:56ch; }
  .consult-cta{ text-align:right; }
  .btn{
    font-family:'IBM Plex Mono', monospace; font-size:12.5px; letter-spacing:0.06em; text-transform:uppercase;
    padding:15px 24px; text-decoration:none; display:inline-block;
    border:1px solid var(--brass-light); background:var(--brass-light); color:var(--navy-deep);
    transition:background .2s ease, color .2s ease;
  }
  .btn:hover{ background:transparent; color:var(--paper); }
 
  /* ---------- RESPONSIVE ---------- */
  @media (max-width:900px){
    .hero-grid{ grid-template-columns:1fr; }
    .seal-holder{ justify-content:flex-start; padding-top:20px; }
    .contact-grid{ grid-template-columns:1fr; }
    .form-row{ grid-template-columns:1fr; }
    .ledger-row{ grid-template-columns:1fr; gap:4px; }
    .consult-panel{ grid-template-columns:1fr; }
    .consult-cta{ text-align:left; }
  }
  @media (max-width:520px){
    .wrap{ padding:0 20px; }
    section{ padding:72px 0; }
    .hero{ padding-top:96px; }
    .form-card{ padding:26px; }
    .consult-panel{ padding:34px 26px; }
  }
</style>
@section('content')

<section class="hero">

<div class="hero-inner">

<div class="wrap">

<div class="hero-grid">

<div>

<p class="eyebrow on-dark">
Contact Us
</p>


<h1>
Speak with our advisory team.
</h1>


<p class="hero-sub">
Our advisors are available to discuss property transactions,
project financing, feasibility and risk work, execution support,
and public-listing advisory. Initial consultations are complimentary.
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
ADVISORY
</text>

</svg>

</div>


</div>

</div>

</div>



<div class="hero-strip">

<div class="wrap">

<span><b>Free</b> initial consultation</span>

<span><b>Licensed</b> advisory firm</span>

<span><b>Nepal</b> nationwide coverage</span>

<span><b>Response</b> within 1 business day</span>

</div>

</div>


<svg class="contour" viewBox="0 0 1200 60" preserveAspectRatio="none">

<path d="M0,60 L0,40 L100,22 L180,38 L260,10 L340,30 L420,4 L520,32 L600,14 L700,36 L800,8 L900,28 L1000,6 L1100,26 L1200,12 L1200,60 Z" fill="#efe9dc"/>

</svg>


</section>





<!-- CONTACT DETAILS + FORM -->

<section class="contact-main">


<div class="wrap">


<div class="section-head reveal">

<p class="eyebrow">
Get In Touch
</p>


<h2>
Contact details & advisory enquiries.
</h2>


</div>



<div class="contact-grid">



<div class="reveal">


<div class="ledger">


<div class="ledger-row">

<div class="k">
Company
</div>

<div class="v">
Omega Capital Advisors Pvt. Ltd.
</div>

</div>




<div class="ledger-row">

<div class="k">
Registered Office
</div>

<div class="v">
Bhaisepati, Lalitpur, Bagmati Province, Nepal
</div>

</div>




<div class="ledger-row">

<div class="k">
Phone
</div>

<div class="v">
+977-9845963168
</div>

</div>




<div class="ledger-row">

<div class="k">
Email
</div>

<div class="v">
omegacapitaladvisors@gmail.com
</div>

</div>




<div class="ledger-row">

<div class="k">
Website
</div>

<div class="v">
www.omegacapitaladvisors.com
</div>

</div>




<div class="ledger-row">

<div class="k">
Office Hours
</div>

<div class="v">
Sunday to Friday, 9:00 AM – 6:00 PM |
Saturday: by appointment
</div>

</div>




<div class="ledger-row">

<div class="k">
Coverage
</div>

<div class="v">
Licensed to operate across all Metropolitan and
Sub-Metropolitan cities of Nepal.
</div>

</div>



</div>




<div class="regions">


<p class="eyebrow">
Coverage
</p>


<p style="color:var(--slate);">
Inquiries from any Metropolitan and Sub-Metropolitan city
are handled by an assigned advisor.
</p>


</div>



</div>







<div class="reveal">


<div class="form-card">


<p class="eyebrow">
Send An Enquiry
</p>


<h3>
We'll assign the right advisor for your requirement.
</h3>



<form onsubmit="return false;">



<div class="form-row">


<div class="form-field">

<label>
Full Name *
</label>

<input type="text" required>

</div>



<div class="form-field">

<label>
Phone Number *
</label>

<input type="tel" required>

</div>



</div>





<div class="form-row">


<div class="form-field">

<label>
Email Address *
</label>

<input type="email" required>

</div>



<div class="form-field">

<label>
City / Location *
</label>

<input type="text" required>

</div>


</div>





<div class="form-row">


<div class="form-field full">

<label>
Enquiry Type *
</label>


<select required>

<option value="">
Select an option
</option>

<option>
Buy Property
</option>

<option>
Sell Property
</option>

<option>
Investment Advisory
</option>

<option>
Project Financing & Syndication
</option>

<option>
Feasibility & Risk Assessment
</option>

<option>
Project Management
</option>

<option>
Public Listing Advisory
</option>

<option>
General Enquiry
</option>


</select>


</div>


</div>





<div class="form-row">


<div class="form-field full">


<label>
Message (optional, max 500 characters)
</label>


<textarea maxlength="500"></textarea>


</div>


</div>






<div class="consent">


<input type="checkbox" required>


<label>
I have read the Privacy Policy and agree to be contacted by Omega Capital Advisors.
</label>


</div>





<button class="form-submit" type="submit">
Send Enquiry
</button>



</form>


</div>


</div>


</div>


</div>


</section>
<!-- CONSULTATION BOOKING -->
<section class="consult">
  <div class="wrap">
    <div class="consult-panel reveal">
      <div>
        <p class="eyebrow on-dark">Consultation Booking</p>
        <h2>Book a free consultation.</h2>
        <p>Our advisors are available for in-person, phone, and video consultations. To schedule a session, call us directly or submit the contact form. A member of our team will confirm your appointment within one business day.</p>
      </div>
      <div class="consult-cta">
        <a class="btn btn-yellow" href="#">Book a Consultation</a>
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
      entries.forEach(e=>{ if(e.isIntersecting){ e.target.classList.add('in'); io.unobserve(e.target); } });
    }, { threshold:0.12 });
    revealEls.forEach(el=>io.observe(el));
  } else { revealEls.forEach(el=>el.classList.add('in')); }
</script>
@endsection