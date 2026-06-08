const fs = require('fs');
const path = require('path');
const cheerio = require('cheerio');

const acmwIndiaPath = path.join(__dirname, 'acmw-india');

const filesToProcess = [
    'index.html',
    'pages/about.html',
    'pages/chapters.html',
    'pages/events.html',
    'pages/celebrations.html',
    'pages/newsletter.html',
    'pages/blog.html',
    'pages/volunteers.html'
];

filesToProcess.forEach(file => {
    const filePath = path.join(acmwIndiaPath, file);
    if (!fs.existsSync(filePath)) return;

    const fileHtml = fs.readFileSync(filePath, 'utf8');
    const $ = cheerio.load(fileHtml, { decodeEntities: false });

    // TASK 1: GLOBAL LINK & DOMAIN SCRUBBING (Only a[href] to preserve design styles/scripts)
    $('a[href]').each((i, el) => {
        let href = $(el).attr('href');
        if (!href) return;

        // Scrub social media
        if (href.includes('linkedin.com/company/acm-w-europe') ||
            href.includes('facebook.com/acmweurope') ||
            href.includes('instagram.com/acmwomencourage') ||
            href.includes('facebook.com/224539037696143')) {
            $(el).attr('href', '#');
            return;
        }

        // Scrub acmweurope.acm.org page links
        if (href.startsWith('https://acmweurope.acm.org')) {
            const urlPath = href.replace('https://acmweurope.acm.org', '').replace(/\/$/, '');
            let newHref = '#';
            
            // Map paths
            if (urlPath === '' || urlPath === '/') newHref = file === 'index.html' ? '#' : '../index.html';
            else if (urlPath === '/about' || urlPath === '/about-acm-we') newHref = file.startsWith('pages/') ? 'about.html' : 'pages/about.html';
            else if (urlPath === '/volunteers' || urlPath === '/european-volunteers-network') newHref = file.startsWith('pages/') ? 'volunteers.html' : 'pages/volunteers.html';
            else if (urlPath === '/chapters-2') newHref = file.startsWith('pages/') ? 'chapters.html' : 'pages/chapters.html';
            else if (urlPath === '/celebrations' || urlPath === '/womencourage') newHref = file.startsWith('pages/') ? 'celebrations.html' : 'pages/celebrations.html';
            else if (urlPath === '/newsletter' || urlPath.startsWith('/newsletter')) newHref = file.startsWith('pages/') ? 'newsletter.html' : 'pages/newsletter.html';
            else if (urlPath === '/europeblog' || urlPath.startsWith('/category/blog')) newHref = file.startsWith('pages/') ? 'blog.html' : 'pages/blog.html';
            
            $(el).attr('href', newHref);
        }
    });

    // Replace text 'ACM-W Europe' with 'ACM-W India' where appropriate, but only in text nodes
    // Actually the user said "Keep the codebase entirely independent of Europe links. Everything must be India-focused."
    // I already did 'ACM-W Europe' -> 'ACM-W India' in the previous step.

    // TASK 2: CONTENT INJECTION

    if (file === 'index.html') {
        // Mission statement already present.
        // Update Latest Updates grid links explicitly
        $('.updates-grid a').each((i, el) => {
            let href = $(el).attr('href');
            if(href && href.includes('newsletter.html')) $(el).attr('href', 'pages/newsletter.html');
            if(href && href.includes('blog.html')) $(el).attr('href', 'pages/blog.html');
        });
    }
    else if (file === 'pages/events.html') {
        // Update Events text
        const nariyuktiText = 'The ACM-W India Hackathon, NariYukti’25 – TechHack 10th Edition (2025), is a flagship national-level initiative aimed at empowering women in computing by providing a platform to innovate, collaborate, and solve real-world problems. Open to undergraduate and postgraduate students, the hackathon encourages all-female teams to participate and present impactful, technology-driven solutions. The event promotes inclusivity, technical excellence, and industry exposure, with shortlisted teams receiving mentorship to refine their ideas into meaningful prototypes.';
        const ladyAdaText = 'Lady Ada is the flagship annual event of ACM-W India, named in honor of Ada Lovelace, the world’s first computer programmer and a pioneer in computing. Lady Ada is a national-level coding event and the flagship program of ACM-W India. It is designed to encourage and empower women in computing by providing them with opportunities to showcase their technical skills, problem-solving abilities, and innovative thinking. The event brings together participants from across the country to compete, collaborate, and learn, while also celebrating the spirit of diversity and inclusion in technology.';
        const gradCohortText = 'The ACM-W India Grad Cohort 2025 is a premier mentoring initiative empowering women in computing research across India. Hosted at Indian Institute of Technology Kanpur, it brings together students, researchers, and industry leaders for guidance and inspiration. The program offers mentorship, keynote talks, and interactive sessions to support academic and research growth. Participants gain insights into publishing, networking, and building successful research careers. It fosters a collaborative and inclusive community for women in Master’s and Ph.D. programs. Join to connect with role models and take the next step in your research journey.';

        // Replace texts in respective tabs
        $('#tab-nariyukti .event-hero-info p').first().text(nariyuktiText);
        $('#tab-nariyukti .event-hero-info p').eq(1).remove(); // Remove secondary paragraph if any

        $('#tab-lady-ada .event-hero-info p').first().text(ladyAdaText);
        $('#tab-lady-ada .event-hero-info p').eq(1).remove();

        $('#tab-grad-cohort .event-hero-info p').first().text(gradCohortText);
        $('#tab-grad-cohort .event-hero-info p').eq(1).remove();

        // Add 4th tab
        if ($('#tab-btn-4').length === 0) {
            const newTabBtn = `<button class="event-tab-btn" data-tab="tab-extra" role="tab" aria-selected="false" id="tab-btn-4"><i class="fa fa-star" style="margin-right:7px;"></i>Other Events</button>`;
            $('.event-tabs-bar').append('\n            ' + newTabBtn);

            const newTabPanel = $('#tab-lady-ada').clone();
            newTabPanel.attr('id', 'tab-extra');
            newTabPanel.removeClass('active');
            newTabPanel.find('.event-badge').text('Extra Event');
            newTabPanel.find('h2').text('Additional Upcoming Events');
            newTabPanel.find('.event-hero-info p').text('Stay tuned for more ACM-W India events aimed at empowering women in tech. We host numerous regional and student-focused events throughout the year.');
            
            $('.event-tabs-bar').after('\n          ' + $.html(newTabPanel));
        }
    }
    else if (file === 'pages/about.html') {
        // Clear intro or add Geetanjali Ma'am placeholder
        if ($('.geetanjali-intro-placeholder').length === 0) {
            const introHtml = `<div class="geetanjali-intro-placeholder" style="background:#f9f9f9;border:1px dashed #ccc;padding:20px;margin-bottom:20px;">
                <h3 style="margin-top:0;">Message from the Chair (Geetanjali Ma'am Intro)</h3>
                <p><em>[Placeholder content for Geetanjali Ma'am's intro and message goes here. Please update with the actual message.]</em></p>
            </div>`;
            $('.entrytext section').first().prepend(introHtml);
        }
        
        // Ensure Past Chairs table has placeholder data
        const pastChairsTable = $('.data-table').last();
        if (pastChairsTable.length > 0) {
            pastChairsTable.find('tbody').html(`
                <tr><td>[Year - Year]</td><td>[Name of Past Chair]</td><td>[Institution]</td></tr>
                <tr><td>[Year - Year]</td><td>[Name of Past Chair]</td><td>[Institution]</td></tr>
            `);
        }
    }
    else if (file === 'pages/chapters.html') {
        // Add Professional Chapters placeholder
        if ($('#prof-chapters').length === 0) {
            const profHtml = `<section id="prof-chapters" style="margin-top:40px;">
                <h2 class="section-heading">Professional Chapters in India</h2>
                <div style="background:#f9f9f9;border:1px dashed #ccc;padding:20px;">
                    <p><em>[Placeholder: Information about Professional Chapters in India goes here]</em></p>
                    <p>Coming soon. Details about existing professional chapters and how to start a new one will be listed here.</p>
                </div>
            </section>`;
            $('.entrytext').append(profHtml);
        }
    }
    else if (file === 'pages/volunteers.html') {
        $('.entrytext').html(`
            <h1 style="text-align:center;">ACM-W India Volunteers</h1>
            <div style="text-align:center;padding:50px 20px;">
                <h2>Coming Soon</h2>
                <p>Information about ACM-W India volunteers will be available here soon.</p>
            </div>
        `);
    }
    else if (file === 'pages/celebrations.html') {
        $('.entrytext').html(`
            <h1 style="text-align:center;">Celebrations of ACM-W India</h1>
            <div style="text-align:center;padding:50px 20px;">
                <h2>Coming Soon</h2>
                <p>Information about past and upcoming celebrations will be available here soon.</p>
            </div>
        `);
    }
    else if (file === 'pages/newsletter.html') {
        $('.entrytext').html(`
            <h1 style="text-align:center;">Newsletter of ACM-W India</h1>
            <div style="text-align:center;padding:50px 20px;">
                <h2>Coming Soon</h2>
                <p>Our latest newsletters will be published here.</p>
            </div>
        `);
    }
    else if (file === 'pages/blog.html') {
        $('.entrytext').html(`
            <h1 style="text-align:center;">Blogs of ACM-W India</h1>
            <div style="text-align:center;padding:50px 20px;">
                <h2>Coming Soon</h2>
                <p>Read inspiring stories and insights from our community soon.</p>
            </div>
        `);
    }

    fs.writeFileSync(filePath, $.html(), 'utf8');
    console.log(`Updated ${file}`);
});
