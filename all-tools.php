
<!DOCTYPE html>
<html lang="en">
<?php include('admin/head.php'); ?>
<?php include('admin/header.php'); ?>

<style>
.tools-page {
    padding: 40px 20px;
    max-width: 1200px;
    margin: 0 auto;
}

.tools-section {
    margin-bottom: 50px;
}

.section-title {
    font-size: 2rem;
    color: #1c62e6;
    border-bottom: 3px solid #1c62e6;
    padding-bottom: 10px;
    margin-bottom: 30px;
}

.tools-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.tool-card {
    background: white;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    padding: 20px;
    text-align: center;
    transition: all 0.3s ease;
    text-decoration: none;
    color: #333;
}

.tool-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(28, 98, 230, 0.15);
    text-decoration: none;
    color: #1c62e6;
}

.tool-icon {
    font-size: 3rem;
    color: #1c62e6;
    margin-bottom: 15px;
}

.tool-title {
    font-size: 1.2rem;
    font-weight: 600;
    margin-bottom: 10px;
}

.tool-description {
    font-size: 0.9rem;
    color: #666;
    line-height: 1.4;
}
</style>

<div class="tools-page">
    <h1 style="text-align: center; margin-bottom: 50px;">All PDF Tools</h1>
    
    <!-- Convert TO PDF -->
    <div class="tools-section">
        <h2 class="section-title">Convert to PDF</h2>
        <div class="tools-grid">
            <a href="jpg-to-pdf.php" class="tool-card">
                <div class="tool-icon">📄</div>
                <div class="tool-title">JPG to PDF</div>
                <div class="tool-description">Convert JPG images to PDF format</div>
            </a>
            <a href="png-to-pdf.php" class="tool-card">
                <div class="tool-icon">📄</div>
                <div class="tool-title">PNG to PDF</div>
                <div class="tool-description">Convert PNG images to PDF format</div>
            </a>
            <a href="word-to-pdf-convert.php" class="tool-card">
                <div class="tool-icon">📄</div>
                <div class="tool-title">Word to PDF</div>
                <div class="tool-description">Convert Word documents to PDF</div>
            </a>
            <a href="excel-to-pdf-convert.php" class="tool-card">
                <div class="tool-icon">📄</div>
                <div class="tool-title">Excel to PDF</div>
                <div class="tool-description">Convert Excel files to PDF</div>
            </a>
            <a href="html-to-pdf.php" class="tool-card">
                <div class="tool-icon">📄</div>
                <div class="tool-title">HTML to PDF</div>
                <div class="tool-description">Convert HTML pages to PDF</div>
            </a>
            <a href="text-to-pdf.php" class="tool-card">
                <div class="tool-icon">📄</div>
                <div class="tool-title">Text to PDF</div>
                <div class="tool-description">Convert text files to PDF</div>
            </a>
        </div>
    </div>

    <!-- Convert FROM PDF -->
    <div class="tools-section">
        <h2 class="section-title">Convert from PDF</h2>
        <div class="tools-grid">
            <a href="pdf-to-jpg.php" class="tool-card">
                <div class="tool-icon">🖼️</div>
                <div class="tool-title">PDF to JPG</div>
                <div class="tool-description">Convert PDF pages to JPG images</div>
            </a>
            <a href="pdf-to-png.php" class="tool-card">
                <div class="tool-icon">🖼️</div>
                <div class="tool-title">PDF to PNG</div>
                <div class="tool-description">Convert PDF pages to PNG images</div>
            </a>
            <a href="pdf-to-word-convert.php" class="tool-card">
                <div class="tool-icon">📝</div>
                <div class="tool-title">PDF to Word</div>
                <div class="tool-description">Convert PDF to Word documents</div>
            </a>
            <a href="pdf-to-excel.php" class="tool-card">
                <div class="tool-icon">📊</div>
                <div class="tool-title">PDF to Excel</div>
                <div class="tool-description">Convert PDF to Excel files</div>
            </a>
            <a href="pdf-to-text.php" class="tool-card">
                <div class="tool-icon">📝</div>
                <div class="tool-title">PDF to Text</div>
                <div class="tool-description">Extract text from PDF files</div>
            </a>
            <a href="pdf-to-html.php" class="tool-card">
                <div class="tool-icon">🌐</div>
                <div class="tool-title">PDF to HTML</div>
                <div class="tool-description">Convert PDF to HTML format</div>
            </a>
        </div>
    </div>

    <!-- Edit & Organize -->
    <div class="tools-section">
        <h2 class="section-title">Edit & Organize</h2>
        <div class="tools-grid">
            <a href="merge-pdf-text.php" class="tool-card">
                <div class="tool-icon">🔗</div>
                <div class="tool-title">Merge PDF</div>
                <div class="tool-description">Combine multiple PDF files into one</div>
            </a>
            <a href="split-pdf.php" class="tool-card">
                <div class="tool-icon">✂️</div>
                <div class="tool-title">Split PDF</div>
                <div class="tool-description">Split PDF into separate pages</div>
            </a>
            <a href="compress-pdf.php" class="tool-card">
                <div class="tool-icon">🗜️</div>
                <div class="tool-title">Compress PDF</div>
                <div class="tool-description">Reduce PDF file size</div>
            </a>
            <a href="edit-pdf.php" class="tool-card">
                <div class="tool-icon">✏️</div>
                <div class="tool-title">Edit PDF</div>
                <div class="tool-description">Edit PDF content and pages</div>
            </a>
            <a href="crop-pdf.php" class="tool-card">
                <div class="tool-icon">✂️</div>
                <div class="tool-title">Crop PDF</div>
                <div class="tool-description">Crop PDF pages to desired size</div>
            </a>
            <a href="resize-pdf.php" class="tool-card">
                <div class="tool-icon">📏</div>
                <div class="tool-title">Resize PDF</div>
                <div class="tool-description">Change PDF page dimensions</div>
            </a>
        </div>
    </div>

    <!-- Security & More -->
    <div class="tools-section">
        <h2 class="section-title">Security & More</h2>
        <div class="tools-grid">
            <a href="add-watermark-pdf.php" class="tool-card">
                <div class="tool-icon">🏷️</div>
                <div class="tool-title">Add Watermark</div>
                <div class="tool-description">Add watermark to PDF pages</div>
            </a>
            <a href="add-page-number.php" class="tool-card">
                <div class="tool-icon">📝</div>
                <div class="tool-title">Add Page Numbers</div>
                <div class="tool-description">Add page numbers to PDF</div>
            </a>
            <a href="extract-pdf-images.php" class="tool-card">
                <div class="tool-icon">🖼️</div>
                <div class="tool-title">Extract Images</div>
                <div class="tool-description">Extract images from PDF files</div>
            </a>
            <a href="count-pdf-pages.php" class="tool-card">
                <div class="tool-icon">🔢</div>
                <div class="tool-title">Count Pages</div>
                <div class="tool-description">Count number of pages in PDF</div>
            </a>
            <a href="analyze-pdf.php" class="tool-card">
                <div class="tool-icon">🔍</div>
                <div class="tool-title">Analyze PDF</div>
                <div class="tool-description">Analyze PDF file properties</div>
            </a>
            <a href="grayscale-pdf.php" class="tool-card">
                <div class="tool-icon">⚫</div>
                <div class="tool-title">Grayscale PDF</div>
                <div class="tool-description">Convert PDF to grayscale</div>
            </a>
        </div>
    </div>
</div>

<?php include('admin/footer.php'); ?>
</html>
