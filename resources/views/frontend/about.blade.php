@extends('layouts.frontend-app')
@section('title', 'About Us')
@section('content')
    <div class="container">
        <div class="page-title">
            <h2>About Us</h2>
            <p>Bringing News and Stories from Our School Community</p>
        </div>

        <!-- About Section -->
        <div class="about-section">
            <div class="about-content">
                <h2>Welcome to Our School News Portal</h2>
                <p>Our school news portal is a student-led digital platform dedicated to bringing the latest news, updates, and stories from our vibrant school community. Established as part of our school's commitment to fostering digital literacy and journalistic excellence, our portal serves as the voice of students, faculty, and staff.</p>

                <p>We believe in the power of storytelling and transparent communication. Through our platform, we cover academic achievements, sporting events, cultural programs, club activities, and important school announcements. Our mission is to keep the entire school community informed, engaged, and connected.</p>

                <h3>Our Mission</h3>
                <p>To be the primary source of accurate, timely, and engaging news for our school community while promoting journalistic integrity, critical thinking, and the development of future media professionals among our student body.</p>

                <h3>Our Vision</h3>
                <p>To create a thriving digital news ecosystem that celebrates the achievements of our school, amplifies student voices, and serves as a bridge between administration, faculty, students, and parents. We aspire to be a model school news portal that demonstrates excellence in digital journalism.</p>
            </div>

            <div class="about-image">
                <img src="{{ asset('frontend/assets/img/blog/2.png') }}" alt="Our Newsroom">
            </div>
        </div>

        <!-- Core Values -->
        <div class="values-section">
            <h2>Our Core Values</h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fa fa-check-circle"></i>
                    </div>
                    <h3>Accuracy</h3>
                    <p>We are committed to reporting facts with utmost accuracy. All stories undergo rigorous fact-checking before publication to ensure credibility and trust.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fa fa-lightbulb-o"></i>
                    </div>
                    <h3>Integrity</h3>
                    <p>We uphold the highest standards of journalistic ethics. Our reporting is fair, balanced, and free from bias, ensuring every voice is heard and respected.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <h3>Community</h3>
                    <p>We serve our entire school community with pride. Whether it's celebrating successes or addressing challenges, we report with the community's best interests in mind.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fa fa-star"></i>
                    </div>
                    <h3>Excellence</h3>
                    <p>We strive for excellence in every article, photo, and video we publish. Quality journalism is our standard, not our exception.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <h3>Learning</h3>
                    <p>We are a platform for learning and growth. Our team is dedicated to developing journalism skills and media literacy among students.</p>
                </div>

                <div class="value-card">
                    <div class="value-icon">
                        <i class="fa fa-globe"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>We embrace new technologies and digital storytelling methods to bring news to our community in engaging and accessible ways.</p>
                </div>
            </div>
        </div>

        <!-- What We Cover -->
        <div class="coverage-section">
            <h2>What We Cover</h2>
            <div class="coverage-grid">
                <div class="coverage-item">
                    <div class="coverage-icon">
                        <i class="fa fa-graduation-cap"></i>
                    </div>
                    <h3>Academic News</h3>
                    <p>Coverage of academic programs, exam results, scholarship announcements, and educational initiatives from various departments.</p>
                </div>

                <div class="coverage-item">
                    <div class="coverage-icon">
                        <i class="fa fa-football"></i>
                    </div>
                    <h3>Sports & Events</h3>
                    <p>In-depth coverage of sports competitions, inter-school tournaments, athletic achievements, and recreational activities.</p>
                </div>

                <div class="coverage-item">
                    <div class="coverage-icon">
                        <i class="fa fa-music"></i>
                    </div>
                    <h3>Cultural Programs</h3>
                    <p>Stories about cultural festivals, music performances, drama productions, and artistic events organized by our school.</p>
                </div>

                <div class="coverage-item">
                    <div class="coverage-icon">
                        <i class="fa fa-users"></i>
                    </div>
                    <h3>Club Activities</h3>
                    <p>Updates from student clubs and organizations, including initiatives, meetings, and special projects they undertake.</p>
                </div>

                <div class="coverage-item">
                    <div class="coverage-icon">
                        <i class="fa fa-bullhorn"></i>
                    </div>
                    <h3>Announcements</h3>
                    <p>Important school announcements, policy updates, event schedules, and administrative information for the school community.</p>
                </div>

                <div class="coverage-item">
                    <div class="coverage-icon">
                        <i class="fa fa-heart"></i>
                    </div>
                    <h3>Student Stories</h3>
                    <p>Human interest stories, student achievements, inspirational narratives, and features celebrating our school community.</p>
                </div>
            </div>
        </div>

        <!-- Team Section -->
        <div class="team-section">
            <h2>Meet Our Team</h2>
            <p class="team-intro">Our news portal is run by dedicated students passionate about journalism and storytelling. Our team includes reporters, photographers, editors, and digital media specialists committed to excellence.</p>

            <div class="team-grid">
                <div class="team-member">
                    <img src="https://via.placeholder.com/200x200/0066ff/ffffff?text=Editor" alt="Team Member">
                    <h3>Chief Editor</h3>
                    <p>Oversees editorial standards and quality control</p>
                </div>

                <div class="team-member">
                    <img src="https://via.placeholder.com/200x200/28a745/ffffff?text=Reporter" alt="Team Member">
                    <h3>Senior Reporter</h3>
                    <p>Covers major school events and breaking news</p>
                </div>

                <div class="team-member">
                    <img src="https://via.placeholder.com/200x200/ff6b35/ffffff?text=Photo" alt="Team Member">
                    <h3>Photography Head</h3>
                    <p>Captures visual stories from school activities</p>
                </div>

                <div class="team-member">
                    <img src="https://via.placeholder.com/200x200/6f42c1/ffffff?text=Digital" alt="Team Member">
                    <h3>Digital Media Manager</h3>
                    <p>Manages website and social media presence</p>
                </div>
            </div>
        </div>

        <!-- Statistics -->
        <div class="stats-section">
            <div class="stat-card">
                <div class="stat-number">500+</div>
                <div class="stat-label">Articles Published</div>
            </div>

            <div class="stat-card">
                <div class="stat-number">15K+</div>
                <div class="stat-label">Monthly Readers</div>
            </div>

            <div class="stat-card">
                <div class="stat-number">50+</div>
                <div class="stat-label">Student Contributors</div>
            </div>

            <div class="stat-card">
                <div class="stat-number">100%</div>
                <div class="stat-label">Community Engagement</div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="cta-section">
            <h2>Join Our Mission</h2>
            <p>Are you interested in journalism? Want to develop your writing, photography, or digital media skills? We're always looking for passionate students to join our news portal team!</p>
            <a href="{{ route('contact') }}" class="btn btn-blue">Get In Touch</a>
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
            background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
            color: #fff;
            text-align: center;
            margin-bottom: 50px;
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

        /* About Section */
        .about-section {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 60px;
            align-items: center;
        }

        .about-content h2 {
            font-size: 2rem;
            color: var(--text-dark);
            margin-bottom: 20px;
        }

        .about-content h3 {
            font-size: 1.3rem;
            color: var(--primary-blue);
            margin-top: 25px;
            margin-bottom: 12px;
        }

        .about-content p {
            color: var(--text-gray);
            line-height: 1.8;
            margin-bottom: 15px;
            font-size: 0.95rem;
        }

        .about-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        /* Values Section */
        .values-section {
            margin-bottom: 60px;
        }

        .values-section h2 {
            font-size: 2rem;
            text-align: center;
            color: var(--text-dark);
            margin-bottom: 40px;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .value-card {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.12);
        }

        .value-icon {
            font-size: 40px;
            color: var(--primary-blue);
            margin-bottom: 15px;
        }

        .value-card h3 {
            font-size: 1.2rem;
            color: var(--text-dark);
            margin-bottom: 10px;
        }

        .value-card p {
            color: var(--text-gray);
            line-height: 1.6;
            font-size: 0.9rem;
        }

        /* Coverage Section */
        .coverage-section {
            margin-bottom: 60px;
            background: var(--bg-sky);
            padding: 40px;
            border-radius: 10px;
        }

        .coverage-section h2 {
            font-size: 2rem;
            text-align: center;
            color: var(--text-dark);
            margin-bottom: 40px;
        }

        .coverage-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .coverage-item {
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s;
        }

        .coverage-item:hover {
            transform: translateY(-3px);
        }

        .coverage-icon {
            font-size: 40px;
            color: var(--primary-blue);
            margin-bottom: 15px;
        }

        .coverage-item h3 {
            font-size: 1.1rem;
            color: var(--text-dark);
            margin-bottom: 10px;
        }

        .coverage-item p {
            color: var(--text-gray);
            line-height: 1.6;
            font-size: 0.9rem;
        }

        /* Team Section */
        .team-section {
            margin-bottom: 60px;
        }

        .team-section h2 {
            font-size: 2rem;
            text-align: center;
            color: var(--text-dark);
            margin-bottom: 15px;
        }

        .team-intro {
            text-align: center;
            color: var(--text-gray);
            margin-bottom: 40px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .team-member {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s;
            text-align: center;
        }

        .team-member:hover {
            transform: translateY(-5px);
        }

        .team-member img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .team-member h3 {
            font-size: 1.1rem;
            color: var(--text-dark);
            margin: 15px;
            margin-bottom: 5px;
        }

        .team-member p {
            color: var(--text-gray);
            font-size: 0.85rem;
            padding: 0 15px 15px;
            line-height: 1.5;
        }

        /* Statistics Section */
        .stats-section {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 60px;
            padding: 40px;
            background: linear-gradient(135deg, var(--primary-blue), var(--dark-blue));
            border-radius: 10px;
        }

        .stat-card {
            text-align: center;
            color: #fff;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .stat-label {
            font-size: 1rem;
            opacity: 0.9;
        }

        /* CTA Section */
        .cta-section {
            background: var(--bg-sky);
            padding: 50px 40px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 40px;
        }

        .cta-section h2 {
            font-size: 2rem;
            color: var(--text-dark);
            margin-bottom: 15px;
        }

        .cta-section p {
            color: var(--text-gray);
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn {
            padding: 12px 40px;
            border-radius: 25px;
            display: inline-block;
            font-weight: 600;
            cursor: pointer;
            border: none;
            font-size: 1rem;
            text-decoration: none;
            transition: all 0.3s;
        }

        .btn-blue {
            background: var(--primary-blue);
            color: #fff;
        }

        .btn-blue:hover {
            background: #0052cc;
            transform: translateY(-2px);
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .about-section {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .values-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .coverage-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .team-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .stats-section {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .page-title h2 {
                font-size: 1.8rem;
            }

            .page-title p {
                font-size: 1rem;
            }

            .about-content h2 {
                font-size: 1.5rem;
            }

            .values-section h2,
            .coverage-section h2,
            .team-section h2,
            .cta-section h2 {
                font-size: 1.5rem;
            }

            .values-grid,
            .coverage-grid,
            .team-grid {
                grid-template-columns: 1fr;
            }

            .stats-section {
                grid-template-columns: repeat(2, 1fr);
                padding: 30px 20px;
            }

            .coverage-section {
                padding: 30px 20px;
            }

            .cta-section {
                padding: 30px 20px;
            }
        }

        @media (max-width: 480px) {
            .page-title {
                padding: 20px 0;
                margin-bottom: 30px;
            }

            .page-title h2 {
                font-size: 1.5rem;
            }

            .stats-section {
                grid-template-columns: 1fr;
                gap: 15px;
                padding: 20px;
            }

            .stat-number {
                font-size: 2rem;
            }

            .value-card,
            .coverage-item,
            .team-member {
                padding: 20px;
            }

            .cta-section {
                padding: 20px;
            }

            .cta-section p {
                font-size: 1rem;
            }
        }
    </style>
@endsection
