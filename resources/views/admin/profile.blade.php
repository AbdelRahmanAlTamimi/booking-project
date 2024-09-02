<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .profile {
            background-color: #fff;
            max-width: 600px;
            width: 100%;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
            border-top: 4px solid #007bff;
        }
        
        .profile h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-weight: 600;
        }
        .profile label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }
        .profile input[type="text"],
        .profile input[type="email"],
        .profile input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            color: #333;
            background-color: #f8f8f8;
        }
        .profile input[type="text"]:focus,
        .profile input[type="email"]:focus,
        .profile input[type="password"]:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        .profile button {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #ff5722;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        .profile button:hover {
            background-color: #e64a19;
        }
    </style>
</head>
<body>

<div class="profile">
    <h2>Admin Profile</h2>
    <form action="{{ route('admin.profile.update', $admin->id) }}" method="POST">
        @csrf
        <div>
            <label>Name:</label>
            <input type="text" name="name" value="{{ $admin->name }}" required>
        </div>
        <div>
            <label>Email:</label>
            <input type="email" name="email" value="{{ $admin->email }}" required>
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password">
        </div>
        <div>
            <label>Confirm Password:</label>
            <input type="password" name="password_confirmation">
        </div>
        <button type="submit">Update Profile</button>
    </form>
</div>

</body>
</html>
