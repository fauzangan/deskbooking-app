@extends('Layouts.main')
@section('container')
<div class="container">

    <!--MAIN VIEW-->
    <form id="formReservation" class="form" method="post" autocomplete="off">
        <div class="card" id="reservationForJadwal">
            <div class="card-body">
                <div class="row m-5">
                    <!--hidden textbox-->
                    <input type="hidden" asp-for="intlocationid" autocomplete="off"/>
                    <input type="hidden" asp-for="intareadetailid" autocomplete="off"/>
                    <input type="hidden" asp-for="txtbookingtime" autocomplete="off"/>
                    <input type="hidden" asp-for="dtreservation" autocomplete="off"/>
                    <input type="hidden" asp-for="txtinserted" value="@GlobalClass.dLogin().userDat.txtUserName" autocomplete="off"/>
                    <input type="hidden" id="intbookingtimeid" autocomplete="off"/>

                    <input type="hidden" id="txtdeskname" autocomplete="off"/>
                    <input type="hidden" id="btnLocationname" autocomplete="off"/>
                    <!--hidden textbox-->
                    <button id="btn-back" type="button" class="btn btn-icon btn-icon-primary p-0" onclick="BackToIndex()" ><span><i class="fa fa-arrow-left fa-lg"></i></span>&nbsp;Back</button>
                    <h1 class="text-center text-decoration-underline">Reservation For</h1>
                </div>

                <div class="row p-3">
                    <div class="col-sm-3 text-start pt-3">
                        <label class="fs-4 fw-bold">Pilih Tanggal Reservasi :</label>
                    </div>
                    <div class="col-sm-4 text-end">
                        <div class="input-group">
                            <input type="text" id="newJadwal" class="form-control form-control-solid" value="" readonly autocomplete="off"/>
                            <button id="btn-showPopup" type="button" class="btn btn-primary btn-icon" onclick="showPopup()" ><i class="fa fa-plus fa-10x"></i></button>
                        </div>
                    </div>

                </div>
                <hr class="my-2" />

                <div class="card mt-5 mb-2">
                    
                    <div class="row mt-3" id="daftarLocation">
                    </div> 

                    <div id="accordion" class="myaccordion">
                        <div class="card" id="ltLocation">
                            
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
        <br />

        <!--SECOND VIEW-->
        <div class="card" id="reservationForLayout">
            <div class="card-body p-2 mb-5">
                <div class="d-flex justify-content-start align-items-center pt-5 px-5">
                    <button id="btn-showDiv1" type="button" class="btn btn-success btn-lg" onclick="ShowDiv1()" >Back</button>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <button type="button" class="btn btn-block btn-lg p-2" id="prevPageId" onclick="prevPage()"><i class="fa fa-angle-double-left"></i></button>
                    </div> 
                    <div class="d-flex flex-row justify-content-center">
                        <div class="card-body p-3">
                            <div class="row mb-5">
                                <input type="text" id="areaName" class="form-control text-center" style="border: none; font-size: 22px; font-weight: 600;"  value="" readonly autocomplete="off"/>
                                <input type="text" id="deskCount" class="form-control text-center text-primary" style="border: none; font-size: 18px;"  value="" readonly autocomplete="off"/>
                                
                            </div>
                            <div class="row justify-content-center mb-5">
                                <a class="col-1 d-flex align-content-center justify-content-center flex-wrap flex-grow-1" id="prevPageId" onclick="prevPage()"  style="cursor: pointer;" ><i class="fa fa-angle-double-left fa-2x"></i></a>
                                <a id="imageWrapper" style="cursor: pointer;"  class="col-8 image-area text-decoration-none p-0" data-fancybox="responsive">
                                    <img id="imageResult"
                                         src=""
                                         alt=""
                                         width="480"
                                         height="360"
                                         class="img-fluid rounded shadow-sm mx-auto d-block" />
                                </a>
                                <a class="col-1 d-flex align-content-center justify-content-center flex-wrap flex-grow-1" id="nextPageId" onclick="nextPage()"  style="cursor: pointer" ><i class="fa fa-angle-double-right fa-2x"></i></a>
                            </div>
                            <div class="row d-flex justify-content-center">
                                <div class="dot-container"></div>
                                <div class="col-10"><input type="checkbox" id="btnAll" class="form-check-input" onchange="showAvailable()"  />&nbsp;&nbsp;Show All</div>
                                <button type="button" id="btnAll" class="btn btn-success btn-icon btn-sm" onclick="showAvailable()">All</button> 
                            </div>
                            <div class="row justify-content-center">
                                <div class="table-responsive col-10">
                                    <table id="dataTableReservation" class="table align-middle table-row-dashed fs-6 gy-5">
                                        <thead>
                                            <tr class="text-start text-gray-500 fw-bolder fs-7 gs-0">
                                                <th id="desk" class="text-center" style="font-size: 16px;" >Desk</th>
                                                <th id="status" class="text-center" style="font-size: 16px;" >Status</th>
                                                <th class="text-end"></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <button type="button" class="btn btn-block btn-lg p-2" id="nextPageId" onclick="nextPage()"><i class="fa fa-angle-double-right"></i></button>
                    </div> 
                </div>
            </div>
            <div class="d-flex flex-grow-1 justify-content-end align-items-center p-5">
                <button id="booking" type="button" class="btn btn-success btn-lg btn-block" disabled onclick="BookingReservation()" >Book</button>
            </div>
        </div>


    </form>
    <!--MODAL POPUP RESERVATION-->
    <div id="modalReservation" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">
                        Reservation For
                    </h1>
                </div>
                <div class="modal-body">
                    <div class="col">
                        <div class="row mb-5">
                            <div class="col-2 d-flex justify-content-center align-items-center"><i class="fa fa-calendar-times fa-3x"></i></div>
                            <div class="col-10"><input type="text" class="form-control form-control-lg" id="dtReservation" placeholder="Pilih tanggal reservasi" readonly style="cursor: pointer" /></div> 
                            <div class="col-10"><input type="date" class="form-control form-control-lg" id="dtReservation" autocomplete="off"/></div>
                        </div>
                        <div class="row">
                            <div class="col-2 d-flex justify-content-center align-items-center"><i class="fa fa-clock fa-3x"></i></div>
                            <div class="col-10">
                                <select id="ddlTimeReservation" class="select form-select-lg form-select-solid form-control" data-control="select2">
                                    <!--Booking Time-->
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="submitReservationPopup" onclick="submitReservationPopup()">Confirm</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection