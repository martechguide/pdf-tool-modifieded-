
<!DOCTYPE html>
<html lang="en"> 
<?php include('admin/head.php'); ?> 
<?php include('admin/header.php'); ?>
    <link rel="stylesheet" href="css/toolpage.css">
<div class="toolarea">
   <section id="privacy-policy">
  <div class="container">
    <h2>Privacy Policy</h2>
    
    <p><strong>Effective Date:</strong> January 1, 2024</p>
    
    <p>Welcome to PDF HUB, operated by Sarakarihub. We value your privacy and are committed to protecting your personal information. This Privacy Policy explains how we collect, use, and safeguard your information when you visit our website and use our services.</p>
    
    <h3>1. Information We Collect</h3>
    <p>When you visit PDF HUB, we may collect the following types of information:</p>
    <ul>
      <li><strong>Document Files:</strong> When you use our PDF conversion, editing, or processing tools, you upload files that are temporarily processed on our servers. These files are automatically deleted after processing.</li>
      <li><strong>Usage Data:</strong> Information about how you interact with our website, including IP addresses, browser types, referring pages, device information, and the pages you visit on our site.</li>
      <li><strong>Cookies and Tracking Technologies:</strong> Small data files placed on your device that help us enhance your user experience, analyze site traffic, and provide personalized content.</li>
      <li><strong>Contact Information:</strong> If you contact us for support, we may collect your email address and any information you voluntarily provide in your communications.</li>
    </ul>
    
    <h3>2. How We Use Your Information</h3>
    <p>We use the information we collect for the following purposes:</p>
    <ul>
      <li><strong>To Provide Our Services:</strong> Process your documents using our PDF tools, image processing services, and resume creation features.</li>
      <li><strong>To Improve User Experience:</strong> Analyze usage patterns to enhance our website functionality and develop new features.</li>
      <li><strong>To Provide Support:</strong> Respond to your inquiries and provide technical assistance when needed.</li>
      <li><strong>To Ensure Security:</strong> Protect our website and users from fraudulent activities and security threats.</li>
      <li><strong>Government Information Services:</strong> Provide access to Sarakari information and government form assistance.</li>
    </ul>
    
    <h3>3. Data Processing and Storage</h3>
    <p>Your uploaded documents are processed temporarily on our secure servers and are automatically deleted immediately after processing. We do not store, access, or share your documents with any third parties. Our processing is designed to be secure and private.</p>
    
    <h3>4. Cookies and Tracking Technologies</h3>
    <p>We use cookies and similar technologies to:</p>
    <ul>
      <li>Remember your preferences and settings</li>
      <li>Analyze website traffic and usage patterns</li>
      <li>Provide personalized content and advertisements</li>
      <li>Improve website performance and functionality</li>
    </ul>
    <p>You can manage your cookie preferences through your browser settings. However, disabling cookies may affect your ability to use some features of our site.</p>
    
    <h3>5. Data Security</h3>
    <p>We implement robust security measures to protect your information, including:</p>
    <ul>
      <li>SSL encryption for all data transmissions</li>
      <li>Secure server infrastructure</li>
      <li>Regular security audits and updates</li>
      <li>Automatic deletion of processed files</li>
      <li>Access controls and monitoring</li>
    </ul>
    
    <h3>6. Third-Party Services</h3>
    <p>Our website may contain links to third-party websites and services, including government portals and external resources. We are not responsible for the privacy practices of these external sites. We encourage you to review their privacy policies before providing any personal information.</p>
    
    <h3>7. Government Information Services</h3>
    <p>When we provide access to government information and Sarakari services, we may redirect you to official government websites. Your interactions with these sites are governed by their respective privacy policies and terms of service.</p>
    
    <h3>8. Children's Privacy</h3>
    <p>PDF HUB does not knowingly collect personal information from children under the age of 13. If we become aware that we have collected such information, we will take immediate steps to delete it.</p>
    
    <h3>9. International Users</h3>
    <p>Our services are primarily designed for users in India, especially for accessing government information and Sarakari services. Users from other countries can use our PDF and image processing tools, but some government-related features may not be applicable.</p>
    
    <h3>10. Changes to This Privacy Policy</h3>
    <p>We may update this Privacy Policy from time to time to reflect changes in our practices or legal requirements. We will post any updates on this page with a revised effective date. We encourage you to review this policy periodically.</p>
    
    <h3>11. Contact Us</h3>
    <p>If you have any questions or concerns about this Privacy Policy or our data practices, please contact us:</p>
    <ul>
      <li><strong>Email:</strong> <a href="mailto:privacy@sarakarihub.com">privacy@sarakarihub.com</a></li>
      <li><strong>Website:</strong> <a href="https://sarakarihub.com">https://sarakarihub.com</a></li>
      <li><strong>Address:</strong> Sarakarihub, India</li>
    </ul>
    
    <p><strong>Last Updated:</strong> January 1, 2024</p>
  </div>
</section>
</div>
<?php include('admin/ad2.php'); ?>
<br><br>
<?php include('admin/calltoaction.php'); ?>
<?php include('admin/abovefooter.php'); ?> 
<?php include('admin/footer.php'); ?> 
<?php include('admin/network.php'); ?>
<button onclick="scrollToTop()" id="backToTopBtn" title="Go to top">&#8679;</button>
<script async="" defer="" src=""></script>
<script src="js/qg-main.ac82f574.js" defer=""></script>
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
    color: red;
    border: 1px solid red;
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
</style>
</body>
</html>
