<!DOCTYPE html>
<html>
    <header>
        <style>
            table{
                border-collapse: collapse;
                margin-top: 20px;
            }
            table tr td{
                padding: 5px;
                border: black solid 1px ;
            }
        </style>
        <title>電影評分系統</title>
    </header>
    <body style="height: 100%">
        <div style="font-size: larger; margin-bottom: 20px">
            評分記錄查詢
        </div>
        <div>
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
                    @foreach( $movies as $movie)
                       <tr>
                           <td>
                                {{$movie->title}}
                           </td>
                           <td>
                               {{$movie->rating}}
                           </td>
                       </tr>
                    @endforeach
            </table>
        </form>
        </div>
    </body>
</html>

