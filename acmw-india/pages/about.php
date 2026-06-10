<?php
$page_title = 'About us | ACM-W India';
$active_page = 'about';
$base_path = '../';
include '../header.php';
?>
<div id="main">

<div class="banner-container">
  <div>
    <div>
                <div class="acm-banner-container" style="background: url('https://india.acm.org/binaries/bannerlarge/content/gallery/acm/banners/acm_india_banner_sym_2019.jpg') no-repeat center 0 / 130% #000; background-size: cover;">
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
        <ul id="crumbs" class="breadcrumbs">
          <?php if ($active_page === 'index'): ?>
            <li>Home</li>
          <?php else: ?>
            <li><a href="<?php echo $base_path; ?>index.php">Home</a></li>
            <li><?php echo ucfirst($active_page); ?></li>
          <?php endif; ?>
        </ul>
      </ul>
    </div>
  </div>
    <div class="article" id="maincontent">
    <article class="has-edit-button" id="SkipTarget" tabindex="-1">
      <div class="row">
        <div class="columns large-9 medium-9 small-9 zone-1">
      <div class="post">
        <div class="entrytext">
          <h1>About ACM-W India</h1>
          
          <div style="background: #f9f9f9; padding: 30px; border-left: 5px solid #043b87; margin-bottom: 40px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-radius: 4px;">
            <h2 style="margin-top: 0; color: #043b87;">Meet Our Chairperson</h2>
            
            <div style="display: flex; flex-wrap: wrap; gap: 30px; margin-top: 25px;">
              <!-- Photo & Social Column -->
              <div style="flex: 0 0 260px; display: flex; flex-direction: column; align-items: center;">
                <div style="width: 260px; height: 300px; background-color: #eaeaea; border-radius: 8px; border: 1px solid #ddd; display: flex; align-items: center; justify-content: center; overflow: hidden; margin-bottom: 15px; box-shadow: inset 0 2px 10px rgba(0,0,0,0.05);">
                  <img src="<?php echo $base_path; ?>assets/geetanjalimam.png" alt="Dr. Geetanjali Kale" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="wpsm_team_2_social_div" style="text-align: center;">
                  <a href="#" target="_blank" title="LinkedIn" style="margin-right: 15px; text-decoration: none;"><i class="fa fa-linkedin-square" style="font-size: 28px; color: #0077b5;"></i></a>
                  <a href="mailto:acmwindia@acm.org" target="_blank" title="Email" style="text-decoration: none;"><i class="fa fa-envelope" style="font-size: 28px; color: #d44638;"></i></a>
                </div>
              </div>
              
              <!-- Biography Column -->
              <div style="flex: 1; min-width: 300px;">
                <h3 style="margin-top: 0; margin-bottom: 5px; font-size: 1.8rem;">Dr. Geetanjali Kale</h3>
                <p style="color: #666; font-weight: bold; margin-bottom: 20px; font-size: 1.1rem; border-bottom: 1px solid #ddd; padding-bottom: 15px;">Chair, ACM India Women Committee | Associate Professor, PICT Pune</p>
                
                <p><strong>Biography:</strong> Dr. Geetanjali Kale is a distinguished academic and a long-standing champion for women in computing. Currently serving as Associate Professor in the Department of Computer Engineering at Pune Institute of Computer Technology (PICT), she has held several leadership roles including Head of the Department and Joint Training & Placement Officer. She has served on the Board of Studies in Computer Engineering and the Vocational Studies Board at Savitribai Phule Pune University (SPPU).</p>
                <p><strong>ACM Involvement:</strong> Dr. Geetanjali has been an active ACM India volunteer for over a decade, serving as Secretary-cum-Treasurer of ACM India-W, Chapter Summit Chair of ACM India, Chair of the ACM-W Pune Professional Chapter, and member of ACM India’s Internal Engagement Committee. Her leadership has been instrumental in the success of the PICT ACM Student Chapter, which has received multiple ACM India Outstanding Chapter Awards and the prestigious ACM Global Outstanding Website Award.</p>
                <p><strong>Professional Status:</strong> She is a Senior Member of both ACM and IEEE, with deep research interests in Computer Vision, Machine Learning, Data Science, Generative AI, and innovations in education. As Chair of ACM India-W, she is committed to fostering inclusive growth, building stronger mentorship networks, and empowering women in computing across all stages of academia and industry.</p>
                <p><strong>Areas of Expertise:</strong> Computer Vision, Machine Learning, Data Science, Generative AI, AI Ethics, Computing Education, Community Leadership, Women in Computing.</p>
              </div>
            </div>
          </div>

          <h2 style="margin-bottom: 20px; color: #043b87;">Executive Committee Members</h2>
          
          <style>
          .india-committee-grid {
              display: grid;
              grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
              gap: 25px;
              margin-bottom: 40px;
          }
          .wpsm_team_2_member_wrapper_inner {
              background: #fff;
              border: 1px solid #eaeaea;
              padding: 30px 20px;
              text-align: center;
              border-radius: 8px;
              box-shadow: 0 4px 10px rgba(0,0,0,0.03);
              height: 100%;
              transition: transform 0.2s ease, box-shadow 0.2s ease;
              display: flex;
              flex-direction: column;
              align-items: center;
          }
          .wpsm_team_2_member_wrapper_inner:hover {
              transform: translateY(-5px);
              box-shadow: 0 8px 20px rgba(0,0,0,0.08);
              border-color: #d1e2f3;
          }
          .committee-photo-placeholder {
              width: 140px;
              height: 140px;
              background-color: #f5f5f5;
              border-radius: 50%;
              border: 3px solid #043b87;
              margin-bottom: 20px;
              display: flex;
              align-items: center;
              justify-content: center;
              overflow: hidden;
              box-shadow: 0 4px 8px rgba(4, 59, 135, 0.15);
          }
          .committee-photo-placeholder i {
              font-size: 65px;
              color: #ddd;
          }
          .committee-photo-placeholder img {
              width: 100%;
              height: 100%;
              object-fit: cover;
          }
          .wpsm_team_2_member_wrapper_inner h3 {
              margin-top: 0;
              margin-bottom: 5px;
              font-size: 1.25rem;
              color: #222;
          }
          .wpsm_team_2_b_desig {
              display: block;
              color: #043b87;
              font-size: 0.95rem;
              font-weight: 600;
              margin-bottom: 8px;
          }
          .wpsm_team_2_b_uni {
              display: block;
              color: #666;
              font-size: 0.85rem;
              line-height: 1.3;
          }
          .wpsm_team_2_social_div {
              margin-top: auto;
              padding-top: 15px;
          }
          .wpsm_team_2_social_div a {
              color: #0077b5;
              font-size: 1.2rem;
              text-decoration: none;
              opacity: 0.8;
              transition: opacity 0.2s;
          }
          .wpsm_team_2_social_div a:hover {
              opacity: 1;
          }
          </style>

          <div class="india-committee-grid">
            <div class="wpsm_team_2_member_wrapper_inner">
                <div class="committee-photo-placeholder"><img src="<?php echo $base_path; ?>assets/geetanjalimam.png" alt="Dr. Geetanjali Kale"></div>
                <h3>Dr. Geetanjali Kale</h3>
                <span class="wpsm_team_2_b_desig">Chair</span>
                <span class="wpsm_team_2_b_uni">PICT, Pune</span>
                <div class="wpsm_team_2_social_div"><a href="#" target="_blank" title="LinkedIn"><i class="fa fa-linkedin-square"></i></a></div>
            </div>
            
            <div class="wpsm_team_2_member_wrapper_inner">
                <div class="committee-photo-placeholder"><i class="fa fa-user"></i></div>
                <h3>Alpana Dubey</h3>
                <span class="wpsm_team_2_b_desig">Vice-Chair</span>
                <span class="wpsm_team_2_b_uni">Accenture, Bangalore</span>
                <div class="wpsm_team_2_social_div"><a href="#" target="_blank" title="LinkedIn"><i class="fa fa-linkedin-square"></i></a></div>
            </div>
            
            <div class="wpsm_team_2_member_wrapper_inner">
                <div class="committee-photo-placeholder"><i class="fa fa-user"></i></div>
                <h3>Renuka Sindhghatta</h3>
                <span class="wpsm_team_2_b_desig">Secretary / Treasurer</span>
                <span class="wpsm_team_2_b_uni">IBM, Bangalore</span>
                <div class="wpsm_team_2_social_div"><a href="#" target="_blank" title="LinkedIn"><i class="fa fa-linkedin-square"></i></a></div>
            </div>
            
            <div class="wpsm_team_2_member_wrapper_inner">
                <div class="committee-photo-placeholder"><img src="<?php echo $base_path; ?>assets/rutvishah.png" alt="Rutvi Shah"></div>
                <h3>Rutvi Shah</h3>
                <span class="wpsm_team_2_b_desig">Past Chair</span>
                <span class="wpsm_team_2_b_uni">Ganpat University</span>
                <div class="wpsm_team_2_social_div"><a href="#" target="_blank" title="LinkedIn"><i class="fa fa-linkedin-square"></i></a></div>
            </div>
            
            <div class="wpsm_team_2_member_wrapper_inner">
                <div class="committee-photo-placeholder"><i class="fa fa-user"></i></div>
                <h3>Jayashree Mohan</h3>
                <span class="wpsm_team_2_b_desig">Member-at-large</span>
                <span class="wpsm_team_2_b_uni">Microsoft Research, Bangalore</span>
                <div class="wpsm_team_2_social_div"><a href="#" target="_blank" title="LinkedIn"><i class="fa fa-linkedin-square"></i></a></div>
            </div>
            
            <div class="wpsm_team_2_member_wrapper_inner">
                <div class="committee-photo-placeholder"><i class="fa fa-user"></i></div>
                <h3>Mini Ulanat</h3>
                <span class="wpsm_team_2_b_desig">Member-at-large</span>
                <span class="wpsm_team_2_b_uni">CUSAT, Cochin</span>
                <div class="wpsm_team_2_social_div"><a href="#" target="_blank" title="LinkedIn"><i class="fa fa-linkedin-square"></i></a></div>
            </div>
            
            <div class="wpsm_team_2_member_wrapper_inner">
                <div class="committee-photo-placeholder"><i class="fa fa-user"></i></div>
                <h3>Sriparna Saha</h3>
                <span class="wpsm_team_2_b_desig">Member-at-large</span>
                <span class="wpsm_team_2_b_uni">IIT Patna</span>
                <div class="wpsm_team_2_social_div"><a href="#" target="_blank" title="LinkedIn"><i class="fa fa-linkedin-square"></i></a></div>
            </div>
            
            <div class="wpsm_team_2_member_wrapper_inner">
                <div class="committee-photo-placeholder"><i class="fa fa-user"></i></div>
                <h3>Manik Gupta</h3>
                <span class="wpsm_team_2_b_desig">Member-at-large</span>
                <span class="wpsm_team_2_b_uni">BITS Pilani Hyderabad</span>
                <div class="wpsm_team_2_social_div"><a href="#" target="_blank" title="LinkedIn"><i class="fa fa-linkedin-square"></i></a></div>
            </div>
            
            <div class="wpsm_team_2_member_wrapper_inner">
                <div class="committee-photo-placeholder"><i class="fa fa-user"></i></div>
                <h3>Nita Thakare</h3>
                <span class="wpsm_team_2_b_desig">Member-at-large</span>
                <span class="wpsm_team_2_b_uni">Priyadarshini College, Nagpur</span>
                <div class="wpsm_team_2_social_div"><a href="#" target="_blank" title="LinkedIn"><i class="fa fa-linkedin-square"></i></a></div>
            </div>
            
            <div class="wpsm_team_2_member_wrapper_inner">
                <div class="committee-photo-placeholder"><i class="fa fa-user"></i></div>
                <h3>Sachi Choudhary</h3>
                <span class="wpsm_team_2_b_desig">Member-at-large</span>
                <span class="wpsm_team_2_b_uni">UPES Dehradun</span>
                <div class="wpsm_team_2_social_div"><a href="#" target="_blank" title="LinkedIn"><i class="fa fa-linkedin-square"></i></a></div>
            </div>
            
            <div class="wpsm_team_2_member_wrapper_inner">
                <div class="committee-photo-placeholder"><i class="fa fa-user"></i></div>
                <h3>Sonia Garcha</h3>
                <span class="wpsm_team_2_b_desig">Member-at-large</span>
                <span class="wpsm_team_2_b_uni">CSpathshala, Pune</span>
                <div class="wpsm_team_2_social_div"><a href="#" target="_blank" title="LinkedIn"><i class="fa fa-linkedin-square"></i></a></div>
            </div>
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
