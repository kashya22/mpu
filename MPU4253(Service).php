<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradiCare - Our Services</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
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

        .service-card {
            transition: all 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
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
                    Personalized Wellness Solutions
                </h1>
                <p class="text-xl text-gray-600 mb-12 slide-in" style="animation-delay: 0.2s">
                    Traditional wisdom meets modern lifestyle for better health and well-being
                </p>
            </div>
        </div>
        
        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-green-300 to-blue-300 opacity-20 rounded-full blur-3xl morph"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-br from-purple-300 to-blue-300 opacity-20 rounded-full blur-3xl morph"></div>
    </div>

    <!-- Main Services Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-4xl font-bold text-center mb-16 text-gray-800">Our Services</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Personalized Assessment -->
                    <div class="service-card glass p-8 rounded-2xl">
                        <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Personalized Assessment</h3>
                        <p class="text-gray-600 mb-4">Comprehensive evaluation of your lifestyle, sleeping habits, and health concerns through our intelligent recommendation system.</p>
                        <ul class="text-gray-600 space-y-2">
                            <li>• Sleep pattern analysis</li>
                            <li>• Lifestyle evaluation</li>
                            <li>• Health concern identification</li>
                        </ul>
                    </div>

                    <!-- Traditional Medicine Solutions -->
                    <div class="service-card glass p-8 rounded-2xl">
                        <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Expert Recommendations</h3>
                        <p class="text-gray-600 mb-4">Personalized traditional medicine solutions recommended by certified Traditional Chinese Medicine specialists.</p>
                        <ul class="text-gray-600 space-y-2">
                            <li>• Natural remedies for insomnia</li>
                            <li>• Stress management solutions</li>
                            <li>• Fatigue recovery methods</li>
                        </ul>
                    </div>

                    <!-- Wellness Education -->
                    <div class="service-card glass p-8 rounded-2xl">
                        <div class="w-16 h-16 rounded-full bg-purple-100 flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-4">Wellness Education</h3>
                        <p class="text-gray-600 mb-4">Comprehensive information about traditional medicine benefits, safety guidelines, and sourcing methods.</p>
                        <ul class="text-gray-600 space-y-2">
                            <li>• Safety guidelines</li>
                            <li>• Sourcing information</li>
                            <li>• Educational resources</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-20 bg-gradient-to-r from-green-50 to-blue-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16 text-gray-800">How It Works</h2>
            <div class="max-w-5xl mx-auto">
                <div class="grid md:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="w-20 h-20 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-green-600">1</span>
                        </div>
                        <h3 class="text-lg font-semibold mb-4">Sign Up</h3>
                        <p class="text-gray-600">Create your account and complete your health profile</p>
                    </div>

                    <div class="text-center">
                        <div class="w-20 h-20 rounded-full bg-blue-100 flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-blue-600">2</span>
                        </div>
                        <h3 class="text-lg font-semibold mb-4">Assessment</h3>
                        <p class="text-gray-600">Share your habits and health preferences</p>
                    </div>

                    <div class="text-center">
                        <div class="w-20 h-20 rounded-full bg-purple-100 flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-purple-600">3</span>
                        </div>
                        <h3 class="text-lg font-semibold mb-4">Recommendations</h3>
                        <p class="text-gray-600">Receive personalized traditional medicine solutions</p>
                    </div>

                    <div class="text-center">
                        <div class="w-20 h-20 rounded-full bg-indigo-100 flex items-center justify-center mx-auto mb-6">
                            <span class="text-2xl font-bold text-indigo-600">4</span>
                        </div>
                        <h3 class="text-lg font-semibold mb-4">Implementation</h3>
                        <p class="text-gray-600">Follow your personalized wellness plan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold text-center mb-16 text-gray-800">Benefits</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="glass p-8 rounded-2xl">
                        <h3 class="text-xl font-semibold mb-4 text-green-600">For Students</h3>
                        <ul class="space-y-4 text-gray-600">
                            <li>• Better sleep quality and patterns</li>
                            <li>• Reduced stress and anxiety</li>
                            <li>• Improved focus and concentration</li>
                            <li>• Natural solutions for common health issues</li>
                        </ul>
                    </div>
                    <div class="glass p-8 rounded-2xl">
                        <h3 class="text-xl font-semibold mb-4 text-blue-600">Sustainable Impact</h3>
                        <ul class="space-y-4 text-gray-600">
                            <li>• Adoption of healthy lifestyle habits</li>
                            <li>• Long-term wellness practices</li>
                            <li>• Increased health awareness</li>
                            <li>• Better academic performance</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gradient-to-r from-green-50 to-blue-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold mb-8 bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">
                    Start Your Wellness Journey Today
                </h2>
                <p class="text-gray-600 mb-12">
                    Join thousands of students who have improved their well-being through traditional medicine solutions.
                </p>
                <div class="text-center mb-32">
					<button onclick="window.location.href='MPU4253(Dashboard).php'" class="group relative px-12 py-4 text-lg font-medium text-white bg-gradient-to-r from-green-500 to-blue-500 rounded-full hover:opacity-90 transition-all duration-300 pulse">
						<span class="relative flex items-center">
							Go To Your Dashboard
							<svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
							</svg>
						</span>
					</button>
				</div>
            </div>
        </div>
    </section>
</body>
</html>