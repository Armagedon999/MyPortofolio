@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section id="home" class="min-h-screen flex flex-col md:flex-row items-center justify-center gap-6 px-4 pt-20">
    <div class="flex flex-col items-center md:items-start gap-4 max-w-2xl order-2 md:order-1">
        <div class="text-center md:text-left">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Hi, I'm <span class="text-primary">Muhammad Irfan</span></h1>
            <p class="text-lg md:text-xl mb-4">Web Developer & Designer</p>
            <p class="text-base md:text-lg opacity-80 mb-6">I create beautiful and functional websites with modern technologies and best practices.</p>
        </div>
        <div class="flex flex-col sm:flex-row gap-4">
            <a href="#projects" class="btn btn-primary shadow-lg hover:shadow-xl transition-all">View My Work</a>
            <a href="#contact" class="btn btn-outline btn-primary">Contact Me</a>
        </div>
        <div class="flex gap-4 mt-4">
            <a href="https://github.com/irfan117" target="_blank" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                </svg>
            </a>
            <a href="https://linkedin.com/in/yourusername" target="_blank" class="btn btn-ghost btn-circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                </svg>
            </a>
        </div>
    </div>
    <div class="relative order-1 md:order-2 mb-8 md:mb-0">
        <div class="w-48 h-48 md:w-64 md:h-64 rounded-full bg-primary/20 absolute -z-10 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></div>
        <img src="{{ asset('images/img.jpg') }}" alt="Profile" class="w-48 h-48 md:w-64 md:h-64 rounded-full object-cover border-4 border-primary shadow-xl" />
    </div>
</section>

<!-- About Section -->
<section id="about" class="min-h-screen py-20 bg-base-200">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-8 md:mb-12">About Me</h2>
        <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center">
            <div class="prose max-w-none">
                <p class="text-base md:text-lg mb-4 md:mb-6">I'm a passionate web developer with expertise in creating beautiful and functional websites. I specialize in Laravel, Vue.js, and modern web technologies.</p>
                <p class="text-base md:text-lg mb-4 md:mb-6">My goal is to build applications that not only look great but also provide excellent user experiences.</p>
                <div class="flex flex-wrap gap-4">
                    <div class="tooltip" data-tip="Laravel">
                        <div class="btn btn-ghost btn-circle">
                            <img src="https://cdn.simpleicons.org/laravel/FF2D20" alt="Laravel Logo" class="w-8 h-8" />
                        </div>
                    </div>
                    <div class="tooltip" data-tip="Vue.js">
                        <div class="btn btn-ghost btn-circle">
                            <img src="https://cdn.simpleicons.org/vuedotjs/4FC08D" alt="Vue.js Logo" class="w-8 h-8" />
                        </div>
                    </div>
                    <div class="tooltip" data-tip="TailwindCSS">
                        <div class="btn btn-ghost btn-circle">
                            <img src="https://cdn.simpleicons.org/tailwindcss/06B6D4" alt="TailwindCSS Logo" class="w-8 h-8" />
                        </div>
                    </div>
                    <div class="tooltip" data-tip="JavaScript">
                        <div class="btn btn-ghost btn-circle">
                            <img src="https://cdn.simpleicons.org/javascript/F7DF1E" alt="JavaScript Logo" class="w-8 h-8" />
                        </div>
                    </div>
                    <div class="tooltip" data-tip="PHP">
                        <div class="btn btn-ghost btn-circle">
                            <img src="https://cdn.simpleicons.org/php/777BB4" alt="PHP Logo" class="w-8 h-8" />
                        </div>
                    </div>
                    <div class="tooltip" data-tip="MySQL">
                        <div class="btn btn-ghost btn-circle">
                            <img src="https://cdn.simpleicons.org/mysql/4479A1" alt="MySQL Logo" class="w-8 h-8" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="stats shadow-lg">
                    <div class="stat">
                        <div class="stat-title">Years Experience</div>
                        <div class="stat-value text-primary">3+</div>
                    </div>
                </div>
                <div class="stats shadow-lg">
                    <div class="stat">
                        <div class="stat-title">Projects Completed</div>
                        <div class="stat-value text-primary">50+</div>
                    </div>
                </div>
                <div class="stats shadow-lg">
                    <div class="stat">
                        <div class="stat-title">Happy Clients</div>
                        <div class="stat-value text-primary">30+</div>
                    </div>
                </div>
                <div class="stats shadow-lg">
                    <div class="stat">
                        <div class="stat-title">Technologies</div>
                        <div class="stat-value text-primary">10+</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="min-h-screen py-20">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-8 md:mb-12">My Projects</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Project Card 1 -->
            <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all">
                <figure class="px-4 pt-4">
                    <img src="https://kerars.site/" alt="Project 1" class="rounded-xl h-48 w-full object-cover" />
                </figure>
                <div class="card-body">
                    <h3 class="card-title">Project 1</h3>
                    <p>Description of project 1 goes here. This is a brief overview of what the project does and its main features.</p>
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">Laravel</div>
                        <div class="badge badge-outline">Vue.js</div>
                        <div class="badge badge-outline">TailwindCSS</div>
                    </div>
                    <div class="card-actions justify-end mt-4">
                        <a href="https://kerars.site/" class="btn btn-primary">View Project</a>
                    </div>
                </div>
            </div>
            <!-- Project Card 2 -->
            <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all">
                <figure class="px-4 pt-4">
                    <img src="https://placehold.co/600x400" alt="Project 2" class="rounded-xl h-48 w-full object-cover" />
                </figure>
                <div class="card-body">
                    <h3 class="card-title">Project 2</h3>
                    <p>Description of project 2 goes here. This is a brief overview of what the project does and its main features.</p>
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">React</div>
                        <div class="badge badge-outline">Node.js</div>
                        <div class="badge badge-outline">MongoDB</div>
                    </div>
                    <div class="card-actions justify-end mt-4">
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
            </div>
            <!-- Project Card 3 -->
            <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all">
                <figure class="px-4 pt-4">
                    <img src="https://placehold.co/600x400" alt="Project 3" class="rounded-xl h-48 w-full object-cover" />
                </figure>
                <div class="card-body">
                    <h3 class="card-title">Project 3</h3>
                    <p>Description of project 3 goes here. This is a brief overview of what the project does and its main features.</p>
                    <div class="flex flex-wrap gap-2 mt-2">
                        <div class="badge badge-outline">Next.js</div>
                        <div class="badge badge-outline">TypeScript</div>
                        <div class="badge badge-outline">Prisma</div>
                    </div>
                    <div class="card-actions justify-end mt-4">
                        <a href="#" class="btn btn-primary">View Project</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="min-h-screen py-20 bg-base-200">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-8 md:mb-12">Get In Touch</h2>
        <div class="max-w-2xl mx-auto">
            <form class="space-y-4 md:space-y-6">
                <div class="grid md:grid-cols-2 gap-4 md:gap-6">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Name</span>
                        </label>
                        <input type="text" placeholder="Your name" class="input input-bordered" />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" placeholder="Your email" class="input input-bordered" />
                    </div>
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Subject</span>
                    </label>
                    <input type="text" placeholder="Subject" class="input input-bordered" />
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Message</span>
                    </label>
                    <textarea class="textarea textarea-bordered h-32" placeholder="Your message"></textarea>
                </div>
                <div class="form-control mt-4 md:mt-6">
                    <button class="btn btn-primary">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
