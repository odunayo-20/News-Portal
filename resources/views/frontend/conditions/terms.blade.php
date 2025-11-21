@extends('layouts.frontend-app')
@section('title', 'Terms & Conditions')

@section('content')
<!-- Terms & Conditions Banner -->
<div class="page-banner py-5" style="background: #f7f7f7;">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h1 class="fw-bold">Terms & Conditions</h1>
                <p class="text-muted">Please read these terms and conditions carefully before using our website.</p>
            </div>
        </div>
    </div>
</div>

<!-- Terms Content -->
<div class="terms-content py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="mb-4">
                    <h3 class="mb-3">1. Introduction</h3>
                    <p>
                        Welcome to [Your Website Name]. By accessing or using our website, you agree to comply with these Terms & Conditions. If you do not agree, please do not use our website.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="mb-3">2. Intellectual Property</h3>
                    <p>
                        All content on this website, including text, graphics, logos, and images, is owned by [Your Website Name] or licensed to us. You may not reproduce, distribute, or use any content without our written permission.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="mb-3">3. User Conduct</h3>
                    <p>
                        Users are expected to use our website responsibly. You agree not to post, share, or transmit any unlawful, harmful, or offensive content. We reserve the right to suspend or terminate accounts violating these rules.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="mb-3">4. Limitation of Liability</h3>
                    <p>
                        [Your Website Name] is not liable for any direct, indirect, incidental, or consequential damages resulting from the use or inability to use our website.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="mb-3">5. Privacy Policy</h3>
                    <p>
                        Please refer to our <a href="{{ route('privacy') }}">Privacy Policy</a> for information on how we collect, use, and protect your data.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="mb-3">6. Changes to Terms</h3>
                    <p>
                        We reserve the right to update or modify these Terms & Conditions at any time. Changes will be effective immediately upon posting on the website.
                    </p>
                </div>

                <div class="mb-4">
                    <h3 class="mb-3">7. Contact Us</h3>
                    <p>
                        If you have any questions about these Terms & Conditions, please contact us at <a href="mailto:info@example.com">info@example.com</a>.
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
.terms-content h3 {
    color: #333;
}
.terms-content p {
    color: #555;
    line-height: 1.8;
}
.terms-content a {
    color: #0d6efd;
    text-decoration: underline;
}
</style>
@endsection
