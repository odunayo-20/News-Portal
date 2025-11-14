<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NextPage - Blog Template</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: #333;
        }

        /* Top Bar */
        .topbar {
            background-color: #001f3f;
            color: white;
            padding: 12px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
        }

        .topbar-left a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        .topbar-right {
            display: flex;
            gap: 15px;
        }

        .social-icon {
            color: white;
            text-decoration: none;
            font-size: 14px;
        }

        /* Header */
        .header {
            background-color: white;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #eee;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            color: #0066FF;
            text-decoration: none;
        }

        /* Promo Banner */
        .promo-banner {
            background: linear-gradient(135deg, #d32f2f 0%, #c62828 100%);
            color: white;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
        }

        /* Navigation */
        .nav {
            background-color: #0066FF;
            padding: 0;
            display: flex;
            align-items: center;
            margin-bottom: 30px;
        }

        .nav a, .nav button {
            color: white;
            padding: 14px 18px;
            text-decoration: none;
            font-weight: 600;
            cursor: pointer;
            border: none;
            background: none;
            transition: background-color 0.3s;
            font-size: 13px;
        }

        .nav a:hover, .nav button:hover {
            background-color: #0052CC;
        }

        .search-box {
            margin-left: auto;
            margin-right: 20px;
            display: flex;
        }

        .search-box input {
            padding: 8px 12px;
            border: none;
            width: 180px;
            border-radius: 4px 0 0 4px;
        }

        .search-box button {
            padding: 8px 12px;
            background-color: #0052CC;
            color: white;
            border: none;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
            margin: 0;
            padding-right: 15px;
        }

        /* Breadcrumb */
        .breadcrumb {
            background-color: #E3F2FD;
            padding: 15px 40px;
            font-size: 13px;
            margin-bottom: 20px;
        }

        .breadcrumb a {
            color: #0066FF;
            text-decoration: none;
        }

        /* Main Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 40px;
            display: grid;
            grid-template-columns: 1fr 320px;
            gap: 40px;
            margin-bottom: 60px;
        }

        /* Blog Post */
        .blog-post {
            background: white;
            margin-bottom: 40px;
        }

        .post-image {
            width: 100%;
            height: 300px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            object-fit: cover;
            margin-bottom: 20px;
        }

        .post-meta {
            display: flex;
            gap: 20px;
            align-items: center;
            font-size: 13px;
            color: #666;
            margin-bottom: 15px;
        }

        .post-tag {
            background-color: #E3F2FD;
            color: #0066FF;
            padding: 4px 10px;
            border-radius: 4px;
            font-weight: 600;
        }

        .post-title {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 15px;
            color: #001f3f;
            line-height: 1.4;
        }

        .post-content {
            color: #555;
            line-height: 1.8;
            font-size: 15px;
            margin-bottom: 20px;
        }

        .learn-more {
            background-color: #0066FF;
            color: white;
            padding: 12px 25px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .learn-more:hover {
            background-color: #0052CC;
        }

        /* Sidebar */
        .sidebar {
            height: fit-content;
        }

        .sidebar-widget {
            background: white;
            padding: 25px;
            margin-bottom: 25px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .widget-title {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #001f3f;
        }

        .category-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px;
        }

        .category-img {
            width: 100%;
            height: 80px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 4px;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .category-img:hover {
            transform: scale(1.05);
        }

        .deals-card {
            background: linear-gradient(135deg, #0066FF 0%, #0052CC 100%);
            color: white;
            padding: 20px;
            border-radius: 4px;
            text-align: center;
        }

        .deals-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .deals-price {
            font-size: 16px;
            opacity: 0.9;
        }

        .social-links {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .social-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }

        .social-btn:hover {
            border-color: #0066FF;
            color: #0066FF;
        }

        .trending-item {
            display: flex;
            gap: 12px;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }

        .trending-item:last-child {
            border-bottom: none;
        }

        .trending-thumb {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 4px;
            flex-shrink: 0;
        }

        .trending-content {
            flex: 1;
        }

        .trending-content a {
            font-size: 13px;
            color: #0066FF;
            text-decoration: none;
            font-weight: 600;
        }

        .trending-content a:hover {
            text-decoration: underline;
        }

        .trending-date {
            font-size: 12px;
            color: #999;
            margin-top: 5px;
        }

        /* Author Box */
        .author-box {
            display: flex;
            gap: 15px;
            padding: 20px;
            background: white;
            margin: 40px 0;
            border-radius: 4px;
        }

        .author-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            flex-shrink: 0;
        }

        .author-info h4 {
            margin-bottom: 5px;
            color: #001f3f;
        }

        .author-info p {
            font-size: 13px;
            color: #666;
            line-height: 1.6;
        }

        /* Comments Section */
        .comments-section {
            background: white;
            padding: 30px;
            margin-top: 40px;
            border-radius: 4px;
        }

        .comments-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 25px;
            color: #001f3f;
        }

        .comment {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
            padding-bottom: 25px;
            border-bottom: 1px solid #eee;
        }

        .comment:last-child {
            border-bottom: none;
        }

        .comment-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            flex-shrink: 0;
        }

        .comment-body {
            flex: 1;
        }

        .comment-author {
            font-weight: 700;
            color: #001f3f;
            margin-bottom: 5px;
        }

        .comment-date {
            font-size: 12px;
            color: #999;
        }

        .comment-text {
            font-size: 14px;
            color: #666;
            margin-top: 8px;
            line-height: 1.6;
        }

        .comment-reply {
            font-size: 13px;
            color: #0066FF;
            margin-top: 8px;
            cursor: pointer;
        }

        /* Comment Form */
        .comment-form {
            background: white;
            padding: 30px;
            margin-top: 30px;
            border-radius: 4px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            color: #001f3f;
            font-size: 14px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-family: inherit;
            font-size: 14px;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #0066FF;
            box-shadow: 0 0 0 2px rgba(0, 102, 255, 0.1);
        }

        .submit-btn {
            background-color: #0066FF;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #0052CC;
        }

        /* Related Posts */
        .related-posts {
            background: white;
            padding: 30px;
            margin-top: 40px;
            border-radius: 4px;
        }

        .related-title {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 25px;
            color: #001f3f;
        }

        .related-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .related-item {
            text-align: center;
        }

        .related-image {
            width: 100%;
            height: 150px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 4px;
            margin-bottom: 12px;
        }

        .related-item-title {
            font-size: 14px;
            font-weight: 600;
            color: #001f3f;
            line-height: 1.4;
        }

        /* Footer */
        .footer {
            background-color: #001f3f;
            color: white;
            padding: 50px 40px;
            margin-top: 60px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            max-width: 1200px;
            margin: 0 auto 40px;
        }

        .footer-widget h3 {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .footer-widget a {
            display: block;
            color: #aaa;
            text-decoration: none;
            font-size: 13px;
            margin-bottom: 10px;
            transition: color 0.3s;
        }

        .footer-widget a:hover {
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid #333;
            padding-top: 20px;
            text-align: center;
            font-size: 13px;
            color: #aaa;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .container {
                grid-template-columns: 1fr;
            }
            .related-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .header, .topbar, .promo-banner, .breadcrumb, .container {
                padding: 0 20px;
            }
            .nav a, .nav button {
                padding: 10px 12px;
                font-size: 12px;
            }
            .search-box {
                display: none;
            }
            .related-grid {
                grid-template-columns: 1fr;
            }
            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="topbar">
        <div class="topbar-left">
            <a href="#">Admin</a>
            <a href="#">Advertise</a>
            <a href="#">Support</a>
            <a href="#">Cop flag</a>
        </div>
        <div class="topbar-right">
            📅 Saturday, October 7
            <a class="social-icon" href="#">📘</a>
            <a class="social-icon" href="#">🐦</a>
            <a class="social-icon" href="#">📸</a>
            <a class="social-icon" href="#">▶️</a>
        </div>
    </div>

    <!-- Header -->
    <div class="header">
        <a href="#" class="logo">NEXTPAGE</a>
    </div>

    <!-- Promo Banner -->
    <div class="promo-banner">
        <span>🎄 Big Annual SALE! 🎄</span>
        <span>UP TO <strong>40%</strong> DISCOUNT</span>
    </div>

    <!-- Navigation -->
    <div class="nav">
        <button>HOME +</button>
        <button>TECHNOLOGY</button>
        <button>LIFESTYLE</button>
        <button>TRAVEL</button>
        <button>VIDEO +</button>
        <button>FEATURES</button>
        <button>PAGES +</button>
        <div class="search-box">
            <input type="text" placeholder="Search For">
            <button>🔍</button>
        </div>
    </div>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <a href="#">Home</a> / <span>Blog</span>
    </div>

    <!-- Main Content -->
    <div class="container">
        <div>
            <!-- Featured Post -->
            <div class="blog-post">
                <div class="post-image"></div>
                <div class="post-meta">
                    <span class="post-tag">Blog</span>
                    <span>📅 23 AUG 2024</span>
                    <span>💬 Comments (15)</span>
                </div>
                <h2 class="post-title">Inspired Design Decisions With Herb Typography Can Be As Exciting As Illustration & Photog</h2>
                <p class="post-content">
                    The most exciting part of my career has always been the part of discovering pioneers and pushing both our eyes and art out yet gave us a complete account of the real and beyond our usual knowledge of the real. Lorem ipsum dolor sit amet consectetur adipiscing elit. There are objects with designs that are especially relevant to its elements and the creative work of a designer.
                </p>
                <a href="#" class="learn-more">Learn More</a>
            </div>

            <!-- Post with Image -->
            <div class="blog-post">
                <div class="post-image" style="background: linear-gradient(135deg, #FF6B6B 0%, #FF5252 100%);"></div>
                <div class="post-meta">
                    <span class="post-tag">Lifestyle</span>
                    <span>📅 23 AUG 2024</span>
                    <span>💬 Comments (15)</span>
                </div>
                <h2 class="post-title">What Should You Do When A Web Design Trend Becomes Too Popular? Typography</h2>
                <p class="post-content">
                    At the most exciting part of any career has always been the very unique idea of discovering and writing per see her and style give us a complete account of the real and deepened understanding from the rest of ideas and styles. There are objects with styles that are especially relevant to its designs and the creative work of any designer.
                </p>
                <a href="#" class="learn-more">Learn More</a>
            </div>

            <!-- Video Post -->
            <div class="blog-post">
                <div class="post-image" style="background: linear-gradient(135deg, #4A90E2 0%, #357ABD 100%); display: flex; align-items: center; justify-content: center;">
                    <div style="font-size: 48px; cursor: pointer;">▶️</div>
                </div>
                <div class="post-meta">
                    <span class="post-tag">Video</span>
                    <span>📅 23 AUG 2024</span>
                    <span>💬 Comments (15)</span>
                </div>
                <h2 class="post-title">Visual Design Language The Building Blocks Of Design Web Design Trend Becomes</h2>
                <p class="post-content">
                    Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit in voluptate velit.
                </p>
                <a href="#" class="learn-more">Learn More</a>
            </div>

            <!-- Author Box -->
            <div class="author-box">
                <div class="author-avatar"></div>
                <div class="author-info">
                    <h4>Henry N. Goodenough</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                </div>
            </div>

            <!-- Related Posts -->
            <div class="related-posts">
                <h3 class="related-title">Related News</h3>
                <div class="related-grid">
                    <div class="related-item">
                        <div class="related-image"></div>
                        <p class="related-item-title">Sometimes A Good Text Message Startups, Files In The Public</p>
                    </div>
                    <div class="related-item">
                        <div class="related-image" style="background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%);"></div>
                        <p class="related-item-title">Strikethrough & Text Breakdowns Again, Always Video Tokens</p>
                    </div>
                    <div class="related-item">
                        <div class="related-image" style="background: linear-gradient(135deg, #10B981 0%, #059669 100%);"></div>
                        <p class="related-item-title">Tools Taken Approved for Seniors That Could Detect Child</p>
                    </div>
                </div>
            </div>

            <!-- Comments -->
            <div class="comments-section">
                <h3 class="comments-title">3 Comments</h3>
                <div class="comment">
                    <div class="comment-avatar"></div>
                    <div class="comment-body">
                        <div class="comment-author">Emma K. Watson</div>
                        <div class="comment-date">Aug 23 2024</div>
                        <div class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vestibulum nec orci, quis egestas eros sed nulla quis. Consectetur adipiscing elit id orci et viverra.</div>
                        <div class="comment-reply">Reply</div>
                    </div>
                </div>

                <div class="comment">
                    <div class="comment-avatar" style="background: linear-gradient(135deg, #10B981 0%, #059669 100%);"></div>
                    <div class="comment-body">
                        <div class="comment-author">Tom S. Boomeran</div>
                        <div class="comment-date">Aug 23 2024</div>
                        <div class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vestibulum nec orci, quis egestas eros sed nulla quis. Consectetur adipiscing elit id orci et viverra.</div>
                        <div class="comment-reply">Reply</div>
                    </div>
                </div>

                <div class="comment">
                    <div class="comment-avatar" style="background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%);"></div>
                    <div class="comment-body">
                        <div class="comment-author">Sarah J. Sharma</div>
                        <div class="comment-date">Aug 23 2024</div>
                        <div class="comment-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vestibulum nec orci, quis egestas eros sed nulla quis. Consectetur adipiscing elit id orci et viverra amet veniam.</div>
                        <div class="comment-reply">Reply</div>
                    </div>
                </div>
            </div>

            <!-- Comment Form -->
            <div class="comment-form">
                <h3 class="comments-title">Leave A Comment</h3>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" placeholder="you@email.com">
                </div>
                <div class="form-group">
                    <label>Comment</label>
                    <textarea placeholder="Write your comment here..."></textarea>
                </div>
                <button class="submit-btn">POST COMMENT</button>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Category Widget -->
            <div class="sidebar-widget">
                <h3 class="widget-title">Category</h3>
                <div class="category-grid">
                    <div class="category-img"></div>
                    <div class="category-img" style="background: linear-gradient(135deg, #10B981 0%, #059669 100%);"></div>
                    <div class="category-img" style="background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%);"></div>
                    <div class="category-img" style="background: linear-gradient(135deg, #EF4444 0%, #DC2626 100%);"></div>
                    <div class="category-img" style="background: linear-gradient(135deg, #3B82F6 0%, #2563EB 100%);"></div>
                    <div class="category-img" style="background: linear-gradient(135deg, #8B5CF6 0%, #7C3AED 100%);"></div>
                </div>
            </div>

            <!-- Deals Widget -->
            <div class="sidebar-widget deals-card">
                <div class="deals-title">Best car rental</div>
                <div class="deals-price">$50/day</div>
            </div>

            <!-- Social Widget -->
            <div class="sidebar-widget">
                <h3 class="widget-title">Join With Us</h3>
                <div class="social-links">
                    <div class="social-btn">📘</div>
                    <div class="social-btn">🐦</div>
                    <div class="social-btn">📌</div>
                    <div class="social-btn">▶️</div>
                </div>
            </div>

            <!-- Trending Widget -->
            <div class="sidebar-widget">
                <h3 class="widget-title">Trending News</h3>
                <div class="trending-item">
                    <div class="trending-thumb"></div>
                    <div class="trending-content">
                        <a href="#">This is the first trending news story</a>
                        <div class="trending-date">October 15, 2024</div>
                    </div>
                </div>
                <div class="trending-item">
                    <div class="trending-thumb" style="background: linear-gradient(135deg, #10B981 0%, #059669 100%);"></div>
                    <div class="trending-content">
                        <a href="#">Second trending news article here</a>
                        <div class="trending-date">October 14, 2024</div>
                    </div>
                </div>
                <div class="trending-item">
                    <div class="trending-thumb" style="background: linear-gradient(135deg, #F59E0B 0%, #D97706 100%);"></div>
                    <div class="trending-content">
                        <a href="#">Third trending story in sidebar</a>
                        <div class="trending-date">October 13, 2024</div>
                    </div>
                </div>
            </div>

            <!-- Newsletter Widget -->
            <div class="sidebar-widget">
                <h3 class="widget-title">Newsletter</h3>
                <p style="font-size: 13px; margin-bottom: 15px; color: #666;">Stay updated on all the latest news and promotions.</p>
                <input type="email" placeholder="Enter your email" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; margin-bottom: 10px;">
                <button class="submit-btn" style="width: 100%;">Subscribe Now</button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="footer-grid">
            <div class="footer-widget">
                <h3>ABOUT US</h3>
                <a href="#">Lorem ipsum dolor sit amet...</a>
                <a href="#">Here you can drop the first letter of your website and tell people about your amazing and premium story</a>
            </div>
            <div class="footer-widget">
                <h3>TAGS</h3>
                <a href="#">Consectetur</a>
                <a href="#">Video</a>
                <a href="#">Conceptual</a>
                <a href="#">Design</a>
                <a href="#">Art</a>
                <a href="#">Ideas</a>
            </div>
            <div class="footer-widget">
                <h3>CONTACT</h3>
                <a href="#">📍 604 Chittim Avenue Arlington, TX 76010</a>
                <a href="#">📞 + 913 123 4567</a>
                <a href="#">✉️ info@themeforest.com</a>
            </div>
            <div class="footer-widget">
                <h3>POPULAR NEWS</h3>
                <a href="#">🎬 India Brits Director Anuya New 10, 2024</a>
                <a href="#">🎬 Classic Shader In Texas Waldo Wills The Best</a>
            </div>
        </div>
        <div class="footer-bottom">
            <a href="#" style="color: #aaa; text-decoration: none;">About</a> |
            <a href="#" style="color: #aaa; text-decoration: none;">Terms & Conditions</a> |
            <a href="#" style="color: #aaa; text-decoration: none;">Privacy Policy</a> |
            <a href="#" style="color: #aaa; text-decoration: none;">Contact</a><br><br>
            Copyright © 2024 NextPage
