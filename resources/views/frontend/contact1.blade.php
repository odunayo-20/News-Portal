@extends('layouts.frontend-app')

@section('content')
 <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <h1>Get In Touch With Us</h1>
            <p>We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <!-- Contact Cards -->
            <div class="contact-cards">
                <div class="contact-card">
                    <div class="contact-card-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h3>Visit Us</h3>
                    <p>829 Cabell Avenue<br>Arlington, VA 22202<br>United States</p>
                </div>

                <div class="contact-card">
                    <div class="contact-card-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h3>Call Us</h3>
                    <p><a href="tel:+10112121240">+1 (01) 123 456 7866</a><br><a href="tel:+10112121241">+1 (01) 123 454 7877</a><br>Mon-Fri: 9AM - 6PM</p>
                </div>

                <div class="contact-card">
                    <div class="contact-card-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <h3>Email Us</h3>
                    <p><a href="mailto:info@website.com">info@website.com</a><br><a href="mailto:support@website.com">support@website.com</a><br>24/7 Support</p>
                </div>
            </div>

            <div class="content-wrapper">
                <!-- Main Column -->
                <div class="main-column">
                    <!-- Contact Form -->
                    <div class="contact-form-section">
                        <div class="success-message" id="successMessage">
                            <i class="fa fa-check-circle" style="font-size: 20px;"></i>
                            <span>Thank you! Your message has been sent successfully.</span>
                        </div>

                        <h3 class="section-title">Send Us A Message</h3>
                        <form id="contactForm">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name">Your Name *</label>
                                    <input type="text" id="name" name="name" required placeholder="John Doe">
                                </div>
                                <div class="form-group">
                                    <label for="email">Your Email *</label>
                                    <input type="email" id="email" name="email" required placeholder="john@example.com">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="tel" id="phone" name="phone" placeholder="+1 (555) 123-4567">
                                </div>
                                <div class="form-group">
                                    <label for="subject">Subject *</label>
                                    <select id="subject" name="subject" required>
                                        <option value="">Select a subject</option>
                                        <option value="general">General Inquiry</option>
                                        <option value="support">Technical Support</option>
                                        <option value="business">Business Proposal</option>
                                        <option value="advertising">Advertising</option>
                                        <option value="feedback">Feedback</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Your Message *</label>
                                <textarea id="message" name="message" rows="6" required placeholder="Write your message here..."></textarea>
                            </div>
                            <button type="submit" class="submit-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

         <style>








        /* Breadcrumb */
        .breadcrumb {
            background: #fff;
            padding: 15px 0;
            border-bottom: 1px solid var(--border-color);
            font-size: 14px;
        }

        .breadcrumb a {
            color: var(--text-gray);
        }

        .breadcrumb a:hover {
            color: var(--primary-blue);
        }

        /* Page Title */
        .page-title {
            background: #fff;
            padding: 40px 0;
            text-align: center;
            border-bottom: 1px solid var(--border-color);
        }

        .page-title h1 {
            font-size: 2.5rem;
            color: var(--text-dark);
            margin-bottom: 10px;
        }

        .page-title p {
            color: var(--text-gray);
            font-size: 1.1rem;
        }

        /* Main Content */
        .main-content {
            padding: 50px 0;
        }

        .content-wrapper {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 30px;
        }

        /* Contact Info Cards */
        .contact-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-bottom: 40px;
        }

        .contact-card {
            background: #fff;
            padding: 35px 25px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.15);
        }

        .contact-card-icon {
            width: 70px;
            height: 70px;
            margin: 0 auto 20px;
            background: var(--light-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-blue);
            font-size: 28px;
        }

        .contact-card h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--text-dark);
        }

        .contact-card p {
            color: var(--text-gray);
            line-height: 1.8;
        }

        .contact-card a {
            color: var(--primary-blue);
            font-weight: 600;
        }

        .contact-card a:hover {
            text-decoration: underline;
        }

        /* Contact Form */
        .contact-form-section {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            margin-bottom: 40px;
        }

        .section-title {
            font-size: 1.8rem;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid var(--primary-blue);
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--text-dark);
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            font-family: inherit;
            font-size: 14px;
            transition: 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(0, 102, 255, 0.1);
        }

        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }

        .submit-btn {
            background: var(--primary-blue);
            color: #fff;
            padding: 14px 40px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            font-size: 15px;
            transition: 0.3s;
        }

        .submit-btn:hover {
            background: #0052cc;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 102, 255, 0.3);
        }

        /* Map Section */
        .map-section {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            margin-bottom: 40px;
        }

        .map-container {
            width: 100%;
            height: 450px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1.5rem;
        }



        /* Sidebar */
        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .widget {
            background: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .widget-title {
            font-size: 1.2rem;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--primary-blue);
        }

        /* Quick Contact Widget */
    









        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .content-wrapper {
                grid-template-columns: 1fr;
            }

            .contact-cards {
                grid-template-columns: 1fr;
            }


        }

        @media (max-width: 768px) {


            .page-title h1 {
                font-size: 2rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .nav-search input {
                width: 120px;
            }

            .page-title {
                padding: 25px 0;
            }

            .contact-form-section {
                padding: 25px 20px;
            }
        }
    </style>
@endsection
