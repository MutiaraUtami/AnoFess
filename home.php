<?php
    include "header.html";
?>
    <div class="header-tagline text-center mt-5">
        <h1 class="title">Anonymous Confessions</h1>
        <h5 class="tagline mt-5">Share Your Thoughts, Stay Anonymous</h5>
        <a class="btn bg-dark text-light mt-3 px-4" href="submit.php">Send Your Thought!
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
            </svg>
        </a>
    </div>

    <div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-3 g-4 text-center">
        <div class="col">
            <div class="card">
                <div class="card-body m-2">
                    <h5 class="card-title">Send Message</h5>
                    <p class="card-text">Send your message to a special person anonymously!</p>
                    <a class="btn bg-dark text-light mt-2 px-4" href="submit.php">Send Message
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body m-2">
                    <h5 class="card-title">Browse Message</h5>
                    <p class="card-text">Explore what others are sharing anonymously and get inspired!</p>
                    <a class="btn bg-dark text-light mt-2 px-4" href="browse.php">Browse Messages
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body m-2">
                    <h5 class="card-title">Delete Message</h5>
                    <p class="card-text">Delete unnecessary or outdated posts anonymously.</p>
                    <a class="btn bg-dark text-light mt-2 px-4" href="delete.php">Delete Message
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>

<?php
    include "footer.html";
?>
</body>
</html>