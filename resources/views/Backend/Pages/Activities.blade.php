@extends('Backend.Layout.MasterLayout')

@section('Content')

    <div class="container mt-4">
        <div class="row align-items-center g-2">

            <!-- Search -->
            <div class="col-12 col-md-8 col-lg-5">
                <form action="" method="get">
                    <div class="input-group">
                        <input type="date" class="form-control">
                        <input type="text" class="form-control" placeholder="কার্যক্রমের নাম দিয়ে সার্চ করুন…">
                        <button class="btn btn-outline-success" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i> অনুসন্ধান
                        </button>
                    </div>
                </form>
            </div>

            <!-- Create Button -->
            <div class="col-12 col-md-4 col-lg-2 ms-md-auto text-md-end">
                <button class="btn btn-success w-100 w-md-auto" data-bs-toggle="modal"
                    data-bs-target="#createCommitteeModal">
                    <i class="fa-solid fa-plus me-1"></i> নতুন কার্যক্রম
                </button>
            </div>

        </div>
    </div>

    <div class="card table-card shadow-sm mt-3">
        <div class="card-header text-white text-center">
            <i class="fa fa-calendar-check"></i> কমিটির কার্যক্রমের তালিকা
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr class="text-center">
                            <th>ক্রমিক নং</th>
                            <th>কার্যক্রমের নাম</th>
                            <th>বিবরণ</th>
                            <th>তারিখ</th>
                            <th>অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td data-label="ক্রমিক নং">১</td>
                            <td data-label="কার্যক্রমের নাম">বার্ষিক সাধারণ সভা</td>
                            <td data-label="বিবরণ">সদস্যদের বার্ষিক রিপোর্ট উপস্থাপন</td>
                            <td data-label="তারিখ">১৫ জানুয়ারি ২০২৫</td>
                            <td data-label="অ্যাকশন">
                                <div class="d-flex flex-row justify-content-center gap-2">
                                    <button class="btn action-btn-info" data-bs-toggle="modal" data-bs-target="#viewCommitteeModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn action-btn-success" data-bs-toggle="modal" data-bs-target="#editCommitteeModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn action-btn-danger" data-bs-toggle="modal" data-bs-target="#deleteCommitteeModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td data-label="ক্রমিক নং">২</td>
                            <td data-label="কার্যক্রমের নাম">সামাজিক উন্নয়ন সভা</td>
                            <td data-label="বিবরণ">গ্রাম উন্নয়ন প্রকল্প নিয়ে আলোচনা</td>
                            <td data-label="তারিখ">২৮ ফেব্রুয়ারি ২০২৫</td>
                            <td data-label="অ্যাকশন">
                                <div class="d-flex flex-row justify-content-center gap-2">
                                    <button class="btn action-btn-info" data-bs-toggle="modal" data-bs-target="#viewCommitteeModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn action-btn-success" data-bs-toggle="modal" data-bs-target="#editCommitteeModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn action-btn-danger" data-bs-toggle="modal" data-bs-target="#deleteCommitteeModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Create Modal -->
    <div class="modal fade" id="createCommitteeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">নতুন কার্যক্রম যোগ করুন</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="row g-3">

                            <div class="col-12">
                                <label class="form-label">কার্যক্রমের নাম</label>
                                <input type="text" class="form-control" required>
                            </div>

                            <!-- ইমেজ আপলোড -->
                            <div class="col-12">
                                <label class="form-label">কার্যক্রমের ছবি</label>
                                <input type="file" class="form-control" accept="image/*">
                            </div>

                            <div class="col-12">
                                <label class="form-label">বিবরণ</label>
                                <textarea class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="col-6">
                                <label class="form-label">তারিখ</label>
                                <input type="date" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">বাতিল</button>
                        <button type="submit" class="btn btn-success">সংরক্ষণ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- View Modal -->
    <div class="modal fade" id="viewCommitteeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h6 class="modal-title">কার্যক্রমের বিস্তারিত</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">

                    <!-- ইমেজ (Full Width) -->
                    <img src="{{ asset('Assets/img/backend-logo.png') }}" alt="কার্যক্রমের ছবি" class="img-fluid w-100 mb-3"
                        style="max-height:250px; object-fit:cover;">

                    <!-- বিস্তারিত -->
                    <p><strong>কার্যক্রমের নাম:</strong> বার্ষিক সাধারণ সভা</p>
                    <p><strong>বিবরণ:</strong> সদস্যদের বার্ষিক রিপোর্ট উপস্থাপন</p>
                    <p><strong>তারিখ:</strong> ১৫ জানুয়ারি ২০২৫</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">বন্ধ করুন</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editCommitteeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h6 class="modal-title">কার্যক্রম সম্পাদনা</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="row g-3">

                            <!-- বর্তমান ইমেজ -->
                            <div class="col-12 text-center">
                                <label class="form-label d-block">বর্তমান ইমেজ</label>
                                <img src="{{ asset('Assets/img/backend-logo.png') }}" alt="কার্যক্রমের ছবি" class="img-fluid w-100 mb-3"
                                    style="max-height:250px; object-fit:cover;">
                            </div>

                            <!-- নতুন ইমেজ আপলোড -->
                            <div class="col-12">
                                <label class="form-label">নতুন ইমেজ আপলোড করুন</label>
                                <input type="file" class="form-control" accept="image/*">
                            </div>

                            <div class="col-12">
                                <label class="form-label">কার্যক্রমের নাম</label>
                                <input type="text" class="form-control" value="বার্ষিক সাধারণ সভা" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">বিবরণ</label>
                                <textarea class="form-control" rows="3"
                                    required>সদস্যদের বার্ষিক রিপোর্ট উপস্থাপন</textarea>
                            </div>
                            <div class="col-12">
                                <label class="form-label">তারিখ</label>
                                <input type="date" class="form-control" value="2025-01-15" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">বাতিল</button>
                        <button type="submit" class="btn btn-success">আপডেট করুন</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Delete Modal -->
    <div class="modal fade" id="deleteCommitteeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h6 class="modal-title">কার্যক্রম মুছুন</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <p>আপনি কি নিশ্চিত যে আপনি এই কার্যক্রমটি মুছে ফেলতে চান?</p>
                    <p class="text-danger">এই কাজটি পূর্বাবস্থায় ফেরানো যাবে না।</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">বাতিল</button>
                    <button class="btn btn-danger">মুছে ফেলুন</button>
                </div>
            </div>
        </div>
    </div>

@endsection