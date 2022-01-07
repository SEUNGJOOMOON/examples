<!DOCTYPE html>
<?php

    /* 테스트 데이터 생성 */
    $items = [];
    $items[0] = array("DATE" => "2021년 1월", "ITEM_NAME" => "냉장고", "SALES_COUNT" => 67, "SALES_PRICE" => 67000000);
    $items[1] = array("DATE" => "2021년 1월", "ITEM_NAME" => "TV", "SALES_COUNT" => 37, "SALES_PRICE" => 14000000);
    $items[2] = array("DATE" => "2021년 1월", "ITEM_NAME" => "노트북", "SALES_COUNT" => 67, "SALES_PRICE" => 9500000);
    $items[3] = array("DATE" => "2021년 1월", "ITEM_NAME" => "에어프라이어", "SALES_COUNT" => 32, "SALES_PRICE" => 9000000);
    $items[4] = array("DATE" => "2021년 1월", "ITEM_NAME" => "선풍기", "SALES_COUNT" => 300, "SALES_PRICE" => 5000000);
    $items[5] = array("DATE" => "2021년 1월", "ITEM_NAME" => "에어컨", "SALES_COUNT" => 42, "SALES_PRICE" => 42000000);
    $items[6] = array("DATE" => "2021년 1월", "ITEM_NAME" => "건조기", "SALES_COUNT" => 96, "SALES_PRICE" => 32000000);

    $items[7] = array("DATE" => "2021년 2월", "ITEM_NAME" => "냉장고", "SALES_COUNT" => 23, "SALES_PRICE" => 67000000);
    $items[8] = array("DATE" => "2021년 2월", "ITEM_NAME" => "TV", "SALES_COUNT" => 12, "SALES_PRICE" => 14000000);
    $items[9] = array("DATE" => "2021년 2월", "ITEM_NAME" => "노트북", "SALES_COUNT" => 24, "SALES_PRICE" => 9500000);
    $items[10] = array("DATE" => "2021년 2월", "ITEM_NAME" => "에어프라이어", "SALES_COUNT" => 12, "SALES_PRICE" => 9000000);
    $items[11] = array("DATE" => "2021년 2월", "ITEM_NAME" => "선풍기", "SALES_COUNT" => 43, "SALES_PRICE" => 5000000);
    $items[12] = array("DATE" => "2021년 2월", "ITEM_NAME" => "에어컨", "SALES_COUNT" => 23, "SALES_PRICE" => 42000000);
    $items[13] = array("DATE" => "2021년 2월", "ITEM_NAME" => "건조기", "SALES_COUNT" => 14, "SALES_PRICE" => 32000000);

    $items[14] = array("DATE" => "2021년 3월", "ITEM_NAME" => "냉장고", "SALES_COUNT" => 23, "SALES_PRICE" => 67000000);
    $items[15] = array("DATE" => "2021년 3월", "ITEM_NAME" => "TV", "SALES_COUNT" => 43, "SALES_PRICE" => 14000000);
    $items[16] = array("DATE" => "2021년 3월", "ITEM_NAME" => "노트북", "SALES_COUNT" => 12, "SALES_PRICE" => 9500000);
    $items[17] = array("DATE" => "2021년 3월", "ITEM_NAME" => "에어프라이어", "SALES_COUNT" => 34, "SALES_PRICE" => 9000000);
    $items[18] = array("DATE" => "2021년 3월", "ITEM_NAME" => "선풍기", "SALES_COUNT" => 23, "SALES_PRICE" => 5000000);
    $items[19] = array("DATE" => "2021년 3월", "ITEM_NAME" => "에어컨", "SALES_COUNT" => 14, "SALES_PRICE" => 42000000);
    $items[20] = array("DATE" => "2021년 3월", "ITEM_NAME" => "건조기", "SALES_COUNT" => 23, "SALES_PRICE" => 32000000);


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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js"></script>
        <title>datatable.js 엑셀 다운로드 예제</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <div style="width:90%;margin:0 auto;">
            <h1>월별 가전제품 판매현황</h1>
            <table id="dataTable" style="width:100%" class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th style="text-align:center;">판매월</th>
                        <th style="text-align:center;">상품명</th>
                        <th style="text-align:center;">판매대수</th>
                        <th style="text-align:center;">총 판매금액</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($items as $item){ ?>
                        <tr>
                            <td style="text-align:center;"><?=$item['DATE']?></td>
                            <td style="text-align:center;"><?=$item['ITEM_NAME']?></td>
                            <td style="text-align:right;"><?=$item['SALES_COUNT']?></td>
                            <td style="text-align:right;"><?=number_format($item['SALES_PRICE'] * $item['SALES_COUNT'])?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>
<script>
    $(document).ready(function() {
        /* 테이블 load */
        dataTable = $("#dataTable").DataTable({
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "전체"]],
                    // columnDefs: [
                    //     { targets: 3 , render: $.fn.dataTable.render.number( ',' ) },
                    //     { targets: 4 , render: $.fn.dataTable.render.number( ',' ) },
                    //     { targets: 5 , render: $.fn.dataTable.render.number( ',' ) },
                    //     { targets: 6 , render: $.fn.dataTable.render.number( ',' ) }
                    // ],
                    
                    // "footerCallback": function ( row, data, start, end, display ) {
                    //     var api = this.api(), data;
                        
                    //     var intVal = function ( i ) {
                    //         return typeof i === 'string' ?
                    //             i.replace(/[\$,]/g, '')*1 :
                    //             typeof i === 'number' ?
                    //                 i : 0;
                    //     };

                    //     var comma = function (num){
                    //         var len, point, str;

                    //         num = num + "";
                    //         point = num.length % 3 ;
                    //         len = num.length;

                    //         str = num.substring(0, point);
                    //         while (point < len) {
                    //             if (str != "") str += ",";
                    //             str += num.substring(point, point + 3);
                    //             point += 3;
                    //         }

                    //         return str;

                    //     }    
                        
                    //     salesPageTotal = api.column( 3, { page: 'current'} ).data().reduce( function (a, b) {
                    //         return intVal(a) + intVal(b);
                    //     }, 0 );
                    //     returnPageTotal = api.column( 4, { page: 'current'} ).data().reduce( function (a, b) {
                    //         return intVal(a) + intVal(b);
                    //     }, 0 );
                    //     colltPageTotal = api.column( 5, { page: 'current'} ).data().reduce( function (a, b) {
                    //         return intVal(a) + intVal(b);
                    //     }, 0 );
            

                    //     salesTotal = api.column(3, { search:'applied' }).data().reduce( function (a, b) {
                    //         return intVal(a) + intVal(b);
                    //     }, 0 );
                    //     colltTotal = api.column(5, { search:'applied' }).data().reduce( function (a, b) {
                    //         return intVal(a) + intVal(b);
                    //     }, 0 );
                    //     returnTotal = api.column(4, { search:'applied' }).data().reduce( function (a, b) {
                    //         return intVal(a) + intVal(b);
                    //     }, 0 );

                    //     $('tr:eq(0) th:eq(1)', api.table().footer()).html(
                    //         comma(salesPageTotal)
                    //     );
                    //     $('tr:eq(1) th:eq(1)', api.table().footer()).html(
                    //         comma(salesTotal)
                    //     );

                    //     $('tr:eq(0) th:eq(2)', api.table().footer()).html(
                    //         comma(returnPageTotal)
                    //     );
                    //     $('tr:eq(1) th:eq(2)', api.table().footer()).html(
                    //         comma(returnTotal)
                    //     );

                    //     $('tr:eq(0) th:eq(3)', api.table().footer()).html(
                    //         comma(colltPageTotal)
                    //     );
                    //     $('tr:eq(1) th:eq(3)', api.table().footer()).html(
                    //         comma(colltTotal)
                    //     );
                    // },
                    // "initComplete": function () {
                    //     this.api().columns().every( function (e) {
                    //         if(e==0 || e==1){

                    //             var target = e == 0? "filter-client-id" : "filter-outstd-type";

                    //             var column = this;
                    //             col_name = dt_columns[Number(this[0].toString())].title
                    //             var select = $('<select><option value="">'+col_name+'</option></select>')
                    //             .appendTo( $("#" + target).empty() )
                    //             .on( 'change', function () {
                    //                 var val = $.fn.dataTable.util.escapeRegex(
                    //                     $(this).val()
                    //                 );
                    //                 column.search( val ? '^'+val+'$' : '', true, false ).draw();
                    //             } );

                    //             column.data().unique().sort().each( function ( d, j ) {
                    //                 select.append( '<option value="'+d+'">'+d+'</option>' )
                    //             } );
                    //         }
                    //     } );

                    //     $("#filter-syear").html('<select id="select-adate" style="color:#858585;background-color:#FFF;border:1px solid #D5D5D5;"><option value="">전체</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option></select>');

                    //     var _that = this;

                    //     $("#select-adate").change(function(){
                    //         var val = $.fn.dataTable.util.escapeRegex(
                    //                     $(this).val()
                    //                 );
                    //         _that.api().column(2).search(val, true, false).draw();
                    //     });
                    // }
                });
        

    } );

    var dataTable = null; // 월별합계 datatable 객체 저장

    //월별합계 엑셀 다운
    function monthlyTotalExcel(){
        exportExcel();
    };

    //월별합계 거래처별 엑셀 다운
    function monthlyTotalExcelAll(){
        var wb = XLSX.utils.book_new(); 

        dataTable.column(1).data().unique().each(function(outstd_type, index){ 

            dataTable.columns(1).search(outstd_type).draw();

            dataTable.page.len(-1).draw();
            dataTable.order(0, 2).draw();
            //현재 테이블 복사
            var clone = $("#monthly-total-table").clone();
            //클론 테이블 페이지 합계 삭제
            $(clone).find("tfoot > tr").eq(-2).remove();
            // $(clone).find("tfoot > tr").eq(-1).remove();
            
            var newWorksheet = XLSX.utils.table_to_sheet($(clone)[0]);
            XLSX.utils.book_append_sheet(wb, newWorksheet, outstd_type);
            
            

        })

        var wbout = XLSX.write(wb, {bookType:'xlsx',  type: 'binary'});
        
        saveAs(new Blob([s2ab(wbout)],{type:"application/octet-stream"}), '미수채권_' + _getCurrent() + '.xlsx');

        location.reload();
    };

    function exportExcel(){ 
        var wb = XLSX.utils.book_new(); 

        dataTable.page.len(-1).draw();
        dataTable.order(0, 1, 2).draw();
        //현재 테이블 복사
        var clone = $("#monthly-total-table").clone();
        //클론 테이블 페이지 합계 삭제
        $(clone).find("tfoot > tr").eq(-2).remove();
        // $(clone).find("tfoot > tr").eq(-1).remove();
        
        var newWorksheet = XLSX.utils.table_to_sheet($(clone)[0]);
        XLSX.utils.book_append_sheet(wb, newWorksheet, "미수채권");
        var wbout = XLSX.write(wb, {bookType:'xlsx',  type: 'binary'});
        
        saveAs(new Blob([s2ab(wbout)],{type:"application/octet-stream"}), '미수채권_' + _getCurrent() + '.xlsx');
    }


    function s2ab(s) { 
    var buf = new ArrayBuffer(s.length); //convert s to arrayBuffer
    var view = new Uint8Array(buf);  //create uint8array as viewer
    for (var i=0; i<s.length; i++) view[i] = s.charCodeAt(i) & 0xFF; //convert to octet
    return buf;    
    }

    function _getCurrent(){
        let today = new Date(); 
        let year = today.getFullYear(); // 년도
        let month = today.getMonth() + 1;  // 월
        let date = today.getDate();  // 날짜
        let day = today.getDay();  // 요일
        let hours = today.getHours(); // 시
        let minutes = today.getMinutes();  // 분
        let seconds = today.getSeconds();  // 초
        let milliseconds = today.getMilliseconds(); // 밀리초

        return year + month + date + hours + minutes + seconds + milliseconds;
    }

   
</script>
