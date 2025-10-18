<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback - TradiCare</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .parallax-bg {
            transform: translateZ(-1px) scale(2);
        }

        @keyframes wave {
            0% { transform: rotate(0deg); }
            50% { transform: rotate(15deg); }
            100% { transform: rotate(0deg); }
        }

        .wave {
            animation: wave 3s ease-in-out infinite;
            transform-origin: bottom center;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .slide-in {
            animation: slideIn 0.8s ease-out forwards;
        }

        @keyframes morphShape {
            0% { border-radius: 60% 40% 30% 70%/60% 30% 70% 40%; }
            50% { border-radius: 30% 60% 70% 40%/50% 60% 30% 60%; }
            100% { border-radius: 60% 40% 30% 70%/60% 30% 70% 40%; }
        }

        .morph {
            animation: morphShape 8s ease-in-out infinite;
        }

        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-green-50 via-blue-50 to-purple-50 min-h-screen">
    <!-- Navigation -->
    <nav class="glass fixed w-full z-50 top-0">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <a href="MPU4253(StartPage).php">
                    <div class="text-3xl font-bold bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">
                        TradiCare
                    </div>
                </a>
                
                <!-- Properly centered welcome message -->
                <div class="flex-grow text-center">
                    <span class="text-gray-600 font-medium">Welcome, user</span>
                </div>
                
                <!-- Right-aligned navigation links -->
                <div class="flex items-center space-x-8">
                    <a href="MPU4253(Dashboard).php" class="text-gray-600 hover:text-green-600 transition-all hover:scale-110">Dashboard</a>
                    <a href="MPU4253(About).php" class="text-gray-600 hover:text-green-600 transition-all hover:scale-110">About</a>
                    <a href="MPU4253(Service).php" class="text-gray-600 hover:text-green-600 transition-all hover:scale-110">Services</a>
                    <a href="MPU4253(Contact).php" class="text-gray-600 hover:text-green-600 transition-all hover:scale-110">Contact</a>
                    <a href="MPU4253(Login).php" class="text-white bg-gradient-to-r from-green-500 to-blue-500 px-4 py-2 rounded-full hover:opacity-90 transition-all hover:scale-110">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative pt-32 pb-20 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-6xl font-bold mb-8 bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent slide-in">
                    Share Your Feedback
                </h1>
                <p class="text-xl text-gray-600 mb-12 slide-in" style="animation-delay: 0.2s">
                    Help us improve your wellness experience by sharing your thoughts
                </p>
            </div>
        </div>
        
        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-green-300 to-blue-300 opacity-20 rounded-full blur-3xl morph"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-br from-purple-300 to-blue-300 opacity-20 rounded-full blur-3xl morph"></div>
    </div>

    <!-- Feedback Form Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-16">
                    <!-- Left Column -->
                    <div class="space-y-8">
                        <div>
                            <h2 class="text-4xl font-bold mb-6 text-gray-800">Your Opinion Matters</h2>
                            <p class="text-gray-600 mb-8">Your feedback helps us improve our services and ensure we're meeting your wellness needs. Please take a moment to share your thoughts about your experience with TradiCare.</p>
                        </div>
                        
                        <div class="space-y-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Share Your Experience</h3>
                                    <p class="text-gray-600">Tell us about your recent visit and treatment</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Suggest Improvements</h3>
                                    <p class="text-gray-600">Help us make TradiCare even better</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Rate Your Practitioner</h3>
                                    <p class="text-gray-600">Let us know about your practitioner's service</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Feedback Form -->
                    <div class="glass p-8 rounded-2xl">
                        <form class="space-y-6" action="MPU4253(Process_Feedback).php" method="POST">
                            <div>
                                <label class="block text-gray-700 mb-2" for="name">Your Name</label>
                                <input type="text" id="name" name="name" required
                                    class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all">
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2" for="email">Email Address</label>
                                <input type="email" id="email" name="email" required
                                    class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all">
                            </div>
                            
                            <div>
                                <label class="block text-gray-700 mb-2" for="practitioner">Practitioner Name</label>
                                <input type="text" id="practitioner" name="practitioner"
                                    class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all">
                            </div>
                            
                            <div>
                                <label class="block text-gray-700 mb-2" for="service">Service Received</label>
                                <select id="service" name="service" 
                                    class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all">
                                    <option value="">Select a service</option>
                                    <option value="herbal-medicine">Herbal Medicine</option>
                                    <option value="acupuncture">Acupuncture</option>
                                    <option value="massage-therapy">Massage Therapy</option>
                                    <option value="nutrition-counseling">Nutrition Counseling</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <div>
                                <label class="block text-gray-700 mb-2">Rate Your Experience</label>
                                <div class="flex space-x-4">
                                    <div class="flex items-center">
                                        <input type="radio" id="rating-1" name="rating" value="1" class="w-4 h-4 text-green-600">
                                        <label for="rating-1" class="ml-2 text-gray-700">1</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" id="rating-2" name="rating" value="2" class="w-4 h-4 text-green-600">
                                        <label for="rating-2" class="ml-2 text-gray-700">2</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" id="rating-3" name="rating" value="3" class="w-4 h-4 text-green-600">
                                        <label for="rating-3" class="ml-2 text-gray-700">3</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" id="rating-4" name="rating" value="4" class="w-4 h-4 text-green-600">
                                        <label for="rating-4" class="ml-2 text-gray-700">4</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" id="rating-5" name="rating" value="5" class="w-4 h-4 text-green-600" checked>
                                        <label for="rating-5" class="ml-2 text-gray-700">5</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-gray-700 mb-2">What aspects were you satisfied with?</label>
                                <div class="grid grid-cols-2 gap-3">
                                    <div class="flex items-center">
                                        <input type="checkbox" id="satisfaction-staff" name="satisfaction[]" value="staff" class="w-4 h-4 text-green-600">
                                        <label for="satisfaction-staff" class="ml-2 text-gray-700">Staff</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="satisfaction-cleanliness" name="satisfaction[]" value="cleanliness" class="w-4 h-4 text-green-600">
                                        <label for="satisfaction-cleanliness" class="ml-2 text-gray-700">Cleanliness</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="satisfaction-treatment" name="satisfaction[]" value="treatment" class="w-4 h-4 text-green-600">
                                        <label for="satisfaction-treatment" class="ml-2 text-gray-700">Treatment</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="satisfaction-price" name="satisfaction[]" value="price" class="w-4 h-4 text-green-600">
                                        <label for="satisfaction-price" class="ml-2 text-gray-700">Price</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="satisfaction-results" name="satisfaction[]" value="results" class="w-4 h-4 text-green-600">
                                        <label for="satisfaction-results" class="ml-2 text-gray-700">Results</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="satisfaction-atmosphere" name="satisfaction[]" value="atmosphere" class="w-4 h-4 text-green-600">
                                        <label for="satisfaction-atmosphere" class="ml-2 text-gray-700">Atmosphere</label>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2">Would you recommend us to others?</label>
                                <div class="flex space-x-6">
                                    <div class="flex items-center">
                                        <input type="radio" id="recommend-yes" name="recommend" value="yes" class="w-4 h-4 text-green-600" checked>
                                        <label for="recommend-yes" class="ml-2 text-gray-700">Yes</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" id="recommend-no" name="recommend" value="no" class="w-4 h-4 text-green-600">
                                        <label for="recommend-no" class="ml-2 text-gray-700">No</label>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2" for="feedback">Additional Comments</label>
                                <textarea id="feedback" name="feedback" rows="4"
                                    class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all" 
                                    placeholder="Please share any additional thoughts about your experience..."></textarea>
                            </div>

                            <div>
                                <label class="block text-gray-700 mb-2" for="suggestions">Suggestions for Improvement</label>
                                <textarea id="suggestions" name="suggestions" rows="3"
                                    class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all" 
                                    placeholder="How can we make your experience better?"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full py-4 px-6 text-white bg-gradient-to-r from-green-500 to-blue-500 rounded-lg hover:opacity-90 transition-all duration-300 flex items-center justify-center space-x-2">
                                <span>Submit Feedback</span>
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>