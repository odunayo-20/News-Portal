@extends('layouts.frontend-app')

@section('content')
    <div class="container">
        <div class="main-wrapper">
            <!-- Main Content -->
            <div class="main-content">
                <!-- Blog Post 1 -->
                <div class="blog-post">
                    <img src="{{ asset('storage/' . $post->featured_image) }}" alt="Post">
                    <div class="details">
                        <div class="post-meta">
                            <span><i class="fa fa-user"></i> {{ $post->user->name }} </span>
                            <span><i class="fa fa-calendar"></i> {{ $post->created_at->format('d F Y') }}</span>
                            <span><i class="fa fa-comments"></i> Comments ({{ $post->comments->count() }})</span>



                             <span><i class="fa fa-clock-o"></i>   {{ $post->reading_time }} </span>
                             <span><i class="fa fa-eye"></i>
                                {{ $post->views }} views </span>
                            </small>
                        </div>
                        <h2><a href="#">{{ $post->title }}</a></h2>
                        <p>{!! $post->excerpt !!}</p>
                        <p>{!! $post->content !!}</p>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                {{-- <div class="blog-post">
                    <img src="https://via.placeholder.com/800x400/3f51b5/ffffff?text=Web+Design+Trend" alt="Post">
                    <div class="details">
                        <div class="post-meta">
                            <span><i class="fa fa-user"></i> Marcel Horon</span>
                            <span><i class="fa fa-calendar"></i> 23 June 2020</span>
                            <span><i class="fa fa-comments"></i> Comments (35)</span>
                        </div>
                        <h2><a href="#">What Should You Do When A Web Design Trend Becomes Too Popular? Typography</a>
                        </h2>
                        <p>Ther most capable to purchase of this incredible idea of demonstrating designers and printing
                            gear we have spe will give you a complete account of the system, and exposted the individual
                            highlights of the point of the typ. Im master builder of human happiness. No one rejects,
                            dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know
                            how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
                        <button class="btn btn-blue">Learn More</button>
                    </div>
                </div> --}}

                <!-- Blog Post 3 with overlay -->
                <div class="blog-post">
                    <div style="position: relative; background: #f0f0f0;">
                        <img src="https://via.placeholder.com/800x400/2196f3/ffffff?text=Visual+Design+Language"
                            alt="Post" style="opacity: 0.7;">
                        <div
                            style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background: rgba(0,0,0,0.3); display: flex; align-items: center; justify-content: center; color: #fff; padding: 30px; text-align: center;">
                            <div>
                                <h3 style="color: #fff; margin-bottom: 15px;">Visual Design Language The Building Blocks Of
                                    Design Web Design Trend Becomes</h3>
                            </div>
                        </div>
                    </div>
                    <div class="details">
                        <div class="post-meta">
                            <span><i class="fa fa-user"></i> Roland Uham</span>
                            <span><i class="fa fa-calendar"></i> 23 JUNE 2020</span>
                            <span><i class="fa fa-comments"></i> Comments (103)</span>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 4 with Video -->
                <div class="blog-post">
                    <div class="video-play">
                        <img src="https://via.placeholder.com/800x400/4caf50/ffffff?text=Mobile+Conversions" alt="Post">
                        <div class="play-icon">
                            <i class="fa fa-play"></i>
                        </div>
                    </div>
                    <div class="details">
                        <div class="post-meta">
                            <span><i class="fa fa-user"></i> Marcel Horon</span>
                            <span><i class="fa fa-calendar"></i> 23 June 2020</span>
                            <span><i class="fa fa-comments"></i> Comments (35)</span>
                        </div>
                        <h2><a href="#">How Increase Mobile Conversions With Category Page DesignTrend Becomes
                                Typography</a></h2>
                        <p>Ther most capable to purchase of this incredible idea of demonstrating designers and printing
                            gear we have spe will give you a complete account of the system, and exposted the individual
                            highlights of the point of the typ. Im master builder of human happiness. No one rejects,
                            dislikes or avoids pleasure itself, because it is pleasure, but because those who do not know
                            how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
                        <button class="btn btn-blue">Learn More</button>
                    </div>
                </div>

                <!-- Advertisement -->
                {{-- <div
                    style="background: var(--primary-blue); padding: 30px; border-radius: 10px; margin: 40px 0; display: flex; align-items: center; gap: 30px;">
                    <img src="https://via.placeholder.com/150x150/ff6b35/ffffff?text=Headphones" alt="Ad"
                        style="width: 150px; height: 150px;">
                    <div style="color: #fff; flex: 1;">
                        <h3 style="font-size: 1.5rem; margin-bottom: 10px;">Get 70% discount on Amazon</h3>
                        <button class="btn" style="background: #ffc107; color: #000; margin-top: 10px;">Shop Now</button>
                    </div>
                    <div style="color: #fff; text-align: center;">
                        <div style="font-size: 2.5rem; font-weight: bold;">40%</div>
                    </div>
                </div> --}}





            </div>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Categories -->
                <div class="sidebar-item">
                    <div class="sidebar-title">Category</div>
                    <div class="category-grid">


                        @forelse ($categories as $category)
                            <div class="category-item cat-health">{{ $category->name }}</div>
                        @empty
                            <div class="category-item cat-health">No Categories</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>



        <!-- Join With Us -->
        <div class="sidebar-item">
            <div class="sidebar-title">Join With Us</div>
            <ul class="social-area" style="gap: 15px; padding: 10px 0; justify-content: space-around;">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
            </ul>
        </div>

        <!-- Trending News -->
        <div class="sidebar-item">
            <div class="sidebar-title">Trending News</div>
            <div class="trending-card">
                <img src="https://via.placeholder.com/80x80/0066ff/ffffff?text=Trending+1" alt="Trending">
                <div class="details">
                    <span style="font-size: 11px; color: var(--text-gray);">September 10, 2020</span>
                    <h6><a href="#">The FAA will band drones</a></h6>
                </div>
            </div>
            <div class="trending-card">
                <img src="https://via.placeholder.com/80x80/ff6b35/ffffff?text=Trending+2" alt="Trending">
                <div class="details">
                    <span style="font-size: 11px; color: var(--text-gray);">August 28, 2020</span>
                    <h6><a href="#">Retro Airbnb-style lodging for</a></h6>
                </div>
            </div>
            <div class="trending-card">
                <img src="https://via.placeholder.com/80x80/28a745/ffffff?text=Trending+3" alt="Trending">
                <div class="details">
                    <span style="font-size: 11px; color: var(--text-gray);">August 15, 2020</span>
                    <h6><a href="#">Uncle long-drawn Luxe ves</a></h6>
                </div>
            </div>
        </div>

        <!-- Featured Section -->
        <div class="sidebar-item">
            <div style="display: flex; gap: 10px; margin-bottom: 15px; flex-wrap: wrap;">
                <span class="tag-base tag-blue">Featured</span>
                <span class="tag-base tag-orange">Comment</span>
                <span class="tag-base tag-green">Comment</span>
            </div>
        </div>

        <!-- More Posts -->
        <div class="sidebar-item">
            <div class="trending-card">
                <img src="https://via.placeholder.com/80x80/6f42c1/ffffff?text=Post+1" alt="Post">
                <div class="details">
                    <span style="font-size: 11px; color: var(--text-gray);">August 22, 2020</span>
                    <h6><a href="#">JO sweet Software could block</a></h6>
                </div>
            </div>
            <div class="trending-card">
                <img src="https://via.placeholder.com/80x80/17a2b8/ffffff?text=Post+2" alt="Post">
                <div class="details">
                    <span style="font-size: 11px; color: var(--text-gray);">August 20, 2020</span>
                    <h6><a href="#">Cooperation blossoms more</a></h6>
                </div>
            </div>
            <div class="trending-card">
                <img src="https://via.placeholder.com/80x80/dc3545/ffffff?text=Post+3" alt="Post">
                <div class="details">
                    <span style="font-size: 11px; color: var(--text-gray);">August 18, 2020</span>
                    <h6><a href="#">Jo sweet Software could block</a></h6>
                </div>
            </div>
        </div>

        <!-- Newsletter -->
        <div class="newsletter">
            <h4>Newsletter</h4>
            <p>Stay Updated With Us</p>
            <input type="email" placeholder="Your email here">
            <button><i class="fa fa-envelope"></i> Subscribe Now</button>
        </div>

       @include('frontend.posts.comment', ['post' => $post])
    </div>


    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-blue: #0066ff;
            --dark-blue: #0a1e42;
            --light-blue: #e6f2ff;
            --text-dark: #1a1a1a;
            --text-gray: #666;
            --border-color: #e0e0e0;
            --bg-black: #0a0a0a;
            --bg-sky: #f5f9ff;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: all 0.3s;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Preloader */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.5s;
        }

        .preloader.hidden {
            opacity: 0;
            pointer-events: none;
        }

        .spinner {
            display: flex;
            gap: 10px;
        }

        .dot1,
        .dot2 {
            width: 15px;
            height: 15px;
            background: var(--primary-blue);
            border-radius: 50%;
            animation: bounce 1.4s infinite ease-in-out both;
        }

        .dot2 {
            animation-delay: -0.16s;
        }

        @keyframes bounce {

            0%,
            80%,
            100% {
                transform: scale(0);
            }

            40% {
                transform: scale(1);
            }
        }

        /* Topbar */
        .topbar {
            background: var(--dark-blue);
            color: #fff;
            padding: 10px 0;
            font-size: 14px;
        }

        .topbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .topbar-menu ul {
            display: flex;
            list-style: none;
            gap: 20px;
        }

        .topbar-menu a {
            color: #fff;
        }

        .topbar-menu a:hover {
            color: var(--primary-blue);
        }

        .topbar-social {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .social-area {
            display: flex;
            list-style: none;
            gap: 10px;
        }

        .social-area a {
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: #fff;
        }

        .social-area a:hover {
            background: var(--primary-blue);
        }

        /* Header */
        .adbar {
            background: #fff;
            padding: 20px 0;
            border-bottom: 1px solid var(--border-color);
        }

        .adbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo h1 {
            color: var(--primary-blue);
            font-size: 2rem;
        }

        .logo span {
            color: #000;
        }

        /* Navigation */
        .navbar {
            background: var(--primary-blue);
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 15px;
        }

        .navbar-nav {
            display: flex;
            list-style: none;
            gap: 5px;
        }

        .navbar-nav a {
            color: #fff;
            padding: 15px 20px;
            display: block;
            font-weight: 500;
            font-size: 0.9rem;
        }

        .navbar-nav a:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            padding: 10px;
        }

        .menu-toggle span {
            display: block;
            width: 25px;
            height: 3px;
            background: #fff;
            margin: 5px 0;
            transition: 0.3s;
        }

        .nav-search {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-search input {
            padding: 8px 15px;
            border: none;
            border-radius: 20px;
            width: 200px;
        }

        .nav-search button {
            background: none;
            border: none;
            color: #fff;
            cursor: pointer;
            padding: 8px;
        }

        /* Page Title */
        .page-title {
            padding: 20px 0;
            background: var(--bg-sky);
        }

        .page-title h2 {
            font-size: 1.3rem;
            color: var(--text-dark);
        }

        .page-title p {
            font-size: 0.9rem;
            color: var(--text-gray);
        }

        /* Main Layout */
        .main-wrapper {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            padding: 40px 0;
        }

        .sidebar {
            background: var(--bg-sky);
            padding: 20px;
            border-radius: 10px;
            height: fit-content;
            position: sticky;
            top: 100px;
        }

        /* Blog Post */
        .blog-post {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 40px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .blog-post img {
            width: 100%;
            height: 400px;
            object-fit: cover;
        }

        .blog-post .details {
            padding: 30px;
        }

        .post-meta {
            display: flex;
            gap: 20px;
            align-items: center;
            font-size: 13px;
            color: var(--text-gray);
            margin-bottom: 15px;
        }

        .post-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .blog-post h2 {
            font-size: 1.6rem;
            margin: 15px 0;
            line-height: 1.4;
            color: var(--text-dark);
        }

        .blog-post h2 a {
            color: var(--text-dark);
        }

        .blog-post h2 a:hover {
            color: var(--primary-blue);
        }

        .blog-post p {
            color: var(--text-gray);
            line-height: 1.8;
            margin: 15px 0;
        }

        .tag-base {
            padding: 5px 12px;
            border-radius: 20px;
            display: inline-block;
            font-size: 11px;
            font-weight: 600;
        }

        .tag-blue {
            background: var(--primary-blue);
            color: #fff;
        }

        .tag-orange {
            background: #ff6b35;
            color: #fff;
        }

        .tag-green {
            background: #28a745;
            color: #fff;
        }

        .tag-red {
            background: #dc3545;
            color: #fff;
        }

        .tag-purple {
            background: #6f42c1;
            color: #fff;
        }

        .btn {
            padding: 12px 30px;
            border-radius: 25px;
            display: inline-block;
            font-weight: 600;
            margin-top: 20px;
            cursor: pointer;
            border: none;
            font-size: 14px;
        }

        .btn-blue {
            background: var(--primary-blue);
            color: #fff;
        }

        .btn-blue:hover {
            background: #0052cc;
        }

        /* Video Play Button */
        .video-play {
            position: relative;
            cursor: pointer;
        }

        .play-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 70px;
            height: 70px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            color: var(--primary-blue);
            transition: 0.3s;
        }

        .video-play:hover .play-icon {
            background: #fff;
            transform: translate(-50%, -50%) scale(1.1);
        }

        /* Sidebar Items */
        .sidebar-item {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .sidebar-title {
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 15px;
            border-bottom: 2px solid var(--primary-blue);
            padding-bottom: 10px;
        }

        .category-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .category-item {
            padding: 25px 15px;
            text-align: center;
            border-radius: 8px;
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.3s;
            font-size: 0.85rem;
        }

        .category-item:hover {
            transform: scale(1.05);
        }

        .cat-food {
            background: #ff6b35;
        }

        .cat-tech {
            background: #0066ff;
        }

        .cat-travel {
            background: #28a745;
        }

        .cat-business {
            background: #6f42c1;
        }

        .cat-lifestyle {
            background: #17a2b8;
        }

        .cat-health {
            background: #28a745;
        }

        /* Deals Box */
        .deals-box {
            background: var(--primary-blue);
            padding: 25px;
            border-radius: 10px;
            color: #fff;
            text-align: center;
            margin-bottom: 20px;
        }

        .deals-box h4 {
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .deals-box .price {
            font-size: 2rem;
            font-weight: bold;
            margin: 10px 0;
        }

        .deals-box p {
            font-size: 0.9rem;
        }

        /* Trending News */
        .trending-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            gap: 12px;
            margin-bottom: 12px;
        }

        .trending-card img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            flex-shrink: 0;
        }

        .trending-card .details {
            padding: 10px;
            flex: 1;
        }

        .trending-card h6 {
            font-size: 0.85rem;
            line-height: 1.3;
            margin: 5px 0;
        }

        .trending-card a:hover {
            color: var(--primary-blue);
        }

        .trending-card .post-meta {
            font-size: 11px;
            gap: 10px;
            margin: 5px 0 0 0;
        }

        /* Newsletter */
        .newsletter {
            background: var(--primary-blue);
            padding: 25px;
            border-radius: 10px;
            color: #fff;
        }

        .newsletter h4 {
            font-size: 1.1rem;
            margin-bottom: 8px;
        }

        .newsletter p {
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .newsletter input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 10px;
            font-size: 0.9rem;
        }

        .newsletter button {
            width: 100%;
            padding: 10px;
            background: #fff;
            color: var(--primary-blue);
            border: none;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .newsletter button:hover {
            background: #f0f0f0;
        }

        /* Footer */
        .footer {
            background: var(--dark-blue);
            color: #fff;
            padding: 50px 0 20px;
            margin-top: 60px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer h5 {
            font-size: 0.95rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .footer ul {
            list-style: none;
        }

        .footer ul li {
            margin-bottom: 10px;
            font-size: 0.85rem;
        }

        .footer a:hover {
            color: var(--primary-blue);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.85rem;
        }

        .footer-menu {
            display: flex;
            justify-content: center;
            gap: 20px;
            list-style: none;
            margin-bottom: 15px;
            flex-wrap: wrap;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 40px 0;
        }

        .pagination a,
        .pagination span {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--border-color);
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .pagination a:hover {
            background: var(--primary-blue);
            color: #fff;
            border-color: var(--primary-blue);
        }

        .pagination .active {
            background: var(--primary-blue);
            color: #fff;
            border-color: var(--primary-blue);
        }

        /* Back to Top */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--primary-blue);
            color: #fff;
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 999;
            transition: 0.3s;
        }

        .back-to-top:hover {
            background: #0052cc;
        }

        .back-to-top.show {
            display: flex;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .main-wrapper {
                grid-template-columns: 1fr;
            }

            .sidebar {
                position: relative;
                top: 0;
            }

            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .topbar .container {
                flex-direction: column;
                gap: 10px;
            }

            .navbar-nav {
                display: none;
                flex-direction: column;
                width: 100%;
                position: absolute;
                top: 100%;
                left: 0;
                background: var(--primary-blue);
            }

            .navbar-nav.active {
                display: flex;
            }

            .menu-toggle {
                display: block;
            }

            .blog-post img {
                height: 250px;
            }

            .blog-post h2 {
                font-size: 1.3rem;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .category-grid {
                grid-template-columns: 1fr;
            }

            .topbar-menu ul {
                flex-wrap: wrap;
                gap: 10px;
            }

            .post-meta {
                flex-wrap: wrap;
                gap: 10px;
            }

            .trending-card {
                flex-direction: column;
            }

            .trending-card img {
                width: 100%;
                height: 120px;
            }
        }
    </style>
@endsection
