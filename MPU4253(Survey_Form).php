
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCM Sleep Assessment Survey - TradiCare</title>
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

        select {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236B7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
            background-position: right 0.5rem center;
            background-repeat: no-repeat;
            background-size: 1.5em 1.5em;
            padding-right: 2.5rem;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
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
    <div class="relative pt-32 pb-10 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-6xl font-bold mb-8 bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent slide-in">
                    Sleep Assessment
                </h1>
                <p class="text-xl text-gray-600 mb-12 slide-in" style="animation-delay: 0.2s">
                    Discover your sleep patterns through traditional Chinese medicine wisdom
                </p>
            </div>
        </div>
        
        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-green-300 to-blue-300 opacity-20 rounded-full blur-3xl morph"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-br from-purple-300 to-blue-300 opacity-20 rounded-full blur-3xl morph"></div>
    </div>

    <!-- Survey Form Section -->
    <section class="py-10 px-4">
        <div class="container mx-auto max-w-3xl">
            <form action="MPU4253(Survey_Result).php" method="POST" class="glass p-8 rounded-2xl space-y-6">
                <div class="question">
                    <label for="q1" class="block text-gray-700 font-medium mb-2">1. How many hours of sleep do you get on average every day?</label>
                    <select name="q1" id="q1" class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all" required>
                        <option value="">Please select</option>
                        <option value="within_8">Within 8 hours</option>
                        <option value="above_8">8 hours and above</option>
                    </select>
                </div>

                <div class="question">
                    <label for="q2" class="block text-gray-700 font-medium mb-2">2. What time do you usually go to bed?</label>
                    <select name="q2" id="q2" class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all" required>
                        <option value="">Please select</option>
                        <option value="before_10">10 o'clock and before</option>
                        <option value="after_10">After 10 o'clock</option>
                    </select>
                </div>

                <div class="question">
                    <label for="q3" class="block text-gray-700 font-medium mb-2">3. Do you fall asleep easily?</label>
                    <select name="q3" id="q3" class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all" required>
                        <option value="">Please select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="question">
                    <label for="q4" class="block text-gray-700 font-medium mb-2">4. How many times do you wake up at night?</label>
                    <select name="q4" id="q4" class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all" required>
                        <option value="">Please select</option>
                        <option value="once_or_less">Once or less</option>
                        <option value="twice_or_more">Two or more times</option>
                    </select>
                </div>

                <div class="question">
                    <label for="q5" class="block text-gray-700 font-medium mb-2">5. Do you feel tired or listless during the day?</label>
                    <select name="q5" id="q5" class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all" required>
                        <option value="">Please select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="question">
                    <label for="q6" class="block text-gray-700 font-medium mb-2">6. Do you snore or have apnoea?</label>
                    <select name="q6" id="q6" class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all" required>
                        <option value="">Please select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="question">
                    <label for="q7" class="block text-gray-700 font-medium mb-2">7. Do you have the habit of taking a nap?</label>
                    <select name="q7" id="q7" class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all" required>
                        <option value="">Please select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="question">
                    <label for="q8" class="block text-gray-700 font-medium mb-2">8. Do you use mobile phones or other electronic devices in bed?</label>
                    <select name="q8" id="q8" class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all" required>
                        <option value="">Please select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="question">
                    <label for="q9" class="block text-gray-700 font-medium mb-2">9. Are you affected by stress or anxiety?</label>
                    <select name="q9" id="q9" class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all" required>
                        <option value="">Please select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <div class="question">
                    <label for="q10" class="block text-gray-700 font-medium mb-2">10. Do you have a regular bedtime routine?</label>
                    <select name="q10" id="q10" class="w-full px-4 py-3 rounded-lg bg-white border border-gray-300 focus:border-green-500 focus:ring-2 focus:ring-green-200 transition-all" required>
                        <option value="">Please select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>

                <button type="submit" class="w-full py-4 px-6 text-white bg-gradient-to-r from-green-500 to-blue-500 rounded-lg hover:opacity-90 transition-all duration-300 flex items-center justify-center space-x-2">
                    <span>Submit Assessment</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </button>
            </form>
        </div>
    </section>
</body>
</html>