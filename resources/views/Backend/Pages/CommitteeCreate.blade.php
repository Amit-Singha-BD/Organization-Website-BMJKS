@extends('Backend.Layout.MasterLayout')

@section('Content')

    <div class="container my-4">
        <div class="card shadow-sm mx-auto" style="width: 50rem;">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">কমিটি তৈরি করুন</h5>
            </div>
            <div class="card-body" style="padding: 1rem 4rem">
                <form action="#" method="POST">
                    <div class="row g-3">

                        <!-- কমিটি বাছাই করুন -->
                        <div class="col-12">
                            <label for="committee_type" class="form-label">কমিটি বাছাই করুন</label>
                            <select name="committee_type" id="committee_type" class="form-select" required>
                                <option value="" selected disabled>একটি নির্বাচন করুন</option>
                                <option value="central">কেন্দ্রীয় কমিটি</option>
                                <option value="branch">শাখা কমিটি</option>
                            </select>
                        </div>

                        <!-- শাখার নাম -->
                        <div class="col-12">
                            <label for="branch_name" class="form-label">শাখার নাম</label>
                            <input type="text" name="branch_name" id="branch_name" class="form-control" required>
                        </div>

                        <!-- দায়িত্বকাল (শুরুর তারিখ) -->
                        <div class="col-12">
                            <label for="start_date" class="form-label">দায়িত্বকাল শুরুর তারিখ</label>
                            <input type="date" name="start_date" id="start_date" class="form-control" required>
                        </div>

                        <!-- বিবরণ -->
                        <div class="col-12">
                            <label for="description" class="form-label">বিবরণ</label>
                            <textarea name="description" id="description" rows="3" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-success">সংরক্ষণ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection