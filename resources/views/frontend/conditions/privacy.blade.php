@extends('layouts.frontend-app')
@section('title', 'Privacy Policy')

@section('content')
<!-- Privacy Policy Banner -->
<div class="page-banner py-5" style="background: #f7f7f7;">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="fw-bold">Privacy Policy</h1>
                <p class="text-muted">Learn how we collect, use, and protect your information.</p>
            </div>
        </div>
    </div>
</div>

<!-- Privacy Content -->
<div class="privacy-content py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="mb-4">
                    <h3 class="mb-3">1. Information We Collect</h3>
                    <p>
                        We may collect personal information, including your name, email address, and other contact details when you interact with our website, subscribe to newsletters, or fill out forms.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="mb-3">2. How We Use Your Information</h3>
                    <p>
                        Your information is used to provide and improve our services, send updates or promotional emails, respond to inquiries, and personalize your experience on our website.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="mb-3">3. Data Protection</h3>
                    <p>
                        We implement reasonable technical and organizational measures to protect your personal information from unauthorized access, alteration, disclosure, or destruction.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="mb-3">4. Cookies</h3>
                    <p>
                        Our website uses cookies and similar technologies to enhance your browsing experience. You can manage your cookie preferences in your browser settings.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="mb-3">5. Third-Party Services</h3>
                    <p>
                        We may share your information with trusted third-party services that help us operate our website or provide services to you. These third parties are obligated to protect your data.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="mb-3">6. Your Rights</h3>
                    <p>
                        You have the right to access, update, or delete your personal information. To exercise these rights, please contact us at <a href="mailto:info@example.com">info@example.com</a>.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="mb-3">7. Changes to Privacy Policy</h3>
                    <p>
                        We may update this Privacy Policy periodically. Any changes will be posted on this page with an updated date.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="mb-3">8. Contact Us</h3>
                    <p>
                        For any questions about this Privacy Policy, please contact us at <a href="mailto:info@example.com">info@example.com</a>.
                    </p>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Optional Custom CSS -->
<style>
.page-banner {
    background: #f7f7f7;
}
.privacy-content h3 {
    color: #333;
}
.privacy-content p {
    color: #555;
    line-height: 1.8;
}
.privacy-content a {
    color: #0d6efd;
    text-decoration: underline;
}
</style>
@endsection
