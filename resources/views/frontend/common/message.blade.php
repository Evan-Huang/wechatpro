<!-- 成功提示框 -->
@if(\Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong> {{\Session::get('success')}}</strong>
    </div>
@endif
<!-- 失败提示框 -->
@if(\Session::has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong> {{\Session::get('error')}}</strong>
    </div>
@endif