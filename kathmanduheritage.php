<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: index.html"); // Redirect to login if not logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore the majestic heritage sites of Nepal, including Kathmandu’s UNESCO World Heritage landmarks, with stunning visuals, detailed information, and interactive maps.">
    <title>Nepal Heritage Explorer - Kathmandu’s Timeless Wonders</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="images/favicon.png">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <h1>Kathmandu Heritage Explorer</h1>
            </div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#sites">Heritage Sites</a></li>
                <li><a href="#map">Map</a></li>
                <li><a href="#travel-tips">Travel Tips</a></li> <!-- Added link for new section -->
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="menu-toggle">☰</div>
        </nav>
    </header>

    <main>
        <section id="home" class="hero-section">
            <img src="image/homeimage.jpeg" alt="Kathmandu Stupa at Sunset" loading="lazy" class="hero-image">
            <div class="hero-text">
                <h1>Discover Kathmandu's Timeless Heritage</h1>
                <p>Unveil the rich cultural and historical legacy of Kathmandu’s Heritage Sites.</p>
                <a href="#sites" class="cta-button">Explore Now</a>
            </div>
        </section>

        <section id="map" class="map-section">
            <h2>Navigate Nepal’s Heritage</h2>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113032.55161096057!2d85.17847399699355!3d27.70903403093296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb198a307baabf%3A0xb5137c1bf18db1ea!2sKathmandu%2044600!5e0!3m2!1sen!2snp!4v1740983047857!5m2!1sen!2snp" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <a href="https://maps.app.goo.gl/Q3vZ9" target="_blank" class="map-link">View Full Interactive Map</a>
        </section>

        <section id="sites" class="sites-section">
            <h2>Explore Kathmandu’s Heritage Sites</h2>
            <div class="filter-buttons">
                <button class="active" onclick="filterSites('all')">All</button>
                <button onclick="filterSites('temple')">Temples</button>
                <button onclick="filterSites('palace')">Palaces</button>
                <button onclick="filterSites('stupa')">Stupas</button>
                <button onclick="filterSites('museum')">Museums</button>
            </div>

            <div class="search-bar">
                <input type="text" id="site-search" placeholder="Search Heritage Sites...">
            </div>

            <div class="sites-grid">
                <!-- Pashupatinath Temple -->
                <div class="site temple">
                    <img src="image/pashupatinath.jpeg" alt="Pashupatinath Temple" loading="lazy" class="site-image">
                    <div class="site-content">
                        <h3>Pashupatinath Temple</h3>
                        <p>One of the holiest Hindu temples dedicated to Lord Shiva, located on the banks of the Bagmati River. A UNESCO World Heritage Site since 1979, it attracts thousands of pilgrims, especially during Shivaratri.</p>
                        <p class="details">Entry Fee: NPR 1000 (Foreigners) | Location: Kathmandu</p>
                        <div class="site-actions">
                            <a href="https://maps.app.goo.gl/g7wAKbmDSjZ3USPg8" target="_blank" class="action-button">Navigate</a>
                        </div>
                    </div>
                </div>

                <!-- Kathmandu Durbar Square -->
                <div class="site palace">
                    <img src="image/ktmdurbar.jpeg" alt="Kathmandu Durbar Square" loading="lazy" class="site-image">
                    <div class="site-content">
                        <h3>Kathmandu Durbar Square</h3>
                        <p>A historic royal palace complex and UNESCO World Heritage Site, featuring intricate Newari architecture, temples, and palaces from the Malla and Shah eras, central to Kathmandu’s history.</p>
                        <p class="details">Entry Fee: NPR 1000 (Foreigners) | Location: Kathmandu</p>
                        <div class="site-actions">
                            <a href="https://maps.app.goo.gl/HDdMG72Vn1Gydz31A" target="_blank" class="action-button">Navigate</a>
                        </div>
                    </div>
                </div>

                <!-- Patan Durbar Square -->
                <div class="site palace">
                    <img src="image/patan.jpeg" alt="Patan Durbar Square" loading="lazy" class="site-image">
                    <div class="site-content">
                        <h3>Patan Durbar Square</h3>
                        <p>A stunning royal palace square in Lalitpur, showcasing Newari architecture, Hindu and Buddhist temples, and historic structures, listed as a UNESCO World Heritage Site since 1979.</p>
                        <p class="details">Entry Fee: NPR 1000 (Foreigners) | Location: Patan, Kathmandu Valley</p>
                        <div class="site-actions">
                            <a href="https://maps.app.goo.gl/z1YE2qfe2XQhMEH27" target="_blank" class="action-button">Navigate</a>
                        </div>
                    </div>
                </div>

                <!-- Bhaktapur Durbar Square -->
                <div class="site palace">
                    <img src="image/bhaktapur.jpeg" alt="Bhaktapur Durbar Square" loading="lazy" class="site-image">
                    <div class="site-content">
                        <h3>Bhaktapur Durbar Square</h3>
                        <p>A historic royal square in Bhaktapur, known for its Newari craftsmanship, pottery, and medieval architecture, a UNESCO World Heritage Site since 1979, featuring the 55-window palace and Nyatapola Temple.</p>
                        <p class="details">Entry Fee: NPR 1800 (Foreigners) | Location: Bhaktapur, Kathmandu Valley</p>
                        <div class="site-actions">
                            <a href="https://maps.app.goo.gl/wZ9B5pzqHLJWhNZc9" target="_blank" class="action-button">Navigate</a>
                        </div>
                    </div>
                </div>

                <!-- Swayambhunath Stupa -->
                <div class="site stupa">
                    <img src="image/swayambhu.jpeg" alt="Swayambhunath Stupa" loading="lazy" class="site-image">
                    <div class="site-content">
                        <h3>Swayambhunath Stupa</h3>
                        <p>Also known as the Monkey Temple, this ancient Buddhist stupa on a hilltop offers panoramic views of Kathmandu Valley, a UNESCO World Heritage Site since 1979, blending Hindu and Buddhist elements.</p>
                        <p class="details">Entry Fee: NPR 200 (Foreigners) | Location: Kathmandu</p>
                        <div class="site-actions">
                            <a href="https://maps.app.goo.gl/aBdL2VNcR8FWey9w7" target="_blank" class="action-button">Navigate</a>
                        </div>
                    </div>
                </div>

                <!-- Boudhanath Stupa -->
                <div class="site stupa">
                    <img src="image/boudha.jpeg" alt="Boudhanath Stupa" loading="lazy" class="site-image">
                    <div class="site-content">
                        <h3>Boudhanath Stupa</h3>
                        <p>One of the largest spherical stupas in Nepal, a UNESCO World Heritage Site since 1979, it’s a major center for Tibetan Buddhism, surrounded by monasteries and vibrant prayer flags.</p>
                        <p class="details">Entry Fee: NPR 400 (Foreigners) | Location: Kathmandu</p>
                        <div class="site-actions">
                            <a href="https://maps.app.goo.gl/JRh6nbVV9dopZVpE7" target="_blank" class="action-button">Navigate</a>
                        </div>
                    </div>
                </div>

                <!-- Changu Narayan Temple -->
                <div class="site temple">
                    <img src="image/changru.jpeg" alt="Changu Narayan Temple" loading="lazy" class="site-image">
                    <div class="site-content">
                        <h3>Changu Narayan Temple</h3>
                        <p>The oldest Hindu temple in Nepal, dating back to the 3rd century AD, featuring Newari architecture and intricate wood carvings, a UNESCO World Heritage Site since 1979, located on a hilltop near Bhaktapur.</p>
                        <p class="details">Entry Fee: NPR 300 (Foreigners) | Location: Bhaktapur, Kathmandu Valley</p>
                        <div class="site-actions">
                            <a href="https://maps.app.goo.gl/Ka8awn7kHTHUcxrg9" target="_blank" class="action-button">Navigate</a>
                        </div>
                    </div>
                </div>

                <!-- Kumari Ghar -->
                <div class="site temple">
                    <img src="image/kumari.jpeg" alt="Kumari Ghar" loading="lazy" class="site-image">
                    <div class="site-content">
                        <h3>Kumari Ghar</h3>
                        <p>The residence of the Kumari, the living goddess of Nepal, located within Kathmandu Durbar Square. This sacred site, revered in Newari culture, is a UNESCO World Heritage Site and a symbol of Kathmandu’s spiritual heritage.</p>
                        <p class="details">Entry Fee: Free | Location: Kathmandu</p>
                        <div class="site-actions">
                            <a href="https://maps.app.goo.gl/kNjo5Tcs2JenMj1SA" target="_blank" class="action-button">Navigate</a>
                        </div>
                    </div>
                </div>

                <!-- Hanuman Dhoka -->
                <div class="site palace">
                    <img src="image/hanuman.jpeg" alt="Hanuman Dhoka" loading="lazy" class="site-image">
                    <div class="site-content">
                        <h3>Hanuman Dhoka</h3>
                        <p>A historic palace complex within Kathmandu Durbar Square, named after the statue of Hanuman, the monkey god. Part of the UNESCO World Heritage Site, it features royal residences and museums from the Malla and Shah dynasties.</p>
                        <p class="details">Entry Fee: Included in Durbar Square's Fee (Foreigners) | Location: Kathmandu</p>
                        <div class="site-actions">
                            <a href="https://maps.app.goo.gl/ERxfToBQNDTCMze97" target="_blank" class="action-button">Navigate</a>
                        </div>
                    </div>
                </div>

                <!-- Kasthamandap -->
                <div class="site temple">
                    <img src="image/kastha.jpeg" alt="Kasthamandap" loading="lazy" class="site-image">
                    <div class="site-content">
                        <h3>Kasthamandap</h3>
                        <p>A historic pavilion in Kathmandu Durbar Square, believed to be built from a single Sal tree in the 7th century. It’s said to have given Kathmandu its name and served as a community center and rest house. Part of the UNESCO World Heritage Site since 1979.</p>
                        <p class="details">Entry Fee: Free (Foreigners, included in Durbar Square fee) | Location: Kathmandu</p>
                        <div class="site-actions">
                            <a href="https://maps.app.goo.gl/HDdMG72Vn1Gydz31A" target="_blank" class="action-button">Navigate</a>
                        </div>
                    </div>
                </div>

                <!-- Taleju Temple -->
                <div class="site temple">
                    <img src="image/taleju.jpeg" alt="Taleju Temple" loading="lazy" class="site-image">
                    <div class="site-content">
                        <h3>Taleju Temple</h3>
                        <p>A magnificent three-tiered temple in Kathmandu Durbar Square dedicated to Goddess Taleju Bhawani, the patron deity of the Malla kings. Built in 1564, it’s a UNESCO World Heritage Site, accessible only during Dashain for the public.</p>
                        <p class="details">Entry Fee: NPR 1000 (Foreigners, included in Durbar Square fee) | Location: Kathmandu</p>
                        <div class="site-actions">
                            <a href="https://maps.app.goo.gl/HDdMG72Vn1Gydz31A" target="_blank" class="action-button">Navigate</a>
                        </div>
                    </div>
                </div>

                <!-- Krishna Mandir (Patan) -->
                <div class="site temple">
                    <img src="image/krishna.jpeg" alt="Krishna Mandir Patan" loading="lazy" class="site-image">
                    <div class="site-content">
                        <h3>Krishna Mandir (Patan)</h3>
                        <p>A stunning 17th-century stone temple in Patan Durbar Square, built in the Shikhara style by King Siddhi Narsingh Malla. Dedicated to Lord Krishna, it’s a UNESCO World Heritage Site known for its intricate carvings.</p>
                        <p class="details">Entry Fee: Free (Foreigners) | Location: Patan, Kathmandu Valley</p>
                        <div class="site-actions">
                            <a href="https://maps.app.goo.gl/z1YE2qfe2XQhMEH27" target="_blank" class="action-button">Navigate</a>
                        </div>
                    </div>
                </div>

                <!-- Nyatapola Temple -->
                <div class="site temple">
                    <img src="image/nyatapola.jpeg" alt="Nyatapola Temple" loading="lazy" class="site-image">
                    <div class="site-content">
                        <h3>Nyatapola Temple</h3>
                        <p>A five-story pagoda temple in Bhaktapur Durbar Square, built in 1702 by King Bhupatindra Malla. Dedicated to Goddess Siddhi Lakshmi, it’s the tallest temple in Nepal and a UNESCO World Heritage Site since 1979.</p>
                        <p class="details">Entry Fee: NPR 1800 (Foreigners) | Location: Bhaktapur, Kathmandu Valley</p>
                        <div class="site-actions">
                            <a href="https://maps.app.goo.gl/wZ9B5pzqHLJWhNZc9" target="_blank" class="action-button">Navigate</a>
                        </div>
                    </div>
                </div>

                <!-- Kirtipur Old Town -->
                <div class="site palace">
                    <img src="image/kritipur.jpeg" alt="Kirtipur Old Town" loading="lazy" class="site-image">
                    <div class="site-content">
                        <h3>Kirtipur Old Town</h3>
                        <p>A historic Newari town southwest of Kathmandu, known for its medieval architecture, Bagh Bhairab Temple, and resistance against the Gorkha conquest in 1768. While not individually UNESCO-listed, it complements the valley’s heritage.</p>
                        <p class="details">Entry Fee: Free | Location: Kirtipur, Kathmandu Valley</p>
                        <div class="site-actions">
                            <a href="https://maps.app.goo.gl/NjVT3Z2vTc2EjKXf9" target="_blank" class="action-button">Navigate</a>
                        </div>
                    </div>
                </div>

                <!-- Narayanhiti Museum -->
                <div class="site museum">
                    <img src="image/narayan.jpeg" alt="Narayanhiti Palace Museum" loading="lazy" class="site-image">
                    <div class="site-content">
                        <h3>Narayanhiti Palace Museum</h3>
                        <p>A former royal residence in Kathmandu, transformed into a museum after Nepal became a republic in 2008. Built in 1963 by King Mahendra, it showcases Nepal’s monarchical history with grand architecture and 52 rooms named after districts.</p>
                        <p class="details">Entry Fee: NPR 1000 (Foreigners) | Location: Kathmandu, Nepal</p>
                        <div class="site-actions">
                            <a href="https://maps.app.goo.gl/5QAsSqoHH9adEjRr8" target="_blank" class="action-button">Navigate</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="event-calendar" class="calendar-section">
            <h2>Event Calendar</h2>
            <div class="calendar-grid">
                <!-- Row 1 -->
                <div class="calendar-event">
                    <span class="event-date">Feb 26, 2025</span>
                    <h3>Shivaratri</h3>
                    <p>Celebrated at Pashupatinath Temple with thousands of devotees honoring Lord Shiva with night-long prayers and rituals.</p>
                    <a href="https://maps.app.goo.gl/g7wAKbmDSjZ3USPg8" target="_blank" class="action-button">Location</a>
                </div>
                <div class="calendar-event">
                    <span class="event-date">May 12, 2025</span>
                    <h3>Buddha Jayanti</h3>
                    <p>Festival at Boudhanath and Swayambhunath Stupas honoring Lord Buddha’s birth, enlightenment, and death with processions.</p>
                    <a href="https://maps.app.goo.gl/JRh6nbVV9dopZVpE7" target="_blank" class="action-button">Location</a>
                </div>
                <div class="calendar-event">
                    <span class="event-date">Mar 13, 2025</span>
                    <h3>Holi Festival</h3>
                    <p>Major Hindu festival celebrated heavily in Kathmandu’s Durbar Squares with colors and water with Friends and Families</p>
                    <a href="https://maps.app.goo.gl/HDdMG72Vn1Gydz31A" target="_blank" class="action-button">Location</a>
                </div>
                <!-- Row 2 -->
                <div class="calendar-event">
                    <span class="event-date">April 13, 2025</span>
                    <h3>Bisket Jatra</h3>
                    <p>A vibrant Newari New Year festival in Bhaktapur Durbar Square, featuring chariot processions and tug-of-war with the Bisket pole.</p>
                    <a href="https://maps.app.goo.gl/wZ9B5pzqHLJWhNZc9" target="_blank" class="action-button">Location</a>
                </div>
                <div class="calendar-event">
                    <span class="event-date">August 26, 2025</span>
                    <h3>Teej Festival</h3>
                    <p>Women’s festival at Pashupatinath Temple, with fasting, dancing, and prayers for marital bliss and prosperity.</p>
                    <a href="https://maps.app.goo.gl/g7wAKbmDSjZ3USPg8" target="_blank" class="action-button">Location</a>
                </div>
                <div class="calendar-event">
                    <span class="event-date">October 20, 2025</span>
                    <h3>Tihar (Deepawali)</h3>
                    <p>Festival of lights celebrated valley-wide, with Lakshmi Puja and illuminations, especially vibrant in Patan and Bhaktapur.</p>
                    <a href="https://maps.app.goo.gl/z1YE2qfe2XQhMEH27" target="_blank" class="action-button">Location</a>
                </div>
            </div>
        </section>

        <section id="photo-gallery" class="gallery-section">
            <h2>Photo Gallery</h2>
            <div class="gallery-filters">
                <button class="active" onclick="filterGallery('all')">All</button>
                <button onclick="filterGallery('temple')">Temples</button>
                <button onclick="filterGallery('palace')">Palaces</button>
                <button onclick="filterGallery('stupa')">Stupas</button>
                <button onclick="filterGallery('museum')">Museum</button>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item temple">
                    <img src="image/pashupatinath.jpeg" alt="Pashupatinath Temple" loading="lazy">
                </div>
                <div class="gallery-item palace">
                    <img src="image/ktmdurbar.jpeg" alt="Kathmandu Durbar Square" loading="lazy">
                </div>
                <div class="gallery-item stupa">
                    <img src="image/boudha.jpeg" alt="Boudhanath Stupa" loading="lazy">
                </div>
                <div class="gallery-item temple">
                    <img src="image/changru.jpeg" alt="Changu Narayan Temple" loading="lazy">
                </div>
                <div class="gallery-item palace">
                    <img src="image/patan.jpeg" alt="Patan Durbar Square" loading="lazy">
                </div>
                <div class="gallery-item palace">
                    <img src="image/patan2.jpeg" alt="Patan Durbar Square" loading="lazy">
                </div>
                <div class="gallery-item palace">
                    <img src="image/patan3.jpeg" alt="Patan Durbar Square" loading="lazy">
                </div>
                <div class="gallery-item temple">
                    <img src="image/pashupati2.jpeg" alt="Pashupatinath Temple" loading="lazy">
                </div>
                <div class="gallery-item temple">
                    <img src="image/changru2.jpeg" alt="Changu Narayan Temple" loading="lazy">
                </div>
                <div class="gallery-item stupa">
                    <img src="image/boudha2.jpeg" alt="Boudhanath Stupa" loading="lazy">
                </div>
                <div class="gallery-item museum">
                    <img src="image/narayan.jpeg" alt="Narayanhiti" loading="lazy">
                </div>
                <div class="gallery-item palace">
                    <img src="image/kritipur.jpeg" alt="Narayanhiti" loading="lazy">
                </div>
            </div>
        </section>

        <!-- New Travel Tips Section -->
        <section id="travel-tips" class="tips-section">
            <h2>Travel Tips for Kathmandu</h2>
            <div class="tips-grid">
                <div class="tip">
                    <h3>Best Time to Visit</h3>
                    <p>October to November offers clear skies and pleasant weather, ideal for exploring heritage sites.</p>
                </div>
                <div class="tip">
                    <h3>Local Transport</h3>
                    <p>Use microbuses or taxis; negotiate fares in advance as meters are rare.</p>
                </div>
                <div class="tip">
                    <h3>Cultural Etiquette</h3>
                    <p>Dress modestly at temples; remove shoes before entering sacred areas.</p>
                </div>
                <div class="tip">
                    <h3>Currency Tips</h3>
                    <p>Carry small denominations of NPR; ATMs are widely available in Kathmandu.</p>
                </div>
            </div>
        </section>

        <section id="contact" class="contact-section">
            <h2>Contact Us</h2>
            <p>Explore Kathmandu's heritage with us. For inquiries, partnerships, or bookings, reach out today.</p>
            <form action="heritage.php" method="POST" class="contact-form">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit" class="submit-button">Send Message</button>
            </form>
        </section>

        <section id="team" class="team-section">
            <h2>Our Development Team</h2>
            <div class="team-grid">
                <div class="team-member">
                    <h3>Robinson Ghimire</h3>
                    <p>Lead Developer (Group Leader)</p>
                </div>
                <div class="team-member">
                    <h3>Prajwal Adhikari</h3>
                    <p>Layout Designer</p>
                </div>
                <div class="team-member">
                    <h3>Nissan Dangol</h3>
                    <p>Tester</p>
                </div>
                <div class="team-member">
                    <h3>Utsav Maharjan</h3>
                    <p>Advisor</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h3>Kathmandu Heritage Explorer</h3>
                <p>Preserving and showcasing Kathmandu's cultural legacy for the world.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#sites">Heritage Sites</a></li>
                    <li><a href="#map">Map</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p>Email: explorekathmandu@gmail.com</p>
                <p>Phone: +977-9811094407</p>
            </div>
        </div>

        <section id="support" class="support-section">
            <div class="support-content">
                <h2>Support Our Mission</h2>
                <p>Contribute to preserving Kathmandu’s rich heritage for future generations.</p>
                <a href="https://paypal.me/youraccount" target="_blank" class="donate-button">Donate Now</a>
            </div>
        </section>

        <div class="footer-bottom">
            <p>© 2025 Kathmandu Heritage Explorer. All Rights Reserved.</p>
        </div>
    </footer>

    <button id="back-to-top" title="Back to Top">↑</button>

    <script src="script.js"></script>
</body>
</html>
