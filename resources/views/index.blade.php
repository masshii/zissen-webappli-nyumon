<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo List</title>
  <style>
    .container {
      background-color: #0000ff;
      height: 100vh;
      width: 100vw;
      position: relative;
    }

    .todo-list {
      background-color: #fff;
      position: absolute;
      width: 50vw;
      padding: 30px;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 10px;
    }

    .title {
      font-weight; bold;
      font-size: 25px;
    }

    .mb-15 {
      margin-bottom: 15px;
    }

    .between {
      justify-content: space-between;
    }

    .flex {
      display: flex;
    }

    .mb-30 {
      margin-bottom: 30px;
    }

    .input-add {
      width: 80%;
      padding: 5px;
      font-size: 14px;
      border: solid 1px #c0c0c0;
      border-radius: 5px;
    }

    .button-add {
      text-align: left;
      padding: 8px 16px;
      font-size: 12px;
      background: #fff;
      font-weight: bold;
      color: #800080;
      border: solid 2px #800080;
      border-radius: 5px;
    }

    table {
      text-align: center;
      width: 100%;
    }
    
    .input-update {
      width: 90%;
      padding: 5px ;
      border: solid 1px #c0c0c0;
      border-radius: 5px;
      font-size: 14px;
    }

    .button-update {
      text-align: left;
      padding: 8px 16px;
      font-size: 12px;
      font-weight: bold;
      background: #fff;
      color: #ff0000;
      border: solid 2px #ff0000;
      border-radius: 5px;
    }

    .button-delete {
      text-align: left;
      padding: 8px 16px;
      font-size: 12px;
      font-weight: bold;
      background: #fff;
      color: #00bfff;
      border: solid 2px #00bfff;
      border-radius: 5px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="todo-list">
      <p class="title mb-15">Todo List</p>
      @if($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
      @endif  
      <div class="todo">
      <form class="flex between mb-30" action="/todos/create" method="post">
        @csrf
        <input type="text" class="input-add" name="content">
        <input class="button-add" type="submit" value="??????">
      </form>
        <table>
          <tbody>
            <tr>
              <th>?????????</th>
              <th>????????????</th>
              <th>??????</th>
              <th>??????</th>
            </tr>
            @foreach($todos as $todo)
            <tr>
              <td>
              {{$todo->created_at}}
              </td>
                <form action="/todos/update/{{$todo->id}}" method="post"> 
                  @csrf
                  <input type="hidden" name="_method" value="PUT">
              <td>
                  <input type="text" class="input-update" name="content" value="{{$todo->title}}">
              </td>
              <td>
                  <input class="button-update" type="submit" value="??????">
                </form>
              </td>
              <td>
                <form action="/todos/delete/{{$todo->id}}" method="post"> 
                  @csrf
                  <input type="hidden" name="_method" value="DELETE">
                  <input class="button-delete" type="submit" value="??????">
                </form>  
              </td>
            </tr>
            @endforeach
          </tbody>
        </table> 
      </div>
    </div>
  </div>
</body>
</html>