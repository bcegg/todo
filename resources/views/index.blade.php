<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TODO</title>
</head>

<body>
  <form action="/todo/create" method="post">
    @csrf
    <input type="text" name="content">
    <input type="submit" value="送信">
  </form>
  @foreach($items as $item)
  <table>
    <tr>
      <th>作成日</th>
      <th>タスク名</th>
    </tr>
    <tr>
      <td>{{$item->created_at}}</td>
      <td><input type="text" name="content" value="{{$item->content}}"></td>
      <td>
        <form action="/todo/update" method="post">
          @csrf
          <input value="{{$item->id}}" style="display:none">
          <button>更新</button>
        </form>
      </td>
      <td>
        <form action="/todo/delete" method="post">
          @csrf
          <input id="id" name="id" value="{{$item->id}}" style="display:none">
          <button>削除</button>
        </form>
      </td>
    </tr>
  </table>
  @endforeach
</body>

</html>