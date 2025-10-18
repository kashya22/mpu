<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat with Your TCM Practitioner - TradiCare</title>
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
        
        .message-box {
            max-width: 80%;
            margin-bottom: 1rem;
            padding: 0.75rem 1rem;
            border-radius: 1rem;
            position: relative;
        }
        
        .message-user {
            background: linear-gradient(to right, #10B981, #3B82F6);
            color: white;
            border-bottom-right-radius: 0.25rem;
            align-self: flex-end;
        }
        
        .message-practitioner {
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(203, 213, 225, 0.5);
            color: #334155;
            border-bottom-left-radius: 0.25rem;
            align-self: flex-start;
        }
        
        .chat-container {
            height: 450px;
            overflow-y: auto;
        }
        
        .chat-input {
            border: 1px solid rgba(203, 213, 225, 0.5);
            transition: all 0.3s ease;
        }
        
        .chat-input:focus {
            border-color: #3B82F6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.3);
        }
        
        .typing-indicator {
            display: flex;
            align-items: center;
        }
        
        .typing-indicator span {
            height: 8px;
            width: 8px;
            background-color: #CBD5E1;
            border-radius: 50%;
            display: inline-block;
            margin: 0 1px;
            animation: typing 1.5s infinite ease-in-out;
        }
        
        .typing-indicator span:nth-child(2) {
            animation-delay: 0.2s;
        }
        
        .typing-indicator span:nth-child(3) {
            animation-delay: 0.4s;
        }
        
        @keyframes typing {
            0% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
            100% { transform: translateY(0); }
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

    <!-- Main Content -->
    <div class="pt-32 pb-12">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <!-- Chat Header -->
                <div class="glass rounded-t-2xl p-4 flex items-center">
                    <div class="w-12 h-12 rounded-full bg-gradient-to-r from-blue-500 to-blue-700 flex items-center justify-center text-white font-medium text-xl mr-4">
                        W
                    </div>
                    <div>
                        <h2 class="text-xl font-semibold text-gray-800">Dr. Wang</h2>
                        <p class="text-sm text-gray-500">TCM Practitioner • Active Now</p>
                    </div>
                    <div class="ml-auto flex space-x-3">
                        <button class="w-10 h-10 rounded-full flex items-center justify-center text-gray-600 hover:bg-gray-100 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </button>
                        <button class="w-10 h-10 rounded-full flex items-center justify-center text-gray-600 hover:bg-gray-100 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                        </button>
                        <button class="w-10 h-10 rounded-full flex items-center justify-center text-gray-600 hover:bg-gray-100 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Chat Messages -->
                <div class="glass bg-opacity-50 p-6">
                    <div class="chat-container flex flex-col">
                        <!-- System Message -->
                        <div class="text-center text-sm text-gray-500 mb-6">
                            Today, 10:42 AM
                        </div>
                        
                        <!-- Practitioner Message -->
                        <div class="flex items-start mb-4">
                            <div class="w-8 h-8 rounded-full bg-gradient-to-r from-blue-500 to-blue-700 flex items-center justify-center text-white font-medium text-sm mr-2">
                                WX
                            </div>
                            <div class="message-box message-practitioner">
                                <p>Hello! I'm Dr. Wang, your TCM practitioner. How can I help you today?</p>
                            </div>
                        </div>
                        
                        <!-- User Message -->
                        <div class="flex items-start justify-end mb-4">
                            <div class="message-box message-user">
                                <p>Hi Dr. Wang. I've been feeling really stressed lately because of all my assignments. I'm having trouble sleeping and getting headaches pretty often. Are there any TCM approaches that might help?</p>
                            </div>
                            <div class="w-8 h-8 rounded-full bg-gradient-to-r from-green-500 to-blue-500 flex items-center justify-center text-white font-medium text-sm ml-2">
                                U
                            </div>
                        </div>
                        
                        <!-- Practitioner Message -->
                        <div class="flex items-start mb-4">
                            <div class="w-8 h-8 rounded-full bg-gradient-to-r from-blue-500 to-blue-700 flex items-center justify-center text-white font-medium text-sm mr-2">
                                WX
                            </div>
                            <div class="message-box message-practitioner">
                                <p>I'm sorry to hear you're experiencing stress from your assignments. From a TCM perspective, this could be related to an imbalance in your Liver qi, which often manifests as stress, headaches, and sleep disturbances.</p>
                            </div>
                        </div>
                        
                        <!-- Practitioner Message -->
                        <div class="flex items-start mb-4">
                            <div class="w-8 h-8 rounded-full bg-gradient-to-r from-blue-500 to-blue-700 flex items-center justify-center text-white font-medium text-sm mr-2">
                                WX
                            </div>
                            <div class="message-box message-practitioner">
                                <p>I'd recommend a few approaches that might help:</p>
                                <p class="mt-2">1. Try a gentle self-acupressure technique: massage the point between your thumb and index finger (called Hegu or LI-4) for 2-3 minutes on each hand.</p>
                                <p class="mt-2">2. Consider drinking chrysanthemum tea, which can help cool Liver heat and reduce stress.</p>
                                <p class="mt-2">3. Practice deep breathing for 5-10 minutes before studying and before bed.</p>
                            </div>
                        </div>
                        
                        <!-- User Message -->
                        <div class="flex items-start justify-end mb-4">
                            <div class="message-box message-user">
                                <p>Thank you, those sound like simple things I could try. How often should I drink the chrysanthemum tea? And are there any specific breathing techniques you recommend?</p>
                            </div>
                            <div class="w-8 h-8 rounded-full bg-gradient-to-r from-green-500 to-blue-500 flex items-center justify-center text-white font-medium text-sm ml-2">
                                U
                            </div>
                        </div>
                        
                        <!-- Practitioner Message -->
                        <div class="flex items-start mb-4">
                            <div class="w-8 h-8 rounded-full bg-gradient-to-r from-blue-500 to-blue-700 flex items-center justify-center text-white font-medium text-sm mr-2">
                                WX
                            </div>
                            <div class="message-box message-practitioner">
                                <p>You can drink 1-2 cups of chrysanthemum tea daily, preferably in the afternoon. It's mild enough for regular consumption.</p>
                                <p class="mt-2">For breathing, I recommend the "4-7-8" technique: inhale for 4 counts, hold for 7 counts, and exhale slowly for 8 counts. This activates your parasympathetic nervous system and helps calm the mind.</p>
                                <p class="mt-2">Also, would you like me to suggest a simple qigong exercise you can do between study sessions? It takes only 2-3 minutes but can help restore your energy balance.</p>
                            </div>
                        </div>
                        
                        <!-- User Message -->
                        <div class="flex items-start justify-end mb-4">
                            <div class="message-box message-user">
                                <p>Yes, that would be great! I'd love to learn a quick qigong exercise.</p>
                            </div>
                            <div class="w-8 h-8 rounded-full bg-gradient-to-r from-green-500 to-blue-500 flex items-center justify-center text-white font-medium text-sm ml-2">
                                U
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <!-- Chat Input -->
                <div class="glass rounded-b-2xl p-4">
                    <div class="flex items-center">
                        <button class="w-10 h-10 rounded-full flex items-center justify-center text-gray-600 hover:bg-gray-100 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13"></path>
                            </svg>
                        </button>
                        <input type="text" placeholder="Type your message..." class="chat-input flex-1 mx-3 px-4 py-2 rounded-full bg-white bg-opacity-80 focus:outline-none">
                        <button class="w-10 h-10 rounded-full flex items-center justify-center text-white bg-gradient-to-r from-green-500 to-blue-500 hover:opacity-90 transition-all">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Information Box -->
            <div class="max-w-4xl mx-auto mt-8">
                <div class="glass rounded-xl p-6">
                    <h3 class="text-xl font-semibold mb-3 text-gray-800">About Your Practitioner</h3>
                    <div class="flex items-start">
                        <div class="w-16 h-16 rounded-full bg-gradient-to-r from-blue-500 to-blue-700 flex items-center justify-center text-white font-medium text-xl mr-4">
                            WX
                        </div>
                        <div>
                            <h4 class="font-medium text-lg text-gray-800">Dr. Wang</h4>
                            <p class="text-gray-600">Licensed TCM Practitioner</p>
                            <p class="text-gray-500 text-sm mt-2">Specializing in stress management, sleep disorders, and digestive health. Dr. Wang has over 15 years of experience combining traditional Chinese medicine with modern wellness practices.</p>
                            <div class="mt-3">
                                <span class="inline-block bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded mr-2">Acupuncture</span>
                                <span class="inline-block bg-green-100 text-green-800 text-xs px-2 py-1 rounded mr-2">Herbalism</span>
                                <span class="inline-block bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded">Qigong</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Back Button -->
            <div class="max-w-4xl mx-auto mt-8 text-center">
                <button onclick="window.location.href='MPU4253(Dashboard).php'" class="px-6 py-3 text-gray-600 hover:text-green-600 transition-all flex items-center mx-auto">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Dashboard
                </button>
            </div>
        </div>
    </div>
</body>
</html>