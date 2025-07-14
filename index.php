<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DelphianLogic in Action</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Titillium+Web:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --brand-secondary: #11324d;
            --brand-fourth: #64b4c8;
            --gray-white: #f6f6f6;
            --gray-dark: #424242;
            --gray-light: #adadad;
            --br-5: 5px;
            --pad-2: 10px;
            --pad-3: 12px;
            --gap-2: 10px;
            --gap-3: 15px;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: var(--brand-secondary);
            color: #ffffff;
            margin: 0;
            padding: 0;
        }

        h1, h2 {
            font-family: 'Titillium Web', sans-serif;
        }

        .header {
            text-align: center;
            padding: var(--pad-3);
            background-color: var(--brand-secondary);
            color: #ffffff;
        }

        .header h1 {
            font-size: 40px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: var(--gap-2);
        }

        .header p {
            font-size: 14px;
            color: var(--gray-light);
            line-height: 1.625;
            max-width: 600px;
            margin: 0 auto;
        }

        .desktop-layout {
            display: flex;
            padding: var(--pad-3);
            gap: var(--gap-3);
            align-items: stretch;
            height: calc(100vh - 80px);
        }

        .tab-section {
            background-color: var(--gray-white);
            color: var(--gray-dark);
            border-radius: var(--br-5);
            padding: var(--pad-2);
            width: 20%;
            min-height: 400px;
            display: flex;
            flex-direction: column;
            overflow-y: auto;
        }

        .nav-link {
            color: var(--gray-dark);
            padding: var(--pad-2);
            border-radius: var(--br-5);
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: var(--gap-2);
            margin-bottom: var(--gap-2);
            transition: background-color 0.3s;
            text-decoration: none;
        }

        .nav-link.active {
            background-color: var(--brand-fourth);
            color: #ffffff;
        }

        .nav-link img {
            width: 20px;
            height: 20px;
        }

        .slider-section {
            background-color: var(--brand-fourth);
            color: #ffffff;
            padding: var(--pad-3);
            border-radius: var(--br-5);
            width: 40%;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .slider-section small {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .slider-section h2 {
            font-size: 24px;
            font-weight: 600;
            margin: var(--gap-2) 0;
            line-height: 1.3;
        }

        .slider-section p {
            font-size: 16px;
            margin-bottom: var(--gap-2);
            line-height: 1.625;
        }

        .slider-section a {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
            display: inline-flex;
            align-items: center;
            gap: var(--gap-2);
        }

        .slider-section a span {
            font-size: 14px;
        }

        .image-section {
            width: 40%;
            padding: var(--pad-2);
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--gray-white);
            border-radius: var(--br-5);
        }

        .image-section img {
            width: 100%;
            height: 100%;
            border-radius: var(--br-5);
            aspect-ratio: 1 / 1;
            object-fit: cover;
            max-height: 400px;
            border: 2px solid var(--brand-fourth);
        }

        .carousel-indicators {
            bottom: -30px;
        }

        .carousel-indicators button {
            background-color: var(--gray-light);
            width: 8px;
            height: 8px;
            border-radius: 50%;
        }

        .carousel-indicators .active {
            background-color: #ffffff;
        }

        .carousel-control-prev, .carousel-control-next {
            width: 5%;
            opacity: 0.7;
        }

        .carousel-control-prev:hover, .carousel-control-next:hover {
            opacity: 1;
        }

        .accordion-button {
            background-color: var(--gray-white);
            color: var(--gray-dark);
            font-size: 14px;
            padding: var(--pad-2);
            border-radius: var(--br-5);
            display: flex;
            align-items: center;
            gap: var(--gap-2);
            width: 100%;
        }

        .accordion-button:not(.collapsed) {
            background-color: var(--gray-white);
            color: var(--gray-dark);
        }

        .accordion-item {
            margin-bottom: var(--gap-2);
        }

        .carousel-item {
            min-height: 300px;
            background-size: cover;
            background-position: center;
        }

        @media (max-width: 991px) {
            .desktop-layout {
                display: block;
            }
            .tab-section, .slider-section, .image-section {
                width: 100%;
                margin: var(--gap-2) 0;
            }
            .tab-section {
                min-height: auto;
            }
            .accordion-button {
                font-size: 13px;
            }
            .slider-section {
                padding: var(--pad-2);
                background-color: rgba(100, 180, 200, 0.9); /* Transparent teal */
            }
            .slider-section h2 {
                font-size: 18px;
            }
            .slider-section p, .slider-section a {
                font-size: 14px;
            }
            .image-section {
                display: none;
            }
            .carousel-item {
                min-height: 200px;
                background-size: cover;
                background-position: center;
            }
            .accordion-body {
                padding: 0;
            }
            .slider-section a span {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="header">
            <h1>DelphianLogic in Action</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo</p>
        </div>

        <?php
        // Include config.php with absolute path
        $configPath = __DIR__ . '/config.php';
        if (file_exists($configPath)) {
            include $configPath;
        } else {
            die("Error: config.php not found at $configPath");
        }

        // Initialize $data with an empty array as fallback
        $data = [];

        // Fetch data from the database
        if (isset($pdo) && $pdo instanceof PDO) {
            try {
                $stmt = $pdo->query("SELECT * FROM content");
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                die("Query failed: " . $e->getMessage());
            }
        } else {
            die("Error: PDO connection not established. Check config.php.");
        }
        ?>

        <!-- Desktop View -->
        <div class="desktop-layout d-none d-lg-flex">
            <div class="tab-section">
                <ul class="nav flex-column" id="contentTabs" role="tablist">
                    <?php if (!empty($data)): ?>
                        <?php foreach ($data as $index => $item): ?>
                            <li class="nav-item">
                                <a class="nav-link <?php echo $index === 0 ? 'active' : ''; ?>" id="tab-<?php echo htmlspecialchars($item['category']); ?>" data-bs-toggle="tab" href="#content-<?php echo htmlspecialchars($item['category']); ?>" role="tab" aria-controls="content-<?php echo htmlspecialchars($item['category']); ?>" aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                                    <img src="<?php echo htmlspecialchars($item['svg_path']); ?>" alt="<?php echo htmlspecialchars($item['category']); ?> Icon">
                                    <?php echo htmlspecialchars($item['category']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <li>No categories available</li>
                    <?php endif; ?>
                </ul>
            </div>

            <div class="tab-content slider-section">
                <?php if (!empty($data)): ?>
                    <?php foreach ($data as $index => $item): ?>
                        <div class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?>" id="content-<?php echo htmlspecialchars($item['category']); ?>" role="tabpanel" aria-labelledby="tab-<?php echo htmlspecialchars($item['category']); ?>">
                            <div id="carousel-<?php echo htmlspecialchars($item['category']); ?>" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000"> <!-- Auto-slide enabled -->
                                <div class="carousel-indicators">
                                    <?php for ($i = 0; $i < 3; $i++): ?>
                                        <button type="button" data-bs-target="#carousel-<?php echo htmlspecialchars($item['category']); ?>" data-bs-slide-to="<?php echo $i; ?>" <?php echo $i === 0 ? 'class="active" aria-current="true" aria-label="Slide 1"' : 'aria-label="Slide ' . ($i + 1) . '"'; ?>></button>
                                    <?php endfor; ?>
                                </div>
                                <div class="carousel-inner">
                                    <?php for ($i = 0; $i < 3; $i++): ?>
                                        <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                                            <small><?php echo htmlspecialchars($item['subtitle']); ?></small>
                                            <h2><?php echo htmlspecialchars($item['title']); ?></h2>
                                            <p><?php echo htmlspecialchars($item['description']); ?></p>
                                            <a href="#">Learn More <span>→</span></a>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel-<?php echo htmlspecialchars($item['category']); ?>" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel-<?php echo htmlspecialchars($item['category']); ?>" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No content available</p>
                <?php endif; ?>
            </div>

            <div class="image-section">
                <?php if (!empty($data)): ?>
                    <img src="<?php echo htmlspecialchars($data[0]['image_path']); ?>" alt="Content Image" id="mainImage">
                <?php else: ?>
                    <p>No image available</p>
                <?php endif; ?>
            </div>
        </div>

        <!-- Mobile View -->
        <div class="mobile-view d-lg-none">
            <div class="accordion" id="accordionContent">
                <?php if (!empty($data)): ?>
                    <?php foreach ($data as $index => $item): ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-<?php echo htmlspecialchars($item['category']); ?>">
                                <button class="accordion-button <?php echo $index === 0 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo htmlspecialchars($item['category']); ?>" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-controls="collapse-<?php echo htmlspecialchars($item['category']); ?>">
                                    <img src="<?php echo htmlspecialchars($item['svg_path']); ?>" alt="<?php echo htmlspecialchars($item['category']); ?> Icon">
                                    <?php echo htmlspecialchars($item['category']); ?>
                                </button>
                            </h2>
                            <div id="collapse-<?php echo htmlspecialchars($item['category']); ?>" class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>" aria-labelledby="heading-<?php echo htmlspecialchars($item['category']); ?>" data-bs-parent="#accordionContent">
                                <div class="accordion-body">
                                    <div id="carousel-mobile-<?php echo htmlspecialchars($item['category']); ?>" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000"> <!-- Auto-slide enabled -->
                                        <div class="carousel-indicators">
                                            <?php for ($i = 0; $i < 3; $i++): ?>
                                                <button type="button" data-bs-target="#carousel-mobile-<?php echo htmlspecialchars($item['category']); ?>" data-bs-slide-to="<?php echo $i; ?>" <?php echo $i === 0 ? 'class="active" aria-current="true" aria-label="Slide 1"' : 'aria-label="Slide ' . ($i + 1) . '"'; ?>></button>
                                            <?php endfor; ?>
                                        </div>
                                        <div class="carousel-inner">
                                            <?php for ($i = 0; $i < 3; $i++): ?>
                                                <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>" style="background-image: url('<?php echo htmlspecialchars($item['image_path']); ?>');">
                                                    <div class="slider-section">
                                                        <small><?php echo htmlspecialchars($item['subtitle']); ?></small>
                                                        <h2><?php echo htmlspecialchars($item['title']); ?></h2>
                                                        <p><?php echo htmlspecialchars($item['description']); ?></p>
                                                        <a href="#">Learn More <span>→</span></a>
                                                    </div>
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-mobile-<?php echo htmlspecialchars($item['category']); ?>" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carousel-mobile-<?php echo htmlspecialchars($item['category']); ?>" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No categories available</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            const contentData = <?php echo json_encode($data ?? []); ?>;

            function updateActiveState(category, index) {
                // Update tab
                $('#contentTabs a').removeClass('active');
                $(`#tab-${category}`).addClass('active');
                // Update tab-pane
                $('.tab-pane').removeClass('show active');
                $(`#content-${category}`).addClass('show active');
                // Update image
                const item = contentData[index] || contentData[0];
                if (item) {
                    $('#mainImage').attr('src', item.image_path);
                }
            }

            function updateImageAndTab(category) {
                const item = contentData.find(d => d.category === category);
                if (item) {
                    $('#mainImage').attr('src', item.image_path);
                    const carousel = $(`#carousel-${category}`);
                    if (carousel.length) {
                        carousel.on('slid.bs.carousel', function() {
                            const activeIndex = $(this).find('.carousel-item.active').index();
                            updateActiveState(category, activeIndex);
                        });
                        // Sync tab on slider button clicks and indicators
                        carousel.find('.carousel-control-prev, .carousel-control-next, .carousel-indicators button').on('click', function() {
                            const activeIndex = carousel.find('.carousel-item.active').index();
                            updateActiveState(category, activeIndex);
                        });
                    }
                }
            }

            // Initial load
            const firstCategory = contentData[0]?.category;
            if (firstCategory) {
                updateImageAndTab(firstCategory);
            }

            // Update image and tab on tab change
            $('#contentTabs a').on('shown.bs.tab', function(e) {
                const category = $(this).attr('href').replace('#content-', '');
                updateImageAndTab(category);
            });

            // Update image on accordion change (mobile)
            $('.accordion-button').on('shown.bs.collapse', function() {
                const category = $(this).data('bs-target').replace('#collapse-', '');
                updateImageAndTab(category);
            });
        });
    </script>
</body>
</html>