<!DOCTYPE html>
<html>
    <head>
        <!-- JQuery 필수 -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <title>datatable.js예제</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <div style="width:90%;">
            <h1>기본 테이블 사용</h1>
            <table id="example" style="width:100%">
                <thead>
                    <tr>
                        <th>글번호</th>
                        <th>제목</th>
                        <th>작성자</th>
                        <th>조회수</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 임의의 50개의 리스트를 만듭니다. -->
                    <?php for($i=1; $i <= 50; $i++){ ?>
                        <tr>
                            <td><?=$i?></td>
                            <td>게시글입니다.<?=$i?></td>
                            <td>작성자<?=$i?></td>
                            <td><?=$i?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div style="width:90%;">
            <h1>페이징없는 스크롤 테이블</h1>
            <table id="example2" style="width:100%">
                <thead>
                    <tr>
                        <th>글번호</th>
                        <th>제목</th>
                        <th>작성자</th>
                        <th>조회수</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- 임의의 50개의 리스트를 만듭니다. -->
                    <?php for($i=1; $i <= 50; $i++){ ?>
                        <tr>
                            <td><?=$i?></td>
                            <td>게시글입니다.<?=$i?></td>
                            <td>작성자<?=$i?></td>
                            <td><?=$i?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
<script>
    $(document).ready(function() {
        $('#example').DataTable();

        $('#example2').DataTable({
            "scrollY":        "200px",
            "scrollCollapse": true,
            "paging":         false
        });
    } );
</script>
