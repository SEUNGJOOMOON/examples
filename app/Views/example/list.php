<!-- JQuery 필수 -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<div style="width:90%;margin:0 auto;">
    <h1>JavaSript 예제</h1>
    <table id="dataTable" style="width:100%" class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th style="text-align:center;">Title</th>
                <th style="text-align:center;">Blog Link</th>
                <th style="text-align:center;">Demo Link</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align:center;">[js]data tables.js 사용하기</td>
                <td style="text-align:center;"><a href="https://nick901106.tistory.com/3?category=985637" target="_blank"><i class="fa fa-tv" style="font-size:36px"></i></a></td>
                <td style="text-align:center;"><a href="/examples/public/index.php/example/dataTable"target="_blank" ><i class="fa fa-tv" style="font-size:36px"></i></a></td>
            </tr>
            <tr>
                <td style="text-align:center;">[js]Sheet.js를 사용한 클라이언트에서 excel download 예제!</td>
                <td style="text-align:center;"><a href="https://nick901106.tistory.com/49?category=985637" target="_blank"><i class="fa fa-tv" style="font-size:36px"></i></a></td>
                <td style="text-align:center;"><a href="/examples/public/index.php/example/tableExcel"target="_blank" ><i class="fa fa-tv" style="font-size:36px"></i></a></td>
            </tr>
            <tr>
                <td style="text-align:center;">[js]Google charts.js로 데이터 시각화를 해보자.</td>
                <td style="text-align:center;"><a href="https://nick901106.tistory.com/12?category=985637" target="_blank"><i class="fa fa-tv" style="font-size:36px"></i></a></td>
                <td style="text-align:center;"><a href="/examples/public/index.php/example/googleChart"target="_blank" ><i class="fa fa-tv" style="font-size:36px"></i></a></td>
            </tr>
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    } );
</script>