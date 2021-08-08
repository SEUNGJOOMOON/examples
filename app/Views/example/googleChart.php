<!DOCTYPE html>
<?php

    /* 테스트 데이터 생성 */
    $items = [];
    $items[0] = array("ITEM_NAME" => "냉장고", "SALES_COUNT" => 67, "SALES_PRICE" => 67000000);
    $items[1] = array("ITEM_NAME" => "TV", "SALES_COUNT" => 37, "SALES_PRICE" => 14000000);
    $items[2] = array("ITEM_NAME" => "노트북", "SALES_COUNT" => 67, "SALES_PRICE" => 9500000);
    $items[3] = array("ITEM_NAME" => "에어프라이어", "SALES_COUNT" => 32, "SALES_PRICE" => 9000000);
    $items[4] = array("ITEM_NAME" => "선풍기", "SALES_COUNT" => 300, "SALES_PRICE" => 5000000);
    $items[5] = array("ITEM_NAME" => "에어컨", "SALES_COUNT" => 42, "SALES_PRICE" => 42000000);
    $items[6] = array("ITEM_NAME" => "건조기", "SALES_COUNT" => 96, "SALES_PRICE" => 32000000);


?>
<html>
    <head>
        <!-- JQuery 필수 -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <title>googlechart.js예제</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <div style="width:90%;margin:0 auto;">
            <h1>XX마트 X월 가전제품 판매현황</h1>
            <table id="dataTable" style="width:100%">
                <thead>
                    <tr>
                        <th>판매월</th>
                        <th>상품명</th>
                        <th>판매대수</th>
                        <th>총 판매금액</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($items as $item){ ?>
                        <tr>
                            <td style="text-align:center;">20XX년 XX월</td>
                            <td style="text-align:center;"><?=$item['ITEM_NAME']?></td>
                            <td style="text-align:right;"><?=$item['SALES_COUNT']?></td>
                            <td style="text-align:right;"><?=number_format($item['SALES_PRICE'])?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div style="width:90%;margin:0 auto;">
            <div style="width:45%;display:inline-block">
                <div id="chart1"></div>
            </div>
            <div style="width:45%;display:inline-block">
                <div id="chart2"></div>
            </div>
        </div>
    </body>
</html>
<script>
    $(document).ready(function() {
        /* 테이블 load */
        $('#dataTable').DataTable();

    } );

    /* 상품 데이터를 자바스크립트에서 사용하기 위해 jSON으로 변환 */
    var items = <?php echo json_encode($items) ?>;

    // google chart API 로드
    google.charts.load('current', {'packages':['corechart']});

    // google chart API가 로드된 후 실제 차트를 그려주는 함수 호출
    google.charts.setOnLoadCallback(drawChartCircle);
    google.charts.setOnLoadCallback(drawChartBar);

    /* 원형차트 그려주는 함수 */
    function drawChartCircle() {

        // 실제 데이터 셋팅하기
        var data = new google.visualization.DataTable();

        // 차트의 컬럼(헤더) 추가하기 (addColumn(데이터 타입, 데이터))
        data.addColumn('string', '상품명');
        data.addColumn('number', '판매대수');


        // 차트의 데이터 추가하기(상품명, 판매대수)
        chart_data = [];
        items.forEach(function(el){
            chart_data.push([el.ITEM_NAME, el.SALES_COUNT])
        })

        data.addRows(chart_data);

        // 옵션 설정(차트 제목, 크기)
        var options = {'title':'상품별 판매대수',
                        'width':600,
                        'height':450};

        // 차트 그리기
        var chart = new google.visualization.PieChart(document.getElementById('chart1'));
        chart.draw(data, options);
    }

    /* 막대차트 그려주는 함수 */
    function drawChartBar() {

        // 실제 데이터 셋팅하기
        var data = new google.visualization.DataTable();

        // 차트의 컬럼(헤더) 추가하기 (addColumn(데이터 타입, 데이터))
        data.addColumn('string', '상품명');
        data.addColumn('number', '판매금액');


        // 차트의 데이터 추가하기(상품명, 판매금액)
        chart_data = [];
        items.forEach(function(el){
            chart_data.push([el.ITEM_NAME, el.SALES_PRICE])
        })

        data.addRows(chart_data);

        // 옵션 설정(차트 제목, 크기)
        var options = {'title':'상품별 판매금액',
                        'width':600,
                        'height':450};

        // 차트 그리기
        var chart = new google.visualization.ColumnChart(document.getElementById('chart2'));
        chart.draw(data, options);
    }
</script>
