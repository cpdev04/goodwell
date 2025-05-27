<script src="https://kit.fontawesome.com/0b170b98a9.js" crossorigin="anonymous"></script>
<?php 
$conn = new mysqli("localhost", "root", "", "goodwell");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$message = "";

// Fetch data when a page is selected
$page = "";
$metaTitle = "";
$metaDesc = "";
$metaKey = "";
$page_title = "";
$analytics_code = "";
$canonical_url ="";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['pageSelect'])) {
    $page = $_POST['pageSelect'];

    // Fetch existing SEO data
    $stmt = $conn->prepare("SELECT meta_title, meta_description, meta_keywords, page_title , analytics_code , canonical_url FROM seo_data WHERE page = ?");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error); // Debugging
    }

    $stmt->bind_param("s", $page);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    $stmt->close();

    if ($result) {
        $metaTitle = $result['meta_title'];
        $metaDesc = $result['meta_description'];
        $metaKey = $result['meta_keywords'];
        $page_title = $result['page_title'];
        $analytics_code= $result['analytics_code'];
        $canonical_url= $result['canonical_url'];
    }
}

// Save SEO data
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['saveSEO'])) {
    $page = $_POST['pageSelect'];
    $metaTitle = $_POST['metaTitle'];
    $metaDesc = $_POST['metaDesc'];
    $metaKey = $_POST['metaKey'];
    $page_title = $_POST['pageTitle']; 
    if (isset($_POST['pageSelect'])) {
        if ($_POST['pageSelect'] === 'index.php') {
            $analytics_code= $_POST['Analyticscode'];
            $canonical_url= $_POST['canonical'];
        }
    }

 
    $stmt = $conn->prepare("INSERT INTO seo_data (page, meta_title, meta_description, meta_keywords, page_title ,analytics_code , canonical_url) 
                            VALUES (?, ?, ?, ?, ? ,? ,? ) 
                            ON DUPLICATE KEY UPDATE 
                            meta_title = ?, 
                            meta_description = ?, 
                            meta_keywords = ?, 
                            page_title = ?,
                            analytics_code = ? ,
                            canonical_url = ?");

    if ($stmt === false) {
        die("Prepare failed: " . $conn->error); // Debugging step
    }

    // FIX: Bind all 9 parameters
    $stmt->bind_param("sssssssssssss", $page, $metaTitle, $metaDesc, $metaKey, $page_title,$analytics_code, $canonical_url ,
                                      $metaTitle, $metaDesc, $metaKey, $page_title , $analytics_code, $canonical_url);

    if ($stmt->execute()) {
        $pageName = pathinfo($page,PATHINFO_FILENAME);
        $message = "<div class='alert alert-success'>On-page SEO data was successfully updated for the page <strong style='color:#0975B6;font-size:15px;'> "  . $pageName . "</strong><i style='color:#F33155;font-size:30px;margin-left:6px' class='fa-regular fa-face-smile fa-bounce  fs-2 m-3'></i></div>";

    } else {
        $message = "<div class='alert alert-danger'>Error updating SEO data: " . $stmt->error . "</div>";
    }

    $stmt->close();
}
?>