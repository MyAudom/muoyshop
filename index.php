<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Muoy Shop</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="img/icon.ico" />
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="home">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand nav-link" href="#">
                <img src="img/logo.jpg"  alt="" style="height: 50px; border-radius: 50%;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#necklacemen">Necklace Men</a></li>
                    <li class="nav-item"><a class="nav-link" href="#necklacewomen">Necklace Women</a></li>
                    <li class="nav-item"><a class="nav-link" href="#bags">Bags</a></li>
                    <li class="nav-item"><a class="nav-link" href="#earrings">Earrings</a></li>
                    <li class="nav-item"><a class="nav-link" href="#glassess">Glasses</a></li>

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class=" py-5" style="background-color:rgb(255, 168, 37);">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shoping in my webside</h1>
                <!-- items_loader --> 
                <div class="items">
                    <div class="items_loader" style="color: #000;">
                        <p>Artwork Have </p>
                        <div class="words">
                            <span class="word">Necklace</span>
                            <span class="word">Bracelet</span>
                            <span class="word">Glasses</span>
                            <span class="word">Earrings</span>
                            <span class="word">Ring</span>
                            <span class="word">Bag</span>
                            <span class="word">Necklace</span>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </header>
    
    <!-- Section-necklacemen-->
    <section id="necklacemen">
        <div class="section-title">
            <span>Men's Necklace</span>
        </div>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                // Sample data for products
                $products = [                        
                    ['img' => 'photo_1_2025-02-17_18-34-04.jpg', 'name' => 'Fancy Product', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'View Product', 'badge' => 'New', 'id' => 001],
                    ['img' => 'photo_28_2025-02-17_18-34-04.jpg', 'name' => 'Fancy Product', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'View Product', 'badge' => 'New', 'id' => 002],
                    ['img' => 'photo_3_2025-02-17_18-34-04.jpg', 'name' => 'Fancy Product', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'View Product', 'badge' => 'New', 'id' => 003],
                    ['img' => 'photo_4_2025-02-17_18-34-04.jpg', 'name' => 'Fancy Product', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'View Product', 'badge' => 'New', 'id' => 004],
                    ['img' => 'photo_5_2025-02-17_18-34-04.jpg', 'name' => 'Fancy Product', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'View Product', 'badge' => 'New', 'id' => 005],
                    ['img' => 'photo_6_2025-02-17_18-34-04.jpg', 'name' => 'Fancy Product', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'View Product', 'badge' => 'New', 'id' => 006],
                    ['img' => 'photo_7_2025-02-17_18-34-04.jpg', 'name' => 'Fancy Product', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'View Product', 'badge' => 'New', 'id' => 007],
                    ['img' => 'photo_9_2025-02-17_18-34-04.jpg', 'name' => 'Fancy Product', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'View Product', 'badge' => 'New', 'id' => 8],
                    ['img' => 'photo_11_2025-02-17_18-34-04.jpg', 'name' => 'Fancy Product', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'View Product', 'badge' => 'New', 'id' => 9],
                    ['img' => 'photo_12_2025-02-17_18-34-04.jpg', 'name' => 'Fancy Product', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'View Product', 'badge' => 'New', 'id' => 0010],
                    ['img' => 'photo_13_2025-02-17_18-34-04.jpg', 'name' => 'Fancy Product', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'View Product', 'badge' => 'New', 'id' => 0011],
                    ['img' => 'photo_14_2025-02-17_18-34-04.jpg', 'name' => 'Fancy Product', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'View Product', 'badge' => 'New', 'id' => 0012],
                    ['img' => 'photo_15_2025-02-17_18-34-04.jpg', 'name' => 'Fancy Product', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'View Product', 'badge' => 'New', 'id' => 0013],
                    ['img' => 'photo_16_2025-02-17_18-34-04.jpg', 'name' => 'Fancy Product', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'View Product', 'badge' => 'New', 'id' => 0014],
                    ['img' => 'photo_17_2025-02-17_18-34-04.jpg', 'name' => 'Fancy Product', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'View Product', 'badge' => 'New', 'id' => 0015],
                    ['img' => 'photo_18_2025-02-17_18-34-04.jpg', 'name' => 'Fancy Product', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'View Product', 'badge' => 'New', 'id' => 0016],
                ];

                foreach ($products as $product) {
                    echo '<div class="col mb-5">
                            <div class="card h-100" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#productModalMen' . $product['id'] . '">';
                    // Display badge if it exists
                    if (isset($product['badge'])) {
                        echo '<div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">' . $product['badge'] . '</div>';
                    }
                    echo '<img class="card-img-top" src="img/necklace/men/' . $product['img'] . '" alt="' . htmlspecialchars($product['name']) . '" />
                            <div class="card-body p-4">
                                <div>
                                    <h5 class="fw-bolder">' . htmlspecialchars($product['name']) . '</h5>
                                    <h6 style="color: grey;">ID :' . htmlspecialchars($product['id']) . '</h6>';
                    // Display original price if it exists
                    if (isset($product['original_price'])) {
                        echo '<span class="text-muted text-decoration-line-through">' . htmlspecialchars($product['original_price']) . '</span> ';
                    }
                    echo htmlspecialchars($product['price']) . '
                                </div>
                            </div>
                        </div>
                    </div>';

                    // Modal for Men's Necklace Product Details
                    echo '<div class="modal fade" id="productModalMen' . $product['id'] . '" tabindex="-1" aria-labelledby="productModalLabelMen' . $product['id'] . '" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="productModalLabelMen' . $product['id'] . '">' . htmlspecialchars($product['name']) . ' - Men\'s Collection</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="img/necklace/men/' . htmlspecialchars($product['img']) . '" class="img-fluid" alt="' . htmlspecialchars($product['name']) . '"/>
                                            </div>
                                            <div class="col-md-6">
                                                <h5>' . htmlspecialchars($product['name']) . '</h5>
                                                <p>' . (isset($product['description']) ? $product['description'] : 'No description available') . '</p>
                                                <p><strong>Price: </strong>' . htmlspecialchars($product['price']) . '</p>';
                                                
                                                if (isset($product['original_price'])) {
                                                    echo '<p><strong>Original Price: </strong><span class="text-muted text-decoration-line-through">' . htmlspecialchars($product['original_price']) . '</span></p>';
                                                }
                                                
                                                echo '<div class="text-center ">
                                                        <div class="social-links">
                                                            <!-- Facebook Button -->
                                                            <a href="https://www.facebook.com/muoyshop" target="_blank">
                                                                <div id="facebook" class="social-btn flex-center" >
                                                                    <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" style="fill: blue;">
                                                                        <path d="M22.675 0h-21.35c-.733 0-1.325.592-1.325 1.325v21.351c0 .733.592 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.794.715-1.794 1.763v2.312h3.587l-.467 3.622h-3.12v9.293h6.116c.733 0 1.325-.591 1.325-1.324v-21.35c0-.733-.592-1.325-1.325-1.325z"></path>
                                                                    </svg>
                                                                    <span>Facebook</span>
                                                                </div>
                                                            </a>

                                                            <!-- Instagram Button -->
                                                            <a href="https://www.instagram.com/muoy_shop" target="_blank">
                                                                <div id="instagram" class="social-btn flex-center">
                                                                    <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" style="fill: #E1306C;">
                                                                        <path d="M7.75 2h8.5A5.25 5.25 0 0 1 21.5 7.25v8.5A5.25 5.25 0 0 1 16.25 21h-8.5A5.25 5.25 0 0 1 2.5 15.75v-8.5A5.25 5.25 0 0 1 7.75 2zm6.645 2.604a1.146 1.146 0 1 0 0 2.292 1.146 1.146 0 0 0 0-2.292zM12 7.25a4.75 4.75 0 1 0 0 9.5 4.75 4.75 0 0 0 0-9.5zm0 1.5a3.25 3.25 0 1 1 0 6.5 3.25 3.25 0 0 1 0-6.5z"/>
                                                                    </svg>
                                                                    <span>Instagram</span>
                                                                </div>
                                                            </a>

                                                            <!-- TikTok Button -->
                                                            <a href="https://www.tiktok.com/@muoy_shop" target="_blank">
                                                                <div id="tiktok" class="social-btn flex-center">
                                                                    <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" style="fill: black;">
                                                                        <path d="M19.589 6.686a4.793 4.793 0 0 1-3.77-4.245V2h-3.445v13.672a2.896 2.896 0 0 1-2.878 2.916 2.897 2.897 0 0 1-2.878-2.916 2.897 2.897 0 0 1 2.878-2.917c.154 0 .307.014.456.043V7.968a6.32 6.32 0 0 0-4.565 1.894 6.336 6.336 0 0 0-1.886 4.51c0 1.703.68 3.343 1.886 4.51a6.322 6.322 0 0 0 4.565 1.893 6.336 6.336 0 0 0 6.337-6.337V9.368a8.177 8.177 0 0 0 3.297.697V6.686z"></path>
                                                                    </svg>
                                                                    <span>TikTok</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Section-necklacewomen-->
    <section id="necklacewomen">
        <div class="section-title">
            <span>Women's Necklace</span>
        </div>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                // Sample data for products
                $products = [
                    ['img' => 'photo_1_2025-02-17_18-49-58.jpg', 'name' => 'Fancy Product', 'price' => '$7.00',  'original_price' => '$10.00', 'action' => 'View options', 'badge' => 'New', 'id' => 1],
                    ['img' => 'photo_2_2025-02-17_18-49-58.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 2],
                    ['img' => 'photo_3_2025-02-17_18-49-58.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 3],
                    ['img' => 'photo_4_2025-02-17_18-49-58.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 4],
                    ['img' => 'photo_5_2025-02-17_18-49-58.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 5],
                    ['img' => 'photo_6_2025-02-17_18-49-58.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 6],
                    ['img' => 'photo_7_2025-02-17_18-49-58.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 7],
                    ['img' => 'photo_8_2025-02-17_18-49-58.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 8],
                    ['img' => 'photo_9_2025-02-17_18-49-58.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 9],
                    ['img' => 'photo_10_2025-02-17_18-49-58.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 10],
                    ['img' => 'photo_11_2025-02-17_18-49-58.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 11],
                    ['img' => 'photo_12_2025-02-17_18-49-58.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 12],
                    ['img' => 'photo_13_2025-02-17_18-49-58.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 13],
                    ['img' => 'photo_14_2025-02-17_18-49-58.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 14],
                    ['img' => 'photo_15_2025-02-17_18-49-58.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 15],
                    ['img' => 'photo_16_2025-02-17_18-49-58.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 16],
                ];

                foreach ($products as $product) {
                    echo '<div class="col mb-5">
                            <div class="card h-100" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#productModalWomen' . $product['id'] . '">';
                    // Display badge if it exists
                    if (isset($product['badge'])) {
                        echo '<div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">' . $product['badge'] . '</div>';
                    }
                    echo '<img class="card-img-top" src="img/necklace/women/' . $product['img'] . '" alt="' . htmlspecialchars($product['name']) . '" />
                            <div class="card-body p-4">
                                <div>
                                    <h5 class="fw-bolder">' . htmlspecialchars($product['name']) . '</h5>
                                    <h6 style="color: grey;">ID :' . htmlspecialchars($product['id']) . '</h6>';
                    // Display original price if it exists
                    if (isset($product['original_price'])) {
                        echo '<span class="text-muted text-decoration-line-through">' . htmlspecialchars($product['original_price']) . '</span> ';
                    }
                    echo htmlspecialchars($product['price']) . '
                                </div>
                            </div>
                        </div>
                    </div>';

                    // Modal for Women's Necklace Product Details
                    echo '<div class="modal fade" id="productModalWomen' . $product['id'] . '" tabindex="-1" aria-labelledby="productModalLabelWomen' . $product['id'] . '" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger text-white">
                                        <h5 class="modal-title" id="productModalLabelWomen' . $product['id'] . '">' . htmlspecialchars($product['name']) . ' - Women\'s Collection</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="img/necklace/women/' . htmlspecialchars($product['img']) . '" class="img-fluid" alt="' . htmlspecialchars($product['name']) . '"/>
                                            </div>
                                            <div class="col-md-6">
                                                <h5>' . htmlspecialchars($product['name']) . '</h5>
                                                <p>' . (isset($product['description']) ? $product['description'] : 'No description available') . '</p>
                                                <p><strong>Price: </strong>' . htmlspecialchars($product['price']) . '</p>';
                                                
                                                if (isset($product['original_price'])) {
                                                    echo '<p><strong>Original Price: </strong><span class="text-muted text-decoration-line-through">' . htmlspecialchars($product['original_price']) . '</span></p>';
                                                }
                                                
                                                echo '<div class="text-center">
                                                        <div class="social-links">
                                                            <!-- Facebook Button -->
                                                            <a href="https://www.facebook.com/muoyshop" target="_blank">
                                                                <div id="facebook" class="social-btn flex-center" >
                                                                    <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" style="fill: blue;">
                                                                        <path d="M22.675 0h-21.35c-.733 0-1.325.592-1.325 1.325v21.351c0 .733.592 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.794.715-1.794 1.763v2.312h3.587l-.467 3.622h-3.12v9.293h6.116c.733 0 1.325-.591 1.325-1.324v-21.35c0-.733-.592-1.325-1.325-1.325z"></path>
                                                                    </svg>
                                                                    <span>Facebook</span>
                                                                </div>
                                                            </a>

                                                            <!-- Instagram Button -->
                                                            <a href="https://www.instagram.com/muoy_shop" target="_blank">
                                                                <div id="instagram" class="social-btn flex-center">
                                                                    <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" style="fill: #E1306C;">
                                                                        <path d="M7.75 2h8.5A5.25 5.25 0 0 1 21.5 7.25v8.5A5.25 5.25 0 0 1 16.25 21h-8.5A5.25 5.25 0 0 1 2.5 15.75v-8.5A5.25 5.25 0 0 1 7.75 2zm6.645 2.604a1.146 1.146 0 1 0 0 2.292 1.146 1.146 0 0 0 0-2.292zM12 7.25a4.75 4.75 0 1 0 0 9.5 4.75 4.75 0 0 0 0-9.5zm0 1.5a3.25 3.25 0 1 1 0 6.5 3.25 3.25 0 0 1 0-6.5z"/>
                                                                    </svg>
                                                                    <span>Instagram</span>
                                                                </div>
                                                            </a>

                                                            <!-- TikTok Button -->
                                                            <a href="https://www.tiktok.com/@muoy_shop" target="_blank">
                                                                <div id="tiktok" class="social-btn flex-center">
                                                                    <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" style="fill: black;">
                                                                        <path d="M19.589 6.686a4.793 4.793 0 0 1-3.77-4.245V2h-3.445v13.672a2.896 2.896 0 0 1-2.878 2.916 2.897 2.897 0 0 1-2.878-2.916 2.897 2.897 0 0 1 2.878-2.917c.154 0 .307.014.456.043V7.968a6.32 6.32 0 0 0-4.565 1.894 6.336 6.336 0 0 0-1.886 4.51c0 1.703.68 3.343 1.886 4.51a6.322 6.322 0 0 0 4.565 1.893 6.336 6.336 0 0 0 6.337-6.337V9.368a8.177 8.177 0 0 0 3.297.697V6.686z"></path>
                                                                    </svg>
                                                                    <span>TikTok</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Section-bags-->
    <section id="bags">
        <div class="section-title">
            <span>Bags</span>
        </div>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                // Sample data for products
                $products = [
                    ['img' => 'photo_1_2025-02-20_14-27-08.jpg', 'name' => 'Fancy Product', 'price' => '$7.00',  'original_price' => '$10.00', 'action' => 'View options', 'badge' => 'New', 'id' => 1],
                    ['img' => 'photo_2_2025-02-20_14-27-08.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 2],
                    ['img' => 'photo_3_2025-02-20_14-27-08.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 3],
                    ['img' => 'photo_4_2025-02-20_14-27-08.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 4],
                    ['img' => 'photo_5_2025-02-20_14-27-08.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 5],
                    ['img' => 'photo_6_2025-02-20_14-27-08.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 6],
                    ['img' => 'photo_7_2025-02-20_14-27-08.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 7],
                    ['img' => 'photo_8_2025-02-20_14-27-08.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 8],
                    ['img' => 'photo_10_2025-02-20_14-27-08.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 10],
                    ['img' => 'photo_11_2025-02-20_14-27-08.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 11],
                    ['img' => 'photo_12_2025-02-20_14-27-08.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 12],
                    ['img' => 'photo_13_2025-02-20_14-27-08.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 13],
                    ['img' => 'photo_14_2025-02-20_14-27-08.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 14],
                    ['img' => 'photo_15_2025-02-20_14-27-08.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 15],
                    ['img' => 'photo_16_2025-02-20_14-27-08.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 16],
                    ['img' => 'photo_17_2025-02-20_14-27-08.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 16],
                    
                ];

                foreach ($products as $product) {
                    echo '<div class="col mb-5">
                            <div class="card h-100" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#productModalBag' . $product['id'] . '">';
                    // Display badge if it exists
                    if (isset($product['badge'])) {
                        echo '<div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">' . $product['badge'] . '</div>';
                    }
                    echo '<img class="card-img-top" src="img/bags/' . $product['img'] . '" alt="' . htmlspecialchars($product['name']) . '" />
                            <div class="card-body p-4">
                                <div>
                                    <h5 class="fw-bolder">' . htmlspecialchars($product['name']) . '</h5>
                                    <h6 style="color: grey;">ID :' . htmlspecialchars($product['id']) . '</h6>';
                    // Display original price if it exists
                    if (isset($product['original_price'])) {
                        echo '<span class="text-muted text-decoration-line-through">' . htmlspecialchars($product['original_price']) . '</span> ';
                    }
                    echo htmlspecialchars($product['price']) . '
                                </div>
                            </div>
                        </div>
                    </div>';

                    // Modal for Bag's Necklace Product Details
                    echo '<div class="modal fade" id="productModalBag' . $product['id'] . '" tabindex="-1" aria-labelledby="productModalLabelBag' . $product['id'] . '" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-warning text-white">
                                        <h5 class="modal-title" id="productModalLabelBag' . $product['id'] . '">' . htmlspecialchars($product['name']) . ' - Bag\'s Collection</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="img/bags/' . htmlspecialchars($product['img']) . '" class="img-fluid" alt="' . htmlspecialchars($product['name']) . '"/>
                                            </div>
                                            <div class="col-md-6">
                                                <h5>' . htmlspecialchars($product['name']) . '</h5>
                                                <p>' . (isset($product['description']) ? $product['description'] : 'No description available') . '</p>
                                                <p><strong>Price: </strong>' . htmlspecialchars($product['price']) . '</p>';
                                                
                                                if (isset($product['original_price'])) {
                                                    echo '<p><strong>Original Price: </strong><span class="text-muted text-decoration-line-through">' . htmlspecialchars($product['original_price']) . '</span></p>';
                                                }
                                                
                                                echo '<div class="text-center">
                                                        <div class="social-links">
                                                            <!-- Facebook Button -->
                                                            <a href="https://www.facebook.com/muoyshop" target="_blank">
                                                                <div id="facebook" class="social-btn flex-center" >
                                                                    <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" style="fill: blue;">
                                                                        <path d="M22.675 0h-21.35c-.733 0-1.325.592-1.325 1.325v21.351c0 .733.592 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.794.715-1.794 1.763v2.312h3.587l-.467 3.622h-3.12v9.293h6.116c.733 0 1.325-.591 1.325-1.324v-21.35c0-.733-.592-1.325-1.325-1.325z"></path>
                                                                    </svg>
                                                                    <span>Facebook</span>
                                                                </div>
                                                            </a>

                                                            <!-- Instagram Button -->
                                                            <a href="https://www.instagram.com/muoy_shop" target="_blank">
                                                                <div id="instagram" class="social-btn flex-center">
                                                                    <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" style="fill: #E1306C;">
                                                                        <path d="M7.75 2h8.5A5.25 5.25 0 0 1 21.5 7.25v8.5A5.25 5.25 0 0 1 16.25 21h-8.5A5.25 5.25 0 0 1 2.5 15.75v-8.5A5.25 5.25 0 0 1 7.75 2zm6.645 2.604a1.146 1.146 0 1 0 0 2.292 1.146 1.146 0 0 0 0-2.292zM12 7.25a4.75 4.75 0 1 0 0 9.5 4.75 4.75 0 0 0 0-9.5zm0 1.5a3.25 3.25 0 1 1 0 6.5 3.25 3.25 0 0 1 0-6.5z"/>
                                                                    </svg>
                                                                    <span>Instagram</span>
                                                                </div>
                                                            </a>

                                                            <!-- TikTok Button -->
                                                            <a href="https://www.tiktok.com/@muoy_shop" target="_blank">
                                                                <div id="tiktok" class="social-btn flex-center">
                                                                    <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" style="fill: black;">
                                                                        <path d="M19.589 6.686a4.793 4.793 0 0 1-3.77-4.245V2h-3.445v13.672a2.896 2.896 0 0 1-2.878 2.916 2.897 2.897 0 0 1-2.878-2.916 2.897 2.897 0 0 1 2.878-2.917c.154 0 .307.014.456.043V7.968a6.32 6.32 0 0 0-4.565 1.894 6.336 6.336 0 0 0-1.886 4.51c0 1.703.68 3.343 1.886 4.51a6.322 6.322 0 0 0 4.565 1.893 6.336 6.336 0 0 0 6.337-6.337V9.368a8.177 8.177 0 0 0 3.297.697V6.686z"></path>
                                                                    </svg>
                                                                    <span>TikTok</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
                ?>
            </div>
        </div>
    </section>

    
    <!-- Section-Earrings-->
    <section id="earrings">
        <div class="section-title">
            <span>Earrings</span>
        </div>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                // Sample data for products
                $products = [
                    ['img' => 'photo_1_2025-02-20_15-39-30.jpg', 'name' => 'Fancy Product', 'price' => '$7.00',  'original_price' => '$10.00', 'action' => 'View options', 'badge' => 'New', 'id' => 1],
                    ['img' => 'photo_2_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 2],
                    ['img' => 'photo_3_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 3],
                    ['img' => 'photo_4_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 4],
                    ['img' => 'photo_5_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 5],
                    ['img' => 'photo_6_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 6],
                    ['img' => 'photo_7_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 7],
                    ['img' => 'photo_8_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 8],
                    ['img' => 'photo_9_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 9],
                    ['img' => 'photo_10_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 10],
                    ['img' => 'photo_11_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 11],
                    ['img' => 'photo_12_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 12],
                    ['img' => 'photo_13_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 13],
                    ['img' => 'photo_14_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 14],
                    ['img' => 'photo_15_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 15],
                    ['img' => 'photo_16_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 16],
                    ['img' => 'photo_17_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 17],
                    ['img' => 'photo_18_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 18],
                    ['img' => 'photo_19_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 19],
                    ['img' => 'photo_20_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 20],
                    ['img' => 'photo_21_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 21],
                    ['img' => 'photo_22_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 22],
                    ['img' => 'photo_23_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 23],
                    ['img' => 'photo_24_2025-02-20_15-39-30.jpg', 'name' => 'Special Item', 'price' => '$7.00', 'original_price' => '$10.00', 'action' => 'Add to cart', 'badge' => 'New', 'id' => 24],
                    
                ];
                
                foreach ($products as $product) {
                    echo '<div class="col mb-5">
                            <div class="card h-100" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#productModalEarring' . $product['id'] . '">';
                    // Display badge if it exists
                    if (isset($product['badge'])) {
                        echo '<div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">' . $product['badge'] . '</div>';
                    }
                    echo '<img class="card-img-top" src="img/earrings/' . $product['img'] . '" alt="' . htmlspecialchars($product['name']) . '" />
                            <div class="card-body p-4">
                                <div>
                                    <h5 class="fw-bolder">' . htmlspecialchars($product['name']) . '</h5>
                                    <h6 style="color: grey;">ID :' . htmlspecialchars($product['id']) . '</h6>';
                    // Display original price if it exists
                    if (isset($product['original_price'])) {
                        echo '<span class="text-muted text-decoration-line-through">' . htmlspecialchars($product['original_price']) . '</span> ';
                    }
                    echo htmlspecialchars($product['price']) . '
                                </div>
                            </div>
                        </div>
                    </div>';

                    // Modal for Earring's Necklace Product Details
                    echo '<div class="modal fade" id="productModalEarring' . $product['id'] . '" tabindex="-1" aria-labelledby="productModalLabelEarring' . $product['id'] . '" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header bg-info text-white">
                                        <h5 class="modal-title" id="productModalLabelEarring' . $product['id'] . '">' . htmlspecialchars($product['name']) . ' - Earring\'s Collection</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="img/earrings/' . htmlspecialchars($product['img']) . '" class="img-fluid" alt="' . htmlspecialchars($product['name']) . '"/>
                                            </div>
                                            <div class="col-md-6">
                                                <h5>' . htmlspecialchars($product['name']) . '</h5>
                                                <p>' . (isset($product['description']) ? $product['description'] : 'No description available') . '</p>
                                                <p><strong>Price: </strong>' . htmlspecialchars($product['price']) . '</p>';
                                                
                                                if (isset($product['original_price'])) {
                                                    echo '<p><strong>Original Price: </strong><span class="text-muted text-decoration-line-through">' . htmlspecialchars($product['original_price']) . '</span></p>';
                                                }
                                                
                                                echo '<div class="text-center">
                                                        <div class="social-links">
                                                            <!-- Facebook Button -->
                                                            <a href="https://www.facebook.com/muoyshop" target="_blank">
                                                                <div id="facebook" class="social-btn flex-center" >
                                                                    <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" style="fill: blue;">
                                                                        <path d="M22.675 0h-21.35c-.733 0-1.325.592-1.325 1.325v21.351c0 .733.592 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.894-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.794.715-1.794 1.763v2.312h3.587l-.467 3.622h-3.12v9.293h6.116c.733 0 1.325-.591 1.325-1.324v-21.35c0-.733-.592-1.325-1.325-1.325z"></path>
                                                                    </svg>
                                                                    <span>Facebook</span>
                                                                </div>
                                                            </a>

                                                            <!-- Instagram Button -->
                                                            <a href="https://www.instagram.com/muoy_shop" target="_blank">
                                                                <div id="instagram" class="social-btn flex-center">
                                                                    <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" style="fill: #E1306C;">
                                                                        <path d="M7.75 2h8.5A5.25 5.25 0 0 1 21.5 7.25v8.5A5.25 5.25 0 0 1 16.25 21h-8.5A5.25 5.25 0 0 1 2.5 15.75v-8.5A5.25 5.25 0 0 1 7.75 2zm6.645 2.604a1.146 1.146 0 1 0 0 2.292 1.146 1.146 0 0 0 0-2.292zM12 7.25a4.75 4.75 0 1 0 0 9.5 4.75 4.75 0 0 0 0-9.5zm0 1.5a3.25 3.25 0 1 1 0 6.5 3.25 3.25 0 0 1 0-6.5z"/>
                                                                    </svg>
                                                                    <span>Instagram</span>
                                                                </div>
                                                            </a>

                                                            <!-- TikTok Button -->
                                                            <a href="https://www.tiktok.com/@muoy_shop" target="_blank">
                                                                <div id="tiktok" class="social-btn flex-center">
                                                                    <svg viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg" style="fill: black;">
                                                                        <path d="M19.589 6.686a4.793 4.793 0 0 1-3.77-4.245V2h-3.445v13.672a2.896 2.896 0 0 1-2.878 2.916 2.897 2.897 0 0 1-2.878-2.916 2.897 2.897 0 0 1 2.878-2.917c.154 0 .307.014.456.043V7.968a6.32 6.32 0 0 0-4.565 1.894 6.336 6.336 0 0 0-1.886 4.51c0 1.703.68 3.343 1.886 4.51a6.322 6.322 0 0 0 4.565 1.893 6.336 6.336 0 0 0 6.337-6.337V9.368a8.177 8.177 0 0 0 3.297.697V6.686z"></path>
                                                                    </svg>
                                                                    <span>TikTok</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>';
                }
                ?>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container"><p class="m-0 text-center text-white">Copyright © Your Website 2025</p></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/styles.js"></script>
</body>
</html>