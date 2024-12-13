<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class('flex flex-col min-h-screen'); ?>>
<nav class="bg-gray-800 p-4" data-llama="app/views/layouts/llama_bot.html.erb" data-llama-id="9" data-llama-editable="true" data-llama-snippet-id="1">
<div class="container mx-auto" data-llama="app/views/layouts/llama_bot.html.erb" data-llama-id="10" data-llama-editable="true" data-llama-snippet-id="1">
<div class="flex justify-between items-center" data-llama="app/views/layouts/llama_bot.html.erb" data-llama-id="11" data-llama-editable="true" data-llama-snippet-id="1">
<div class="flex items-center" data-llama="app/views/layouts/llama_bot.html.erb" data-llama-id="12" data-llama-editable="true" data-llama-snippet-id="1">
<img alt="LlamaBot Icon" class="h-8 w-8 mr-2" data-llama="app/views/layouts/llama_bot.html.erb" data-llama-id="13" src="https://service-jobs-images.s3.us-east-2.amazonaws.com/7rl98t1weu387r43il97h6ipk1l7" data-llama-editable="true" data-llama-snippet-id="1">
<a class="text-white font-bold text-xl" data-llama="app/views/layouts/llama_bot.html.erb" data-llama-id="14" href="/" data-llama-editable="true" data-llama-snippet-id="1"><?php bloginfo('name'); ?></a>
</div>
<div class="hidden md:flex items-center space-x-4" data-llama-id="15" data-llama-editable="true" data-llama-snippet-id="1">
<a class="text-white hover:text-gray-300 flex items-center" data-llama-id="16" href="/pricing" title="Pricing" data-llama-editable="true" data-llama-snippet-id="1">
<span data-llama-id="17" data-llama-editable="true" data-llama-snippet-id="1">Pricing</span>
</a>
<a class="text-white hover:text-gray-300 flex items-center" data-llama-id="18" href="/about" title="About" data-llama-editable="true" data-llama-snippet-id="1">
<span data-llama-id="19" data-llama-editable="true" data-llama-snippet-id="1">About</span>
</a>
<a class="text-white hover:text-gray-300 flex items-center" data-llama-id="20" href="/how-it-works" title="How It Works" data-llama-editable="true" data-llama-snippet-id="1">
<i class="fas fa-question-circle mr-1" data-llama-id="21" data-llama-editable="true" data-llama-snippet-id="1"></i>
<span data-llama-id="22" data-llama-editable="true" data-llama-snippet-id="1"><br data-llama-id="23" data-llama-editable="true" data-llama-snippet-id="1"></span>
</a>
<a class="text-white hover:text-gray-300 flex items-center" data-llama-id="24" href="https://discord.gg/7DapkvmWKZ" target="_blank" title="Join Discord" data-llama-editable="true" data-llama-snippet-id="1">
<i class="fab fa-discord mr-1" data-llama-id="25" data-llama-editable="true" data-llama-snippet-id="1"></i>
<span data-llama-id="26" data-llama-editable="true" data-llama-snippet-id="1"><br data-llama-id="27" data-llama-editable="true" data-llama-snippet-id="1"></span>
</a>
<a class="text-white hover:text-gray-300 flex items-center" data-llama-id="28" href="https://github.com/llamapressai/llamapress" target="_blank" title="GitHub" data-llama-editable="true" data-llama-snippet-id="1">
<i class="fab fa-github mr-1" data-llama-id="29" data-llama-editable="true" data-llama-snippet-id="1"></i>
<span data-llama-id="30" data-llama-editable="true" data-llama-snippet-id="1"><br data-llama-id="31" data-llama-editable="true" data-llama-snippet-id="1"></span>
</a>
<a class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700 transition-colors duration-150 ease-in-out flex items-center" data-llama-id="32" href="/users/sign_up" data-llama-editable="true" data-llama-snippet-id="1">Get Started <i class="fas fa-arrow-right ml-2" data-llama-id="33" data-llama-editable="true" data-llama-snippet-id="1"></i></a>
</div>
<div class="flex items-center space-x-4 md:hidden" data-llama-id="34" data-llama-editable="true" data-llama-snippet-id="1">
<a class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700 transition-colors duration-150 ease-in-out flex items-center" data-llama-id="35" href="/users/sign_up" data-llama-editable="true" data-llama-snippet-id="1">Get Started</a>
<button class="text-white focus:outline-none" data-llama-id="36" id="menu-toggle" onclick="toggleMobileMenu()" data-llama-editable="true" data-llama-snippet-id="1">
<svg class="h-6 w-6" data-llama-id="37" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-llama-editable="true" data-llama-snippet-id="1">
<path d="M4 6h16M4 12h16m-7 6h7" data-llama-id="38" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" data-llama-editable="true" data-llama-snippet-id="1"></path>
</svg>
</button>
</div>
</div>
<div class="md:hidden mt-2 hidden" data-llama="app/views/layouts/llama_bot.html.erb" data-llama-id="39" id="mobile-menu" data-llama-editable="true" data-llama-snippet-id="1">
<a class="text-white hover:text-gray-300 flex items-center" data-llama-id="40" href="/pricing" title="Pricing" data-llama-editable="true" data-llama-snippet-id="1">
<span data-llama-id="41" data-llama-editable="true" data-llama-snippet-id="1">Pricing</span>
</a>
<a class="text-white hover:text-gray-300 flex items-center" data-llama-id="42" href="/about" title="About" data-llama-editable="true" data-llama-snippet-id="1">
<span data-llama-id="43" data-llama-editable="true" data-llama-snippet-id="1">About</span>
</a>
<a class="text-white hover:text-gray-300 flex items-center" data-llama-id="44" href="/how-it-works" title="How It Works" data-llama-editable="true" data-llama-snippet-id="1">
<i class="fas fa-question-circle mr-1" data-llama-id="45" data-llama-editable="true" data-llama-snippet-id="1"></i>
<span data-llama-id="46" data-llama-editable="true" data-llama-snippet-id="1"><br data-llama-id="47" data-llama-editable="true" data-llama-snippet-id="1"></span>
</a>
<a class="text-white hover:text-gray-300 flex items-center" data-llama-id="48" href="https://discord.gg/7DapkvmWKZ" target="_blank" title="Join Discord" data-llama-editable="true" data-llama-snippet-id="1">
<i class="fab fa-discord mr-1" data-llama-id="49" data-llama-editable="true" data-llama-snippet-id="1"></i>
<span data-llama-id="50" data-llama-editable="true" data-llama-snippet-id="1"><br data-llama-id="51" data-llama-editable="true" data-llama-snippet-id="1"></span>
</a>
<a class="text-white hover:text-gray-300 flex items-center" data-llama-id="52" href="https://github.com/llamapressai/llamapress" target="_blank" title="GitHub" data-llama-editable="true" data-llama-snippet-id="1">
<i class="fab fa-github mr-1" data-llama-id="53" data-llama-editable="true" data-llama-snippet-id="1"></i>
<span data-llama-id="54" data-llama-editable="true" data-llama-snippet-id="1"><br data-llama-id="55" data-llama-editable="true" data-llama-snippet-id="1"></span>
</a>
<a class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700 transition-colors duration-150 ease-in-out flex items-center" data-llama-id="56" href="/users/sign_up" data-llama-editable="true" data-llama-snippet-id="1">Get Started <i class="fas fa-arrow-right ml-2" data-llama-id="57" data-llama-editable="true" data-llama-snippet-id="1"></i></a>
<!-- Add more navbar links here -->
</div>
</div>
</nav>    
    <!-- <header class="bg-gray-800 text-white p-5">
        <div class="container mx-auto">
            <h1 class="text-2xl"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        </div>
    </header> -->
    <main class="flex-1">
        <div class="container mx-auto p-4">