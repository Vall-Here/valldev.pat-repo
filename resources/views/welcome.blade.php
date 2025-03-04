<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css') <!-- Ensure Vite is properly configured for your assets -->
  </head>
  <body>
    <!-- Navigation Bar -->
    <div class="navbar bg-base-100 shadow-sm">
      <a class="btn btn-ghost text-xl">Vall.Dev</a>
    </div>
    
    <!-- Hero Section -->
    <div class="hero bg-base-200 min-h-screen">
      <div class="hero-content text-center">
        <div class="max-w-md">
          <h1 class="text-5xl font-bold">Ahmad Noval's API</h1>
          <p class="py-6">
            Please be responsible and do not change anything on this domain, including the files in the panel.
          </p>
          <div class="flex gap-4">
            <!-- Card for Simple PHP API -->
            <div class="card w-96 bg-base-100 card-xs shadow-sm">
              <div class="card-body">
                <h2 class="card-title">Simple PHP API</h2>
                <p>Simple Native PHP REST API</p>
                <div class="justify-end card-actions">
                  <button class="btn btn-primary">Docs</button>
                </div>
              </div>
            </div>

            <!-- Card for Laravel API -->
            <div class="card w-96 bg-base-100 card-xs shadow-sm">
              <div class="card-body">
                <h2 class="card-title">Laravel API</h2>
                <p>Simple CRUD Laravel Based REST API</p>
                <div class="justify-end card-actions">
                  <!-- Button that links to Swagger Documentation -->
                  <button class="btn btn-primary">
                    <a href="{{ route('l5-swagger.default.api') }}" style="color: white; text-decoration: none;">Docs</a>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
