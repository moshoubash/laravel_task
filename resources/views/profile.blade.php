<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for additional styling -->
    <style>
        .profile-avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }
        .profile-section {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MyCompany</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Profile Section -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-4 text-center">
                <!-- Profile Avatar -->
                <img src="https://static.vecteezy.com/system/resources/previews/028/202/396/non_2x/old-man-teacher-face-3d-profession-avatars-free-png.png" alt="Profile Picture" class="profile-avatar">
                <h3 class="mt-3">John Doe</h3>
                <p class="text-muted">Web Developer</p>
                <button class="btn btn-primary">Edit Profile</button>
            </div>
            <div class="col-md-8">
                <div class="profile-section">
                    <h4>About Me</h4>
                    <p>Hello! I'm John Doe, a passionate web developer with over 5 years of experience in building responsive and user-friendly websites. I specialize in front-end development using HTML, CSS, JavaScript, and frameworks like Bootstrap.</p>
                    <hr>
                    <h4>Contact Information</h4>
                    <ul class="list-unstyled">
                        <li><strong>Email:</strong> john.doe@example.com</li>
                        <li><strong>Phone:</strong> +1 234 567 890</li>
                        <li><strong>Location:</strong> New York, USA</li>
                    </ul>
                    <hr>
                    <h4>Skills</h4>
                    <ul>
                        <li>HTML, CSS, JavaScript</li>
                        <li>Bootstrap, React</li>
                        <li>UI/UX Design</li>
                        <li>Responsive Web Design</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2025 MyCompany. All rights reserved.
        </div>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>