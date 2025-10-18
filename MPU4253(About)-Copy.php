<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About TradiCare - Our Story & Mission</title>
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
				<a href="MPU4253(StartPage)-Copy.php">
					<div class="text-3xl font-bold bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">
						TradiCare
					</div>
				</a>
                <div class="flex items-center space-x-8">
                    <a href="MPU4253(About)-Copy.php" class="text-gray-600 hover:text-green-600 transition-all hover:scale-110">About</a>
					<a href="MPU4253(Service)-Copy.php" class="text-gray-600 hover:text-green-600 transition-all hover:scale-110">Services</a>
					<a href="MPU4253(Contact)-Copy.php" class="text-gray-600 hover:text-green-600 transition-all hover:scale-110">Contact</a>
					<a href="MPU4253(Login).php" class="text-white bg-gradient-to-r from-green-500 to-blue-500 px-4 py-2 rounded-full hover:opacity-90 transition-all hover:scale-110">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="relative pt-32 pb-20 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-6xl font-bold mb-8 bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent slide-in">
                    Our Story
                </h1>
                <p class="text-xl text-gray-600 mb-12 slide-in" style="animation-delay: 0.2s">
                    Bridging millennia of traditional wisdom with modern wellness science
                </p>
            </div>
        </div>
        
        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-green-300 to-blue-300 opacity-20 rounded-full blur-3xl morph"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-br from-purple-300 to-blue-300 opacity-20 rounded-full blur-3xl morph"></div>
    </div>

    <!-- Mission Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-16 items-center">
                    <div class="relative">
                        <div class="morph overflow-hidden bg-gradient-to-br from-green-400 to-blue-500 p-1">
                            <img src="https://th.bing.com/th/id/OIP.cmZcLtAUxjVQwkEk2cWSOgHaDs?rs=1&pid=ImgDetMain" alt="Our Mission" class="w-full h-full object-cover rounded-[inherit]" />
                        </div>
                    </div>
                    <div>
                        <h2 class="text-4xl font-bold mb-6 text-gray-800">Our Mission</h2>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            At TradiCare, we believe in the profound wisdom carried through generations of traditional medicine. Our mission is to make this timeless knowledge accessible and applicable to modern life, helping individuals achieve optimal wellness through natural, holistic approaches.
                        </p>
                        <p class="text-gray-600 leading-relaxed">
                            We combine ancient healing practices with contemporary scientific understanding, creating personalized wellness solutions that honor both tradition and innovation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-gradient-to-r from-green-50 to-blue-50">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16 text-gray-800">Our Values</h2>
            <div class="grid md:grid-cols-4 gap-8 max-w-6xl mx-auto">
                <div class="text-center">
                    <div class="w-20 h-20 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Compassion</h3>
                    <p class="text-gray-600">Treating every individual with care and understanding</p>
                </div>
                
                <div class="text-center">
                    <div class="w-20 h-20 rounded-full bg-blue-100 flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Integrity</h3>
                    <p class="text-gray-600">Upholding the highest standards in all we do</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 rounded-full bg-purple-100 flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Innovation</h3>
                    <p class="text-gray-600">Constantly evolving while respecting tradition</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 rounded-full bg-indigo-100 flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Harmony</h3>
                    <p class="text-gray-600">Balancing traditional wisdom with modern life</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Join Us Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-bold mb-8 bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">
                    Join Our Wellness Journey
                </h2>
                <p class="text-gray-600 mb-12">
                    Be part of a community that values holistic health and traditional wisdom. 
                    Together, we can create a healthier, more balanced world.
                </p>
                <div class="text-center mb-32">
					<button onclick="window.location.href='MPU4253(Survey_Form).php'" class="group relative px-12 py-4 text-lg font-medium text-white bg-gradient-to-r from-green-500 to-blue-500 rounded-full hover:opacity-90 transition-all duration-300 pulse">
						<span class="relative flex items-center">
							Begin Your Journey
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