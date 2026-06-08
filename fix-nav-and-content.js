const fs = require('fs');
const path = require('path');
const cheerio = require('cheerio');

const dir = 'c:/Users/SATISH/Desktop/ACM-W INDIA WEBSITE/ACM-W-India-Website/acmw-india';
const files = [
  'index.html',
  'pages/about.html',
  'pages/blog.html',
  'pages/celebrations.html',
  'pages/chapters.html',
  'pages/events.html',
  'pages/newsletter.html',
  'pages/volunteers.html'
];

files.forEach(file => {
  const filePath = path.join(dir, file);
  if (!fs.existsSync(filePath)) return;
  
  let html = fs.readFileSync(filePath, 'utf8');
  const $ = cheerio.load(html);

  // Strip Europe links
  $('a[href*="acmweurope.acm.org"]').each((i, el) => {
    let href = $(el).attr('href');
    if (href.includes('linkedin.com') || href.includes('facebook.com') || href.includes('instagram.com') || href.includes('twitter.com') || href.includes('x.com')) {
      $(el).attr('href', '#');
    } else if ($(el).attr('href').startsWith('https://acmweurope.acm.org')) {
       // just a safety catch if they need to be made local
       $(el).attr('href', '#');
    }
  });

  // Rebuild navigation
  const isRoot = file === 'index.html';
  const prefix = isRoot ? 'pages/' : '';
  const homeLink = isRoot ? 'index.html' : '../index.html';
  
  const getActive = (target) => {
    if (file === 'index.html' && target === 'index.html') return 'current-menu-item page_item current_page_item active';
    if (file === `pages/${target}`) return 'current-menu-item page_item current_page_item active';
    return 'page_item';
  };

  const navHtml = `
    <li class="menu-item ${getActive('index.html')}"><a href="${homeLink}">Home</a></li>
    <li class="menu-item ${getActive('about.html')}"><a href="${prefix}about.html">About</a></li>
    <li class="menu-item ${getActive('volunteers.html')}"><a href="${prefix}volunteers.html">Volunteers</a></li>
    <li class="menu-item ${getActive('chapters.html')}"><a href="${prefix}chapters.html">Chapters</a></li>
    <li class="menu-item ${getActive('celebrations.html')}"><a href="${prefix}celebrations.html">Celebrations</a></li>
    <li class="menu-item ${getActive('events.html')}"><a href="${prefix}events.html">Events</a></li>
    <li class="menu-item ${getActive('newsletter.html')}"><a href="${prefix}newsletter.html">Newsletter</a></li>
    <li class="menu-item ${getActive('blog.html')}"><a href="${prefix}blog.html">Blog</a></li>
  `;
  
  $('#primary-menu').empty().append(navHtml);

  // Content Mapping
  if (file === 'index.html') {
    // Must contain Mission Statement and Latest Updates. (It currently does)
    // Make sure Newsletter content is NOT here.
    // The user's diff shows they already reverted some of this, but let's make sure it's clean.
  }

  if (file === 'pages/newsletter.html') {
    // Clear out 'Home' content accidentally placed here. Build clean generic placeholder.
    $('#maincontent .row .columns.large-9').html(`
      <div class="post">
        <div class="entrytext">
          <h1>ACM-W India Connections Newsletter</h1>
          <p>Welcome to the ACM-W India Connections Newsletter. Here you will find past editions of our newsletters.</p>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 20px;">
            <div style="border: 1px solid #ddd; padding: 20px; border-radius: 8px;">
              <h3>Latest Edition</h3>
              <p>Coming soon...</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
            <div style="border: 1px solid #ddd; padding: 20px; border-radius: 8px;">
              <h3>Previous Edition</h3>
              <p>Coming soon...</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    `);
  }

  if (file === 'pages/events.html') {
    // events.html 4 tabs: Nariyukti, Lady Ada, Grad Cohort 2025, New Event
    // The user provided specific texts. We need to replace the text inside the existing tabs.
    
    // Nariyukti
    $('#tab-nariyukti .event-hero-info p').text('The ACM-W India Hackathon, NariYukti’25 – TechHack 10th Edition (2025), is a flagship national-level initiative aimed at empowering women in computing by providing a platform to innovate, collaborate, and solve real-world problems. Open to undergraduate and postgraduate students, the hackathon encourages all-female teams to participate and present impactful, technology-driven solutions. The event promotes inclusivity, technical excellence, and industry exposure, with shortlisted teams receiving mentorship to refine their ideas into meaningful prototypes.');
    
    // Lady Ada
    $('#tab-lady-ada .event-hero-info p').text('Lady Ada is the flagship annual event of ACM-W India, named in honor of Ada Lovelace, the world’s first computer programmer and a pioneer in computing. Lady Ada is a national-level coding event and the flagship program of ACM-W India. It is designed to encourage and empower women in computing by providing them with opportunities to showcase their technical skills, problem-solving abilities, and innovative thinking. The event brings together participants from across the country to compete, collaborate, and learn, while also celebrating the spirit of diversity and inclusion in technology.');

    // Grad Cohort
    $('#tab-grad-cohort .event-hero-info p').text('The ACM-W India Grad Cohort 2025 is a premier mentoring initiative empowering women in computing research across India. Hosted at Indian Institute of Technology Kanpur, it brings together students, researchers, and industry leaders for guidance and inspiration. The program offers mentorship, keynote talks, and interactive sessions to support academic and research growth. Participants gain insights into publishing, networking, and building successful research careers. It fosters a collaborative and inclusive community for women in Master’s and Ph.D. programs. Join to connect with role models and take the next step in your research journey.');
  }

  if (file === 'pages/about.html') {
    // Include Committee structure. Placeholder for 'Geetanjali Ma’am intro'. Past chairs table.
    // Replace content inside main block
    $('#maincontent .row .columns.large-9').html(`
      <div class="post">
        <div class="entrytext">
          <h1>About ACM-W India</h1>
          
          <div style="background: #f9f9f9; padding: 20px; border-left: 4px solid #043b87; margin-bottom: 30px;">
            <h3>[Geetanjali Ma’am Intro Placeholder]</h3>
            <p>Introductory message from Geetanjali Ma'am goes here.</p>
          </div>

          <h2>Committee</h2>
          <p>The ACM-W India Committee consists of dedicated volunteers driving the mission of supporting women in computing.</p>
          <ul>
            <li><strong>Chair:</strong> [Name]</li>
            <li><strong>Vice Chair:</strong> [Name]</li>
            <li><strong>Secretary:</strong> [Name]</li>
            <li><strong>Treasurer:</strong> [Name]</li>
          </ul>

          <h2>Past Chairs</h2>
          <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
            <thead>
              <tr style="background: #eee;">
                <th style="padding: 10px; border: 1px solid #ccc;">Year</th>
                <th style="padding: 10px; border: 1px solid #ccc;">Name</th>
                <th style="padding: 10px; border: 1px solid #ccc;">Institution</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="padding: 10px; border: 1px solid #ccc;">[Year - Year]</td>
                <td style="padding: 10px; border: 1px solid #ccc;">[Name]</td>
                <td style="padding: 10px; border: 1px solid #ccc;">[Institution]</td>
              </tr>
              <tr>
                <td style="padding: 10px; border: 1px solid #ccc;">[Year - Year]</td>
                <td style="padding: 10px; border: 1px solid #ccc;">[Name]</td>
                <td style="padding: 10px; border: 1px solid #ccc;">[Institution]</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    `);
  }

  if (file === 'pages/chapters.html') {
    // Keep Map, summary, how to apply. Add placeholder for 'Professional Chapters'.
    // Assuming we just append the placeholder to the existing content.
    const chaptersContent = $('#maincontent .entrytext');
    if (chaptersContent.length > 0) {
      // Find if we already have it to prevent duplication
      if (html.indexOf('Professional Chapters in India') === -1) {
        chaptersContent.append(`
          <div style="margin-top: 40px; border-top: 2px solid #eee; padding-top: 20px;">
            <h2>Professional Chapters in India</h2>
            <div style="background: #fdfdfd; border: 1px dashed #ccc; padding: 20px; text-align: center;">
              <p><em>[Placeholder for Professional Chapters list and details]</em></p>
            </div>
          </div>
        `);
      }
    } else {
       // If empty for some reason
       $('#maincontent .row .columns.large-9').html(`
        <div class="post">
          <div class="entrytext">
            <h1>Chapters</h1>
            <p>[Map of India Placeholder]</p>
            <h2>Student Chapters</h2>
            <p>Summary of student chapters...</p>
            <h2>How to Apply</h2>
            <p>Documentation and link...</p>

            <div style="margin-top: 40px; border-top: 2px solid #eee; padding-top: 20px;">
              <h2>Professional Chapters in India</h2>
              <div style="background: #fdfdfd; border: 1px dashed #ccc; padding: 20px; text-align: center;">
                <p><em>[Placeholder for Professional Chapters list and details]</em></p>
              </div>
            </div>
          </div>
        </div>
      `);
    }
  }

  if (['pages/volunteers.html', 'pages/celebrations.html', 'pages/blog.html'].includes(file)) {
    let title = 'Coming Soon';
    if (file.includes('volunteers')) title = 'Volunteers';
    if (file.includes('celebrations')) title = 'Celebrations';
    if (file.includes('blog')) title = 'Blog';

    $('#maincontent .row .columns.large-9').html(`
      <div class="post">
        <div class="entrytext" style="text-align: center; padding: 50px 20px;">
          <h1>${title}</h1>
          <h2 style="color: #666; font-weight: 300;">Coming Soon</h2>
          <p>This section is currently under development.</p>
        </div>
      </div>
    `);
  }

  fs.writeFileSync(filePath, $.html());
  console.log('Updated ' + file);
});
