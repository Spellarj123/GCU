<!doctype html>
<?php
include 'formstyle.php';
?>
<html>

<head>
  <meta charset="utf-8">
  <title>Withdrawal/Dropping/Shifting slip</title>
  <style>
    .hidden {
      display: none;
    }
  </style>

</head>

<body>

  <div class="card">
    <div class="card-header">
      <h1 id="Title">Withdrawal/Dropping/Shifting Slip</h1>
    </div>
    <div class="card-body">
      <form id="form1" name="form1" method="post">
        <p>
          <label>Reason</label>
          <label for="select2">:</label>
          <select name="select2" id="action">
            <option value="a">Withdrawing Enrollment</option>
            <option value="b">Dropping Subjects</option>
            <option value="c">Shifting</option>
          </select>
        </p>
        <p>
          <label for="textarea2">State your Reason/s:
          </label><br>
          <textarea name="textarea2" class="textarea" id="reason_state"></textarea>
        </p>
        <p>
          <label>Reason/s for withdrawing enrollment/ dropping subject/s / shifting</label>
          <label for="textarea">:<br>
          </label>
          <textarea name="textarea" class="textarea" id="reason_explain"></textarea>
        </p>
        <div class="hidden" id="for-shift">
          <label>Shifting from</label>
          <label for="textfield4">:</label>
          <input type="text" name="textfield4" id="textfield4">
          <label>to</label>
          <label for="textfield5">:</label>
          <input type="text" name="textfield5" id="textfield5">
        </div>
        <p>
          <input type="submit" name="submit" id="submit" value="Submit">
        </p>
      </form>
    </div>
  </div>
  <script>
    const dropdown = document.getElementById('action');
    const textfield = document.getElementById('for-shift');

    dropdown.addEventListener('change', function () {
      if (dropdown.value === 'c') {
        textfield.classList.remove('hidden');
      } else {
        textfield.classList.add('hidden');
      }
    });
  </script>
  <script>
    $("#form_transact").on("submit", function (event) {
      event.preventDefault();
      var student_id = <?php echo $_SESSION['session_id'] ?>;
      var transact_type = "withdrawal"

      $.ajax({
        type: 'POST',
        url: '../backend/create_transaction.php',
        data: {
          id: student_id,
          transact: transact_type,
          reason: $('#action').find(":selected").val(),
          statement: $('#reason_state').val(),
          explain: $("#reason_explain").val()
        },
        success: function (data) {
          alert('Successfull');

        }
      });
    });
  </script>
</body>

</html>