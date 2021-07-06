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
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Never expand</a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarsExample01" style="">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            </ul>
            <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </form>
        </div>
        </nav>
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
