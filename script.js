// Toggle mobile menu
document.querySelector('.menu-toggle').addEventListener('click', () => {
    document.querySelector('.nav-links').classList.toggle('active');
});
document.querySelector('.menu-toggle').addEventListener('touchstart', (e) => {
    e.preventDefault();
    document.querySelector('.nav-links').classList.toggle('active');
});

// Filter sites
function filterSites(category) {
    const sites = document.querySelectorAll('.site');
    const buttons = document.querySelectorAll('.filter-buttons button');
    
    buttons.forEach(btn => btn.classList.remove('active'));
    event.target.classList.add('active');

    sites.forEach(site => {
        site.style.display = (category === 'all' || site.classList.contains(category)) ? 'block' : 'none';
    });
}

// Handle image loading issues
document.querySelectorAll('.site img, .hero-image').forEach(img => {
    img.onerror = () => {
        img.src = 'https://via.placeholder.com/1200x600?text=Image+Not+Found';
        img.alt = 'Image Not Available';
    };
    img.onload = () => {
        console.log(`Image loaded successfully: ${img.src}`);
    };
});

// Ensure clickable areas work
document.querySelectorAll('.site h3').forEach(title => {
    title.addEventListener('click', (e) => {
        e.preventDefault();
        const page = title.closest('.site').querySelector('a:last-child').getAttribute('href');
        if (page) window.location.href = page;
    });
    title.addEventListener('touchstart', (e) => { // Touch support
        e.preventDefault();
        const page = title.closest('.site').querySelector('a:last-child').getAttribute('href');
        if (page) window.location.href = page;
    });
});

document.getElementById('site-search').addEventListener('input', (e) => {
    const searchTerm = e.target.value.toLowerCase();
    const sites = document.querySelectorAll('.site');
    sites.forEach(site => {
        const title = site.querySelector('h3').textContent.toLowerCase();
        site.style.display = title.includes(searchTerm) ? 'block' : 'none';
    });
});

function filterGallery(category) {
    const items = document.querySelectorAll('.gallery-item');
    const buttons = document.querySelectorAll('.gallery-filters button');

    buttons.forEach(btn => btn.classList.remove('active'));
    event.target.classList.add('active');

    items.forEach(item => {
        item.style.display = (category === 'all' || item.classList.contains(category)) ? 'block' : 'none';
    });
}
