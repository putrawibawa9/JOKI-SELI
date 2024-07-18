<!DOCTYPE html>
<html
  lang="en"
  data-theme="light"
>
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />

    <title>Web Konstruksi</title>

    <link
      href="{{ asset('css/output.css') }}"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link
      rel="stylesheet"
      href="../node_modules/photoswipe/dist/photoswipe.css"
    />
     @vite('resources/css/app.css')
       <link rel="icon" type="image/png" href="{{ asset('images/logo-transparent.png') }}">
  </head>
  <body class="overflow-x-hidden">
    <!-- ===== Navbar ===== -->
    <header class="navbar px-12 py-4">
      <div class="navbar-start">
        <!-- ===== Navbar Mobile Sidebar ===== -->
        <div class="dropdown">
          <!-- ===== Dropdown Button ===== -->
          <div
            tabindex="0"
            role="button"
            class="btn btn-ghost lg:hidden"
          >
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              fill="none"
              viewBox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4 6h16M4 12h8m-8 6h16"
              />
            </svg>
          </div>

          <!-- ===== Dropdown Content ===== -->
          <ul
            tabindex="0"
            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow"
          >
            <li>
              <a href="#">Beranda</a>
            </li>
            <li>
              <a href="#proyekKami">Proyek</a>
            </li>
            <li>
              <a href="#">Layanan</a>
            </li>
            <li>
              <a href="#testimoni">Testimoni</a>
            </li>
            <li>
              <a href="#cabangKami">Cabang Kami</a>
            </li>
            <li>
              <a href="#testimoni">Testimoni</a>
            </li>
          </ul>
        </div>

        <!-- ===== Navbar Logo ===== -->
        <a
          href="#"
          class="w-[140px]"
        >
          <img
            src="{{ asset('images/logo-transparent.png') }}"
            alt="Company Logo"
            class="w-[140px]"
          />
        </a>
      </div>

      <!-- ===== Navbar Desktop Links ===== -->
      <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal space-x-10 px-1">
          <li class="text-base font-semibold">
            <a href="#">Beranda</a>
          </li>
          <li class="text-base font-semibold">
            <a href="#proyekKami">Proyek</a>
          </li>
          <li class="text-base font-semibold">
            <a href="#cabangKami">Cabang Kami</a>
          </li>
          <li class="text-base font-semibold">
            <a href="#testimoni">Testimoni</a>
          </li>
        </ul>
      </div>

      <!-- ===== Navbar CTA Buttons ===== -->
      <div class="navbar-end space-x-4">
        <a class="btn btn-info text-white rounded-xl px-12 py-4">Hubungi Kami</a>

        <button class="btn btn-square btn-outline btn-info hover:text-white">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </div>
    </header>
    <!-- ===== End Navbar ===== -->

    <!-- ===== Hero Section ===== -->
    <section class="hero min-h-[calc(100vh-64px)] relative">
      <div class="hero-overlay bg-black bg-opacity-40 z-[2] absolute top-0 left-0 w-full h-full"></div>
      <video
        autoplay
        loop
        muted
        playsinline
        class="absolute top-0 left-0 w-full h-full object-cover"
      >
        <source
          src="{{ asset('videos/hero-video.mp4') }}"
          type="video/mp4"
        />
      </video>

      <div class="hero-content text-white z-10 text-center">
        <div class="max-w-xl">
          <h1 class="mb-5 text-5xl font-bold">Capai Properti Impianmu Berasama Kami</h1>
          <p class="mb-5">Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
          <button class="btn btn-info px-8 py-2 text-white">Tentang Kami</button>
        </div>
      </div>

      <div class="bg-info py-4 px-8 z-10 rounded-full absolute bottom-12 right-12">
        <h3 class="font-semibold text-xl text-white">PT. Keanu Abimanyu Konstruksi</h3>
      </div>
    </section>
    <!-- ===== End Hero ===== -->

    <!-- ===== About Section ===== -->
    <section class="container mx-auto py-24 grid grid-cols-2 gap-32">
      <div class="flex flex-col space-y-8">
        <h1 class="text-sky-400 text-6xl font-bold">Ahli Dalam Membangun Visi Anda</h1>

        <div class="flex items-center space-x-4">
          <div class="bg-neutral-100 font-semibold text-sky-400 border py-3 px-6 rounded-tl-[2rem] rounded-br-[2rem]">Residental</div>
          <div class="bg-neutral-100 font-semibold text-sky-400 border py-3 px-6 rounded-tl-[2rem] rounded-br-[2rem]">Commercial</div>
          <div class="bg-neutral-100 font-semibold text-sky-400 border py-3 px-6 rounded-tl-[2rem] rounded-br-[2rem]">Interior</div>
        </div>
      </div>

      <div class="flex flex-col space-y-8">
        <div class="flex space-x-4">
          <button class="btn btn-info text-white px-12 py-4">HUBUNGI KAMI</button>
          <button class="btn btn-info btn-outline px-12 py-4">LIHAT PROYEK</button>
        </div>

        <p class="text-lg">
          <span class="font-bold">From basic to extravagant : </span>
          We believe that every space has the potential to be remarkable. Our team of skilled professionals is committed to bringing your vision to life, ensuring that every detail is meticulously executed, whether you’re envisioning a
          standard project or the creation of a luxurious villa.
        </p>

        <div class="grid grid-cols-2 gap-12">
          <div class="flex flex-col space-y-4">
            <h6 class="text-2xl font-bold">Vision</h6>
            <ul class="list-decimal ml-5 space-y-2">
              <li>Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
              <li>Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
              <li>Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
              <li>Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
              <li>Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
            </ul>
          </div>
          <div class="flex flex-col space-y-4">
            <h6 class="text-2xl font-bold">Mission</h6>
            <ul class="list-decimal ml-5 space-y-2">
              <li>Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
              <li>Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
              <li>Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
              <li>Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
              <li>Lorem ipsum, dolor sit amet consectetur adipisicing.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== End About ===== -->

    <!-- ===== Project Section ===== -->
    <section class="container mx-auto pt-12 pb-24">
      <div class="flex justify-between items-end">
        <div class="flex flex-col space-y-6">
          <h2 class="text-sky-400 text-5xl font-bold" id="proyekKami">Proyek Kami</h2>

          <p class="text-lg max-w-4xl">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis dignissimos officia laudantium quod eius nisi?</p>
        </div>

        <a
          href="#"
          class="btn btn-outline btn-info"
        >
          View all
        </a>
      </div>

      <div class="card lg:card-side mt-10 rounded-lg border border-slate-400 bg-base-100 h-[450px] w-full">
        <figure class="w-[60%]">
          <img
          
            src="{{ asset('images/main-project-1.webp') }}"
            alt="Album"
            class="h-full w-full object-fill"
          />
        </figure>

        <div class="card-body w-[40%] p-12 flex flex-col justify-between">
          <div class="flex flex-col space-y-4">
            <span class="font-bold line-clamp-1">
              <span class="badge bg-neutral-100 px-4 py-4 rounded-md font-bold mr-2">11.000 m <sup>2</sup></span>
              Kuta, Pujut, Central Lombok Regency, West Nusa Tenggara
            </span>
            <h2 class="card-title text-4xl font-bold text-sky-400">ITDC - Bazaar Mandalika</h2>
            <span class="text-xl font-bold">This project was completed in just 75 days</span>
            <span class="text-lg line-clamp-2 overflow-hidden">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora odit nemo error adipisci quae eius itaque commodi deserunt, aperiam sunt obcaecati? Obcaecati ad alias pariatur? Maxime numquam alias repudiandae unde.
            </span>
          </div>
          <div class="card-actions">
            <a
              href="detail_project.html"
              class="font-semibold space-x-4"
            >
              View details
              <i class="fa-solid fa-chevron-right text-sm"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-3 gap-8 mt-24">
        @foreach ($proyek as $row )
        <div class="card">
          <figure>
            <img
                src="{{ asset('images')}}/{{ $row->foto_utama_proyek }}"
              alt="Project Preview"
            />
          </figure>
          <div class="card-body py-8 px-0">
            <span class="font-bold mb-1"
              ><span class="badge bg-neutral-100 px-4 py-4 rounded-md font-bold mr-2">{{ $row->size_proyek }}<sup>2</sup></span> {{ $row->lokasi_proyek }}</span
            >
            <a href="#">
              <h2 class="card-title font-bold">{{ $row->nama_proyek }}</h2>
            </a>
            <div class="card-actions mt-6">
              <a
               href="/detail/{{ $row->id_proyek }}"
                class="font-semibold space-x-4"
              >
                View details
                <i class="fa-solid fa-chevron-right text-sm"></i>
              </a>
            </div>
          </div>
        </div>
  @endforeach
      </div>
    </section>
    <!-- ===== End Project ===== -->

    <!-- ===== Services Section ===== -->
    <section class="container mx-auto bg-gradient-to-br from-sky-700 to-sky-400 w-full rounded-lg px-12 py-16 text-center flex flex-col items-center justify-center gap-y-6 text-white mt-12 mb-24">
      <h1 class="text-5xl font-bold">Layanan Kami</h1>
      <p class="text-lg max-w-3xl">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti, consequuntur iusto quis rerum suscipit alias aliquam earum doloremque quos tenetur exercitationem odit quisquam adipisci, cum reprehenderit vel provident sed
        voluptatum quasi consequatur ab recusandae possimus! Earum quam et error officia iure, eligendi suscipit, corporis eveniet distinctio est repudiandae voluptatum repellat.
      </p>
      <a
        href="#"
        class="btn bg-white text-sky-400 mt-2 px-6 font-semibold text-lg"
        >Cari Tahu Lebih Lanjut</a
      >
    </section>
    <!-- ===== End Services ===== -->

    <!-- ===== Testimonials Section ===== -->
    <section class="container mx-auto pt-12 pb-24">
      <div class="flex justify-between items-end">
        <div class="flex flex-col space-y-6">
          <h2 class="text-sky-400 text-5xl font-bold" id="testimoni">Testimoni</h2>

          <p class="text-lg max-w-4xl">
            Setelah meninjau beberapa kontraktor, klien menyimpulkan bahwa PT Keanu Abimanyu Konstruksi sangat responsif, memiliki portofolio lapangan yang kaya dengan referensi positif, serta menawarkan harga yang kompetitif. Selain itu,
            perusahaan ini juga dikenal dengan tim yang profesional dan berdedikasi dalam setiap proyeknya. Berikut adalah dokumentasi meeting yang merupakan bukti dari kerjasama antara klien dan kami.
          </p>
        </div>

        <a
          href="#"
          class="btn btn-outline btn-info"
        >
          Semua Testimoni
        </a>
      </div>
      <div class="grid grid-cols-4 gap-8 mt-10">
          @foreach ($testimoni as $item)
        <div class="card">
          <figure>
            <img
              src="{{ asset('images')}}/{{ $item->gambar_testimoni }}"
              alt="Testimonial Preview"
              class="rounded-xl"
            />
          </figure>
          <div class="card-body items-center text-center p-2">
              <p>{{ $item->proyek->nama_proyek }}</p>
              <p>{{ $item->deskripsi_testimoni }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <!-- ===== End Testimonials ===== -->

    <!-- ===== Our Offices Section ===== -->
    <section class="container mx-auto pt-12 pb-24">
      <div class="flex flex-col space-y-6">
        <h2 class="text-sky-400 text-5xl font-bold" id="cabangKami">Kantor Kami</h2>

        <p class="text-lg max-w-4xl">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis dignissimos officia laudantium quod eius nisi?</p>
      </div>

      <div class="grid grid-cols-[40%_60%] gap-16 mt-12">
        <div class="flex flex-col gap-y-6">
          <div>
            <h4 class="text-xl font-bold mb-4">Lokasi :</h4>
            <ul class="list-disc font-semibold text-lg ml-4 space-y-4">
              <li class="list-item">
                <div>Lokasi 1</div>
                <span class="font-normal">Gg. Kesambi Indah No.2, Kerobokan, Kec. Kuta Utara, Kabupaten Badung, Bali 80361</span>
            </ul>
          </div>
        </div>
       
        <iframe
         src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.3827095697443!2d115.17062767321185!3d-8.65510338805079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd24758e4f3bad7%3A0x775e1cf931253d2b!2sGg.%20Kesambi%20Indah%20No.2%2C%20Kerobokan%2C%20Kec.%20Kuta%20Utara%2C%20Kabupaten%20Badung%2C%20Bali%2080361!5e0!3m2!1sen!2sid!4v1721285705874!5m2!1sen!2sid"
          height="350"
          width="350"
          style="border: 0; width: 75%"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>
    </section>
    <!-- ===== End Our Offices ===== -->

    <!-- ===== Contact Section ===== -->
    <section class="container mx-auto pt-12 pb-36">
      <div class="flex flex-col space-y-6">
        <h2 class="text-sky-400 text-5xl font-bold">Kontak Kami</h2>

        <p class="text-lg max-w-4xl">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis dignissimos officia laudantium quod eius nisi?</p>
      </div>

      <div class="mt-12 grid grid-cols-3 gap-6">
        <div class="w-full space-y-10 shadow-lg py-12 px-8 rounded-xl">
          <div class="flex justify-between items-center">
            <h4 class="text-xl font-bold">WhatsApp</h4>
            <span class="text-xl font-semibold">+62 857-9245-9822</span>
          </div>

          <div class="bg-sky-500 w-[70%] mx-auto py-4 px-8 rounded-full text-center">
            <h4 class="text-white text-xl font-semibold">Start a conversation</h4>
          </div>
        </div>
        <div class="w-full space-y-10 shadow-lg py-12 px-8 rounded-xl">
          <div class="flex justify-between items-center">
            <h4 class="text-xl font-bold">WhatsApp</h4>
            <span class="text-xl font-semibold">+62 857-9245-9822</span>
          </div>

          <div class="bg-sky-500 w-[70%] mx-auto py-4 px-8 rounded-full text-center">
            <h4 class="text-white text-xl font-semibold">Start a conversation</h4>
          </div>
        </div>
        <div class="w-full space-y-10 shadow-lg py-12 px-8 rounded-xl">
          <div class="flex justify-between items-center">
            <h4 class="text-xl font-bold">WhatsApp</h4>
            <span class="text-xl font-semibold">+62 857-9245-9822</span>
          </div>

          <div class="bg-sky-500 w-[70%] mx-auto py-4 px-8 rounded-full text-center">
            <h4 class="text-white text-xl font-semibold">Start a conversation</h4>
          </div>
        </div>
      </div>

      <p class="text-lg my-16 text-center">Atau bisa hubungi kami dibawah ini</p>

      <form
        action=""
        class="w-full"
      >
        <label class="form-control w-full mb-6">
          <div class="label">
            <span class="label-text">What is your name?</span>
          </div>
          <input
            type="text"
            placeholder="Type here"
            class="input input-bordered w-full"
          />
        </label>
        <label class="form-control w-full mb-6">
          <div class="label">
            <span class="label-text">What is your name?</span>
          </div>
          <input
            type="text"
            placeholder="Type here"
            class="input input-bordered w-full"
          />
        </label>
        <label class="form-control w-full mb-6">
          <div class="label">
            <span class="label-text">What is your name?</span>
          </div>
          <input
            type="text"
            placeholder="Type here"
            class="input input-bordered w-full"
          />
        </label>
        <label class="form-control w-full mb-6">
          <div class="label">
            <span class="label-text">What is your name?</span>
          </div>
          <textarea
            class="textarea textarea-bordered h-36"
            placeholder="Message"
          ></textarea>
        </label>

        <button class="btn btn-info text-white btn-block text-lg">Submit <i class="fa-solid fa-paper-plane ml-4"></i></button>
      </form>
    </section>
    <!-- ===== End Contact ===== -->

    <!-- ===== Footer ===== -->
    <footer class="footer container mx-auto text-base-content">
      <nav class="min-w-[500px] w-full">
        <a
          href="#"
          class="w-[140px] mb-6"
        >
          <img
             src="{{ asset('images/logo-transparent.png') }}"
            alt="Company Logo"
            class="w-[140px]"
          />
        </a>

        <form class="w-full">
          <fieldset class="form-control">
            <label class="label">
              <span class="label-text mb-4">Masukan alamat email anda untuk berlangganan berita dari kami.</span>
            </label>
            <div class="join">
              <input
                type="text"
                placeholder="username@site.com"
                class="input input-bordered join-item w-80"
              />
              <button class="btn btn-info text-white join-item">Subscribe</button>
            </div>
            <label class="label mt-4">
              <span class="label-text mb-4 max-w-lg">By subscribing you agree to with our Privacy Policy and provide consent to receive updates from our company. </span>
            </label>
          </fieldset>
        </form>
      </nav>

      <nav>
        <h6 class="text-black font-bold text-lg mb-4">Follow Us</h6>
        <a
          href="#"
          class="link link-hover space-x-3 inline-flex items-center"
        >
          <i class="fa-brands fa-instagram"></i><span>Instagram</span>
        </a>
        <a
          href="#"
          class="link link-hover space-x-3 inline-flex items-center"
        >
          <i class="fa-brands fa-facebook"></i><span>Facebook</span>
        </a>
        <a
          href="#"
          class="link link-hover space-x-3 inline-flex items-center"
        >
          <i class="fa-brands fa-x-twitter"></i><span>X</span>
        </a>
        <a
          href="#"
          class="link link-hover space-x-3 inline-flex items-center"
        >
          <i class="fa-brands fa-youtube"></i><span>Youtube</span>
        </a>
      </nav>

      <nav>
        <h6 class="text-black font-bold text-lg mb-4">Site Map</h6>
        <a
          href="#"
          class="link link-hover"
          >Homepage</a
        >
        <a
          href="#"
          class="link link-hover"
          >Projects</a
        >
        <a
          href="#"
          class="link link-hover"
          >Solutions</a
        >
        <a
          href="#"
          class="link link-hover"
          >Associates Program</a
        >
        <a
          href="#"
          class="link link-hover"
          >Our Office</a
        >
        <a
          href="#"
          class="link link-hover"
          >Blogs</a
        >
      </nav>

      <nav>
        <h6 class="text-black font-bold text-lg mb-4">Quick Links</h6>
        <a class="link link-hover">Email : knaconstruction@gmail.com</a>
        <a class="link link-hover">PDF Company Profile</a>
      </nav>
    </footer>

    <footer class="footer container mx-auto py-6 text-base-content border-base-300 border-t">
      <aside class="grid-flow-col items-center">
        <p>
          PT Keanu Abimanyu Konstruksi
          <br />
          Penyedia Jasa Konstruksi sejak 2015
        </p>
      </aside>
      <nav class="md:place-self-center md:justify-self-end">
        <div class="grid grid-flow-col gap-8">
          <a href="#">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              class="fill-current"
            >
              <path
                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"
              ></path>
            </svg>
          </a>
          <a href="#">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              class="fill-current"
            >
              <path
                d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"
              ></path>
            </svg>
          </a>
          <a href="#">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              class="fill-current"
            >
              <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
            </svg>
          </a>
        </div>
      </nav>
    </footer>
    <!-- ===== End Footer ===== -->

    <!-- ===== Custom JavaScript ===== -->
    <script src="./js/index.js"></script>

    <!-- ===== CDN JavaScript ===== -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
      integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
  </body>
</html>