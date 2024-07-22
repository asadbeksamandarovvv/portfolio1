<div class="clear-both">

    @if( !empty(session("succes")))
    <div class="alert alert-success alert-dismissible face in" role="alert">
        {{ session("success")}}
    </div>
@endif

@if( !empty( session("error")))
    <div class="alert alert-danger alert-dismissible face in" role="alert">
        {{session("error")}}
    </div>
@endif
</div>
