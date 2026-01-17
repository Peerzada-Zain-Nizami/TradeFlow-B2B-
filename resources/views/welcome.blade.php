<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <title>Emandii - B2B Platform</title>
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }
            .container {
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }
            .welcome-card {
                background: white;
                border-radius: 20px;
                padding: 60px;
                box-shadow: 0 20px 60px rgba(0,0,0,0.3);
                text-align: center;
                max-width: 600px;
            }
            .logo {
                font-size: 48px;
                font-weight: bold;
                color: #667eea;
                margin-bottom: 20px;
            }
            .tagline {
                font-size: 18px;
                color: #666;
                margin-bottom: 40px;
            }
            .btn {
                display: inline-block;
                padding: 15px 40px;
                margin: 10px;
                border-radius: 50px;
                font-size: 18px;
                font-weight: 600;
                text-decoration: none;
                transition: all 0.3s ease;
                border: none;
                cursor: pointer;
            }
            .btn-login {
                background: #667eea;
                color: white;
            }
            .btn-login:hover {
                background: #5568d3;
                transform: translateY(-2px);
                box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
            }
            .btn-register {
                background: #26de81;
                color: white;
            }
            .btn-register:hover {
                background: #20c26e;
                transform: translateY(-2px);
                box-shadow: 0 5px 20px rgba(38, 222, 129, 0.4);
            }
            .btn-dashboard {
                background: #20bf6b;
                color: white;
            }
            .btn-dashboard:hover {
                background: #1aa35b;
                transform: translateY(-2px);
                box-shadow: 0 5px 20px rgba(32, 191, 107, 0.4);
            }
            .features {
                display: flex;
                gap: 30px;
                margin-top: 30px;
                flex-wrap: wrap;
                justify-content: center;
            }
            .feature {
                flex: 1;
                min-width: 150px;
                text-align: center;
            }
            .feature-icon {
                font-size: 32px;
                margin-bottom: 10px;
            }
            .feature-text {
                color: #666;
                font-size: 14px;
            }
        </style>
    </head>
    <body>
      <div class="container">
        <div class="welcome-card">
          <div class="logo">📦 Emandii</div>
          <div class="tagline">B2B Platform for Retailers & Wholesalers</div>
          
          @if (Route::has('login'))
              @auth
                  <a class="btn btn-dashboard" href="{{ url('/dashboard') }}">Go to Dashboard</a>
              @else
                  <div>
                      <a class="btn btn-login" href="{{ route('login') }}">Login</a>
                      @if (Route::has('register'))
                          <a class="btn btn-register" href="{{ route('register') }}">Register</a>
                      @endif
                  </div>
              @endif
          @endif

          <div class="features">
            <div class="feature">
              <div class="feature-icon">🏪</div>
              <div class="feature-text">Connect with Suppliers</div>
            </div>
            <div class="feature">
              <div class="feature-icon">📊</div>
              <div class="feature-text">Manage Inventory</div>
            </div>
            <div class="feature">
              <div class="feature-icon">💼</div>
              <div class="feature-text">Business Solutions</div>
            </div>
          </div>
        </div>
      </div>
    </body>
</html>
