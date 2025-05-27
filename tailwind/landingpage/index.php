<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yokerjo - Find Your Dream Job</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'sky-50': '#f0f9ff',
                        'sky-100': '#e0f2fe',
                        'sky-200': '#bae6fd',
                        'sky-300': '#7dd3fc',
                        'sky-400': '#38bdf8',
                        'sky-500': '#0ea5e9',
                        'sky-600': '#0284c7',
                        'sky-700': '#0369a1',
                        'sky-800': '#075985',
                        'sky-900': '#0c4a6e',
                    }
                }
            }
        }
    </script>
    <style>
        .job-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(2, 132, 199, 0.3);
        }
        .hero-pattern {
            background-image: radial-gradient(circle at 10% 20%, rgba(56, 189, 248, 0.1) 0%, rgba(56, 189, 248, 0.05) 90%);
        }
        .animated-underline {
            position: relative;
            display: inline-block;
        }
        .animated-underline::after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #0284c7;
            transform-origin: bottom right;
            transition: transform 0.25s ease-out;
        }
        .animated-underline:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }
    </style>
</head>
<body class="bg-sky-50 font-sans antialiased">
    <!-- Header/Navigation -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 rounded-full bg-sky-500 flex items-center justify-center">
                    <i class="fas fa-briefcase text-white text-xl"></i>
                </div>
                <h1 class="text-2xl font-bold text-sky-700">Yokerjo</h1>
            </div>
            <nav class="hidden md:flex space-x-8">
                <a href="#home" class="text-sky-700 hover:text-sky-500 font-medium animated-underline">Home</a>
                <a href="#jobs" class="text-sky-700 hover:text-sky-500 font-medium animated-underline">Find Jobs</a>
                <a href="#companies" class="text-sky-700 hover:text-sky-500 font-medium animated-underline">Companies</a>
                <a href="#resources" class="text-sky-700 hover:text-sky-500 font-medium animated-underline">Resources</a>
            </nav>
            <div class="flex items-center space-x-4">
                <button class="px-4 py-2 text-sky-600 font-medium rounded-lg hover:bg-sky-100 transition">Sign In</button>
                <button class="px-4 py-2 bg-sky-500 text-white font-medium rounded-lg hover:bg-sky-600 transition">Sign Up</button>
                <button class="md:hidden text-sky-700">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero-pattern py-16 md:py-24">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold text-sky-800 mb-4">Find Your <span class="text-sky-500">Dream Job</span> Today</h1>
                <p class="text-lg text-sky-700 mb-8">Yokerjo connects talented professionals with top companies worldwide. Start your journey to career success with us.</p>
                <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                    <button class="px-6 py-3 bg-sky-500 text-white font-medium rounded-lg hover:bg-sky-600 transition shadow-md">Browse Jobs</button>
                    <button class="px-6 py-3 border border-sky-500 text-sky-600 font-medium rounded-lg hover:bg-sky-50 transition">Post a Job</button>
                </div>
                <div class="mt-8 flex items-center space-x-4">
                    <div class="flex -space-x-2">
                        <img src="https://randomuser.me/api/portraits/women/12.jpg" class="w-10 h-10 rounded-full border-2 border-white">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-10 h-10 rounded-full border-2 border-white">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-10 h-10 rounded-full border-2 border-white">
                    </div>
                    <p class="text-sm text-sky-700">Join <span class="font-semibold">10,000+</span> professionals who found jobs with Yokerjo</p>
                </div>
            </div>
            <div class="md:w-1/2">
                <div class="relative">
                    <div class="w-full h-80 md:h-96 bg-sky-100 rounded-2xl shadow-lg overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-sky-400 to-sky-600 opacity-20 rounded-2xl"></div>
                        <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80" 
                             class="w-full h-full object-cover" alt="Happy professionals working">
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-xl shadow-lg w-40">
                        <div class="flex items-center mb-2">
                            <div class="w-3 h-3 bg-green-400 rounded-full mr-2"></div>
                            <p class="text-xs font-medium">Active Jobs</p>
                        </div>
                        <p class="text-2xl font-bold text-sky-700">5,240+</p>
                    </div>
                    <div class="absolute -top-6 -right-6 bg-white p-4 rounded-xl shadow-lg w-40">
                        <div class="flex items-center mb-2">
                            <div class="w-3 h-3 bg-sky-400 rounded-full mr-2"></div>
                            <p class="text-xs font-medium">Top Companies</p>
                        </div>
                        <p class="text-2xl font-bold text-sky-700">320+</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Search Section -->
    <section class="bg-white py-8 shadow-sm">
        <div class="container mx-auto px-4">
            <div x-data="{ activeTab: 'jobs' }" class="max-w-4xl mx-auto">
                <div class="flex border-b border-sky-100 mb-6">
                    <button @click="activeTab = 'jobs'" 
                            :class="activeTab === 'jobs' ? 'text-sky-600 border-b-2 border-sky-500' : 'text-sky-400 hover:text-sky-600'"
                            class="px-4 py-2 font-medium focus:outline-none">
                        Find Jobs
                    </button>
                    <button @click="activeTab = 'companies'" 
                            :class="activeTab === 'companies' ? 'text-sky-600 border-b-2 border-sky-500' : 'text-sky-400 hover:text-sky-600'"
                            class="px-4 py-2 font-medium focus:outline-none">
                        Find Companies
                    </button>
                </div>
                
                <div x-show="activeTab === 'jobs'" class="transition-all duration-300">
                    <div class="bg-sky-50 rounded-xl p-4 shadow-inner">
                        <form class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-sky-700 mb-1">Job Title</label>
                                <div class="relative">
                                    <input type="text" placeholder="Software Engineer" class="w-full px-4 py-2 border border-sky-200 rounded-lg focus:ring-2 focus:ring-sky-300 focus:border-sky-400">
                                    <i class="fas fa-search absolute right-3 top-3 text-sky-400"></i>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-sky-700 mb-1">Location</label>
                                <div class="relative">
                                    <input type="text" placeholder="New York, Remote" class="w-full px-4 py-2 border border-sky-200 rounded-lg focus:ring-2 focus:ring-sky-300 focus:border-sky-400">
                                    <i class="fas fa-map-marker-alt absolute right-3 top-3 text-sky-400"></i>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-sky-700 mb-1">Job Type</label>
                                <select class="w-full px-4 py-2 border border-sky-200 rounded-lg focus:ring-2 focus:ring-sky-300 focus:border-sky-400 appearance-none">
                                    <option>All Types</option>
                                    <option>Full-time</option>
                                    <option>Part-time</option>
                                    <option>Contract</option>
                                    <option>Internship</option>
                                    <option>Remote</option>
                                </select>
                                <i class="fas fa-chevron-down absolute right-3 top-3 text-sky-400 pointer-events-none"></i>
                            </div>
                            <div class="md:col-span-3 flex justify-center">
                                <button type="submit" class="px-6 py-3 bg-sky-500 text-white font-medium rounded-lg hover:bg-sky-600 transition w-full md:w-auto">Search Jobs</button>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div x-show="activeTab === 'companies'" class="transition-all duration-300" style="display: none;">
                    <div class="bg-sky-50 rounded-xl p-4 shadow-inner">
                        <form class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div class="md:col-span-2">
                                <label class="block text-sm font-medium text-sky-700 mb-1">Company Name</label>
                                <div class="relative">
                                    <input type="text" placeholder="Google, Amazon, etc." class="w-full px-4 py-2 border border-sky-200 rounded-lg focus:ring-2 focus:ring-sky-300 focus:border-sky-400">
                                    <i class="fas fa-building absolute right-3 top-3 text-sky-400"></i>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-sky-700 mb-1">Industry</label>
                                <select class="w-full px-4 py-2 border border-sky-200 rounded-lg focus:ring-2 focus:ring-sky-300 focus:border-sky-400 appearance-none">
                                    <option>All Industries</option>
                                    <option>Technology</option>
                                    <option>Finance</option>
                                    <option>Healthcare</option>
                                    <option>Education</option>
                                    <option>Retail</option>
                                </select>
                                <i class="fas fa-chevron-down absolute right-3 top-3 text-sky-400 pointer-events-none"></i>
                            </div>
                            <div class="md:col-span-3 flex justify-center">
                                <button type="submit" class="px-6 py-3 bg-sky-500 text-white font-medium rounded-lg hover:bg-sky-600 transition w-full md:w-auto">Search Companies</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Jobs Section -->
    <section id="jobs" class="py-16 bg-sky-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-sky-800 mb-2">Featured Jobs</h2>
                <p class="text-sky-600 max-w-2xl mx-auto">Browse through our curated selection of top job opportunities from leading companies</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <!-- Job Card 1 -->
                <div class="job-card bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 border-l-4 border-sky-500">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-12 h-12 rounded-lg bg-sky-100 flex items-center justify-center">
                            <i class="fab fa-google text-sky-600 text-xl"></i>
                        </div>
                        <span class="px-3 py-1 bg-sky-100 text-sky-600 text-xs font-medium rounded-full">Full-time</span>
                    </div>
                    <h3 class="text-xl font-semibold text-sky-800 mb-1">Senior UX Designer</h3>
                    <p class="text-sky-600 mb-4">Google · Mountain View, CA (Remote)</p>
                    <p class="text-gray-600 mb-4">We're looking for an experienced UX designer to join our team and help create amazing user experiences.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-sky-50 text-sky-600 text-xs rounded">UI/UX</span>
                        <span class="px-2 py-1 bg-sky-50 text-sky-600 text-xs rounded">Figma</span>
                        <span class="px-2 py-1 bg-sky-50 text-sky-600 text-xs rounded">Prototyping</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sky-700 font-medium">$120k - $150k</span>
                        <button class="px-4 py-2 bg-sky-100 text-sky-600 font-medium rounded-lg hover:bg-sky-200 transition">Apply Now</button>
                    </div>
                </div>
                
                <!-- Job Card 2 -->
                <div class="job-card bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 border-l-4 border-sky-500">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-12 h-12 rounded-lg bg-sky-100 flex items-center justify-center">
                            <i class="fab fa-microsoft text-sky-600 text-xl"></i>
                        </div>
                        <span class="px-3 py-1 bg-sky-100 text-sky-600 text-xs font-medium rounded-full">Remote</span>
                    </div>
                    <h3 class="text-xl font-semibold text-sky-800 mb-1">Frontend Developer</h3>
                    <p class="text-sky-600 mb-4">Microsoft · Remote</p>
                    <p class="text-gray-600 mb-4">Join our frontend team to build responsive, accessible, and performant web applications using React.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-sky-50 text-sky-600 text-xs rounded">React</span>
                        <span class="px-2 py-1 bg-sky-50 text-sky-600 text-xs rounded">TypeScript</span>
                        <span class="px-2 py-1 bg-sky-50 text-sky-600 text-xs rounded">CSS</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sky-700 font-medium">$110k - $140k</span>
                        <button class="px-4 py-2 bg-sky-100 text-sky-600 font-medium rounded-lg hover:bg-sky-200 transition">Apply Now</button>
                    </div>
                </div>
                
                <!-- Job Card 3 -->
                <div class="job-card bg-white rounded-xl p-6 shadow-md hover:shadow-lg transition-all duration-300 border-l-4 border-sky-500">
                    <div class="flex items-start justify-between mb-4">
                        <div class="w-12 h-12 rounded-lg bg-sky-100 flex items-center justify-center">
                            <i class="fas fa-university text-sky-600 text-xl"></i>
                        </div>
                        <span class="px-3 py-1 bg-sky-100 text-sky-600 text-xs font-medium rounded-full">Hybrid</span>
                    </div>
                    <h3 class="text-xl font-semibold text-sky-800 mb-1">Data Scientist</h3>
                    <p class="text-sky-600 mb-4">JPMorgan Chase · New York, NY</p>
                    <p class="text-gray-600 mb-4">We're seeking a data scientist to analyze complex financial data and develop predictive models.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-2 py-1 bg-sky-50 text-sky-600 text-xs rounded">Python</span>
                        <span class="px-2 py-1 bg-sky-50 text-sky-600 text-xs rounded">Machine Learning</span>
                        <span class="px-2 py-1 bg-sky-50 text-sky-600 text-xs rounded">SQL</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-sky-700 font-medium">$130k - $160k</span>
                        <button class="px-4 py-2 bg-sky-100 text-sky-600 font-medium rounded-lg hover:bg-sky-200 transition">Apply Now</button>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-8">
                <button class="px-6 py-3 border border-sky-500 text-sky-600 font-medium rounded-lg hover:bg-sky-50 transition">View All Jobs</button>
            </div>
        </div>
    </section>

    <!-- Top Companies Section -->
    <section id="companies" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-sky-800 mb-2">Top Companies Hiring</h2>
                <p class="text-sky-600 max-w-2xl mx-auto">Explore opportunities with industry leaders and innovative startups</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6 mb-8">
                <!-- Company 1 -->
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border border-sky-100 flex flex-col items-center">
                    <div class="w-16 h-16 rounded-lg bg-sky-50 flex items-center justify-center mb-4">
                        <i class="fab fa-google text-sky-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-sky-800 mb-1">Google</h3>
                    <p class="text-sm text-sky-600 mb-3">12 Openings</p>
                    <button class="mt-auto px-3 py-1 bg-sky-50 text-sky-600 text-sm rounded-lg hover:bg-sky-100 transition">View Jobs</button>
                </div>
                
                <!-- Company 2 -->
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border border-sky-100 flex flex-col items-center">
                    <div class="w-16 h-16 rounded-lg bg-sky-50 flex items-center justify-center mb-4">
                        <i class="fab fa-microsoft text-sky-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-sky-800 mb-1">Microsoft</h3>
                    <p class="text-sm text-sky-600 mb-3">8 Openings</p>
                    <button class="mt-auto px-3 py-1 bg-sky-50 text-sky-600 text-sm rounded-lg hover:bg-sky-100 transition">View Jobs</button>
                </div>
                
                <!-- Company 3 -->
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border border-sky-100 flex flex-col items-center">
                    <div class="w-16 h-16 rounded-lg bg-sky-50 flex items-center justify-center mb-4">
                        <i class="fab fa-apple text-sky-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-sky-800 mb-1">Apple</h3>
                    <p class="text-sm text-sky-600 mb-3">5 Openings</p>
                    <button class="mt-auto px-3 py-1 bg-sky-50 text-sky-600 text-sm rounded-lg hover:bg-sky-100 transition">View Jobs</button>
                </div>
                
                <!-- Company 4 -->
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border border-sky-100 flex flex-col items-center">
                    <div class="w-16 h-16 rounded-lg bg-sky-50 flex items-center justify-center mb-4">
                        <i class="fab fa-amazon text-sky-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-sky-800 mb-1">Amazon</h3>
                    <p class="text-sm text-sky-600 mb-3">15 Openings</p>
                    <button class="mt-auto px-3 py-1 bg-sky-50 text-sky-600 text-sm rounded-lg hover:bg-sky-100 transition">View Jobs</button>
                </div>
                
                <!-- Company 5 -->
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border border-sky-100 flex flex-col items-center">
                    <div class="w-16 h-16 rounded-lg bg-sky-50 flex items-center justify-center mb-4">
                        <i class="fab fa-facebook text-sky-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-sky-800 mb-1">Meta</h3>
                    <p class="text-sm text-sky-600 mb-3">7 Openings</p>
                    <button class="mt-auto px-3 py-1 bg-sky-50 text-sky-600 text-sm rounded-lg hover:bg-sky-100 transition">View Jobs</button>
                </div>
                
                <!-- Company 6 -->
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border border-sky-100 flex flex-col items-center">
                    <div class="w-16 h-16 rounded-lg bg-sky-50 flex items-center justify-center mb-4">
                        <i class="fab fa-spotify text-sky-600 text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-medium text-sky-800 mb-1">Spotify</h3>
                    <p class="text-sm text-sky-600 mb-3">4 Openings</p>
                    <button class="mt-auto px-3 py-1 bg-sky-50 text-sky-600 text-sm rounded-lg hover:bg-sky-100 transition">View Jobs</button>
                </div>
            </div>
            
            <div class="text-center mt-8">
                <button class="px-6 py-3 border border-sky-500 text-sky-600 font-medium rounded-lg hover:bg-sky-50 transition">View All Companies</button>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-16 bg-sky-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-sky-800 mb-2">How Yokerjo Works</h2>
                <p class="text-sky-600 max-w-2xl mx-auto">Simple steps to find your perfect job match</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 text-center">
                    <div class="w-16 h-16 bg-sky-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-sky-600 text-2xl font-bold">1</span>
                    </div>
                    <h3 class="text-xl font-semibold text-sky-800 mb-3">Create Your Profile</h3>
                    <p class="text-sky-600 mb-4">Tell us about your skills, experience, and career goals to help us match you with the right opportunities.</p>
                    <div class="w-12 h-1 bg-sky-200 mx-auto"></div>
                </div>
                
                <!-- Step 2 -->
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 text-center">
                    <div class="w-16 h-16 bg-sky-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-sky-600 text-2xl font-bold">2</span>
                    </div>
                    <h3 class="text-xl font-semibold text-sky-800 mb-3">Browse & Apply</h3>
                    <p class="text-sky-600 mb-4">Explore thousands of job listings from top companies and apply with just one click.</p>
                    <div class="w-12 h-1 bg-sky-200 mx-auto"></div>
                </div>
                
                <!-- Step 3 -->
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 text-center">
                    <div class="w-16 h-16 bg-sky-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-sky-600 text-2xl font-bold">3</span>
                    </div>
                    <h3 class="text-xl font-semibold text-sky-800 mb-3">Get Hired</h3>
                    <p class="text-sky-600 mb-4">Connect directly with employers and land your dream job faster than ever before.</p>
                    <div class="w-12 h-1 bg-sky-200 mx-auto"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-sky-800 mb-2">Success Stories</h2>
                <p class="text-sky-600 max-w-2xl mx-auto">Hear from professionals who found their dream jobs through Yokerjo</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-sky-50 p-8 rounded-xl">
                    <div class="flex items-center mb-6">
                        <img src="https://randomuser.me/api/portraits/women/32.jpg" class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h4 class="text-lg font-semibold text-sky-800">Sarah Johnson</h4>
                            <p class="text-sky-600">Product Designer at Google</p>
                        </div>
                    </div>
                    <p class="text-sky-700 italic mb-4">"Yokerjo made my job search so much easier. Within two weeks of creating my profile, I had multiple interviews lined up with top tech companies. The personalized job recommendations were spot on!"</p>
                    <div class="flex text-sky-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-sky-50 p-8 rounded-xl">
                    <div class="flex items-center mb-6">
                        <img src="https://randomuser.me/api/portraits/men/54.jpg" class="w-16 h-16 rounded-full mr-4">
                        <div>
                            <h4 class="text-lg font-semibold text-sky-800">Michael Chen</h4>
                            <p class="text-sky-600">Software Engineer at Microsoft</p>
                        </div>
                    </div>
                    <p class="text-sky-700 italic mb-4">"As a recent graduate, I was overwhelmed by the job search process. Yokerjo's career resources and direct connections with hiring managers helped me land my first job in tech much faster than I expected."</p>
                    <div class="flex text-sky-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources Section -->
    <section id="resources" class="py-16 bg-sky-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-sky-800 mb-2">Career Resources</h2>
                <p class="text-sky-600 max-w-2xl mx-auto">Boost your job search with our expert advice and tools</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Resource 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="h-40 bg-sky-100 flex items-center justify-center">
                        <i class="fas fa-file-alt text-sky-500 text-5xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-sky-800 mb-3">Resume Builder</h3>
                        <p class="text-sky-600 mb-4">Create a professional resume that stands out with our easy-to-use builder tool.</p>
                        <a href="#" class="text-sky-500 font-medium hover:text-sky-600 flex items-center">
                            Get Started <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Resource 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="h-40 bg-sky-100 flex items-center justify-center">
                        <i class="fas fa-laptop-code text-sky-500 text-5xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-sky-800 mb-3">Interview Prep</h3>
                        <p class="text-sky-600 mb-4">Practice with common interview questions and get tips from industry experts.</p>
                        <a href="#" class="text-sky-500 font-medium hover:text-sky-600 flex items-center">
                            Learn More <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Resource 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="h-40 bg-sky-100 flex items-center justify-center">
                        <i class="fas fa-chart-line text-sky-500 text-5xl"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-sky-800 mb-3">Salary Calculator</h3>
                        <p class="text-sky-600 mb-4">Find out what you should be earning based on your role, experience, and location.</p>
                        <a href="#" class="text-sky-500 font-medium hover:text-sky-600 flex items-center">
                            Calculate Now <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-sky-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Find Your Dream Job?</h2>
            <p class="text-xl text-sky-100 mb-8 max-w-2xl mx-auto">Join thousands of professionals who accelerated their careers with Yokerjo</p>
            <div class="flex flex-col sm:flex-row justify-center space-y-3 sm:space-y-0 sm:space-x-4">
                <button class="px-6 py-3 bg-white text-sky-600 font-medium rounded-lg hover:bg-sky-50 transition shadow-md">Create Free Account</button>
                <button class="px-6 py-3 border border-white text-white font-medium rounded-lg hover:bg-sky-700 transition">How It Works</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-sky-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-10 h-10 rounded-full bg-sky-600 flex items-center justify-center">
                            <i class="fas fa-briefcase text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-bold">Yokerjo</h3>
                    </div>
                    <p class="text-sky-300 mb-4">Connecting talent with opportunity since 2023.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-sky-300 hover:text-white"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-sky-300 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-sky-300 hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-sky-300 hover:text-white"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">For Job Seekers</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-sky-300 hover:text-white">Browse Jobs</a></li>
                        <li><a href="#" class="text-sky-300 hover:text-white">Create Profile</a></li>
                        <li><a href="#" class="text-sky-300 hover:text-white">Job Alerts</a></li>
                        <li><a href="#" class="text-sky-300 hover:text-white">Career Advice</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">For Employers</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-sky-300 hover:text-white">Post a Job</a></li>
                        <li><a href="#" class="text-sky-300 hover:text-white">Browse Candidates</a></li>
                        <li><a href="#" class="text-sky-300 hover:text-white">Pricing Plans</a></li>
                        <li><a href="#" class="text-sky-300 hover:text-white">Recruiting Solutions</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt text-sky-400 mt-1 mr-2"></i>
                            <span class="text-sky-300">123 Job Street, San Francisco, CA 94107</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone-alt text-sky-400 mt-1 mr-2"></i>
                            <span class="text-sky-300">(555) 123-4567</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope text-sky-400 mt-1 mr-2"></i>
                            <span class="text-sky-300">hello@yokerjo.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="pt-8 border-t border-sky-700 flex flex-col md:flex-row justify-between items-center">
                <p class="text-sky-300 mb-4 md:mb-0">© 2023 Yokerjo. All rights reserved.</p>
                <div class="flex space-x-6">
                    <a href="#" class="text-sky-300 hover:text-white">Privacy Policy</a>
                    <a href="#" class="text-sky-300 hover:text-white">Terms of Service</a>
                    <a href="#" class="text-sky-300 hover:text-white">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>