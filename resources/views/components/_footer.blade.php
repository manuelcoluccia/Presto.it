<!-- Footer -->
<footer class="bg-presto-light text-center text-white sticky-bottom mt-5">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i
        ></a>
  
        <!-- Linkedin -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a>
  
        <!-- Github -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i
        ></a>
      </section>
      <!-- Section: Social media -->
  
      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <strong>Sign up for our newsletter</strong>
              </p>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example2" class="form-control" />
                <label class="form-label" for="form5Example2">Email address</label>
              </div>
            </div>
            <!--Grid column-->
  
            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-blue-light mb-4">
                Subscribe
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
  
      <!-- Section: Text -->
      <section class="mb-4">
     
      </section>
      <!-- Section: Text -->
  
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row justify-content-center">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Links utili</h5>
  
            <ul class="list-unstyled mb-0">
              <li>
                <a href="{{Route('revisor.create')}}" class="text-white">Diventa Revisore</a>
              </li>
              <li>
                <a href="#!" class="text-white">Lavora con noi</a>
              </li>
              <li>
                <a href="#!" class="text-white">Contatti</a>
              </li>
              <li>
                <a href="#!" class="text-white">Mappa del sito</a>
              </li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">Lingue</h5>
            <ul class="list-unstyled mb-0">
              <li>
                <form action="{{route('locale','it')}}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-link" style="background-color: transparent; border:none;">
                    <span class="flag-icon flag-icon-it "></span>
                    <span class="text-white pl-2">Italiano</span> 
                  </button>
                </form>
              </li>

              <li>
                <form action="{{route('locale','en')}}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-link" style="background-color: transparent; border:none;">
                    <span class="flag-icon flag-icon-gb"></span>
                    <span class="text-white pl-2">Inglese</span> 
                  </button>
                </form>
              </li>
                
              <li>
                <form action="{{route('locale','es')}}" method="POST" class="ml-3">
                  @csrf
                  <button type="submit" class="btn btn-link" style="background-color:transparent; border:none;">
                    <span class="flag-icon flag-icon-es"></span>
                    <span class="text-white pl-2">Spagnolo</span> 
                  </button>
                </form>
              </li>
            
            </ul>
          </div>
                                
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" >
      ?? 2020 Copyright:
      <a class="text-blue-dark" href="">Top_team.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->