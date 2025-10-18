<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact TradiCare - Get in Touch</title>
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
                    Contact Us
                </h1>
                <p class="text-xl text-gray-600 mb-12 slide-in" style="animation-delay: 0.2s">
                    Let's start your journey towards holistic wellness together
                </p>
            </div>
        </div>
        
        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-green-300 to-blue-300 opacity-20 rounded-full blur-3xl morph"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-br from-purple-300 to-blue-300 opacity-20 rounded-full blur-3xl morph"></div>
    </div>

    <!-- Contact Form Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-16">
                    <!-- Contact Information -->
                    <div class="space-y-8">
                        <div>
                            <h2 class="text-4xl font-bold mb-6 text-gray-800">Get in Touch</h2>
                            <p class="text-gray-600 mb-8">Have questions about our services or want to schedule a consultation? We're here to help you on your wellness journey.</p>
                        </div>
                        
                        <div class="space-y-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Phone</h3>
                                    <p class="text-gray-600">+1 (555) 123-4567</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Email</h3>
                                    <p class="text-gray-600">info@traditcare.com</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-800">Location</h3>
                                    <p class="text-gray-600">123 Wellness Street, Health City, HC 12345</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="glass p-8 rounded-2xl">
                        <form class="space-y-6" action="MPU4253(Send_Mail)-Copy.php" method="POST">
							<div>
								<label class="block text-gray-700 mb-2" for="name">Name</label>
								<input type="text" id="name" name="name" required
									class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all">
							</div>

							<div>
								<label class="block text-gray-700 mb-2" for="email">Email</label>
								<input type="email" id="email" name="email" required
									class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all">
							</div>

							<div>
								<label class="block text-gray-700 mb-2" for="subject">Subject</label>
								<input type="text" id="subject" name="subject" required
									class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all">
							</div>

							<div>
								<label class="block text-gray-700 mb-2" for="message">Message</label>
								<textarea id="message" name="message" rows="4" required
									class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all"></textarea>
							</div>

							<button type="submit"
								class="w-full py-4 px-6 text-white bg-gradient-to-r from-green-500 to-blue-500 rounded-lg hover:opacity-90 transition-all duration-300 flex items-center justify-center space-x-2">
								<span>Send Message</span>
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