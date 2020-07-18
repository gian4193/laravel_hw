<!DOCTYPE html>
<html>
    <header>
        <style>
            table{
                border-collapse: collapse;
                margin-top: 20px;
            }
            table tr td{
                border: black solid 1px ;
            }
        </style>
    </header>
    <body>
        <p>評分記錄查詢</p>
        <form action="/record_get" method="get" name="type_user">
            <input name="user_id" placeholder="user_id"/>
            <input type="submit" />
            <table>
                <tr>
                    <th>
                        movie_id
                    </th>
                    <th>
                        rating
                    </th>
                </tr>
               @foreach($movies as $movie)
                   <tr>
                       <td>
                            {{$movie->movie_id}}
                       </td>
                       <td>
                           {{$movie->rating}}
                       </td>
                   </tr>
                @endforeach
            </table>
        </form>
    </body>
</html>

