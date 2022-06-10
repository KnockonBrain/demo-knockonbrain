<?php
session_start();
//echo "hi";
include "../client12/jheader.php";
//echo "hvjhb";
$cid=$_SESSION['ID'];
include 'data.php';
$stmt = $pdo->prepare("SELECT * FROM exam_category WHERE cid = :cid or cid is NULL");
$stmt->execute(['cid' => $cid]); 
$result = $stmt->FetchAll();   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M2DF9WK');</script>
<!-- End Google Tag Manager -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 
    <title>Result of Applicants</title>
<!--   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">-->
<!--<script type="text/javascript" src="https://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>-->
     <!--<script src="pagination.js"></script>-->
    
   
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-193335251-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-193335251-1');
</script>


 <script>
// "use strict";

// !function() {
//   var t = window.driftt = window.drift = window.driftt || [];
//   if (!t.init) {
//     if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
//     t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
//     t.factory = function(e) {
//       return function() {
//         var n = Array.prototype.slice.call(arguments);
//         return n.unshift(e), t.push(n), t;
//       };
//     }, t.methods.forEach(function(e) {
//       t[e] = t.factory(e);
//     }), t.load = function(t) {
//       var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
//       o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
//       var i = document.getElementsByTagName("script")[0];
//       i.parentNode.insertBefore(o, i);
//     };
//   }
// }();
// drift.SNIPPET_VERSION = '0.3.1';
// drift.load('ntw3vk4zr7ni');
 </script>
<!-- End of Async Drift Code -->
  
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61309803d6e7610a49b3408e/1feit3k4h';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  
  
<!--script for data table    -->
    <script>
        $(document).ready(function(){
            function create_list(data){
                var table = $('#table');
                table.html('');
                var table_head = $('<tr>');
                
                if(document.getElementById("filter").value==='ctest'){
                table_head.append($('<th>').text('Email'))
                table_head.append($('<th>').text('Test Name'))
                table_head.append($('<th>').text('score (%)'))
                table_head.append($('<th>').text('Time & Date'))
                table_head.append($('<th>').text('Video Links'))
                table_head.append($('<th>').text('AI Accuracy'))
                table.append(table_head);
                for(var x in data){
                    var tr = $('<tr>');
                    tr.append($('<td>').text(data[x].email));
                    if(data[x].lg==='cpp' || data[x].lg==='Cpp')
                      data[x].lg='C++';
                    tr.append($('<td>').text(data[x].lg+" Coding"));
                    tr.append($('<td>').text(data[x].res_per));
                    tr.append($('<td>').text(data[x].end_time));
                  //  tr.append($('<td>').text(data[x].lg1));
                  //  tr.append($('<td>').text(data[x].lg2));
                  //  tr.append($('<td>').text(data[x].name));
                    tr.append($("<td>"+"<a href="+data[x].video_link1+">"+"Video link1"+"</a>"+"<br>"+"<a href="+data[x].video_link2+">"+"Video link2"+"</a>"));
                    tr.append($('<td>').text(data[x].AI_ACCURACY));
                    table.append(tr);
                };
                }
                 else{
                    table_head.append($('<th>').text('Email'))
                table_head.append($('<th>').text('Test Name'))
                table_head.append($('<th>').text('Score(%)'))
                table_head.append($('<th>').text('Time & Date'))
                table_head.append($('<th>').text('Video'))
                table_head.append($('<th>').text('AI Accuracy'))
                table.append(table_head);
                for(var x in data){
                    var tr = $('<tr>');
                    tr.append($('<td>').text(data[x].email));
                    tr.append($('<td>').text(data[x].quiz_name+" MCQ"));
                    tr.append($('<td>').text(data[x].scoreper));
                    tr.append($('<td>').text(data[x].Start_time));
                    tr.append($("<td>"+"<a href="+data[x].video_link+">"+"Video link"+"</a>"));
                      tr.append($('<td>').text(data[x].AI_accuracy));
                    
                    table.append(tr);
                };
                }
               
            
            }
            function create_all1(data){
                var table = $('#table');
                table.html('');
                console.log("dgdhgv");
                var table_head = $('<tr>');
                table_head.append($('<th>').text('Email'))
                table_head.append($('<th>').text('Test Name'))
                table_head.append($('<th>').text('score (%)'))
                table_head.append($('<th>').text('Time & Date'))
                table_head.append($('<th>').text('Video Links'))
                table_head.append($('<th>').text('AI Accuracy'))
                table.append(table_head);
                console.log("in our links");
           /*    for(var x in data){
                     console.log("in our data");
                    var tr = $('<tr>');
                    tr.append($('<td>').text(data[x].email));
                    if(data[x].lg==='cpp' || data[x].lg==='Cpp')
                      data[x].lg='C++';
                    tr.append($('<td>').text(data[x].lg+" Coding"));
                    tr.append($('<td>').text(data[x].res_per));
                    tr.append($('<td>').text(data[x].end_time));
                  //  tr.append($('<td>').text(data[x].lg1));
                  //  tr.append($('<td>').text(data[x].lg2));
                  //  tr.append($('<td>').text(data[x].name));
                    tr.append($("<td>"+"<a href="+data[x].video_link1+">"+"Video link-1"+"</a>"+"<br>"+"<a href="+data[x].video_link2+">"+"Video link-2"+"</a>"));
                    tr.append($('<td>').text(data[x].AI_ACCURACY));
                    table.append(tr);
                };*/
                 $.ajax({
                url:'final2.php?filter=all',
                type:'GET',
                success:function(data){
                    var d = JSON.parse(data);
                    console.log(document.getElementById("filter").value);
                    console.log(d);
                    create_all2(d);
                }
               })
            }
            function create_all2(data){
                var table = $('#table');
               for(var x in data){
                    var tr = $('<tr>');
                    tr.append($('<td>').text(data[x].email));
                    tr.append($('<td>').text(data[x].quiz_name+" MCQ"));
                    tr.append($('<td>').text(data[x].scoreper));
                    tr.append($('<td>').text(data[x].Start_time));
                    tr.append($("<td>"+"<a href="+data[x].video_link+">"+"Video link"+"</a>"));
                    tr.append($('<td>').text(data[x].AI_accuracy));
                    table.append(tr);
                };
            }
            $.ajax({
                url:'final1.php?filter=all',
                type:'GET',
                success:function(data){
                    console.log(document.getElementById("filter").value);
                    var d = JSON.parse(data);
                    console.log(d);
                    create_all1(d);
                }
            })
            $('#filter').on('change',function(){
                var filter = $(this).val();
                if(document.getElementById("filter").value==='all'){
                     $.ajax({
                        url:'final1.php?filter=all',
                        type:'GET',
                        success:function(data){
                            console.log("hi");
                            console.log(document.getElementById("filter").value);
                            var d = JSON.parse(data);
                            console.log(d);
                            create_all1(d);
                         }
                     })
                }
                else if(document.getElementById("filter").value==='ctest'){
                     $.ajax({
                        url:'final1.php?filter=ctest',
                        type:'GET',
                        success:function(data){
                        var d = JSON.parse(data);
                        console.log(d);
                        create_list(d);
                    }
                 })
              }
                else{
                $.ajax({
                url:'final2.php?filter='+filter,
                type:'GET',
                success:function(data){
                    var d = JSON.parse(data);
                    create_list(d);
                }
               })
            }
            })
        })
    </script>
<!--script for data table ends-->

<!--css starts-->
<style>
@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600");
body {
         /*font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";*/
          /*font-size: 1rem;*/
          /*font-weight: 400;*/
          /*/background-color: #f1f1f1;/*/
         /*/background-image: url("../images/bg2.jpg");/*/
         font-family: "Open Sans", sans-serif;
  font-size: 14px;
  /*font-weight: 1000;*/
          background-position: center;
      background-size: cover;
     background-image: linear-gradient( rgba(230, 234, 240,0.2), rgba(245, 247, 250,0.1) ),url(../bg.webp);
          overflow:visible;
        } 
        .btn-primary 
{
    color:black;
        margin-left: 900px;
                 background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
    margin-top: -80px;
}
 .li
    {
         width:100%;
         background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
         border:none;
         padding:5px;
         margin:1px;
    }
        .pager-nav {
    margin: 16px 0;
}
.pager-nav span {
    display: inline-block;
    padding: 4px 8px;
    margin: 1px;
    cursor: pointer;
    font-size: 14px;
    background-color: #FFFFFF;
    border: 1px solid #e1e1e1;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0,0,0,.04);
}
.pager-nav span:hover,
.pager-nav .pg-selected {
    background-color: #f9f9f9;
    border: 1px solid #CCCCCC;
}

table {
    color:black;
  border-collapse: collapse;
  margin: auto;
  width: 100%;
  padding: 2rem 2 rem !important;
  margin-bottom: 1rem; 
  padding-top:10px !important;
  padding-bottom:10px !important;
  overflow:scroll;
   font-size: 1rem;
          font-weight: 400;
}

.table td, .table th {
    border-top: 1px solid #eaeaea;
    word-wrap:break-word!important;
    padding: 1.05rem 0.75rem;
    white-space:normal;
    
}


tr:hover td {
    background-color: #edf6fa; 
    
}
.card {
    width:150%!important;
    /margin-left:300px!important;/
    margin-bottom:80px;
    background-color: #fff;
    border: 0;
    border-radius: .55rem;
    display: flex;
    flex-direction: column;
    word-wrap: break-word;
    background-clip: border-box;
    padding: 1.5rem 1.5rem 1rem 1.5rem;
    box-shadow: 0 9px 12px 0 #035753;
    border-radius:0px!important;
   /height:600px!important;/
    max-height:610px!important;
   overflow-y:auto;
}
.cardheader {
    
    padding: 2px 20px 10px;
    background: 0 0;
    margin-bottom: 0;
}
.image{
    width: 70px;
    height: 60px;
    margin-top: -20px;
    margin-left: 250px;
    margin-bottom: -70px
}

.cardtitle {
    font-weight: 500;
    border-bottom:none !important;
    letter-spacing: 5px;
    font-size: 28px;
    line-height: 1.2;
    text-transform: uppercase;
}
.fixed-button {
	position: fixed;
	bottom: -50px;
	right: 30px;
	opacity: 0;
	z-index: 9;
	-webkit-transition: all 0.5s ease;
	transition: all 0.5s ease;
	-webkit-animation: pulse 2s infinite;
	animation: pulse 2s infinite;
	border-radius: 0.25rem;
	display:none;
}
.page-link {
    color:#050a30 !important;
}
.page-item.active .page-link {
    color: white !important;
    background-color:#050a30 !important;
    border-color: #050a30 !important;
    z-index:1;
}

.select-block {
    width: 200px;
    position: relative;
    
  }
  .container{
       margin-top:-30px!important;
  }
 select {
     background: linear-gradient(-135deg, #1de9b6 0%, #1dc4e9 100%);
    width: 100%;
    border-radius:0px!important;
    /margin-left:216px;/
    height: 50px;
    font-size: 100%;
    font-weight: bold;
    cursor: pointer;
    border-radius: 0;
    background-color: #edf6fa;
    border: none;
    border: 2px solid #1dc4e9;
    border-radius: 4px;
    color: black;
    appearance: none;
    padding: 8px 38px 10px 18px;
    -webkit-appearance: none;
    -moz-appearance: none;
    transition:800ms ease all;
    /transition: color 0.3s ease, background-color 0.3s ease, border-bottom-color 0.3s ease;/
  }

  /* For IE <= 11 */
  select::-ms-expand {
    display: none;
  }


  select:hover,
  select:focus {
    /background:#fff;/
  color:#135878;
  background: linear-gradient(-135deg, #fff 0%, #1de9b6 100%);
  border-radius:50%!important;
  }


.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}

 a{
    color:#23a4a6;
    font-weight:bold;
    }

/media queries/
@media screen and (max-width: 1100px){
   
   .card{
       width:fit-content!important;
   }
   
   .image{
       
       display:none;
   }
    
}
@media all and (device-width: 768px) and (device-height: 1024px) and (orientation:portrait) {
  .card { 
      width:200%!important; 
      
  } 
   .image{
       
       display:none;
   }/*css rules for ipad portrait */
}
@media all and (device-width: 1024px) and (device-height: 768px) and (orientation:landscape) {
  .card { 
      color: blue; 
      
  } 
   .image{
       
       display:none;
   }/*css rules for ipad landscape */
}
@media screen and (max-width: 792px){
    
 
  .card {
      margin-left:10px;
      /width:100%!important;/
      overflow-x:scroll;
  }
  .table{
      overflow-x:scroll!important;
  }
  #filter{
      margin-top:25px;
      padding: 9px ;
      margin-left:10px;
  }
    .image{
       
       display:none;
   } 
    
}

@media (max-width:425px)
{
    html{
        width:fit-content;
        overflow:none!important;
    }
   .table{
       
       width:300px;
   }
   .card{
       width:fit-content!important;
   }
 .btn-primary {
    
    margin-left: 10px;
    margin-top: 20px;
}

}
/media queries end/
    
</style>
<!--css ends-->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2DF9WK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!--[ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
    

             <div class="container">
                                    <div class="select-block">
                                <select id="filter" class="jbtn">
                              <option value="all" >-- ALL --</option> 
                              <!-- <option value="ctest" >Coding Test</option>-->
                              <?php
                       foreach($result as $tname)
                      {
                           if($tname['username'] == NULL){
                          echo "<option value=".$tname['id'].">".$tname['category']."&nbsp".$tname['username']."</option>";
                      }
                      else
                         {
                            echo "<option value=".$tname['id'].">".$tname['category']."&nbsp-&nbsp".$tname['username']."</option>";
                         }
                      }
                    ?>
    			                     </select>
    			                     
    			                     <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">EXPORT
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
    
      <li> <button class="li" onclick="exportData50()">Upto 50 rows</button></li>
        <li> <button class="li" onclick="exportData100()">Upto 100 rows</button></li>
          <li> <button class="li" onclick="exportData()">All</button></li>
      <!--<li><a href="#">CSS</a></li>-->
      <!--<li><a href="#">JavaScript</a></li>-->
    </ul>
  </div>
  
  
    			                     
    			                     
    			                     
    			                     
    			                      <br><br>
        </div>
        </div>
                 
        <!-- [ Main Content ] start -->
                            
                                
                             
                                <!--[ Recent Users ] start-->
                                <div class="col-xl-8 col-md-6 col-sm-12" >
                                    <div class="card Recent-Users" >
                                        <div class="card-header">
                                            <div>
                                                <img src="../icon.png" class="image"></img> 
                                            </div>
                                           <center><h3>Test Results</h3></center>
                                        </div>
                                        <div class="card-block px-0 py-3">
                                            <div class="table-responsive">
                                                <table class="table table-hover col-sm-12"  id="table">
                                                 
                    
               
                                                </table>
                                                
                                                <!--<div id="pageNavPosition" class="pager-nav" align="center"></div>-->
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!--[ Recent Users ] end-->

                                   
                                    
                            <!-- [ Main Content ] end -->
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
</body>

<script>
    //var pager = new Pager('table', 1);
    // pager.init();
    // pager.showPageNav('pager', 'pageNavPosition');
    // pager.showPage(1);


function Pager(tableName, itemsPerPage) {
    'use strict';

    this.tableName = tableName;
    this.itemsPerPage = itemsPerPage;
    this.currentPage = 1;
    this.pages = 0;
    this.inited = false;

    this.showRecords = function (from, to) {
        let rows = document.getElementById(tableName).rows;

        // i starts from 1 to skip table header row
        for (let i = 1; i < rows.length; i++) {
            if (i < from || i > to) {
                rows[i].style.display = 'none';
            } else {
                rows[i].style.display = '';
            }
        }
    };

    this.showPage = function (pageNumber) {
        if (!this.inited) {
            // Not initialized
            return;
        }

        let oldPageAnchor = document.getElementById('pg' + this.currentPage);
        oldPageAnchor.class = 'pg-normal';

        this.currentPage = pageNumber;
        let newPageAnchor = document.getElementById('pg' + this.currentPage);
        newPageAnchor.className = 'pg-selected';

        let from = (pageNumber - 1) * itemsPerPage + 1;
        let to = from + itemsPerPage - 1;
        this.showRecords(from, to);

        let pgNext = document.querySelector('.pg-next'),
            pgPrev = document.querySelector('.pg-prev');

        if (this.currentPage == this.pages) {
            pgNext.style.display = 'none';
        } else {
            pgNext.style.display = '';
        }

        if (this.currentPage === 1) {
            pgPrev.style.display = 'none';
        } else {
            pgPrev.style.display = '';
        }
    };

    this.prev = function () {
        if (this.currentPage > 1) {
            this.showPage(this.currentPage - 1);
        }
    };

    this.next = function () {
        if (this.currentPage < this.pages) {
            this.showPage(this.currentPage + 1);
        }
    };

    this.init = function () {
        let rows = document.getElementById(tableName).rows;
        let records = (rows.length - 1);

        this.pages = Math.ceil(records / itemsPerPage);
        this.inited = true;
    };

    this.showPageNav = function (pagerName, positionId) {
        if (!this.inited) {
            // Not initialized
            return;
        }

        let element = document.getElementById(positionId),
            pagerHtml = '<span onclick="' + pagerName + '.prev();" class="pg-normal pg-prev">&#171;</span>';

        for (let page = 1; page <= this.pages; page++) {
            pagerHtml += '<span id="pg' + page + '" class="pg-normal pg-next" onclick="' + pagerName + '.showPage(' + page + ');">' + page + '</span>';
        }

        pagerHtml += '<span onclick="' + pagerName + '.next();" class="pg-normal">&#187;</span>';

       // element.innerHTML = pagerHtml;
    };
}




let pager = new Pager('table', 2);

pager.init();
pager.showPageNav('pager', 'pageNavPosition');
pager.showPage(1);
</script>
<script>
    // function html_table_to_excel(type)
    // {
    //     var data = document.getElementById('table');

    //     var file = XLSX.utils.table_to_book(data, {sheet: "sheet1"});

    //     XLSX.write(file, { bookType: type, bookSST: true, type: 'base64' });

    //     XLSX.writeFile(file, 'file.' + type);
    // }

    // const export_button = document.getElementById('export_button');

    // export_button.addEventListener('click', () =>  {
    //     html_table_to_excel('xlsx');
    // });
    function exportData(){
    /* Get the HTML data using Element by Id */
    var table = document.getElementById("table");
 
    /* Declaring array variable */
    var rows =[];
    // for(var i=0, img; (img = imgs[i]) && (i < 12); i++)
      //iterate through rows of table
    for(var i=0,row; row = table.rows[i];i++){
        //rows would be accessed using the "row" variable assigned in the for loop
        //Get each cell value/column from the row
        column1 = row.cells[0].innerText;
        column2 = row.cells[1].innerText;
        column3 = row.cells[2].innerText;
        column4 = row.cells[3].innerText;
        column5 = row.cells[4].innerText;
        column6 = row.cells[5].innerText;
 
    /* add a new records in the array */
        rows.push(
            [
                column1,
                column2,
                column3,
                column4,
                column6
            ]
        );
 
        }
        csvContent = "data:text/csv;charset=utf-8,";
         /* add the column delimiter as comma(,) and each row splitted by new line character (\n) */
        rows.forEach(function(rowArray){
            row = rowArray.join(",");
            csvContent += row + "\r\n";
        });
 
        /* create a hidden <a> DOM node and set its download attribute */
        var encodedUri = encodeURI(csvContent);
        var link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", "Result.csv");
        document.body.appendChild(link);
         /* download the data file named "Stock_Price_Report.csv" */
        link.click();
}
function exportData50(){
    /* Get the HTML data using Element by Id */
    var table = document.getElementById("table");
 
    /* Declaring array variable */
    var rows =[];
    // for(var i=0, img; (img = imgs[i]) && (i < 12); i++)
      //iterate through rows of table
    for(var i=0,row; (row = table.rows[i]) && (i<=50);i++){
        //rows would be accessed using the "row" variable assigned in the for loop
        //Get each cell value/column from the row
        column1 = row.cells[0].innerText;
        column2 = row.cells[1].innerText;
        column3 = row.cells[2].innerText;
        column4 = row.cells[3].innerText;
        column5 = row.cells[4].innerText;
        column6 = row.cells[5].innerText;
 
    /* add a new records in the array */
        rows.push(
            [
                column1,
                column2,
                column3,
                column4,
                column6
            ]
        );
 
        }
        csvContent = "data:text/csv;charset=utf-8,";
         /* add the column delimiter as comma(,) and each row splitted by new line character (\n) */
        rows.forEach(function(rowArray){
            row = rowArray.join(",");
            csvContent += row + "\r\n";
        });
 
        /* create a hidden <a> DOM node and set its download attribute */
        var encodedUri = encodeURI(csvContent);
        var link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", "Result.csv");
        document.body.appendChild(link);
         /* download the data file named "Stock_Price_Report.csv" */
        link.click();
}
function exportData100(){
    /* Get the HTML data using Element by Id */
    var table = document.getElementById("table");
 
    /* Declaring array variable */
    var rows =[];
    // for(var i=0, img; (img = imgs[i]) && (i < 12); i++)
      //iterate through rows of table
    for(var i=0,row; (row = table.rows[i]) && (i<=100);i++){
        //rows would be accessed using the "row" variable assigned in the for loop
        //Get each cell value/column from the row
        column1 = row.cells[0].innerText;
        column2 = row.cells[1].innerText;
        column3 = row.cells[2].innerText;
        column4 = row.cells[3].innerText;
        column5 = row.cells[4].innerText;
        column6 = row.cells[5].innerText;
 
    /* add a new records in the array */
        rows.push(
            [
                column1,
                column2,
                column3,
                column4,
                column6
            ]
        );
 
        }
        csvContent = "data:text/csv;charset=utf-8,";
         /* add the column delimiter as comma(,) and each row splitted by new line character (\n) */
        rows.forEach(function(rowArray){
            row = rowArray.join(",");
            csvContent += row + "\r\n";
        });
 
        /* create a hidden <a> DOM node and set its download attribute */
        var encodedUri = encodeURI(csvContent);
        var link = document.createElement("a");
        link.setAttribute("href", encodedUri);
        link.setAttribute("download", "Result.csv");
        document.body.appendChild(link);
         /* download the data file named "Stock_Price_Report.csv" */
        link.click();
}
</script>
</html>