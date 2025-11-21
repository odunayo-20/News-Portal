@extends('layouts.frontend-app')
@section('title', 'Contact Us')
@section('content')
    <div class="container">
        <div class="page-title">
            <h2>Contact Us</h2>
            <p>Get in touch with us today</p>
        </div>

        <div class="contact-wrapper">
            <!-- Contact Info Section -->
            <div class="contact-info">
                <div class="info-card">
                    <div class="info-icon">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <h3>Our Address</h3>
                    <p>123 Business Street<br>New York, NY 10001<br>United States</p>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <h3>Phone Number</h3>
                    <p><a href="tel:+1234567890">+1 (234) 567-890</a><br>
                    <a href="tel:+1234567891">+1 (234) 567-891</a></p>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <h3>Email Address</h3>
                    <p><a href="mailto:info@example.com">info@example.com</a><br>
                    <a href="mailto:support@example.com">support@example.com</a></p>
                </div>

                <div class="info-card">
                    <div class="info-icon">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <h3>Business Hours</h3>
                    <p>Monday - Friday: 9:00 AM - 6:00 PM<br>
                    Saturday: 10:00 AM - 4:00 PM<br>
                    Sunday: Closed</p>
                </div>
            </div>

            <!-- Contact Form Section -->
            <div class="contact-form-section">
                <h2>Send us a Message</h2>
                <p>Have a question? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>

                <form class="contact-form" action="{{ route('contact.submit') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" placeholder="John Doe" required>
                        @error('name')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" placeholder="john@example.com" required>
                        @error('email')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <input type="text" id="subject" name="subject" placeholder="How can we help?" required>
                        @error('subject')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" rows="6" placeholder="Your message here..." required></textarea>
                        @error('message')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-blue">Send Message</button>
                </form>

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>

        <!-- Map Section -->
        <div class="map-section">
            <h2>Find Us On Map</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.1234567890123!2d-74.00601234567890!3d40.71289876543210!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQyJzQ0LjQiTiA3NMKwMDAnMTIuMiJX!5e0!3m2!1sen!2sus!4v1234567890123" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <style>
        :root {
            --primary-blue: #0066ff;
            --dark-blue: #0a1e42;
            --light-blue: #e6f2ff;
            --text-dark: #1a1a1a;
            --text-gray: #666;
            --border-color: #e0e0e0;
            --bg-sky: #f5f9ff;
        }

        .page-title {
            padding: 40px 0;
            /* background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue)); */
            color: #fff;
            text-align: center;
            margin-bottom: 40px;
            border-radius: 10px;
        }

        .page-title h2 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .page-title p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Contact Wrapper */
        .contact-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 60px;
        }

        /* Contact Info Cards */
        .contact-info {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .info-card {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
        }

        .info-icon {
            width: 60px;
            height: 60px;
            background: var(--light-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            color: var(--primary-blue);
            margin: 0 auto 15px;
        }

        .info-card h3 {
            font-size: 1.2rem;
            color: var(--text-dark);
            margin-bottom: 10px;
        }

        .info-card p {
            color: var(--text-gray);
            line-height: 1.8;
            font-size: 0.95rem;
        }

        .info-card a {
            color: var(--primary-blue);
            text-decoration: none;
            transition: color 0.3s;
        }

        .info-card a:hover {
            color: var(--dark-blue);
        }

        /* Contact Form Section */
        .contact-form-section {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .contact-form-section h2 {
            font-size: 1.8rem;
            color: var(--text-dark);
            margin-bottom: 10px;
        }

        .contact-form-section > p {
            color: var(--text-gray);
            margin-bottom: 30px;
            line-height: 1.6;
        }

        /* Form Styles */
        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: 600;
            color: var(--text-dark);
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .form-group input,
        .form-group textarea {
            padding: 12px 15px;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 0.95rem;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(0, 102, 255, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .error-message {
            color: #dc3545;
            font-size: 0.85rem;
            margin-top: 5px;
        }

        .alert {
            padding: 15px 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        /* Map Section */
        .map-section {
            margin-top: 60px;
            padding: 40px;
            background: var(--bg-sky);
            border-radius: 10px;
        }

        .map-section h2 {
            font-size: 1.8rem;
            color: var(--text-dark);
            margin-bottom: 30px;
            text-align: center;
        }

        .map-section iframe {
            border-radius: 10px;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .contact-wrapper {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }

        @media (max-width: 768px) {
            .page-title h2 {
                font-size: 1.8rem;
            }

            .page-title p {
                font-size: 1rem;
            }

            .contact-form-section {
                padding: 25px;
            }

            .info-card {
                padding: 20px;
            }

            .map-section {
                padding: 20px;
            }

            .map-section h2 {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .page-title {
                padding: 20px 0;
                margin-bottom: 20px;
            }

            .page-title h2 {
                font-size: 1.5rem;
            }

            .contact-wrapper {
                gap: 20px;
            }

            .contact-form-section {
                padding: 15px;
            }

            .map-section {
                padding: 15px;
            }
        }
    </style>
@endsection
