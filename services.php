<?php 
$page_title = "Legal Fields & Specializations";
$body_class = "inner-page";
$nav_class = "scrolled";
include('includes/header.php'); 
?>

<!-- Header -->
<header class="page-header">
    <div class="header-content fade-up">
        <span class="header-tagline">360-Degree Legal Solutions</span>
        <h1>Fields of Practice</h1>
    </div>
</header>

<!-- Services Grid -->
<section class="section-padding" style="background: var(--light-bg);">
    <div class="section-title">
        <span>Comprehensive Counsel</span>
        <h2>Areas of Expertise</h2>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 30px;">
        <!-- Card 1 -->
        <div class="service-card fade-up">
            <i class="fas fa-users-viewfinder"></i>
            <h3>Family Matter</h3>
            <p>Discreet and firm representation in matrimonial disputes, maintenance, and child custody. We focus on protecting family interests while ensuring justice.</p>
            <a href="service-family.php" class="btn-gold" style="padding: 12px 25px; font-size: 0.75rem;">Full Details →</a>
        </div>

        <!-- Card 2 -->
        <div class="service-card fade-up">
            <i class="fas fa-gavel"></i>
            <h3>Criminal Matter</h3>
            <p>Strategic defense across all stages of criminal proceedings, from bail applications to High Court trials. Procedural excellence is our core standard.</p>
            <a href="service-criminal.php" class="btn-gold" style="padding: 12px 25px; font-size: 0.75rem;">Full Details →</a>
        </div>

        <!-- Card 3 -->
        <div class="service-card fade-up">
            <i class="fas fa-microchip"></i>
            <h3>Cyber Crime</h3>
            <p>Advanced legal support for digital evidence, online defamation, and financial fraud. Leveraging technical BCA insights for precise advocacy.</p>
            <a href="service-cyber-crime.php" class="btn-gold" style="padding: 12px 25px; font-size: 0.75rem;">Full Details →</a>
        </div>

        <!-- Card 4 -->
        <div class="service-card fade-up">
            <i class="fas fa-city"></i>
            <h3>Civil Matter</h3>
            <p>Title verification, land disputes, and civil suits. We handle property and recovery matters with deep research and tactical litigation.</p>
            <a href="service-civil.php" class="btn-gold" style="padding: 12px 25px; font-size: 0.75rem;">Full Details →</a>
        </div>

        <!-- Card 5 -->
        <div class="service-card fade-up">
            <i class="fas fa-money-check-dollar"></i>
            <h3>Negotiable Matter</h3>
            <p>Specialized handling of Section 138 (Cheque Bounce) cases, ensuring financial recovery through aggressive legal avenues.</p>
            <a href="service-negotiable.php" class="btn-gold" style="padding: 12px 25px; font-size: 0.75rem;">Full Details →</a>
        </div>

        <!-- Card 6 -->
        <div class="service-card fade-up">
            <i class="fas fa-landmark-dome"></i>
            <h3>Trust & NGO</h3>
            <p>End-to-end guidance for Trust formation, Society registration, and regulatory compliance work across Gujarat.</p>
            <a href="service-trust.php" class="btn-gold" style="padding: 12px 25px; font-size: 0.75rem;">Full Details →</a>
        </div>
    </div>
</section>

<!-- Other Services (Secondary) -->
<section class="section-padding" style="background: var(--white); border-top: 1px solid #eee;">
    <div class="detail-container" style="grid-template-columns: 1fr; max-width: 900px; margin: 0 auto; text-align: center;">
        <div class="fade-up">
            <h3 style="font-size: 2rem; margin-bottom: 40px; color: var(--primary-color);">Additional Legal Services</h3>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 40px;">
                <div>
                    <i class="fas fa-briefcase" style="font-size: 2rem; color: var(--secondary-color); margin-bottom: 15px;"></i>
                    <h4>Labour Court</h4>
                </div>
                <div>
                    <i class="fas fa-cart-shopping" style="font-size: 2rem; color: var(--secondary-color); margin-bottom: 15px;"></i>
                    <h4>Consumer Matter</h4>
                </div>
                <div>
                    <i class="fas fa-file-invoice" style="font-size: 2rem; color: var(--secondary-color); margin-bottom: 15px;"></i>
                    <h4>Gazette Work</h4>
                </div>
                <div>
                    <i class="fas fa-circle-info" style="font-size: 2rem; color: var(--secondary-color); margin-bottom: 15px;"></i>
                    <h4>R.T.I. Work</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>
