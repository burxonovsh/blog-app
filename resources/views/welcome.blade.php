 <body class="flex flex-col min-h-screen bg-gray-100">
        <!-- Navbar -->
        <nav class="bg-white shadow-md">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <a href="/" class="text-2xl font-bold text-indigo-600">BlogSite</a>
                        </div>
                        <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                            <a href="/" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Home</a>
                            <a href="/all-posts" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">All Posts</a>
                            <a href="/create-post" class="border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">Create Post</a>
                        </div>
                    </div>

                    <!-- Notification and Profile Menu -->
                    <div class="hidden sm:ml-6 sm:flex sm:items-center">
                        <!-- Notification Icon -->
                        <div class="ml-4 relative">
                            <button type="button" class="bg-white rounded-full flex focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="notifications-menu" aria-expanded="false" aria-haspopup="true" onclick="document.getElementById('notifications-dropdown').classList.toggle('hidden')">
                                <span class="sr-only">Open notifications menu</span>
                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                </svg>
                                <span class="absolute top-0 right-0 inline-flex items-center justify-center px-1 py-1 text-xs font-bold leading-none text-white bg-red-600 rounded-full"></span>
                            </button>
                            <div class="hidden mt-2 space-y-1 bg-white rounded-md shadow-lg" id="mobile-notifications-dropdown">
                                <a href="#" class="block px-4 py-2 text-base text-gray-700 hover:bg-gray-100">You have 1 new notification</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
