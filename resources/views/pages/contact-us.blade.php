@extends('layouts.app')

@section('content')
    <!-- Contact Us Banner with Elegant Fixed Background -->
    <div class="contact-us-banner">
        <div class="content-container">
            <h1><span class="highlight">Contact</span><span> Us</span></h1>
            <p>We'd love to hear from you</p>
        </div>
    </div>

    <!-- Contact Us Content Section -->
    <div class="container contact-content">
        <div class="row">
            <!-- Left Card: Message Form -->
            <div class="col-md-6">
                <div class="card contact-card">
                    <div class="card-body">
                        <h3 class="card-title">Send Us a Message</h3>
                        <form action="/send-message" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="phone" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Right Card: Additional Contact Info -->
            <div class="col-md-6">
                <div class="card contact-card">
                    <div class="card-body">
                        <h3 class="card-title">Contact Information</h3>
                        <p><strong>Sooraj Caterers & Events</strong><br>
                        West Hill, Calicut 673005</p>

                        <p><strong>Telephone:</strong><br>
                        Mobile: +91 9746654776<br>
                        Mobile: +91 9946338982<br>
                        WhatsApp: +91 9746654776</p>

                        <p><strong>Email:</strong><br>
                        soorajcateringservice@gmail.com</p>

                        <p><strong>Branch:</strong><br>
                        Darusalam Jn, Near Health Centre, Thaikkattukara, Aluva</p>

                        <p><strong>Our Sister Concern:</strong><br>
                        Ginger Garlic Restaurant And Catering <br>
                        Food Choice Catering And Events</p>

                        <!-- Add Images -->
                        <div class="contact-images">
                            <img src="{{ asset('images/logo3.jpg') }}" alt="Ginger Garlic Restaurant" class="contact-image">
                            <img src="{{ asset('images/logo2.jpg') }}" alt="Food Choice Catering" class="contact-image">
                            <img src="{{ asset('images/logo4.jpg') }}" alt="ISO" class="contact-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <style>
        /* Contact Us Banner - Elegant Fixed Background */
        .contact-us-banner {
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

        .contact-us-banner h1 {
            font-size: 4.5rem;
            font-weight: 900;
            letter-spacing: 4px;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .contact-us-banner p {
            font-size: 1.8rem;
            font-style: italic;
            letter-spacing: 2px;
            margin-top: 10px;
            font-weight: 500;
        }

        /* Contact Us Content Section */
        .container.contact-content {
            padding-top: 50px;
            background-color: #f7f7f7;
            padding-bottom: 50px;
        }

        .card.contact-card {

            border: none;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            height: 650px
        }

        .card-body {
            padding: 30px;
        }

        .card-title {
            font-size: 2.2rem;
            color: #333;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 1.2rem;
            color: #333;
            font-weight: 600;
        }

        .form-control {
            font-size: 1.1rem;
            padding: 10px;
            border-radius: 10px;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            width: 100%;
            background-color: #fff;
        }

        .form-control:focus {
            border-color: #f5a623;
            box-shadow: 0 0 5px rgba(245, 166, 35, 0.6);
        }

        .btn-primary {
            background-color: #f5a623;
            border-color: #f5a623;
            font-weight: 700;
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 1.1rem;
            text-transform: uppercase;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #ff6600;
            border-color: #ff6600;
        }

        .contact-info p {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #555;
            font-weight: 300;
        }

        .contact-info strong {
            font-weight: 600;
            color: #333;
        }

        .contact-images {
    display: flex;
    gap: 2px;
    margin-top: 47px;
    justify-content: space-between;
}

.contact-image {
    width: 160px;
    height: auto;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
}

.contact-image:hover {
    transform: scale(1.05);
}




        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .contact-us-banner h1 {
                font-size: 3.5rem;
            }

            .contact-us-banner p {
                font-size: 1.6rem;
            }

            .container.contact-content {
                padding: 20px;
            }

            .card.contact-card {
                margin-bottom: 20px;
            }

            .card-title {
                font-size: 1.8rem;
            }

            .form-group label {
                font-size: 1.1rem;
            }

            .form-control {
                font-size: 1rem;
            }

            .btn-primary {
                padding: 12px 25px;
                font-size: 1rem;
            }

            .contact-info p {
                font-size: 1rem;
            }
            .contact-images {
        flex-direction: column;
        align-items: center;
    }

    .contact-image {
        width: 80%;
        margin-bottom: 15px;
    }
        }
    </style>
@endsection
