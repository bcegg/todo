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
    <input type="text" name="create">
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
      <td><input type="submit" value="更新"></td>
      <td><input type="submit" value="削除"></td>
    </tr>
  </table>
  @endforeach
</body>

</html>