<?php
    include "header.html";
    
?>
    <div class="header-tagline text-center mt-5">
        <h1 class="title">Send Your Message</h1>
        <h5 class="tagline mt-5">Share Your Thoughts, Stay Anonymous</h5>
    </div>

    <form class="form-container" id="messageForm" action="process_form.php" method="POST">
    <div class="mb-3">
        <label for="recipientName" class="form-label">Recipient Name</label>
        <input type="text" class="form-control" id="recipientName" name="recipient_name" placeholder="Enter recipient name" required>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Write your message here..." required></textarea>
    </div>
    <button type="submit" class="btn bg-dark text-light mt-2 px-4 w-100">Submit</button>
    </form>

    <!-- Toast for success message -->
    <div class="toast bg-white text-center" id="successToast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex align-items-center justify-content-center" style="width: 100%; height: 100%;">
            <div class="toast-body">
                Message Sent Successfully!
            </div>
        </div>
    </div>

<?php
    include "footer.html";
?>
    <script>
        // JavaScript to show the toast after the form is submitted
        document.getElementById("messageForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent form submission for now (for demonstration purposes)
            
            // Show the toast
            var toast = new bootstrap.Toast(document.getElementById("successToast"));
            toast.show();

            // Optionally, you can submit the form after showing the toast
            setTimeout(function() {
                document.getElementById("messageForm").submit();
            }, 1500); // Delay form submission to let the toast display
        });
    </script>
</body>
</html>
