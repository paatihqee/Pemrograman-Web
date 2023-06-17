<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css">

    <title>Taskify</title>
  </head>
  <body>
    <header>
      <h1>Taskify</h1>
    </header>

    <main>
        <div class="task-list">
          <h2>To Do</h2>
          <div class="task-container" id="todo-container">
            <?php
              $todoTasks = getTasksByStatus('To Do');
              foreach ($todoTasks as $task) {
                echo "<div class='task'>";
                echo "<span class='task-title'>" . $task['title'] . "</span>";
                echo "<span class='task-description'>" . $task['description'] . "</span>";
                echo "</div>";
              }
            ?>
            <br>
            <button class="add-task-button" onclick="location.href='add.html';">Add Task</button>
          </div>
        </div>
    
        <div class="task-list">
          <h2>In Progress</h2>
          <div class="task-container" id="inprogress-container">
            <?php
              $inProgressTasks = getTasksByStatus('In Progress');
              foreach ($inProgressTasks as $task) {
                echo "<div class='task'>";
                echo "<span class='task-title'>" . $task['title'] . "</span>";
                echo "<span class='task-description'>" . $task['description'] . "</span>";
                echo "</div>";
              }
            ?>
          </div>
        </div>
    
        <div class="task-list">
          <h2>Done</h2>
          <div class="task-container" id="done-container">
            <?php
              $doneTasks = getTasksByStatus('Done');
              foreach ($doneTasks as $task) {
                echo "<div class='task'>";
                echo "<span class='task-title'>" . $task['title'] . "</span>";
                echo "<span class='task-description'>" . $task['description'] . "</span>";
                echo "</div>";
              }
            ?>
          </div>
        </div>

        <button class="add-task-button" onclick="location.href='add.html';">Add Task</button>
      </main>

    <!-- <div id="task-form-container" class="task-form-container">
      <div class="task-form">
        <h2>Add Task</h2>
        <form id="task-form" onsubmit="addTask(event)">
          <label for="title">Title:</label>
          <input type="text" id="title" name="title" required />
          <label for="description">Description:</label>
          <textarea id="description" name="description"></textarea>
          <button type="submit">Save</button>
          <button type="button" onclick="hideTaskForm()">Cancel</button>
        </form>
      </div>
    </div> -->
  </body>
</html>
