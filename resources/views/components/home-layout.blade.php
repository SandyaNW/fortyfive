<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Threesixty</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link 
      rel="stylesheet" 
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
  </head>
  <body>
    <header>
      <x-navbar></x-navbar>
      <div class="container-fluid banner">
        <div class="container text-center">
          <h3 class="display-1 fw-semibold">
            YOU DREAM IT <br />
            WE PRINT IT
          </h3>

          <a href="#quote">
            <button type="button" class="btn btn-danger btn-lg mt-5">
              GET A QUOTE
            </button>
          </a>
        </div>
      </div>
    </header>

    <main class="p-5">
      <nav aria-label="breadcrumb" class="mb-5">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a href="index.html">HOME</a></li>
        </ol>
      </nav>
      <div class="container-fluid pb-5 ps-4">
        <div class="row justify-content-center gap-5">
          <div class="col-5 text-start">
            <h4 class="text-danger">Why Choose Us?</h4>
            <h2 class="fw-bold" style="font-size: 3vw">
              WE PROVIDE QUALITY, NOT QUANTITY
            </h2>
          </div>
          <div class="col-5 text-start p-4">
            <p class="h4" style="text-align: justify">
              We prioritize quality over quantity. Amidst the fast pace of mass
              production, we emphasize expertise and precision in every aspect
              of our endeavors.
            </p>
          </div>
        </div>
      </div>

      <div class="container-fluid text-start pb-5">
        <div class="row justify-content-center gap-5">
          <div class="col-3">
            <div class="card p-3" style="width: 18rem">
              <div class="card-body">
                <h5 class="card-title">
                  <i
                    class="fa-solid fa-tag"
                    style="font-size: 2.5vw; color: #fe0000"
                  ></i>
                </h5>
                <h6 class="card-subtitle mt-3 mb-2 fs-4">Better Pricing</h6>
                <p class="card-text">
                  Our prices are affordable without compromising on quality.
                </p>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card p-3" style="width: 18rem">
              <div class="card-body">
                <h5 class="card-title">
                  <i
                    class="fa-solid fa-pen-nib"
                    style="font-size: 2.5vw; color: #fe0000"
                  ></i>
                </h5>
                <h6 class="card-subtitle mt-3 mb-2 fs-4">Free Custom Design</h6>
                <p class="card-text">
                  provide free design services to ensure customer at no
                  additional cost.
                </p>
              </div>
            </div>
          </div>
          <div class="col-3">
            <div class="card p-3" style="width: 18rem">
              <div class="card-body">
                <h5 class="card-title">
                  <i
                    class="fa-solid fa-print"
                    style="font-size: 2.5vw; color: #fe0000"
                  ></i>
                </h5>
                <h6 class="card-subtitle mt-3 mb-2 fs-4">High Quality Print</h6>
                <p class="card-text">
                  Guaranteed high quality, ensuring every detail shines through
                  perfectly.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Present -->
      <div class="container-fluid text-center pt-5 mt-5 pb-5">
        <h1 class="fw-bold mb-5">PRESENT</h1>
        <div class="row justify-content-md-center gap-5">
          <div class="col-5 me-5 ms-1 pe-5">
            <div class="card p-5"><img src="img/kaos.png" alt="" /></div>
          </div>
          <div class="col-5 text-start p-5">
            <p class="h4" style="text-align: justify">
              Welcome to Threesixty, the place to discover unique in the world
              of fashion! We are proud to present a collection of high quality
              printed t-shirts designed with impeccable details.
            </p>
            <p class="h4" style="text-align: justify">
              With a touch of creative design and using quality materials, every
              t-shirt at Threesixty reflects unmatched style and beauty. Explore
              a wide selection of exclusive colors and motifs, and create your
              own style with us. Threesixty, the place where fashion meets
              creativity!
            </p>
            <button
              type="button"
              class="btn btn-danger px-4 mt-3"
              style="font-weight: 600"
            >
              GRAB NOW
            </button>
          </div>
        </div>
      </div>

      <!-- Contact -->
      <div id="contact" class="container-fluid text-center mt-5 pb-5">
        <h1 class="fw-bold mb-5">CONTACT US</h1>
        <div class="row justify-content-md-center gap-5">
          <div class="col-5 text-start">
            <h2 class="fw-bold" style="font-size: 3vw; color: #fe0000">
              HAVE A PROJECT <br />
              IN MIND?
            </h2>
            <p class="h4 pb-3" style="text-align: justify">
              We prioritize quality over quantity. Amidst the fast pace of mass
              production, we emphasize expertise and precision in every aspect
              of our endeavors.
            </p>
            <h2 class="fw-bold mt-5" style="font-size: 3vw; color: #fe0000">
              CONTACT
            </h2>
            <div class="d-flex gap-3">
              <a href="" style="font-size: 3vw; color: #000"
                ><i class="fa-brands fa-x-twitter"></i
              ></a>
              <a
                href="https://www.instagram.com/begusaurus?igsh=MWRucmN5ZjJuaTMwcQ=="
                style="font-size: 3vw; color: #000"
                ><i class="fa-brands fa-instagram"></i
              ></a>
              <a
                href="https://wa.me/6282188664614"
                style="font-size: 3vw; color: #000"
                ><i class="fa-brands fa-whatsapp"></i
              ></a>
            </div>
          </div>
          <div class="col-5">
            <div class="container-fluid text-center">
              <form action="" method="post">
                <div class="d-grid">
                  <div class="form-floating mb-3">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="Masukkan nama"
                    />
                    <label for="floatingInput">Name</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input
                      type="email"
                      name="email"
                      class="form-control"
                      placeholder="Masukkan username"
                    />
                    <label for="floatingInput">Email</label>
                  </div>
                  <div class="form-floating mb-3">
                    <textarea
                      class="form-control"
                      placeholder="Leave a message here"
                      id="floatingTextarea2"
                      style="height: 200px"
                    ></textarea>
                    <label for="floatingTextarea2">Message</label>
                  </div>
                  <button type="submit" class="btn btn-danger mb-2">
                    SEND MESSAGE
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Service -->
      <div id="service" class="container-fluid text-center mt-5 pb-5">
        <h1>OUR SERVICE</h1>
        <div class="container text-center mt-4">
          <div class="row justify-content-center gap-5">
            <div class="col-lg-2 col-md-4 col-sm-6 p-4 shadow-lg bg-body">
              <div class="row">
                <div class="col mb-4">
                  <i
                    class="fa-solid fa-lightbulb img-fluid"
                    style="color: #000; font-size: 8vw"
                  ></i>
                </div>
              </div>
              <div class="row">
                <div class="col d-grid">
                  <p class="h4">We prioritize</p>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 p-4 shadow-lg bg-body">
              <div class="row">
                <div class="col mb-4">
                  <i
                    class="fa-solid fa-shirt img-fluid"
                    style="color: #000; font-size: 8vw"
                  ></i>
                </div>
              </div>
              <div class="row">
                <div for="neutral" class="col d-grid">
                  <p class="h4">We prioritize</p>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 p-4 shadow-lg bg-body">
              <div class="row">
                <div class="col mb-4">
                  <i
                    class="fa-solid fa-print img-fluid"
                    style="color: #000; font-size: 8vw"
                  ></i>
                </div>
              </div>
              <div class="row">
                <div for="sad" class="col d-grid">
                  <p class="h4">We prioritize</p>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6 p-4 shadow-lg bg-body">
              <div class="row">
                <div class="col mb-4">
                  <i
                    class="fa-solid fa-truck img-fluid"
                    style="color: #000; font-size: 8vw"
                  ></i>
                </div>
              </div>
              <div class="row">
                <div for="sad" class="col d-grid">
                  <p class="h4">We prioritize</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <x-footer></x-footer>

    <script src="{{asset('assets/js/global.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
