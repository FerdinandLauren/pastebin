<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<!-- component -->
<body class="font-mono bg-gray-400">
		<!-- Container -->
		<div class="container mx-auto">
			<div class="flex justify-center px-6 my-12">
				<!-- Row -->
				<div class="w-full xl:w-3/4 lg:w-11/12 flex">
					<!-- Col -->
					<div
						class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg"
						style="background-image: url('../src/assets/img/Logop.jpg')"
					></div>
					<!-- Col -->
					<div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
						<h3 class="pt-4 text-2xl text-center">Sign Up</h3>
						<form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" action="controllers/signup_process.php" method="post">
							<div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="email">
									Email
								</label>
								<input
									class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="email"
									type="email"
                                    name="email"
									placeholder="Enter Your Email"
                                    required
								/>
							</div>
							<div class="mb-4">
								<label class="block mb-2 text-sm font-bold text-gray-700" for="password">
									Password
								</label>
								<input
									class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
									id="password"
									type="password"
                                    name="password"
									placeholder="Enter Your Password"
                                    required
								/>
							</div>
							<div class="mb-6 text-center">
								<button
									class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline"
									type="submit" 
                                    value="Sign Up"
								>
									Create Account
								</button>
							</div>
							<hr class="mb-6 border-t" />
							<div class="text-center">
                                <p class="text-abu text-sm">Already have an account? 
                                    <a href="login.php" 
                                        class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800"
                                        >
                                        Log In!
                                    </a>
                                </p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>