@extends('layout.master')

@section('client-form')
    
    <div class="col-md-10 mt-5">
        <table id="table_id" class="display" style="width: 100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>FB Review</th>
                    <th>G Review</th>
                    <th>Project</th>
                    <th>Page No.</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>1</td>
                    <td>S A Faroque</td>
                    <td>01915344418</td>
                    <td>faroque.computer@gmail.com</td>
                    <td>
                        89/A 3rd floor, AnarKoli Super Market, 77/1, Shiddeshwari,
                        Dhaka-1217
                    </td>
                    <td>Yes</td>
                    <td>No</td>
                    <td>webnewsdesign.com</td>
                    <td>120-1</td>
                </tr>
                
            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>FB Review</th>
                    <th>G Review</th>
                    <th>Project</th>
                    <th>Page No.</th>
                </tr>
            </tfoot>
        </table>
    </div>
@endsection
