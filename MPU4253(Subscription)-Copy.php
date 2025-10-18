<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Subscription - TradiCare</title>
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
        
        .subscription-card {
            transition: all 0.3s ease;
            transform: translateY(0);
        }
        
        .subscription-card:hover {
            transform: translateY(-10px);
        }
        
        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 0.75rem;
        }
        
        .price-tag {
            position: relative;
            display: inline-block;
        }
        
        .price-tag::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(to right, #10B981, #3B82F6);
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
    <div class="relative pt-32 pb-12 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-5xl font-bold mb-6 bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent slide-in">
                    Manage Your Subscription
                </h1>
                <p class="text-xl text-gray-600 mb-8 slide-in" style="animation-delay: 0.2s">
                    Choose the plan that best fits your wellness journey
                </p>
            </div>
        </div>
        
        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-green-300 to-blue-300 opacity-20 rounded-full blur-3xl morph"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-br from-purple-300 to-blue-300 opacity-20 rounded-full blur-3xl morph"></div>
    </div>

    <!-- Subscription Plans -->
    <section class="py-12 mb-20">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-10">
                    
                    <!-- Free Plan -->
                    <div class="subscription-card glass rounded-2xl overflow-hidden">
                        <div class="p-8">
                            <div class="flex justify-between items-start mb-6">
                                <div>
                                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Free Plan</h3>
                                    <p class="text-gray-500">Perfect for getting started</p>
                                </div>
                            </div>
                            
                            <hr class="my-6 border-gray-200" />
                            
                            <h4 class="text-lg font-semibold text-gray-700 mb-4">Features</h4>
                            
                            <div class="space-y-3 mb-8">
                                <div class="feature-item">
                                    <svg class="w-5 h-5 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-600">Track Your Sleep Statistics</span>
                                </div>
                                <div class="feature-item">
                                    <svg class="w-5 h-5 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-600">Store Sleep Logs</span>
                                </div>
                            </div>
                            
                            <div class="text-center mt-8">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Premium Plan -->
                    <div class="subscription-card glass rounded-2xl overflow-hidden relative">
                        <div class="absolute top-0 right-0">
                        </div>
                        <div class="p-8">
                            <div class="flex justify-between items-start mb-6">
                                <div>
                                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Premium Plan</h3>
                                    <p class="text-gray-500">Complete holistic wellness support</p>
                                </div>
                                <div class="price-tag text-3xl font-bold text-gray-800">
                                    RM20
                                    <span class="text-sm text-gray-500 font-normal">/month</span>
                                </div>
                            </div>
                            
                            <hr class="my-6 border-gray-200" />
                            
                            <h4 class="text-lg font-semibold text-gray-700 mb-4">Features</h4>
                            
                            <div class="space-y-3 mb-8">
                                <div class="feature-item">
                                    <svg class="w-5 h-5 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-600">Track Your Sleep Statistics</span>
                                </div>
                                <div class="feature-item">
                                    <svg class="w-5 h-5 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-600">Store Sleep Logs</span>
                                </div>
                                <div class="feature-item">
                                    <svg class="w-5 h-5 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-600">Receive Personalized Sleep Recommendation From Professional TCM Practitioner</span>
                                </div>
                                <div class="feature-item">
                                    <svg class="w-5 h-5 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-600">Receive Personalized Activity Recommendations Based on TCM Practices</span>
                                </div>
                                <div class="feature-item">
                                    <svg class="w-5 h-5 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-600">10% Discount on Visits to our Partnered Clinics</span>
                                </div>
                                <div class="feature-item">
                                    <svg class="w-5 h-5 mr-3 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span class="text-gray-600">Chat Directly with a TCM Practitioner</span>
                                </div>
                            </div>
                            
                            <div class="text-center mt-8">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- FAQ Section -->
    <section class="py-12 mb-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12">Frequently Asked Questions</h2>
                
                <div class="space-y-6">
                    <div class="glass rounded-xl p-6">
                        <h3 class="text-xl font-semibold mb-2">How do I cancel my subscription?</h3>
                        <p class="text-gray-600">You can cancel your subscription anytime by visiting the subscription management page. Your premium benefits will remain active until the end of your current billing cycle.</p>
                    </div>
                    
                    <div class="glass rounded-xl p-6">
                        <h3 class="text-xl font-semibold mb-2">Can I upgrade my plan later?</h3>
                        <p class="text-gray-600">Yes! You can upgrade from the Free Plan to the Premium Plan at any time. Your new benefits will be immediately available.</p>
                    </div>
                    
                    <div class="glass rounded-xl p-6">
                        <h3 class="text-xl font-semibold mb-2">How do I access TCM practitioner chats?</h3>
                        <p class="text-gray-600">Premium members can access direct chat with TCM practitioners through the "Chat" section on the dashboard. Our practitioners are available during business hours to answer your questions.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Call to Action -->
    <section class="py-12 mb-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-bold mb-6 bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">
                    Start Your Holistic Wellness Journey Today
                </h2>
                <p class="text-gray-600 mb-10">
                    Take the first step toward better sleep and balanced health with TradiCare's personalized approach.
                </p>
                <div class="flex justify-center space-x-6">
                    <button onclick="window.location.href='MPU4253(Survey_Form).php'" class="px-8 py-3 text-white bg-gradient-to-r from-green-500 to-blue-500 rounded-full hover:opacity-90 transition-all">
                        Begin Your Journey
                    </button>
                </div>
            </div>
        </div>
    </section>
</body>
</html>