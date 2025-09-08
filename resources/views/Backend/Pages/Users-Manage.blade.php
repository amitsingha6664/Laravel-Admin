@extends('Backend.Layout.MasterLayout')

@section('Content')

    <div class="page-action-buttons">
        <div class="text-end">
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createUserModal">
                <i class="fa-solid fa-plus me-1"></i> নতুন ইউজার
            </button>
        </div>
    </div>

    <div class="card table-card shadow-sm mt-3">
        <div class="card-header text-white text-center">
            <i class="fas fa-user-circle"></i> ইউজার তালিকা
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr class="text-center">
                            <th>ক্রমিক নং</th>
                            <th>ছবি</th>
                            <th>নাম</th>
                            <th>মোবাইল</th>
                            <th>অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td data-label="ক্রমিক নং">১</td>
                            <td data-label="ছবি"><img src="{{ asset('Assets/img/backend-logo.png') }}" alt="প্রোফাইল ছবি" class="rounded-circle" width="45" height="45"></td>
                            <td data-label="নাম">জন ডো</td>
                            <td data-label="মোবাইল">01710000000</td>
                            <td data-label="অ্যাকশন">
                                <div class="d-flex flex-row justify-content-center gap-2">
                                    <button class="btn action-btn-info" data-bs-toggle="modal"
                                        data-bs-target="#viewUserModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn action-btn-success" data-bs-toggle="modal"
                                        data-bs-target="#editUserModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn action-btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteUserModal">
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

    <!-- Create User Modal -->
    <div class="modal fade" id="createUserModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h6 class="modal-title">নতুন ইউজার যোগ করুন</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">নাম</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">ইউজারনেম</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">প্রোফাইল ছবি</label>
                                <input type="file" name="image" class="form-control" accept="image/*">
                            </div>
                            <div class="col-12">
                                <label class="form-label">মোবাইল নম্বর</label>
                                <input type="text" name="phone_no" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">ব্রাঞ্চ</label>
                                <input type="text" name="branch" class="form-control">
                            </div>
                            <div class="col-6">
                                <label class="form-label">পাসওয়ার্ড</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="col-6">
                                <label class="form-label">নিশ্চিত পাসওয়ার্ড</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">বাতিল</button>
                        <button type="submit" name="submit" class="btn btn-success">সংরক্ষণ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- View User Modal -->
    <div class="modal fade" id="viewUserModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h6 class="modal-title">ইউজারের বিস্তারিত</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{ asset('Assets/img/backend-logo.png')}}" alt="প্রোফাইল ছবি" class="rounded-circle mb-3" width="100"
                        height="100">
                    <p><strong>নাম:</strong> জন ডো</p>
                    <p><strong>ইউজারনেম:</strong> johndoe</p>
                    <p><strong>মোবাইল:</strong> 01710000000</p>
                    <p><strong>ব্রাঞ্চ:</strong> Central Branch</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">বন্ধ করুন</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit User Modal -->
    <div class="modal fade" id="editUserModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h6 class="modal-title">ইউজার সম্পাদনা</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- form শুরু -->
                <form enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12 text-center">
                                <img src="{{ asset('Assets/img/user.png') }}" alt="প্রোফাইল ছবি" class="rounded-circle mb-3"
                                    width="100" height="100" id="previewImage">
                                    <h5 class="text-center">name</h5>
                            </div>

                            <div class="col-12">
                                <label class="form-label">পাসওয়ার্ড</label>
                                <input type="password" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">নিশ্চিত পাসওয়ার্ড</label>
                                <input type="password" class="form-control">
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

    <!-- Delete User Modal -->
    <div class="modal fade" id="deleteUserModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h6 class="modal-title">ইউজার মুছুন</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-center">
                    <p>আপনি কি নিশ্চিত যে আপনি এই ইউজারটি মুছে ফেলতে চান?</p>
                    <p class="text-danger">এই কাজটি পূর্বাবস্থায় ফেরানো সম্ভব নয়।</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">বাতিল</button>
                    <button class="btn btn-danger">মুছে ফেলুন</button>
                </div>
            </div>
        </div>
    </div>

@endsection