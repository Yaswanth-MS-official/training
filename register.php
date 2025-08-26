<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <head>
  <meta charset="utf-8">
  <title>Registration Modal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--
  <?php include 'style.php'; ?>
</head>
  <title>Auto-Show Registration Modal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
</head>
<body>

  <!-- Registration Modal -->
  <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <!-- Logo -->
        <div class="text-center mt-3">
          <img src="images/logo.png" alt="Logo" class="img-fluid" style="width: 100px;">
        </div>

        <!-- Registration Form -->
        <form method="post" autocomplete="off">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="registerModalLabel">Register</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">

            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
              <label for="course">Course</label>
              <select class="form-control" id="course" name="course" required>
                <option value="">Select a course</option>
                <option value="web-development">Web Development</option>
                <option value="data-science">Data Science</option>
                <option value="digital-marketing">Digital Marketing</option>
                <option value="cyber-security">Cyber Security</option>
                <option value="mobile-app-development">Mobile App Development</option>
                <option value="cloud-computing">Cloud Computing</option>
                <option value="ui-ux-design">UI/UX Design</option>
                <option value="artificial-intelligence">Artificial Intelligence</option>
              </select>
            </div>

            <div class="form-check mb-2">
              <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
              <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
            </div>

            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="privacy" name="privacy" required>
              <label class="form-check-label" for="privacy">I agree to the privacy policy</label>
            </div>

          </div>

          <div class="modal-footer">
            <a href="#" class="btn btn-primary">Register</a>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </form>

      </div>
    </div>
  </div>

  <!-- JavaScript dependencies -->
   <?php include 'script.php'; ?>
 

  <!-- Auto-show the modal on page load -->
  <script>
    $(document).ready(function () {
      $('#registerModal').modal('show');
    });
  </script>

</body>
</html>
