<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard | My Collections</title>
</head>
<style>
    /* Grid View */
.book-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
  gap: 20px;
}

/* List View (toggleable) */
.book-grid.list-view {
  grid-template-columns: 1fr;
}

.book-card {
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  transition: transform 0.2s;
}

.book-card:hover {
  transform: translateY(-5px);
}
</style>
<body>

<?php
include("user-navbar.php");
?>

    <div class="collections-container">
  <!-- Header -->
  <div class="collections-header">
    <h2>My Collections</h2>
    <div class="collections-actions">
      <button class="btn btn-outline-primary" id="viewToggle">
        <i class="fas fa-th"></i> Grid
      </button>
      <input type="text" placeholder="Search collections..." class="search-bar">
    </div>
  </div>

  <!-- Filters -->
  <div class="filters">
    <select class="form-select">
      <option>All Genres</option>
      <option>Fantasy</option>
      <option>Sci-Fi</option>
    </select>
    <select class="form-select">
      <option>Sort by: Recently Added</option>
      <option>Title (A-Z)</option>
      <option>Author</option>
    </select>
  </div>

  <!-- Book Cards -->
  <div class="book-grid">
    <!-- Single Book Card -->
    <div class="book-card">
      <img src="book-cover.jpg" alt="Book Cover" class="book-cover">
      <div class="book-info">
        <h3>The Silent Patient</h3>
        <p class="author">Alex Michaelides</p>
        <span class="genre">Thriller · 2019</span>
        <div class="book-actions">
          <button class="btn-favorite"><i class="far fa-heart"></i></button>
          <select class="status-dropdown">
            <option>Unread</option>
            <option>Reading</option>
            <option>Completed</option>
          </select>
        </div>
      </div>
    </div>
    <!-- Repeat for other books -->
  </div>
</div>
</body>
</html>