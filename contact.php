<?php 
$page_title = "Contact Our Firm";
$body_class = "inner-page";
$nav_class = "scrolled";
include('includes/header.php'); 
?>

<!-- Header -->
<header class="page-header">
    <div class="header-content fade-up">
        <span class="header-tagline">Confidential Consultation</span>
        <h1>Get In Touch</h1>
    </div>
</header>

<section class="section-padding">
    <div class="detail-container">
        <!-- Form Section -->
        <div class="content-box fade-up">
            <h2 style="font-size: 2.5rem; margin-bottom: 20px; color: var(--primary-color);">Legal Inquiry Form</h2>
            <p style="color: var(--text-secondary); margin-bottom: 40px;">Please provide brief details about your legal matter. Our team will review your inquiry and contact you to schedule a professional consultation.</p>
            
            <form action="#" style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
                <div style="grid-column: span 1;">
                    <label style="display: block; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 600; margin-bottom: 10px;">Full Name</label>
                    <input type="text" placeholder="John Doe" style="width: 100%; padding: 15px; border: 1px solid #e2e8f0; border-radius: 4px; font-family: inherit; font-size: 1rem; outline: none; transition: 0.3s;" onfocus="this.style.borderColor='#d4af37'">
                </div>
                <div style="grid-column: span 1;">
                    <label style="display: block; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 600; margin-bottom: 10px;">Contact Number</label>
                    <input type="text" placeholder="+91 00000 00000" style="width: 100%; padding: 15px; border: 1px solid #e2e8f0; border-radius: 4px; font-family: inherit; font-size: 1rem; outline: none; transition: 0.3s;" onfocus="this.style.borderColor='#d4af37'">
                </div>
                <div style="grid-column: span 2;">
                    <label style="display: block; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 600; margin-bottom: 10px;">Practice Area</label>
                    <select style="width: 100%; padding: 15px; border: 1px solid #e2e8f0; border-radius: 4px; font-family: inherit; font-size: 1rem; background: white; outline: none; transition: 0.3s;" onfocus="this.style.borderColor='#d4af37'">
                        <option>Family Matter</option>
                        <option>Criminal Matter</option>
                        <option>Cyber Crime</option>
                        <option>Civil Matter</option>
                        <option>Negotiable Matter</option>
                        <option>Trust & NGO</option>
                    </select>
                </div>
                <div style="grid-column: span 2;">
                    <label style="display: block; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px; font-weight: 600; margin-bottom: 10px;">Inquiry Details</label>
                    <textarea rows="6" placeholder="Briefly describe your situation..." style="width: 100%; padding: 15px; border: 1px solid #e2e8f0; border-radius: 4px; font-family: inherit; font-size: 1rem; outline: none; transition: 0.3s; resize: none;" onfocus="this.style.borderColor='#d4af37'"></textarea>
                </div>
                <div style="grid-column: span 2;">
                    <button type="submit" class="btn-gold" style="width: 100%;">Submit Inquiry</button>
                </div>
            </form>
        </div>

        <!-- Contact Info Sidebar -->
        <div class="fade-up">
            <div class="sidebar-card">
                <h3>Office Details</h3>
                <div style="margin-bottom: 40px; line-height: 2;">
                    <div style="display: flex; align-items: flex-start; gap: 20px; margin-bottom: 30px;">
                        <i class="fas fa-location-dot" style="color: var(--secondary-color); font-size: 1.2rem; margin-top: 5px;"></i>
                        <div>
                            <h4 style="color: var(--secondary-color); font-size: 1.1rem; margin-bottom: 5px;">Primary Office</h4>
                            <p style="color: #a0aec0;">Motamava, Kalavad Road,<br>Rajkot, Gujarat - 360005</p>
                        </div>
                    </div>
                    
                    <div style="display: flex; align-items: flex-start; gap: 20px; margin-bottom: 30px;">
                        <i class="fas fa-phone-volume" style="color: var(--secondary-color); font-size: 1.2rem; margin-top: 5px;"></i>
                        <div>
                            <h4 style="color: var(--secondary-color); font-size: 1.1rem; margin-bottom: 5px;">Mobile</h4>
                            <p style="color: #a0aec0; font-size: 1.3rem; font-weight: 700;">+91 84608 07045</p>
                        </div>
                    </div>

                    <div style="display: flex; align-items: flex-start; gap: 20px;">
                        <i class="fas fa-paper-plane" style="color: var(--secondary-color); font-size: 1.2rem; margin-top: 5px;"></i>
                        <div>
                            <h4 style="color: var(--secondary-color); font-size: 1.1rem; margin-bottom: 5px;">Email</h4>
                            <p style="color: #a0aec0;">meetshishangiya93@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div style="background: rgba(255,255,255,0.05); padding: 30px; border-radius: 4px; border: 1px dashed rgba(255,255,255,0.2);">
                    <h4 style="color: var(--white); margin-bottom: 10px;">Practice Locations</h4>
                    <p style="font-size: 0.9rem; color: #a0aec0;">Gujarat High Court (Ahmedabad) & District / sessions Courts (Rajkot).</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>
