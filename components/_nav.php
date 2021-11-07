<header>
    <div class="wrap">
        <div class="logo">
            <a href="index.php">
                <svg viewBox="0 0 128.46 95.38">
                    <defs>
                        <style>
                            .cls-1 {
                                font-size: 26.88px;
                                font-family: Bodoni-Book, Bodoni;
                            }

                            .cls-1,
                            .cls-2 {
                                fill: #fff;
                            }
                        </style>
                    </defs>
                    <title>Asset 2@2</title>
                    <g id="Layer_2" data-name="Layer 2">
                        <g id="Layer_1-2" data-name="Layer 1"><text class="cls-1" transform="translate(0 88.66)">CONCEPTS</text>
                            <path class="cls-2" d="M64,59.22,24.9,20.12,45,0H83l20.13,20.12ZM30.35,20.12,64,53.77,97.65,20.12,81.38,3.86H46.61Z" />
                            <path class="cls-2" d="M70.16,22.72V24H65.83v18.7h4.33v1.23H57.55V42.65h4.11V24H57.55V22.72h4.11V20.1c0-9.14,3.8-13,8.93-13,2.08,0,4.48,1,4.48,3.47a1.93,1.93,0,0,1-2,1.76c-1.45,0-2.19-1-2.19-2.46,0-.58.42-.64.42-1.33,0-.27-.91-.32-1.28-.32-2.56,0-4.22,3.1-4.22,8.44v6Z" />
                            <path class="cls-2" d="M79.26,23.25a1.94,1.94,0,1,1-1.93-1.93,1.94,1.94,0,0,1,1.93,1.93" />
                        </g>
                    </g>
                </svg>
            </a>
        </div>
        <nav id="content">
            <div class="cancel-btn">
                <div class="btn">
                    <svg viewBox="0 0 137 137">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #fff;
                                }
                            </style>
                        </defs>
                        <title>Asset 1@2</title>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <path class="cls-1" d="M137,68.5A68.5,68.5,0,1,1,68.5,0,68.5,68.5,0,0,1,137,68.5" />
                                <path d="M31.12,65.54H92.24l-18.3-18.3a3.13,3.13,0,0,1,4.42-4.42L102,66.46a3.13,3.13,0,0,1,0,4.42L78.36,94.52a3.13,3.13,0,0,1-4.42-4.42l18.3-18.3H31.12A3.12,3.12,0,0,1,28,68.68v0a3.12,3.12,0,0,1,3.12-3.12" />
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div class="nav-links">
                <ul>
                    <li><a href="/">home</a></li>
                    <li><a href="/about">about me</a></li>
                    <li><a href="/portfolio">my portfolio</a></li>
                    <li><a href="/projects">projects</a></li>
                    <li><a href="/blogs">blogs</a></li>
                </ul>
            </div>
            <div class="nav-links-md">
                <ul>
                    <li><a href="/">home</a></li>
                    <li><a href="/about">about me</a></li>
                    <li><a href="/portfolio">my portfolio</a></li>
                    <li><a href="/projects">projects</a></li>
                    <li><a href="/blogs">blogs</a></li>
                </ul>
            </div>
        </nav>
        <div class="right">
            <a href="/enquire">Hire Me</a>
            <div class="hamburger" id="hamburger">
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            // $(document).ready(function() {
            //     $(".hamburger").click(function() {
            //         $(this).toggleClass("is-active");
            //     });
            // });

            let content = document.getElementById("content")
            let hamburger = document.getElementById("hamburger")
            let cancel = document.querySelector(".cancel-btn")
            hamburger.addEventListener("click", () => {
                content.classList.add("active")
            });
            cancel.addEventListener("click", () => {
                content.classList.remove("active")
            });
        </script>
    </div>
</header>