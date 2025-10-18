<?php
// Start PHP script
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetch survey responses from POST
    $responses = [
        'q1' => $_POST['q1'] ?? '',
        'q2' => $_POST['q2'] ?? '',
        'q3' => $_POST['q3'] ?? '',
        'q4' => $_POST['q4'] ?? '',
        'q5' => $_POST['q5'] ?? '',
        'q6' => $_POST['q6'] ?? '',
        'q7' => $_POST['q7'] ?? '',
        'q8' => $_POST['q8'] ?? '',
        'q9' => $_POST['q9'] ?? '',
        'q10' => $_POST['q10'] ?? '',
    ];

    // Initialize recommendations
    $recommendations = [];

    // Generate recommendations based on survey responses
    if ($responses['q1'] === 'within_8') {
        $recommendations[] = "Ensure your sleep duration is sufficient and consistent.";
    } elseif ($responses['q1'] === 'above_8') {
        $recommendations[] = "Monitor your sleep quality to ensure you're well-rested.";
    }

    if ($responses['q2'] === 'before_10') {
        $recommendations[] = "Maintain your early bedtime for better health.";
    } elseif ($responses['q2'] === 'after_10') {
        $recommendations[] = "Consider going to bed earlier for optimal rest.";
    }

    if ($responses['q3'] === 'no') {
        $recommendations[] = "Practice relaxation techniques to improve sleep onset.";
    }

    if ($responses['q4'] === 'twice_or_more') {
        $recommendations[] = "Limit fluid intake before bed to reduce waking up at night.";
    }

    if ($responses['q5'] === 'yes') {
        $recommendations[] = "Consider lifestyle changes to boost daytime energy.";
    }

    if ($responses['q6'] === 'yes') {
        $recommendations[] = "Consult a specialist if snoring or apnea affects your sleep.";
    }

    if ($responses['q7'] === 'yes') {
        $recommendations[] = "Keep naps under 30 minutes to avoid disrupting nighttime sleep.";
    }

    if ($responses['q8'] === 'yes') {
        $recommendations[] = "Avoid using electronic devices in bed to improve sleep quality.";
    }

    if ($responses['q9'] === 'yes') {
        $recommendations[] = "Adopt stress management techniques to improve your sleep.";
    }

    if ($responses['q10'] === 'no') {
        $recommendations[] = "Establish a consistent bedtime routine for better sleep health.";
    }
} else {
    // Redirect if accessed directly without POST data
    header('Location: survey.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradiCare - Your Sleep Assessment Results</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
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

    <!-- Results Section -->
    <div class="relative pt-32 pb-20">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h1 class="text-5xl font-bold mb-8 text-center bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent slide-in">
                    Your Sleep Assessment Results
                </h1>
                
                <!-- Recommendations Section -->
                <div class="glass rounded-2xl p-8 mb-12 relative overflow-hidden slide-in">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-gradient-to-br from-green-300 to-blue-300 opacity-20 rounded-full blur-3xl morph"></div>
                    
                    <h2 class="text-2xl font-semibold mb-6 text-gray-800 relative z-10">Your TCM Recommendations</h2>
                    <div class="space-y-4 relative z-10">
                        <?php foreach ($recommendations as $recommendation): ?>
                            <div class="flex items-start space-x-4 p-4 bg-white bg-opacity-50 rounded-lg">
                                <svg class="w-6 h-6 text-green-600 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <p class="text-gray-700 leading-relaxed"><?php echo $recommendation; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row justify-center items-center space-y-4 sm:space-y-0 sm:space-x-6">
                    <a href="MPU4253(Survey_Form).php" class="group inline-flex items-center px-8 py-3 text-lg font-medium text-white bg-gradient-to-r from-green-500 to-blue-500 rounded-full hover:opacity-90 transition-all duration-300">
                        Take Survey Again
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                    <a href="MPU4253(Service)-Copy.php" class="group inline-flex items-center px-8 py-3 text-lg font-medium text-gray-600 hover:text-green-600 transition-all duration-300">
                        Explore More Services
                        <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-green-300 to-blue-300 opacity-20 rounded-full blur-3xl morph"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-br from-purple-300 to-blue-300 opacity-20 rounded-full blur-3xl morph"></div>
    </div>
</body>
</html>