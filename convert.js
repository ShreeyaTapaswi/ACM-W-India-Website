const fs = require('fs');
const path = require('path');

const europeHtmlPath = path.join(__dirname, 'ACM-W-Europe_Website.html');
const acmwIndiaPath = path.join(__dirname, 'acmw-india');

const europeHtml = fs.readFileSync(europeHtmlPath, 'utf8');

// Find split points
const splitTopStr = '                <div class="entrytext">\r\n';
const splitBottomStr = '                </div>\r\n              </div>\r\n                          </div>';

// Note: Windows lines usually have \r\n, so let's normalize or use regex
const topMatch = europeHtml.match(/<div class="entrytext">/);
const bottomMatch = europeHtml.indexOf('                </div>\r\n              </div>\r\n                          </div>\r\n          </div>\r\n        </div>\r\n        \r\n  <aside id="secondary" class="columns large-3 medium-3 small-12" role="complementary">');

if (!topMatch || bottomMatch === -1) {
    // Try matching without strict whitespace
    console.log("Could not find strict split points. Falling back to regex...");
}

const topRegex = /([\s\S]*?<div class="entrytext">)/;
const topPart = europeHtml.match(topRegex)[1];

const bottomRegex = /(<\/div>\s*<\/div>\s*<\/div>\s*<\/div>\s*<\/div>\s*<aside id="secondary"[\s\S]*)/;
const bottomPart = europeHtml.match(bottomRegex)[1];

console.log("Extracted Top Part length:", topPart.length);
console.log("Extracted Bottom Part length:", bottomPart.length);

// Files to process
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
    if (!fs.existsSync(filePath)) {
        console.log("Skipping", file, "not found.");
        return;
    }

    const fileHtml = fs.readFileSync(filePath, 'utf8');
    
    // Extract title
    const titleMatch = fileHtml.match(/<title>(.*?)<\/title>/);
    const pageTitle = titleMatch ? titleMatch[1] : 'ACM-W India';

    // Extract main content
    const mainContentMatch = fileHtml.match(/<main class="main-column" role="main">([\s\S]*?)<\/main>/);
    let mainContent = mainContentMatch ? mainContentMatch[1] : '';

    // If there's a banner, maybe prepend it to the content?
    // Actually the Europe template has its own banner inside the top part: 
    // <div class="acm-banner-container" style="background: url('https://acmweurope.acm.org/wp-content/uploads/2020/11/bannerMap-3-1024x195.png') ...
    // We will just let Europe's banner stay. But we should update "ACM-W Europe" to "ACM-W India" globally.

    let customizedTop = topPart.replace(/ACM-W Europe/gi, 'ACM-W India')
                               .replace(/ACM Women Europe/gi, 'ACM Women India')
                               .replace(/ACM-WE/g, 'ACM-W India');
    
    // Replace the title
    customizedTop = customizedTop.replace(/<title>.*?<\/title>/, `<title>${pageTitle}</title>`);
    
    // We should fix paths like href="../css/style.css" - Europe doesn't use local css, so we don't need to add anything.
    
    let customizedBottom = bottomPart.replace(/ACM-W Europe/gi, 'ACM-W India')
                                     .replace(/ACM Women Europe/gi, 'ACM Women India')
                                     .replace(/ACM-WE/g, 'ACM-W India');

    // Make the content look okay without my custom CSS by removing class names that I added that conflict, or just leaving them as is.
    // They won't hurt.
    
    const newHtml = customizedTop + mainContent + customizedBottom;

    fs.writeFileSync(filePath, newHtml, 'utf8');
    console.log("Updated", file);
});

// Finally, delete css and js folders
const cssPath = path.join(acmwIndiaPath, 'css');
const jsPath = path.join(acmwIndiaPath, 'js');

if (fs.existsSync(cssPath)) fs.rmSync(cssPath, { recursive: true, force: true });
if (fs.existsSync(jsPath)) fs.rmSync(jsPath, { recursive: true, force: true });

console.log("Deleted css and js folders.");
