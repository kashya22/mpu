<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practitioner Dashboard - TradiCare</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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
        
        .chat-bubble {
            position: relative;
            border-radius: 1rem;
            padding: 0.75rem 1rem;
            max-width: 80%;
            margin-bottom: 0.5rem;
        }
        
        .chat-bubble-patient {
            background-color: #e5f2ff;
            border-top-left-radius: 0;
            margin-right: auto;
        }
        
        .chat-bubble-practitioner {
            background-color: #dcf8c6;
            border-top-right-radius: 0;
            margin-left: auto;
        }
        
        .sidebar-item {
            transition: all 0.3s ease;
        }
        
        .sidebar-item:hover {
            background-color: rgba(0, 0, 0, 0.05);
            transform: translateX(5px);
        }
        
        .tab-active {
            border-bottom: 3px solid #4CAF50;
            color: #4CAF50;
        }
        
        .tab {
            transition: all 0.3s ease;
        }
        
        .tab:hover {
            background-color: rgba(0, 0, 0, 0.05);
        }
        
        .chat-height {
            height: calc(100vh - 240px);
        }
        
        .unread-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #FF5252;
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
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
                    <span class="text-gray-600 font-medium">Welcome, Dr. Chen</span>
                </div>
                
                <!-- Right-aligned navigation links -->
                <div class="flex items-center space-x-8">
                    <a href="MPU4253(Dashboard).php" class="text-gray-600 hover:text-green-600 transition-all hover:scale-110">Dashboard</a>
                    <a href="MPU4253(Patients).php" class="text-gray-600 hover:text-green-600 transition-all hover:scale-110">Patients</a>
                    <a href="MPU4253(Schedule).php" class="text-gray-600 hover:text-green-600 transition-all hover:scale-110">Schedule</a>
                    <a href="MPU4253(Profile).php" class="text-gray-600 hover:text-green-600 transition-all hover:scale-110">Profile</a>
                    <a href="MPU4253(Login).php" class="text-white bg-gradient-to-r from-green-500 to-blue-500 px-4 py-2 rounded-full hover:opacity-90 transition-all hover:scale-110">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mx-auto px-4 pt-24 pb-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Practitioner Dashboard</h1>
            <div class="flex space-x-4">
                <button class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-all">
                    <i class="fas fa-plus mr-2"></i> New Patient
                </button>
                <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-all">
                    <i class="fas fa-calendar-plus mr-2"></i> New Appointment
                </button>
            </div>
        </div>
        
        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Left Sidebar - Patient List -->
            <div class="glass rounded-xl p-6 h-full">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">Patient Messages</h2>
                    <div class="relative">
                        <input type="text" placeholder="Search patients..." class="pl-8 pr-4 py-2 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 text-sm w-full">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                </div>
                
                <div class="overflow-y-auto h-96 pr-2">
                    <!-- Patient List Item - Active -->
                    <div class="sidebar-item flex items-center p-3 rounded-lg bg-green-100 mb-2 cursor-pointer relative">
                        <div class="w-12 h-12 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold mr-3">
                            LM
                        </div>
                        <div class="flex-grow">
                            <h3 class="font-semibold text-gray-800">Li Ming</h3>
                            <p class="text-gray-600 text-sm truncate">Thank you for the herbal tea recipe. I'll try it tonight.</p>
                        </div>
                        <div class="text-right text-xs text-gray-500">
                            <p>12:45 PM</p>
                        </div>
                    </div>
                    
                    <!-- Patient List Item -->
                    <div class="sidebar-item flex items-center p-3 rounded-lg hover:bg-gray-100 mb-2 cursor-pointer relative">
                        <div class="w-12 h-12 rounded-full bg-purple-500 flex items-center justify-center text-white font-bold mr-3">
                            SW
                        </div>
                        <div class="flex-grow">
                            <h3 class="font-semibold text-gray-800">Sarah Wong</h3>
                            <p class="text-gray-600 text-sm truncate">I haven't been able to sleep well even after taking the herbs...</p>
                        </div>
                        <div class="text-right text-xs text-gray-500">
                            <p>Yesterday</p>
                            <span class="unread-badge">2</span>
                        </div>
                    </div>
                    
                    <!-- Patient List Item -->
                    <div class="sidebar-item flex items-center p-3 rounded-lg hover:bg-gray-100 mb-2 cursor-pointer">
                        <div class="w-12 h-12 rounded-full bg-green-500 flex items-center justify-center text-white font-bold mr-3">
                            JC
                        </div>
                        <div class="flex-grow">
                            <h3 class="font-semibold text-gray-800">Jason Chen</h3>
                            <p class="text-gray-600 text-sm truncate">The acupuncture session really helped with my stress!</p>
                        </div>
                        <div class="text-right text-xs text-gray-500">
                            <p>Mon</p>
                        </div>
                    </div>
                    
                    <!-- Patient List Item -->
                    <div class="sidebar-item flex items-center p-3 rounded-lg hover:bg-gray-100 mb-2 cursor-pointer">
                        <div class="w-12 h-12 rounded-full bg-red-500 flex items-center justify-center text-white font-bold mr-3">
                            RL
                        </div>
                        <div class="flex-grow">
                            <h3 class="font-semibold text-gray-800">Rachel Lee</h3>
                            <p class="text-gray-600 text-sm truncate">My sleep has improved, but I still wake up at 3 AM...</p>
                        </div>
                        <div class="text-right text-xs text-gray-500">
                            <p>Mar 15</p>
                        </div>
                    </div>
                    
                    <!-- Patient List Item -->
                    <div class="sidebar-item flex items-center p-3 rounded-lg hover:bg-gray-100 mb-2 cursor-pointer">
                        <div class="w-12 h-12 rounded-full bg-yellow-500 flex items-center justify-center text-white font-bold mr-3">
                            KT
                        </div>
                        <div class="flex-grow">
                            <h3 class="font-semibold text-gray-800">Kevin Tan</h3>
                            <p class="text-gray-600 text-sm truncate">I missed my last appointment due to an exam...</p>
                        </div>
                        <div class="text-right text-xs text-gray-500">
                            <p>Mar 12</p>
                        </div>
                    </div>
                    
                    <!-- Patient List Item -->
                    <div class="sidebar-item flex items-center p-3 rounded-lg hover:bg-gray-100 mb-2 cursor-pointer">
                        <div class="w-12 h-12 rounded-full bg-indigo-500 flex items-center justify-center text-white font-bold mr-3">
                            AW
                        </div>
                        <div class="flex-grow">
                            <h3 class="font-semibold text-gray-800">Amanda Wang</h3>
                            <p class="text-gray-600 text-sm truncate">The ear acupressure is working well for my insomnia.</p>
                        </div>
                        <div class="text-right text-xs text-gray-500">
                            <p>Mar 10</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Middle Section - Chat and Recommendations -->
            <div class="glass rounded-xl p-6 h-full">
                <!-- Tabs -->
                <div class="flex border-b mb-6">
                    <div class="tab tab-active px-4 py-2 font-medium cursor-pointer">Messaging</div>
                    <div class="tab px-4 py-2 font-medium text-gray-600 cursor-pointer">Recommendations</div>
                </div>
                
                <!-- Messaging Section -->
                <div id="messaging-tab" class="block">
                    <div class="flex justify-between items-center mb-4">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold mr-3">
                                LM
                            </div>
                            <div>
                                <h3 class="font-semibold text-gray-800">Li Ming</h3>
                                <p class="text-xs text-gray-500">Last active: 10 minutes ago</p>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button class="p-2 rounded-full hover:bg-gray-200 transition-all">
                                <i class="fas fa-phone text-green-500"></i>
                            </button>
                            <button class="p-2 rounded-full hover:bg-gray-200 transition-all">
                                <i class="fas fa-video text-blue-500"></i>
                            </button>
                            <button class="p-2 rounded-full hover:bg-gray-200 transition-all">
                                <i class="fas fa-info-circle text-gray-500"></i>
                            </button>
                        </div>
                    </div>
                    
                    <!-- Chat Messages -->
                    <div class="overflow-y-auto chat-height mb-4 pr-2">
                        <div class="text-center text-xs text-gray-500 mb-4">March 20, 2025</div>
                        
                        <!-- Message from Patient -->
                        <div class="chat-bubble chat-bubble-patient">
                            <p>Good morning Dr. Chen. I've been having trouble sleeping again. I've tried the meditation techniques you recommended, but I'm still waking up multiple times during the night.</p>
                            <div class="text-right text-xs text-gray-500 mt-1">9:23 AM</div>
                        </div>
                        
                        <!-- Message from Practitioner -->
                        <div class="chat-bubble chat-bubble-practitioner">
                            <p>Good morning Li Ming. I'm sorry to hear you're still having difficulties. Let's adjust your treatment plan. How has your exam preparation been going? Are you experiencing increased stress?</p>
                            <div class="text-right text-xs text-gray-500 mt-1">9:45 AM</div>
                        </div>
                        
                        <!-- Message from Patient -->
                        <div class="chat-bubble chat-bubble-patient">
                            <p>Yes, I have three exams next week and I'm finding it hard to stop thinking about them when I try to sleep. My mind keeps racing with all the material I need to review.</p>
                            <div class="text-right text-xs text-gray-500 mt-1">9:52 AM</div>
                        </div>
                        
                        <!-- Message from Practitioner -->
                        <div class="chat-bubble chat-bubble-practitioner">
                            <p>I understand. Exam stress can definitely affect your sleep quality. I'd like to recommend a different herbal tea blend that focuses on calming your mind and reducing anxiety. It contains passionflower, valerian root, and a small amount of zizyphus seeds which are particularly effective for sleep difficulties caused by stress.</p>
                            <div class="text-right text-xs text-gray-500 mt-1">10:05 AM</div>
                        </div>
                        
                        <!-- Message from Practitioner -->
                        <div class="chat-bubble chat-bubble-practitioner">
                            <p>Also, I'd like you to try a specific acupressure point before bed. It's called the "Anmian" point, located behind your ear. I'll send you a diagram showing how to apply gentle pressure for 2-3 minutes on each side before bedtime.</p>
                            <div class="text-right text-xs text-gray-500 mt-1">10:07 AM</div>
                        </div>
                        
                        <!-- Message from Patient -->
                        <div class="chat-bubble chat-bubble-patient">
                            <p>Thank you, Dr. Chen. I'll try both the tea and the acupressure tonight. Is there anything else I can do to help calm my mind before bed?</p>
                            <div class="text-right text-xs text-gray-500 mt-1">10:15 AM</div>
                        </div>
                        
                        <!-- Message from Practitioner -->
                        <div class="chat-bubble chat-bubble-practitioner">
                            <p>Here's a recipe for the herbal tea blend I mentioned. Steep 1 teaspoon of the mix in hot water for 10 minutes before drinking. Have it 30-45 minutes before bedtime.</p>
                            <div class="text-right text-xs text-gray-500 mt-1">12:40 PM</div>
                        </div>
                        
                        <!-- Message from Patient -->
                        <div class="chat-bubble chat-bubble-patient">
                            <p>Thank you for the herbal tea recipe. I'll try it tonight.</p>
                            <div class="text-right text-xs text-gray-500 mt-1">12:45 PM</div>
                        </div>
                    </div>
                    
                    <!-- Message Input -->
                    <div class="flex items-center">
                        <div class="flex-grow relative">
                            <input type="text" placeholder="Type your message..." class="w-full py-3 px-4 rounded-full border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500">
                            <button class="absolute right-2 top-2 p-2 text-gray-400 hover:text-gray-600">
                                <i class="fas fa-paperclip"></i>
                            </button>
                        </div>
                        <button class="ml-2 w-12 h-12 rounded-full bg-green-500 text-white flex items-center justify-center">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
                
                <!-- Recommendations Section (Hidden by default) -->
                <div id="recommendations-tab" class="hidden">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-semibold text-gray-800">Li Ming's Recommendations</h3>
                        <button class="px-3 py-1 bg-green-500 text-white rounded-lg hover:bg-green-600 transition-all text-sm">
                            <i class="fas fa-plus mr-1"></i> Add New
                        </button>
                    </div>
                    
                    <div class="overflow-y-auto h-96 pr-2">
                        <!-- Recommendation Item -->
                        <div class="bg-white p-4 rounded-lg mb-4 border-l-4 border-green-500">
                            <div class="flex justify-between items-start">
                                <h4 class="font-medium text-gray-800">Herbal Tea Blend for Stress-Induced Insomnia</h4>
                                <div class="text-xs text-gray-500">Added: Mar 20, 2025</div>
                            </div>
                            <p class="text-gray-600 mt-2 text-sm">
                                Blend: Passionflower (2 parts), Valerian Root (2 parts), Zizyphus Seeds (1 part), Chamomile (1 part)
                            </p>
                            <p class="text-gray-600 mt-2 text-sm">
                                Instructions: Steep 1 teaspoon in hot water for 10 minutes. Drink 30-45 minutes before bedtime.
                            </p>
                            <div class="flex justify-between items-center mt-3">
                                <span class="text-xs text-gray-500">Duration: 14 days</span>
                                <div class="flex space-x-2">
                                    <button class="p-1 text-blue-500 hover:text-blue-700">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="p-1 text-red-500 hover:text-red-700">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Recommendation Item -->
                        <div class="bg-white p-4 rounded-lg mb-4 border-l-4 border-blue-500">
                            <div class="flex justify-between items-start">
                                <h4 class="font-medium text-gray-800">Anmian Point Acupressure Technique</h4>
                                <div class="text-xs text-gray-500">Added: Mar 20, 2025</div>
                            </div>
                            <p class="text-gray-600 mt-2 text-sm">
                                Locate the "Anmian" point behind each ear. Apply gentle circular pressure for 2-3 minutes on each side before bedtime.
                            </p>
                            <div class="flex justify-between items-center mt-3">
                                <span class="text-xs text-gray-500">Frequency: Daily</span>
                                <div class="flex space-x-2">
                                    <button class="p-1 text-blue-500 hover:text-blue-700">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="p-1 text-red-500 hover:text-red-700">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Recommendation Item -->
                        <div class="bg-white p-4 rounded-lg mb-4 border-l-4 border-purple-500">
                            <div class="flex justify-between items-start">
                                <h4 class="font-medium text-gray-800">Evening Relaxation Routine</h4>
                                <div class="text-xs text-gray-500">Added: Mar 15, 2025</div>
                            </div>
                            <p class="text-gray-600 mt-2 text-sm">
                                1. Disconnect from electronic devices 1 hour before bedtime<br>
                                2. Take a warm bath with lavender essential oil<br>
                                3. Practice 10 minutes of diaphragmatic breathing<br>
                                4. Write down worries and to-dos for tomorrow to clear your mind
                            </p>
                            <div class="flex justify-between items-center mt-3">
                                <span class="text-xs bg-yellow-100 text-yellow-800 px-2 py-1 rounded-full text-xs">In Progress</span>
                                <div class="flex space-x-2">
                                    <button class="p-1 text-blue-500 hover:text-blue-700">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="p-1 text-red-500 hover:text-red-700">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Recommendation Item -->
                        <div class="bg-white p-4 rounded-lg mb-4 border-l-4 border-gray-500">
                            <div class="flex justify-between items-start">
                                <h4 class="font-medium text-gray-800">Dietary Recommendations</h4>
                                <div class="text-xs text-gray-500">Added: Mar 10, 2025</div>
                            </div>
                            <p class="text-gray-600 mt-2 text-sm">
                                Avoid caffeine after 2 PM. Reduce sugar intake. Increase foods rich in magnesium (spinach, almonds, black beans). Incorporate tart cherries which contain natural melatonin.
                            </p>
                            <div class="flex justify-between items-center mt-3">
                                <span class="text-xs bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs">Completed</span>
                                <div class="flex space-x-2">
                                    <button class="p-1 text-blue-500 hover:text-blue-700">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="p-1 text-red-500 hover:text-red-700">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Sidebar - Patient Information -->
            <div class="glass rounded-xl p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">Patient Information</h2>
                    <button class="p-2 rounded-full hover:bg-gray-200 transition-all">
                        <i class="fas fa-edit text-blue-500"></i>
                    </button>
                </div>
                
                <div class="flex flex-col items-center mb-6">
                    <div class="w-24 h-24 rounded-full bg-blue-500 flex items-center justify-center text-white text-2xl font-bold mb-3">
                        LM
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800">Li Ming</h3>
                    <p class="text-gray-600">University Student</p>
                </div>
                
                <!-- Basic Information -->
                <div class="mb-6">
                    <h4 class="font-medium text-gray-800 mb-3 border-b pb-2">Basic Information</h4>
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <p class="text-gray-500 text-sm">Age</p>
                            <p class="text-gray-800">21</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Gender</p>
                            <p class="text-gray-800">Male</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">University</p>
                            <p class="text-gray-800">State University</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Major</p>
                            <p class="text-gray-800">Computer Science</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Phone</p>
                            <p class="text-gray-800">+1 (555) 123-4567</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Email</p>
                            <p class="text-gray-800">liming@email.com</p>
                        </div>
                    </div>
                </div>
                
                <!-- Medical Information -->
                <div class="mb-6">
                    <h4 class="font-medium text-gray-800 mb-3 border-b pb-2">Insomnia Profile</h4>
                    <div class="space-y-3">
                        <div>
                            <p class="text-gray-500 text-sm">Diagnosis</p>
                            <p class="text-gray-800">Stress-induced insomnia, Liver Qi stagnation</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Duration</p>
                            <p class="text-gray-800">3 months</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Symptoms</p>
                            <p class="text-gray-800">Difficulty falling asleep, waking during the night, racing thoughts, irritability</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Pulse</p>
                            <p class="text-gray-800">Wiry, rapid</p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Tongue</p>
                            <p class="text-gray-800">Red with thin white coating, slightly purple edges</p>
                        </div>
                    </div>
                </div>
                
                <!-- Treatment History -->
                <div>
                    <h4 class="font-medium text-gray-800 mb-3 border-b pb-2">Treatment History</h4>
                    <div class="space-y-4">
                        <div class="bg-white p-3 rounded-lg shadow-sm">
                            <div class="flex justify-between items-start">
                                <p class="font-medium text-gray-800">Acupuncture Session</p>
                                <p class="text-xs text-gray-500">Mar 16, 2025</p>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">Points: Shen Men, Anmian, HT7, PC6, LI4, LV3</p>
                            <p class="text-sm text-gray-600">Notes: Patient reported feeling more relaxed after the session but still had difficulty staying asleep.</p>
                        </div>
                        
                        <div class="bg-white p-3 rounded-lg shadow-sm">
                            <div class="flex justify-between items-start">
                                <p class="font-medium text-gray-800">Herbal Prescription</p>
                                <p class="text-xs text-gray-500">Mar 10, 2025</p>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">Formula: Modified Suan Zao Ren Tang with added Fu Ling and He Huan Pi</p>
                            <p class="text-sm text-gray-600">Notes: Patient reported improved sleep onset but still experiences early morning waking. Adjusted formula to strengthen Spleen and calm Spirit.</p>
                        </div>
                        
                        <div class="bg-white p-3 rounded-lg shadow-sm">
                            <div class="flex justify-between items-start">
                                <p class="font-medium text-gray-800">Initial Consultation</p>
                                <p class="text-xs text-gray-500">Feb 25, 2025</p>
                            </div>
                            <p class="text-sm text-gray-600 mt-1">Assessment: Sleep difficulties due to academic stress. Irregular sleep schedule. Excessive screen time before bed.</p>
                            <p class="text-sm text-gray-600">Plan: Weekly acupuncture, custom herbal formula, sleep hygiene education.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Upcoming Appointments -->
                <div class="mt-6">
                    <h4 class="font-medium text-gray-800 mb-3 border-b pb-2">Upcoming Appointments</h4>
                    <div class="bg-white p-3 rounded-lg shadow-sm mb-3">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="font-medium text-gray-800">Acupuncture Session</p>
                                <p class="text-sm text-gray-600">Focus: Sleep maintenance & stress reduction</p>
                            </div>
                            <div class="text-right">
                                <p class="text-xs text-gray-500">Mar 23, 2025</p>
                                <p class="text-xs text-gray-500">2:30 PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-3 rounded-lg shadow-sm">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="font-medium text-gray-800">Follow-up Consultation</p>
                                <p class="text-sm text-gray-600">Review herbal prescription efficacy</p>
                            </div>
                            <div class="text-right">
                                <p class="text-xs text-gray-500">Mar 30, 2025</p>
                                <p class="text-xs text-gray-500">4:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bottom Section - Statistics and Reminders -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-6">
            <!-- Patient Statistics -->
            <div class="glass rounded-xl p-6 col-span-2">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Patient Statistics</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <p class="text-sm text-gray-500">Total Active Patients</p>
                        <div class="flex items-end justify-between">
                            <p class="text-3xl font-bold text-gray-800">42</p>
                            <p class="text-green-500 text-sm"><i class="fas fa-arrow-up mr-1"></i>12%</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <p class="text-sm text-gray-500">Insomnia Cases</p>
                        <div class="flex items-end justify-between">
                            <p class="text-3xl font-bold text-gray-800">28</p>
                            <p class="text-gray-500 text-sm">67% of cases</p>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-sm">
                        <p class="text-sm text-gray-500">Improved Sleep (30+ days)</p>
                        <div class="flex items-end justify-between">
                            <p class="text-3xl font-bold text-gray-800">19</p>
                            <p class="text-green-500 text-sm">68% success rate</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Reminders and Tasks -->
            <div class="glass rounded-xl p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-800">Today's Tasks</h2>
                    <button class="p-2 rounded-full hover:bg-gray-200 transition-all">
                        <i class="fas fa-plus text-green-500"></i>
                    </button>
                </div>
                
                <div class="space-y-3">
                    <div class="flex items-center bg-white p-3 rounded-lg shadow-sm">
                        <input type="checkbox" class="w-5 h-5 text-green-500 rounded mr-3">
                        <div class="flex-grow">
                            <p class="font-medium text-gray-800">Follow up with Sarah Wong</p>
                            <p class="text-xs text-gray-500">Regarding persistent insomnia symptoms</p>
                        </div>
                        <p class="text-xs text-gray-500 whitespace-nowrap">11:00 AM</p>
                    </div>
                    
                    <div class="flex items-center bg-white p-3 rounded-lg shadow-sm">
                        <input type="checkbox" class="w-5 h-5 text-green-500 rounded mr-3">
                        <div class="flex-grow">
                            <p class="font-medium text-gray-800">Prepare herbal formulas</p>
                            <p class="text-xs text-gray-500">For 5 patients with upcoming pickups</p>
                        </div>
                        <p class="text-xs text-gray-500 whitespace-nowrap">2:00 PM</p>
                    </div>
                    
                    <div class="flex items-center bg-white p-3 rounded-lg shadow-sm">
                        <input type="checkbox" class="w-5 h-5 text-green-500 rounded mr-3" checked>
                        <div class="flex-grow">
                            <p class="font-medium text-gray-800 line-through">Review new research</p>
                            <p class="text-xs text-gray-500 line-through">On acupuncture for exam anxiety</p>
                        </div>
                        <p class="text-xs text-gray-500 whitespace-nowrap">9:00 AM</p>
                    </div>
                    
                    <div class="flex items-center bg-white p-3 rounded-lg shadow-sm">
                        <input type="checkbox" class="w-5 h-5 text-green-500 rounded mr-3">
                        <div class="flex-grow">
                            <p class="font-medium text-gray-800">Update treatment protocols</p>
                            <p class="text-xs text-gray-500">For final exam season insomnia</p>
                        </div>
                        <p class="text-xs text-gray-500 whitespace-nowrap">4:30 PM</p>
                    </div>
                </div>
                
                <h3 class="font-medium text-gray-800 mt-6 mb-3">Upcoming Events</h3>
                <div class="space-y-3">
                    <div class="bg-white p-3 rounded-lg shadow-sm">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-lg bg-blue-100 text-blue-500 flex items-center justify-center mr-3">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="flex-grow">
                                <p class="font-medium text-gray-800">Student Wellness Workshop</p>
                                <p class="text-xs text-gray-500">Mar 25, 3:30 PM - Student Union</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white p-3 rounded-lg shadow-sm">
                        <div class="flex items-center">
                            <div class="w-10 h-10 rounded-lg bg-green-100 text-green-500 flex items-center justify-center mr-3">
                                <i class="fas fa-book-medical"></i>
                            </div>
                            <div class="flex-grow">
                                <p class="font-medium text-gray-800">TCM Sleep Disorders Conference</p>
                                <p class="text-xs text-gray-500">Apr 5-7 - Virtual Attendance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="glass text-center py-4 mt-6">
        <p class="text-gray-600">© 2025 TradiCare - Traditional Medicine for Modern Students</p>
    </footer>
    
    <!-- JavaScript for Tab Switching -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('.tab');
            const messagingTab = document.getElementById('messaging-tab');
            const recommendationsTab = document.getElementById('recommendations-tab');
            
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    // Remove active class from all tabs
                    tabs.forEach(t => t.classList.remove('tab-active'));
                    
                    // Add active class to clicked tab
                    this.classList.add('tab-active');
                    
                    // Show/hide content based on selected tab
                    if (this.textContent.trim() === 'Messaging') {
                        messagingTab.classList.remove('hidden');
                        messagingTab.classList.add('block');
                        recommendationsTab.classList.remove('block');
                        recommendationsTab.classList.add('hidden');
                    } else {
                        recommendationsTab.classList.remove('hidden');
                        recommendationsTab.classList.add('block');
                        messagingTab.classList.remove('block');
                        messagingTab.classList.add('hidden');
                    }
                });
            });
            
            // Patient list item click handler
            const patientItems = document.querySelectorAll('.sidebar-item');
            patientItems.forEach(item => {
                item.addEventListener('click', function() {
                    // Remove active class from all items
                    patientItems.forEach(i => i.classList.remove('bg-green-100'));
                    
                    // Add active class to clicked item
                    this.classList.add('bg-green-100');
                });
            });
        });
        
        // Function to add a new recommendation
        function addRecommendation() {
            const recommendationsContainer = document.querySelector('#recommendations-tab .overflow-y-auto');
            const today = new Date().toLocaleDateString('en-US', {month: 'short', day: 'numeric', year: 'numeric'});
            
            const newRecommendation = document.createElement('div');
            newRecommendation.className = 'bg-white p-4 rounded-lg mb-4 border-l-4 border-green-500';
            newRecommendation.innerHTML = `
                <div class="flex justify-between items-start">
                    <h4 class="font-medium text-gray-800">New Recommendation</h4>
                    <div class="text-xs text-gray-500">Added: ${today}</div>
                </div>
                <p class="text-gray-600 mt-2 text-sm">
                    Enter recommendation details here...
                </p>
                <div class="flex justify-between items-center mt-3">
                    <span class="text-xs text-gray-500">Duration: 7 days</span>
                    <div class="flex space-x-2">
                        <button class="p-1 text-blue-500 hover:text-blue-700">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="p-1 text-red-500 hover:text-red-700">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            `;
            
            recommendationsContainer.prepend(newRecommendation);
        }
        
        // Function to send a new message
        function sendMessage() {
            const messageInput = document.querySelector('input[placeholder="Type your message..."]');
            const chatContainer = document.querySelector('.chat-height');
            const message = messageInput.value.trim();
            
            if (message) {
                const now = new Date();
                const timeString = now.toLocaleTimeString('en-US', {hour: 'numeric', minute: '2-digit'});
                
                const newMessage = document.createElement('div');
                newMessage.className = 'chat-bubble chat-bubble-practitioner';
                newMessage.innerHTML = `
                    <p>${message}</p>
                    <div class="text-right text-xs text-gray-500 mt-1">${timeString}</div>
                `;
                
                chatContainer.appendChild(newMessage);
                chatContainer.scrollTop = chatContainer.scrollHeight;
                messageInput.value = '';
            }
        }
        
        // Add event listener for send button
        document.addEventListener('DOMContentLoaded', function() {
            const sendButton = document.querySelector('button.ml-2.w-12.h-12');
            if (sendButton) {
                sendButton.addEventListener('click', sendMessage);
            }
            
            // Add event listener for Enter key in message input
            const messageInput = document.querySelector('input[placeholder="Type your message..."]');
            if (messageInput) {
                messageInput.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter') {
                        sendMessage();
                    }
                });
            }
            
            // Add event listener for add recommendation button
            const addRecommendationButton = document.querySelector('button.px-3.py-1.bg-green-500');
            if (addRecommendationButton) {
                addRecommendationButton.addEventListener('click', addRecommendation);
            }
        });
    </script>
</body>
</html>