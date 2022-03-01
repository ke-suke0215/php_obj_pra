<?php
declare(strict_types=1);

require_once dirname(__FILE__).'/Task.php';


class TaskSheet {
  public $tasks = [];

  // タスクを追加するメソッド
  public function addTask(Task $task): void {
    $this->tasks[] = $task;
  }

  // タスクを表示するメソッド
  public function show(): void {
    foreach ($this->tasks as $task) {
      if ($task->isCompleted()) {
        echo '<b>'.$task->name.'</b><br>';
      } else {
        echo $task->name.'<br>';        
      }
    }
  }
}
?>