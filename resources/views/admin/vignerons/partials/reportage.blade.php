<!-- Script JS reportage -->
{{--<script src="{{ asset('backend/js/tinymce/jquery.tinymce.min.js') }}"></script>--}}
{{--<script src="{{ asset('backend/js/tinymce/tinymce.min.js') }}"></script>--}}
{{--<script>--}}
    {{--tinymce.init({--}}
        {{--selector: 'textarea',--}}
        {{--height: 280,--}}
        {{--branding: false,--}}
        {{--language : 'fr_FR',--}}
        {{--menubar: false,--}}
        {{--plugins: [--}}
            {{--'advlist autolink lists link image charmap print preview anchor',--}}
            {{--'searchreplace visualblocks code fullscreen',--}}
            {{--'insertdatetime media table contextmenu paste code',--}}
            {{--"media",--}}
            {{--"code"--}}
        {{--],--}}
        {{--toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify ' +--}}
        {{--'| link image | code',--}}
        {{--content_css: [--}}
            {{--'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',--}}
            {{--'//www.tinymce.com/css/codepen.min.css']--}}
    {{--});--}}
{{--</script>--}}
<!-- Script JS reportage  -->


<div class="form-horizontal">
    <div class="form-group">
        <div class="col-xs-2 control-label">
            {!! Form::label('reportage', 'Reportage') !!}
        </div>
        <div class="col-xs-10">
            {!! Form::textarea('reportage', null, [
            'class' => 'form-control',
            ]) !!}
        </div>
    </div>
</div>