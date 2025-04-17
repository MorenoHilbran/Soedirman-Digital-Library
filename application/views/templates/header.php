<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soedirman Digital Library</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Header Styles */
        .hero-header {
            background: linear-gradient(135deg, #1a3a6a 0%, #0d1b2a 100%);
            color: white;
            padding: 2rem 0;
            margin-bottom: 2rem;
            border-bottom: 5px solid #d4af37;
            position: relative;
            overflow: hidden;
        }
        
        .hero-header::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('https://example.com/soedirman-pattern.png'); /* Ganti dengan pattern militer jika ada */
            opacity: 0.1;
            z-index: 0;
        }
        
        .header-content {
            position: relative;
            z-index: 1;
        }
        
        .library-title {
            font-family: 'Times New Roman', serif;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            letter-spacing: 1px;
        }
        
        .library-subtitle {
            font-style: italic;
            opacity: 0.9;
            border-left: 3px solid #d4af37;
            padding-left: 15px;
        }
        
        .military-badge {
            width: 80px;
            height: 80px;
            background-color: #d4af37;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
        }
        
        /* Rest of your existing styles */
        .card {
            transition: transform 0.3s;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .pagination {
            justify-content: center;
        }
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <!-- Hero Header -->
    <header class="hero-header">
        <div class="container header-content">
            <div class="row align-items-center">
                <div class="col-md-1 d-none d-md-block">
                    <div class="military-badge">
                        <i class="fas fa-book-open fa-2x text-dark"></i>
                    </div>
                </div>
                <div class="col-md-11">
                    <h1 class="library-title display-4">
                        <i class="fas fa-shield-alt"></i> Soedirman Digital Library
                    </h1>
                    <p class="library-subtitle lead">
                        "Bergerilya dalam Literasi, Berjuang untuk Pengetahuan"
                    </p>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
      