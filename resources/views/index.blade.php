<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List</title>
  <style>
    body {
      width: 1000px;
      background: #0000FF;
    }
    
    .todo-list {
      position: relative;
      width: 80%;
      padding: 70px 0 50px;
      margin: 0 auto;
      background: #ffffff;
      border-radius: 10px;
    }

    h1 {
      position: absolute;
      top: 10px;
      left: 30px;
      font-size: 25px;
    }

    .form__item-first {
      margin-bottom: 20px;
    }

    .form__item-input {
      padding: 10px 200px;
      margin-left: 30px;
      border: solid 1px #c0c0c0;
      border-radius: 5px;
    }

    .btn__add {
      padding: 10px 20px;
      margin-left: 100px;
      background: #ffffff;
      color: #800080;
      border: solid 2px #800080;
      border-radius: 5px;
    }

    .form__item-second {
      
    }

    .form__item-task {
      padding: 7px 100px;
      border: solid 1px #c0c0c0;
      border-radius: 5px;
    }

    .btn__update {
      padding: 10px 20px;
      margin-left: 30px;
      background: #ffffff;
      color: #ff0000;
      border: solid 2px #ff0000;
      border-radius: 5px;
    }

    .btn__delete {
      padding: 10px 20px;
      margin-left: 50px;
      background: #ffffff;
      color: #00bfff;
      border: solid 2px #00bfff;
      border-radius: 5px;
    }
  </style>
</head>

<body>
    <div class="todo-list">
      <h1>Todo List</h1>
      <form class="form" name="todo" method="post" action="/todos/create">
        @csrf
        <div class="form__item-first">
            <input type="text" name="text" class="form__item-input" maxlength="20" required>
            <input type="submit" value="追加" class="btn__add">
        </div>
        
        <div class="form__item-second">
        @foreach($todos as $todo)
        {{$todo->created_at}}
        @endforeach
        <div class="form__item-label">タスク名</div>
        <input type="text" name="task" class="form__item-task">
        <input type="submit" value="更新" class="btn__update">
        <input type="reset" value="削除" class="btn__delete">
        </div>
      </form>  
    </div> 
</body>
</html>