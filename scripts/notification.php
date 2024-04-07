 <!-- Success Notification -->
 <?php if(isset($_SESSION['success'])): ?>
        <div class="success-notification" id="success-notification">Submitted Successfully</div>
    <?php endif; ?>

    <!-- JavaScript to show success notification -->
    <script>
        // Check if success message is set in session
        <?php if(isset($_SESSION['success'])): ?>
            // Display success notification
            document.getElementById('success-notification').style.display = 'block';
            // Clear success message after 3 seconds
            setTimeout(function() {
                <?php unset($_SESSION['success']); ?>
                window.location.reload(); // Reload the page to clear the notification
            }, 3000);
        <?php endif; ?>
    </script>