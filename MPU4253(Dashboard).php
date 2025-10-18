<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradiCare - Sleep Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
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

        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .dashboard-card {
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
        }

        .chart-container {
            height: 200px;
            position: relative;
        }

        .sleeping-hour-indicator {
            position: relative;
            height: 8px;
            background: #e2e8f0;
            border-radius: 4px;
            overflow: hidden;
        }

        .sleeping-hour-bar {
            position: absolute;
            height: 100%;
            left: 0;
            border-radius: 4px;
        }

        .very-low { width: 20%; background: #EF4444; }
        .low { width: 40%; background: #F59E0B; }
        .medium { width: 60%; background: #10B981; }
        .high { width: 80%; background: #3B82F6; }
        .very-high { width: 100%; background: #6366F1; }
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

    <div class="container mx-auto px-4 pt-32 pb-12">
        <!-- Dashboard Header -->
        <header class="mb-12">
            <h1 class="text-4xl font-bold mb-4 bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent">
                Sleep Health Dashboard
            </h1>
            <p class="text-gray-600">
                Monitor your sleep patterns and get personalized insights to improve your rest quality.
            </p>
        </header>

        <!-- Dashboard Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <!-- Last Night's Sleep -->
            <div class="dashboard-card p-6 rounded-xl">
                <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                    </svg>
                    Last Night's Sleep
                </h3>
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <span class="text-4xl font-bold text-blue-600">5.2</span>
                        <span class="text-gray-500 ml-1">hours</span>
                    </div>
                    <div class="text-right">
                        <div class="text-sm text-gray-500">Bed Time: <span class="font-semibold text-gray-700">11:45 PM</span></div>
                        <div class="text-sm text-gray-500">Wake Time: <span class="font-semibold text-gray-700">5:05 AM</span></div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="flex justify-between text-sm text-gray-500 mb-1">
                        <span>Poor</span>
                        <span>Excellent</span>
                    </div>
                    <div class="sleeping-hour-indicator">
                        <div class="sleeping-hour-bar low"></div>
                    </div>
                </div>
                <div class="text-sm text-gray-600">
                    <div class="flex items-start mb-1">
                        <svg class="w-4 h-4 text-amber-500 mt-0.5 mr-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <span>Woke up <strong>3 times</strong> during the night</span>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-4 h-4 text-amber-500 mt-0.5 mr-1 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        <span>Took <strong>45 minutes</strong> to fall asleep</span>
                    </div>
                </div>
            </div>

            <!-- Weekly Average -->
            <div class="dashboard-card p-6 rounded-xl">
                <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                    Weekly Average
                </h3>
                <div class="chart-container mb-4">
                    <canvas id="weeklyChart"></canvas>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-green-50 p-3 rounded-lg">
                        <div class="text-sm text-gray-500">Avg. Hours</div>
                        <div class="text-2xl font-bold text-green-600">5.7</div>
                    </div>
                    <div class="bg-blue-50 p-3 rounded-lg">
                        <div class="text-sm text-gray-500">Bedtime Consistency</div>
                        <div class="text-2xl font-bold text-blue-600">58%</div>
                    </div>
                </div>
            </div>

            <!-- Sleep Quality Score -->
            <div class="dashboard-card p-6 rounded-xl">
                <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    Sleep Quality Score
                </h3>
                <div class="flex justify-center mb-6">
                    <div class="relative w-40 h-40">
                        <svg class="w-full h-full" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" r="45" fill="none" stroke="#e2e8f0" stroke-width="8"/>
                            <circle cx="50" cy="50" r="45" fill="none" stroke="#f59e0b" stroke-width="8" stroke-dasharray="282.7" stroke-dashoffset="141.4"/>
                            <text x="50" y="50" text-anchor="middle" dominant-baseline="middle" font-size="24" font-weight="bold" fill="#4b5563">51%</text>
                        </svg>
                    </div>
                </div>
                <div class="space-y-3">
                    <div>
                        <div class="flex justify-between text-sm text-gray-600 mb-1">
                            <span>Difficulty Falling Asleep</span>
                            <span class="font-medium text-amber-500">High</span>
                        </div>
                        <div class="sleeping-hour-indicator">
                            <div class="sleeping-hour-bar high"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm text-gray-600 mb-1">
                            <span>Night Waking Frequency</span>
                            <span class="font-medium text-amber-500">High</span>
                        </div>
                        <div class="sleeping-hour-indicator">
                            <div class="sleeping-hour-bar high"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between text-sm text-gray-600 mb-1">
                            <span>Daytime Fatigue</span>
                            <span class="font-medium text-amber-500">High</span>
                        </div>
                        <div class="sleeping-hour-indicator">
                            <div class="sleeping-hour-bar high"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sleep Log -->
        <div class="dashboard-card p-6 rounded-xl mb-12">
            <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                <svg class="w-5 h-5 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                Recent Sleep Log
            </h3>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-lg">
                    <thead>
                        <tr class="bg-gray-100 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Date</th>
                            <th class="py-3 px-6 text-center">Hours</th>
                            <th class="py-3 px-6 text-center">Bedtime</th>
                            <th class="py-3 px-6 text-center">Wake Time</th>
                            <th class="py-3 px-6 text-center">Quality</th>
                            <th class="py-3 px-6 text-center">Notes</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm">
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-6 text-left">Mar 19, 2025</td>
                            <td class="py-3 px-6 text-center">5.2</td>
                            <td class="py-3 px-6 text-center">11:45 PM</td>
                            <td class="py-3 px-6 text-center">5:05 AM</td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-orange-100 text-orange-800 py-1 px-3 rounded-full text-xs">Poor</span>
                            </td>
                            <td class="py-3 px-6 text-center">Woke up multiple times</td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-6 text-left">Mar 18, 2025</td>
                            <td class="py-3 px-6 text-center">6.1</td>
                            <td class="py-3 px-6 text-center">10:50 PM</td>
                            <td class="py-3 px-6 text-center">5:00 AM</td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-yellow-100 text-yellow-800 py-1 px-3 rounded-full text-xs">Fair</span>
                            </td>
                            <td class="py-3 px-6 text-center">Restless sleep</td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-6 text-left">Mar 17, 2025</td>
                            <td class="py-3 px-6 text-center">5.8</td>
                            <td class="py-3 px-6 text-center">11:20 PM</td>
                            <td class="py-3 px-6 text-center">5:10 AM</td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-orange-100 text-orange-800 py-1 px-3 rounded-full text-xs">Poor</span>
                            </td>
                            <td class="py-3 px-6 text-center">Difficulty falling asleep</td>
                        </tr>
                        <tr class="border-b border-gray-200 hover:bg-gray-50">
                            <td class="py-3 px-6 text-left">Mar 16, 2025</td>
                            <td class="py-3 px-6 text-center">4.5</td>
                            <td class="py-3 px-6 text-center">12:30 AM</td>
                            <td class="py-3 px-6 text-center">5:00 AM</td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-red-100 text-red-800 py-1 px-3 rounded-full text-xs">Very Poor</span>
                            </td>
                            <td class="py-3 px-6 text-center">Insomnia episode</td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="py-3 px-6 text-left">Mar 15, 2025</td>
                            <td class="py-3 px-6 text-center">6.5</td>
                            <td class="py-3 px-6 text-center">11:00 PM</td>
                            <td class="py-3 px-6 text-center">5:30 AM</td>
                            <td class="py-3 px-6 text-center">
                                <span class="bg-green-100 text-green-800 py-1 px-3 rounded-full text-xs">Moderate</span>
                            </td>
                            <td class="py-3 px-6 text-center">Slightly better night</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tracking Section -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            <!-- Log New Entry -->
            <div class="dashboard-card p-6 rounded-xl col-span-1">
                <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                    </svg>
                    Log New Entry
                </h3>
                <form class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                        <input type="date" class="w-full p-2 border border-gray-300 rounded-md" value="2025-03-20">
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Bedtime</label>
                            <input type="time" class="w-full p-2 border border-gray-300 rounded-md">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Wake Time</label>
                            <input type="time" class="w-full p-2 border border-gray-300 rounded-md">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Sleep Quality</label>
                        <select class="w-full p-2 border border-gray-300 rounded-md">
                            <option>Very Poor</option>
                            <option>Poor</option>
                            <option>Fair</option>
                            <option>Good</option>
                            <option>Excellent</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Notes</label>
                        <textarea class="w-full p-2 border border-gray-300 rounded-md" rows="3" placeholder="Any observations about your sleep..."></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Number of times woken up</label>
                        <input type="number" class="w-full p-2 border border-gray-300 rounded-md" min="0" value="0">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Minutes to fall asleep</label>
                        <input type="number" class="w-full p-2 border border-gray-300 rounded-md" min="0" value="0">
                    </div>
                    <button type="submit" class="w-full bg-gradient-to-r from-indigo-500 to-purple-500 text-white py-2 px-4 rounded-md hover:opacity-90 transition-all">
                        Save Entry
                    </button>
                </form>
            </div>

            <!-- Sleep Trends -->
            <div class="dashboard-card p-6 rounded-xl col-span-2">
                <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"/>
                    </svg>
                    Monthly Sleep Trends
                </h3>
                <div class="chart-container h-64 mb-6">
                    <canvas id="monthlyTrendsChart"></canvas>
                </div>
                <div class="grid grid-cols-3 gap-4 text-center">
                    <div class="bg-purple-50 p-3 rounded-lg">
                        <div class="text-sm text-gray-500">Avg. Sleep Duration</div>
                        <div class="text-2xl font-bold text-purple-600">5.4 hrs</div>
                        <div class="text-xs text-red-500">↓ 0.3 from last month</div>
                    </div>
                    <div class="bg-blue-50 p-3 rounded-lg">
                        <div class="text-sm text-gray-500">Sleep Quality</div>
                        <div class="text-2xl font-bold text-blue-600">48%</div>
                        <div class="text-xs text-red-500">↓ 5% from last month</div>
                    </div>
                    <div class="bg-green-50 p-3 rounded-lg">
                        <div class="text-sm text-gray-500">Sleep Consistency</div>
                        <div class="text-2xl font-bold text-green-600">62%</div>
                        <div class="text-xs text-green-500">↑ 4% from last month</div>
                    </div>
                </div>
            </div>
        </div>
		
		<!-- Recommendations -->
        <div class="glass p-8 rounded-xl mb-12">
            <h3 class="text-2xl font-semibold text-gray-800 mb-6">Personalized Recommendations From Your TCM Practitioner</h3>
            <div class="grid md:grid-cols-2 gap-8">
                <div class="dashboard-card p-5 rounded-xl border-l-4 border-blue-500">
                    <h4 class="text-lg font-medium text-gray-800 mb-3">For Better Sleep Tonight</h4>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Aim to be in bed by 10:30 PM tonight</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Try 10 minutes of deep breathing before sleep</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Avoid screens 1 hour before bedtime</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Keep your bedroom cool (65-68°F/18-20°C)</span>
                        </li>
                    </ul>
                </div>
                <div class="dashboard-card p-5 rounded-xl border-l-4 border-green-500">
                    <h4 class="text-lg font-medium text-gray-800 mb-3">Long-term Improvements</h4>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Establish a consistent sleep schedule (aim for bed at 10:30 PM every night)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Start a morning sunlight routine (15-30 minutes of natural light exposure)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Cut caffeine after 12 PM and eliminate alcohol before bed</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span>Begin practicing bedtime meditation (start with 5 min/day)</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- TCM Herbal Recommendations -->
        <div class="dashboard-card p-6 rounded-xl mb-12">
            <h3 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 12.828 0L16 16m-2-2l1.586-1.586a2 2 0 12.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                Traditional Chinese Medicine Recommendations From Your Practitioner
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="dashboard-card p-4 rounded-xl hover:shadow-md transition-all">
                    <div class="bg-green-100 p-3 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-medium text-gray-800 mb-2">Herbal Formulas</h4>
                    <p class="text-gray-600 mb-3">Based on your diagnosis, the following herbs may be beneficial:</p>
                    <ul class="text-gray-600 text-sm space-y-1 pl-4 list-disc">
                        <li>Suan Zao Ren (Sour Jujube Seed)</li>
                        <li>Bai Zi Ren (Biota Seed)</li>
                        <li>Fu Ling (Poria)</li>
                        <li>Wu Wei Zi (Schisandra Berry)</li>
                    </ul>
                </div>
                <div class="dashboard-card p-4 rounded-xl hover:shadow-md transition-all">
                    <div class="bg-blue-100 p-3 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-medium text-gray-800 mb-2">Acupressure Points</h4>
                    <p class="text-gray-600 mb-3">Self-massage these points to promote better sleep:</p>
                    <ul class="text-gray-600 text-sm space-y-1 pl-4 list-disc">
                        <li>Shen Men (HT7) - Inner wrist</li>
                        <li>An Mian - Behind the ear</li>
                        <li>Yintang - Between eyebrows</li>
                        <li>Neiguan (PC6) - Inner forearm</li>
                    </ul>
                    <div class="mt-4 text-xs text-gray-500 italic">*Apply gentle pressure for 1-2 minutes on each point</div>
                </div>
                <div class="dashboard-card p-4 rounded-xl hover:shadow-md transition-all">
                    <div class="bg-purple-100 p-3 rounded-full w-12 h-12 flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h4 class="text-lg font-medium text-gray-800 mb-2">Daily Practices</h4>
                    <p class="text-gray-600 mb-3">Incorporate these TCM-based practices into your routine:</p>
                    <ul class="text-gray-600 text-sm space-y-1 pl-4 list-disc">
                        <li>Tai Chi - 15 minutes before dinner</li>
                        <li>Qi Gong breathing - 5 minutes before bed</li>
                        <li>Foot soaking with warm water - Before sleep</li>
                        <li>Gentle self-massage - Focus on ear points</li>
                    </ul>
                    <div class="mt-4 text-xs text-gray-500 italic">*Consistency is key for TCM practices</div>
                </div>
            </div>
        </div>
    </div>
	
<!-- Action Buttons -->
<div class="container mx-auto px-4 mb-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <a href="MPU4253(Subscription).php" class="p-4 rounded-xl text-center hover:shadow-lg transition-all bg-gradient-to-r from-green-500 to-blue-500 text-white font-medium" style="transition: all 0.3s ease; border: 1px solid rgba(255, 255, 255, 0.2);">
            <svg class="w-5 h-5 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
            </svg>
            Manage Your Subscription
        </a>
        <a href="MPU4253(Chat).php" class="p-4 rounded-xl text-center hover:shadow-lg transition-all bg-gradient-to-r from-blue-500 to-purple-500 text-white font-medium" style="transition: all 0.3s ease; border: 1px solid rgba(255, 255, 255, 0.2);">
            <svg class="w-5 h-5 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
            </svg>
            Chat with Your TCM Practitioner
        </a>
        <a href="MPU4253(Feedback).php" class="p-4 rounded-xl text-center hover:shadow-lg transition-all bg-gradient-to-r from-purple-500 to-pink-500 text-white font-medium" style="transition: all 0.3s ease; border: 1px solid rgba(255, 255, 255, 0.2);">
            <svg class="w-5 h-5 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
            </svg>
            Feedback Form
        </a>
    </div>
</div>

    <!-- Footer -->
    <footer class="glass text-center py-8">
        <div class="container mx-auto px-4">
            <p class="text-gray-600">© 2025 TradiCare - Traditional Medicine for Modern Wellness</p>
            <div class="mt-4">
                <a href="#" class="text-gray-500 hover:text-green-600 mx-2">Privacy Policy</a>
                <a href="#" class="text-gray-500 hover:text-green-600 mx-2">Terms of Service</a>
            </div>
        </div>
    </footer>

    <script>
        // Weekly Sleep Chart
        const weeklyData = {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            datasets: [
                {
                    label: 'Hours Slept',
                    data: [6.5, 5.3, 4.5, 6.1, 5.8, 5.2, 6.2],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    tension: 0.4
                }
            ]
        };

        const weeklyCtx = document.getElementById('weeklyChart').getContext('2d');
        const weeklyChart = new Chart(weeklyCtx, {
            type: 'line',
            data: weeklyData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 4,
                        max: 9,
                        ticks: {
                            stepSize: 1
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Monthly Trends Chart
        const monthlyData = {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [
                {
                    label: 'Avg Sleep Hours',
                    data: [6.8, 6.5, 6.2, 5.9, 5.7, 5.4],
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    yAxisID: 'y'
                },
                {
                    label: 'Sleep Quality %',
                    data: [65, 62, 58, 55, 52, 48],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2,
                    tension: 0.4,
                    yAxisID: 'percentage'
                }
            ]
        };

        const monthlyCtx = document.getElementById('monthlyTrendsChart').getContext('2d');
        const monthlyChart = new Chart(monthlyCtx, {
            type: 'line',
            data: monthlyData,
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 4,
                        max: 9,
                        position: 'left',
                        title: {
                            display: true,
                            text: 'Hours'
                        }
                    },
                    percentage: {
                        beginAtZero: false,
                        min: 0,
                        max: 100,
                        position: 'right',
                        grid: {
                            drawOnChartArea: false
                        },
                        title: {
                            display: true,
                            text: 'Quality %'
                        }
                    }
                },
                plugins: {
                    tooltip: {
                        mode: 'index',
                        intersect: false
                    }
                }
            }
        });
    </script>
</body>
</html>