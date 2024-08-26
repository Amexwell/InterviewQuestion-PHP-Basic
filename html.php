<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Verification</title>
    <style>
        /* General Styling */
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-attachment: fixed;
        }

        .container {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
            max-width: 450px;
            width: 100%;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        h2 {
            color: #333;
            margin-bottom: 25px;
            font-size: 2rem;
            letter-spacing: 1.5px;
        }

        label {
            display: block;
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 1rem;
            margin-bottom: 20px;
            box-sizing: border-box;
            transition: border-color 0.3s ease-in-out;
        }

        input[type="text"]:focus {
            border-color: #007BFF;
            outline: none;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.2);
        }

        input[type="submit"] {
            background: linear-gradient(135deg, #28a745, #218838);
            color: white;
            padding: 12px 25px;
            font-size: 1.1rem;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s ease-in-out, transform 0.2s;
        }

        input[type="submit"]:hover {
            background: linear-gradient(135deg, #218838, #28a745);
            transform: scale(1.05);
        }

        input[type="submit"]:active {
            transform: scale(1);
        }

        .message {
            margin-top: 20px;
            font-size: 1.2rem;
            padding: 10px 0;
            font-weight: bold;
        }

        .message.success {
            color: #28a745;
            background-color: #d4edda;
            border-radius: 5px;
        }

        .message.error {
            color: #dc3545;
            background-color: #f8d7da;
            border-radius: 5px;
        }

        /* Extra Enhancements */
        .container::before {
            content: "";
            position: absolute;
            top: -60px;
            right: -60px;
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            z-index: -1;
            animation: float 6s ease-in-out infinite;
        }

        .container::after {
            content: "";
            position: absolute;
            bottom: -60px;
            left: -60px;
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            z-index: -1;
            animation: float 6s ease-in-out infinite reverse;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Username Verification</h2>
        <form id="usernameForm">
            <label for="username">User Name:</label>
            <input type="text" id="username" name="username" placeholder="Enter your username">
            <input type="submit" value="Submit">
        </form>
        <div class="message" id="message"></div>
    </div>

    <script src="verify_ajax.js"></script>
</body>

</html>
