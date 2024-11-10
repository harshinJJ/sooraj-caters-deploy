@extends('layouts.app')

@section('content')
    <!-- About Us Banner with Elegant Fixed Background -->
    <div class="about-us-banner">
        <div class="content-container">
            <h1><span class="highlight">Sooraj</span><span> Caterers</span></h1>
            <p>Since 1990</p>
        </div>
    </div>

    <!-- About Us Content Section -->
    <div class="container about-content">
        <h2 class="section-title">About Us</h2>
        <p class="intro-text">Since 1990, the name <strong>SOORAJ Catering Services</strong> has inspired absolute confidence. Our exquisite and innovative food, spectacular presentation, and unfailing service have made us a trusted name in Kerala.</p>

        <p class="intro-text">Whether it's wedding parties, Annaprasans, corporate meetings, steamer parties, birthday parties, or cocktails with continental catering services, the discerning host or hostess can trust us to bring their impeccable personal taste to life at any event.</p>

        <h3 class="section-subtitle">Our Specialties</h3>
        <ul class="specialties-list">
            <li>Wedding Parties</li>
            <li>Cocktails</li>
            <li>Birthdays</li>
            <li>Kitty Parties</li>
            <li>Picnics</li>
            <li>Steamer Parties</li>
        </ul>

        <p class="final-note">We specialize in Interactive stalls & Fusion food. Our catering services include Bengali, North Indian, Chinese, Mughlai, Italian & Continental cuisine.</p>
    </div>

    <style>
        /* About Us Banner - Elegant Fixed Background */
      /* About Us Banner - Elegant Fixed Background */
.about-us-banner {
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.7)),
                url('{{ asset('images/bg7.jpeg') }}') no-repeat center center fixed;
    background-size: cover;
    color: #fff;
    padding: 200px 0;
    text-align: center;
    position: relative;
    z-index: 1;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    text-shadow: 2px 2px 15px rgba(0, 0, 0, 0.6);
    font-family: 'Montserrat', sans-serif;

}
.highlight {
    color: #ff6600; /* Orange color */
}

        .content-container {
            position: relative;
            z-index: 2;
            padding: 0 20px;
        }

        .about-us-banner h1 {
            font-size: 4.5rem;
            font-weight: 900;
            letter-spacing: 4px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .about-us-banner p {
            font-size: 1.8rem;
            font-style: italic;
            letter-spacing: 2px;
            margin-top: 10px;
            font-weight: 500;
        }

        /* Content Section */
        .container.about-content {
            padding-top: 150px;
            background-color: #f7f7f7;
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            margin-top: -100px;
            z-index: 1;
            padding-bottom: 50px;
            overflow: hidden;
        }

        .section-title {
            font-size: 2.8rem;
            font-weight: 700;
            color: #333;
            text-transform: uppercase;
            margin-bottom: 20px;
            letter-spacing: 2px;
            text-align: center;
            border-bottom: 4px solid #f5a623;
            display: inline-block;
            padding-bottom: 10px;
        }

        .section-subtitle {
            font-size: 2.2rem;
            color: #333;
            margin-top: 30px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .intro-text {
            font-size: 1.3rem;
            line-height: 1.8;
            color: #555;
            text-align: justify;
            margin-bottom: 40px;
            font-weight: 300;
        }

        .final-note {
            font-size: 1.4rem;
            font-weight: 600;
            color: #444;
            margin-top: 40px;
            font-style: italic;
        }

        /* List styling */
        .specialties-list {
            list-style-type: none;
            padding-left: 0;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .specialties-list li {
            font-size: 1.2rem;
            padding: 15px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .specialties-list li:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            transform: scale(0);
            transition: transform 0.3s ease;
            border-radius: 10px;
        }

        .specialties-list li:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        }

        .specialties-list li:hover:before {
            transform: scale(1);
        }

        .specialties-list li h4 {
            color: #333;
            font-size: 1.4rem;
            font-weight: 600;
            margin-top: 10px;
            letter-spacing: 1px;
            text-align: center;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .about-us-banner h1 {
                font-size: 3.5rem;
            }

            .about-us-banner p {
                font-size: 1.6rem;
            }

            .container.about-content {
                padding: 20px;
            }

            .section-title {
                font-size: 2.4rem;
            }

            .intro-text {
                font-size: 1.1rem;
            }
        }


    </style>
@endsection
