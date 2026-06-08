const fs = require('fs');
const path = require('path');

const dir = 'c:/Users/SATISH/Desktop/ACM-W INDIA WEBSITE/ACM-W-India-Website/acmw-india';
const pagesDir = path.join(dir, 'pages');

const filesToProcess = [
  { old: path.join(dir, 'index.html'), new: path.join(dir, 'index.php'), name: 'index' },
  { old: path.join(pagesDir, 'about.html'), new: path.join(pagesDir, 'about.php'), name: 'about' },
  { old: path.join(pagesDir, 'volunteers.html'), new: path.join(pagesDir, 'volunteers.php'), name: 'volunteers' },
  { old: path.join(pagesDir, 'chapters.html'), new: path.join(pagesDir, 'chapters.php'), name: 'chapters' },
  { old: path.join(pagesDir, 'celebrations.html'), new: path.join(pagesDir, 'celebrations.php'), name: 'celebrations' },
  { old: path.join(pagesDir, 'events.html'), new: path.join(pagesDir, 'events.php'), name: 'events' },
  { old: path.join(pagesDir, 'newsletter.html'), new: path.join(pagesDir, 'newsletter.php'), name: 'newsletter' },
  { old: path.join(pagesDir, 'blog.html'), new: path.join(pagesDir, 'blog.php'), name: 'blog' },
];

// First, read index.html to extract header and footer
const indexHtml = fs.readFileSync(path.join(dir, 'index.html'), 'utf8');

// We split header and footer
// The header ends right before `<div id="main">`
const mainStart = indexHtml.indexOf('<div id="main">');
const footerStartMatch = indexHtml.match(/<div class="row">\s*<footer>/);

if (mainStart === -1 || !footerStartMatch) {
  console.error("Could not find bounds for header/footer extraction in index.html");
  process.exit(1);
}

const footerStart = footerStartMatch.index;

let headerContent = indexHtml.substring(0, mainStart);
let footerContent = indexHtml.substring(footerStart);

// Let's replace the #primary-menu innerHTML completely.
const menuReplacement = `<ul id="primary-menu" class="nav-menu">
    <li class="menu-item page_item <?php echo ($active_page == 'index') ? 'current-menu-item current_page_item active' : ''; ?>"><a href="<?php echo $base_path; ?>index.php">Home</a></li>
    <li class="menu-item page_item <?php echo ($active_page == 'about') ? 'current-menu-item current_page_item active' : ''; ?>"><a href="<?php echo $base_path; ?>pages/about.php">About</a></li>
    <li class="menu-item page_item <?php echo ($active_page == 'volunteers') ? 'current-menu-item current_page_item active' : ''; ?>"><a href="<?php echo $base_path; ?>pages/volunteers.php">Volunteers</a></li>
    <li class="menu-item page_item <?php echo ($active_page == 'chapters') ? 'current-menu-item current_page_item active' : ''; ?>"><a href="<?php echo $base_path; ?>pages/chapters.php">Chapters</a></li>
    <li class="menu-item page_item <?php echo ($active_page == 'celebrations') ? 'current-menu-item current_page_item active' : ''; ?>"><a href="<?php echo $base_path; ?>pages/celebrations.php">Celebrations</a></li>
    <li class="menu-item page_item <?php echo ($active_page == 'events') ? 'current-menu-item current_page_item active' : ''; ?>"><a href="<?php echo $base_path; ?>pages/events.php">Events</a></li>
    <li class="menu-item page_item <?php echo ($active_page == 'newsletter') ? 'current-menu-item current_page_item active' : ''; ?>"><a href="<?php echo $base_path; ?>pages/newsletter.php">Newsletter</a></li>
    <li class="menu-item page_item <?php echo ($active_page == 'blog') ? 'current-menu-item current_page_item active' : ''; ?>"><a href="<?php echo $base_path; ?>pages/blog.php">Blog</a></li>
  </ul>`;

headerContent = headerContent.replace(/<ul id="primary-menu" class="nav-menu">[\s\S]*?<\/ul>/, menuReplacement);

// Fix logo links
headerContent = headerContent.replace(/href="\.\.\/index\.html"/g, `href="<?php echo $base_path; ?>index.php"`);
headerContent = headerContent.replace(/href="index\.html"/g, `href="<?php echo $base_path; ?>index.php"`);

// Dynamic Title
headerContent = headerContent.replace(/<title>.*?<\/title>/, '<title><?php echo isset($page_title) ? $page_title : "ACM-W India"; ?></title>');


// Fix footermenu
const footerMenuReplacement = `<ul id="menu-footermenu" class="menu"><li id="menu-item-4400" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4400"><a href="<?php echo $base_path; ?>pages/about.php">About ACM-W India</a></li>
<li id="menu-item-4405" class="menu-item menu-item-type-post_type menu-item-object-page <?php echo ($active_page == 'newsletter') ? 'current-menu-item current_page_item' : ''; ?> menu-item-4405"><a href="<?php echo $base_path; ?>pages/newsletter.php">Newsletters</a></li>
<li id="menu-item-4407" class="menu-item menu-item-type-taxonomy menu-item-object-category <?php echo ($active_page == 'blog') ? 'current-menu-item current_page_item' : ''; ?> menu-item-4407"><a href="<?php echo $base_path; ?>pages/blog.php">Blogs</a></li>
<li id="menu-item-4403" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4403"><a href="<?php echo $base_path; ?>pages/volunteers.php">India Volunteers Network</a></li>
<li id="menu-item-4406" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4406"><a href="<?php echo $base_path; ?>pages/celebrations.php">womENcourage</a></li>
<li id="menu-item-4401" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4401"><a href="<?php echo $base_path; ?>pages/celebrations.php">Celebrations</a></li>
<li id="menu-item-4402" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4402"><a href="<?php echo $base_path; ?>pages/chapters.php">Chapters</a></li>
</ul>`;

footerContent = footerContent.replace(/<ul id="menu-footermenu" class="menu">[\s\S]*?<\/ul>/, footerMenuReplacement);

// Write header and footer
fs.writeFileSync(path.join(dir, 'header.php'), headerContent, 'utf8');
fs.writeFileSync(path.join(dir, 'footer.php'), footerContent, 'utf8');

// Now process all files
filesToProcess.forEach(file => {
  if (!fs.existsSync(file.old)) {
      console.log('Skipping ' + file.old + ' (does not exist)');
      return;
  }
  const html = fs.readFileSync(file.old, 'utf8');
  
  const pMainStart = html.indexOf('<div id="main">');
  const pFooterStartMatch = html.match(/<div class="row">\s*<footer>/);
  
  if (pMainStart === -1 || !pFooterStartMatch) {
    console.log("Could not find bounds for " + file.old);
    return;
  }
  
  const pFooterStart = pFooterStartMatch.index;
  
  let pageContent = html.substring(pMainStart, pFooterStart);
  
  // Breadcrumbs logic
  if (file.name === 'index') {
    pageContent = pageContent.replace(/href="index\.html"/g, 'href="index.php"');
  } else {
    pageContent = pageContent.replace(/href="\.\.\/index\.html"/g, 'href="../index.php"');
    pageContent = pageContent.replace(/href="\.\.\//g, 'href="../'); // just in case
  }
  
  // pageContent might have other .html links to pages
  pageContent = pageContent.replace(/href="([a-zA-Z0-9_-]+)\.html"/g, 'href="$1.php"');
  pageContent = pageContent.replace(/href="pages\/([a-zA-Z0-9_-]+)\.html"/g, 'href="pages/$1.php"');
  
  const basePath = (file.name === 'index') ? '' : '../';
  const includeHeader = (file.name === 'index') ? 'header.php' : '../header.php';
  const includeFooter = (file.name === 'index') ? 'footer.php' : '../footer.php';
  
  // Capitalize name for title
  let titleName = file.name === 'index' ? 'Home' : file.name.charAt(0).toUpperCase() + file.name.slice(1);
  if (titleName === 'About') titleName = 'About us';
  const pageTitle = file.name === 'index' ? 'ACM-W India' : `${titleName} | ACM-W India`;
  
  const finalContent = `<?php
$page_title = '${pageTitle}';
$active_page = '${file.name}';
$base_path = '${basePath}';
include '${includeHeader}';
?>
${pageContent}
<?php include '${includeFooter}'; ?>
`;
  
  fs.writeFileSync(file.new, finalContent, 'utf8');
  
  // Optionally, delete the old html file to avoid confusion
  fs.unlinkSync(file.old);
});

console.log("Conversion complete!");
