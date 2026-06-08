<?php
$page_title = 'Chapters | ACM-W India';
$active_page = 'chapters';
$base_path = '../';
include '../header.php';
?>
<div id="main">

<div class="banner-container">
  <div>
    <div>
                <div class="acm-banner-container" style="background: url('https://acmweurope.acm.org/wp-content/uploads/2020/11/bannerMap-3-1024x195.png') no-repeat center 0 / 130% #000; background-size: cover;">
        <div class="gradient-wrapper"></div>
        <div class="overlay"></div>
        <div class="row">
          <div class="columns large-12 medium-12 banner-content">
            <p class="banner-heading">
              <small>ACM-W India</small>
            Supporting, celebrating and advocating for Women in Computing</p>
            <p>ACM-W India Council on Women in Computing</p>
          </div>
        </div>
      </div>
    </div>
              </div>
  </div>
  
  <div class="row" style="background-color: white; padding-top: 10px;">
    <div class="columns small-12">
      <ul class="breadcrumbs">
        <ul id="crumbs" class="breadcrumbs"><li><a href="../index.php">Home</a></li><li>Newsletter</li></ul>      </ul>
    </div>
  </div>
    <div class="article" id="maincontent">
    <article class="has-edit-button" id="SkipTarget" tabindex="-1">
      <div class="row">
        <div class="columns large-9 medium-9 small-9 zone-1">
          <div class="row">
            <div class="columns small-12">
                            <div class="post">
                <div class="entrytext">

        <!-- Map Section -->
        <section class="home-section">
          <div class="section-tag">Chapters Map</div>
          <h1 class="section-heading">ACM-W India Chapters</h1>
          <p>ACM-W India is proud to have student chapters across many cities and states. Hover over the dots on the map to see chapter locations. Each chapter builds a local community where women in computing can connect, learn, and grow.</p>

          <div class="chapters-summary">
            <div class="chapter-stat-card"><span class="csn">25+</span><span class="csl">Active Student Chapters</span></div>
            <div class="chapter-stat-card"><span class="csn">18</span><span class="csl">States Represented</span></div>
            <div class="chapter-stat-card"><span class="csn">5000+</span><span class="csl">Chapter Members</span></div>
          </div>

          <div class="map-legend">
            <span><span class="dot"></span> ACM-W India Chapter City</span>
          </div>

          <!-- India SVG Map with chapter dots -->
          <div class="india-map-wrap" id="india-map-wrap">
            <div class="map-tooltip" id="map-tooltip"></div>
            <svg viewBox="0 0 550 650" xmlns="http://www.w3.org/2000/svg" aria-label="Map of India showing ACM-W India chapter locations">
              <!-- Simplified India outline -->
              <path class="india-path" d="
                M 230 40 L 260 35 L 300 40 L 330 55 L 360 60 L 390 70 L 400 90 L 410 110
                L 420 140 L 415 165 L 430 185 L 440 210 L 450 235 L 445 260 L 460 280
                L 470 300 L 465 325 L 455 345 L 440 365 L 425 390 L 400 415 L 380 440
                L 360 460 L 335 480 L 310 500 L 290 520 L 275 540 L 265 555 L 255 540
                L 240 520 L 220 500 L 200 480 L 180 460 L 160 440 L 140 415 L 125 390
                L 110 365 L 100 345 L 90 320 L 95 295 L 85 270 L 80 245 L 90 220
                L 100 195 L 95 170 L 105 145 L 115 120 L 130 95 L 150 75 L 175 60
                L 200 48 Z
              "></path>
              <!-- North-East states simplified -->
              <path class="india-path" d="M 400 90 L 440 80 L 470 85 L 490 100 L 480 130 L 460 140 L 440 140 L 420 140 Z"></path>
              <!-- Andaman simplified -->
              <ellipse class="india-path" cx="490" cy="450" rx="14" ry="35"></ellipse>

              <!-- Chapter Dots: (cx, cy, city-name) -->
              <!-- New Delhi -->
              <g class="chapter-dot" data-city="New Delhi" data-institution="Delhi University ACM-W Chapter">
                <circle cx="220" cy="145" r="9"></circle>
                <text x="220" y="145">ND</text>
              </g>
              <!-- Mumbai -->
              <g class="chapter-dot" data-city="Mumbai" data-institution="Multiple Chapters – Mumbai">
                <circle cx="135" cy="310" r="9"></circle>
                <text x="135" y="310">MU</text>
              </g>
              <!-- Bengaluru -->
              <g class="chapter-dot" data-city="Bengaluru" data-institution="Multiple Chapters – Bengaluru">
                <circle cx="215" cy="440" r="9"></circle>
                <text x="215" y="440">BL</text>
              </g>
              <!-- Chennai -->
              <g class="chapter-dot" data-city="Chennai" data-institution="Anna University ACM-W Chapter">
                <circle cx="265" cy="475" r="9"></circle>
                <text x="265" y="475">CH</text>
              </g>
              <!-- Hyderabad -->
              <g class="chapter-dot" data-city="Hyderabad" data-institution="Multiple Chapters – Hyderabad">
                <circle cx="240" cy="385" r="9"></circle>
                <text x="240" y="385">HY</text>
              </g>
              <!-- Pune -->
              <g class="chapter-dot" data-city="Pune" data-institution="Multiple Chapters – Pune">
                <circle cx="160" cy="325" r="9"></circle>
                <text x="160" y="325">PU</text>
              </g>
              <!-- Kolkata -->
              <g class="chapter-dot" data-city="Kolkata" data-institution="Multiple Chapters – Kolkata">
                <circle cx="365" cy="255" r="9"></circle>
                <text x="365" y="255">KO</text>
              </g>
              <!-- Ahmedabad -->
              <g class="chapter-dot" data-city="Ahmedabad" data-institution="Multiple Chapters – Gujarat">
                <circle cx="130" cy="230" r="9"></circle>
                <text x="130" y="230">AH</text>
              </g>
              <!-- Jaipur -->
              <g class="chapter-dot" data-city="Jaipur" data-institution="Multiple Chapters – Rajasthan">
                <circle cx="180" cy="175" r="9"></circle>
                <text x="180" y="175">JA</text>
              </g>
              <!-- Bhopal -->
              <g class="chapter-dot" data-city="Bhopal" data-institution="MANIT ACM-W Chapter">
                <circle cx="215" cy="255" r="9"></circle>
                <text x="215" y="255">BH</text>
              </g>
              <!-- Kanpur -->
              <g class="chapter-dot" data-city="Kanpur" data-institution="IIT Kanpur ACM-W Chapter">
                <circle cx="255" cy="185" r="9"></circle>
                <text x="255" y="185">KA</text>
              </g>
              <!-- Coimbatore -->
              <g class="chapter-dot" data-city="Coimbatore" data-institution="PSG ACM-W Chapter">
                <circle cx="220" cy="480" r="9"></circle>
                <text x="220" y="480">CB</text>
              </g>
              <!-- Thiruvananthapuram -->
              <g class="chapter-dot" data-city="Thiruvananthapuram" data-institution="Kerala Chapters">
                <circle cx="210" cy="520" r="9"></circle>
                <text x="210" y="520">TH</text>
              </g>
            </svg>
          </div>

          <p style="font-size:.8rem;color:var(--text-muted);text-align:center;"><em>Map is indicative. Actual chapter locations may vary. Contact us for the full updated list.</em></p>
        </section>

        <!-- Student Chapters Table -->
        <section class="home-section">
          <div class="section-tag">Student Chapters</div>
          <h2 class="section-heading">Student Chapters</h2>
          <p style="font-size:.9rem;color:var(--text-muted);margin-bottom:18px;">ACM-W India student chapters are formed at colleges and universities across India and are run by students under faculty supervision.</p>
          <table class="data-table">
            <thead>
              <tr><th>Chapter Name</th><th>Institution</th><th>City</th><th>State</th><th>Est.</th></tr>
            </thead>
            <tbody>
              <tr><td>[Chapter Name]</td><td>[Institution]</td><td>[City]</td><td>[State]</td><td>[Year]</td></tr>
              <tr><td>[Chapter Name]</td><td>[Institution]</td><td>[City]</td><td>[State]</td><td>[Year]</td></tr>
              <tr><td>[Chapter Name]</td><td>[Institution]</td><td>[City]</td><td>[State]</td><td>[Year]</td></tr>
              <tr><td>[Chapter Name]</td><td>[Institution]</td><td>[City]</td><td>[State]</td><td>[Year]</td></tr>
              <tr><td>[Chapter Name]</td><td>[Institution]</td><td>[City]</td><td>[State]</td><td>[Year]</td></tr>
            </tbody>
          </table>
          <p style="font-size:.78rem;color:var(--text-muted);margin-top:12px;"><i class="fa fa-info-circle" style="color:var(--blue-mid);"></i> &nbsp;Replace placeholders with actual chapter names from <a href="https://www.acm.org/chapters/find-a-chapter" target="_blank">ACM's chapter directory</a>.</p>
        </section>

        <!-- Professional Chapters -->
        <section class="home-section">
          <div class="section-tag">Professional Chapters</div>
          <h2 class="section-heading">Professional Chapters</h2>
          <p>ACM-W also supports professional-level chapters for working women in computing. As of 2026, ACM-W India is actively encouraging the formation of professional chapters in major tech hubs.</p>
          <div style="background:#f0f6ff;border:1px solid var(--border);border-radius:var(--radius);padding:20px 24px;margin-top:16px;">
            <p style="font-size:.9rem;color:var(--blue-dark);font-weight:600;margin-bottom:8px;"><i class="fa fa-info-circle"></i> &nbsp;Interested in starting a professional chapter in your city?</p>
            <p style="font-size:.87rem;color:var(--text-muted);margin-bottom:14px;">ACM-W welcomes proposals from professionals who wish to build a local community of women in computing. Professional chapters host networking events, speaker series, and mentorship programmes.</p>
            <a href="https://www.acm.org/chapters/start-chapter" target="_blank" class="btn btn-primary btn-sm">Learn How to Start a Chapter →</a>
          </div>
        </section>

        <!-- How to Apply -->
        <section class="home-section">
          <div class="section-tag">How to Apply</div>
          <h2 class="section-heading">How to Start an ACM-W Chapter</h2>
          <p style="font-size:.9rem;color:var(--text-muted);margin-bottom:22px;">Starting an ACM-W chapter at your institution is a rewarding way to build a local community. Follow these steps:</p>

          <div class="accordion">
            <div class="accordion-item">
              <button class="accordion-btn" id="acc1"><span>Step 1: Check eligibility and gather interest</span> <i class="fa fa-chevron-down"></i></button>
              <div class="accordion-body">
                <p>Your institution needs at least one faculty member willing to serve as Chapter Advisor, and a group of students interested in computing. Reach out to fellow students and faculty to gauge interest.</p>
                <p>Check whether your institution already has an ACM student chapter — ACM-W student chapters can often be formed as sub-groups of existing ACM chapters.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-btn" id="acc2"><span>Step 2: Complete the Chapter Petition</span> <i class="fa fa-chevron-down"></i></button>
              <div class="accordion-body">
                <p>Download and complete the ACM Chapter Petition form available on the ACM website. This requires:</p>
                <ul>
                  <li>A list of at least 6 charter members (students + faculty advisor)</li>
                  <li>Proposed chapter name and institution details</li>
                  <li>Faculty Advisor's information and agreement</li>
                  <li>A brief statement of chapter goals</li>
                </ul>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-btn" id="acc3"><span>Step 3: Submit and await approval</span> <i class="fa fa-chevron-down"></i></button>
              <div class="accordion-body">
                <p>Submit your completed petition to <strong>ACM Headquarters</strong>. The ACM Chapter Board reviews petitions and typically responds within 4–6 weeks. Once approved, your chapter will receive an official charter.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-btn" id="acc4"><span>Step 4: Get connected with ACM-W India</span> <i class="fa fa-chevron-down"></i></button>
              <div class="accordion-body">
                <p>After receiving your charter, reach out to ACM-W India at <a href="mailto:acmwindia@acm.org">acmwindia@acm.org</a> to register your chapter with us. We will connect you with resources, events, and the wider ACM-W India community.</p>
              </div>
            </div>
            <div class="accordion-item">
              <button class="accordion-btn" id="acc5"><span>Step 5: Launch your chapter!</span> <i class="fa fa-chevron-down"></i></button>
              <div class="accordion-body">
                <p>Host an inaugural event, elect officers, and start planning activities. ACM-W India will support your chapter with mentorship, event templates, and promotion through our newsletter and social media.</p>
              </div>
            </div>
          </div>

          <div style="background:#fff8f5;border:1px solid #fdd8c8;border-radius:var(--radius);padding:20px 24px;margin-top:8px;">
            <h3 style="font-size:1rem;color:var(--accent);margin-bottom:10px;"><i class="fa fa-file-alt"></i> &nbsp;Official Documentation</h3>
            <ul style="font-size:.88rem;line-height:2;">
              <li><a href="https://www.acm.org/chapters/start-chapter" target="_blank">ACM — How to Start a Chapter</a></li>
              <li><a href="https://www.acm.org/chapters/chapter-in-a-box" target="_blank">ACM Chapter-in-a-Box Toolkit</a></li>
              <li><a href="https://women.acm.org/chapters" target="_blank">ACM-W Chapters Overview</a></li>
              <li><a href="mailto:acmwindia@acm.org">Contact ACM-W India for guidance</a></li>
            </ul>
          </div>
        </section>

      <section id="prof-chapters" style="margin-top:40px;">
                <h2 class="section-heading">Professional Chapters in India</h2>
                <div style="background:#f9f9f9;border:1px dashed #ccc;padding:20px;">
                    <p><em>[Placeholder: Information about Professional Chapters in India goes here]</em></p>
                    <p>Coming soon. Details about existing professional chapters and how to start a new one will be listed here.</p>
                </div>
            </section></div>
              </div>
                          </div>
          </div>
        </div>
        
  <aside id="secondary" class="columns large-3 medium-3 small-12" role="complementary">
    <div>			<div class="textwidget"><div class="fts-jal-fb-header"><h1><a href="#" target="_blank" rel="noreferrer">ACM-W India</a></h1><div class="fts-jal-fb-group-header-desc"></div></div><div class="fb-social-btn-below-description "><div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div>
							<script>jQuery(".fb-page").hide(); (function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=&version=v3.1";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, "script", "facebook-jssd"));</script><div class="fb-like fb_iframe_widget" data-href="https://www.facebook.com/224539037696143" data-layout="standard" data-action="like" data-colorscheme="light" data-show-faces="false" data-share="true" data-width:"100%"="" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;color_scheme=light&amp;container_width=262&amp;href=https%3A%2F%2Fwww.facebook.com%2F224539037696143&amp;layout=standard&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=false"><span style="vertical-align: bottom; width: 0px; height: 0px;"><div class="video-wrapper"><iframe name="fa302ecf0f403ccd1" width="1000px" height="1000px" data-testid="fb:like Facebook Social Plugin" title="fb:like Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v3.1/plugins/like.php?action=like&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Dfdcdbc5b290f5557e%26domain%3Dacmweurope.acm.org%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Facmweurope.acm.org%252Ff696573ef8a68b2ad%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=262&amp;href=https%3A%2F%2Fwww.facebook.com%2F224539037696143&amp;layout=standard&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=false" style="border-width: medium; border-style: none; border-color: currentcolor; border-image: initial; visibility: visible; width: 0px; height: 0px;" class=""></iframe></div></span></div></div><div class="fts-jal-fb-group-display fts-simple-fb-wrapper feed_dynamic_classedmdsouoas_page "><div class="fts-jal-single-fb-post"><div class="fts-jal-fb-right-wrap"><div class="fts-jal-fb-top-wrap "><div class="fts-jal-fb-user-thumb"><a href="#" target="_blank" rel="noreferrer" class="js-no-link-icon"><img border="0" alt="ACM-W India" src="<?php echo $base_path; ?>assets/acmw-india-logo.png"></a></div><span class="fts-jal-fb-user-name"><a href="#" target="_blank" rel="noreferrer">ACM-W India</a></span><span class="fts-jal-fb-post-time"> </span><div class="fts-clear"></div><div class="fts-jal-fb-message">When this happens, it's usually because the owner only shared it with a small group of people, changed who can see it or it's been deleted.<div class="fts-clear"></div></div></div><div class="fts-clear"></div></div><div class="fts-likes-shares-etc-wrap"><div class="fts-share-wrap"><a href="javascript:;" class="ft-gallery-link-popup" title="Social Share Options"></a><div class="ft-gallery-share-wrap"><a href="#" target="_blank" rel="noreferrer" class="ft-galleryfacebook-icon" title="Share this post on Facebook"><i class="fa fa-facebook-square"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-gallerytwitter-icon" title="Share this post on Twitter"><i class="fa fa-twitter"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-gallerygoogle-icon" title="Share this post on Google"><i class="fa fa-google-plus"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-gallerylinkedin-icon" title="Share this post on Linkedin"><i class="fa fa-linkedin"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-galleryemail-icon" title="Share this post in your email"><i class="fa fa-envelope"></i></a></div></div><a href="#" target="_blank" rel="noreferrer" class="fts-jal-fb-see-more"><i class="icon-thumbs-up"></i> 1  &nbsp;&nbsp;&nbsp;View on Facebook</a></div><div class="fts-clear"></div></div><div class="fts-fb-photo-post-wrap fts-jal-single-fb-post"><div class="fts-jal-fb-right-wrap"><div class="fts-jal-fb-top-wrap "><div class="fts-jal-fb-user-thumb"><a href="#" target="_blank" rel="noreferrer" class="js-no-link-icon"><img border="0" alt="ACM-W India" src="<?php echo $base_path; ?>assets/acmw-india-logo.png"></a></div><span class="fts-jal-fb-user-name"><a href="#" target="_blank" rel="noreferrer">ACM-W India</a></span><span class="fts-jal-fb-post-time"> </span><div class="fts-clear"></div><div class="fts-jal-fb-message">The May 2026 edition of ACM-W Connections is here!<br>
<br>
As we move into summer, we continue to celebrate the people and stories that shape ACM-W’s global community.<br>
<br>
In her Message from the ACM-W Chair, Rukiye Altin reflects on the energy, care, and dedication that ACM-W volunteers bring to our work every day, and on the joy of finally meeting in person and online in Edinburgh for Global Executive Committee and regional communications meetings.<br>
<br>
We also celebrate service and leadership, and congratulate Jodi Tims on receiving the ACM Outstanding Service Award.<br>
<br>
<img draggable="false" class="emoji" alt="🎙️" src="https://s.w.org/images/core/emoji/11/svg/1f399.svg"> In Voices of ACM-W, we hear from Lynda Hardman. Her journey across hypertext, multimedia, standardisation, and human-centred AI invites us to think about how computing environments shape society and how they should be designed to work for everyone.<br>
<br>
<img draggable="false" class="emoji" alt="🌱" src="https://s.w.org/images/core/emoji/11/svg/1f331.svg"> This month’s U-RISE feature introduces Antigoni Parmaxi, whose path from classical studies to human-centred educational technology shows that there is no single route into computing. <br>
<br>
<img draggable="false" class="emoji" alt="🏳️‍🌈" src="https://s.w.org/images/core/emoji/11/svg/1f3f3-fe0f-200d-1f308.svg"> As Pride Month approaches, “We Are More Alike Than We Are Different” offers a thoughtful reflection on gender identity and inclusion. It is a reminder that our community is strongest when people are seen, respected, and supported.<br>
<br>
<img draggable="false" class="emoji" alt="✨" src="https://s.w.org/images/core/emoji/11/svg/2728.svg"> In ACM-W Above and Beyond, we spotlight Dr Charu Kalra, an ACM-W scholar whose journey has taken her through compiler and optimisation research to her current work on next-generation AI-powered logistics technology.<br>
<br>
Across these stories, there is a common thread: visibility, service, and community matter. Whether through leadership, scholarship, research, advocacy, or storytelling, ACM-W continues to support, celebrate, and advocate for women in computing around the world.<br>
<br>
<img draggable="false" class="emoji" alt="📖" src="https://s.w.org/images/core/emoji/11/svg/1f4d6.svg"> Read the May 2026 ACM-W Connections Newsletter and explore the full stories.<br>
<a href="https://women.acm.org/2026/05/" target="_blank" rel="noreferrer">https://women.acm.org/2026/05/</a><br>
<br>
<a href="https://www.facebook.com/hashtag/ACMW" target="_blank" rel="noreferrer">#ACMW</a> <a href="https://www.facebook.com/hashtag/WomenInComputing" target="_blank" rel="noreferrer">#WomenInComputing</a> <a href="https://www.facebook.com/hashtag/WomenInTech" target="_blank" rel="noreferrer">#WomenInTech</a> <a href="https://www.facebook.com/hashtag/Community" target="_blank" rel="noreferrer">#Community</a> <a href="https://www.facebook.com/hashtag/Inclusion" target="_blank" rel="noreferrer">#Inclusion</a> <a href="https://www.facebook.com/hashtag/HumanCentredAI" target="_blank" rel="noreferrer">#HumanCentredAI</a> <a href="https://www.facebook.com/hashtag/Leadership" target="_blank" rel="noreferrer">#Leadership</a> <a href="https://www.facebook.com/hashtag/Volunteering" target="_blank" rel="noreferrer">#Volunteering</a> <a href="https://www.facebook.com/hashtag/ACMWScholars" target="_blank" rel="noreferrer">#ACMWScholars</a><div class="fts-clear"></div></div></div><div class="fts-jal-fb-link-wrap fts-album-photos-wrap"><a href="https://www.facebook.com/photo.php?fbid=1445296447641836&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="fts-jal-fb-picture js-no-link-icon"><img border="0" alt="ACM-W India" src="https://scontent-det1-1.xx.fbcdn.net/v/t39.30808-6/710288849_1445296450975169_2489729808899910941_n.jpg?stp=dst-jpg_s720x720_tt6&amp;_nc_cat=103&amp;ccb=1-7&amp;_nc_sid=127cfc&amp;_nc_ohc=kcIooBULR0MQ7kNvwE_uInk&amp;_nc_oc=AdoX2hHkNAoSVxSRRH6LJ598Fg21whLgTM_dcsjNSZVOF4-0yiq5QqOOCRARjgb_daM&amp;_nc_zt=23&amp;_nc_ht=scontent-det1-1.xx&amp;edm=AKIiGfEEAAAA&amp;_nc_gid=C8ivoPPyEaVsiVOGTp2Ohw&amp;_nc_tpa=Q5bMBQHPuFUiExc36CpsqYDRyGm1BjtCUm_qLLzoJ0Bl7JBtcJqY9ZC_ysBUTHtg-gUpOL4SgjjT_Vf7bQ&amp;oh=00_Af9pfP0uzr4xV7j6ClCHE-rWmPLJH2bXJGk6qIYejAPwWg&amp;oe=6A2C2AD0"></a><div class="slicker-facebook-album-photoshadow"></div><div class="fts-clear"></div></div><div class="fts-clear"></div></div><div class="fts-likes-shares-etc-wrap"><div class="fts-share-wrap"><a href="javascript:;" class="ft-gallery-link-popup" title="Social Share Options"></a><div class="ft-gallery-share-wrap"><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/photo.php?fbid=1445296447641836&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="ft-galleryfacebook-icon" title="Share this post on Facebook"><i class="fa fa-facebook-square"></i></a><a href="https://twitter.com/intent/tweet?text=https://www.facebook.com/photo.php?fbid=1445296447641836&amp;set=a.468880435283447&amp;type=3+" target="_blank" rel="noreferrer" class="ft-gallerytwitter-icon" title="Share this post on Twitter"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/share?url=https://www.facebook.com/photo.php?fbid=1445296447641836&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="ft-gallerygoogle-icon" title="Share this post on Google"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.facebook.com/photo.php?fbid=1445296447641836&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="ft-gallerylinkedin-icon" title="Share this post on Linkedin"><i class="fa fa-linkedin"></i></a><a href="mailto:?subject=Shared Link&amp;body=https://www.facebook.com/photo.php?fbid=1445296447641836&amp;set=a.468880435283447&amp;type=3 - " target="_blank" rel="noreferrer" class="ft-galleryemail-icon" title="Share this post in your email"><i class="fa fa-envelope"></i></a></div></div><a href="https://www.facebook.com/photo.php?fbid=1445296447641836&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="fts-jal-fb-see-more"><i class="icon-thumbs-up"></i> 3   &nbsp;&nbsp;&nbsp;View on Facebook</a></div><div class="fts-clear"></div></div><div class="fts-fb-photo-post-wrap fts-jal-single-fb-post"><div class="fts-jal-fb-right-wrap"><div class="fts-jal-fb-top-wrap "><div class="fts-jal-fb-user-thumb"><a href="#" target="_blank" rel="noreferrer" class="js-no-link-icon"><img border="0" alt="ACM-W India" src="<?php echo $base_path; ?>assets/acmw-india-logo.png"></a></div><span class="fts-jal-fb-user-name"><a href="#" target="_blank" rel="noreferrer">ACM-W India</a></span><span class="fts-jal-fb-post-time"> </span><div class="fts-clear"></div><div class="fts-jal-fb-message">As we move into a new ACM-W year, this message from ACM-W Global Chair Rukiye Altin is a reminder that communities do not grow on their own—they grow because people choose to contribute, support one another, and imagine new possibilities together.<br>
<br>
As ACM-W's global reach is expanding, we are grateful to our dedicated volunteers who keep our community connected. As Rukiye writes, ACM-W grows because people step forward to organise events, communicate ACM-W's mission, mentor others, fundraise, write their stories, coordinate projects, and build opportunities for others.<br>
<br>
Thank you to all of our volunteers, chapter leaders, members, and supporters around the world who make this community possible.<br>
<br>
<img draggable="false" class="emoji" alt="🔗" src="https://s.w.org/images/core/emoji/11/svg/1f517.svg"> Read the full message from ACM-W Global Chair Rukiye Altin:<br>
<a href="https://women.acm.org/message-from-our-chair-summer-2026/" target="_blank" rel="noreferrer">https://women.acm.org/message-from-our-chair-summer-2026/</a><br>
<br>
<a href="https://www.facebook.com/hashtag/ACMW" target="_blank" rel="noreferrer">#ACMW</a> <a href="https://www.facebook.com/hashtag/WomenInComputing" target="_blank" rel="noreferrer">#WomenInComputing</a> <a href="https://www.facebook.com/hashtag/WomenInSTEM" target="_blank" rel="noreferrer">#WomenInSTEM</a> <a href="https://www.facebook.com/hashtag/Community" target="_blank" rel="noreferrer">#Community</a> <a href="https://www.facebook.com/hashtag/Leadership" target="_blank" rel="noreferrer">#Leadership</a> <a href="https://www.facebook.com/hashtag/Inclusion" target="_blank" rel="noreferrer">#Inclusion</a><div class="fts-clear"></div></div></div><div class="fts-jal-fb-link-wrap fts-album-photos-wrap"><a href="https://www.facebook.com/photo.php?fbid=1448526743985473&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="fts-jal-fb-picture js-no-link-icon"><img border="0" alt="ACM-W India" src="https://scontent-det1-1.xx.fbcdn.net/v/t39.30808-6/710556758_1448526747318806_8667718401838075570_n.jpg?stp=dst-jpg_s720x720_tt6&amp;_nc_cat=108&amp;ccb=1-7&amp;_nc_sid=127cfc&amp;_nc_ohc=qji5kqa3iWgQ7kNvwFFbn13&amp;_nc_oc=AdpPB8JEQZY3KNKyKUtCz0Ji9FZ8P6G-j2zhUt2ifbgg2EcvA3vfbFcaBQ4LwJwojIk&amp;_nc_zt=23&amp;_nc_ht=scontent-det1-1.xx&amp;edm=AKIiGfEEAAAA&amp;_nc_gid=C8ivoPPyEaVsiVOGTp2Ohw&amp;_nc_tpa=Q5bMBQE_VAS6gtMujZTdBw6iIjWOaKQvnw4nRivUke_V1yn5ws4HiAz8571D_tKmpsQhVInQI3SvCveu4Q&amp;oh=00_Af85jj1EdJgX7h7jK_q0-q0V_qF4bMSnvSEO7rrjYJ-tBA&amp;oe=6A2C357E"></a><div class="slicker-facebook-album-photoshadow"></div><div class="fts-clear"></div></div><div class="fts-clear"></div></div><div class="fts-likes-shares-etc-wrap"><div class="fts-share-wrap"><a href="javascript:;" class="ft-gallery-link-popup" title="Social Share Options"></a><div class="ft-gallery-share-wrap"><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/photo.php?fbid=1448526743985473&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="ft-galleryfacebook-icon" title="Share this post on Facebook"><i class="fa fa-facebook-square"></i></a><a href="https://twitter.com/intent/tweet?text=https://www.facebook.com/photo.php?fbid=1448526743985473&amp;set=a.468880435283447&amp;type=3+" target="_blank" rel="noreferrer" class="ft-gallerytwitter-icon" title="Share this post on Twitter"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/share?url=https://www.facebook.com/photo.php?fbid=1448526743985473&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="ft-gallerygoogle-icon" title="Share this post on Google"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.facebook.com/photo.php?fbid=1448526743985473&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="ft-gallerylinkedin-icon" title="Share this post on Linkedin"><i class="fa fa-linkedin"></i></a><a href="mailto:?subject=Shared Link&amp;body=https://www.facebook.com/photo.php?fbid=1448526743985473&amp;set=a.468880435283447&amp;type=3 - " target="_blank" rel="noreferrer" class="ft-galleryemail-icon" title="Share this post in your email"><i class="fa fa-envelope"></i></a></div></div><a href="https://www.facebook.com/photo.php?fbid=1448526743985473&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="fts-jal-fb-see-more"><i class="icon-thumbs-up"></i> 1   &nbsp;&nbsp;&nbsp;View on Facebook</a></div><div class="fts-clear"></div></div><div class="fts-fb-photo-post-wrap fts-jal-single-fb-post"><div class="fts-jal-fb-right-wrap"><div class="fts-jal-fb-top-wrap "><div class="fts-jal-fb-user-thumb"><a href="#" target="_blank" rel="noreferrer" class="js-no-link-icon"><img border="0" alt="ACM-W India" src="<?php echo $base_path; ?>assets/acmw-india-logo.png"></a></div><span class="fts-jal-fb-user-name"><a href="#" target="_blank" rel="noreferrer">ACM-W India</a></span><span class="fts-jal-fb-post-time"> </span><div class="fts-clear"></div><div class="fts-jal-fb-message">"Investing in service pays dividends that last a lifetime."<br>
<br>
When reflecting on receiving the ACM Outstanding Service Award, ACM-W Past Chair Jodi Tims shares how a single volunteer experience as an undergraduate led to decades of service, leadership, professional growth, and lifelong friendships.<br>
<br>
From helping organize conferences to leading ACM-W's global expansion, her journey is a reminder that service is not only about giving back—it is also about building communities, creating opportunities, and supporting the next generation.<br>
<br>
As Jodi reflects:<br>
<br>
"My wide professional network and the deep friendships I have developed over the years are constant reminders that investing in service pays dividends that last a lifetime."<br>
<br>
Read Jodi's reflections and learn more about the people and experiences that shaped her ACM-W journey.<br>
<br>
<img draggable="false" class="emoji" alt="🔗" src="https://s.w.org/images/core/emoji/11/svg/1f517.svg"> Read the full article: <a href="https://women.acm.org/on-receiving-an-acm-outstanding-service-award/" target="_blank" rel="noreferrer">https://women.acm.org/on-receiving-an-acm-outstanding-service-award/</a><br>
<br>
<a href="https://www.facebook.com/hashtag/ACMW" target="_blank" rel="noreferrer">#ACMW</a> <a href="https://www.facebook.com/hashtag/WomenInComputing" target="_blank" rel="noreferrer">#WomenInComputing</a> <a href="https://www.facebook.com/hashtag/VolunteerLeadership" target="_blank" rel="noreferrer">#VolunteerLeadership</a> <a href="https://www.facebook.com/hashtag/Community" target="_blank" rel="noreferrer">#Community</a> <a href="https://www.facebook.com/hashtag/Mentorship" target="_blank" rel="noreferrer">#Mentorship</a> <a href="https://www.facebook.com/hashtag/WomenInSTEM" target="_blank" rel="noreferrer">#WomenInSTEM</a><div class="fts-clear"></div></div></div><div class="fts-jal-fb-link-wrap fts-album-photos-wrap"><a href="https://www.facebook.com/photo.php?fbid=1450461157125365&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="fts-jal-fb-picture js-no-link-icon"><img border="0" alt="ACM-W India" src="https://scontent-det1-1.xx.fbcdn.net/v/t39.30808-6/715932032_1450461160458698_2723380155853966808_n.jpg?stp=dst-jpg_s720x720_tt6&amp;_nc_cat=104&amp;ccb=1-7&amp;_nc_sid=127cfc&amp;_nc_ohc=x4UGhIXmne4Q7kNvwHDobE8&amp;_nc_oc=AdquKEZpG1nKp77GqYJIm3EMz_HHQcIewIHJSMMjQJX-HnhOxi0fw401H_1hAk-f-LM&amp;_nc_zt=23&amp;_nc_ht=scontent-det1-1.xx&amp;edm=AKIiGfEEAAAA&amp;_nc_gid=C8ivoPPyEaVsiVOGTp2Ohw&amp;_nc_tpa=Q5bMBQFOc9EXvR0iwOWNMV6YZ0KmzovJnZfegxpgimbDCd9mWebh6V4HMmCVvjGb4HpM_9AKMoXywhmrGw&amp;oh=00_Af-c-cyPOWrA1s0JeY-JH-TFamqd1IYkTqUJaeG_kaXfFw&amp;oe=6A2C2A3B"></a><div class="slicker-facebook-album-photoshadow"></div><div class="fts-clear"></div></div><div class="fts-clear"></div></div><div class="fts-likes-shares-etc-wrap"><div class="fts-share-wrap"><a href="javascript:;" class="ft-gallery-link-popup" title="Social Share Options"></a><div class="ft-gallery-share-wrap"><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/photo.php?fbid=1450461157125365&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="ft-galleryfacebook-icon" title="Share this post on Facebook"><i class="fa fa-facebook-square"></i></a><a href="https://twitter.com/intent/tweet?text=https://www.facebook.com/photo.php?fbid=1450461157125365&amp;set=a.468880435283447&amp;type=3+" target="_blank" rel="noreferrer" class="ft-gallerytwitter-icon" title="Share this post on Twitter"><i class="fa fa-twitter"></i></a><a href="https://plus.google.com/share?url=https://www.facebook.com/photo.php?fbid=1450461157125365&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="ft-gallerygoogle-icon" title="Share this post on Google"><i class="fa fa-google-plus"></i></a><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.facebook.com/photo.php?fbid=1450461157125365&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="ft-gallerylinkedin-icon" title="Share this post on Linkedin"><i class="fa fa-linkedin"></i></a><a href="mailto:?subject=Shared Link&amp;body=https://www.facebook.com/photo.php?fbid=1450461157125365&amp;set=a.468880435283447&amp;type=3 - " target="_blank" rel="noreferrer" class="ft-galleryemail-icon" title="Share this post in your email"><i class="fa fa-envelope"></i></a></div></div><a href="https://www.facebook.com/photo.php?fbid=1450461157125365&amp;set=a.468880435283447&amp;type=3" target="_blank" rel="noreferrer" class="fts-jal-fb-see-more"><i class="icon-thumbs-up"></i> 2   &nbsp;&nbsp;&nbsp;View on Facebook</a></div><div class="fts-clear"></div></div><div class="fts-jal-single-fb-post"><div class="fts-jal-fb-right-wrap"><div class="fts-jal-fb-top-wrap "><div class="fts-jal-fb-user-thumb"><a href="#" target="_blank" rel="noreferrer" class="js-no-link-icon"><img border="0" alt="ACM-W India" src="<?php echo $base_path; ?>assets/acmw-india-logo.png"></a></div><span class="fts-jal-fb-user-name"><a href="#" target="_blank" rel="noreferrer">ACM-W India</a></span><span class="fts-jal-fb-post-time"> </span><div class="fts-clear"></div><div class="fts-jal-fb-message">When this happens, it's usually because the owner only shared it with a small group of people, changed who can see it or it's been deleted.<div class="fts-clear"></div></div></div><div class="fts-clear"></div></div><div class="fts-likes-shares-etc-wrap"><div class="fts-share-wrap"><a href="javascript:;" class="ft-gallery-link-popup" title="Social Share Options"></a><div class="ft-gallery-share-wrap"><a href="#" target="_blank" rel="noreferrer" class="ft-galleryfacebook-icon" title="Share this post on Facebook"><i class="fa fa-facebook-square"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-gallerytwitter-icon" title="Share this post on Twitter"><i class="fa fa-twitter"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-gallerygoogle-icon" title="Share this post on Google"><i class="fa fa-google-plus"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-gallerylinkedin-icon" title="Share this post on Linkedin"><i class="fa fa-linkedin"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-galleryemail-icon" title="Share this post in your email"><i class="fa fa-envelope"></i></a></div></div><a href="#" target="_blank" rel="noreferrer" class="fts-jal-fb-see-more">  &nbsp;&nbsp;&nbsp;View on Facebook</a></div><div class="fts-clear"></div></div><div class="fts-jal-single-fb-post"><div class="fts-jal-fb-right-wrap"><div class="fts-jal-fb-top-wrap "><div class="fts-jal-fb-user-thumb"><a href="#" target="_blank" rel="noreferrer" class="js-no-link-icon"><img border="0" alt="ACM-W India" src="<?php echo $base_path; ?>assets/acmw-india-logo.png"></a></div><span class="fts-jal-fb-user-name"><a href="#" target="_blank" rel="noreferrer">ACM-W India</a></span><span class="fts-jal-fb-post-time"> </span><div class="fts-clear"></div><div class="fts-jal-fb-message">When this happens, it's usually because the owner only shared it with a small group of people, changed who can see it or it's been deleted.<div class="fts-clear"></div></div></div><div class="fts-clear"></div></div><div class="fts-likes-shares-etc-wrap"><div class="fts-share-wrap"><a href="javascript:;" class="ft-gallery-link-popup" title="Social Share Options"></a><div class="ft-gallery-share-wrap"><a href="#" target="_blank" rel="noreferrer" class="ft-galleryfacebook-icon" title="Share this post on Facebook"><i class="fa fa-facebook-square"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-gallerytwitter-icon" title="Share this post on Twitter"><i class="fa fa-twitter"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-gallerygoogle-icon" title="Share this post on Google"><i class="fa fa-google-plus"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-gallerylinkedin-icon" title="Share this post on Linkedin"><i class="fa fa-linkedin"></i></a><a href="#" target="_blank" rel="noreferrer" class="ft-galleryemail-icon" title="Share this post in your email"><i class="fa fa-envelope"></i></a></div></div><a href="#" target="_blank" rel="noreferrer" class="fts-jal-fb-see-more"><i class="icon-thumbs-up"></i> 2  &nbsp;&nbsp;&nbsp;View on Facebook</a></div><div class="fts-clear"></div></div><a class="fts-powered-by-text" href="https://www.slickremix.com" target="_blank">Powered by Feed Them Social</a></div><div class="fts-clear"></div><div id="fb-root"></div>
</div>
		</div>  </aside><!-- .sidebar .widget-area -->
      </div>
    </article>
  </div>

</div>

<?php include '../footer.php'; ?>
