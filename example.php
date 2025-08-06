
<!DOCTYPE html>
<html lang="th">
<head>
 <meta charset="UTF-8">
 <title>ข้อมูลนักเรียน</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 <style>
   body {
     min-height: 100vh;
     display: flex;
     flex-direction: column;
   }
   main {
     flex: 1;
   }
   .profile-img {
     width: 150px;
     height: 150px;
     object-fit: cover;
     border-radius: 0%;
     border: 4px solid #6c757d;
   }
   .label-title {
     font-weight: bold;
     color: #495057;
   }
 </style>
</head>
<body>


 <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark $blue-500">
   <div class="container">
     <a class="navbar-brand" href="#">TPNWorkshop</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNav">
       <ul class="navbar-nav ms-auto">
         <li class="nav-item"><a class="nav-link active" href="index.php">หน้าแรก</a></li>
         <li class="nav-item"><a class="nav-link" href="#">เกี่ยวกับ</a></li>
         <li class="nav-item"><a class="nav-link" href="#">ติดต่อ</a></li>
       </ul>
     </div>
   </div>
 </nav>


 <!-- Main Content -->
 <main class="container my-5">
   <div class="row justify-content-center">
     <div class="col-md-6 text-center">
       <img src="bootstrap/image/12345.jpg" alt="Profile Image" class="profile-img mb-3">
       <h2>ข้อมูลนักเรียน</h2>
       <hr>
       <div class="text-start">
         <p><span class="label-title">Firstname: </span>Chinnapat</p>
         <p><span class="label-title">Lastname: </span>Nuchanong</p>
         <p><span class="label-title">Grade: </span> Grade 10</p>
         <p><span class="label-title">Sex: </span>Famale</p>
         <p><span class="label-title">Age: </span>15 years</p>
         <p><span class="label-title">Email: </span>31495@rt.ac.th</p>
       </div>
     </div>
   </div>
 </main>


 <!-- Footer -->
 <footer class="bg-light text-center py-3">
   <div class="container">
     <span class="text-muted">© 2025 TPNWorkshop. สงวนลิขสิทธิ์</span>
   </div>
 </footer>


 <!-- Bootstrap JS -->
 <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>




link โหลดรูปตัวอย่าง : 
https://drive.google.com/file/d/1NVeRIPX38n7OV6HxyCWwn3CwELXI_b4h/view?usp=drive_link

นำรูปไปวางที่ folder bootstrap / images / 
