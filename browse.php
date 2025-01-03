<?php
    include "header.html";
    include "conn.php";

    $search = "";
    if (isset($_GET['search'])) {
        $search = mysqli_real_escape_string($conn, $_GET['search']);
        $sql = mysqli_query($conn, "SELECT * FROM messages WHERE recipient_name LIKE '%$search%' ORDER BY created_at DESC");
    } else {
        $sql = mysqli_query($conn, "SELECT * FROM messages ORDER BY created_at DESC");
    }
?>

<div class="header-tagline text-center mt-5">
    <h1 class="title">Message Box</h1>
    <h5 class="tagline mt-5">Explore what others are sharing anonymously and get inspired!</h5>
</div>

<form class="search-box d-flex" role="search" method="GET" action="">
    <input class="form-control me-2" type="search" name="search" placeholder="Search by recipient name" aria-label="Search" value="<?= htmlspecialchars($search) ?>">
    <button class="btn bg-dark text-light" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search-heart" viewBox="0 0 16 16">
            <path d="M6.5 4.482c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.69 0-5.018"/>
            <path d="M13 6.5a6.47 6.47 0 0 1-1.258 3.844q.06.044.115.098l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1-.1-.115h.002A6.5 6.5 0 1 1 13 6.5M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11"/>
        </svg>
    </button>
</form>

<div class="container mt-2">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php if (mysqli_num_rows($sql) > 0) : ?>
            <?php while ($row = mysqli_fetch_assoc($sql)) : ?>
                <div class="col">
                    <div class="card">
                        <div class="card-body m-2">
                            <h5 class="card-title">To: <?= htmlspecialchars($row['recipient_name']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($row['message']) ?></p>
                            <p class="card-text text-muted">
                                <small>Posted on <?= date("F j, Y, g:i a", strtotime($row['created_at'])) ?></small>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <div class="col-12 text-center">
                <p class="text-muted">No messages found for "<strong><?= htmlspecialchars($search) ?></strong>".</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php
    include "footer.html";
?>
    </body>
</html>
