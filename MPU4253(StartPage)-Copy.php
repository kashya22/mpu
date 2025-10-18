<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradiCare - Holistic Wellness Journey</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @keyframes morphBackground {
            0% { border-radius: 60% 40% 30% 70%/60% 30% 70% 40%; }
            50% { border-radius: 30% 60% 70% 40%/50% 60% 30% 60%; }
            100% { border-radius: 60% 40% 30% 70%/60% 30% 70% 40%; }
        }

        .morph-bg {
            animation: morphBackground 8s ease-in-out infinite;
            background: linear-gradient(45deg, #4CAF50, #2196F3);
            position: absolute;
            width: 500px;
            height: 500px;
            filter: blur(30px);
            opacity: 0.15;
            z-index: -1;
        }

        @keyframes float {
            0% { transform: translateY(0px) rotate(0deg) scale(1); }
            50% { transform: translateY(-20px) rotate(5deg) scale(1.05); }
            100% { transform: translateY(0px) rotate(0deg) scale(1); }
        }

        .float-animation {
            animation: float 8s ease-in-out infinite;
        }

        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .feature-card {
            transition: all 0.5s ease;
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .feature-card:hover {
            transform: translateY(-10px) scale(1.02);
            background: rgba(255, 255, 255, 0.9);
        }

        .organic-border {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(76, 175, 80, 0.4); }
            70% { box-shadow: 0 0 0 20px rgba(76, 175, 80, 0); }
            100% { box-shadow: 0 0 0 0 rgba(76, 175, 80, 0); }
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        .scroll-indicator::after {
            content: '';
            display: block;
            width: 2px;
            height: 60px;
            background: #4CAF50;
            margin: 0 auto;
            animation: scrollDown 2s infinite;
        }

        @keyframes scrollDown {
            0% { height: 60px; opacity: 1; }
            50% { height: 30px; opacity: 0.5; }
            100% { height: 60px; opacity: 1; }
        }
    </style>
</head>
<body class="bg-gradient-to-br from-green-50 via-blue-50 to-purple-50 min-h-screen overflow-x-hidden">
    <!-- Animated Background Shapes -->
    <div class="morph-bg top-0 left-0"></div>
    <div class="morph-bg bottom-0 right-0"></div>

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

    <div class="container mx-auto px-4 pt-32">
        <!-- Hero Section -->
        <header class="text-center mb-32 relative">
            <h1 class="text-7xl font-bold mb-6 bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">
                TradiCare
            </h1>
            <p class="text-2xl text-gray-600 mb-12 font-light">
                Where Ancient Wisdom Meets Modern Wellness
            </p>
            <p class="text-gray-600 max-w-2xl mx-auto mb-16">
                Embark on a transformative journey that harmoniously blends traditional healing practices 
                with contemporary wellness science, crafted uniquely for you.
            </p>
            
            <!-- Floating Logo -->
            <div class="float-animation mb-16">
                <div class="organic-border overflow-hidden w-64 h-64 mx-auto bg-gradient-to-br from-green-400 to-blue-500 p-1">
                    <div class="w-full h-full bg-white rounded-[inherit] p-4">
                        <svg class="w-full h-full" viewBox="0 0 100 100">
                            <defs>
                                <linearGradient id="leafGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#4CAF50" />
                                    <stop offset="100%" style="stop-color:#2196F3" />
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="45" fill="none" stroke="url(#leafGradient)" stroke-width="2"/>
                            <path d="M50 5 C 60 30, 80 50, 50 95 C 20 50, 40 30, 50 5" fill="url(#leafGradient)"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="scroll-indicator absolute bottom-0 left-1/2 transform -translate-x-1/2"></div>
        </header>

        <!-- Features Grid -->
        <div class="grid md:grid-cols-3 gap-12 mb-32 relative">
            <div class="feature-card p-8 rounded-2xl">
                <div class="text-green-600 mb-6">
                    <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Personal Harmony</h3>
                    <p class="text-gray-600 leading-relaxed">Discover wellness solutions that adapt to your unique constitution and lifestyle rhythms, creating perfect balance in your daily routine.</p>
                </div>
            </div>

            <div class="feature-card p-8 rounded-2xl">
                <div class="text-blue-600 mb-6">
                    <div class="w-16 h-16 rounded-full bg-blue-100 flex items-center justify-center mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Natural Vitality</h3>
                    <p class="text-gray-600 leading-relaxed">Experience the power of traditional remedies, carefully curated to enhance your natural vitality and restore inner balance.</p>
                </div>
            </div>

            <div class="feature-card p-8 rounded-2xl">
                <div class="text-purple-600 mb-6">
                    <div class="w-16 h-16 rounded-full bg-purple-100 flex items-center justify-center mb-4">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-gray-800 mb-4">Wisdom & Guidance</h3>
                    <p class="text-gray-600 leading-relaxed">Journey with expert practitioners who blend ancient wisdom with modern understanding to guide your path to wellness.</p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
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
</body>
</html>