<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
  <title>Chat</title>
  <style>
    .chat-container {
      height: 400px;
      overflow-y: auto;
    }
  </style>
</head>
<body class="bg-gray-100">
  <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg">
    <div class="chat-container p-4">
      <div class="flex items-start mb-4">
        <img src="user-avatar.jpg" alt="User Avatar" class="w-8 h-8 rounded-full">
        <div class="ml-2">
          <div class="bg-blue-100 p-2 rounded-lg">
            <p class="text-sm text-gray-800">Hi, how can I help you?</p>
          </div>
          <p class="text-xs text-gray-500 mt-1">9:00 AM</p>
        </div>
      </div>
      <div class="flex items-start mb-4">
        <img src="agent-avatar.jpg" alt="Agent Avatar" class="w-8 h-8 rounded-full">
        <div class="ml-2">
          <div class="bg-gray-200 p-2 rounded-lg">
            <p class="text-sm text-gray-800">I have a question about my order.</p>
          </div>
          <p class="text-xs text-gray-500 mt-1">9:05 AM</p>
        </div>
      </div>
      <!-- More chat messages here -->
    </div>
    <div class="p-4">
      <input type="text" placeholder="Type your message" class="w-full border border-gray-300 rounded-lg py-2 px-4">
      <button class="bg-blue-500 text-white rounded-lg px-4 py-2 mt-4">Send</button>
    </div>
  </div>
</body>
</html>
