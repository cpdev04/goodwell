<?php
// Database connection
$conn = new mysqli("localhost", "blog_user", "blog@post09876", "srisai_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT meta_title, meta_description, meta_keywords , page_title , analytics_code , canonical_url FROM seo_data WHERE page = ?");
$stmt->bind_param("s", $page);
$stmt->execute();
$result = $stmt->get_result()->fetch_assoc();
$stmt->close();

// Assign values (default to empty if no data found)
$MetaTitle = $result['meta_title'] ?? 'Default Title';
$MetaDesc = $result['meta_description'] ?? 'Default Description';
$MetaKey = $result['meta_keywords'] ?? 'Default Keywords';
$page_title = $result['page_title'] ?? 'Default page title';
$analytics_code = $result['analytics_code'] ?? 'Default code';
$canonical_url = $result['canonical_url'] ?? 'Default url';


// Close the database connection
$conn->close();
?>