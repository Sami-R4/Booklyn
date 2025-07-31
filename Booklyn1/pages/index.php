<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Booklyn | Home</title>

  <!-- External CSS -->
   <link rel="stylesheet" href="../assets/css/main.css">
  
   <!-- AOS CSS -->
   <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

</head>
<body>
  <?php 
  include("../includes/navbar.php");
  include("../includes/header.php");
  include("../includes/loader.php");
   ?>

  <section class="header">
    <h1 data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">Welcome to Booklyn</h1>
    <h5 data-aos="fade-in" data-aos-delay="200" data-aos-duration="1000">Your gateway to books across libraries</h5>
    <div class="search-bar" data-aos="flip-right" data-aos-delay="400" data-aos-duration="1000">
      <input type="text" placeholder="Search for books..." />
      <button class="search-btn">Search <i class="fa fa-search"></i></button>
    </div>
  </section>

  <!-- Featured Books Section -->
  <section class="container my-5">
    <h2 class="section-title" data-aos="fade-down-left" data-aos-delay="100" data-aos-duration="1000">Featured Books</h2>
    <div class="grid">
      <?php
        $books = [
          ['id' => 1,
          'library' => 'Public Library',
          'title' => 'The Alchemist', 
          'author' => 'Paulo Coelho', 
          'img' => 'alchemist.jpeg', 
          'price' => 'XAF 5000', 
          'rating' => 4.5,
          'publishedYear' => '2020', 
          'pages' => '300',
          'descTitle' => 'Red Wolf is a dark, action-packed fantasy about a girl who will do anything to protect the ones she loves—even if it means becoming a monster herself.',
          'descBody' => 'When Adeles village is attacked by werewolves, she discovers she has the power to transform into a wolf. Now she must learn to control her new abilities before she loses herself to the beast within. This book will help you identify your strengths, align your actions with your values, and create a life of fulfillment and purpose.',
          'tags' => ['Horror']
        ],
          ['id' => 2,
          'library' => 'Public Library',
          'title' => 'Red Wolf', 
          'author' => 'Rachel Vincent', 
          'img' => 'redwolf.jpeg', 
          'price' => 'XAF 10000', 
          'rating' => 4.5,
          'publishedYear' => '2020', 
          'pages' => '300',
          'descTitle' => 'Red Wolf is a dark, action-packed fantasy about a girl who will do anything to protect the ones she loves—even if it means becoming a monster herself.',
          'descBody' => 'When Adeles village is attacked by werewolves, she discovers she has the power to transform into a wolf. Now she must learn to control her new abilities before she loses herself to the beast within. This book will help you identify your strengths, align your actions with your values, and create a life of fulfillment and purpose.',
          'tags' => ['Horror', 'Fiction']
        ],
          ['id' => 3,
          'library' => 'Public Library',
          'title' => 'Purpose', 
          'author' => 'Samuel Wilkinson', 
          'img' => 'purpose.jpeg', 
          'price' => 'XAF 2000', 
          'rating' => 2.5,
          'publishedYear' => '2020', 
          'pages' => '300',
          'descTitle' => 'Red Wolf is a dark, action-packed fantasy about a girl who will do anything to protect the ones she loves—even if it means becoming a monster herself.',
          'descBody' => 'When Adeles village is attacked by werewolves, she discovers she has the power to transform into a wolf. Now she must learn to control her new abilities before she loses herself to the beast within. This book will help you identify your strengths, align your actions with your values, and create a life of fulfillment and purpose.',
          'tags' => ['Self Building']
        ],
          ['id' => 4,
          'library' => 'Public Library',
          'title' => 'How to Focus', 
          'author' => 'Adam Lee', 
          'img' => 'howtofocus.jpeg', 
          'price' => 'XAF 8000', 
          'rating' => 3.5,
          'publishedYear' => '2020', 
          'pages' => '300',
          'descTitle' => 'Red Wolf is a dark, action-packed fantasy about a girl who will do anything to protect the ones she loves—even if it means becoming a monster herself.',
          'descBody' => 'When Adeles village is attacked by werewolves, she discovers she has the power to transform into a wolf. Now she must learn to control her new abilities before she loses herself to the beast within. This book will help you identify your strengths, align your actions with your values, and create a life of fulfillment and purpose.',
          'tags' => ['Motivation']
        ],
          ['id' => 5,
          'library' => 'Public Library',
          'title' => 'Black Hearts', 
          'author' => 'Jenna Wood', 
          'img' => 'blackhearts.jpeg', 
          'price' => 'XAF 9000', 
          'rating' => 4.0,
          'publishedYear' => '2020', 
          'pages' => '300',
          'descTitle' => 'Red Wolf is a dark, action-packed fantasy about a girl who will do anything to protect the ones she loves—even if it means becoming a monster herself.',
          'descBody' => 'When Adeles village is attacked by werewolves, she discovers she has the power to transform into a wolf. Now she must learn to control her new abilities before she loses herself to the beast within. This book will help you identify your strengths, align your actions with your values, and create a life of fulfillment and purpose.',
          'tags' => ['Fiction']
        ],
          ['id' => 6,
          'library' => 'Public Library',
          'title' => 'The Psychology of Money', 
          'author' => 'Morgan Housel', 
          'img' => 'psychologyofmoney.jpeg', 
          'price' => 'XAF 7000', 
          'rating' => 4.5,
          'publishedYear' => '2020', 
          'pages' => '300',
          'descTitle' => 'Red Wolf is a dark, action-packed fantasy about a girl who will do anything to protect the ones she loves—even if it means becoming a monster herself.',
          'descBody' => 'When Adeles village is attacked by werewolves, she discovers she has the power to transform into a wolf. Now she must learn to control her new abilities before she loses herself to the beast within. This book will help you identify your strengths, align your actions with your values, and create a life of fulfillment and purpose.',
          'tags' => ['Motivation', 'Self Building']
        ]
        ];
        foreach ($books as $book) {
          echo '<div class="card" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <img src="../assets/img/' . $book['img'] . '" class="card-img-top" alt="Book Image">
            <div class="card-body">
              <div class="mb-2">';
                foreach ($book['tags'] as $tag) {
                  echo '<span class="category-badge me-1 px-2 py-1">' . ucfirst($tag) . '</span>';
                }
          echo '</div>
              <h5 class="card-title">' . $book['title'] . '</h5>
              <p class="card-text text-muted">By ' . $book['author'] . '</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="fw-bold h6">'.$book['price'].'</span>
                <div class="text-warning">';
                  $fullStars = floor($book['rating']);
                  $half = $book['rating'] - $fullStars >= 0.5;
                  for ($i = 0; $i < $fullStars; $i++) echo '<i class="fa fa-star"></i>';
                  if ($half) echo '<i class="fa fa-star-half-alt"></i>';
                  echo ' <small class="text-muted">(' . $book['rating'] . ')</small>
                </div>
              </div>
            </div>
            <div class="card-footer d-flex justify-content-between bg-light">
              <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bookModal'.$book['id'].'">Details</button>
            </div>
          </div>';

          echo '            <div class="modal fade" id="bookModal'.$book['id'].'" tabindex="-1" aria-labelledby="bookModalLabel'.$book['id'].'" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookModal">'.$book['title'].'</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4">
            <img src="../assets/img/'.$book['img'].'" class="img-fluid" alt="Red Wolf cover">
          </div>
          <div class="col-md-8">
            <p><strong>Library:</strong> '.$book['library'].'</p>
            <p><strong>Author:</strong> '.$book['author'].'</p>
            <p><strong>Price:</strong> '.$book['price'].'</p>
            <p><strong>Published:</strong> '.$book['publishedYear'].'</p>
            <p><strong>Pages:</strong> '.$book['pages'].'</p>
            <hr>
            <p><strong>Description:</strong></p>
            <p>'.$book['descTitle'].'</p>
            <p>'.$book['descBody'].'</p>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Add to Cart</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';
        }
      ?>
      <span style="position: relative; left: 25em;"><a href="books.php"><button class="px-4 py-2 border-0 shadow rounded-pill cta-btn">Browse More Books <i class="fa-solid fa-book"></i></button></a></span>
    </div>
  </section>

  <!-- Explore Libraries Section -->
  <section class="container my-5">
    <h2 class="section-title" data-aos="fade-in" data-aos-delay="100" data-aos-duration="1000">Explore Libraries</h2>
    <p class="ms-3" data-aos="fade-down" data-aos-delay="300" data-aos-duration="1000">Find the best libraries</p>
    <div class="d-flex flex-column gap-4 mt-4">
      <?php
        $libraries = [
          ['name' => 'Online Library', 'location' => 'Virtual', 'img' => 'library4.jpeg'],
          ['name' => 'Public Library', 'location' => 'Yaoundé', 'img' => 'library2.jpeg'],
          ['name' => 'NBL Library', 'location' => 'Bonaberi', 'img' => 'library3.jpeg'],
        ];
        foreach ($libraries as $lib) {
          echo '<div class="library-card" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1000">
            <img src="../assets/img/' . $lib['img'] . '" alt="Library Image">
            <div class="info">
              <h5 class="fw-bold">' . $lib['name'] . '</h5>
              <p class="text-muted"><i class="fa-solid fa-location-dot me-2"></i>' . $lib['location'] . '</p>
            </div>
            <div class="btns">
              <button class="btn btn-outline-primary btn-sm ms-4 mb-3">Add to Favorites <i class="fa-regular fa-heart"></i></button>
            </div>
            </div>';
          }
          ?>
          <center><a href="library.php"><button class="px-4 py-2 border-0 shadow rounded-pill cta-btn">Browse More Libraries    <i class="fa-solid fa-book-open"></i></button></a></center>
    </div>
  </section>

  <?php include("../includes/footer.php"); ?>


  <!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/bootstrapPopper.js"></script>
<script>
  AOS.init({
    once: true
  });
</script>

</body>
</html>
