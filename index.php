
<!DOCTYPE html>
<html lang="en"> 
<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<body class="lang-en-US home  ">
<?php include('admin/head.php'); ?> 
<?php include('admin/header.php'); ?>

<!-- Main Content -->
    <main class="main-content">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <?php include('admin/hero.php'); ?>
                </div>
            </div>
            
            <!-- Convert To PDF Section -->
            <div class="row no-gutters">
                <div class="col-12">
                    <section class="tools-section" style="background: #f8f9fa; padding: 60px 0;">
                        <div class="container">
                            <div class="home-title text-center mb-5">
                                <h1 class="home-title__title" style="color: #E5322D; font-size: 2.5rem; font-weight: 700;">📄 Convert To PDF</h1>
                                <h2 class="home-title__subtitle" style="color: #666; font-size: 1.2rem;">Easily convert any file format to PDF online - 80+ Tools Available</h2>
                            </div>
                            <?php include('admin/tools.php'); ?>
                        </div>
                    </section>
                </div>
            </div>

            <!-- Convert From PDF Section -->
            <div class="row no-gutters">
                <div class="col-12">
                    <section class="tools-section" style="background: #fff; padding: 60px 0;">
                        <div class="container">
                            <div class="home-title text-center mb-5">
                                <h1 class="home-title__title" style="color: #E5322D; font-size: 2.5rem; font-weight: 700;">🔄 Convert From PDF</h1>
                                <h2 class="home-title__subtitle" style="color: #666; font-size: 1.2rem;">Convert PDF files to any format online - 25+ Tools Available</h2>
                            </div>
                            <?php include('admin/tools1.php'); ?>
                        </div>
                    </section>
                </div>
            </div>

            <!-- Edit & Organize Section -->
            <div class="row no-gutters">
                <div class="col-12">
                    <section class="tools-section" style="background: #f8f9fa; padding: 60px 0;">
                        <div class="container">
                            <div class="home-title text-center mb-5">
                                <h1 class="home-title__title" style="color: #E5322D; font-size: 2.5rem; font-weight: 700;">✏️ Edit & Organize PDFs</h1>
                                <h2 class="home-title__subtitle" style="color: #666; font-size: 1.2rem;">Edit, sign, compress, merge, organize PDFs online - 30+ Tools Available</h2>
                            </div>
                            <?php include('admin/tools2.php'); ?>
                        </div>
                    </section>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-12">
                    <?php include('admin/features-block.php'); ?>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12">
                    <?php include('admin/trusted-block.php'); ?>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12">
                    <?php include('admin/calltoaction.php'); ?>
                </div>
            </div>
             <div class="row no-gutters">
                <div class="col-12">
                    <?php include('admin/abovefooter.php'); ?>
                </div>
            </div>
        </div>
    </main>

<?php include('admin/footer.php'); ?> 
<?php include('admin/network.php'); ?>
<button onclick="scrollToTop()" id="backToTopBtn" title="Go to top">&#8679;</button>
  <script async="" defer="" src=""></script>
  <script src="js/qg-main.ac82f574.js" defer=""></script>
  <script src="js/interactive-effects.js" defer=""></script>
  <script>
   // Show the button when the user scrolls down 100px from the top of the document
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    const backToTopBtn = document.getElementById("backToTopBtn");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        backToTopBtn.classList.add("show");
    } else {
        backToTopBtn.classList.remove("show");
    }
}

// Scroll to the top of the document when the button is clicked
function scrollToTop() {
    window.scrollTo({top: 0, behavior: 'smooth'});
}

  </script>
  <style>
      #backToTopBtn {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 99;
    background-color: #E5322D;
    color: white;
    border: none;
    border-radius: 0;
    padding: 15px;
    font-size: 24px;
    cursor: pointer;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s, transform 0.3s;
    opacity: 0;
    visibility: hidden;
}

#backToTopBtn:hover {
    background-color: #0056b3;
    transform: translateY(-3px);
}

#backToTopBtn.show {
    opacity: 1;
    visibility: visible;
    transition: opacity 0.3s;
}

/* Responsive for smaller devices */
@media only screen and (max-width: 600px) {
    #backToTopBtn {
        padding: 10px;
        font-size: 18px;
        bottom: 15px;
        right: 15px;
    }
}

/* Section styling */
.tools-section {
    position: relative;
}

.tools-section .home-title__title {
    margin-bottom: 15px;
}

.tools-section .home-title__subtitle {
    margin-bottom: 0;
}

  </style>
  </body>
</html>
