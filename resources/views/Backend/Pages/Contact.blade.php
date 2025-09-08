@extends('Backend.Layout.MasterLayout')

@section('Content')

    <div class="card table-card shadow-sm mt-3">
        <div class="card-header text-white text-center">
            <i class="fas fa-comments"></i> ভিজিটর মেসেজ তালিকা
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr class="text-center">
                            <th>ক্রমিক নং</th>
                            <th>নাম</th>
                            <th>মোবাইল</th>
                            <th>মেসেজ টাইটেল</th>
                            <th>মেসেজ</th>
                            <th>অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td data-label="ক্রমিক নং">১</td>
                            <td data-label="নাম">জনাব রফিকুল ইসলাম</td>
                            <td data-label="মোবাইল">01715-222222</td>
                            <td data-label="মেসেজ টাইটেল">বিনামূল্যে স্বাস্থ্য পরীক্ষা</td>
                            <td data-label="মেসেজ">গ্রামে মাসিক স্বাস্থ্য ক্যাম্প আয়োজন</td>
                            <td data-label="অ্যাকশন">
                                <div class="d-flex flex-row justify-content-center gap-2">
                                    <a class="btn action-btn-success" href="https://mail.google.com/mail/?view=cm&fs=1&to=test@gmail.com&su=Hello&body=Type your message here" target="_blank">
                                        <i class="fa-solid fa-envelope"></i>
                                    </a>
                                    <!-- View Button -->
                                    <button type="button" class="btn action-btn-info" title="মেসেজ দেখুন"
                                        data-bs-toggle="modal" data-bs-target="#viewMessageModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- User Message View Modal -->
    <div class="modal fade" id="viewMessageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h6 class="modal-title">মেসেজের বিস্তারিত</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p><strong>নাম:</strong> জনাব রফিকুল ইসলাম</p>
                    <p><strong>মোবাইল:</strong> 01715-222222</p>
                    <p><strong>মেসেজ টাইটেল:</strong> বিনামূল্যে স্বাস্থ্য পরীক্ষা</p>
                    <p><strong>মেসেজ:</strong> গ্রামে মাসিক স্বাস্থ্য ক্যাম্প আয়োজন</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বন্ধ করুন</button>
                </div>
            </div>
        </div>
    </div>

@endsection