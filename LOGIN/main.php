<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="././css/table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <a href="index.html" class="home-link">Home</a>
  <h1>PROJECT</h1>
</head>
<body>
<div class="container1">
<button type="button" class="btn btn-primary btn-custom" data-toggle="collapse" data-target="#task1">PROJECT 1</button>
  <div id="task1" class="collapse">
    
  <table class="table">
    <thead>
      <tr>
        <th>TASK</th>
        <th>OWNER</th>
        <th>STATUS</th>
        <th>TIMELINE</th>
        <th>DURATION</th>
        <th>DEPENDENT ON</th>
        <th>PLANNED EFFORT</th>
        <th>EFFORT SPENT</th>
        <th>COMPLETION DATE</th>
        <th>COMPLETION STATUS</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td>
  <button type="button" data-toggle="collapse" data-target="#subtask1" aria-expanded="false" aria-controls="subtask1">Task 1</button>
  <div class="collapse" id="subtask1">
    <table class="table">
      <thead>
        <tr>
          <th>Subitem</th>
          <th>Owner</th>
          <th>Status</th>
          <th>Due Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Subtask 1</td>
          <td>Owner 1</td>
          <td>-----------</td>
          <td>Date 1</td>
        </tr>
        <tr>
          <td>Subtask 2</td>
          <td>Owner 2</td>
          <td>-----------</td>
          <td>Date 2</td>
        </tr>
      </tbody>
    </table>
  </div>
</td>
        <td>Owner 1</td>
        <td>------</td>
        <td>Timeline 1</td>
        <td>Duration 1</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Completion Status 1</td>
      </tr>
      <tr>
      <td>
  <button type="button" data-toggle="collapse" data-target="#subtask2" aria-expanded="false" aria-controls="subtask2">Task 2</button>
  <div class="collapse" id="subtask2">
    <table class="table">
      <thead>
        <tr>
          <th>Subitem</th>
          <th>Owner</th>
          <th>Status</th>
          <th>Due Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Subtask 1</td>
          <td>Owner 1</td>
          <td>-----------</td>
          <td>Date 1</td>
        </tr>
        <tr>
          <td>Subtask 2</td>
          <td>Owner 2</td>
          <td>-----------</td>
          <td>Date 2</td>
        </tr>
      </tbody>
    </table>
  </div>
</td>
        <td>Owner 2</td>
        <td>---</td> 
        <td>Timeline 2</td>
        <td>Duration 2</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Completion Status 2</td>
      </tr>
    </tbody>
  </table>

  </div>
</div>
<div class="container2">
<button type="button" class="btn btn-success btn-custom" data-toggle="collapse" data-target="#task2">PROJECT 2</button>
  <div id="task2" class="collapse">
    
  <table class="table">
    <thead>
      <tr>
        <th>TASK</th>
        <th>OWNER</th>
        <th>STATUS</th>
        <th>TIMELINE</th>
        <th>DURATION</th>
        <th>DEPENDENT ON</th>
        <th>PLANNED EFFORT</th>
        <th>EFFORT SPENT</th>
        <th>COMPLETION DATE</th>
        <th>COMPLETION STATUS</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td>
  <button type="button" data-toggle="collapse" data-target="#subtask1" aria-expanded="false" aria-controls="subtask1">Task 1</button>
  <div class="collapse" id="subtask1">
    <table class="table">
      <thead>
        <tr>
          <th>Subitem</th>
          <th>Owner</th>
          <th>Status</th>
          <th>Due Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Subtask 1</td>
          <td>Owner 1</td>
          <td>-----------</td>
          <td>Date 1</td>
        </tr>
        <tr>
          <td>Subtask 2</td>
          <td>Owner 2</td>
          <td>-----------</td>
          <td>Date 2</td>
        </tr>
      </tbody>
    </table>
  </div>
</td>
        <td>Owner 1</td>
        <td>------</td>
        <td>Timeline 1</td>
        <td>Duration 1</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Completion Status 1</td>
      </tr>
      <tr>
      <td>
  <button type="button" data-toggle="collapse" data-target="#subtask2" aria-expanded="false" aria-controls="subtask2">Task 2</button>
  <div class="collapse" id="subtask2">
    <table class="table">
      <thead>
        <tr>
          <th>Subitem</th>
          <th>Owner</th>
          <th>Status</th>
          <th>Due Date</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Subtask 1</td>
          <td>Owner 1</td>
          <td>-----------</td>
          <td>Date 1</td>
        </tr>
        <tr>
          <td>Subtask 2</td>
          <td>Owner 2</td>
          <td>-----------</td>
          <td>Date 2</td>
        </tr>
      </tbody>
    </table>
  </div>
</td>
        <td>Owner 2</td>
        <td>---</td> 
        <td>Timeline 2</td>
        <td>Duration 2</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>Completion Status 2</td>
      </tr>
    </tbody>
  </table>

  </div>
</div>


</body>
</html>