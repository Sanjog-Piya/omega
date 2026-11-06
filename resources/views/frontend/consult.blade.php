@extends('frontend.layouts.app')

<style>
  :root{
    --ink:#14171f; --navy:#1e2a44; --navy-deep:#12151c;
    --paper:#efe9dc; --paper-2:#e6ddc9;
    --brass:#9c7a3c; --brass-light:#c7a463; --brick:#8c3d2e;
    --slate:#5b6472; --line: rgba(20,23,31,0.14); --max: 1160px;
  }
  *{ box-sizing:border-box; }
  html{ scroll-behavior:smooth; }
  body{
    margin:0; background:var(--paper); color:var(--ink);
  
  }
  h1,h2,h3{ font-weight:500; margin:0; letter-spacing:-0.01em; }
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
  .hero-sub{ max-width:50ch; margin-top:22px; color:rgba(239,233,220,0.78); font-size:16.5px; }
  .seal-holder{ display:flex; justify-content:flex-end; align-items:flex-end; padding-bottom:44px; }
  .seal{ width:150px; height:150px; opacity:0.94; }
  .seal .ring{ fill:none; stroke:var(--brass-light); }
  .seal .center-txt{ font-family:'Fraunces', serif; fill:var(--paper); font-size:15px; }
  .seal .center-sub{ font-family:'IBM Plex Mono', monospace; fill:var(--brass-light); font-size:7.2px; letter-spacing:1.5px; }
  .hero-strip{ border-top:1px solid rgba(239,233,220,0.16); padding:20px 0; }
  .hero-strip .wrap{ display:flex; gap:44px; flex-wrap:wrap; font-family:'IBM Plex Mono', monospace; font-size:12px; color:rgba(239,233,220,0.6); letter-spacing:0.04em; }
  .hero-strip span b{ color:var(--brass-light); font-weight:500; }
  .contour{ display:block; width:100%; height:auto; }
 
  section{ padding:96px 0; }
  .section-head{ max-width:680px; margin-bottom:44px; }
  .section-head h2{ font-size:clamp(26px, 3vw, 36px); margin-top:16px; }
  .section-head p.lede{ margin-top:16px; color:var(--slate); font-size:16px; max-width:60ch; }
 
  /* ---------- CONSULTATION FORMATS ---------- */
  .formats{ background:var(--paper); border-bottom:1px solid var(--line); }
  .format-grid{ display:grid; grid-template-columns:repeat(3,1fr); gap:1px; background:var(--line); border:1px solid var(--line); }
  .format-card{ background:var(--paper-2); padding:36px 32px; }
  .format-card .tag{ font-family:'IBM Plex Mono', monospace; font-size:11.5px; letter-spacing:0.08em; text-transform:uppercase; color:var(--brass); }
  .format-card h3{ font-size:21px; margin-top:12px; margin-bottom:10px; }
  .format-card p{ font-size:14.5px; color:var(--slate); margin:0; }
 
  /* ---------- HOW IT WORKS ---------- */
  .steps{ background:var(--paper-2); border-bottom:1px solid var(--line); }
  .step-grid{ display:grid; grid-template-columns:repeat(4,1fr); gap:1px; background:var(--line); border:1px solid var(--line); }
  .step-card{ background:var(--paper); padding:30px 26px; }
  .step-card .num{ font-family:'Fraunces', serif; font-size:26px; color:var(--brass); display:block; margin-bottom:12px; }
  .step-card h3{ font-size:16.5px; margin-bottom:8px; line-height:1.3; }
  .step-card p{ font-size:13.5px; color:var(--slate); margin:0; }
 
  /* ---------- BOOKING FORM + SIDEBAR ---------- */
  .book{ background:var(--paper); }
  .book-grid{ display:grid; grid-template-columns:1.15fr 0.85fr; gap:56px; align-items:start; }
 
  .form-card{ border:1px solid var(--line); background:var(--paper-2); padding:40px; }
  .form-card .eyebrow{ margin-bottom:6px; }
  .form-card h3{ font-size:22px; margin-top:10px; margin-bottom:28px; }
  .form-row{ display:grid; grid-template-columns:1fr 1fr; gap:18px; margin-bottom:18px;
  }
  .form-field {
    display: flex;
    flex-direction: column;
    gap: 6px;
    width: 100%;
}
  .form-field.full{ grid-column:1 / -1; }
  .form-field label{
    font-family:'IBM Plex Mono', monospace; font-size:11px; letter-spacing:0.06em;
    text-transform:uppercase; color:var(--slate);
  }
  .form-field input, .form-field select, .form-field textarea{
    font-family:'IBM Plex Sans', sans-serif; font-size:14.5px; color:var(--ink);
    background:var(--paper); border:1px solid var(--line); padding:12px 14px; outline:none;
  }
  .form-field input:focus, .form-field select:focus, .form-field textarea:focus{ border-color:var(--brass); }
  .form-field textarea{ resize:vertical; min-height:90px; }
 
  .format-toggle{ display:flex; gap:10px; flex-wrap:wrap; }
  .format-toggle input{ display:none; }
  .format-toggle label{
    font-family:'IBM Plex Mono', monospace; font-size:12.5px; letter-spacing:0.03em;
    padding:11px 18px; border:1px solid var(--line); background:var(--paper); color:var(--ink);
    cursor:pointer; text-transform:none; transition:background .15s ease, border-color .15s ease, color .15s ease;
  }
  .format-toggle input:checked + label{ background:var(--ink); border-color:var(--ink); color:var(--paper); }
 
  .consent{ display:flex; align-items:flex-start; gap:10px; margin:22px 0 26px; }
  .consent input{ margin-top:3px; }
  .consent label{ font-size:13px; color:var(--slate); line-height:1.5; }
  .form-submit{
    font-family:'IBM Plex Mono', monospace; font-size:12.5px; letter-spacing:0.06em;
    text-transform:uppercase; padding:15px 28px; border:1px solid var(--ink);
    background:var(--ink); color:var(--paper); cursor:pointer;
    transition:background .2s ease, color .2s ease;
  }
  .form-submit:hover{ background:transparent; color:var(--ink); }
 
  /* sidebar */
  .side-panel{ border:1px solid var(--line); background:var(--paper-2); padding:32px; margin-bottom:24px; }
  .side-panel .eyebrow{ margin-bottom:14px; }
  .side-list{ list-style:none; margin:0; padding:0; }
  .side-list li{
    padding:12px 0; border-top:1px solid var(--line); font-size:14px; display:flex; justify-content:space-between; gap:12px;
  }
  .side-list li:first-child{ border-top:none; }
  .side-list li span:first-child{ color:var(--slate); }
  .side-list li span:last-child{ color:var(--ink); text-align:right; }
 
  .region-tags{ display:flex; flex-wrap:wrap; gap:8px; margin-top:14px; }
  .call-  font-family:'IBM Plex Mono', monospace; font-size:11.5px; letter-spacing:0.03em;
    border:1px solid var(--line); background:var(--paper); padding:7px 12px; color:var(--ink);
  }
 
  .
  panel{
    background:var(--navy-deep); color:var(--paper); padding:32px; border:1px solid rgba(239,233,220,0.16);
  }
  .call-panel .eyebrow{ margin-bottom:10px; }
  .call-panel p{ font-size:14px; color:rgba(239,233,220,0.72); margin:0 0 18px; }
  .call-panel .btn{
    
            display: flex !important;
    align-items: center;
    justify-content: center;
     font-size:12px; letter-spacing:0.06em; text-transform:uppercase;
    padding:13px 20px; display:inline-block; border:1px solid var(--brass-light);
    background:var(--brass-light); color:var(--navy-deep); text-decoration:none;
  }
 
  /* ---------- RESPONSIVE ---------- */
  @media (max-width:900px){
    .hero-grid{ grid-template-columns:1fr; }
    .seal-holder{ justify-content:flex-start; padding-top:20px; }
    .format-grid{ grid-template-columns:1fr; }
    .step-grid{ grid-template-columns:1fr 1fr; }
    .book-grid{ grid-template-columns:1fr; }
    .form-row{ grid-template-columns:1fr; }
  }
  @media (max-width:520px){
    .wrap{ padding:0 20px; }
    section{ padding:64px 0; }
    .hero{ padding-top:96px; }
    .step-grid{ grid-template-columns:1fr; }
    .form-card{ padding:26px; }
  }
</style>@section('content')

<section class="hero">
  <div class="hero-inner">
    <div class="wrap">
      <div class="hero-grid">
        <div>
          <p class="eyebrow on-dark">Book a Consultation</p>
          <h1>Speak with a licensed advisor — free of charge.</h1>
          <p class="hero-sub">Our advisors are available for in-person, phone, and video consultations. Submit your details below and a member of our team will confirm your appointment within one business day.</p>
        </div>
        <div class="seal-holder">
          <svg class="seal" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
            <circle class="ring" cx="100" cy="100" r="92" stroke-width="1"/>
            <circle class="ring" cx="100" cy="100" r="80" stroke-width="0.6"/>
            <text x="100" y="94" text-anchor="middle" class="center-txt">Ω</text>
            <text x="100" y="116" text-anchor="middle" class="center-sub">VERIFIED BROKER</text>
          </svg>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-strip">
    <div class="wrap">
      <span><b>Free</b> initial consultation</span>
      <span><b>3</b> consultation formats</span>
      <span><b>1 business day</b> response time</span>
      <span><b>6</b> regional offices</span>
    </div>
  </div>
  <svg class="contour" viewBox="0 0 1200 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,60 L0,40 L100,22 L180,38 L260,10 L340,30 L420,4 L520,32 L600,14 L700,36 L800,8 L900,28 L1000,6 L1100,26 L1200,12 L1200,60 Z" fill="#efe9dc"/>
  </svg>
</section>
 
<!-- CONSULTATION FORMATS -->
<section class="formats">
  <div class="wrap">
    <div class="section-head reveal">
      <p class="eyebrow">Consultation Formats</p>
      <h2>Choose the way that works best for you.</h2>
    </div>
    <div class="format-grid reveal">
      <div class="format-card">
        <span class="tag">In-Person</span>
        <h3>Meet at a Regional Office</h3>
        <p>Sit down with a locally assigned advisor at one of our offices across Kathmandu Valley, Pokhara, Chitwan, Butwal, Biratnagar, or Dharan.</p>
      </div>
      <div class="format-card">
        <span class="tag">Phone</span>
        <h3>A Direct Call</h3>
        <p>Speak with an advisor by phone — ideal for an initial conversation about your buying, selling, or investment needs.</p>
      </div>
      <div class="format-card">
        <span class="tag">Video</span>
        <h3>Face-to-Face, Remotely</h3>
        <p>Book a video consultation from anywhere in Nepal or abroad — well suited to overseas buyers and investors.</p>
      </div>
    </div>
  </div>
</section>
 
<!-- HOW IT WORKS -->
<section class="steps">
  <div class="wrap">
    <div class="section-head reveal">
      <p class="eyebrow">How It Works</p>
      <h2>From request to confirmed appointment.</h2>
    </div>
    <div class="step-grid reveal">
      <div class="step-card">
        <span class="num">01</span>
        <h3>Submit Your Request</h3>
        <p>Complete the booking form with your details and preferred consultation format.</p>
      </div>
      <div class="step-card">
        <span class="num">02</span>
        <h3>Advisor Assigned</h3>
        <p>A licensed advisor relevant to your query type and location is assigned to your request.</p>
      </div>
      <div class="step-card">
        <span class="num">03</span>
        <h3>Appointment Confirmed</h3>
        <p>We confirm your appointment time within one business day, by phone or email.</p>
      </div>
      <div class="step-card">
        <span class="num">04</span>
        <h3>Consultation Held</h3>
        <p>Meet your advisor in person, by phone, or by video — at no cost for the initial session.</p>
      </div>
    </div>
  </div>
</section>
 
<!-- BOOKING FORM -->
<section class="book">
  <div class="wrap">
    <div class="section-head reveal">
      <p class="eyebrow">Request an Appointment</p>
      <h2>Tell us a little about what you need.</h2>
    </div>
    <div class="book-grid">
      <div class="reveal">
        <div class="form-card">
          <p class="eyebrow">Consultation Details</p>
          <h3>Complimentary initial consultation</h3>
          <form onsubmit="return false;">
            <div class="form-row">
              <div class="form-field">
                <label for="bname">Full Name *</label>
                <input id="bname" type="text" required>
              </div>
              <div class="form-field">
                <label for="bphone">Phone Number *</label>
                <input id="bphone" type="tel" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-field">
                <label for="bemail">Email Address *</label>
                <input id="bemail" type="email" required>
              </div>
              <div class="form-field">
                <label for="bcity">City / Location *</label>
                <input id="bcity" type="text" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-field full">
                <label for="bquery">Query Type *</label>
                <select id="bquery" required>
                  <option value="">Select an option</option>
                  <option>Buy Property</option>
                  <option>Sell Property</option>
                  <option>Investment Advisory</option>
                  <option>Developer Projects</option>
                  <option>General Enquiry</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-field full">
                <label>Preferred Format *</label>
                <div class="format-toggle">
                  <input type="radio" id="fmt-inperson" name="format" value="In-Person" checked>
                  <label for="fmt-inperson">In-Person</label>
                  <input type="radio" id="fmt-phone" name="format" value="Phone">
                  <label for="fmt-phone">Phone</label>
                  <input type="radio" id="fmt-video" name="format" value="Video">
                  <label for="fmt-video">Video</label>
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-field">
                <label for="bdate">Preferred Date</label>
                <input id="bdate" type="date">
              </div>
              <div class="form-field">
                <label for="btime">Preferred Time</label>
                <input id="btime" type="time">
              </div>
            </div>
            <div class="form-row">
              <div class="form-field full">
                <label for="bmessage">Message (optional, max 500 characters)</label>
                <textarea id="bmessage" maxlength="500"></textarea>
              </div>
            </div>
            <div class="consent">
              <input type="checkbox" id="bconsent" required>
              <label for="bconsent">I confirm that I have read the Privacy Policy and agree to be contacted by Omega Capital Advisors regarding this consultation request.</label>
            </div>
            <button class="form-submit" type="submit">Request a Consultation</button>
          </form>
        </div>
      </div>
 
      <div class="reveal">
        <div class="side-panel">
          <p class="eyebrow">Office Hours</p>
          <ul class="side-list">
            <li><span>Sunday–Friday</span><span>9:00 AM–6:00 PM</span></li>
            <li><span>Saturday</span><span>By appointment</span></li>
            <li><span>Response time</span><span>Within 1 business day</span></li>
          </ul>
        </div>
 
        <div class="side-panel">
          <p class="eyebrow">Regional Offices</p>
          <p style="font-size:14px; color:var(--slate); margin:0;">In-person consultations are available at the following locations. We'll confirm the nearest office once we've reviewed your request.</p>
          <div class="region-tags">
            <span class="region-tag">Kathmandu Valley</span>
            <span class="region-tag">Pokhara</span>
            <span class="region-tag">Chitwan (Bharatpur)</span>
            <span class="region-tag">Butwal</span>
            <span class="region-tag">Biratnagar</span>
            <span class="region-tag">Dharan</span>
          </div>
        </div>
 
      
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