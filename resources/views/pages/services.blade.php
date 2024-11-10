@extends('layouts.app')

@section('content')
    <!-- Services Banner with Elegant Fixed Background -->
   

    <!-- Services Content Section -->
    <div class="container services-content">
        <h2 class="section-title">Our Services</h2>
        <p class="intro-text">
            Wedding is a special moment in the history of a person, marking a new beginning for years. Millions of people in different lands celebrate this event in extraordinary ways. They say marriages are made in heaven. So why not make it an exotic lifetime affair? Just dream of the wedding and leave it to us to convert your dream into reality, as your dream is our pleasure.
        </p>
        <p class="intro-text">
            To make your special moment an unforgettable celebration, we provide innovative wedding services and solutions to our clients. Embark on a new journey together in style and leave all your worries behind. Dreaming of an Indian wedding, Hindu, Christian, Muslim wedding? We can help you turn your dream wedding into reality. Selecting floral arrangements, creating atmosphere through music, preparing a celebratory meal, and most importantly choosing the perfect venue.
        </p>
        <p class="intro-text">Refer to our facilities and wedding packages to enhance your celebration. For details, please contact us.</p>

        <h3 class="section-subtitle">Our Specialties</h3>
        <ul class="services-list">
            <li>Wedding Catering</li>
            <li>Event Caterers</li>
            <li>Outdoor Catering</li>
            <li>Birthday Parties</li>
            <li>Engagement Catering</li>
            <li>Party Orders</li>
            <li>Family Get-Together</li>
            <li>House-Warming Catering</li>
            <li>Anniversary</li>
            <li>Balloon and Flower Decorations</li>
            <li>Venue Decorations</li>
            <li>Wedding Arches</li>
            <li>Wedding Stages and Mandapas</li>
            <li>Hall Decorations</li>
            <li>Food Canopies</li>
            <li>Table and Chair Arrangements</li>
        </ul>
    </div>

    <style>
        /* Services Banner - Elegant Fixed Background */

        /* Services Content Section */
        .container.services-content {
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

        /* List styling */
        .services-list {
            list-style-type: none;
            padding-left: 0;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .services-list li {
            font-size: 1.2rem;
            padding: 15px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .services-list li:before {
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

        .services-list li:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        }

        .services-list li:hover:before {
            transform: scale(1);
        }

        .services-list li h4 {
            color: #333;
            font-size: 1.4rem;
            font-weight: 600;
            margin-top: 10px;
            letter-spacing: 1px;
            text-align: center;
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .services-banner h1 {
                font-size: 3.5rem;
            }

            .services-banner p {
                font-size: 1.6rem;
            }

            .container.services-content {
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
