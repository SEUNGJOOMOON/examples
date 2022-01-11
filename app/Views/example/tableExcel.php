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
<!-- JQuery 필수 -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
<script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.15.5/xlsx.full.min.js"></script>
<style>
    .green-btn {
        box-shadow:inset 0px 1px 0px 0px #9acc85;
        background:linear-gradient(to bottom, #74ad5a 5%, #68a54b 100%);
        background-color:#74ad5a;
        border:1px solid #3b6e22;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
        font-family:Arial;
        font-size:13px;
        font-weight:bold;
        padding:6px 12px;
        text-decoration:none;
    }
    .green-btn:hover {
        background:linear-gradient(to bottom, #68a54b 5%, #74ad5a 100%);
        background-color:#68a54b;
    }
    .green-btn:active {
        position:relative;
        top:1px;
    }

    .btn-group {
        width:100%;
        text-align: right;
        padding: 20px;
    }

</style>
<div style="width:90%;margin:0 auto;">
    <h1>월별 가전제품 판매현황</h1>
    <div class="btn-group">
        <a href="#" class="green-btn" id="excel-down-filtered" >엑셀 다운로드(필터적용)</a>
        <a href="#" class="green-btn" id="excel-down-all" >엑셀 다운로드(전체)</a>
    </div>
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
                    <td style="text-align:right;"><?=$item['SALES_PRICE'] * $item['SALES_COUNT']?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<script>
    var excel = {
        file_name: "",
        setFileName: function(name){
            this.file_name = name;
        },
        _getFileName: function(){
            return this.file_name;
        },
        download: function(target, sheet_name){
            var work_book = XLSX.utils.book_new(); 
        
            var work_sheet = XLSX.utils.table_to_sheet(target);
            XLSX.utils.book_append_sheet(work_book, work_sheet, sheet_name);
            var work_book_down = XLSX.write(work_book, {bookType:'xlsx',  type: 'binary'});
            
            saveAs(new Blob([this._save(work_book_down)],{type:"application/octet-stream"}), this._getFileName() + "_" + this._getCurrent() + ".xlsx");
        },
        _getCurrent: function(){
            let today = new Date(); 
            let year = today.getFullYear();
            let month = today.getMonth() + 1;
            let date = today.getDate();
            let day = today.getDay();
            let hours = today.getHours();
            let minutes = today.getMinutes();
            let seconds = today.getSeconds();
            let milliseconds = today.getMilliseconds();

            return String(year) + String(month) + String(date) + String(hours) + String(minutes) + String(seconds) + String(milliseconds);
        },
        _save: function(s){
            var buf = new ArrayBuffer(s.length); //convert s to arrayBuffer
            var view = new Uint8Array(buf);  //create uint8array as viewer
            for (var i=0; i<s.length; i++) view[i] = s.charCodeAt(i) & 0xFF; //convert to octet
            return buf;    
        }
    }

    var dt_columns =  [
        { title: "판매월", width:100},
        { title: "품목", width:100},
    ]

    $(document).ready(function() {


        /* 필터적용 엑셀 Download */
        $("#excel-down-filtered").click(function(){
            event.preventDefault();

            dataTable.page.len(-1).draw(); // 모든 페이지를 출력하기 위해 data table을 전체로 변경

            excel.setFileName("엑셀(필터적용)");
            excel.download($("#dataTable")[0], "Sheet1");

        });

        /* 전체 엑셀 Download */
        $("#excel-down-all").click(function(){
            event.preventDefault();

            /* 전체 다운로드를 위해 data table 필터 제거 */
            dataTable.column(0).search("").draw();
            dataTable.column(1).search("").draw();

            dataTable.page.len(-1).draw(); // 모든 페이지를 출력하기 위해 data table을 전체로 변경

            excel.setFileName("엑셀(전체)");
            excel.download($("#dataTable")[0], "Sheet1");
        });

        /* 테이블 load */
        dataTable = $("#dataTable").DataTable({
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "전체"]],
            columnDefs: [
                { targets: 3 , render: $.fn.dataTable.render.number( ',' ) }
            ],
            "initComplete": function () {
                this.api().columns().every( function (e) {
                    if(e==0 || e==1){
                        var column = this;
                        col_name = dt_columns[Number(this[0].toString())].title;
                        
                        var select = $('<select><option value="">'+col_name+'</option></select>')
                        .appendTo( $(column.header()).empty() )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
                            column.search( val ? '^'+val+'$' : '', true, false ).draw();
                        } );

                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    }
                });
            }
        });
    } );


//http://b1ix.net/398   
</script>


