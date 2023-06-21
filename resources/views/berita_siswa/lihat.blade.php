<!DOCTYPE html>
<html lang="en">

{{--  <!-- Mirrored from lineone.piniastudio.com/pages-blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:16:41 GMT -->  --}}
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <title>Lineone - Blog Details</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!-
    - CSS Assets -->
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}" />
    <!-- Javascript Assets -->
    <script src="{{ asset('admin/js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
      rel="stylesheet"
    />
    <script>
      /**
       * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
       */
      localStorage.getItem("_x_darkMode_on") === "true" &&
        document.documentElement.classList.add("dark");
    </script>
  </head>
  <body>
    @include('berita_siswa.lihat')
  </body>

<!-- Mirrored from lineone.piniastudio.com/pages-blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 May 2023 04:16:41 GMT -->
</html>



<main class="main mt-9 px-7 w-full pb-9  ">
    <div class="">
      <div class="">
        <div class="card lg:p-6" >
          <!-- Author -->
          <div>
            <div class="flex items-center justify-between">
              <div class="flex items-center space-x-3">
                <div
                  x-data="usePopper({
                   offset: 12,
                   placement: 'bottom',
                   modifiers: [
                      {name: 'preventOverflow', options: {padding: 10}}
                   ]
                })"
                  class="flex"
                  @mouseleave="isShowPopper = false"
                  @mouseenter="isShowPopper = true"
                >
                  <div x-ref="popperRef" class="avatar h-12 w-12">
                    <img
                      class="mask is-squircle"
                      src="{{ asset('admin/images/avatar/avatar-19.jpg') }}"
                      alt="avatar"
                    />
                  </div>
                  <div
                    x-ref="popperRoot"
                    class="popper-root"
                    :class="isShowPopper && 'show'"
                  >

                  </div>
                </div>
                <div>
                  <a
                    href="#"
                    class="font-medium text-slate-700 line-clamp-1 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light"
                  >
                    Hummasoft technology
                  </a>
                  <div class="mt-1.5 flex items-center text-xs">
                    <span class="line-clamp-1">Jun 26</span>
                    <div
                      class="mx-2 my-0.5 w-px self-stretch bg-white/20"
                    ></div>
                    <p class="shrink-0">8 min</p>
                  </div>
                </div>
              </div>

              <div class="flex space-x-3">
                <div class="hidden sm:flex">
                  <button
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
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
                        d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"
                      ></path>
                    </svg>
                  </button>
                  <button
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                  >
                    <i class="fab fa-twitter text-base"></i>
                  </button>
                  <button
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                  >
                    <i class="fab fa-linkedin text-base"></i>
                  </button>
                  <button
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                  >
                    <i class="fab fa-instagram text-base"></i>
                  </button>
                  <button
                    class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                  >
                    <i class="fab fa-facebook text-base"></i>
                  </button>
                </div>
                <div
                  x-data="usePopper({placement:'bottom-end',offset:4})"
                  @click.outside="isShowPopper && (isShowPopper = false)"
                  class="inline-flex"
                >
                  <button
                    x-ref="popperRef"
                    @click="isShowPopper = !isShowPopper"
                    class="btn -mr-1.5 h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                      stroke-width="2"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"
                      />
                    </svg>
                  </button>

                  <div
                    x-ref="popperRoot"
                    class="popper-root"
                    :class="isShowPopper && 'show'"
                  >
                    <div
                      class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700"
                    >
                      <ul>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            >Action</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            >Another Action</a
                          >
                        </li>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            >Something else</a
                          >
                        </li>
                      </ul>
                      <div
                        class="my-1 h-px bg-slate-150 dark:bg-navy-500"
                      ></div>
                      <ul>
                        <li>
                          <a
                            href="#"
                            class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100"
                            >Separated Link</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-6 flex items-center space-x-3 sm:hidden">
              <button
                class="btn space-x-2 rounded-full border border-slate-300 px-4 text-xs+ font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-4.5 w-4.5 text-slate-400 dark:text-navy-300"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                  stroke-width="2"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"
                  />
                </svg>

                <span> Save</span>
              </button>
              <div class="flex">
                <button
                  class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                  <i class="fab fa-twitter text-base"></i>
                </button>
                <button
                  class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                  <i class="fab fa-linkedin text-base"></i>
                </button>
                <button
                  class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                  <i class="fab fa-instagram text-base"></i>
                </button>
                <button
                  class="btn h-8 w-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25"
                >
                  <i class="fab fa-facebook text-base"></i>
                </button>
              </div>
            </div>
          </div>

          <!-- Blog Post -->
          <div
            class="mt-6 font-inter text-base text-slate-600 dark:text-navy-200"
          >
            <h1
              class="text-xl font-medium text-slate-900 dark:text-navy-50 lg:text-2xl"
            >
              313 Pattern and Color ideas
            </h1>
            <h3 class="mt-1">
              Spurred on by my observations at work, I have come up with a
              list of things to avoid as a doctor in a hospital setting
              (especially for interns and medical students):
            </h3>
            <img
              class="mt-5 h-80 w-full rounded-lg object-cover object-center"
              src="{{ asset('admin/images/object/magang.jpeg') }}"
              alt="image"
            />
            <p
              class="mt-1 text-center text-xs+ text-slate-400 dark:text-navy-300"
            >
              <span> Photo by </span>
              <a href="#" class="underline">Unsplash</a>
            </p>
            <br />
            <p>
              Major changes have recently occured in my life, both
              personally and professionally. We're approaching five years
              since the inception of this blog, and going back to read the
              posts from May '04 is quite the experience. I suppose its what
              diaries and journals are for, the chance to go back and read
              out your thoughts and ideas from another time. Kind of like
              mental time travel.
            </p>
            <br />
            <p>
              One thing is for sure, I am not who I was then. In fact, I am
              not who I was last year or the year before that. I may have
              some (we shed and create a lot of cells frequently) of the
              bodily composition of that person but we are definitely on
              different wavelengths.
            </p>
            <br />
            <p>
              This whole blogging business started off as a documentation of
              odd and quirky ideas I might have. I had a lot of time on my
              hands back then, hence the frequency of the posts. With time,
              the posts have decreased in number but have also slightly
              sharpened in focus. They may still be random and don't
              generally adhere to one unified theme, but this thing was
              meant to be disjointed and arbitrary anyway.
            </p>
            <br />
            <div
              class="border-l-4 border-slate-300 pl-4 dark:border-navy-400"
            >
              <p
                class="font-medium italic text-slate-800 dark:text-navy-100"
              >
                Why is Tailwind removing the default styles on my h1
                elements? How do I disable this? What do you mean I lose all
                the other base styles too?
              </p>
            </div>
            <br />
            <p>
              One thing is for sure, I am not who I was then. In fact, I am
              not who I was last year or the year before that. I may have
              some (we shed and create a lot of cells frequently) of the
              bodily composition of that person but we are definitely on
              different wavelengths.
            </p>
            <br />
            <p>
              This whole blogging business started off as a documentation of
              odd and quirky ideas I might have. I had a lot of time on my
              hands back then, hence the frequency of the posts. With time,
              the posts have decreased in number but have also slightly
              sharpened in focus. They may still be random and don't
              generally adhere to one unified theme, but this thing was
              meant to be disjointed and arbitrary anyway.
            </p>
            <br />
            <ul
              class="list-inside list-disc font-medium text-slate-800 dark:text-navy-100"
            >
              <li>
                Now this is a story all about how, my life got
                flipped-turned upside down
              </li>
              <li>And I'd like to take a minute just sit right there</li>
              <li>
                I'll tell you how I became the prince of a town called
                Bel-Air
              </li>
            </ul>
            <br />
            <p>
              Major changes have recently occured in my life, both
              personally and professionally. We're approaching five years
              since the inception of this blog, and going back to read the
              posts from May '04 is quite the experience. I suppose its what
              diaries and journals are for, the chance to go back and read
              out your thoughts and ideas from another time. Kind of like
              mental time travel.
            </p>
          </div>

          <!-- Footer Blog Post -->
          <div class="mt-5 flex space-x-3">
            <button
              class="btn space-x-2 rounded-full border border-slate-300 px-4 text-xs+ font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4.5 w-4.5 text-slate-400 dark:text-navy-300"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z"
                />
              </svg>

              <span> 235</span>
            </button>
            <button
              class="btn space-x-2 rounded-full border border-slate-300 px-4 text-xs+ font-medium text-slate-700 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-100 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90"
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-4.5 w-4.5 text-slate-400 dark:text-navy-300"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 01-.923 1.785A5.969 5.969 0 006 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337z"
                />
              </svg>

              <span> 49</span>
            </button>
          </div>
        </div>


      </div>


      </div>
    </div>
  </main>
