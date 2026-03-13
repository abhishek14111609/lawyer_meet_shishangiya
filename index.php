<?php 
$page_title = "Legal Excellence & Justice";
$body_class = "home";
$nav_class = ""; 
include('includes/header.php'); 
?>

<!-- Hero Section -->
<section class="hero">
    <div class="header-content fade-up" style="max-width: 1000px;">
        <span class="header-tagline">Restoring Balance. Ensuring Justice.</span>
        <h1 style="font-size: 5rem; line-height: 1.1; margin: 20px 0;">Advocacy Rooted in Integrity & Professionalism</h1>
        <p style="font-size: 1.4rem; color: #a0aec0; max-width: 700px; margin: 0 auto 40px;">"My purpose is to give justice to the unjust through dedicated legal counsel and tireless pursuit of the truth."</p>
        <a href="contact.php" class="btn-gold">Consult Today</a>
    </div>
</section>

<!-- Mission Quote -->
<section class="section-padding" style="background: var(--light-bg); text-align: center;">
    <div class="fade-up" style="max-width: 800px; margin: 0 auto;">
        <i class="fas fa-quote-left" style="font-size: 3rem; color: var(--secondary-color); margin-bottom: 30px; opacity: 0.3;"></i>
        <h2 style="font-family: 'Playfair Display', serif; font-size: 2.5rem; font-style: italic; font-weight: 500;">
            Based in Rajkot, Gujarat, we bridge the gap between complex legal challenges and fair resolutions with a modern, analytical approach.
        </h2>
    </div>
</section>

<!-- Brief About -->
<section class="section-padding">
    <div class="detail-container">
        <div class="fade-up">
            <div style="position: relative;">
                <img src="2.jpeg" alt="Advocate Meet S Shishangiya" style="width: 100%; border-radius: 4px; box-shadow: var(--shadow-premium);">
                <div style="position: absolute; bottom: -30px; right: -30px; background: var(--secondary-color); padding: 40px; border-radius: 4px; display: none;">
                    <!-- Placeholder for extra badge if needed -->
                </div>
            </div>
        </div>
        <div class="fade-up" style="padding-top: 40px;">
            <div class="section-title" style="text-align: left; margin-bottom: 40px;">
                <span>The Advocate</span>
                <h2 style="font-size: 3rem;">Meet S Shishangiya</h2>
            </div>
            <p style="font-size: 1.2rem; margin-bottom: 30px; color: var(--text-secondary);">
                With a dual background in <strong>Computer Applications (BCA)</strong> and <strong>Law (LLB)</strong>, Advocate Meet brings a unique, systematic logic to legal advocacy. 
                Practicing primarily at the <strong>Gujarat High Court</strong>, his mission is centered on technical precision and unwavering ethical standards.
            </p>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px; margin-bottom: 40px;">
                <div>
                    <h4 style="color: var(--primary-color); font-size: 1.4rem; margin-bottom: 10px;">High Court Practice</h4>
                    <p style="color: var(--text-secondary); font-size: 0.95rem;">Extensive experience in appellate litigation and constitutional matters.</p>
                </div>
                <div>
                    <h4 style="color: var(--primary-color); font-size: 1.4rem; margin-bottom: 10px;">Technical Advocacy</h4>
                    <p style="color: var(--text-secondary); font-size: 0.95rem;">Expertise in Cyber Law, digital evidence, and modern discovery.</p>
                </div>
            </div>
            <a href="about.php" class="btn-gold" style="background: transparent; border: 1px solid var(--secondary-color); color: var(--secondary-color);">Explore Full Profile</a>
        </div>
    </div>
</section>

<!-- Expertise Grid Preview -->
<section class="section-padding" style="background: var(--primary-color); color: var(--white);">
    <div class="section-title">
        <span style="color: var(--secondary-color);">Our Expertise</span>
        <h2 style="color: var(--white);">Legal Specializations</h2>
    </div>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 40px;">
        <div class="service-card fade-up" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
            <i class="fas fa-users" style="color: var(--secondary-color);"></i>
            <h3 style="color: var(--white);">Family Matter</h3>
            <p style="color: #a0aec0;">Navigating domestic difficulties with compassion and legal resolve.</p>
            <a href="service-family.php" style="color: var(--secondary-color); text-decoration: none; font-weight: 600; letter-spacing: 1px;">VIEW DETAILS →</a>
        </div>
        <div class="service-card fade-up" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
            <i class="fas fa-handcuffs" style="color: var(--secondary-color);"></i>
            <h3 style="color: var(--white);">Criminal Matter</h3>
            <p style="color: #a0aec0;">Robust defense strategies for high-stakes criminal litigation.</p>
            <a href="service-criminal.php" style="color: var(--secondary-color); text-decoration: none; font-weight: 600; letter-spacing: 1px;">VIEW DETAILS →</a>
        </div>
        <div class="service-card fade-up" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);">
            <i class="fas fa-shield-virus" style="color: var(--secondary-color);"></i>
            <h3 style="color: var(--white);">Cyber Crime</h3>
            <p style="color: #a0aec0;">Technical-legal expertise for digital scams and IT Act violations.</p>
            <a href="service-cyber-crime.php" style="color: var(--secondary-color); text-decoration: none; font-weight: 600; letter-spacing: 1px;">VIEW DETAILS →</a>
        </div>
    </div>
    <div style="text-align: center; margin-top: 80px;">
        <a href="services.php" class="btn-gold">View All Areas of Practice</a>
    </div>
</section>

<?php include('includes/footer.php'); ?>
