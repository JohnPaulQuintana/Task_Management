<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    {{-- width: 18.30cm; --}}

    <style>
        *{
            font-family: sans-serif;
        }
        .wrapper{
            width: 18.30cm;
            height: 27cm;
            /* border:2px solid black; */
            /* overflow: hidden; Clear floats */
        }

     

        header .header-left{
            border:2px solid black;
            width: 23.5%;
            overflow: hidden;
            float: left;
            height: 100px;
            padding-top: 35px;
            padding-left: 20px;
            
        }
        header .header-left .h-t1{
            font-size: 30px;
            color: orange;
            font-weight: 700;
            /* padding-top: 10px; */
        }
        header .header-left .h-t1a{
            font-size: 26px;
            margin-left: -2px;
        }
        header .header-left .h-p1{
            font-size: 10px;
            color: rgb(77, 74, 74);
        }
        header .header-right{
            
            width:73.5%;
            float: right;
        }
        header .header-right table{
            border-collapse: collapse; /* Combine borders into a single border */
            border-spacing: 0; /* Remove space between table cells */
            /* border:1px solid black; */
            width: 100%;
        }
        header .header-right table tr th{
            background: black;
            color: white;
            text-align: left;
            padding: 8px;
            font-size: 12px;
            font-weight: 400;
        }
        header .header-right table tr td{
            font-weight:900;
            padding: 6px;
            text-align: center;
            font-size: 12px;
        }
        header .header-right table tr th, td{
            border: 1px solid black;
            /* width: 45%; */
            /* text-align: center; */
        }
        header .header-right .tb-2 tr td{
            padding: 8px;
        }
      
        .section2{
            border: 1px solid black;
            
            margin-top: 15px;
        }
        .section2 table{
            width: 100%;
            margin-top: 30px;
            border-collapse: collapse; /* Combine borders into a single border */
            border-spacing: 0; /* Remove space between table cells */
        }
        .section2 table tr td.table-left{
            width: 25%;
            padding: 10px;
            font-size: 13px;
            font-weight: 700;
            background: rgb(219, 217, 217);
        }
        .section2 table tr td.table-right{
            font-size: 14px;
            text-indent: 10px;
        
        }

        .section3{
            width: 100%;
        }
        .section3 tr th{
            border: 1px solid black;
            font-size: 14px;
            padding: 5px;
            background: rgb(206, 204, 204);
        }
        .page-break {
            page-break-after: always;
        }
    </style>
    <title>print</title>
</head>

<body>
    
    <div class="wrapper">

        <header>
            <div class="header-left">
                <span class="h-t1">Isla</span>
                <span class="h-t1a">Sol</span><br>
                <span class="h-p1">Renewable Energy from ACEN</span>
            </div>
        </header>

        <header>
            <div class="header-right">
                <table col="1">
                    <thead>
                        <tr>
                            <th style="width: 35%;">SECTION</th>
                            <th style="width: 35%;">TITLE</th>
                            <th>DOCUMENT TITLE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           <td>GENERAL FORMS</td> 
                           <td>DOCUMENT REVISION HISTORY</td> 
                           <td>ISLA-GFR-DCC-30</td> 
                        </tr>
                    </tbody>
                </table>
                <table class="tb-2">
                    <thead>
                        <tr>
                            <th style="width: 35%;">EFFECTIVE DATE</th>
                            <th style="width: 35%;">REVISION NUMBER</th>
                            <th>PAGE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                           <td>30 APR 2023</td> 
                           <td>1</td> 
                           <td>1 of 1</td> 
                        </tr>
                    </tbody>
                </table>
            </div>
        </header>

        <br><br><br><br><br><br><br>

        <div class="section2">
            <table>
                <tbody>
                    <tr>
                        <td class="table-left">TITLE</td>
                        <td class="table-right">DAILY MBC INSPECTION</td>
                    </tr>
                    <tr>
                        <td class="table-left">DOCUMENT NUMBER</td>
                        <td class="table-right">ISLA-OFR-OPS-01</td>
                    </tr>
                    <tr>
                        <td class="table-left">DEPARTMENT</td>
                        <td class="table-right">Operations</td>
                    </tr>
                    <tr>
                        <td class="table-left">PREPARED BY</td>
                        <td class="table-right">Donald M. Amosin</td>
                    </tr>
                    <tr>
                        <td class="table-left">REVIEWED BY</td>
                        <td class="table-right">Ray Vincent P. Enriquez</td>
                    </tr>
                    <tr>
                        <td class="table-left">APPROVED BY</td>
                        <td class="table-right">Ray Vincent P. Enriquez</td>
                    </tr>
                </tbody>
            </table>


            <table class="section3">    
                    <thead>
                        <tr>
                            <th colspan="4" style="background:black; color:white;padding:10px;">DOCUMENT REVISION HISTORY</th>
                        </tr>
                        <tr>
                            <th class="page">PAGE NO.</th>
                            <th>REVISION NO.</th>
                            <th>CHANGE DESCRIPTION</th>
                            <th>EFFECTIVE DATE</th>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                        <td style="text-align:center; padding: 10px; font-size:14px;">All</td>
                        <td style="text-align:center; padding: 10px; font-size:14px;">0</td>
                        <td style="text-indent:10px;">Initial Release</td>
                        <td style="text-indent:10px;">15 Sep 2021</td>
                    </tr>
                    <tr>
                        <td style="text-align:center; padding: 10px; font-size:14px;">All</td>
                        <td style="text-align:center; padding: 10px; font-size:14px;">1</td>
                        <td class="">
                            <p style="text-indent:10px;">Revision of the following:</p>
                            <ul>
                                <li>
                                    Change document code and name from OPS-FM-01 to
                                    ISLA-OFR-OPS-01 
                                </li>
                                <li>
                                    Realignment and to standardize official templates all
                                    across thermal and renewable plants                                      
                                </li>
                            </ul>
                        </td>
                        <td style="text-indent:10px;">20 Oct 2022</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>

    </div>

    <div class="page-break"></div>


   <div class="wrapper">
    <header>
        <div class="header-left">
            <span class="h-t1">Isla</span>
            <span class="h-t1a">Sol</span><br>
            <span class="h-p1">Renewable Energy from ACEN</span>
        </div>
    </header>

    <header>
        <div class="header-right">
            <table col="1">
                <thead>
                    <tr>
                        <th style="width: 35%;">SECTION</th>
                        <th style="width: 35%;">TITLE</th>
                        <th>DOCUMENT TITLE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td style="padding: 10px;">OPERATIONAL FORMS</td> 
                       <td>{{ $render->s4_title }}</td> 
                       <td>{{ $render->s4_document_number }}</td> 
                    </tr>
                </tbody>
            </table>
            <table class="tb-2">
                <thead>
                    <tr>
                        <th style="width: 35%;">EFFECTIVE DATE</th>
                        <th style="width: 35%;">REVISION NUMBER</th>
                        <th>PAGE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td style="padding: 10px;">20 OCT 2022</td> 
                       <td>1</td> 
                       <td>1 of 1</td> 
                    </tr>
                </tbody>
            </table>
        </div>
    </header>

    <br><br><br><br><br><br><br><br><br>

    <table style="width: 100%;border-collapse: collapse;border-spacing:0;">
        <tbody>
            <tr>
                <td style="width: 25%;background:orange;color:white;text-indent:10px; font-size:14px;padding:10px;">EQUIPMENT:</td>
                <td style="text-indent:10px; font-size:13px;">Main Control Building</td>
                
            </tr>
            <tr>
                <td style="width: 25%;background:orange;color:white;text-indent:10px; font-size:14px;padding:10px;">SITE LOCATION:</td>
                <td style="text-indent:10px; font-size:13px;"></td>
                
            </tr>
            <tr>
                <td style="width: 25%;background:orange;color:white;text-indent:10px; font-size:14px;padding:10px;">WORK ORDER #:</td>
                <td style="text-indent:10px; font-size:13px;"></td>
                
            </tr>
            <tr>
                <td style="width: 25%;background:orange;color:white;text-indent:10px; font-size:14px;padding:5px;">DATE/S PERFORMED:</td>
                <td style="text-indent:10px; font-size:13px;"></td>
                
            </tr>
            <tr>
                <td style="width: 25%;background:orange;color:white;text-indent:10px; font-size:14px;padding:10px;">INSTRUCTION:</td>
                <td style="text-indent:10px; font-size:14px;">Perform Daily maintenance of main control building offices based on the checklist below.
                    Refer to ISLA-WIN-OPS-16 for the work instructions.</td>
                
            </tr>
           
        </tbody>
    </table>

    <br>

    <table style="width: 100%;border-collapse: collapse;border-spacing:0;">
        <thead>
            <tr>
                <th style="border:1px solid black;width:25%;font-size:14px;background:orange;color:white;">Location</th>
                <th style="border:1px solid black;font-size:14px;background:orange;color:white;">Clean workstations, tables, chairs, toilets, floors</th>
                <th style="border:1px solid black;font-size:14px;background:orange;color:white;">Clean exterior surrounding of building including landscape</th>
                <th style="border:1px solid black;font-size:14px;background:orange;color:white;">Remarks</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center; background:gainsboro;padding:10px;font-weight:700;">Control Room</td>
                <td style="text-align: center;">
                    
                    @if ($render->s6_control_1 == 'on')
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 25px;color:orange;">✔</div>
                    @else
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 25px;color:red;">✗</div>
                    @endif
        
                <td style="text-align: center;">
                    @if ($render->s6_control_2 == 'on')
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 25px;color:orange;">✔</div>
                    @else
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 25px;color:red;">✗</div>
                    @endif
                </td>
                <td style="text-indent: 10px;">{{ $render->s6_control_3 }}</td>
            </tr>
            <tr>
                <td style="text-align: center; background:gainsboro;padding:10px;font-weight:700;">Conference Room</td>
                <td style="text-align: center;">
                    @if ($render->s6_conference_1 == 'on')
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:orange;">✔</div>
                    @else
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:red;">✗</div>
                    @endif
                </td>
                <td style="text-align: center;">
                    @if ($render->s6_conference_2 == 'on')
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:orange;">✔</div>
                    @else
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:red;">✗</div>
                    @endif
                </td>
                <td style="text-indent: 10px;">{{ $render->s6_conference_3 }}</td>
            </tr>
            <tr>
                <td style="text-align: center; background:gainsboro;padding:10px;font-weight:700;">Pantry Room</td>
                <td style="text-align: center;">
                    @if ($render->s6_pantry_1 == 'on')
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:orange;">✔</div>
                    @else
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:red;">✗</div>
                    @endif
                </td>
                <td style="text-align: center;">
                    @if ($render->s6_pantry_2 == 'on')
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:orange;">✔</div>
                    @else
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:red;">✗</div>
                    @endif
                </td>
                <td style="text-indent: 10px;">{{ $render->s6_pantry_3 }}</td>
            </tr>
            <tr>
                <td style="text-align: center; background:gainsboro;padding:10px;font-weight:700;">Admin Office</td>
                <td style="text-align: center;">
                    @if ($render->s6_admin_1 == 'on')
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:orange;">✔</div>
                    @else
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:red;">✗</div>
                    @endif
                </td>
                <td style="text-align: center;">
                    @if ($render->s6_admin_2 == 'on')
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:orange;">✔</div>
                    @else
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:red;">✗</div>
                    @endif
                </td>
                <td style="text-indent: 10px;">{{ $render->s6_admin_3 }}</td>
            </tr>
            <tr>
                <td style="text-align: center; background:gainsboro;padding:10px;font-weight:700;">Manager’s Office</td>
                <td style="text-align: center;">
                    @if ($render->s6_manager_1 == 'on')
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:orange;">✔</div>
                    @else
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:red;">✗</div>
                    @endif
                </td>
                <td style="text-align: center;">
                    @if ($render->s6_manager_2 == 'on')
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:orange;">✔</div>
                    @else
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:red;">✗</div>
                    @endif
                </td>
                <td style="text-indent: 10px;">{{ $render->s6_manager_3 }}</td>
            </tr>
            <tr>
                <td style="text-align: center; background:gainsboro;padding:10px;font-weight:700;">Comfort Room</td>
                <td style="text-align: center;">
                    @if ($render->s6_comfort_1 == 'on')
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:orange;">✔</div>
                    @else
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:red;">✗</div>
                    @endif
                </td>
                <td style="text-align: center;">
                    @if ($render->s6_comfort_2 == 'on')
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:orange;">✔</div>
                    @else
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:red;">✗</div>
                    @endif
                </td>
                <td style="text-indent: 10px;">{{ $render->s6_comfort_3 }}</td>
            </tr>
            <tr>
                <td style="text-align: center; background:gainsboro;padding:10px;font-weight:700;">Storage Room</td>
                <td style="text-align: center;">
                    @if ($render->s6_storage_1 == 'on')
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:orange;">✔</div>
                    @else
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:red;">✗</div>
                    @endif
                </td>
                <td style="text-align: center;">
                    @if ($render->s6_storage_2 == 'on')
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:orange;">✔</div>
                    @else
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:red;">✗</div>
                    @endif
                </td>
                <td style="text-indent: 10px;">{{ $render->s6_storage_3 }}</td>
            </tr>
            <tr>
                <td style="text-align: center; background:gainsboro;padding:10px;font-weight:700;">Hallway</td>
                <td style="text-align: center;">
                    @if ($render->s6_hallway_1 == 'on')
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:orange;">✔</div>
                    @else
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:red;">✗</div>
                    @endif
                </td>
                <td style="text-align: center;">
                    @if ($render->s6_hallway_2 == 'on')
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:orange;">✔</div>
                    @else
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:red;">✗</div>
                    @endif
                </td>
                <td style="text-indent: 10px;">{{ $render->s6_hallway_3 }}</td>
            </tr>
            <tr>
                <td style="text-align: center; background:gainsboro;padding:5px;font-weight:700;">Exterior Surroundings</td>
                <td style="text-align: center;">
                    @if ($render->s6_exterior_1 == 'on')
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:orange;">✔</div>
                    @else
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:red;">✗</div>
                    @endif
                </td>
                <td style="text-align: center;">
                    @if ($render->s6_exterior_2 == 'on')
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:orange;">✔</div>
                    @else
                        <div style="font-family: DejaVu Sans, sans-serif;font-size: 20px;color:red;">✗</div>
                    @endif
                </td>
                <td style="text-indent: 10px;">{{ $render->s6_exterior_3 }}</td>
            </tr>
        </tbody>
    </table>

    <br>

    <table style="width: 100%;border-collapse: collapse;border-spacing:0;">
        <thead>
            <tr>
                <th style="border:1px solid black;width:18%;font-size:12px;background:orange;color:white;"></th>
                <th style="border:1px solid black;font-size:12px;background:orange;color:white;padding:5px;">NAME</th>
                <th style="border:1px solid black;font-size:12px;background:orange;color:white;">DESIGNATION</th>
                <th style="border:1px solid black;width:15%;font-size:12px;background:orange;color:white;">DATE</th>
                <th style="border:1px solid black;font-size:12px;background:orange;color:white;">SIGNATURE</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background:orange;color:white; font-size:12px;padding:5px;">PERFORMED BY:</td>
                <td style="text-indent:10px; font-size:13px;"></td>
                <td style="text-indent:10px; font-size:13px;"></td>
                <td style="text-indent:10px; font-size:13px;"></td>
                <td style="text-indent:10px; font-size:13px;"></td>
                
            </tr>
            <tr>
                <td style="background:orange;color:white; font-size:12px;padding:5px;">VERIFIED BY:</td>
                <td style="text-indent:10px; font-size:13px;"></td>
                <td style="text-indent:10px; font-size:13px;"></td>
                <td style="text-indent:10px; font-size:13px;"></td>
                <td style="text-indent:10px; font-size:13px;"></td>
                
            </tr>
            <tr>
                <td style="background:orange;color:white; font-size:12px;padding:5px;">APPROVED BY:</td>
                <td style="text-indent:10px; font-size:13px;"></td>
                <td style="text-indent:10px; font-size:13px;"></td>
                <td style="text-indent:10px; font-size:13px;"></td>
                <td style="text-indent:10px; font-size:13px;"></td>
                
            </tr>
            
           
        </tbody>
    </table>

   </div>
    
</body>

</html>
