<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
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
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .profile img {
            max-width: 100px;
            border-radius: 50%;
            display: block;
            margin: 0 auto 20px;
        }
        .profile h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .profile input[type="text"],
        .profile input[type="email"],
        .profile input[type="file"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .profile button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .profile button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="profile">
    <h2>Admin Profile</h2>
    <img src="{{ asset('storage/' . $admin->image_path) }}" alt="Admin Image">
    <form action="{{ route('admin.profile.update', $admin->id) }}" method="POST" enctype="multipart/form-data">
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
            <label>Image:</label>
            <input type="file" name="image">
        </div>
        <button type="submit">Update Profile</button>
    </form>
</div>

</body>
</html>