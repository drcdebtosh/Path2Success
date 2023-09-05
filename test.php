<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Game - API Project</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel = "stylesheet" href = "./css/main.css">
</head>
<body>
<?php require 'partials/_nav.php' ?> 
<section class="common-section bg-color contact-section text-white d-flex p-2">
    <div class = "wrapper mx-auto ">
        <div class = "quiz-container">
            <div class = "quiz-head">
                <h1 class = "quiz-title">Test Yourself</h1>
                <div class = "quiz-score flex">
                    <span id = "correct-score"></span>/<span id = "total-question"></span>
                </div>
            </div>
            <div class = "quiz-body">
                <h2 class = "quiz-question" id = "question"><!--What is the full form of HTTP? --></h2>
                <ul class = "quiz-options">
                    <!-- <li>1. Hyper text transfer package</li>
                    <li>2. Hyper text transfer protocol</li>
                    <li>3. Hyphenation text test program</li>
                    <li>4. None of the above</li> -->
                </ul>
                <div id = "result">
                </div>
            </div>
            <div class = "quiz-foot">
                <button type = "button" id = "check-answer">Check Answer</button>
                <button type = "button" id = "play-again">Test Again?</button>
            </div>
        </div>
    </div>
<!-- Test Section Ends -->
 <!-- Divider -->
 <div class="custom-shape-divider-bottom-1684208460">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                  class="shape-fill"></path>
        </svg>
    </div>

</section>

<!-- footer section -->

<?php require 'partials/_footer.php' ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <!-- <script src="https://apis.google.com/js/platform.js" async defer></script> -->
        <!-- <script src="https://accounts.google.com/gsi/client" async></script> -->
        <script src="js/app.js"></script>
<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>





<!-- Main Javascript (Don't touch it ) -->
    <script src = "js/script.js"></script>
</body>
</html>
