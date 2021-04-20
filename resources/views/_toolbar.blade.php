<div class="box-body no-padding">

    <div class="mailbox-controls">
        <div class="btn-group">
            <a href="" type="button" class="btn btn-default btn media-reload" title="Refresh">
                <i class="fa fa-refresh"></i>
            </a>
            <!--                        <a type="button" class="btn btn-default btn file-delete-multiple" title="Delete">
                                        <i class="fa fa-trash-o"></i>
                                    </a>-->
        </div>
        <!-- /.btn-group -->
        <label class="btn btn-primary"{{-- data-toggle="modal" data-target="#uploadModal"--}}>
            <i class="fa fa-upload"></i>&nbsp;&nbsp;{{ trans('admin.upload') }}
            <form action="{{ $url['upload'] }}" method="post" class="file-upload-form" enctype="multipart/form-data" pjax-container>
                <input type="file" name="files[]" class="hidden file-upload" multiple>
                <input type="hidden" name="dir" value="{{ $url['path'] }}" />
                {{ csrf_field() }}
            </form>
        </label>

        <!-- /.btn-group -->
        <a class="btn btn-default btn" data-toggle="modal" data-target="#newFolderModal">
            <i class="fa fa-folder"></i>&nbsp;&nbsp;{{ trans('admin.new_folder') }}
        </a>

        <div class="btn-group">
            <a href="{{ route('dcat.admin.media-index', ['path' => $url['path'], 'view' => 'table']) }}" class="btn btn-default active"><i class="fa fa-list"></i></a>
            <a href="{{ route('dcat.admin.media-index', ['path' => $url['path'], 'view' => 'list']) }}" class="btn btn-default"><i class="fa fa-th"></i></a>
        </div>

        {{--<form action="{{ $url['index'] }}" method="get" pjax-container>--}}
        <div class="input-group input-group-sm pull-right goto-url" style="width: 250px;">
            <input type="text" name="path" class="form-control pull-right" value="{{ '/'.trim($url['path'], '/') }}">

            <div class="input-group-btn">
                <button type="submit" class="btn btn-default btn-sm"><i class="fa fa-arrow-right"></i></button>
            </div>
        </div>
        {{--</form>--}}

    </div>

    <!-- /.mailbox-read-message -->
</div>
