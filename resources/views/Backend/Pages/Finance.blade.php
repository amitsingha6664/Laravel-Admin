@extends('Backend.Layout.MasterLayout')

@section('Content')

    <div class="container mt-4">
        <div class="row align-items-center g-2">

            <!-- Search -->
            <div class="col-12 col-md-8 col-lg-5">
                <form action="" method="get">
                    <div class="input-group">
                        <input type="date" class="form-control">
                        <input type="text" class="form-control" placeholder="হিসাবের ধরন দিয়ে সার্চ করুন…">
                        <button class="btn btn-outline-success" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i> অনুসন্ধান
                        </button>
                    </div>
                </form>
            </div>

            <!-- Create Button -->
            <div class="col-12 col-md-4 col-lg-2 ms-md-auto text-md-end">
                <button class="btn btn-success w-100 w-md-auto" data-bs-toggle="modal" data-bs-target="#createFinanceModal">
                    <i class="fa-solid fa-plus me-1"></i> নতুন হিসাবপত্র
                </button>
            </div>

        </div>
    </div>

    <div class="card table-card shadow-sm mt-3">
        <div class="card-header text-white text-center">
            <i class="fas fa-file-invoice-dollar"></i> আর্থিক হিসাবপত্রের তালিকা
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr class="text-center">
                            <th>ক্রমিক নং</th>
                            <th>হিসাবের ধরন</th>
                            <th>বিবরণ</th>
                            <th>তারিখ</th>
                            <th>স্ট্যাটাস</th>
                            <th>অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td data-label="ক্রমিক নং">১</td>
                            <td data-label="কার্যক্রমের নাম">বাজার খরচ</td>
                            <td data-label="বিবরণ">সাপ্তাহিক বাজারের খরচ</td>
                            <td data-label="তারিখ">১৫ জানুয়ারি ২০২৫</td>
                            <td data-label="স্ট্যাটাস"><span class="badge type">সক্রিয়</span></td>
                            <td data-label="অ্যাকশন">
                                <div class="d-flex flex-row justify-content-center gap-2">
                                    <button class="btn action-btn-info" data-bs-toggle="modal"
                                        data-bs-target="#viewFinanceModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn action-btn-success" data-bs-toggle="modal"
                                        data-bs-target="#editFinanceModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn action-btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteFinanceModal">
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
    <div class="modal fade" id="createFinanceModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">নতুন হিসাবপত্র যোগ করুন</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">হিসাবের ধরন</label>
                                <input type="text" class="form-control" required>
                            </div>

                            <!-- ইমেজ আপলোড (Optional) -->
                            <div class="col-12">
                                <label class="form-label">রসিদ/ডকুমেন্ট</label>
                                <input type="file" class="form-control" accept="image/*,application/pdf">
                            </div>

                            <div class="col-12">
                                <label class="form-label">বিবরণ</label>
                                <textarea class="form-control" rows="3" required></textarea>
                            </div>
                            <div class="col-6">
                                <label class="form-label">তারিখ</label>
                                <input type="date" class="form-control" required>
                            </div>
                            <div class="col-6">
                                <label class="form-label">স্ট্যাটাস</label>
                                <select class="form-select">
                                    <option>নিশ্চিত</option>
                                    <option>ড্রাফট</option>
                                    <option>নিষ্ক্রিয়</option>
                                </select>
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
    <div class="modal fade" id="viewFinanceModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h6 class="modal-title">হিসাবপত্রের বিস্তারিত</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('Assets/img/receipt.png') }}" alt="হিসাবপত্রের ছবি" class="img-fluid w-100 mb-3"
                        style="max-height:250px; object-fit:cover;">
                    <p><strong>হিসাবের ধরন:</strong> বাজার খরচ</p>
                    <p><strong>বিবরণ:</strong> সাপ্তাহিক বাজারের খরচ</p>
                    <p><strong>তারিখ:</strong> ১০ আগস্ট ২০২৫</p>
                    <p><strong>স্ট্যাটাস:</strong> নিশ্চিত</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">বন্ধ করুন</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editFinanceModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h6 class="modal-title">হিসাবপত্র সম্পাদনা</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12 text-center">
                                <label class="form-label d-block">বর্তমান রসিদ/ডকুমেন্ট</label>
                                <img src="{{ asset('Assets/img/receipt.png') }}" alt="হিসাবপত্রের ছবি"
                                    class="img-fluid w-100 mb-3" style="max-height:250px; object-fit:cover;">
                            </div>
                            <div class="col-12">
                                <label class="form-label">নতুন রসিদ/ডকুমেন্ট আপলোড করুন</label>
                                <input type="file" class="form-control" accept="image/*,application/pdf">
                            </div>
                            <div class="col-12">
                                <label class="form-label">হিসাবের ধরন</label>
                                <input type="text" class="form-control" value="বাজার খরচ" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">বিবরণ</label>
                                <textarea class="form-control" rows="3" required>সাপ্তাহিক বাজারের খরচ</textarea>
                            </div>
                            <div class="col-6">
                                <label class="form-label">তারিখ</label>
                                <input type="date" class="form-control" value="2025-08-10" required>
                            </div>
                            <div class="col-6">
                                <label class="form-label">স্ট্যাটাস</label>
                                <select class="form-select">
                                    <option selected>নিশ্চিত</option>
                                    <option>ড্রাফট</option>
                                    <option>নিষ্ক্রিয়</option>
                                </select>
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
    <div class="modal fade" id="deleteFinanceModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h6 class="modal-title">হিসাবপত্র মুছুন</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <p>আপনি কি নিশ্চিত যে আপনি এই হিসাবপত্রটি মুছে ফেলতে চান?</p>
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