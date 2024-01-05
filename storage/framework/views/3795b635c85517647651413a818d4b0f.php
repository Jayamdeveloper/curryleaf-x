
<?php $__env->startSection('content'); ?>

<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>Reservations List</h5>
                            <form class="d-inline-flex">
                                <a href="<?php echo e(route('reservation.create')); ?>" class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus"></i>For Reservation
                                </a>
                            </form>
                        </div>

                        <div class="table-responsive table-product">
                            <table class="table all-package theme-table" id="table_id">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Table Number</th>
                                        <th>Reserved Date</th>                                                    
                                        <th>Reserved Time</th>
                                        <th>No of Persons</th>
                                        <th>Reserved Name</th>
                                        <th>Phone Number</th>
                                        <th>Email Address</th>
                                        <th>Booking Status</th>
                                        <th>Payment Method</th>
                                        <th>Payment Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>01</td>
                                        <td>24-11-2023</td>
                                        <td>01:00 PM</td>
                                        <td>5</td>

                                        <td>
                                            <div class="user-name">
                                                <span>Everett C. Green</span>
                                            </div>
                                        </td>

                                        <td>+ 802 - 370 - 2430</td>

                                        <td>EverettCGreen@rhyta.com</td>

                                        <td>
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option >Pending</option>
                                                <option selected>Confirmed</option>
                                                <option>Cancelled</option>
                                            </select>
                                        </td>
                                        <td>Paypal</td>
                                        <td class="status-close">
                                                <span>Success</span>
                                            </td>



                                            <td>
                                            <ul>


                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>02</td>
                                        <td>24-11-2023</td>
                                        <td>01:00 PM</td>
                                        <td>5</td>

                                        <td>
                                            <div class="user-name">
                                                <span>Caroline L. Harris</span>
                                            </div>
                                        </td>

                                        <td>+ 720 - 276 - 9403</td>

                                        <td>CarolineLHarris@rhyta.com</td>

                                        <td>
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option >Pending</option>
                                                <option>Confirmed</option>
                                                <option selected>Cancelled</option>
                                            </select>
                                        </td>
                                        <td>Paypal</td>
                                        <td class="status-close">
                                                <span>Success</span>
                                            </td>
                                        <td>
                                            <ul>


                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td>03</td>
                                        <td>24-11-2023</td>
                                        <td>01:00 PM</td>
                                        <td>5</td>

                                        <td>
                                            <div class="user-name">
                                                <span>Lucy j. Morile</span>
                                            </div>
                                        </td>

                                        <td>+ 351 - 756 - 6549</td>

                                        <td>LucyMorile456@gmail.com</td>

                                        <td>
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option >Pending</option>
                                                <option selected>Confirmed</option>
                                                <option>Cancelled</option>
                                            </select>
                                        </td>
                                        <td>Paypal</td>
                                        <td class="status-close">
                                                <span>Success</span>
                                            </td>
                                        <td>
                                            <ul>


                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td>04</td>
                                        <td>24-11-2023</td>
                                        <td>01:00 PM</td>
                                        <td>5</td>

                                        <td>
                                            <div class="user-name">
                                                <span>Jennifer A. Straight</span>
                                            </div>
                                        </td>

                                        <td>+ 912 - 265 - 1550</td>

                                        <td>JenniferAStraight@rhyta.com</td>

                                        <td>
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option selected>Pending</option>
                                                <option>Confirmed</option>
                                                <option>Cancelled</option>
                                            </select>
                                        </td>
                                        <td>Paypal</td>
                                        <td class="status-danger">
                                                <span>Failed</span>
                                            </td>
                                        <td>
                                            <ul>


                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td>05</td>
                                        <td>24-11-2023</td>
                                        <td>01:00 PM</td>
                                        <td>5</td>

                                        <td>
                                            <div class="user-name">
                                                <span>Louise J. Stiles</span>
                                            </div>
                                        </td>

                                        <td>+ 304 - 921 - 8122</td>

                                        <td>KevinAMillett@jourrapide.com</td>

                                        <td>
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option selected>Pending</option>
                                                <option>Confirmed</option>
                                                <option>Cancelled</option>
                                            </select>
                                        </td>

                                        <td>Paypal</td>
                                        <td class="status-danger">
                                                <span>Failed</span>
                                            </td>


                                        <td>
                                            <ul>


                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>6</td>
                                        <td>06</td>
                                        <td>24-11-2023</td>
                                        <td>01:00 PM</td>
                                        <td>5</td>

                                        <td>
                                            <div class="user-name">
                                                <span>Scott T. Thomas</span>
                                            </div>
                                        </td>

                                        <td>+ 907 - 442 - 8122</td>

                                        <td>scott.thomas@packiu.com</td>

                                        <td>
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option selected>Pending</option>
                                                <option>Confirmed</option>
                                                <option>Cancelled</option>
                                            </select>
                                        </td>

                                        <td>Paypal</td>
                                        <td class="status-danger">
                                                <span>Failed</span>
                                            </td>


                                        <td>
                                            <ul>


                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>7</td>
                                        <td>07</td>
                                        <td>24-11-2023</td>
                                        <td>01:00 PM</td>
                                        <td>5</td>

                                        <td>
                                            <div class="user-name">
                                                <span>Everett C. Green</span>
                                            </div>
                                        </td>

                                        <td>+ 218 - 244 - 7026</td>

                                        <td>KevinAMillett@jourrapide.com</td>

                                        <td>
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option selected>Pending</option>
                                                <option>Confirmed</option>
                                                <option>Cancelled</option>
                                            </select>
                                        </td>

                                        <td>Paypal</td>
                                        <td class="status-danger">
                                                <span>Failed</span>
                                            </td>


                                        <td>
                                            <ul>


                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>8</td>
                                        <td>08</td>
                                        <td>24-11-2023</td>
                                        <td>01:00 PM</td>
                                        <td>5</td>

                                        <td>
                                            <div class="user-name">
                                                <span>Dillon J. Bradshaw</span>
                                            </div>
                                        </td>

                                        <td>+ 347 - 649 - 7283</td>

                                        <td>DillonJBradshaw@teleworm.us</td>

                                        <td>
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option selected>Pending</option>
                                                <option>Confirmed</option>
                                                <option>Cancelled</option>
                                            </select>
                                        </td>

                                        <td>Paypal</td>
                                        <td class="status-danger">
                                                <span>Failed</span>
                                            </td>


                                        <td>
                                            <ul>


                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>9</td>
                                        <td>09</td>
                                        <td>24-11-2023</td>
                                        <td>01:00 PM</td>
                                        <td>5</td>

                                        <td>
                                            <div class="user-name">
                                                <span>Lorna M. Bonner</span>
                                            </div>
                                        </td>

                                        <td>+ 843 - 765 - 6166</td>

                                        <td>LornaMBonner@teleworm.us</td>

                                        <td>
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option selected>Pending</option>
                                                <option>Confirmed</option>
                                                <option>Cancelled</option>
                                            </select>
                                        </td>

                                        <td>Paypal</td>
                                        <td class="status-danger">
                                                <span>Failed</span>
                                            </td>


                                        <td>
                                            <ul>


                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>10</td>
                                        <td>010</td>
                                        <td>24-11-2023</td>
                                        <td>01:00 PM</td>
                                        <td>5</td>

                                        <td>
                                            <div class="user-name">
                                                <span>Everett C. Green</span>
                                            </div>
                                        </td>

                                        <td>+ 802 - 370 - 2430</td>

                                        <td>EverettCGreen@rhyta.com</td>

                                        <td>
                                            <select class="js-example-basic-single w-100" name="state">
                                                <option selected>Pending</option>
                                                <option>Confirmed</option>
                                                <option>Cancelled</option>
                                            </select>
                                        </td>

                                        <td>Paypal</td>
                                        <td class="status-danger">
                                                <span>Failed</span>
                                            </td>

                                            
                                        <td>
                                            <ul>


                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminDashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\30Dec-curryleaf\resources\views/reservations/reservationlist.blade.php ENDPATH**/ ?>