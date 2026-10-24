
<?php
$pageTitle = "SN DESIGN & CONSTRUCTION | Home";
$pageDescription = "SN Design & Construction offers architectural planning, interior design, modular kitchens, flooring, painting and construction services in Delhi.";
require_once 'config/settings.php';
include 'includes/header.php';
?>

<main>
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <div class="eyebrow">Design · Build · Transform</div>
                <h1>Building Spaces.<br>Creating <span>Experiences.</span></h1>
                <p>
                    Thoughtful architecture, refined interiors and dependable
                    construction solutions designed around your vision.
                    Let's bring your dream space to life.
                </p>
                <div class="buttons">
                    <a href="#projects" class="btn btn-gold">Explore Our Work</a>
                    <a href="#contact" class="btn btn-outline">Discuss Your Project</a>
                </div>
            </div>
        </div>
    </section>

    <section class="stats">
        <div class="container stats-grid">
            <div class="stat">
                <strong>10+ Years</strong>
                <span>Professional Experience</span>
            </div>
            <div class="stat">
                <strong>Design to Build</strong>
                <span>Integrated Project Solutions</span>
            </div>
            <div class="stat">
                <strong>Client First</strong>
                <span>Quality & Transparent Communication</span>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="container about-grid">
            <div class="about-image" role="img" aria-label="Modern interior design"></div>
            <div class="about-copy">
                <div class="eyebrow">About Our Company</div>
                <h2>We Turn Your Vision Into Reality</h2>
                <div class="gold-line"></div>
                <p>
                    SN Design & Construction provides design and construction
                    solutions for residential and commercial spaces. From
                    planning to finishing, our focus is on thoughtful design,
                    practical execution and lasting quality.
                </p>
                <p>
                    Led by Sandeep Pathak, Managing Director and Civil Engineer
                    with 10 years of experience, we aim to make every project
                    organised, functional and tailored to our clients.
                </p>
                <a href="#contact" class="btn btn-gold">Plan Your Project</a>
            </div>
        </div>
    </section>

    <section class="services-section" id="services">
        <div class="container">
            <div class="section-heading">
                <div class="eyebrow">What We Do</div>
                <h2>Our Services</h2>
                <p>Complete solutions for construction, interiors and finishing, with attention to every detail.</p>
            </div>

            <div class="services-grid">
                <article class="service-card">
                    <div class="service-number">01</div>
                    <h3>Design & Architecture</h3>
                    <p>Architectural concepts, space planning and design coordination tailored to your requirements.</p>
                    <a class="service-link" href="#contact">Discuss your project →</a>
                </article>

                <article class="service-card">
                    <div class="service-number">02</div>
                    <h3>Interior Furniture</h3>
                    <p>Furniture layouts and interior solutions for elegant, functional living and workspaces.</p>
                    <a class="service-link" href="#contact">Discuss your project →</a>
                </article>

                <article class="service-card">
                    <div class="service-number">03</div>
                    <h3>Modular Kitchen & Office</h3>
                    <p>Practical modular kitchens, office furniture and storage planned around your daily needs.</p>
                    <a class="service-link" href="#contact">Discuss your project →</a>
                </article>

                <article class="service-card">
                    <div class="service-number">04</div>
                    <h3>Flooring Work</h3>
                    <p>Flooring solutions selected for durability, appearance and the needs of each space.</p>
                    <a class="service-link" href="#contact">Discuss your project →</a>
                </article>

                <article class="service-card">
                    <div class="service-number">05</div>
                    <h3>Paint & Polish Work</h3>
                    <p>Careful surface preparation, painting and polishing for a clean, refined finish.</p>
                    <a class="service-link" href="#contact">Discuss your project →</a>
                </article>

                <article class="service-card">
                    <div class="service-number">06</div>
                    <h3>Electrical, Fire & HVAC</h3>
                    <p>Coordination of electrical, fire-safety and HVAC work for residential and commercial spaces.</p>
                    <a class="service-link" href="#contact">Discuss your project →</a>
                </article>

                <article class="service-card">
                    <div class="service-number">07</div>
                    <h3>Aluminium Doors & Windows</h3>
                    <p>Modern aluminium door and window solutions with a neat, practical finish.</p>
                    <a class="service-link" href="#contact">Discuss your project →</a>
                </article>

                <article class="service-card">
                    <div class="service-number">08</div>
                    <h3>Planning & Selection</h3>
                    <p>Support with material selection, layout planning and project decisions.</p>
                    <a class="service-link" href="#contact">Discuss your project →</a>
                </article>

                <article class="service-card">
                    <div class="service-number">09</div>
                    <h3>Construction Solutions</h3>
                    <p>Project coordination and construction planning based on the agreed scope and requirements.</p>
                    <a class="service-link" href="#contact">Discuss your project →</a>
                </article>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <div class="section-heading">
                <div class="eyebrow">Selected Spaces</div>
                <h2>Design Inspiration</h2>
                <p>Contemporary interiors and finishes to inspire your next project. These are sample images, not verified company projects.</p>
            </div>

            <div class="projects-grid">
                <article class="project">
                    <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=900&q=80"
                         alt="Contemporary living room" loading="lazy">
                    <div class="project-info">
                        <small>Residential Interiors</small>
                        <h3>Modern Living Spaces</h3>
                    </div>
                </article>

                <article class="project">
                    <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=900&q=80"
                         alt="Contemporary residential interior" loading="lazy">
                    <div class="project-info">
                        <small>Interior Design</small>
                        <h3>Refined Details</h3>
                    </div>
                </article>

                <article class="project">
                    <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=900&q=80"
                         alt="Modern home interior" loading="lazy">
                    <div class="project-info">
                        <small>Space Planning</small>
                        <h3>Designed for Living</h3>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="why-section">
        <div class="container">
            <div class="section-heading">
                <div class="eyebrow">The SN Approach</div>
                <h2>Why Work With Us?</h2>
                <p>A good project begins with understanding your needs and ends with careful attention to execution.</p>
            </div>

            <div class="why-grid">
                <div class="why-item">
                    <span>01 / EXPERIENCE</span>
                    <h3>Experienced Leadership</h3>
                    <p>Project guidance from a civil engineer with 10 years of professional experience.</p>
                </div>
                <div class="why-item">
                    <span>02 / PLANNING</span>
                    <h3>Practical Design</h3>
                    <p>Design decisions that balance appearance, function and your requirements.</p>
                </div>
                <div class="why-item">
                    <span>03 / QUALITY</span>
                    <h3>Detail Focused</h3>
                    <p>Careful consideration of finishes, materials and project coordination.</p>
                </div>
                <div class="why-item">
                    <span>04 / COMMUNICATION</span>
                    <h3>Clear Discussions</h3>
                    <p>Discuss your goals, project scope and expectations before work begins.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="contact-box">
                <div class="contact-info">
                    <div class="eyebrow">Let's Talk</div>
                    <h2>Have a Project in Mind?</h2>
                    <p>Tell us what you are planning. We can discuss your requirements and the next steps.</p>

                    <p><strong>Managing Director</strong><br>
                    Sandeep Pathak, Civil Engineer</p>

                    <p><strong>Phone / WhatsApp</strong><br>
                    <a href="tel:+918799396780">+918799396780</a></p>

                    <p><strong>Email</strong><br>
                    <a href="mailto:sndesign&construction26@gmail.com">sndesign&construction26@gmail.com</a></p>

                    <p><strong>Office</strong><br>
                    H. No. 135, Ram Niwas, Maidan Garhi,<br>
                    IGNOU Road, Saket, New Delhi 110003</p>
                </div>

                <div class="contact-form">
                    <h2>Request a Consultation</h2>

                    <form id="enquiryForm">
                        <div class="form-grid">
                            <div class="field">
                                <label for="name">Full Name *</label>
                                <input id="name" name="name" required maxlength="100" placeholder="Your name">
                            </div>

                            <div class="field">
                                <label for="phone">Phone Number *</label>
                                <input id="phone" name="phone" type="tel" required maxlength="20" placeholder="Your phone number">
                            </div>

                            <div class="field full">
                                <label for="email">Email Address</label>
                                <input id="email" name="email" type="email" maxlength="150" placeholder="Your email (optional)">
                            </div>

                            <div class="field full">
                                <label for="service">Service Required *</label>
                                <select id="service" name="service" required>
                                    <option value="">Choose a service</option>
                                    <option>Construction</option>
                                    <option>Interior Furniture</option>
                                    <option>Modular Kitchen & Office Furniture</option>
                                    <option>Design & Architecture</option>
                                    <option>Flooring Work</option>
                                    <option>Paint & Polish Work</option>
                                    <option>Electrical, Fire & HVAC</option>
                                    <option>Aluminium Doors & Windows</option>
                                    <option>Planning & Selection</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div class="field full">
                                <label for="message">Project Details *</label>
                                <textarea id="message" name="message" required maxlength="2000" placeholder="Tell us about your project"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-gold">
                            Send Enquiry on WhatsApp →
                        </button>

                        <p class="form-note">
                            This form opens WhatsApp with your enquiry. It does not yet save information to a database.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<a class="whatsapp"
   href="https://wa.me/<?php echo htmlspecialchars($whatsappNumber, ENT_QUOTES, 'UTF-8');
   target="_blank"
   rel="noopener noreferrer">WhatsApp Us</a>

<script>
document.getElementById("enquiryForm").addEventListener("submit", function (event) {
    event.preventDefault();

    const name = document.getElementById("name").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const email = document.getElementById("email").value.trim();
    const service = document.getElementById("service").value;
    const message = document.getElementById("message").value.trim();

    if (!name || !phone || !service || !message) {
        alert("Please complete all required fields.");
        return;
    }

    const enquiry = [
        "New Website Enquiry - SN DESIGN & CONSTRUCTION",
        "",
        "Name: " + name,
        "Phone: " + phone,
        "Email: " + (email || "Not provided"),
        "Service: " + service,
        "Project Details: " + message
    ].join("\n");

    const whatsappUrl =
    "https://wa.me/<?php echo htmlspecialchars($whatsappNumber, ENT_QUOTES, 'UTF-8'); ?>?text=" +
    encodeURIComponent(enquiry);

    window.open(whatsappUrl, "_blank", "noopener,noreferrer");
});
</script>

<?php include 'includes/footer.php'; ?>
