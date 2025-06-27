<?php

function makeUrl($string)
{
    $string = trim($string);
    $string = str_replace(" ", "-", $string);
    $string = str_replace("+", "plus", $string);
    $string = str_replace(",", "", $string);
    $string = str_replace(".", "", $string);
    $string = str_replace("/", "", $string);
    $string = preg_replace("/(đ|Đ)/", "d", $string);
    $string = str_replace("S", "s", $string);
    $string = preg_replace('/(á|à|ã|ạ|ả|ă|ằ|ắ|ẵ|ẳ|ặ|â|ầ|ấ|ẩ|ậ|ẫ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ẳ|Ặ|Ẵ|Â|Ầ|Ấ|Ẫ|Ẩ|Ậ|Ằ)/', 'a', $string);
    $string = preg_replace("/(é|ẽ|ẻ|ẹ|ê|ế|ễ|ể|ệ|É|È|Ẽ|Ẻ|Ẹ|Ê|Ế|Ễ|Ể|Ệ|è|Ề|ề)/", "e", $string);
    $string = preg_replace("/(í|ỉ|ị|ĩ|j|Í|Ỉ|Ĩ|Ị|ì|Ì)/", "i", $string);
    $string = preg_replace("/(ó|ọ|õ|ỏ|ô|ố|ộ|ổ|ỗ|ơ|ỡ|ở|ợ|ớ|Ó|Ọ|Õ|Ỏ|Ô|Ố|Ổ|Ỗ|Ộ|Ơ|Ợ|Ở|Ớ|Ở|ò|Ò|ồ|Ồ|ờ|Ờ)/", "o", $string);
    $string = preg_replace("/(ú|ủ|ụ|ũ|ư|ứ|ử|ự|ữ|Ú|Ủ|Ụ|Ũ|Ư|Ự|Ử|Ứ|Ữ|ù|Ù|ừ|Ừ)/", "u", $string);
    $string = preg_replace("/(ý|ỵ|ỹ|ỷ|Ý|Ỵ|Ỹ|Ỷ|ỳ|Ỳ)/", "y", $string);
    $string = preg_replace('/[^a-zA-Z0-9\-]/', '', $string);
    $string = strtolower($string);
    return $string;
}
?>

<!DOCTYPE html>
<html>

<head>
    <base href="http://localhost:8080/homiesmart/">
    <title>Homie Smmart - Nhà Thông Minh</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="image/logo.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/theia-sticky-sidebar.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

</head>

<body>
    <?php
    include_once('header.php');
    include_once('menu.php');
    include_once('content.php');
    include_once('footer.php');
    ?>

    <div class="login">
        <div class="close-login">
            <button id="close"><i class="fas fa-times"></i></button>
        </div>
        <div class="login-title">
            <h3>Đăng Nhập</h3>
            <a href="" class="button-register">Đăng Kí</a>
        </div>
        <div class="login-main">
            <form action="" method="post">
                <input type="text" required="required" id="login-username" name="username" placeholder="Tên đăng nhập"
                    value>
                <p id="er_username"></p>
                <input type="password" minlength="8" id="login-password" name="password" value placeholder="Mật khẩu">
                <p id="er_password"></p>
                <input type="submit" value="Đăng Nhập" id="login">
            </form>
        </div>
    </div>

    <div class="register">
        <div class="close-register">
            <button id="close"><i class="fas fa-times"></i></button>
        </div>
        <div class="register-title">
            <h3>Đăng Ký</h3>
            <a href="" class="button-login">Đăng Nhập</a>
        </div>
        <div class="register-main">
            <form action="" method="post">
                <input type="text" id="fullname" name="fullname" placeholder="Họ tên" value>
                <p id="er_fullname"></p>
                <input type="text" name="username" id="username" placeholder="Tên đăng nhập" value>
                <p id="er_username"></p>
                <input type="password" minlength="8" id="password" name="password" value placeholder="Mật khẩu">
                <p id="er_password"></p>
                <input type="password" minlength="8" id="confirm_pw" name="confirm_pw" value
                    placeholder="Nhập lại mật khẩu">
                <p id="er_confirm_pw"></p>
                <input type="text" id="phone" name="phone" placeholder="Số Điện thoại" value>
                <p id="er_phone"></p>
                <input type="submit" value="Đăng Ký" name="register" id="register">
            </form>
        </div>

    </div>

    <div class="fixed bottom-0 right-0">
        <a class=" mb-4 mr-4 btn_openchat" id="open-chat">
            <i class="fa-regular fa-comment"></i>
        </a>

        <a class="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    </div>
    <!---
		code chatbot container, nơi chứa tin nhắn	
	-->
    <div id="chat-container" class="hidden fixed bottom-1 right-3 shadow-xl/30 shadow-md rounded-lg resize overflow-auto  w-[450px] min-w-[450px] max-w-[70vw] min-h-[500px] max-h-[600px]" style="z-index: 10;">
        <div class="bg-white shadow-md rounded-lg w-full h-full flex flex-col position-relative">
            <div class="p-4 border-b bg-blue-500 text-white rounded-t-lg flex justify-between items-center">
                <p class="text-lg font-semibold">HomieSmart Support</p>
                <button id="close-chat"
                    class="text-gray-300 hover:text-gray-400 focus:outline-none focus:text-gray-400">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div id="chatbox" class="p-4  overflow-y-auto overflow-auto h-[400px]">
                <div class="mb-2">
                    <p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block max-w-[70%] w-full">
                        Xin chào, tôi có thể giúp gì được cho bạn.
                    </p>
                </div>
            </div>
            <div class="p-4 border-t flex">
                <input id="user-input" type="text" placeholder="Aa"
                    class="w-full px-3 py-2 border rounded-l-md focus:outline-none">
                <button id="send-button"
                    class="bg-blue-500 text-white px-4 py-2 rounded-r-md hover:bg-blue-600 transition duration-300">
                    <i class="fa-regular fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>

    <style>
        #chatbox * {
            font-size: 14px;
        }
        #chatbox strong {
            font-size: 12px;
        }
    </style>

    <script>
        const chatbox = document.getElementById("chatbox");
        const chatContainer = document.getElementById("chat-container");
        const userInput = document.getElementById("user-input");
        const sendButton = document.getElementById("send-button");
        const openChatButton = document.getElementById("open-chat");
        const closeChatButton = document.getElementById("close-chat");

        let isChatboxOpen = true;

        function toggleChatbox() {
            chatContainer.classList.toggle("hidden");
            isChatboxOpen = !isChatboxOpen;
            const chatbox = document.getElementById('chatbox');
            if (chatbox.scrollHeight > 0 && chatbox) {
                chatbox.scrollTop = chatbox.scrollHeight;
            }
        }
        toggleChatbox();

        openChatButton.addEventListener("click", toggleChatbox);

        closeChatButton.addEventListener("click", toggleChatbox);

        if (!localStorage.getItem("chatHistory")) {
            localStorage.setItem("chatHistory", JSON.stringify([]));
        }

        sendButton.addEventListener("click", function() {
            const userMessage = userInput.value;
            if (userMessage.trim() !== "") {
                addUserMessage(userMessage);
                sendMessageToServer(userMessage);
                userInput.value = "";
            }
        });

        userInput.addEventListener("keyup", function(event) {
            if (event.key === "Enter") {
                const userMessage = userInput.value;
                if (userMessage.trim().toLowerCase() === 'clr') {
                    clearChatHistory();
                } else {
                    addUserMessage(userMessage);
                    showTypingIndicator();
                    sendMessageToServer(userMessage);
                }

                // Xóa input value sau khi gửi tin nhắn
                userInput.value = "";
            }
        });

        function clearChatHistory() {
            localStorage.removeItem("chatHistory");
            chatbox.innerHTML = '';
            addBotMessage('Chào bạn, tôi có thể giúp gì được cho bạn.');
        }

        function addUserMessage(message) {
            const messageElement = document.createElement("div");
            messageElement.classList.add("mb-2", "flex", "justify-end");
            messageElement.innerHTML =
                `<p class="bg-blue-500 text-white rounded-lg py-2 px-4 inline-block max-w-[70%]">${message}</p>`;
            chatbox.appendChild(messageElement);
            chatbox.scrollTop = chatbox.scrollHeight;
        }

        function addBotMessage(message) {
            removeTypingIndicator();
            const el = document.createElement("div");
            el.className = "mb-2";
            el.innerHTML = `<div class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block max-w-[70%] w-full">
				${marked.parse(message)}
			</div>`;
            chatbox.appendChild(el);
            chatbox.scrollTop = chatbox.scrollHeight;
        }

        function showTypingIndicator() {
            const typing = document.createElement("div");
            typing.className = "mb-2 typing-indicator";
            typing.innerHTML = `
			<p class="bg-gray-200 text-gray-700 rounded-lg py-2 px-4 inline-block animate-pulse-dots">
				<span class="dot">.</span><span class="dot">.</span><span class="dot">.</span>
			</p>`;
            typing.id = "typing-indicator";
            chatbox.appendChild(typing);
            chatbox.scrollTop = chatbox.scrollHeight;
        }
        //wait chat
        function removeTypingIndicator() {
            const el = document.getElementById("typing-indicator");
            if (el) el.remove();
        }

        // call tới server chabot
        async function sendMessageToServer(userMessage) {
            let chatHistory = JSON.parse(localStorage.getItem("chatHistory"));

            if (!chatHistory) {
                chatHistory = [];
            }

            chatHistory.push({
                role: "user",
                message: userMessage
            });

            const response = await fetch("chatbot.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    message: userMessage,
                    history: chatHistory
                })
            });


            const data = await response.json();
            const botReply = data.reply || "Xin lỗi, tôi không thể trả lời lúc này.";

            chatHistory.push({
                role: "bot",
                message: botReply
            });

            localStorage.setItem("chatHistory", JSON.stringify(chatHistory));

            addBotMessage(botReply);
        }



        toggleChatbox();

        const storedHistory = JSON.parse(localStorage.getItem("chatHistory"));
        storedHistory.forEach((entry) => {
            if (entry.role === "user") {
                addUserMessage(entry.message);
            } else if (entry.role === "bot") {
                addBotMessage(entry.message);
            }
        });
    </script>


</body>

</html>