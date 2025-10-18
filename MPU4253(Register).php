<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TradiCare - Sign Up</title>
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

        .input-field {
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(255, 255, 255, 0.4);
        }

        .input-field:focus {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            background: rgba(255, 255, 255, 0.95);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .success-message {
            animation: fadeIn 0.5s ease-out forwards;
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
				</div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 pt-32">
        <!-- Sign Up Section -->
        <div class="max-w-md mx-auto mb-32">
            <!-- Registration Form -->
            <div id="registrationForm" class="feature-card p-8 rounded-2xl">
                <div class="text-center mb-8">
                    <!-- Floating Logo -->
                    <div class="float-animation mb-6">
                        <div class="organic-border overflow-hidden w-24 h-24 mx-auto bg-gradient-to-br from-green-400 to-blue-500 p-1">
                            <div class="w-full h-full bg-white rounded-[inherit] p-2">
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
                    <h2 class="text-3xl font-bold bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent mb-2">Create Account</h2>
                    <p class="text-gray-600">Join us on your path to wellness</p>
                </div>
                
                <form id="signupForm" class="space-y-5" onsubmit="return validateForm(event)">
                    <div>
                        <label for="username" class="block text-gray-700 mb-2">Username</label>
                        <input type="text" id="username" name="username" class="input-field w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Choose a username">
                        <div id="usernameError" class="text-red-500 text-sm mt-1 hidden">Please enter a username</div>
                    </div>
                    
                    <div>
                        <label for="email" class="block text-gray-700 mb-2">Email</label>
                        <input type="email" id="email" name="email" class="input-field w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Enter your email address">
                        <div id="emailError" class="text-red-500 text-sm mt-1 hidden">Please enter a valid email address</div>
                    </div>
                    
                    <div>
                        <label for="password" class="block text-gray-700 mb-2">Password</label>
                        <input type="password" id="password" name="password" class="input-field w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Create a password">
                        <div id="passwordError" class="text-red-500 text-sm mt-1 hidden">Please enter a password</div>
                    </div>
                    
                    <div>
                        <label for="confirmPassword" class="block text-gray-700 mb-2">Confirm Password</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" class="input-field w-full px-4 py-3 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Confirm your password">
                        <div id="confirmPasswordError" class="text-red-500 text-sm mt-1 hidden">Passwords do not match</div>
                    </div>
                    
                    <div class="flex items-center">
                        <input type="checkbox" id="terms" name="terms" class="h-4 w-4 text-green-600 focus:ring-green-500">
                        <label for="terms" class="ml-2 block text-sm text-gray-700">
                            I agree to the <a href="#" class="text-blue-600 hover:text-blue-800">Terms of Service</a> and <a href="#" class="text-blue-600 hover:text-blue-800">Privacy Policy</a>
                        </label>
                    </div>
                    
                    <button type="submit" class="w-full bg-gradient-to-r from-green-500 to-blue-500 text-white py-3 px-4 rounded-lg hover:opacity-90 transition-all duration-300 pulse">
                        Create Account
                    </button>
                </form>
                
                <div class="text-center mt-6">
                    <p class="text-gray-600">Already have an account? <a href="MPU4253(Login).php" class="text-blue-600 hover:text-blue-800">Sign in</a></p>
                </div>
            </div>

            <!-- Success Message (Hidden by Default) -->
            <div id="successMessage" class="feature-card p-8 rounded-2xl text-center hidden">
                <div class="mb-6">
                    <div class="w-20 h-20 mx-auto bg-green-100 rounded-full flex items-center justify-center">
                        <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                </div>
                <h2 class="text-3xl font-bold text-gray-800 mb-2">Registration Successful!</h2>
                <p class="text-gray-600 mb-8">Your TradiCare account has been created.</p>
                <button onclick="redirectToLogin()" class="bg-gradient-to-r from-green-500 to-blue-500 text-white py-3 px-8 rounded-lg hover:opacity-90 transition-all duration-300">
                    Go to Login
                </button>
            </div>
        </div>
    </div>

    <script>
        function validateForm(event) {
            event.preventDefault();
            
            const username = document.getElementById('username').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            const usernameError = document.getElementById('usernameError');
            const emailError = document.getElementById('emailError');
            const passwordError = document.getElementById('passwordError');
            const confirmPasswordError = document.getElementById('confirmPasswordError');
            
            // Reset error messages
            usernameError.classList.add('hidden');
            emailError.classList.add('hidden');
            passwordError.classList.add('hidden');
            confirmPasswordError.classList.add('hidden');
            
            // Validate fields
            let isValid = true;
            
            if (!username.trim()) {
                usernameError.classList.remove('hidden');
                isValid = false;
            }
            
            if (!email.trim() || !validateEmail(email)) {
                emailError.classList.remove('hidden');
                isValid = false;
            }
            
            if (!password) {
                passwordError.classList.remove('hidden');
                isValid = false;
            }
            
            if (password !== confirmPassword) {
                confirmPasswordError.classList.remove('hidden');
                isValid = false;
            }
            
            if (isValid) {
                // Show success message
                document.getElementById('registrationForm').classList.add('hidden');
                const successMessage = document.getElementById('successMessage');
                successMessage.classList.remove('hidden');
                successMessage.classList.add('success-message');
                
                return true;
            }
            
            return false;
        }
        
        function validateEmail(email) {
            const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }
        
        function redirectToLogin() {
            window.location.href = 'MPU4253(Login).php';
        }
    </script>
</body>
</html>